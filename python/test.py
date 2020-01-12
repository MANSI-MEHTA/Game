# -*- coding: utf-8 -*-
"""
Created on Tue Apr 24 00:18:45 2018

@author: AJAY
"""

import os
from surprise import Dataset
from surprise import KNNBasic
from surprise import Reader
from surprise import Dataset
from surprise.model_selection import cross_validate

reader = Reader(line_format='user item rating', sep=',', skip_lines=3, rating_scale=(1, 5))

custom_dataset_path = (os.path.dirname(os.path.realpath(__file__)) + '\\ratings.csv')
print("Using: " + custom_dataset_path)

data = Dataset.load_from_file(file_path=custom_dataset_path, reader=reader)

# Use the famous SVD algorithm.

sim_options = {

    'name': 'pearson_baseline',
    'shrinkage': 0  # no shrinkage
    }

algo = KNNBasic(sim_options=sim_options)


# Run 5-fold cross-validation and print results.
cross_validate(algo, data, measures=['RMSE', 'MAE'], cv=5, verbose=True)
