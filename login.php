
<?php
require 'server.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Page D'inscription</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .container {
      max-width: 400px;
      margin-top: 100px;
      background-color: #ffffff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .logo {
        text-align: center;
        margin-bottom: 30px;
      }
    .form-control {
      background-color: #f8f9fa;
      border-color: #ced4da;
    }
    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }
    .btn-primary:hover {
      background-color: #0069d9;
      border-color: #0062cc;
    }
    .btn-success {
      background-color: #28a745;
      border-color: #28a745;
    }
    .btn-success:hover {
      background-color: #218838;
      border-color: #1e7e34;
    }
    .erreur {
      
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  background-color: #f1f1f1;
  padding: 10px;
  text-align: center;
  color:red;
}
   
  </style>
</head>
<body>
<?php 
    if (isset($_POST['btn'])) {
      $email = $_POST['email'];
      $pwd = $_POST['pwd'];
      $sql = "SELECT * FROM admines WHERE email = '$email' AND password = '$pwd' " ;
      $result = $con->query($sql);
      $rows = $result->fetchAll(PDO::FETCH_ASSOC);
      if (count($rows) > 0) {
        header('location:home.php');
        exit;
      } else {
        echo '<h4 class="erreur"> Mot de passe ou email invalide <h4>';
      }
    }
    
    if(isset($_POST['sign'])){
      header('location:sign.php');
    }
    ?>
  <div class="container">
<div class="logo">
    <img src="./images2/logoRes.jpg" alt="logo" width="150">
</div>
    
    <h1 class="text-center">Page D'inscription </h1>
    <form method="POST">
      <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" class="form-control" id="email" name="email"       
        placeholder="Votre e-mail">
      </div>
      <div class="form-group">
        <label for="password">Mot de passe</label>
        <input type="password" class="form-control" name=" pwd"  id="password"       
        placeholder="Votre mot de passe">
      </div>
      <button type="submit" class="btn btn-muted btn-block" id="loginBtn" name="btn" disabled>Se connecter</button>
      <button type="submit" class="btn btn-primary btn-block " id="signup" name="sign" > Sign up</button>

    
    </form>
  </div>

 
  <script>
  
    const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password');
    const loginBtn = document.getElementById('loginBtn');

    emailInput.addEventListener('input', checkInputs);
    passwordInput.addEventListener('input', checkInputs);
   
    function checkInputs() {
      if (emailInput.value.trim() !== '' && passwordInput.value.trim() !== '') {
        loginBtn.disabled = false;
        loginBtn.classList.remove('btn-success');
        loginBtn.classList.add('btn-primary');
      } else {
        loginBtn.disabled = true;
        loginBtn.classList.remove('btn-primary');
        loginBtn.classList.add('btn-success');
      }
    }
  </script>

 
</body>
</html>
