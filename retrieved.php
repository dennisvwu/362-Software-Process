<?php
session_start();
?>
<html>
<style>
h1{
	text-align: center;
}
h2{
	text-align: center;
}
h4{
	text-align: center;
}
form{
	text-align: center;
}
h5{
        text-align: center;
        }                
h3{
        text-align: center;
        font color="00FF00";
        }
</style>

<body style="background-color:103D74;">
<img src="csuf-logo-header.png" alt="logo" >
<div id="main">
	<font color="FFFFFF">
		<h1>CPSC 362 2016 Term Project</h1>
		<h4>by: Josh Beckman | Brian Nuckles | Eryu Suo | Philip Tanwongprasert | Dennis Wu</h4>
	</font>
</div>

<div id="page-wrap"> 

        <div style="background-color:DDDDFF;">
        
        <fieldset>
                
                <?php
                $name = $_SESSION['usr'];
                $pass = $_SESSION['pas'];
                
                echo "<h3>The password for user $name is $pass.</h3";
                ?>
                <h2>Please enter your username and password.</h2>
                
                <form method="post" action="login.php">
                        <p><input type="text" name="login" value="" placeholder="Username"></p>
                        <p><input type="password" name="password" value="" placeholder="Password"></p>
                        
                        <p class="submit"><input type="submit" name="commit" value="Login"></p>
               </form>
               <form method="post" action="register.html">
                        <p class="submit"><input type="submit" name="register" value="Register"></p>
               </form>
                <h5><A HREF="retrievepass.html">Forgot your password?</A></h5>
        </fieldset></div>
   
             
</div>

</body>
</html>