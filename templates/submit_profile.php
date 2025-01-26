<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $age = intval($_POST['age']);
    $gender = htmlspecialchars($_POST['gender']);
    $height = floatval($_POST['height']);
    $weight = floatval($_POST['weight']);
    $blood_group = htmlspecialchars($_POST['blood_group']);
    $allergies = htmlspecialchars($_POST['allergies']);
    $allergy_details = htmlspecialchars($_POST['allergy_details']);
    $medical_conditions = htmlspecialchars($_POST['medical_conditions']);
    $condition_details = htmlspecialchars($_POST['condition_details']);
    $diet_preference = htmlspecialchars($_POST['diet_preference']);
    $activity_level = htmlspecialchars($_POST['activity_level']);
    $emergency_contact_name = htmlspecialchars($_POST['emergency_contact_name']);
    $emergency_contact_number = htmlspecialchars($_POST['emergency_contact_number']);

    // Here, you can either save this data to a database, or do further processing.
    // For demonstration purposes, we'll display the submitted data.

    echo "<h1>Profile Submitted Successfully!</h1>";
    echo "<h2>Your Profile Details:</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Age:</strong> $age</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    echo "<p><strong>Height:</strong> $height cm</p>";
    echo "<p><strong>Weight:</strong> $weight kg</p>";
    echo "<p><strong>Blood Group:</strong> $blood_group</p>";
    echo "<p><strong>Allergies:</strong> $allergies</p>";
    if ($allergies == "Yes") {
        echo "<p><strong>Allergy Details:</strong> $allergy_details</p>";
    }
    echo "<p><strong>Medical Conditions:</strong> $medical_conditions</p>";
    if ($medical_conditions == "Yes") {
        echo "<p><strong>Condition Details:</strong> $condition_details</p>";
    }
    echo "<p><strong>Diet Preference:</strong> $diet_preference</p>";
    echo "<p><strong>Activity Level:</strong> $activity_level</p>";
    echo "<p><strong>Emergency Contact Name:</strong> $emergency_contact_name</p>";
    echo "<p><strong>Emergency Contact Number:</strong> $emergency_contact_number</p>";
} else {
    echo "No data received.";
}
?>
