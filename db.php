<?php
    define("hostname","localhost");
    define("user","root");
    define("password","");
    define("dbConn","bookstore");
?>
<?php
    $mysqli = new mysqli((hostname,user,password,dbConn);
    
    // Check connection
    if ($mysqli -> connect_errno) {
      echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
      exit();
    }

?>