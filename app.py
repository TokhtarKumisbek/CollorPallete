from flask import Flask, render_template, request, jsonify, redirect
import json



app = Flask(__name__)


@app.route('/')
def home():
    return render_template('index1.html')

@app.route('/image')
def image():
    return render_template('imagePicker.html')

if __name__ == '__main__':
    app.run(port=5000)