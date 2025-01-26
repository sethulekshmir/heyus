
from flask import Flask, render_template, request

app = Flask(__name__)

# Route to display the form
@app.route('/')
def home():
    return render_template('profile_form.html')

@app.route('/profile2')
def profile2():
    return render_template('profile2.html')


# @app.route('/notice')
# def notice():
#     return render_template('notice.html')

@app.route('/choose')
def choose():
    return render_template('choose.html')

# Route to handle form submission and display profile data
@app.route('/submit_profile', methods=['POST'])
def submit_profile():
    # Collecting form data
    name = request.form['name']
    age = request.form['age']
    gender = request.form['gender']
    height = request.form['height']
    weight = request.form['weight']
    blood_group = request.form['blood_group']
    allergies = request.form['allergies']
    medical_conditions = request.form['medical_conditions']
    diet_preference = request.form['diet']
    activity_level = request.form['activity']
    emergency_contact_name = request.form['emergency_contact']
    emergency_contact_number = request.form['emergency_contact_number']

    # Creating a dictionary to hold the profile data
    profile = {
        "Name": name,
        "Age": age,
        "Gender": gender,
        "Height (cm)": height,
        "Weight (kg)": weight,
        "Blood Group": blood_group,
        "Allergies": allergies,
        "Medical Conditions": medical_conditions,
        "Diet Preference": diet_preference,
        "Activity Level": activity_level,
        "Emergency Contact Name": emergency_contact_name,
        "Emergency Contact Number": emergency_contact_number,
    }

    # Render the profile_result.html template and pass the profile data
    return render_template('profile_result.html', profile=profile)



if __name__ == '__main__':
    app.run(debug=True)
