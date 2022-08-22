
 <html>
    <head>
         <meta charset="UTF-8">
        <title>control direction</title>
         <style> 
        body{
            font-family: arial;
            font-size: 16px;
            background:linear-gradient(to right bottom, #8fb7e5, #031f6a);
            color: #000;
            display: flex;
           justify-content: center;
         }
        
       
        h1{
            color: #fff;
            font-size: 50px;
        }
      
        button{
            padding: 12px 50px;
          background: #ffffff;
           color: rgb(19, 18, 18);
          font-size: 18px;
           cursor: pointer;
          border-radius: 5px;
        }
        </style>
    </head>
    <body>
    <?php 
 $var= $_POST["desc"];?>     
   
  <h1><?php echo $var;?></h1> 
   <?php 
  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = 'root';
  $db_db = 'SmartMethodTask3';
  $db_port = 8889;

  // Create connection
  $conn  = new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db
  );

 
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

 $sql =  "INSERT INTO directions (directionsid,selectedDirection) VALUES (NULL, '$var')";

if ($conn->query($sql) === TRUE) {
   
}   

$conn->close();
 

?>
     </body>
</html>

