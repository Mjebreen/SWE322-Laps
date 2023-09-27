
<?php
$arr = array("Mohammed","Saad","Saud","Fahad");
$ar_length = count ($arr);
echo " <h1>Prac 1 </h1>";
    echo "The first element of the array is " .$arr[0];
        echo "<br>The count of the elements is " .$ar_length;
            echo "<br>";
for ($i = 0; $i < $ar_length; $i++) {
    echo $arr[$i] . "<br>";}
if ($arr[0]== "Mohammed"){
echo "Mohammed is trying to do better";
}
?>






<?php
$arr = array("p1"=>"Mohammed","p2"=>"Saad","p3"=>"Saud","p4"=>"Fahad");
$ar_length = count ($arr);
echo " <h1>Prac 2 </h1>";
    echo "The first element of the array is " .$arr["p1"];
        echo "<br>The count of the elements is " .$ar_length;
            echo "<br>";
 foreach ($arr as $name) {
     echo $name . "<br>";
}
?>



<?php
echo " <h1>Prac 3 </h1>";

$con = date("I");
#I == 2 
if ($con <"2"){
    echo "Hope you have a nice day! ";
}
?>
