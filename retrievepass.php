<?php
session_start();

$username = $_POST['login'];
$cwid = $_POST['cwid'];

$filename = "users.txt";
                $myfile = fopen($filename, "r") or die("Unable to open file!");
                while(!feof($myfile))
                {
                    $user = fgets($myfile);
                    $pass = fgets($myfile);
                    $campus = fgets($myfile);
                    if ($user == $username && $campus == $cwid)
                    {
                            $_SESSION['usr']=$user;
                            $_SESSION['pas']=$pass;
                            header('Location: http://cpsc362quiz.atwebpages.com/retrieved.php');
                    }
                }
                fclose($myfile); 
                
                header('Location: http://cpsc362quiz.atwebpages.com/lost.html');
                
?>