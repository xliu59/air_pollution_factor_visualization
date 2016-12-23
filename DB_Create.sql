#City
DROP TABLE City;
CREATE TABLE City (
    City_Code INT NOT NULL,
    City_name VARCHAR(200) NOT NULL,
    Province VARCHAR(200) NOT NULL,
    Longitude FLOAT,
    Latitude FLOAT,
    PRIMARY KEY (City_Code) 
);

#Pollution
DROP TABLE Pollution;
CREATE TABLE Pollution (
    City_name VARCHAR(200) NOT NULL,
    Time VARCHAR(200) NOT NULL,
    Quality VARCHAR(20),
    Pm2_5 FLOAT,
    Pm2_5_24 FLOAT,
    AQI FLOAT,
    Primary_pollutant VARCHAR(20),
    PRIMARY KEY (City_name) 
);

#Pm2_5_level
DROP TABLE Pm2_5_level;
CREATE TABLE Pm2_5_level (
    Level VARCHAR(20) NOT NULL,
    StartNum FLOAT NOT NULL,
    PRIMARY KEY (Level) 
);

#Wind
DROP TABLE Wind;
CREATE TABLE Wind (
    City_name VARCHAR(200) NOT NULL,
    Time INT NOT NULL,
    Speed FLOAT NOT NULL,
    PRIMARY KEY (City_name) 
);

#Humidity
DROP TABLE Humidity;
CREATE TABLE Humidity (
    City_name VARCHAR(200) NOT NULL,
    Time INT NOT NULL,
    Humidity FLOAT NOT NULL,
    PRIMARY KEY (City_name) 
);

#Precipitation
DROP TABLE Precipitation;
CREATE TABLE Precipitation (
    City_name VARCHAR(200) NOT NULL,
    Time INT NOT NULL,
    Precipitation FLOAT NOT NULL,
    PRIMARY KEY (City_name) 
);

#Air_Pressure
DROP TABLE Air_Pressure;
CREATE TABLE Air_Pressure (
    City_name VARCHAR(200) NOT NULL,
    Time INT NOT NULL,
    Air_Pressure FLOAT NOT NULL,
    PRIMARY KEY (City_name) 
);

#Temperature
DROP TABLE Temperature;
CREATE TABLE Temperature (
    City_name VARCHAR(200) NOT NULL,
    Time INT NOT NULL,
    Temperature FLOAT NOT NULL,
    PRIMARY KEY (City_name) 
);

#City_topography
DROP TABLE City_topography;
CREATE TABLE City_topography (
    City_name VARCHAR(200) NOT NULL,
    Landform VARCHAR(100) NOT NULL,
    PRIMARY KEY (City_name) 
);

#NumberOfCarOwnership
DROP TABLE NumberOfCarOwnership;
CREATE TABLE NumberOfCarOwnership (
    City_name VARCHAR(200) NOT NULL,
    Year VARCHAR(4) NOT NULL,
    CarNumber INT NOT NULL,
    PRIMARY KEY (City_name) 
);

#NumberOfFactories
DROP TABLE NumberOfFactories;
CREATE TABLE NumberOfFactories (
    City_name VARCHAR(200) NOT NULL,
    Year VARCHAR(4) NOT NULL,
    Factories INT NOT NULL,
    PRIMARY KEY (City_name) 
);

#Festival
DROP TABLE Festival;
CREATE TABLE Festival (
    Festival_name VARCHAR(200) NOT NULL,
    Date DATE NOT NULL,
    PRIMARY KEY (Festival_name) 
);



#Insert Data
INSERT INTO City (City_Code, City_name, Province, Longitude, Latitude)
VALUES (1, 'Beijing', 'Beijing', 116.46, 39.92);

INSERT INTO City (City_Code, City_name, Province, Longitude, Latitude)
VALUES (2, 'Shanghai', 'Shanghai', 121.48, 31.22);

INSERT INTO City (City_Code, City_name, Province, Longitude, Latitude)
VALUES (3, 'Wuhan', 'Wuhan', 114.31, 30.52);

INSERT INTO City (City_Code, City_name, Province, Longitude, Latitude)
VALUES (4, 'Hefei', 'Hefei', 117.27, 31.86);

INSERT INTO City (City_Code, City_name, Province, Longitude, Latitude)
VALUES (5, 'Guangzhou', 'Guangzhou', 113.23, 23.16);

INSERT INTO City (City_Code, City_name, Province, Longitude, Latitude)
VALUES (6, 'Shenzhen', 'Shenzhen', 114.07, 22.62);

