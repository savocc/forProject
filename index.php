<?php
$filename = "database.sql";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "forform";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
import_tables('localhost','root','','forform',$filename);

function import_tables($host,$username,$pass,$database, $filename,$tables = '*')
{
    $connection = mysqli_connect($host, $username, $pass)
    or die("Database Connection Failed");
    $selectdb = mysqli_select_db($connection, $database) or die("Database could not be selected");

    $templine = '';
    $lines = file($filename); // Read entire file

    foreach ($lines as $line) {
        // Skip it if it's a comment
        if (substr($line, 0, 2) == '--' || $line == '' || substr($line, 0, 2) == '/*')
            continue;

        // Add this line to the current segment
        $templine .= $line;
        // If it has a semicolon at the end, it's the end of the query
        if (substr(trim($line), -1, 1) == ';') {
            mysqli_query($connection, $templine);

            $templine = '';
        }
    }

}



?>
<script>
    function myFunction() {
        window.replace("register.php");
    }


         </script>





