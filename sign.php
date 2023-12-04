
<?php require 'server.php'
?>
<!DOCTYPE html>
<html>
<head>
  <title>Restaurant Reservation Form</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      /* background-color: #f8f9fa; */
      width: 100%;
    height: 90vh;
    /* padding: 70px 0; */
      background-image: url(./images2/image1.jpeg);
      /* background-size: 800px 600px; */
      /* background-size: cover; */
    background-position: center;
    animation-name: pf;
    animation-duration: 1.5s;
    /* margin-top: 60px; */
    }
    .form-wrapper {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #ffffff;
      border: 1px solid #ced4da;
      border-radius: 5px;
      animation: fadeIn 2s;
    }
    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(-20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    @keyframes pf {
      from {
        opacity: -1;
        /* transform: translateY(-20px); */
      }
      to {
        opacity: 1;
        /* transform: translateY(0); */
      }
    }
    .form-title {
      text-align: center;
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 20px;
      color: #dc3545;
    }
    .form-group label {
      font-weight: bold;
      color: #343a40;
    }
    .btn-primary {
      background-color: #dc3545;
      border-color: #dc3545;
    }
    .btn-primary:hover {
      background-color:brown;
      border-color: #c82333;
    }
    /* Ajout du CSS pour centrer le formulaire */
    .center-form {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center center-form">
      <div class="col-md-6">
        <div class="form-wrapper">
          <h2 class="form-title">Restaurant sign up</h2>
          <form  method="POST">
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" id="name" name="nom" placeholder="Enter your name" required>
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
              <label for="phone">Password:</label>
              <input type="password" class="form-control" name='pwd' id="pwd" placeholder="Enter your password" required>
            </div>
           
            <div class="text-center">
              <button type="submit" class="btn btn-primary" name="sign">Make Sign Up</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php 
if(isset($_POST['sign'])){
  // Récupérer les données du formulaire
  $nom = $_POST['nom'];
  $email = $_POST['email'];
  $password = $_POST['pwd'];
 $sql = "INSERT INTO admines (nom, email, password) VALUES ('$nom', '$email', '$password')";
 $query=$con->exec($sql);
 if($query){
   header('location:login.php');
 } else {
   echo "Une erreur s'est produite lors de l'inscription : " ;
 }}
?>
</body>
</html>
