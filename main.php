
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="hotel.php" method="get">
    <label>guest name</label>
    <input type="text" name="uname" placeholder="enter user name" required >
    <br>
    <br>
    <label>guest phone </label>
    <input type="text" name="uphone" placeholder="not require" >
    <br>
    <br>
    <label> room id</label>
    <input type="text" name="room_id" placeholder="enter user room number" required >
    <br>
    <br>
    <label> price for room</label>
    <input type="text" name="r_price" placeholder="enter room price" required>
    <br>
    <br>
    
    <label>voucher</label>
    <input type="text" name="vou" placeholder='write voucher for discount'>
    <br>
    <br>
    <label for="p">DATE of room here =>  </label>
    <input type="date" name="date" id="p" required>
    <input type="submit" value="submit">
    




    </form>
</body>
</html>

<?php



?>