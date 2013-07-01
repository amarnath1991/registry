

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>CSS Registration Form</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>



  </head>
    <body>    
        <form action="view.php" method="POST">

<input type="text" name="name" />

<input type="submit" name="submit" />

        </form>
    </body>

<?php 
if($_POST[name]=="Amar_123")
{

 
                          
    $cxn = mysqli_connect("localhost","myrjyiae_root","sbin0001358","myrjyiae_soudha")
             or die("Query died: connect");  
 $temp = "SELECT * FROM reg";



  $result = mysqli_query($cxn,$temp)
               
or die("Query died: username");

 



while($row=mysqli_fetch_array($result))
{
 
echo "<font color='green'>Id:</font>";
echo $row['id']; 
echo "<font color='green'>Author1:</font>";

echo $row['auth1']; 
echo "<font color='green'>Author2:</font>";
echo $row['auth2']; 
echo " "; 
echo $row['college']; 
echo " "; 
echo $row['u'];
echo "<font color='green'>Place:</font>";
echo $row['address'];
echo "<font color='green'>Paper:</font>";
echo $row['paper'];
echo "<font color='green'>Poster:</font>";
echo $row['poster'];
echo "<font color='green'>Title:</font>";
echo $row['title'];
echo "<font color='green'>E-mail id:</font>";
echo $row['email'];
echo "<font color='green'>Mobile:</font>";
echo $row['mnumber'];
echo "<font color='green'>Accomodation</font>";
echo $row['acc'];
echo "</br>";
} 


$sql="INSERT INTO reg (auth1, auth2, mnumber,address,paper,poster,title,email,branch,acc)
VALUES
($_POST[auth1]','$_POST[auth2]','$_POST[mnumber]','$_POST[address]','$_POST[paper]','$_POST[poster]','$_POST[title]','$_POST[email]','$_POST[branch]','$_POST[acc]')";

            	



}
?>