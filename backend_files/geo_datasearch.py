import json 
from pprint import pprint
from urllib import urlretrieve
from zipfile import ZipFile
import os
import random

class GeoDataParser():
        """docstring for GeoDataParser"""
        def __init__(self, city= None):
                self.city = city

        def get_data(self, link, city_name, country_name, category_name):
                # download mapzen extract zip file for specific country
                urlretrieve("https://s3.amazonaws.com/metro-extracts.mapzen.com/"+city_name+"_"+country_name+".imposm-geojson.zip", "data.zip")

                # extract all files from the zip file to folder name data
                with ZipFile("data.zip") as z:  
                        z.extractall("data//")

                # remove zip file from directory
                os.remove("data.zip")


                #consider only category names - building/amenities/roads geojson file from data folder
                fname_path = "data/{}_{}_{}.geojson".format(city_name, country_name, category_name)



                return fname_path

        def search_place(self, fname, place,category):
                json_data = None
                with open(fname) as f:    
                        json_data = json.load(f)

                geojson_data = {"type": "FeatureCollection", "features": []}
                values=[0,0.1,0.2,0.3,0.4,0.5,0.6,0.7,0.8,0.9,1.0]

                for i, item in enumerate(json_data['features']):
                        
                        # using In is better then using ==, you might encounter problems with non well formed strings eg: place =" Qatar University" and in the field is "Qatar University, Doha" 
                                if item['properties']['name'] is not None:
                                        if type(item['properties']['name']) is not "unicode":
                                
                                                if place.lower() in item['properties']['name'].lower():
                                                        # adding category field & weight of segment to geojson object
                                                        item['properties']['category'] = item['geometry']['type']
                                                        item['properties']['weight']=random.choice(values)
                                                        geojson_data["features"].append(item)
                                                        pprint(item)
               
                return geojson_data


                
        def export_data(self, json_data, output):
                # write file into the disk
                with open(output, 'w') as outfile:
                        json.dump(json_data, outfile)




if __name__ == "__main__":

        # class instance
        geo_data_parser = GeoDataParser()

        # downloading and parsing data
        fname_path = geo_data_parser.get_data(link= None, city_name= "doha", country_name= "qatar", category_name= "buildings")

        # searching for a place "place" category "category"
        geojson_data = geo_data_parser.search_place(fname_path, place= "Q Mall",category="Polygon")

        # export file in geojson format
        geo_data_parser.export_data(geojson_data, "filtered_data.json")

        # search for all the nodes in the filtered data and store in a filename nodes
        geo_data_parser.get_nodes(fil_data="filtered_data.json",nodes_outfile="nodes.json")
