# Gas Price Analysis
## Overview of the Analysis
Gas Price Analysis project use Python, ETL, Web Scaping, and Machine Learning Model to explore the future Gas Price in the U.S . We perform price forcasting and prediction to visualize our findings based on the gas consumption, supply, and gas types in the last two decades. Our goal is to provide users to predict the future gas price in U.S. by interacting with different Machine Learning Model.

## Presentation
- Topic: Gas Price Prediction and Analysis
- Reason: After a pandemic, people are planning to going back to work. Drivers bemoan high gasoline prices. Besides, gas price rising impacts not only on daily life and travel, but also on various trades and industries.Through analyzing the historical natural gas datasets from U.S., we provide a platform for people explore more about the changes of natural gas price and use machine learning model to help them predict accurate gas price in the future.  

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
  - How the natural gas price changed from the last decades.
  - Which machine learning model can help us to predict the gas price.
  - Make a better decision on energy using and planning in the future.

## Machine Learning Model Prediction
### Supervised Learning 
- Logistic Regression (algorithm)
- Support Vector Machine(SVM)
- Random Forests Classifier
### Advance Machine Learning Model 
- Neuron Network Model (algorithm)
### Performance of Models  
Analyze the output data(regression, or classification, or clustering)


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


### Roles for Analysis
- Contributors
  - Phoebe J.Miao: responsible for repository, design machine learning model and create a diagram explains ML model within the project scope. Data preprocessing and cleaning. Decide analysis technologies to be used for each steps of the project.
  - Kimberly Kang: create a mockup of a database with a set of sample data ensure the dataset are sourced and able to load from database. Responsible for dataset updates, download, and ERDs to give a big picture of dataset. Decide analysis technologies to be used for each steps of the project.
