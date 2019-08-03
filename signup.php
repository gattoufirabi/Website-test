<?php
require "header.php"
?>
<main>
  <div class="formulaire">
  <form action="includes/signup.inc.php" method="post"class="signup-form" name="zone">
  <?php if (isset($_GET['error'] )){
    if ($_GET['error']=='invalidusernameout'){
echo '<p class="erreur">Username already taken</p>';
    }
    else if($_GET['error']=='passwordcheck'){
  echo '<p class="erreur" style : color: red font-size: 18px , font-family: Arial, Helvetica, sans-serif>Passwords must match</p>';
    }
    else if($_GET['error']=='succes'){
      echo '<p class="succ" style : color: green font-size: 18px , font-family: Arial, Helvetica, sans-serif> Signup was succesfull ! Welcome !</p>';
    }
  }
  ?>
    <p class="sign-form">Username</p>
    <?php 
    if (isset($_GET['id'])){
     $w=filter_input(INPUT_GET,"id",FILTER_DEFAULT);
      echo '<input type="text" name="usernameid" class="box" required value="'.$w.'"><br>';  }
      else{
        echo '<input type="text" name="usernameid" placeholder="Choose a username" class="box" required><br>';
      }
    ?>
    <p class="sign-form">Email</p>
    <?php
    if(isset($_GET['mailer'])){
    $p=filter_input(INPUT_GET,"mailer",FILTER_DEFAULT);
    echo '<input type="email" name="useremail" class="box"  required value="'.$p.'"><br>';
    }else {
    echo '<input type="email" name="useremail" placeholder="Insert your email address" class="box" required><br>';
    }
    ?>
    <p class="sign-form">Password</p>
    <input type="password" name="userpass" placeholder="Create a password" class="box"  required><br>
    <p class="sign-form">Repeat the password<p>
    <input type="password" name="userpass-repeat" placeholder="Repeat password" class="box" required><br>
    <button type="submit" class="signup-submit">Signup</button>
    <a href="index.php"><button class="can">Cancel</a></button>
  </form>
</div>
</main>
<?php
require "footer.php"
?>