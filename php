//Method one for php connection to xampp server

//step 1 :- first install and open xampp server and start apache and mysql.
//step 2 :-then open "localhost/myphpadmin".
//step 3 :-then create a database(db) and create a table in db.
//step 4 :-then write this code on your code editor and run.

<?php

$server="localhost";
$username="root";
$password="";
$dbname="(your database name which you have created in "localhost/myphpadmin")";

$conn=mysqli_connect($server,$username,$password,$dbname);

if(mysqli_connect_error()){
echo "failed";
}
else{
echo "connected successfully";
}

?>


//Method two for php connection to xampp server

<?php

$server="localhost";
$username="root";
$password="";
$dbname="(your database name which you have created in "localhost/myphpadmin")";

try{
$conn= new PDO("mysql:host=$server,dbname=$dbname",$username,$password);

$conn->setAttribute(PDO:ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION):
echo "connected successfully to database";
}
catch(PDOEXECPTION $e ){
echo "something went wrong".$e->getMessage();
}

?>
