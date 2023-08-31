<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin | ZERA CAPITAL UGANDA LIMITED</title>
  
  <?php include('./header.php'); ?>
  <?php include('./db_connect.php'); ?>
  <?php 
  session_start();
  if(isset($_SESSION['login_id']))
    header("location:index.php?page=home");
  ?>

</head>
<style>
  body {
    width: 100%;
    height: 100vh;
    display: flex;
    flex-direction: column; /* Added this to align items vertically */
    justify-content: center;
    align-items: center;
    background: #f0f0f0; /* Change the background color of the entire page */
    margin: 0;
    overflow: hidden;
  }

  main#main {
    width: 100%;
    height: 100%;
  }

  .card {
    margin: auto;
    z-index: 1;
    text-align: center;
    padding: 20px;
    background: white; /* Keep the background color of the login form */
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  .logo {
    margin: auto;
    font-size: 8rem;
    background: white;
    padding: 0.5em 0.7em;
    border-radius: 50% 50%;
    color: #000000b3;
    z-index: 10;
  }

  .header-image {
    width: 100px;
    height: auto;
    margin-right: 10px;
  }
</style>

<body>

  <main id="main" class="bg-dark">
    <div class="card col-md-8">
      <div class="card-body">
        <h1>
          <img class="header-image" src="assets/img/loan-cover.jpg" alt="Header Image">
          Welcome to Zera Capital Ug Ltd
        </h1>
        <form id="login-form">
          <div class="form-group">
            <label for="username" class="control-label">Username</label>
            <input type="text" id="username" name="username" class="form-control">
          </div>
          <div class="form-group">
            <label for="password" class="control-label">Password</label>
            <input type="password" id="password" name="password" class="form-control">
          </div>
          <center><button class="btn-sm btn-block btn-wave col-md-4 btn-primary">Login</button></center>
        </form>
      </div>
    </div>
  </main>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

</body>
<script>
  $('#login-form').submit(function(e) {
    e.preventDefault();
    $('#login-form button[type="button"]').attr('disabled', true).html('Logging in...');
    if ($(this).find('.alert-danger').length > 0)
      $(this).find('.alert-danger').remove();
    $.ajax({
      url: 'ajax.php?action=login',
      method: 'POST',
      data: $(this).serialize(),
      error: err => {
        console.log(err);
        $('#login-form button[type="button"]').removeAttr('disabled').html('Login');
      },
      success: function(resp) {
        if (resp == 1) {
          location.href = 'index.php?page=home';
        } else if (resp == 2) {
          location.href = 'voting.php';
        } else {
          $('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
          $('#login-form button[type="button"]').removeAttr('disabled').html('Login');
        }
      }
    })
  })
</script>

</html>
