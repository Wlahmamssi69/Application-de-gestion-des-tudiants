<?php require('includes/connect.php');?>
<?php include('includes/header.php');?>

<div class="container">
    <div class="row my-4" >
       <div class="col-6"> 
       <h3> List of All Users </h3>
       </div>

       <div class="col-6">
        <a href="createForm.php"><button class="col-4 btn-sm btn-primary">Add User</button></a>
       </div>

       <table class="table my-4 table-hover">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Password</th>
            <th>Action</th>
        </thead>
        <tbody>
           <?php 
                $req="SELECT * FROM etudiants";
                $reqpre=$con->prepare($req);
                $reqpre->execute();

                //recuperations Data
                $users=$reqpre->fetchAll();
                foreach($users as $user){
                    echo'<tr><td>'.$etudiant['code'].'</td><td>'.$etudiant['nom'].'</td><td>'.$etudiant['email'].'</td></tr>';
                }

                
           ?>
        </tbody>

       </table>
    </div>
</div>














<?php include('includes/footer.php');?>

    
