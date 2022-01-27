<!DOCTYPE html>
<?php
    $user_nisn = 0;
    $user_ttl_dd = 0;
    $user_ttl_mm = 0;
    $user_ttl_yy = 0;

    if(isset($_POST['submit'])){
        $user_nisn = $_POST['user_no'];
        $user_ttl_dd = $_POST['user_ttl_dd'];
        $user_ttl_mm = $_POST['user_ttl_mm'];
        $user_ttl_yy = $_POST['user_ttl_yy'];
    }
    
    $servername = "localhost";
    $username = "";
    $password = "";
    $databasename = "test";
     
    $conn = new mysqli($servername, $username, $password, $databasename);
    
    if($conn->connect_error){
        die("Connection Failed".$conn->connect_error);
    }
    // echo "Connection Succeed";

    $sql = "SELECT * FROM Daftar_Siswa_Lolos WHERE NISN={$user_nisn} AND TTL='{$user_ttl_yy}-{$user_ttl_mm}-{$user_ttl_dd}'";
    $result = $conn->query($sql);

    // debug function

    function debug_to($output){
    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
    }

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        if($row['Status'] == 1){
            include 'user_dashboard.php';
            // echo $row['Status'];
            // debug_to($row['Status']);
        } else{
            include 'user_dashboard_fail.php';
        } 
    } else {
        include 'user_not_found.php';
    }

    $conn->close();
?>
