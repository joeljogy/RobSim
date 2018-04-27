import json
import random
import os
import numpy as np
import networkx as nx
from copy import copy
from pprint import pprint
from urllib import urlretrieve
from zipfile import ZipFile

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


                #consider only building geojson file from data folder
                fname_path = "data/{}_{}_{}.geojson".format(city_name, country_name, category_name)



                return fname_path
        


        def get_roads(self, fname, class_name,category):
                number_of_roads=0
                json_data = None
                osm_ids=[]
                country_name=((((fname.partition('_'))[2]).partition('_'))[0]).title()
                with open(fname) as f:    
                        json_data = json.load(f)

                geojson_data = {"type": "FeatureCollection", "features": []}
                random_weight=[0.2,0.4,0.5,0.6,0.8,1.0]

                for i, item in enumerate(json_data['features']):
                        # using In is better then using ==, you might encounter problems with non well formed strings eg: place =" Qatar University" and in the field is "Qatar University, Doha" 
                                
                                        
                        if (item['properties']['class'] == class_name)and (item['properties']['type'] == 'motorway'):
                                # adding category field to geojson object
                                item['properties']['category'] = 'Roads'
                                item['properties']['country'] = country_name
                                item['properties']['weight'] = random.choice(random_weight)
                                item['properties']['visibility'] = 1 #Visibility = 0 ----> Disabled and Visibility = 1 ----> Enabled
                                item['properties']['network_id']=item['properties']['osm_id']
                                item['properties']['degree'] = 0.0
                                del item['properties']['osm_id']
                                geojson_data["features"].append(item)
                                osm_ids.append(item['properties']['network_id'])
                                number_of_roads+=1

                
                geojson_data['roads_count']=number_of_roads
                return geojson_data

        def export_data(self, json_data, output):
                # write file into the disk
                with open(output, 'w') as outfile:
                        json.dump(json_data, outfile)

        def get_nodes(self,line_data):
                number_of_nodes=0
                node_ids=[]
                node_coordinates=[]
                json_data = None
                def remove_duplicates(l):
                    return list(set(l))
                with open(line_data) as f:    
                        json_data = json.load(f)
                geojson_data2 = {"type": "FeatureCollection", "features": []}
                for item1 in (json_data['features']):
                        
                        for m in item1['geometry']['coordinates']:
                                a=copy(item1)
                                edge=[]
                                count=0
                                for item2 in (json_data['features']):
                                        if m in item2['geometry']['coordinates']:
                                                node=copy(m)
                                                count+=1
                                                edge.append(item2['properties']['network_id'])
                                                edge.append(item1['properties']['network_id'])
                                if count>0 and (m not in node_coordinates):
                                        a['geometry']['type']='Point'
                                        a['geometry']['coordinates']=copy(node)
                                        edge2=remove_duplicates(edge)
                                        country_name = a['properties']['country']
                                        del a['properties']
                                        a['properties']={}
                                        a['properties']['name']="Undefined"
                                        a['properties']['edges']=copy(edge2)
                                        a['properties']['weight']=0
                                        a['properties']['visibility'] = 1 #Visibility = 0 ----> Disabled and Visibility = 1 ----> Enabled
                                        a['properties']['country']=copy(country_name)
                                        a['properties']['network_id']=copy(number_of_nodes)*(-1)
                                        a['properties']['category']='Node'
                                        node_ids.append(number_of_nodes)
                                        node_coordinates.append(m)
                                
                                                            
                                        geojson_data2["features"].append(a)
                                        number_of_nodes+=1

                                            
                geojson_data2['nodes_count']=number_of_nodes       
                with open('node.json', 'w') as outfile:
                        json.dump(geojson_data2, outfile)

        def node_to_node_graph(self, data_file):
            G=nx.Graph()
            
            with open(data_file) as f:    
                    json_data = json.load(f)
            number_of_nodes = json_data['nodes_count']
            #adding nodes
            G.add_nodes_from(xrange(number_of_nodes))
            storage=[]                        
            for item1 in (json_data['features']):

                    for m in item1['properties']['edges']:
                            for item2 in (json_data['features']):
                                    temp=(item1['properties']['network_id'],item2['properties']['network_id'])
                                    if (m in item2['properties']['edges']) and (item1!=item2) and (temp not in storage):
                                        G.add_edge(item1['properties']['network_id'],item2['properties']['network_id'])
                                        #print m,(temp)
                                        storage.append(temp)
                                        temp_list = list(temp)
                                        temp_list.reverse()
                                        temp_tup = tuple(temp_list)
                                        storage.append(temp_tup)
            nx.draw_networkx(G)
            A = nx.degree_centrality(G)
            with open(data_file) as f:    
                json_data = json.load(f)
            geojson_data2 = {"type": "FeatureCollection", "features": []}
            for i, item in enumerate(json_data['features']):
                    network_id = item['properties']['network_id']
                    print A[network_id]
                    item['properties']['degree'] = A[network_id]
                    geojson_data2["features"].append(item)


            geojson_data2['nodes_count']=number_of_nodes
                    
            with open('node.json', 'w') as outfile:
                json.dump(geojson_data2, outfile)
                                



              

        def modify_metrostations(self, fname):
                number_of_stations=0
                json_data = None
                metro_ids=[]
                country_name= 'Qatar'
                with open(fname) as f:    
                        json_data = json.load(f)

                geojson_data4 = {"type": "FeatureCollection", "features": []}

                for i, item in enumerate(json_data['features']):

                        item['properties']['category'] = 'Metro'
                        item['properties']['country'] = country_name
                        item['properties']['weight']=0
                        item['properties']['visibility'] = 1 #Visibility = 0 ----> Disabled and Visibility = 1 ----> Enabled
                        item['properties']['network_id']=item['properties']['id']
                        item['properties']['degree'] = 0
                        geojson_data4["features"].append(item)
                        metro_ids.append(item['properties']['network_id'])
                        number_of_stations+=1

                
                geojson_data4['stations_count']=number_of_stations
                with open('metro_stations.json', 'w') as outfile:
                        json.dump(geojson_data4, outfile)


        def modify_busstops(self, fname):
                number_of_stops=0
                json_data = None
                stop_ids=[]
                country_name= 'Qatar'
                with open(fname) as f:    
                        json_data = json.load(f)

                geojson_data5 = {"type": "FeatureCollection", "features": []}

                for i, item in enumerate(json_data['features']):

                        item['properties']['category'] = 'Bus'
                        item['properties']['name'] = item['properties']['stop_name']
                        item['properties']['country'] = country_name
                        item['properties']['weight']=0
                        item['properties']['visibility'] = 1 #Visibility = 0 ----> Disabled and Visibility = 1 ----> Enabled
                        item['properties']['network_id']=item['properties']['stop_id']
                        item['properties']['degree'] = 0
                        geojson_data5["features"].append(item)
                        stop_ids.append(item['properties']['network_id'])
                        number_of_stops+=1

                
                geojson_data5['stops_count']=number_of_stops
                with open('bus_stops.json', 'w') as outfile:
                        json.dump(geojson_data5, outfile)


        def combine_data(self,line_data,node_data,metro_data,bus_data):
                geojson_data3 = {"type": "FeatureCollection", "features": []}
                
                with open(line_data) as l:    
                        json_data = json.load(l)       
                for i, item in enumerate(json_data['features']):
                        geojson_data3["features"].append(item)
                geojson_data3['roads_count']=json_data['roads_count']
                
                with open(node_data) as n:    
                        json_data = json.load(n)
                for i, item in enumerate(json_data['features']):
                        geojson_data3["features"].append(item)
                geojson_data3['nodes_count']=json_data['nodes_count']

                with open(metro_data) as n:    
                        json_data = json.load(n)
                for i, item in enumerate(json_data['features']):
                        geojson_data3["features"].append(item)
                geojson_data3['stations_count']=json_data['stations_count']

                with open(bus_data) as n:    
                        json_data = json.load(n)
                for i, item in enumerate(json_data['features']):
                        geojson_data3["features"].append(item)
                geojson_data3['stops_count']=json_data['stops_count']
                
                with open('complete_data.json', 'w') as outfile:
                        json.dump(geojson_data3, outfile)
                        
                #os.remove('line.json')
                #os.remove('node.json')



if __name__ == "__main__":
        
        # class instance
        geo_data_parser = GeoDataParser()

        # downloading and parsing data
        fname_path = geo_data_parser.get_data(link= None, city_name= "doha", country_name= "qatar", category_name= "roads")

        # searching for a place "place" category "category"
        geojson_data = geo_data_parser.get_roads(fname_path, class_name= "highway",category="LineString")

        # export file in geojson format
        geo_data_parser.export_data(geojson_data, "line.json")

        # search for all the nodes in the lines file 
        geo_data_parser.get_nodes(line_data="line.json")

        # add degree centrality for all nodes 
        geo_data_parser.node_to_node_graph(data_file="node.json")

        # add id and country name to the metro_stations file
        geo_data_parser.modify_metrostations(fname="metro_stations.json")
        
        # add id and country name to the bus_stops file
        geo_data_parser.modify_busstops(fname="bus_stops.json")

        # combine the nodes and lines files into a single json file
        geo_data_parser.combine_data(line_data="line.json",node_data="node.json",metro_data="metro_stations.json",bus_data="bus_stops.json")

        
