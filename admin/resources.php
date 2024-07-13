<?php
session_start();
include 'common/connectionML.php';

if(!isset($_SESSION['admin_id'])) {
    header('location:index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pricing Table</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/resource.css">
    <style>
        /* resource.css */

/* General styles for headings */
h2 {
    text-align: center; /* Center-align text */
    font-size: 2.5rem; /* Adjust size as needed */
    margin-bottom: 20px; /* Space below the heading */
    color: #333; /* Text color */
    margin-bottom: 31px;
}

/* Specific styles for this particular heading */
.model-heading {
    background-color: #f0f0f0; /* Light gray background */
    padding: 20px; /* Padding around the heading */
    border-radius: 8px; /* Rounded corners */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Shadow for depth */
}

    </style>
</head>
<body>
    <section>
        <h2><b> "YOLOv5 Model Output: Garbage Detection Details and Border Analysis"
</b></h2>
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <?php
                    $sql = "SELECT class_id, class_name, count FROM detection_counts";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo '<div class="col-sm-4">
                                    <div class="card text-center">
                                        <div class="title">
                                            <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                            <h2>' . $row["class_name"] . '</h2>
                                        </div>
                                        <div class="price">
                                            <h4><b>' . $row["count"] . '</b></h4>
                                        </div>
                                        <a href="#">View</a>
                                    </div>
                                  </div>';
                        }
                    } else {
                        echo "<p>No data available</p>";
                    }
                    $conn->close();
                    ?>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
