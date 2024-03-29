# -*- coding: utf-8 -*-
"""
Created on Sun Apr 22 21:14:09 2018

@author: AJAY
"""

import pymysql

def execute(c, command):
    c.execute(command)
    return c.fetchall()

db = pymysql.connect(host='localhost', port=3306, user='ajay', passwd='aaa', db='accounts') #, charset='utf8')

c = db.cursor()

for table in execute(c, "show tables;"):
    table = table[0]
    cols = []
    for item in execute(c, "show columns from " + table + ";"):
        cols.append(item[0])
    data = execute(c, "select * from " + table + ";")
    with open(table + ".csv", "w", encoding="utf-8") as out:
        out.write(",".join(cols) + "\n")
        for row in data:
            out.write(",".join(str(el) for el in row) + "\n")
    print(table + ".csv written")