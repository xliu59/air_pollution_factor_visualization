# -*- coding: utf-8 -*-

import requests
import json
import MySQLdb

def getPData(cityName):
	print("123")
	#return

#	url = 'http://www.pm25.in/api/querys/pm2_5.json?city=' + cityName + '&token=5j1znBVAsnSf5xQyNQyq'#

	# GET
	#r = requests.get(url)
	#rt = json.loads(r.text)

#	conn = MySQLdb.connect(host= "dbase.cs.jhu.edu",
#	                  user="xliu91",
#	                  passwd="kzpahbbunq",
#	                  db="test")
#	x = conn.cursor()

	r = "{'pm2_5_24h': 14, 'position_name': '万寿西宫', 'time_point': '2016-12-23T12:00:00Z', 'quality': '优', " \
		"'station_code': '1001A', 'pm2_5': 17, 'area': '北京', 'primary_pollutant': None, 'aqi': 25}"
	rt = json.loads(r)
	print("111")
	try:
	   print('Before Insert!')
	   try:		
	   		for i in range(0, len(rt)):
	   			print('Test')
	   			if rt[i]['pm2_5_24h'] is not None and rt[i]['primary_pollutant'] is not None:
	   				print ('1 element:', rt[i]['time_point'])
	   				print ('2 element:', rt[i]['quality'])
	   				print ('3 element:', rt[i]['pm2_5'])
	   				print ('4 element:', rt[i]['pm2_5_24h'])
	   				print ('5 element:', rt[i]['aqi'])
	   				print ('6 element:', rt[i]['primary_pollutant'])
	   				x.execute("INSERT INTO Pollution (City_name, Time, Quality, Pm2_5, Pm2_5_24,AQI,Primary_pollutant) "
							  "VALUES ('" + cityName + "', '" +
							  rt[i]['time_point'] + "', '" +
							  rt[i]['quality'] + "', " +
							  str(rt[i]['pm2_5']) + ", " +
							  str(rt[i]['pm2_5_24h']) + ", " +
							  str(rt[i]['aqi']) + ", '" +
							  rt[i]['primary_pollutant'] + "')")
	   				print('Completed!')
	   				break
	   except Exception as e:
		   print(str(e))
		   print('KeyError!')
	   		
	   conn.commit()
	   print('Successfully insert data!')
	except Exception as ee:
		print(str(e))
		conn.rollback()
		print('Insert data Fail')

	conn.close()





