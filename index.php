<!-- HTML part of login page -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Foundation:wght@400;500&family=Poppins:wght@100;200;300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style_index.css">
  <title>Login</title>
</head>
<body>
  <div class="container">
    <h1>Login</h1>
    <form action="login.php" method="POST">
      <label for="userName">Username</label>
      <span>*</span>
      <input type="text" id="userName" name="userName" required>
      <?php
        if(isset($GLOBALS["userNameErr"])) {
      ?>
      <span class="error">
        <?php
          echo $GLOBALS["userNameErr"];
          unset($GLOBALS["userNameErr"]);
        ?>
      </span>
      <?php
        }
      ?>
      <br><br>
      <label for="password">Password</label>
      <span>*</span>
      <input type="password" id="password" name="password" required>
      <span class="error password">
        Password should be of min 8 characters with 
        atleast 1 uppercase, 1 lowercase, 1 digit and 1 special character.
      </span>
      <?php
        if(isset($GLOBALS["passwordErr"])) {
      ?>
      <span class="error">
        <?php
          echo $GLOBALS["passwordErr"];
          unset($GLOBALS["passwordErr"]);
        ?>
      </span>
      <?php
        }
      ?>
      <br><br>
      <input type="submit" value="Login">
    </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.3.js"
  integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
  crossorigin="anonymous"></script>
  <script src="Scripts/validations.js"></script>
</body>
</html>
