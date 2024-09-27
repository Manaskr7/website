<?php
    $title = $_POST['title'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $Gender = $_POST['Gender'];
    $company = $_POST['company'];
    $business = $_POST['business'];
    $street = $_POST['street'];
    $additional = $_POST['additional'];
    $zip = $_POST['zip'];
    $country = $_POST['country'];
    $phone = $_POST['phone'];
    $your_email = $_POST['your_email'];
   
    //data base connection
    
    $conn = new mysqli('localhost','root','','test');
    if($conn->connect_error){
        die('connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into column(title,first_name,last_name,Gender,company,business,street,additional,zip,country,phone,your_email)
        values(?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ississsssiss",$title,$first_name, $last_name , $Gender ,$company , $business ,$street,$additional,$zip,$country,$phone,$your_email);
        $stmt->execute();
        echo "resistration Successfully...";
        $stmt->close();
        $conn->close();
    }
?>