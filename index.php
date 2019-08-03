<?php
require "header.php"
 ?>
 <main>

<?php
if (isset($_SESSION['uid'])){
echo '<form class="text" method="post" action="includes/logout.inc.php" style >';
echo '<button type="submit" class="loggout-button" style="
color: white;
background-color: red;
padding: 14px 20px;
border: none;
margin: 8px 50px;
cursor: pointer;
opacity: 0.9;
">Logout</button>'; 
}
else {
echo '<form class="text" method="post" action="includes/login.inc.php">';
echo '<input type="text" name="username" placeholder="Enter username">';
echo'<input type="password" name="password" placeholder="Enter password">';
echo'<button type="submit" name="login-submit" class="login-button">Login</button><br>';
echo' <a href="signup.php" class="go-signup">Signup</a>';
echo '<a href="forgot.php" class="go-forgot">I forgot my password</a>';
}
?>
</form>
</div>
</main>
<?php
require "footer.php"
 ?>