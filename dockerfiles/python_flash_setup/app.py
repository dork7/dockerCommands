# import the necessary packages
from flask import Flask, request, jsonify, render_template, make_response
import datetime

from flask_cors import CORS


app = Flask(__name__, template_folder='./')
CORS(app)


@app.route('/lol', methods = ['GET'])  
def lol():
   return jsonify("getting lol from gitlab")
 


if __name__ == "__main__":
    app.debug = False
    app.run()
