
<h1>welcome to our hotel </h1>

<?php
$serv='localhost';
$userna='root';
$pas='';
$database='hotel';
$con= new mysqli($serv,$userna,  $pas, $database);
$sql="CREATE table IF NOT EXISTS info(id int not null AUTO_INCREMENT PRIMARY KEY,users_name varchar(100) not null ,phone int(20),roome_id int not null ,price int ,number int,date_r date ,voucher varchar(12)  );";
$con->query($sql);

// define v from main.php page
$uname=$_GET['uname'];
$uphone=$_GET['uphone'];
$room_id=$_GET['room_id'];
$r_price=$_GET['r_price'];
// $number=$_GET['number'];
$date=$_GET['date'];
$vou=$_GET['vou'];

// valid user name or not AND valid room id or not
$sql = "SELECT users_name FROM info where users_name='$uname'";
$result2 = $con->query($sql);

$sql = "SELECT roome_id FROM info where roome_id ='$room_id'";
$result3 = $con->query($sql);


if ($result2->num_rows > 0 or $result3->num_rows > 0) :
    echo ("you can't do that the guest name : $uname or room : $room_id used before");
else:

    $sql="SELECT * FROM INFO WHERE VOUCHER = '$vou'";
    $result=$con->query($sql);
    
    if ($result->num_rows > 0):
        $r_price-=25 ;
        echo(" <br> because you have voucher the new price is $r_price instead of ".$r_price + 20);
    endif;


$sql="INSERT INTO `info`( `users_name`, `phone`, `roome_id`, `price`, `date_r`,voucher) VALUES ('$uname', '$uphone', '$room_id' , '$r_price', '$date','$vou')";

$con->query($sql);

endif;


?>
