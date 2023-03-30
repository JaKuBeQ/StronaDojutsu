<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $mail = $_POST['email'];
    $pass = $_POST['pass'];

    try{
        $conn = new PDO("mysql:host=mkwk086.cba.pl;dbname=arczippl","arczippl","Zstussie2023db");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT email,password FROM users WHERE email = '$mail'";
        $result = $conn->query($sql);

        if($result->rowCount() > 0){
            $row = $result->fetch(PDO::FETCH_ASSOC);
            if(password_verify($pass, $row['password'])){
                print_r(json_encode(array('success' => true)));
            }else{
                print_r(json_encode(array('success' => false)));
            }
        }else{
            print_r(json_encode(array('success' => false)));
        }
    
    }catch(PDOException $e){
        echo array('error' => $e);
    }


}

if($_SERVER["REQUEST_METHOD"] == 'GET'){
    if(isset($_GET['data'])){
        try{
            $param = $_GET['data'];
            $conn = new PDO("mysql:host=mkwk086.cba.pl;dbname=arczippl","arczippl","Zstussie2023db");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = $conn->prepare("SELECT * FROM description WHERE description_id='$param'");
            $sql->execute();
            while($result = $sql->fetch(PDO::FETCH_ASSOC)){
                echo json_encode($result);
            }

        }catch(PDOException $e){
            echo json_encode(array('error' => $e, 'time_stamp' => date('Y-m-d H:i:s')));
        }
    }
}

?>