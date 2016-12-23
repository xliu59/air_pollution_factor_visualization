delimiter //
DROP PROCEDURE IF EXISTS PeakAllCities_p1 //
CREATE PROCEDURE PeakAllCities_p1
    BEGIN
        SELECT DISTINCT City_name, Time, Pm2_5 FROM Pollution, City,
            (SELECT City_name, MAX(Pm2_5) AS Max FROM Pollution AS P1 GROUP BY City_name) AS Temp1
            WHERE Pollution.City_name = City.City_name AND Pollution.Pm2_5 = Temp1.Max AND City.City_name = Temp1.Max;
    END//
delimiter ;