INSERT INTO City (City_Code, City_name, Province, Longitude, Latitude)
VALUES (7, 'Shamen', 'Shamen', 118.1, 24.46);

INSERT INTO City (City_Code, City_name, Province, Longitude, Latitude)
VALUES (8, 'Chengdu', 'Chengdu', 104.06, 30.67);

INSERT INTO City (City_Code, City_name, Province, Longitude, Latitude)
VALUES (9, 'Zhuhai', 'Zhuhai', 113.52, 22.3);

INSERT INTO City (City_Code, City_name, Province, Longitude, Latitude)
VALUES (10, 'Yuxi', 'Yuxi', 102.52, 24.35);

INSERT INTO City (City_Code, City_name, Province, Longitude, Latitude)
VALUES (11, 'Yiwu', 'Yiwu', 120.06, 29.32);

INSERT INTO City (City_Code, City_name, Province, Longitude, Latitude)
VALUES (12, 'Yantai', 'Yantai', 121.39, 37.52);

INSERT INTO City (City_Code, City_name, Province, Longitude, Latitude)
VALUES (13, 'Yangzhou', 'Yangzhou', 119.42, 32.39);

INSERT INTO City (City_Code, City_name, Province, Longitude, Latitude)
VALUES (14, 'Wuxi', 'Wuxi', 120.29, 31.59);

INSERT INTO City (City_Code, City_name, Province, Longitude, Latitude)
VALUES (15, 'Wuhu', 'Wuhu', 118.38, 31.33);

INSERT INTO City (City_Code, City_name, Province, Longitude, Latitude)
VALUES (16, 'Urumqi', 'Urumqi', 87.68, 43.77);

INSERT INTO City (City_Code, City_name, Province, Longitude, Latitude)
VALUES (17, 'Ulanhot', 'Ulanhot', 122.08, 46.07);

INSERT INTO City (City_Code, City_name, Province, Longitude, Latitude)
VALUES (18, 'Tangshan', 'Tangshan', 118.02, 39.63);

INSERT INTO City (City_Code, City_name, Province, Longitude, Latitude)
VALUES (19, 'Nanning', 'Nanning', 108.33, 22.84);

INSERT INTO City (City_Code, City_name, Province, Longitude, Latitude)
VALUES (20, 'Nanjing', 'Nanjing', 118.78, 32.04);

INSERT INTO City (City_Code, City_name, Province, Longitude, Latitude)
VALUES (21, 'Luoyang', 'Luoyang', 112.44, 34.7);

INSERT INTO City (City_Code, City_name, Province, Longitude, Latitude)
VALUES (22, 'Lasa', 'Lasa', 91.11, 29.97);

INSERT INTO City (City_Code, City_name, Province, Longitude, Latitude)
VALUES (23, 'Lanzhou', 'Lanzhou', 103.73, 36.03);

INSERT INTO City (City_Code, City_name, Province, Longitude, Latitude)
VALUES (24, 'Karamay', 'Karamay', 84.77, 45.59);

INSERT INTO City (City_Code, City_name, Province, Longitude, Latitude)
VALUES (25, 'Jiujiang', 'Jiujiang', 115.97, 29.71);

INSERT INTO City (City_Code, City_name, Province, Longitude, Latitude)
VALUES (26, 'Jilin', 'Jilin', 126.57, 43.87);

INSERT INTO City (City_Code, City_name, Province, Longitude, Latitude)
VALUES (27, 'Hangzhou', 'Hangzhou', 120.19, 30.26);

INSERT INTO City (City_Code, City_name, Province, Longitude, Latitude)
VALUES (28, 'Haikou', 'Haikou', 110.35, 20.02);

INSERT INTO City (City_Code, City_name, Province, Longitude, Latitude)
VALUES (29, 'Changsha', 'Changsha', 113, 28.21);

INSERT INTO City (City_Code, City_name, Province, Longitude, Latitude)
VALUES (30, 'Kunming', 'Kunming', 102.73, 25.04);




#update province
UPDATE City SET Province="Hubei"
WHERE Province = "Wuhan";

UPDATE City SET Province="Anhui"
WHERE Province = "Hefei";

UPDATE City SET Province="Guangdong"
WHERE Province = "Guangzhou";

UPDATE City SET Province="Guangdong"
WHERE Province = "Shenzhen";

UPDATE City SET Province="Fujian"
WHERE Province = "Shamen";

UPDATE City SET Province="Sichuan"
WHERE Province = "Chengdu";

