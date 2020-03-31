<?php


//echo phpinfo();


$rem = $_POST;

//print_r($rem);

$rem1 = $_POST['remember1'];
$rem2 = $_POST['remember2'];
$rem3 = $_POST['remember3'];
$rem4 = $_POST['remember4'];

if($rem1=='on' && $rem2=='on' && $rem3=='on'&& $rem4=='on'){
    $q1 = $_POST['question1'];
    $q2 = $_POST['question2'];
    $q3 = $_POST['question3'];
    $q4 = $_POST['question4'];
    $q5 = $_POST['question5'];
    
    if($q1=='Нет' && $q2=='Нет' && $q3=='Нет'&& $q4=='Нет'&& $q5=='Нет'){
        $lastName=$_POST['last-name'];
        $firstName=$_POST['first-name'];
        $email=$_POST['email'];
        $card=$_POST['card'];
        $date=date('Y-m-d');

        // Create connection
        $conn = new mysqli("localhost", "root", "1111", "mydb2");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "INSERT INTO users (last_name, first_name, date, email, type_card) VALUES ( '$lastName', '$firstName', '$date', '$email', '$card')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
        
        //echo "<br>Сообщение успешно отправлено!<br>";
        header("Location: ./result_card_yes.html"); /* Redirect browser */
        exit();
        
    }
    else 
    {
        header("Location: ./result_card_rules_no_health.html"); /* Redirect browser */
        exit();
    }

}
else
    //echo "<br>Для того чтобы продолжить оформление необходимо согласиться с правилами.<br>";
    header("Location: ./result_card_rules_no.html"); /* Redirect browser */
    exit();




    
    
    
//echo phpinfo();
