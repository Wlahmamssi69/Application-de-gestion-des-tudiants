<?php require('includes/connect.php');?>
<?php include('includes/header.php');?>


<div class="container">
<?php 

if (isset($_POST['submit'])){
  //Get data ----------------------------------------------------------------------------
  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];

  if(  empty($name) || empty($email) || empty($password) ){
    if ( empty($name))
     echo '<div class="alert alert-danger">Please Enter your Name!</div>';
     
    if ( empty($email))
    echo '<div class="alert alert-danger">Please Enter your Email!</div>';

    if ( empty($password))
    echo '<div class="alert alert-danger">Please Enter your Password!</div>';
  
    echo '<a href="javascript:self.history.back()">Previous Page</a>';

}else{
//insert data-------------------------------------------------------
$req="INSERT INTO etudiants(nom,email) VALUES ('$name','$email')";
$con->exec($req);
header("Location:index.php");
}

}

?>
</div>





<?php include('includes/footer.php');?>