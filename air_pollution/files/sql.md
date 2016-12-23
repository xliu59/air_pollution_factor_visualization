###In the given time, the cities with the highest and the lowest air pollution 

	select City_name, Pm2_5 
	from Poluttion
	where Pm2_5 = (
		select max(Pm2_5)
		From Pollution
	    where Date between 2016-01-01 and 2016-10-31
	)

###For each haze level, which cities has the most number of hazy days of that level

	select Base2.*
	from 
		(select City_name, Level, count(distinct Date) cnt
		from (select p.*, (case 
								when 
									p.Pm2_5 >=(select startNum from Pm2_5_level where level = 'light polluted') 
									and p.Pm2_5 <(select startNum from Pm2_5_level where level = 'mid polluted')
								then
									'light polluted'
								when
									p.Pm2_5 >=(select startNum from Pm2_5_level where level = 'mid polluted') 
									and p.Pm2_5 <(select startNum from Pm2_5_level where level = 'heavy polluted')
								then
									'mid polluted'
								when
									p.Pm2_5 >=(select startNum from Pm2_5_level where level = 'heavy polluted')
								then
									'heavy polluted'
							end case) as Level 
			 from Pollution p
			 where p.Pm2_5 >= (
				 select 
				 from Pm2_5_level
				 where level = 'light polluted')) Base3
		gorup by City_name, Level) Base4, 
		(select Level, max(cnt) max
		from( select City_name, Level, count(distinct Date) cnt
				from (select p.*, (case 
										when 
											p.Pm2_5 >=(select startNum from Pm2_5_level where level = 'light polluted') 
											and p.Pm2_5 <(select startNum from Pm2_5_level where level = 'mid polluted')
										then
											'light polluted'
										when
											p.Pm2_5 >=(select startNum from Pm2_5_level where level = 'mid polluted') 
											and p.Pm2_5 <(select startNum from Pm2_5_level where level = 'heavy polluted')
										then
											'mid polluted'
										when
											p.Pm2_5 >=(select startNum from Pm2_5_level where level = 'heavy polluted')
										then
											'heavy polluted'
									end case) as Level
					 from Pollution p
					 where p.Pm2_5 >= (
						 select 
						 from Pm2_5_level
						 where level = 'light polluted')) Base
				gorup by City_name, Level) Base1
		group by Level) Base2
	where Base4.Level = Base2.Level 
	  and Base4.cnt = Base2.max


