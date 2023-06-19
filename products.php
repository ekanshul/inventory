<?php

$servername = 'sql12.freemysqlhosting.net';
$database = 'sql12627224';
$username = 'sql12627224';
$password = 'VVgGyEIIG4';
$port = 3306;


$conn = new mysqli($servername, $username, $password, $database, $port);

if(!$conn){
    die("Connection Failed".mysqli_connect_error());
}

if(isset($_POST['insert'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $level=$_POST['level'];
    $quantity=$_POST['quantity'];
    $cost=$_POST['cost'];

    $sql_query="INSERT INTO products(id,name,level,quantity,cost)VALUES('$id','$name','$level','$quantity','$cost')";
    if(mysqli_query($conn,$sql_query)){
        echo "Inserted Successfully";
    }
    else{
        echo "Error: ".$sql."".$mysqli_error($conn);
    }
    mysqli_close($conn);
}


if(isset($_POST['update'])) {
    $id=$_POST['id'];
    $name=$_POST['name'];
    $level=$_POST['level'];
    $quantity=$_POST['quantity'];
    $cost=$_POST['cost'];


$sql_query="UPDATE products SET quantity='$quantity' WHERE id='$id'";;
if(mysqli_query($conn,$sql_query)){
    echo "Updated successfully";
}
else{
    echo "Error:".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);

}

if(isset($_POST['delete'])) {
    $id=$_POST['id'];
    $name=$_POST['name'];
    $level=$_POST['level'];
    $quantity=$_POST['quantity'];
    $cost=$_POST['cost'];


$sql_query="DELETE from products where id='$id'";
if(mysqli_query($conn,$sql_query)){
    echo "Deleted successfully";
}
else{
    echo "Error:".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);

}
?>

<?php
if(isset($_POST['view'])) {
    $id=$_POST['id'];
    $name=$_POST['name'];
    $level=$_POST['level'];
    $quantity=$_POST['quantity'];
    $cost=$_POST['cost'];


$sql_query="SELECT * from products where id='$id'";

$result = mysqli_query($conn,$sql_query);

?>

<html>
<head>    
    <title>products</title>
</head>
<body>
    <table width='80%' border=1>
    <tr>
        <th>Product ID</th> <th>Product Name</th> <th>Reorder Level</th> <th>Quantity</th> <th>Cost</th>
    </tr>
    <?php  
    while($products = mysqli_fetch_array($result)) {   

        echo "<tr>";
        echo "<td>".$products['id']."</td>";
        echo "<td>".$products['name']."</td>";
        echo "<td>".$products['level']."</td>";
        echo "<td>".$products['quantity']."</td>";    
        echo "<td>".$products['cost']."</td>";    
        echo "</tr>";        
    }
}
    ?>
    </table>
</body>
</html>






 




