<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
<h1>PHP is Fun!</h1>

<form action="welcome.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

<br>
<br>

<?php
Echo date("m/d/y");
Echo "<br>Hello World!<br>";
Echo "Good Morning ! <br><br>";

session_start();
if(isset($_SESSION['views']))
$_SESSION['views']=$_SESSION['views']+1;
else
$_SESSION['views']=1;
echo "Views=". $_SESSION['views'];
//shows how many times he sme person has viewed the page, all in the same session
echo "Pageviews=". $_SESSION['views'];

//single line comment
//more comments are better


?>



</body>
</html>
