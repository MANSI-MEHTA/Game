# -*- coding: utf-8 -*-
"""
Created on Tue Apr 24 00:00:57 2018

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
    

from surprise import Dataset
from surprise import KNNBasic
from surprise import Reader
import os
import csv

reader = Reader(line_format='user item rating', sep=',', skip_lines=3, rating_scale=(1, 5))

custom_dataset_path = (os.path.dirname(os.path.realpath(__file__)) + '\\ratings.csv')
print("Using: " + custom_dataset_path)

data = Dataset.load_from_file(file_path=custom_dataset_path, reader=reader)
trainingSet = data.build_full_trainset()

sim_options = {

    'name': 'pearson_baseline',
    'shrinkage': 0  # no shrinkage
    }

knn = KNNBasic(sim_options=sim_options)

knn.fit(trainingSet)


testSet = trainingSet.build_anti_testset()
predictions = knn.test(testSet)


from collections import defaultdict
def get_top3_recommendations(predictions, topN = 10):
        top_recs = defaultdict(list)
        for uid, iid, true_r, est, _ in predictions:
            top_recs[uid].append((iid, est))
            
        for uid, user_ratings in top_recs.items():
            user_ratings.sort(key = lambda x: x[1], reverse = True)
            top_recs[uid] = user_ratings[:topN]
        return top_recs


import os, io
 
def read_item_names():

    file_name = (os.path.dirname(os.path.realpath(__file__)) + '\games-features_csv.csv')
    rid_to_name = {}
    with io.open(file_name, 'r', encoding='ISO-8859-1') as f:
        for line in f:
            line = line.split(',')
            rid_to_name[line[0]] = line[1]
 
    return rid_to_name


top3_recommendations = get_top3_recommendations(predictions)

rid_to_name = read_item_names()
for uid, user_ratings in top3_recommendations.items():
    print(uid, [rid_to_name[iid] for (iid, _) in user_ratings])
    print('')
    

ofile  = open('some.csv', "w")
writer = csv.writer(ofile, delimiter=',', quotechar='"', quoting=csv.QUOTE_ALL)
for row in top3_recommendations.items():
    writer.writerows([row]) 

ofile.close()








