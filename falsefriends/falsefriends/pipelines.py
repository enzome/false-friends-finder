# -*- coding: utf-8 -*-

# Define your item pipelines here
#
# Don't forget to add your pipeline to the ITEM_PIPELINES setting
# See: http://doc.scrapy.org/en/latest/topics/item-pipeline.html


# class FalsefriendsPipeline(object):
#     def process_item(self, item, spider):
#         return item

import requests
import json

class JSONpostPipeline(object):
    def process_item(self, item, spider):

        payload = {'word': item['word'],
            'url': item['url'],
            'language_id': item['language_id']
            }

        r = requests.put("http://linkensphere.com/falsefriends/words/add.json", data=payload);
        print r.text
        return item
