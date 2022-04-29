<?php
    if(isset($_POST['submit'])) {
        if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['age'])) {
            echo 'Please Fill in the Blanks';
        }
        else {
            $UserName = $_POST['name'];
            $UserEmail = $_POST['email'];
            $UserAge = $_POST['age'];

            $host = "sql202.epizy.com";
            $username = "epiz_30833591";
            $password = "363s16BydSiwdL";
            $dbname = "epiz_30833591_Trinity_Cafe_assignment";
            $dbport = 3306;

            // Creating databse connection
            $con = mysqli_connect($host, $username, $password, $dbname, $dbport);

            if($con) {
                print('Connection established successfully.');
            } 
            else {
                die("Connection Error" . mysqli_connect_error());
            }

            $query = "INSERT INTO records (User_Name, User_Email, User_Age) VALUES('$UserName','$UserEmail','$UserAge')";
            $result = mysqli_query($con, $query);

            if($result) {
                header('location:view.php');
            }
            else {
                echo 'Please check your query';
            }
        }
    }
    else {
        header('location:index.html');
    }

?>