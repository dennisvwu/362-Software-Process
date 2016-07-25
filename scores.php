<?php
session_start();
?>
<html>

<style>
h1{
	text-align: center;
}

</style>

<body style="background-color:103D74;">
	
<div id="page-wrap">

        <font color="FFFFFF">
        <h1>Quiz Scores</h1>
        </font>
              
        <div style="background-color:DDDDFF;">
        <fieldset>
        	
	<?php
            
            $user = $_SESSION['userValue'];
            $user = $user . ".txt";
            $count = 0;
            
            $myfile = fopen( $user, "r") or die("Unable to open file!");
            
            $chapter[0] = fgets($myfile);
            $next = fgets($myfile);
            $next = fgets($myfile);
            $latestscore[0] = fgets($myfile);
                                
            $chapter[1] = fgets($myfile);
            $next = fgets($myfile);
            $next = fgets($myfile);
            $latestscore[1] = fgets($myfile);                    
                                
            $chapter[2] = fgets($myfile);
            $next = fgets($myfile);
            $next = fgets($myfile);
            $latestscore[2] = fgets($myfile);

                                
            $chapter[3] = fgets($myfile);
            $next = fgets($myfile);
            $next = fgets($myfile);
            $latestscore[3] = fgets($myfile);
                                
            $chapter[4] = fgets($myfile);
            $next = fgets($myfile);
            $next = fgets($myfile);
            $latestscore[4] = fgets($myfile);
                                
            $chapter[5] = fgets($myfile);
            $next = fgets($myfile);
            $next = fgets($myfile);
            $latestscore[5] = fgets($myfile);
                                
            fclose($myfile);  
                                
        for ($i = 0; $i <= 5; $i++) 
        {
            $integer = $chapter[$i] * -1;
            
            echo "Chapter: $integer";
            echo "<br>";
            echo "Recent Score: $latestscore[$i]";
            echo "<p>";
        }          
             
       ?>
        
        </fieldset></div><br>

        <button onclick="goBack()">Go Back</button>

        <script>
        function goBack() 
        { window.history.back(); }
        </script>
        
        <p><form action="chapters.html">
            <input type="submit" value="Main Page">
        </form>
                
</div>

</body>
</html>
