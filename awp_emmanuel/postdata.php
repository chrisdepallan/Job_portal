<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {// Make sure to handle database connection properly in your code
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "emmanuel";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


    // Retrieve the form data using the $_POST array
    $nickname = $_POST["nickname"];
    $main_title = $_POST["main_title"];
    $full_name = $_POST["full_name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $website = $_POST["website"];
    $address = $_POST["address"];
    $twitter_link = $_POST["twitter_link"];
    $facebook_link = $_POST["facebook_link"];
    $linkedin_link = $_POST["linkedin_link"];
    $about_text_1 = $_POST["about_text_1"];
    $about_text_2 = $_POST["about_text_2"];
    $work_experience_title_1 = $_POST["work_experience_title_1"];
    $work_experience_years_1 = $_POST["work_experience_years_1"];
    $work_experience_title_2 = $_POST["work_experience_title_2"];
    $work_experience_years_2 = $_POST["work_experience_years_2"];
    $work_experience_title_3 = $_POST["work_experience_title_3"];
    $work_experience_years_3 = $_POST["work_experience_years_3"];
    $education_title_1 = $_POST["education_title_1"];
    $education_passout_years_1 = $_POST["education_passout_years_1"];
    $education_title_2 = $_POST["education_title_2"];
    $education_passout_years_2 = $_POST["education_passout_years_2"];
    
    // ... Repeat for other fields
    if (isset($_FILES["user_image"])) {
        $image_name = $_FILES["user_image"]["name"];
        $image_tmp = $_FILES["user_image"]["tmp_name"];
        $image_destination = "images/" . $image_name;

        // Move the uploaded image to the destination
        move_uploaded_file($image_tmp, $image_destination);

        // Now $image_destination holds the path to the uploaded image
        // You can store this path in your database or use it as needed
    }

    // Perform further processing, validation, or storage of the data
    // For example, you can insert the data into a database



// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// $post_data = file_get_contents("php://input");
// $_POST1 = json_decode($post_data, true); 
// Gather data from POST
// $resume_id = $_POST['resume_id'];
// $resume_name = $_GET["name"];
// $resume_main_title = $_GET['main_title'];
// $resume_sub_title = $_GET['sub_title'];
// $resume_about = $_GET['about'];
// $resume_qualifications = $_GET['qualifications'];

// echo          $resume_name;
// $resume_work_experience = $_POST['resume_work_experience'];
// $resume_photo = $_POST['resume_photo'];

// Escape special characters to prevent SQL injection
// $resume_id = mysqli_real_escape_string($conn, $resume_id);
// $resume_name = mysqli_real_escape_string($conn, $resume_name);
// $resume_main_title = mysqli_real_escape_string($conn, $resume_main_title);
// $resume_sub_title = mysqli_real_escape_string($conn, $resume_sub_title);
// $resume_about = mysqli_real_escape_string($conn, $resume_about);
// $resume_qualifications = mysqli_real_escape_string($conn, $resume_qualifications);
// $resume_photo = mysqli_real_escape_string($conn, $resume_photo);
// $resume_work_experience = mysqli_real_escape_string($conn, $resume_work_experience);
// Prepare and execute the SQL query
$sql = "INSERT INTO resume (
 
    nickname,
    main_title,
    full_name,
    phone,
    email,
    website,
    address,
    twitter_link,
    facebook_link,
    linkedin_link,
    about_text_1,
    about_text_2,
    work_experience_title_1,
    work_experience_years_1,
    work_experience_title_2,
    work_experience_years_2,
    work_experience_title_3,
    work_experience_years_3,
    education_title_1,
    education_passout_years_1,
    education_title_2,
    education_passout_years_2
) VALUES (
   
    '$nickname',
    '$main_title',
    '$full_name',
    '$phone',
    '$email',
    '$website',
    '$address',
    '$twitter_link',
    '$facebook_link',
    '$linkedin_link',
    '$about_text_1',
    '$about_text_2',
    '$work_experience_title_1',
    '$work_experience_years_1',
    '$work_experience_title_2',
    '$work_experience_years_2',
    '$work_experience_title_3',
    '$work_experience_years_3',
    '$education_title_1',
    '$education_passout_years_1',
    '$education_title_2',
    '$education_passout_years_2'
)";

if (mysqli_query($conn, $sql)) {
    echo "Data inserted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);
}?>
