import pymysql
import json

connection = pymysql.connect(host = 'localhost', user = 'root', password = 'root', db = 'robsim')
with open('complete_data.json') as f:    
    json_data = json.load(f)
try:
    with connection.cursor() as cursor:
                                
        for i, item in enumerate(json_data['features']):
                
            network_id = item['properties']['network_id']
            name = item['properties']['name']
            type_of_network = item['properties']['category']
            country_name = item['properties']['country']
            weight = item['properties']['weight']
            sql = "INSERT INTO `all_data` VALUES (%s, %s, %s, %s, %s, %s)"
            cursor.execute(sql, (network_id,name,type_of_network,country_name,'Enabled',weight))
            connection.commit()
finally:
    connection.close()


