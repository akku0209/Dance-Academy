<?php
include('db.php');
$sql="select * from videos";
$res=mysqli_query($con,$sql);
echo "MYVIDEOS";

while($row=mysqli_fetch_assoc($res)){
    $id=$row['id'];
    $name=$row['name'];

    echo "<h4><a href='watch.php?id=$'>".$name."</a></h4";
}
?>