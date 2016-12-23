delimiter //
DROP PROCEDURE IF EXISTS ShowCurrentAirPollution //
CREATE PROCEDURE ShowCurrentAirPollution(IN cityname varchar(200))
    BEGIN
        SELECT Pm2_5, AQI, Quality FROM Pollution WHERE City_name = cityname ORDER BY Time LIMIT 1;
    END//
delimiter ;