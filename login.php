<?php
session_start();
$_SESSION['userValue']= $_POST['login'];
function createfile($filename)
{
        $myfile = fopen($filename, "w") or die("Unable to open file!");
        $txt = "-3\n";
        fwrite($myfile, $txt);
        $txt = "0\n";
        fwrite($myfile, $txt);
        $txt = "0\n";
        fwrite($myfile, $txt);
        $txt = "0\n";
        fwrite($myfile, $txt);
        $txt = "-5\n";
        fwrite($myfile, $txt);
        $txt = "0\n";
        fwrite($myfile, $txt);
        $txt = "0\n";
        fwrite($myfile, $txt);
        $txt = "0\n";
        fwrite($myfile, $txt);
        $txt = "-6\n";
        fwrite($myfile, $txt);
        $txt = "0\n";
        fwrite($myfile, $txt);
        $txt = "0\n";
        fwrite($myfile, $txt);
        $txt = "0\n";
        fwrite($myfile, $txt);
        $txt = "-8\n";
        fwrite($myfile, $txt);
        $txt = "0\n";
        fwrite($myfile, $txt);
        $txt = "0\n";
        fwrite($myfile, $txt);
        $txt = "0\n";
        fwrite($myfile, $txt);
        $txt = "-9\n";
        fwrite($myfile, $txt);
        $txt = "0\n";
        fwrite($myfile, $txt);
        $txt = "0\n";
        fwrite($myfile, $txt);
        $txt = "0\n";
        fwrite($myfile, $txt);
        $txt = "-10\n";
        fwrite($myfile, $txt);
        $txt = "0\n";
        fwrite($myfile, $txt);
        $txt = "0\n";
        fwrite($myfile, $txt);
        $txt = "0";
        fwrite($myfile, $txt);
        fclose($myfile);   
}
        
                $username = $_POST['login'];
                $password = $_POST['password'];
                
                if ($username == "admin" && $password == "password")
                        header('Location: http://cpsc362quiz.atwebpages.com/teacher.html');
                        
                else if ($username == "brian" && $password == "nuckles")
                {
                        $filename = 'brian.txt';
                        if (file_exists ($filename))
                                $username = "brian";
                        else
                        {
                                createfile($filename);
                        }
                                
                        header('Location: http://cpsc362quiz.atwebpages.com/chapters.html');
                }
                        
                else if ($username == "dennis" && $password == "wu")
                        {
                        $filename = 'dennis.txt';
                        if (file_exists ($filename))
                                $username = "dennis";
                        else
                        {
                                createfile($filename);  
                        }
                                
                        header('Location: http://cpsc362quiz.atwebpages.com/chapters.html');
                }
                        
                else if ($username == "josh" && $password == "beckman")
                        {
                        $filename = 'josh.txt';
                        if (file_exists ($filename))
                                $username = "josh";
                        else
                        {
                                createfile($filename);
                        }
                                
                        header('Location: http://cpsc362quiz.atwebpages.com/chapters.html');
                }
                        
                else if ($username == "eryu" && $password == "suo")
                        {
                        $filename = 'eryu.txt';
                        if (file_exists ($filename))
                                $username == "eryu";
                        else
                        {
                                createfile($filename);
                        }
                                
                        header('Location: http://cpsc362quiz.atwebpages.com/chapters.html');
                }
                        
                else if ($username == "philip" && $password == "tanwongprasert")
                        {
                        $filename = 'philip.txt';
                        if (file_exists ($filename))
                                $username == "philip";
                        else
                        {
                                createfile($filename);  
                        }
                                
                        header('Location: http://cpsc362quiz.atwebpages.com/chapters.html');
                }
                          
                else
                        header('Location: http://cpsc362quiz.atwebpages.com/failed.html');
                        
                        
?>
