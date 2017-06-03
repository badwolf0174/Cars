<?php



require('config.php');


$sql = "SELECT * FROM MWFM2_Herkansing WHERE 1";

$result = mysqli_query($mysqli,$sql);


while($data =  mysqli_fetch_array($result))
{
    echo "<a href='car_detail.php?car_id=".$data['id']."'>";
    echo "<img src='".$data['Image']."' width='400' height='200'>";
    echo "</a>";
    echo"</br>";
}