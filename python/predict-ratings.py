# -*- coding: utf-8 -*-
"""
Created on Fri Apr 27 23:55:44 2018

@author: AJAY
"""
import os

from surprise import KNNBaseline
from surprise import Dataset


reader = Reader(line_format='user item rating', sep=',', skip_lines=3, rating_scale=(1, 5))

custom_dataset_path = (os.path.dirname(os.path.realpath(__file__)) + '\\ratings.csv')
print("Using: " + custom_dataset_path)

data = Dataset.load_from_file(file_path=custom_dataset_path, reader=reader)


# Retrieve the trainset.
trainset = data.build_full_trainset()

# Build an algorithm, and train it.
algo = KNNBaseline()
algo.fit(trainset)

uid = str(109)  # raw user id (as in the ratings file). They are **strings**!
iid = str(1000)  # raw item id (as in the ratings file). They are **strings**!

# get a prediction for specific users and items.
pred = algo.predict(uid, iid, r_ui=5, verbose=True)