<?php

//$service = implode("," , $service);

if ($_SERVER["REQUEST_METHOD"]=="POST"){

    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $location = $_POST["location"];
    $service = $_POST["service"];
    // $items = $_POST["items"];
 
    // $Curstomer_Name =htmlspecialchars($_POST["name"]);
    // $Location = htmlspecialchars($_POST["location"]);
    // $Item = htmlspecialchars($_POST["item"]);

            //  Handling Error

     if(empty ($name) || empty($gender) || empty($email) || empty($tel) || empty($location)|| empty($service)){

         header ("location: order.html");   

         exit();
    
     }
 

    try {
        require_once "dbh.inc.php";
        $query = " INSERT INTO customer_service (name, gender, email, tel, location, service) VALUES (?, ?, ?, ?, ?, ?);";
        $stmt = $pdo->prepare ($query);

       
        $stmt ->execute([$name, $gender, $email, $tel, $location, $service]);


        $pdo = null;
        $stmt = null;

        header ("Location: order.html");
        exit();
        
     }
      catch (PDOException $e) {
        die("Query failed:" . $e->getMessage());
    }
} else{
         header("Location: order.html");
         exit();
     }

    
   
    
?>

 