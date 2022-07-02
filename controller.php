<?php 
session_start();
$conn = mysqli_connect("localhost:3306","root","","addmore_data") or die ("Connection failed");

if (isset($_POST['saveMulti'])) {
    $fullName = $_POST['fullName'];
    $phone = $_POST['phone'];

    foreach( $fullName as $key => $saveData ) {

        $saveName   = $saveData;
        $savePhn    = $phone[$key];
        $query      = mysqli_query($conn,"INSERT INTO addindata (fullName, phn) VALUES ('$saveName', '$savePhn')");
        // echo'<pre>';print_r($query);
    }
    // exit;
    if($query) {

        $_SESSION['status'] = "Multiple data inserted successfully";
        header("Location: index.php");
        exit(0);

    } else {

        $_SESSION['status'] = "Data not inserted";
        header("Location: index.php");
        exit(0);

    }
}

?>