# -*- coding: utf-8 -*-
import requests
import json
import MySQLdb

#rrt = '[{"aqi":25,"area":"北京","pm2_5":17,"pm2_5_24h":14,"position_name":"万寿西宫","primary_pollutant":null,"quality":"优","station_code":"1001A","time_point":"2016-12-23T12:00:00Z"},{"aqi":56,"area":"北京","pm2_5":34,"pm2_5_24h":12,"position_name":"定陵","primary_pollutant":"颗粒物(PM10)","quality":"良","station_code":"1002A","time_point":"2016-12-23T12:00:00Z"},{"aqi":46,"area":"北京","pm2_5":32,"pm2_5_24h":17,"position_name":"东四","primary_pollutant":null,"quality":"优","station_code":"1003A","time_point":"2016-12-23T12:00:00Z"},{"aqi":22,"area":"北京","pm2_5":15,"pm2_5_24h":13,"position_name":"天坛","primary_pollutant":null,"quality":"优","station_code":"1004A","time_point":"2016-12-23T12:00:00Z"},{"aqi":19,"area":"北京","pm2_5":13,"pm2_5_24h":13,"position_name":"农展馆","primary_pollutant":null,"quality":"优","station_code":"1005A","time_point":"2016-12-23T12:00:00Z"},{"aqi":32,"area":"北京","pm2_5":22,"pm2_5_24h":16,"position_name":"官园","primary_pollutant":null,"quality":"优","station_code":"1006A","time_point":"2016-12-23T12:00:00Z"},{"aqi":32,"area":"北京","pm2_5":22,"pm2_5_24h":13,"position_name":"海淀区万柳","primary_pollutant":null,"quality":"优","station_code":"1007A","time_point":"2016-12-23T12:00:00Z"},{"aqi":0,"area":"北京","pm2_5":0,"pm2_5_24h":0,"position_name":"顺义新城","primary_pollutant":null,"quality":null,"station_code":"1008A","time_point":"2016-12-23T12:00:00Z"},{"aqi":20,"area":"北京","pm2_5":9,"pm2_5_24h":14,"position_name":"怀柔镇","primary_pollutant":null,"quality":"优","station_code":"1009A","time_point":"2016-12-23T12:00:00Z"},{"aqi":30,"area":"北京","pm2_5":21,"pm2_5_24h":15,"position_name":"昌平镇","primary_pollutant":null,"quality":"优","station_code":"1010A","time_point":"2016-12-23T12:00:00Z"},{"aqi":19,"area":"北京","pm2_5":13,"pm2_5_24h":14,"position_name":"奥体中心","primary_pollutant":null,"quality":"优","station_code":"1011A","time_point":"2016-12-23T12:00:00Z"},{"aqi":35,"area":"北京","pm2_5":24,"pm2_5_24h":17,"position_name":"古城","primary_pollutant":null,"quality":"优","station_code":"1012A","time_point":"2016-12-23T12:00:00Z"},{"aqi":36,"area":"北京","pm2_5":20,"pm2_5_24h":14,"position_name":null,"primary_pollutant":"","quality":"优","station_code":null,"time_point":"2016-12-23T12:00:00Z"}]'
rrt ='[{"aqi":25,"area":"青岛","pm2_5":17,"pm2_5_24h":14,"position_name":"万寿西宫","primary_pollutant":null,"quality":"优","station_code":"1001A","time_point":"2016-12-23T12:00:00Z"}, {"aqi":36,"area":" 青岛","pm2_5":20,"pm2_5_24h":14,"position_name":null,"primary_pollutant":"","quality":"优","station_code":null,"time_point":"2016-12-23T12:00:00Z"}, {"aqi":46,"area":"北京","pm2_5":32,"pm2_5_24h":17,"position_name":"东四","primary_pollutant":null,"quality":"优","station_code":"1003A","time_point":"2016-12-23T12:00:00Z"}, {"aqi":0,"area":"顺义","pm2_5":0,"pm2_5_24h":0,"position_name":"顺义新城","primary_pollutant":null,"quality":null,"station_code":"1008A","time_point":"2016-12-23T12:00:00Z"}]'

def getPData():

	#url = 'http://www.pm25.in/api/querys/pm2_5.json?city=' + cityName + '&token=5j1znBVAsnSf5xQyNQyq'
	#url = 'http://www.pm25.in/api/querys/pm2_5.json?city=' + cityName + '&token=5j1znBVAsnSf5xQyNQyq'

	# GET
	#r = requests.get(url)
	#rt = json.loads(r.text)
	rt = json.loads(rrt)

	conn = MySQLdb.connect(host= "dbase.cs.jhu.edu",
	                  user="xliu91",
	                  passwd="kzpahbbunq",
	                  db="test")

	conn.set_character_set('utf8')

	x = conn.cursor()

	x.execute('SET NAMES utf8;')
	x.execute('SET CHARACTER SET utf8;')
	x.execute('SET character_set_connection=utf8;')

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
	   				x.execute("INSERT INTO Pollution (City_name, Time, Quality, Pm2_5, Pm2_5_24, AQI, Primary_pollutant) VALUES ('" + rt[i]['area'] + "', '" + rt[i]['time_point'] + "', '" +  rt[i]['quality'] + "', " + str(rt[i]['pm2_5']) + ", " + str(rt[i]['pm2_5_24h']) + ", " + str(rt[i]['aqi']) + ", '" + rt[i]['primary_pollutant'] + "')")
	   				print('Completed!')
	   				#break
	   except KeyError as E1:
	   		print('KeyError!:' + str(E1))
	   		
	   conn.commit()
	   print('Successfully insert data!')
	except Exception as e:
	   conn.rollback()
	   print('Insert data Fail:' + str(e))

	conn.close()

