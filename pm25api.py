import requests
import json
import MySQLdb

def getPData(cityName):

	url = 'http://www.pm25.in/api/querys/pm2_5.json?city=' + cityName + '&token=5j1znBVAsnSf5xQyNQyq'

	# GET
	r = requests.get(url)
	rt = json.loads(r.text)

	conn = MySQLdb.connect(host= "dbase.cs.jhu.edu",
	                  user="xliu91",
	                  passwd="kzpahbbunq",
	                  db="test")
	x = conn.cursor()

	try:
	   print('Before Insert!')
	   try:		
	   		for i in range(0,len(rt)):
	   			print('Test')
	   			if rt[i]['pm2_5_24h'] is not None and rt[i]['primary_pollutant'] is not None:
	   				print ('1 element:', rt[i]['time_point'])
	   				print ('2 element:', rt[i]['quality'])
	   				print ('3 element:', rt[i]['pm2_5'])
	   				print ('4 element:', rt[i]['pm2_5_24h'])
	   				print ('5 element:', rt[i]['aqi'])
	   				print ('6 element:', rt[i]['primary_pollutant'])
	   				x.execute("INSERT INTO Pollution VALUES ('" + cityName + "', '" + rt[i]['time_point'] + "', '" +  rt[i]['quality'] + "', " + str(rt[i]['pm2_5']) + ", " + str(rt[i]['pm2_5_24h']) + ", " + str(rt[i]['aqi']) + ", '" + rt[i]['primary_pollutant'] + "')")
	   				print('Completed!')
	   				break
	   except KeyError:
	   		print('KeyError!')
	   		
	   conn.commit()
	   print('Successfully insert data!')
	except:
	   conn.rollback()
	   print('Insert data Fail')

	conn.close()





