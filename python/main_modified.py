

from surprise import Dataset
from surprise import KNNBasic
from surprise import Reader
import os


'''
data = Dataset.load_builtin("game")
trainingSet = data.build_full_trainset()
'''

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

knn.train(trainingSet)


testSet = trainingSet.build_anti_testset()
predictions = knn.test(testSet)


from collections import defaultdict
def get_top3_recommendations(predictions, topN = 3):
        top_recs = defaultdict(list)
        for uid, iid, true_r, est, _ in predictions:
            top_recs[uid].append((iid, est))
            
        for uid, user_ratings in top_recs.items():
            user_ratings.sort(key = lambda x: x[1], reverse = True)
            top_recs[uid] = user_ratings[:topN]
        return top_recs



import os, io
 
def read_item_names():

    """Read the u.item file from MovieLens 100-k dataset and returns a
    mapping to convert raw ids into movie names.
    """

    """file_name = (os.path.expanduser('~') +
                 '/.surprise_data/ml-100k/ml-100k/u.item') """
    file_name = (os.path.dirname(os.path.realpath(__file__)) + '\game\games-features_csv.csv')
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
    







