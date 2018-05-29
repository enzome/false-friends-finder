# -*- coding: utf-8 -*-
import scrapy
from scrapy.linkextractors import LinkExtractor
from scrapy.spiders import CrawlSpider, Rule

from falsefriends.items import FalsefriendsItem


class HunSpider(CrawlSpider):
    name = 'hun'
    allowed_domains = ['blog.hu', 'qubit.hu', 'forum.index.hu']
    start_urls = ['http://blog.hu', 'http://qubit.hu', 'http://forum.index.hu']

    rules = [
        Rule(LinkExtractor(allow=()), callback='parse_item', follow=True)
    ]

    def parse_item(self, response):
        words = ' ' .join(response.xpath('//p/text()').extract())
        item = FalsefriendsItem()
        item['word'] = words
        item['url'] = response.request.url
        item['language_id'] = 1
        return item
