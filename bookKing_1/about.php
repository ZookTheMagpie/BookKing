<!DOCTYPE html>
<!--
Made by: Asbjørn Frostad.
-->
<html>
    <head>
        <title>About us</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="normalize.css">
        <link rel="stylesheet" type="text/css" href="main.css">
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="about.css">


    </head>
    <body>
        <nav id="navigation">
            <ul>
                <li><a href="index.html">Home</a>
                    <ul>
                        <li>
                            <a href="#">sub1</a>
                            <a href="#">sub2</a>
                            <a href="#">sub3</a>
                        </li>
                    </ul>
                </li>
                <li><a href="CatPage.html">Kategoriside</a></li>
                <li><a href="#">Forum</a></li>
                <li><a href="#">Wiki</a></li>
                <li><a href="#">Andre medium</a></li>
                <li><a href="about.php">Om oss</a></li>
            </ul>
        </nav>
        <section id="about">
            <?php

  
  
  //Email information
  $admin_email = "geeky_assb@live.no";
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $comment = $_POST['comment'];
  
  //send email
  mail($admin_email, $subject, $comment, "From:" . $email);
  
  //Email response
  echo "Thank you for contacting us!";
  
  
 ?>
  

 <form id="about_form" action="" method="POST">
  Email: <input id="email" name="email" type="text" /><br />
  Subject: <input id="subject" name="subject" type="text" /><br />
  Message:<br />
  <textarea id="comment" name="comment" rows="15" cols="40"></textarea><br />
  <input id="submit" type="submit" value="Send" />
  </form>
  
<?php
  
?>


        </section>
        <aside id="meny">
            <ul>
                <li>
                    <a href="#">Om oss</a>  
                </li>
                <li>
                    <a href="#">Historie</a>
                </li>
                <li>
                    <a href="#">Medlemmer</a>
                </li>
                <li>
                    <a href="#">liste</a>
                </li>
                <li>
                    <a href="#">liste</a>
                </li>
            </ul>
        </aside>
        <footer> </footer>
    </body>
</html>
