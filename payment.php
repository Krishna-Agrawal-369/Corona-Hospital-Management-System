<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="jumbotron" style="background-color:mediumturquoise;
    background-size: cover; height:3000px;">
<div class="container">
    <div class="card">
        <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
        <div class="row">
        <div class="col-md-1">
            <a href="admin-panel.php" class="btn btn-light">Go Back</a>
        </div> 
        <div class="col-md-3"> <h3>Payment Details</h3></div>
        <div class="col-md-8">
        <form class="form-group" action="func.php" method="post">
                <div class="row">
                    <div class="col-md-10"><input type="text" name="search" class="form-control"></div>
                    <div class="col-md-2"><input type="submit" name="patient_search" class="btn btn-light" value="Search"></div>
                </div>
        </form>
        </div>
        </div></div>
        <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email id</th>
      <th scope="col">Contact no</th>
      <th scope="col">Payment Left</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Krishna</td>
      <td>Agrawal</td>
      <td>agrawalkrishna946@gmail.com</td>
      <td>9131613016</td>
      <td>2,000</td>
    </tr>
    <tr>
      <td>Sanskar</td>
      <td>Gupta</td>
      <td>sg333@gmail.com</td>
      <td>9131999999</td>
      <td>3,000</td>
    </tr>
    <tr>
      <td>Lavish</td>
      <td>Garg</td>
      <td>elavishgarg946@gmail.com</td>
      <td>9131613999</td>
      <td>10,000</td>
    </tr>
    <tr>
      <td>Ravi</td>
      <td>Vishnoi</td>
      <td>ravi6@gmail.com</td>
      <td>9133413016</td>
      <td>12,000</td>
    </tr>
    <tr>
      <td>Ravi</td>
      <td>Sharma</td>
      <td>ravisharma6@gmail.com</td>
      <td>9133413033</td>
      <td>6,000</td>
    </tr>
    <tr>
      <td>Ajit</td>
      <td>Vishnoi</td>
      <td>ajit6@gmail.com</td>
      <td>9130413016</td>
      <td>1,000</td>
    </tr>
    <tr>
      <td>Ravish</td>
      <td>Vishnoi</td>
      <td>ravi6@gmail.com</td>
      <td>9133413016</td>
      <td>12,000</td>
    </tr>
    <tr>
      <td>Rajesh</td>
      <td>Raj</td>
      <td>raj645@gmail.com</td>
      <td>9133493016</td>
      <td>10,000</td>
    </tr>
    <tr>
      <td>Gurpeet</td>
      <td>Singh</td>
      <td>singhsaab33@gmail.com</td>
      <td>9133413888</td>
      <td>22,000</td>
    </tr>
    <tr>
      <td>Hardik</td>
      <td>Jain</td>
      <td>hp33@gmail.com</td>
      <td>4563413888</td>
      <td>24,000</td>
    </tr>
  </tbody>
</table>
</div>
</div>


</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</body>
</html>
