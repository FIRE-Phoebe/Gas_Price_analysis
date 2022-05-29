#!/usr/bin/env python
# coding: utf-8

# In[1]:


# Import Splinter, BeautifulSoup, and Pandas
from splinter import Browser
from bs4 import BeautifulSoup as soup
import pandas as pd
from webdriver_manager.chrome import ChromeDriverManager
import urllib.request
import requests
import lxml


# In[2]:


# Set the executable path and initialize Splinter
executable_path = {'executable_path': ChromeDriverManager().install()}
browser = Browser('chrome', **executable_path, headless=False)


# ## Scrape News Titles

# In[3]:


# 1. Use browser to visit the URL 
url='https://www.gasbuddy.com/go/category/gas-prices'
browser.visit(url)


# In[4]:


from bs4 import BeautifulSoup as Soup
import requests
from splinter import Browser
import pandas as pd
from selenium import webdriver
import urllib.request,sys,time




# In[9]:


html = browser.html
html_soup = soup(html, 'html.parser')


# In[10]:


browser.is_element_present_by_css('div.post-titling', wait_time=1)


# In[11]:


elem = html_soup.select_one('div.post-titling')
print(elem)


# In[12]:


elem = html_soup.select_one('h2.pvh-title')
print(elem)


# In[31]:


# OUR FIRST VARIABLE NEWS_TITLE
news_title = html_soup.find('h2', {'class':'pvh-title'}).get_text()
news_title


# In[13]:


headers = html_soup.find_all('h2', {'class':'pvh-title'})
print(headers)


# In[14]:


headers = html_soup.find_all('h2')
print(headers)


# In[15]:


titles = list(map(lambda h: h.text.strip(), headers))
print(titles)


# ## News links

# In[16]:


news_link = html_soup.find('div', {'class':'post-preview'})
print(news_link)


# In[17]:


all_divs = html_soup.find_all(class_="post-preview")
print(all_divs)


# In[18]:


all_a = html_soup.find(class_="post-preview").find('a')
print(all_a)


# In[32]:


# OUR 2ND VARIABLE NEWS_URL
news_url = html_soup.find(class_="post-preview").find('a')['href']
print(news_url)


# ## News paragraphs

# In[28]:


parag_elem = html_soup.select_one('div.pv-body')
print(parag_elem)



# In[33]:


## OUR LAST VARIABLE NEWS_P
news_p = parag_elem.find('p', class_="pvb-content").get_text()
news_p




# Quit the browser
browser.quit()

