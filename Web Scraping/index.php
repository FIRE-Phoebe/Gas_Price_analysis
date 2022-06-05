<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Gas Price Analysis</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    />
  </head>
  <body>
    <div class="hero"></div>
    <style>
      body {
        /* background-image: url('../images/Gas-Station-Price-Signs-Background-Image.png'); */
        /* background-image: url('https://www.movebuddha.com/wp-content/uploads/2022/04/version_01-1.jpg'); */
        /* background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.432) 0%,rgba(0, 0, 0, 0.26) 100%), url('../images/Gas-Station-Price-Signs-Background-Image.png'); */
        /* background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.432) 0%,rgba(0, 0, 0, 0.26) 100%), url('https://images.pexels.com/photos/3814729/pexels-photo-3814729.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'); */
        /* background-image: linear-gradient(to top, rgba(30, 75, 115, 1), rgba(255, 255, 255, 0)), url('https://images.pexels.com/photos/10711711/pexels-photo-10711711.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'); */
        /* background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.432) 0%,rgba(0, 0, 0, 0.26) 100%), url('https://www.movebuddha.com/wp-content/uploads/2022/04/version_01-1.jpg'); */
        background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.432) 0%,rgba(0, 0, 0, 0.26) 100%), url('https://images.pexels.com/photos/9073185/pexels-photo-9073185.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
        
        background-size: cover;
        /* background-color: darkslategray; */
        background-color: cadetblue;

      }
    </style>
    </div>
  
    <div class="container">
      <!-- Add Jumbotron to Header -->
      <div style="background-color:grey;" class="jumbotron text-center">
        <h1 style="color: white;">Gas Price Analysis</h1>
        <!-- Add a button to activate scraping script -->
        <!-- <p><a class="btn btn-primary btn-lg" href="/scrape" role="button">Scrape New Data</a></p> -->
        <!-- Add a button to activate scraping script -->
        <p class="lead" style="font-weight:bold">by: THE TWO GASSY GIRLS</p>
        <hr class="my-4">
        <!-- <h style="color:white">LinkedIn Profile : </h> -->
        <img src="https://image.similarpng.com/very-thumbnail/2020/07/Linkedin-logo-on-transparent-Background-PNG-.png" style="width:40px;height:40px;">
          <a class="btn btn-Dark" href="https://www.linkedin.com/in/kimberly-kang-35450b75?trk=profile-badge" style="font-size:120%;color:white">Kimberly Kang</a>
          <a class="btn btn-Dark" href="https://www.linkedin.com/in/phoebemiao/" style="font-size:120%;color:white">Phoebe Miao</a>
          <br></br>
          <img src="https://emojipedia-us.s3.amazonaws.com/source/skype/289/backhand-index-pointing-right_1f449.png" style="width:40px;height:40px;">
          <a class="btn btn-Dark" href="https://docs.google.com/presentation/d/1XPCqnkOeaemkxZTu8BPxTlwjLJBWvVgrxnUrUHRo_xg/edit#slide=id.gc6f980f91_0_0" style="color:white">Our Presentation in Google Slides</a>
          <img src="https://emojipedia-us.s3.amazonaws.com/source/skype/289/backhand-index-pointing-right_1f449.png" style="width:40px;height:40px;">
          <a class="btn btn-Dark" href="https://www.youtube.com/watch?v=uE14fkmyN1U" style="color:white">Our Presentation in Youtube!</a>
        <br></br>
          <p2 style="font-size:100%;color: white;">Python, SQL, Tableau, Web Scraping, and Machine Learning</p2>
      </div>

      <!-- Add section for gas News -->
      <!-- <div class="row" id="gas-news">
        <div class="col-md-12">
          <div class="media">
            <div class="media-body">
              <div class="page-header">
                <h2 style="color:white;font-weight:bold; text-align: center">Latest Gas Price News</h2> -->

              <!-- </div> -->
              <!-- <h4 class="media-heading" style="color:white; text-align: center">{{ gas.news_title }}</h4>
              <p style="color:white; text-align: center">{{ gas.news_paragraph }}</p>
              <p style="color:white; text-align: center">{{ gas.news_link }}</p> -->
            <!-- </div>
          </div>
        </div>
      </div> -->

      <!-- Section for Real Time Gas price table from gasbuddy.com -->
      <!-- <div class="row" id="gas_news">
        <div class="col-md-12">
          <div class="page-header">
            <h2 style="color:white;font-weight:bold; text-align: center">National Average Gas Prices (Real Time)</h2>
          </div> -->
          

        
      <div class="col-md-12">
        <div class="row">
          <div class="page-header" >
            <h1 class="text-center" style="color:white;font-weight:bold">Background</h1>
              <h2 style="color:white; text-align: center">What is Natural Gas?</h2>
          </div>
        </div>

        <div class="col-md-12">
          <p style="font-size:140%; color:white;">Natural gas is a fossil energy source that formed deep beneath the earth's surface. Natural gas contains many different compounds. The largest component of natural gas is methane, a compound with one carbon atom and four hydrogen atoms (CH4). Natural gas also contains smaller amounts of natural gas liquids (NGLs, which are also hydrocarbon gas liquids), and nonhydrocarbon gases, such as carbon dioxide and water vapor. We use natural gas as a fuel and to make materials and chemicals. </p>
          </div>

        <div class="col-md-7">
          <img src="https://www.eia.gov/energyexplained/natural-gas/images/hydrofracturing_lg.jpg" style="width:600px;height:400px;">
        </div>

          <!-- <div class="col-md-5">
            <div class="col-md-12">    -->

        <div class="col-md-5">
          <div class="center">
            <style>
            .center {
              /* border: 5px solid #FFFF00; */
              padding: 50px 0;
              } </style>
            <p style="font-size:140%; color:white;">In some places, natural gas moved into large cracks and spaces between layers of overlying rock. In other places, natural gas occurs in the tiny pores (spaces) within some formations of shale, sandstone, and other types of sedimentary rock. Natural gas also occurs with deposits of crude oil, and its deposits are found on land, and some are offshore and deep under the ocean floor.</p>
            <a class="btn btn-Dark" href="https://www.eia.gov/energyexplained/natural-gas/"style="font-size:100%; color:white;">If you want more details: CLICK HERE</a>
          </div>
        </div>
 
        


        <div class="col-md-12">
          <div class="row">
            <div class="page-header">
              <h1 class="text-center" style="color:white;font-weight:bold">Our Datasets</h1>                 
            </div>
          </div>
           
          <div class="col-md-12">
            <h2 style="color:white; text-align: center">ERD</h2>
            <h2 style="color:white; text-align: center">Relationship Diagram between our datasets</h2>
            <center><img src="https://raw.githubusercontent.com/FIRE-Phoebe/Gas_Price_analysis/main/Resources/images/ERD.png" style="width:800px;height:480px;"></center>
          </div>
            


          <!-- margin-top: 40px; -->
          <div class="col-md-12">
            <h2 style="color:white; text-align: center">Summary for our variables</h2>
            <center><img src="https://raw.githubusercontent.com/FIRE-Phoebe/Gas_Price_analysis/main/Resources/images/var_table.PNG" style="width:900px;height:700px;"></center>
          </div>
        </div>


        <div class="col-md-12">
          <div class="row">
            <div class="page-header">
              <h1 class="text-center" style="color:white;font-weight:bold">Interesting Factors in Graphs</h1>
            </div>
          </div>

          <div class="col-md-6">
            <h2 style="font-size:140%; color:white; text-align: center;">Price of Import and Export ($/Gallon)</h2>
            <img src="https://raw.githubusercontent.com/FIRE-Phoebe/Gas_Price_analysis/main/Web%20Scraping/images/import_export_graph.png" class = "center" style="width:500px;height:400px;">
          </div>

          <div class="col-md-6">
            <div class="col-md-12">
              <h2 style="font-size:140%; color:white; text-align: center;">Stock Market to GDP(%)</h2>
              <img src="https://raw.githubusercontent.com/FIRE-Phoebe/Gas_Price_analysis/main/Web%20Scraping/images/stock_market_to_GDP(%25).png" class="center" style="width:500px;height:400px;">
            </div>
          </div>

          <div class="col-md-6">
           <h2 style="font-size:140%; color:white; text-align: center;">Inflation(%)</h2>
            <img src="https://raw.githubusercontent.com/FIRE-Phoebe/Gas_Price_analysis/main/Web%20Scraping/images/inflation.png" class = "center" style="width:500px;height:400px;">
          </div> 

          <div class="col-md-6">
            <div class="col-md-12">
              <h2 style="font-size:140%; color:white; text-align: center;">Interest Rate(%)</h2>
              <img src="https://raw.githubusercontent.com/FIRE-Phoebe/Gas_Price_analysis/main/Web%20Scraping/images/interest_rate(%25).png" class="center" style="width:500px;height:400px;">
            </div>
          </div>
          <div class="col-md-12">
            <h2 style="font-size:140%; color:white; text-align: center;">4 Factors with our Target Value (Price for All grades)</h2>
            <center><img src="https://raw.githubusercontent.com/FIRE-Phoebe/Gas_Price_analysis/main/Web%20Scraping/images/tableau_trend.png" class = "center"></center>
          </div> -->


        <div class="col-md-12">
          <div class="row">
            <div class="page-header">
              <h1 class="text-center" style="color:white;font-weight:bold">Marchine Learning Models</h1>
            </div>
          </div>

          <div class="col-md-12">
            <h2 style="color:white; text-align: center"><u>Supervised Learning</u></h2>


          <div class="col-md-6">
            <h3 style="color:white; text-align: center;"><mark>Multiple Linear Regression Model 1 (MRM1)</mark></h3>
              <p3 style='font-size:120%'>
                <ul style='color:white;'>
                  <li>Factors: year, production, consumption, import_price, export_price, total imports, total exports, gas_price by types(all_grades, regular, midgrade, premium, diesel), volume(storage)</li>
                  <li>Target variable: all_grades_price</li>
                </ul>
              </p3>
          </div>
          <div class="col-md-6">
            <div class="col-md-12">
              <h3 style="color:white; text-align: center;"><mark>MRM 2</mark></h3>
                <p3 style='font-size:120%'>
                  <ul style='color:white;'>
                    <li>Factors: Add additional Factors: inflation, stock_to_GDP, working_population, interest_rate</li>
                    <li>Target variable: all_grades_price</li>
                  </ul>
                </p3>
            </div>
          </div>

          <div class="col-md-7">
            <h3 style="color:white;text-align: center;"><mark>MRM 3</mark></h3>
              <p3 style='font-size:120%'>
                <ul style='color:white;'>
                  <li>Drop Dummies Factors: gas_price by types</li>
                    <ul>      
                      <li>all_grades, regular, midgrade, premium, diesel</li>
                    </ul>
                  <li>Target variable: all_grades_price</li>
                </ul>
              </p3>
          </div>
          <div class="col-md-5">
            <div class="col-md-12">
              <h3 style="color:white; text-align: center;"><mark>MRM 4</mark></h3>
                <p3 style='font-size:120%'>
                  <ul style='color:white'>
                    <li>Add Consumer_types: consumer_types</li>
                      <ul>      
                        <li>commercial_, elecric_, industrial_, residential_, vehicle_consumers</li>
                      </ul>
                    <li>Drop dummies: all_consumers, and gas_types_by_price</li>
                    <li>Target variable: all_grades_price</li>
                  </ul>
                </p3>
            </div>
          </div>
        </div>
 

     


        <div class="col-md-12">
          <h2 style="color:white; text-align: center"><u>Advanced Machine Learning</u></h2>
            <h3 style="font-size:140%; color:white; text-align: center;"><mark>Artificial Neural Networks (ANN)</mark></h3>
              <p3 style="font-size:120%; color:white;text-align: center">Computing systems inspired by the biological neural networks that constitute animal brains. An ANN is based on a collection of connected units or nodes called artificial neurons, which loosely model the neurons in a biological brain.</p3><br></br>
        </div> 





        <div class="col-md-12">
          <h2 style="color:white; text-align: center"><u>Time Series Model</u></h2>
           <h3 style="font-size:140%; color:white; text-align: center;"><mark>Autoregressive Integrated Moving Average (ARIMA) </mark></h3>
            <p3 style="font-size:120%; color:white;text-align: center">Statistical analysis model that uses time series data to either better understand the data set or to predict future trends. </p3>
        </div> 



      <div class="col-md-12">
        <div class="row">
          <div class="page-header" >
            <h1 class="text-center" style="color:white;font-weight:bold">Performance of the Models</h1>

          </div>
        </div>   

        <div class="col-md-12">
          <h2 style="color:white; text-align: center">Pros and Cons for each model</h2>
          <center><img src="https://raw.githubusercontent.com/FIRE-Phoebe/Gas_Price_analysis/main/Resources/images/pro_con.PNG" style="width:800px;height:600px;"></center>
        </div>

      <div class="col-md-12">
        <div class="row">
          <div class="page-header" >
            <h1 class="text-center" style="color:white;font-weight:bold">Results</h1>
          </div>
        </div>   
  
        <div class="col-md-12">
          <h2 style="color:white; text-align: center">Model Evaluation</h2>
            <h3 style="color:white; text-align: center"><u>Measure Metrics</u></h3>
              <ul>
                <li style="font-size:130%; color:white;">R-squared Score: Residual squared score that efers to the coefficient of determination. It tells how well the unknown samples will be predicted by model.(The best is 1.0, can be negative)</li>
                <li style="font-size:130%; color:white;">MAE: Mean absolute error; which is the average of absolute errors off all the data points in the given dataset.</li>
                <li style="font-size:130%; color:white;">MSE: Mean squared error; which is the average of the squares of the errors of all the data points in the given dataset.</li>
                <li style="font-size:130%; color:white;">MAE*: Median of all the errors in the given dataset. (it's robust to outliers)</li>
                <li style="font-size:130%; color:white;">EVS: Explained variance score; measures how well out model can account for the variation in the dataset. (1.0 indicatesthat model is perfect.)</li>
              </ul>
              <center><img src="https://raw.githubusercontent.com/FIRE-Phoebe/Gas_Price_analysis/main/Resources/images/model_evaluation_new.PNG" style="width:700px;height:300px;"></center>

              <p style="font-size:130%; color:white;"><br>the ARIMA model has the highest R-squared, which indicates the model is best fit for our gasoline datasets. Comparing the mean absolute error, MRM2 has the lowest score. ARIMA has the lowest mean squared error and median absolute error. However, MRM2 has the better explained variance score. Based on the Multiple linear regression model, we have four attemps. MRM2 and MRM3 have better results, but it has trade off. The OLS Regression results show the factors in the models are not significant.</br></p>
              <center><img src="https://raw.githubusercontent.com/FIRE-Phoebe/Gas_Price_analysis/main/Resources/images/arima_1.PNG" style="width:600px;height:400px;"></center>
              <br></br>
              <center><img src="https://raw.githubusercontent.com/FIRE-Phoebe/Gas_Price_analysis/main/Resources/images/arima_result.PNG" style="width:700px;height:500px;"></center>
        </div>

        <div class="col-md-12">
          <div class="row">
            <div class="page-header" >
              <h1 class="text-center" style="color:white;font-weight:bold">The BEST MODEL </h1>
              <center><p1 style="font-size:150%; color:white; text-align: center">to predict future gas prices: ARIMA</p1></center>
            </div>
          </div> 
        <div class="col-md-12">
          <center><img src="https://raw.githubusercontent.com/FIRE-Phoebe/Gas_Price_analysis/main/Resources/images/arima_prediction.PNG" style="width:700px;height:300px;"></center> 
         


      <div class="col-md-12">
        <div class="row">
          <div class="page-header" >
            <h1 class="text-center" style="color:white;font-weight:bold">Summary</h1>
          </div>
        </div> 
        <div class="col-md-12">
          <p style="font-size:140%; color:white;">Because of what's going on with gas price increase nowadays, we wanted to perform an analysis on Gas Price and try to forecast future gas prices by using Machine Learning Models. We found out that ARIMA model could describe our future gas prices the best. Based on the graph below, we can expect our future gas price to go down for the rest of the year. </p>
          <center><img src="https://raw.githubusercontent.com/FIRE-Phoebe/Gas_Price_analysis/main/Resources/images/2022_gas_price.PNG" style="width:700px;height:300px;"></center>
          </div>

    
      <div class="col-md-12">
        <div class="row">
          <div class="page-header">
            <h1 class="text-center" style="color:white;font-weight:bold">Resources</h1>
          </div>
        </div>
      <div class="col-md-12">
        <div class="row">
        <style>
          a:visited {
            color: pink;
            background-color: transparent;
            text-decoration: none;
          }
        </style>
          <p1 style="color:white">gas_prices_by_type.csv</p1>
          <ul>
            <li style="color:white"><a href="https://www.eia.gov/dnav/pet/pet_pri_gnd_dcus_nus_m.htm">https://www.eia.gov/dnav/pet/pet_pri_gnd_dcus_nus_m.htm</a></li>
          </ul>
          <p1 style="color:white">Price_of_U.S._Natural_Gas_Exports.csv</p1>
          <ul>
            <li style="color:white"><a href="https://www.eia.gov/dnav/ng/hist/n9130us3m.htm">https://www.eia.gov/dnav/ng/hist/n9130us3m.htm</a></li>
          </ul>
          <p1 style="color:white">Price_of_U.S._Natural_Gas_Imports.csv</p1>
          <ul>
            <li style="color:white"><a href="https://www.eia.gov/dnav/ng/hist/n9100us3m.htm">https://www.eia.gov/dnav/ng/hist/n9100us3m.htm</a></li>
          </ul> 
          <p1 style="color:white">U.S._Natural_Gas_Exports.csv</p1>
          <ul>      
            <li style="color:white"><a href="https://www.eia.gov/dnav/ng/hist/n9130us2m.htm">https://www.eia.gov/dnav/ng/hist/n9130us2m.htm</a></li>
          </ul> 
          <p1 style="color:white">U.S._Natural_Gas_Imports.csv</p1>
          <ul> 
            <li style="color:white"><a href="https://www.eia.gov/dnav/ng/hist/n9100us2m.htm">https://www.eia.gov/dnav/ng/hist/n9100us2m.htm</a></li>
          </ul>
          <p1 style="color:white">U.S._Natural_Gas_Marketed_Production.csv</p1>
          <ul> 
            <li style="color:white"><a href="https://www.eia.gov/dnav/ng/hist/n9050us2m.htm">https://www.eia.gov/dnav/ng/hist/n9050us2m.htm</a></li>
          </ul>
          <p1 style="color:white">U.S._Natural_Gas_Total_Consumption.csv</p1>
          <ul> 
            <li style="color:white"><a href="https://www.eia.gov/dnav/ng/hist/n9140us2m.htm">https://www.eia.gov/dnav/ng/hist/n9140us2m.htm</a></li>
          </ul>
          <p1 style="color:white">U.S._Natural_Gas_Underground_Storage_Volume.csv</p1>
          <ul> 
            <li style="color:white"><a href="https://www.eia.gov/dnav/ng/hist/n5030us2m.htm">https://www.eia.gov/dnav/ng/hist/n5030us2m.htm</a></li>
          </ul>

          </div>
        </div>       

      <div class="col-md-12">
        <div class="page-header"></div>
          <h3 style="font-size:120%; color:white; text-align: center;">UC Berkeley Data Analytics Bootcamp * December 2021 - June 2022</h3>
        </div>
      </div>
      
    </div>
  </body>
</html>
