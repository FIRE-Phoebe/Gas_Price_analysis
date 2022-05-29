from flask import Flask, render_template, redirect 
from flask_pymongo import PyMongo
import scraping

app = Flask(__name__)

# Use flask_pymongo to set up mongo connection
app.config["MONGO_URI"] = "mongodb://localhost:27017/gas_app"
mongo = PyMongo(app)

@app.route("/")
def index():
    gas = mongo.db.gas.find_one()
    return render_template("index.html", gas = gas)


# "Button" of the web application
@app.route("/scrape")
def scrape():

    gas = mongo.db.gas
    # new variable that holds the newly scraped data: our scraping.py file exported from Jupyter notebook
    gas_data = scraping.scrape_all()

    gas.insert_one(gas_data)

    return redirect('/', code=302)

if __name__ == "__main__":
    app.run(debug=True)


