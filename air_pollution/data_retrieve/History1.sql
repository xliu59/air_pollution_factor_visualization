delimiter //
DROP PROCEDURE IF EXISTS History1 //
CREATE PROCEDURE History1 (IN level_start VARCHAR(200), IN level_end VARCHAR(200), IN time_start VARCHAR(200), IN time_end VARCHAR(200))
    BEGIN
        SELECT DISTINCT City_name, COUNT(*) AS num FROM Pollution, City,
            WHERE Pollution.City_name = City.City_name AND Pollution.Pm2_5 > level_start AND Pollution.Pm2_5 < level_end AND Pollution.Time > time_Start AND Pollution.Time < time_end
            GROUP BY City_name
            ORDER BY num;
    END//
delimiter ;