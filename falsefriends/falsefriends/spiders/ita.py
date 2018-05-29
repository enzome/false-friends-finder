# -*- coding: utf-8 -*-
import scrapy
from scrapy.linkextractors import LinkExtractor
from scrapy.spiders import CrawlSpider, Rule

from falsefriends.items import FalsefriendsItem


class ItaSpider(CrawlSpider):
    name = 'ita'
    allowed_domains = ['blog.libero.it']
    start_urls = ['http://blog.libero.it/']

    rules = [
        Rule(LinkExtractor(allow=()), callback='parse_item', follow=True)
    ]

    def parse_item(self, response):
        words = ' ' .join(response.xpath('//p/text()').extract())
        item = FalsefriendsItem()
        item['word'] = words
        item['url'] = response.request.url
        item['language_id'] = 2
        return item
