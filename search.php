<?php
    define( "DB_SERVER", "localhost" );
    define( "DB_USER", "root" );
    define( "DB_PASSWORD", "root" );
    define( "DB_NAME", "registration" );

    $conn = new mysqli( DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME );

    // if( $conn->connect_error ){
    //   echo $conn->connect_error;
    // }else {
    //   echo "Connection to database established successfully!";
    // }


    // search by month
    $months = $_POST['option'];
    $q = "SELECT * FROM `registrations`";
    $resultsByMonths = $conn->query( $q );
    $resultByMonths = $resultsByMonths->fetch_assoc();
    $resultsByMonthsArray = array();
    while($resultByMonths = $resultsByMonths->fetch_assoc()){
      array_push( $resultsByMonthsArray, $resultByMonths );
    }


    // search by user input
    $userInput = $_POST['search'];
    $query = "SELECT `id`, `first_name`, `last_name`, `email`, `ip`,`created_at`,`updated_at`
              FROM `registrations` WHERE `id` LIKE '$userInput%'
              OR `first_name` LIKE '$userInput%' OR `last_name` LIKE '$userInput%'
              OR `email` LIKE '$userInput%' OR `ip` LIKE '$userInput%'
              OR `created_at` LIKE '$userInput%' OR `updated_at` LIKE '$userInput%'";

    $results = $conn->query( $query );
    $resultArray = array();

    while ($result = $results->fetch_assoc()) {
      array_push( $resultArray, $result );
    }



    // insert user info
    $name = $_POST['name'];
    $suarname = $_POST['suarname'];
    $email = $_POST['email'];
    $ip = $_POST['ip'];
    $created = $_POST['created_at'];
    $updated = $_POST['updated_at'];

    if(isset($_POST['name'])){
    $queryInsert = "INSERT INTO `registrations` (`first_name`, `last_name`, `email`, `ip`,`created_at`,`updated_at`)
                    VALUES '".$name."', '".$suarname."', '".$email."', '".$ip."','".$created."','".$updated."'";
    $resultsInsert = $conn->query( $queryInsert );

          if ($queryInsert) {
              echo "<p>Данные успешно добавлены в таблицу.</p>";
          } else {
              echo "<p>Произошла ошибка.</p>";
          }
      }
















?>
