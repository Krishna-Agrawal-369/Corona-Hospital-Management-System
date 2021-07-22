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
<div class="jumbotron" style="background-color:deepskyblue;
    background-size: cover; height:1000px;">
<div class="container">
    <div class="card">
        <div class="card-body" style="background-color:springgreen;color:#ffffff;">
        <div class="row">
        <div class="col-md-1">
            <a href="admin-panel.php" class="btn btn-light">Go Back</a>
        </div> 
        <div class="col-md-3"> <h3>Medical Shops </h3></div>
        <div class="col-md-8">
        <form class="form-group" action="func.php" method="post">
                <div class="row">
                    <div class="col-md-10"><input type="text" name="search" class="form-control"></div>
                    <div class="col-md-2"><input type="submit" name="patient_search" class="btn btn-light" value="Search"></div>
                </div>
        </form>
        </div>
        </div></div>
        <div class="card-body" style="background-color:springgreen;color:#ffffff;">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Shop Name</th>
      <th scope="col">Timing</th>
      <th scope="col">Contact no</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Malay Agrawal</td>
      <td>Agrawal Medicals</td>
      <td>10AM-10PM</td>
      <td>9131614016</td>
      <td>53,Sitaram Park colony,Indore</td>
    </tr>
    <tr>
      <td>Lavish Garg</td>
      <td>Lavish Medicals</td>
      <td>1PM-11PM</td>
      <td>9131999999</td>
      <td>34,Rammaholla,Indore</td>
    </tr>
    <tr>
      <td>Nishant Garg</td>
      <td>Garg Medicals</td>
      <td>9PM-9AM</td>
      <td>9131613999</td>
      <td>Outside Hospital</td>
    </tr>
    <tr>
      <td>Palash Bajpai</td>
      <td>Bajpai Medicals</td>
      <td>10AM-5PM</td>
      <td>9133413016</td>
      <td>33,Lalbagh,Indore</td>
    </tr>
    <tr>
      <td>Ram Sharma</td>
      <td>Sharma Medicals</td>
      <td>9AM-2PM</td>
      <td>9133413033</td>
      <td>3333,New Palasia,Indore</td>
    </tr>
    <tr>
      <td>Ajit Vishnoi</td>
      <td>Vishnoi Medical House</td>
      <td>8AM-11PM</td>
      <td>9130413016</td>
      <td>54,Junior Colony,Indore</td>
    </tr>
    <tr>
      <td>Ravish Kohli</td>
      <td>Kohli Medicine Shop</td>
      <td>10AM-8PM</td>
      <td>9133413016</td>
      <td>34,Badaganpati,Indore</td>
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
