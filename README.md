# Gas Price Analysis
## Overview of the Analysis
Our Gas Price Analysis uses Python, ETL, Web Scraping, and Machine Learning to explore the future Gas Price in the U.S. We perform Supervised Machine Learning 
to find the best model for price forecasting and visualize our findings based on the data from the last two decades on the gas consumption, supply, gas types, inflation, and other factors that we think could affect gas price. Later, our goal is to provide users the access to the platform that we created for the information when they input year and month.

## Presentation
- PowerPoint (Google Slides): https://docs.google.com/presentation/d/1XPCqnkOeaemkxZTu8BPxTlwjLJBWvVgrxnUrUHRo_xg/edit#slide=id.gc6f980f91_0_0
- Topic: Gas Price Prediction and Analysis
- Reason: After a pandemic, people are planning to go back to work. Drivers bemoan high gasoline prices. Besides, an increase in gas price impacts not only on daily life and travel, but also on various trades and industries.Through analyzing the historical natural gas datasets from U.S., we provide a platform for people explore more about the changes of natural gas price and use machine learning model to help them predict accurate gas price in the future.  

- Description of the source of data
  - U.S Natural Gas Imports vs. Exports 
    - Gas Imports Price vs. Exports Price
    - Gas Total Imports vs. Exports
  - U.S Natural Gas Supply vs. Demand
    - Market Gas Production 
    - Gas Total Consumption
  - U.S Natural Gas in Storage from Underground 
  - U.S Natural Gas by Categories ($/Gallon)
    - All Grades All Formulations Retail Gasoline Prices 
    - Regular All Formulations Retail Gasoline Prices
    - Midgrade All Formulations Retail Gasoline Prices
    - Premium All Formulations Retail Gasoline Prices
    - No 2 Diesel Retail Prices
  - California Regular All_Formulations Retail Price

- ERD:


  <img src='Resources/images/ERD.png' width=800 height=400 >

- Questions hope to answer with the data
  - What is the average natural gas price now and future.
  - What is the factors affecting the gas price.
  - How the natural gas price changed from the last decades.
  - Which machine learning model can help us to predict the gas price.
  - Make a better decision on energy using and planning in the future.

## Machine Learning Model Prediction
### Supervised Learning 
- Multiple Linear Regression 
  - Intercept
  - Coefficients
### STATS Model  
- Ordinary Least Squares regression
  - Adjusted R-squared
  - constant coefficient
  - Significant level of each variables
### Model Evaluation
- each attemps results:
### Data Visualization
- Seaborn from Python

## Results

## Summary

## Resources
- California_Regular_All_Formulations_Retail_Gasoline_Prices.csv :
  - https://www.eia.gov/dnav/pet/hist/LeafHandler.ashx?n=pet&s=emm_epmr_pte_sca_dpg&f=m
- gas_prices_by_type.csv :
  - https://www.eia.gov/dnav/pet/pet_pri_gnd_dcus_nus_m.htm
- Price_of_U.S._Natural_Gas_Exports.csv :
  - https://www.eia.gov/dnav/ng/hist/n9130us3m.htm
- Price_of_U.S._Natural_Gas_Imports.csv :
  - https://www.eia.gov/dnav/ng/hist/n9100us3m.htm
- U.S._Natural_Gas_Exports.csv :
  - https://www.eia.gov/dnav/ng/hist/n9130us2m.htm
- U.S._Natural_Gas_Imports.csv :
  - https://www.eia.gov/dnav/ng/hist/n9100us2m.htm
- U.S._Natural_Gas_Marketed_Production.csv :
  - https://www.eia.gov/dnav/ng/hist/n9050us2m.htm
- U.S._Natural_Gas_Total_Consumption.csv: 
  - https://www.eia.gov/dnav/ng/hist/n9140us2m.htm
- U.S._Natural_Gas_Underground_Storage_Volume.csv :
  - https://www.eia.gov/dnav/ng/hist/n5030us2m.htm
- U.S. 2022 Population
  - https://worldpopulationreview.com/states


### Roles for Analysis
- Contributors
  - Phoebe J.Miao: responsible for repository, design machine learning model and create a diagram explains ML model within the project scope. Data preprocessing and cleaning. Decide analysis technologies to be used for each steps of the project.
  - Kimberly Kang: create a mockup of a database with a set of sample data ensure the dataset are sourced and able to load from database. Responsible for dataset updates, download, and ERDs to give a big picture of dataset. Decide analysis technologies to be used for each steps of the project.
