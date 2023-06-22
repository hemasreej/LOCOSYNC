<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Validate form data
$errors = array();

if (empty($name)) {
    $errors[] = "Name is required";
}

if (empty($email)) {
    $errors[] = "Email is required";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email format";
}

if (empty($message)) {
    $errors[] = "Message is required";
}

// Process form submission
if (empty($errors)) {
    // Send email notification or perform any other desired action with the form data
    // Example: Send email notification
    $to = "hemasreej@gmail.com";
    $subject = "New form submission";
    $body = "Name: " . $name . "\n";
    $body .= "Email: " . $email . "\n";
    $body .= "Message: " . $message . "\n";

    if (mail($to, $subject, $body)) {
        $response = array(
            "status" => "success",
            "message" => "Form submission successful. We will get back to you soon!"
        );
    } else {
        $response = array(
            "status" => "error",
            "message" => "Failed to send email. Please try again later."
        );
    }
} else {
    $response = array(
        "status" => "error",
        "message" => $errors
    );
}

// Return the JSON response
header("Content-Type: application/json");
echo json_encode($response);
?>
