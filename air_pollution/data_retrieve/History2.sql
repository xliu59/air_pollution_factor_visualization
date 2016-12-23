delimiter //
DROP PROCEDURE IF EXISTS History2 //
CREATE PROCEDURE History2 (IN time_start VARCHAR(200), IN time_end VARCHAR(200), IN city_name VARCHAR(200))
    BEGIN
        SELECT DISTINCT Quality, COUNT(*) AS num FROM Pollution, City,
            WHERE Pollution.City_name = City.City_name AND Pollution.Time > time_start AND Pollution.Time < time_end AND City.City_name = city_name
            GROUP BY Quality
            ORDER BY Quality;
    END//
delimiter ;