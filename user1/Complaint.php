<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/Complaint.css">
    <title>Complain</title>
</head>
<body>
    <div>
        <a href="home.php" class="fa fa-home"> Home </a>
    </div>
    <div><?php echo isset($msg) ? $msg : ''; ?></div>
    <form method="post" action="trash.php" enctype="multipart/form-data">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="contact-info">
                        <img src="images.jfif" alt="image"/>
                        <h2>Register Your Complaint</h2>
                        <h4>We would love to hear from you!</h4>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="contact-form">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="name">Name:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" placeholder="Enter Your Name" name="name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="mobile">Mobile:</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="mobile" placeholder="Enter Your Mobile Number" name="mobile" required min="80000000" max="100000000000">
                            </div>
                        </div>
                        <input type="hidden" class="form-control" id="email" name="email" value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="wastetype" style="max-width: 33%;">Category Of Grabage:</label>
                            <div class="col-sm-10">
                                <input type="checkbox" name="wastetype[]" value="organic"> Organic
                                <input type="checkbox" name="wastetype[]" value="inorganic"> Inorganic
                                <input type="checkbox" name="wastetype[]" value="Household"> Household
                                <input type="checkbox" name="wastetype[]" value="Household"> Industrial
                                <input type="checkbox" name="wastetype[]" value="mixed" id="mycheck" checked> All
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="location" >Location:</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="location" name="location" required >
                                    <option>PCMC</option>
                                    <option>Pimpri</option>
                                    <option>Nigdi</option>
                                    <option>Akurdi</option>
                                    <option>Narhe</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="locationdescription" style="max-width: 24%;">Location Description:</label>
                            <a href="map.php">Click Here to view in map</a> 
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="5" id="locationdescription" placeholder="Enter Location details..." name="locationdescription" required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="file">Pictures:</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="file" name="file" required accept="image/*" capture="camera">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default" name="submit">Register</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
