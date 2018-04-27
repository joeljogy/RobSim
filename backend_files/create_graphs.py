import json
import numpy as np
from pprint import pprint
import networkx as nx
import matplotlib.pyplot as plt


class DesignGraphs():
        """docstring for DesignGraphs"""
        def __init__(self):
            None
        
        def node_to_node_graph(self, data_file):
            G=nx.Graph()
            
            with open(data_file) as f:    
                    json_data = json.load(f)

            #adding nodes
            G.add_nodes_from(xrange(json_data['nodes_count']))
            storage=[]                        
            for item1 in (json_data['features']):

                    for m in item1['properties']['edges']:
                            for item2 in (json_data['features']):
                                    temp=(item1['properties']['network_id'],item2['properties']['network_id'])
                                    if (m in item2['properties']['edges']) and (item1!=item2) and (temp not in storage):
                                        G.add_edge(temp)
                                        #print m,(temp)
                                        storage.append(temp)
                                        temp_list = list(temp)
                                        temp_list.reverse()
                                        temp_tup = tuple(temp_list)
                                        storage.append(temp_tup)
            nx.draw_networkx(G)
            A = degree_centrality(G)
            print A


if __name__ == "__main__":
        
        # class instance
        create_graph = DesignGraphs()

        # creating a table with all the nodes and roads networks
        create_graph.node_to_node_graph(data_file="node.json")