UPDATE City SET Province="Guangdong"
WHERE Province = "Zhuhai";

UPDATE City SET Province="Yunnan"
WHERE Province = "Yuxi";

UPDATE City SET Province="Zhejiang"
WHERE Province = "Yiwu";

UPDATE City SET Province="Shandong"
WHERE Province = "Yantai";

UPDATE City SET Province="Jiangsu"
WHERE Province = "Yangzhou";

UPDATE City SET Province="Jiangsu"
WHERE Province = "Wuxi";

UPDATE City SET Province="Anhui"
WHERE Province = "Wuhu";

UPDATE City SET Province="Xinjiang"
WHERE Province = "Urumqi";

UPDATE City SET Province="Neimenggu"
WHERE Province = "Ulanhot";

UPDATE City SET Province="Hebei"
WHERE Province = "Tangshan";

UPDATE City SET Province="Guangxi"
WHERE Province = "Nanning";

UPDATE City SET Province="Jiangsu"
WHERE Province = "Nanjing";

UPDATE City SET Province="Henan"
WHERE Province = "Luoyang";

UPDATE City SET Province="Xizang"
WHERE Province = "Lasa";

UPDATE City SET Province="Gansu"
WHERE Province = "Lanzhou";

UPDATE City SET Province="Xinjiang"
WHERE Province = "Karamay";

UPDATE City SET Province="Jiangxi"
WHERE Province = "Jiujiang";

UPDATE City SET Province="Zhejiang"
WHERE Province = "Hangzhou";

UPDATE City SET Province="Hainan"
WHERE Province = "Haikou";

UPDATE City SET Province="Hunan"
WHERE Province = "Changsha";

UPDATE City SET Province="Yunnan"
WHERE Province = "Kunming";

ALTER TABLE City ADD City_name_cn VARCHAR(200);

UPDATE City SET City_name_cn="北京"
WHERE City_name = "Beijing";

UPDATE City SET City_name_cn="上海"
WHERE City_name = "Shanghai";

UPDATE City SET City_name_cn="武汉"
WHERE City_name = "Wuhan";

UPDATE City SET City_name_cn="合肥"
WHERE City_name = "Hefei";

UPDATE City SET City_name_cn="广州"
WHERE City_name = "Guangzhou";

UPDATE City SET City_name_cn="深圳"
WHERE City_name = "Shenzhen";

UPDATE City SET City_name_cn="厦门"
WHERE City_name = "Shamen";

UPDATE City SET City_name_cn="成都"
WHERE City_name = "Chengdu";

UPDATE City SET City_name_cn="珠海"
WHERE City_name = "Zhuhai";

UPDATE City SET City_name_cn="玉溪"
WHERE City_name = "Yuxi";

UPDATE City SET City_name_cn="义乌"
WHERE City_name = "Yiwu";

UPDATE City SET City_name_cn="烟台"
WHERE City_name = "Yantai";

UPDATE City SET City_name_cn="扬州"
WHERE City_name = "Yangzhou";

UPDATE City SET City_name_cn="无锡"
WHERE City_name = "Wuxi";

UPDATE City SET City_name_cn="芜湖"
WHERE City_name = "Wuhu";

UPDATE City SET City_name_cn="乌鲁木齐"
WHERE City_name = "Urumqi";

UPDATE City SET City_name_cn="乌兰浩特"
WHERE City_name = "Ulanhot";

UPDATE City SET City_name_cn="唐山"
WHERE City_name = "Tangshan";

UPDATE City SET City_name_cn="南宁"
WHERE City_name = "Nanning";

UPDATE City SET City_name_cn="南京"
WHERE City_name = "Nanjing";

UPDATE City SET City_name_cn="洛阳"
WHERE City_name = "Luoyang";

UPDATE City SET City_name_cn="拉萨"
WHERE City_name = "Lasa";

UPDATE City SET City_name_cn="兰州"
WHERE City_name = "Lanzhou";

UPDATE City SET City_name_cn="克拉玛依"
WHERE City_name = "Karamay";

UPDATE City SET City_name_cn="吉林"
WHERE City_name = "Jilin";

UPDATE City SET City_name_cn="九江"
WHERE City_name = "Jiujiang";

UPDATE City SET City_name_cn="杭州"
WHERE City_name = "Hangzhou";

UPDATE City SET City_name_cn="海口"
WHERE City_name = "Haikou";

UPDATE City SET City_name_cn="长沙"
WHERE City_name = "Changsha";

UPDATE City SET City_name_cn="昆明"
WHERE City_name = "Kunming";