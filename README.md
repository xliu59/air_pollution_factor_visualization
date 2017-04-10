# China Air Pollution Data Monitoring Web System

## Contributer: 
Xiaoxiao Liu	 (xliu91@jhu.edu) 

Da Chen    (dachen78@jhu.edu)

## Domain:
Through this database, we provide real-time data and comparisons between different attributes of air quality for different cities in China. The purpose is to demonstrate regional air pollution statistic data and potential major causes for different cities.

## Areas of specialization

1. REAL-TIME DATA
In our project we use real-time data instead of solely static dataset to make our graph timeliness, always updated. The python scripts we created is responsible for making http request, retrieving data, parsing and interacting with our MySQL database. 

2. DATA VISUALIZATION
We use ECharts API to create fine, animated, interactive charts, graphs and diagrams to clearly demonstrate the trend of data or comparison of multiple attributes. 

## Data source

Our data source consists two parts: 

#### 1. From public data APIs, examples are hourly-requested whether & pollution data, last-hour pm2.5 index, city air pollution level:

* City Air Quality API (Real-time synchronization):  
<http://pm25.in/>
* City Weather API (Real-time synchronization):   
<http://openweathermap.org>
* Festival API:  
<https://www.timeanddate.com/holidays/>

	For these data, we wrote data-retrieval python scripts to request and process data. Github link:
<https://github.com/xliu59/air_pollution/tree/master/air_pollution/data_retrieve>

#### 2. Dataset downloaded from internet, examples include (City_Chinese_name, City_English_name, City_Longitude_Latitude):

* City locations:  
<http://wenku.baidu.com/view/31396223482fb4daa58d4b61.html>  
<http://blog.csdn.net/a497785609/article/details/6405719>
* City Names:  
<http://m.sodocs.net/doc/dc5af962b90d6c85ec3ac69a-27.html>
* City -landform:  
<http://data.stats.gov.cn/search.htm?s=%E5%9C%B0%E5%BD%A2>
* City-automobile ownership:  
<http://data.stats.gov.cn/easyquery.htm?cn=C01&zb=A0G0I&sj=2014>
* City-factory amount:  
<http://data.stats.gov.cn/search.htm?s=%E5%B7%A5%E5%8E%82%E6%95%B0%E9%87%8F>

	For these data, we downloaded and use tools like Excel and Sublime to manually format them, then import to our database corresponding tables


## To view our results:
Our design and codes are all under git SVN control, 
Github link: https://github.com/xliu59/air_pollution 
	

## Run our code

We use LAMP architecture. To run our project:  
1. Clone our repo <https://github.com/xliu59/air_pollution.git> to your local webserver root and  
2. Change the database params to yours in conf.php  
3. 
3. Run CreateDB.sql to create schema and populate your Mysql Database.  
4. Open \<your\_root\>/air_pollution/index.html  



## Limitations
This project is still ongoing. We have finished real-time data retrieval, stored procedures, front-end data visualization, and some back-end logics to handle request. We are still working on the server side and currently it only shows data that is pre-selected. The sidebar for selecting dates and cities is to be implemented. We are confident that when finished, this web project will be useful, accurate and stable.


## Project Output (some screenshots)

![home page](./screeshot/homepage.png "home page")

![screen_shot](https://github.com/xliu59/air_pollution/screeshot/Picture1.png "screen_shot")

![screen_shot](https://github.com/xliu59/air_pollution/screeshot/Picture2.png "screen_shot")

![screen_shot](https://github.com/xliu59/air_pollution/screeshot/Picture3.png "screen_shot")

![screen_shot](https://github.com/xliu59/air_pollution/screeshot/Picture4.png "screen_shot")

![screen_shot](https://github.com/xliu59/air_pollution/screeshot/Picture5.png "screen_shot")

![screen_shot](https://github.com/xliu59/air_pollution/screeshot/Picture6.png "screen_shot")

![screen_shot](https://github.com/xliu59/air_pollution/screeshot/Picture7.png "screen_shot")

![screen_shot](https://github.com/xliu59/air_pollution/screeshot/Picture8.png "screen_shot")



