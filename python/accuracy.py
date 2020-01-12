# -*- coding: utf-8 -*-
"""
Created on Fri Apr 27 23:06:35 2018

@author: AJAY
"""
from surprise import Dataset
from surprise import KNNBaseline
from surprise import Reader
from surprise import accuracy
import os

reader = Reader(line_format='user item rating', sep=',', skip_lines=3, rating_scale=(1, 5))

custom_dataset_path = (os.path.dirname(os.path.realpath(__file__)) + '\\ratings.csv')
print("Using: " + custom_dataset_path)

data = Dataset.load_from_file(file_path=custom_dataset_path, reader=reader)
trainingSet = data.build_full_trainset()

sim_options = {

    'name': 'pearson_baseline',
    'shrinkage': 0  # no shrinkage
    }

knn = KNNBaseline(sim_options=sim_options)

knn.fit(trainingSet)

testSet = trainingSet.build_testset()

predictions = knn.test(testSet)


accuracy.rmse(predictions, verbose=True)  
accuracy.mae(predictions, verbose=True)  








