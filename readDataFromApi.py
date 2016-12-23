import requests
import json
import MySQLdb

def getData(cityName):

	url = 'http://api.openweathermap.org/data/2.5/weather?q=' + cityName + '&APPID=65c91afe4b49c9a497e097873c0548db'

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
	   		x.execute("INSERT INTO Temperature VALUES ('" + cityName + "', " + str(rt['dt']) + ", " +  str(rt['main']['temp']) + ")")
	   		#x.execute("""INSERT INTO Temperature VALUES ('%s',%d,%f)""", (cityName, rt['dt'], rt['main']['temp']))
	   		print('Step 1 completed!')
	   except KeyError:
	   		print('KeyError!')

	   try:
	   		x.execute("INSERT INTO Air_Pressure VALUES ('" + cityName + "', " + str(rt['dt']) + ", " +  str(rt['main']['pressure']) + ")")
	   		print('Step 2 completed!')
	   except KeyError:
	   		print('KeyError!')

	   try:
	   		x.execute("INSERT INTO Humidity VALUES ('" + cityName + "', " + str(rt['dt']) + ", " +  str(rt['main']['humidity']) + ")")
	   		print('Step 3 completed!')
	   except KeyError:
	   		print('KeyError!')

	   try:
	   		x.execute("INSERT INTO Wind VALUES ('" + cityName + "', " + str(rt['dt']) + ", " +  str(rt['wind']['speed']) + ")")
	   		print('Step 4 completed!')
	   except KeyError:
	   		print('KeyError!')

	   try:		
	   		x.execute("INSERT INTO Precipitation VALUES ('" + cityName + "', " + str(rt['dt']) + ", " +  str(rt['rain']['3h']) + ")")
	   		print('Step 5 completed!')
	   except KeyError:
	   		print('KeyError!')
	   		
	   conn.commit()
	   print('Successfully insert data!')
	except:
	   conn.rollback()
	   print('Insert data Fail')

	conn.close()