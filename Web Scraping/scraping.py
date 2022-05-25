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

    news_title, news_p = mars_news(browser)
    # hemisphere_image_urls = hemispheres(browser)
    # Run all scraping functions and store results in a dictionary
    data = {
        "news_title": news_title,
        "news_paragraph": news_p,
        "featured_image": featured_image(browser),
        "facts": mars_facts(),
        "last_modified": dt.datetime.now(),
        "news_link": hemispheres(browser)
    }

    # Stop webdriver and return data
    browser.quit()
    return data

# Visit the mars nasa news site
def mars_news(browser):
    url = 'https://redplanetscience.com'
    browser.visit(url)
    
    # Optional delay for loading the page
    browser.is_element_present_by_css('div.list_text', wait_time=1)

    html = browser.html
    news_soup = soup(html, 'html.parser')
    
    try: 
        slide_elem = news_soup.select_one('div.list_text')
        slide_elem.find('div', class_='content_title')
        # Use the parent element to find the first `a` tag and save it as `news_title`
        news_title = slide_elem.find('div', class_='content_title').get_text()
        # Use the parent element to find the paragraph text
        news_p = slide_elem.find('div', class_='article_teaser_body').get_text()
        
    except AttributeError:
            return None, None
        
    return news_title, news_p

# ### Featured Images
# Visit URL


def featured_image(browser):
    url = 'https://spaceimages-mars.com'
    browser.visit(url)
    # Find and click the full image button
    full_image_elem = browser.find_by_tag('button')[1]
    full_image_elem.click()

    browser.is_element_present_by_text('more info', wait_time=1)

    # Parse the resulting html with soup
    html = browser.html
    img_soup = soup(html, 'html.parser')
    
    try:
        # Find the relative image url
        img_url_rel = img_soup.find('img', class_='fancybox-image').get('src')
       
    except AttributeError:
        return None
    
    # Use the base URL to create an absolute URL
    img_url = f'https://spaceimages-mars.com/{img_url_rel}'
    return img_url


def mars_facts():
    
    try:
        df = pd.read_html('https://galaxyfacts-mars.com')[0]
    except BaseException:
        return None
    
    df.columns=['Description', 'Mars', 'Earth']
    df.set_index('Description', inplace=True)

    return df.to_html(classes="table table-striped")

def hemispheres(browser):
    url = 'https://marshemispheres.com/'
    browser.visit(url)
    
    hemisphere_image_urls =[]
    
    for i in range(4):
    
        hemispheres = {}
        browser.find_by_css('a.product-item h3')[i].click()
        # hemisphere_data = scrape_hemisphere(browser.html)
        # hemisphere_image_urls.append(hemisphere_data)

        sample_element = browser.find_link_by_text("Sample").first
        hemispheres["img_url"] = sample_element["href"]
        hemispheres["title"] = browser.find_by_css("h2.title").text
        hemisphere_image_urls.append(hemispheres)
    
        browser.back()
    return hemisphere_image_urls

# def scrape_hemisphere(html_text):
#     hemisphere_soup = soup(html_text, "html.parser")

#     try:
#         title_element = hemisphere_soup.find("h2", class_="title").get_text()
#         sample_element = hemisphere_soup.find("a",text='Sample').get("href")
    
#     except AttributeError:
#         title_element = None
#         sample_element = None

#     hemispheres_dictionary = {
#         "title": title_element,
#         "img_url": sample_element
#     }
#     return hemispheres_dictionary

if __name__ == "__main__":
    # If running as script, print scraped data
    print(scrape_all())

    