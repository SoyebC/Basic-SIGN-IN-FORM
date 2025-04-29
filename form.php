 <?php
    echo "the user_name is :".$_POST['user_name'];
    echo "<br/>";
    echo "the user_email is :".$_POST['email'];
    echo "<br/>";
    echo "the user_password is :".$_POST['user_password'];
    echo "<br/>";
    echo "programming language knowen :".implode(",",$_POST['skills']);
    echo "<br/>";
    echo "user gender is :".$_POST['gender'];
    echo "<br/>";
    echo "user city is :".$_POST['city'];
    echo "<br/>";
 
 
 ?>