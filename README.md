# RobSim - A dashboard for Robustness Analysis of Transportation Networks.

This is an internship project, developed by @el3thba & @joeljogy.


## Code

    + -RobSim: Robustness Simulator |
    + -Front - End: Map - centered Dashboard |
    + -Back - End: Data Processing scripts


## Technologies


### FrontEnd
    - Leaflet.js:
	 http://leafletjs.com/examples.html
    -BootStrap: 
	http://getbootstrap.com/


### BackEnd 
    - OpenStreetMap:
	https://www.openstreetmap.org/ 
    -Mapzen:
	https://mapzen.com/ - Use Metro Extracts Option and choose on the required city. 
    -Python(2.7): 
	Modules required for installation: 1) pymysql - To create database and upload to a php server
			  	           2) networkx - To create the graph network
			  		   3) matplotlib - To plot the graph created using networkx
		         		   4) numpy - To convert networkx obtained graph into a matrix/array
	All other modules required are pre-installed when you install Python 2.7.x 
    -WAMP Server:
	For the purpose of storing databases. Use phpmyadmin in your localhost page and create a database named Robsim.db and a table named all_data. After which you 
	can run create_database.py to insert values into your table. 

## Note 
       Steps to get the data: 
	1) First go to Mapzen.com. Search for a city name and obtain it's country name. 
	2) Open geo_dataparser.py and supply these names into the function geo_data_parser.get_data() in that file.
	3) Run create_database.py after creating database and table as mentioned above in phpmyadmin. 
	3) Copy the newly written files named, 'node.json', 'line.json' and other .json to ./assets/data/ folder from your current folder. 
	4) Open localhost/robsim_project/name_of_file.php - Supply name_of_file with 'dashboard' or 'table' or 'notifications'
  


##Support

If you are having issues, please contact Noor / Joel via email or submit a pull request.

Joel - joeljogy07@gmail.com


##License

The project is licensed under the MIT License.
