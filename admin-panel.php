<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management System</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="jumbotron" style="background:url('images1/h1.png') no-repeat;
    background-size: cover; height:400px;"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="" class="list-group-item active" style="background-color:#3498DB;
                    color:#ffffff;border-color:#3498DB">Patients</a>
                    <a href="patient_details.php" class="list-group-item">Patients Details</a>
                    <a href="payments.php" class="list-group-item ">Payments/Checkouts</a>
                </div>
                <br>
                <div class="list-group">
                    <a href="" class="list-group-item active" style="background-color:#3498DB;
                    color:#ffffff;border-color:#3498DB">Staff</a>
                    <a href="staff.php" class="list-group-item">Staff Details</a>
                    <a href="doctor.php" class="list-group-item ">Doctors Details</a>
                    <a href="shop.php" class="list-group-item ">Medicine Shop Details</a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
                    <h4>Book an Appointment</h4>
                    </div>
                    <div class="card-body">
                        <form class="form-group" action="func.php" method="post">
                            <label>FirstName: </label>
                            <input type="text" name="fname" class="form-control"><br>
                            <label>LastName: </label>
                            <input type="text" name="lname" class="form-control"><br>
                            <label>Email Id: </label>
                            <input type="text" name="email" class="form-control"><br>
                            <label>Contact : </label>
                            <input type="text" name="contact" class="form-control"><br>
                            <label>Doctor Appointment: </label>
                            <input type="text" name="docapp" class="form-control"><br>
                            <br>
                            <input type="submit" class="btn btn-primary" name="pat_submit" value="Enter appointment">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</body>
</html>
