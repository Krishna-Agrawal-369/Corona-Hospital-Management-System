<?php
$con=mysqli_connect("localhost","root","","hmsdb");
if(isset($_POST['login_submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query="select * from logintb where username='$username' and password='$password'";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)==1)
    {
        header("Location:admin-panel.php");
    }
    else
    {
        echo "<script>alert('Error login')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    }
}
if(isset($_POST['pat_submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $docapp=$_POST['docapp'];
    $query="insert into doctorapp(fname,lname,email,contact,docapp) values ('$fname','$lname','$email,'$contact','$docapp')";
    echo "<script>alert('Appointment Registered')</script>";
    $result=mysqli_query($con,$query);
    if($result)
    {
        echo "<script>alert('Appointment Registered')</script>";
        echo "<script>window.open('admin-panel.php','_self')</script>";
    }
}
function get_patient_details(){
    global $con;
    $query="select * from doctorapp";
    $result=mysqli_query($con,$query);
    echo "Krishna Agrawal agrawalkrishna@946gmail.com 9131613016 Vipul Bandi ";
    while($row=mysqli_fetch_array($result)){
        $fname=$row['fname'];
        $lname=$row['lname'];
        $email=$row['email'];
        $contact=$row['contact'];
        $docapp=$row['docapp'];
    }
    echo "Krishna Agrawal agrawalkrishna@946gmail.com 9131613016 Vipul Bandi ";
}
?>
