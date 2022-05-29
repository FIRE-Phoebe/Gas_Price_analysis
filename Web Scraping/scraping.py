#!/usr/bin/env python
# coding: utf-8

# Import Splinter and BeautifulSoup
from splinter import Browser
from bs4 import BeautifulSoup as soup
import pandas as pd
import datetime as dt
from webdriver_manager.chrome import ChromeDriverManager

def scrape_all():
    # Initiate headless drvier for deployment
    executable_path = {'executable_path': ChromeDriverManager().install()}
    browser = Browser('chrome', **executable_path, headless=True)

    news_title, news_url, news_p = gas_news(browser)
    # hemisphere_image_urls = hemispheres(browser)
    # Run all scraping functions and store results in a dictionary
    data = {
        "news_title": news_title,
        "news_paragraph": news_p,
        "news_link": news_url
        }

    # Stop webdriver and return data
    browser.quit()
    return data

# Visit the gas nasa news site
def gas_news(browser):
    url = 'https://www.gasbuddy.com/go/category/gas-prices'
    browser.visit(url)


    html = browser.html
    html_soup = soup(html, 'html.parser')
    
    try: 
        elem = html_soup.select_one('div.post-titling')
        parag_elem = html_soup.select_one('div.pv-body')
        elem.find('div', class_='div.post-titling')
        # Use the parent element to find the first `a` tag and save it as `news_title`
        news_title = html_soup.find('h2', {'class':'pvh-title'}).get_text()
        news_url = html_soup.find(class_="post-preview").find('a')['href']
        # Use the parent element to find the paragraph text
        news_p = parag_elem.find('p', class_="pvb-content").get_text()

    except AttributeError:
            return None, None, None
        
    return news_title, news_url, news_p 



if __name__ == "__main__":
    # If running as script, print scraped data
    print(scrape_all())

    