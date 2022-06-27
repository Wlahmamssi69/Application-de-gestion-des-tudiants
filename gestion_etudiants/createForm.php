<?php include('includes/header.php');?>

<div class="container">

<form method="POST" action="create.php">

<div class="form-group my-4" >
<label>Name</label>
<input type="text" class="form-control"  placeholder="Enter your Name" name="name" autocomplete="off">
</div>

<div class="form-group my-4" >
<label>Email</label>
<input type="text" class="form-control"  placeholder="Enter your Email" name="email" autocomplete="off">
</div>

<div class="form-group my-4" >
<label>Password</label>
<input type="password" class="form-control"  placeholder="Enter your Password" name="password" autocomplete="off">
</div>

<button type="submit" class="btn btn-primary" name="submit">Submit</button>

</form>
</div>
<?php include('includes/footer.php');?>
