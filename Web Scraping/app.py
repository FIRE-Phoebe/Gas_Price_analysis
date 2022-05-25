from flask import Flask, render_template, redirect 
from flask_pymongo import PyMongo
import scraping

app = Flask(__name__)

# Use flask_pymongo to set up mongo connection
app.config["MONGO_URI"] = "mongodb://localhost:27017/mars_app"
mongo = PyMongo(app)

@app.route("/")
def index():
    mars = mongo.db.mars.find_one()
    return render_template("index.html", mars = mars)
    # "index.html" is the default HTML file that we will use to display the content we've scraped
    # This tells Flask to return an HTML template using an index.html file. 
    # We will create this file after we build the Flask routes
    # mars = mars tells Python to use the "mars" collection in MongoDB

# "Button" of the web application
@app.route("/scrape")
def scrape():
    # new variable that points to our Mongo Database which is mars
    mars = mongo.db.mars
    # new variable that holds the newly scraped data: our scraping.py file exported from Jupyter notebook
    mars_data = scraping.scrape_all()
    # now we gathered new data, and we need to update the database using .update_one()
    # .update_one(query_parameter, {"$set":data}, options)
    # In the query_parameter, it can be left empty {} to update the first matching document in the collection
    # {"$set":data} means the document will be modified ("$set") with the data in question
    # upsert=True means telling Mongo to create a new document if one doesn't already exist, and new data will always be saved
    mars.insert_one(mars_data)
    #mars.update_one({}, {"$set":mars_data}, upsert=True)
    # navigate our page back to / where we can see the updated content
    return redirect('/', code=302)

if __name__ == "__main__":
    app.run(debug=True)


