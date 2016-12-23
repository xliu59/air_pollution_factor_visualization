delimiter //
DROP PROCEDURE IF EXISTS ShowAllCitiesPollution //
CREATE PROCEDURE ShowAllCitiesPollution
    BEGIN
        SELECT DISTINCT City_name, City_name_eng, Pm2_5, Longitude, Latitude FROM Pollution, City WHERE Pollution.City_name = City.City_name;
    END//
delimiter ;