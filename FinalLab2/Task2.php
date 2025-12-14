<?php 
print"<h1>Task 1 : </h1>";
$length = 10;
$width=5;
$area = $length * $width;
$perimeter= 2*($length+$width);
print "Total Area is ". $area ."<br>";
echo"perimerter= $perimeter";
?>

<?php
print"<h1> Task 2 :</h1>";
$amount=1000;
$vat=$amount*0.15;
$total=$amount+$vat;
echo "VAT=$vat <br>";
echo "Total with VAT=$total";

?>

<?php
print"<h1> Task 3:</h1>";
$num=7;
if($num %2 == 0){
    echo "$num is Even";
}else{
    echo"$num is odd";
}
?>

<?php
print "<h1> Task 4 :</h1>";
$a=10;
$b=25;
$c=15;
if ($a>$b && $a>$c){
    echo"$a is the largest";
}elseif($b>$c){
    echo"$b is the largest";
}
else{
    echo"$c is the largest";

}
?>


<?php
print"<h1> Task 5:</h1>";
echo"Odd numbers between 10 to 100 <br>";
for($i=10; $i<=100;$i++){
    if($i%2!=0){
        echo $i. " ";
    }
}
?>

<?php
print"<h1> Task 6:</h1>";
$arr=array(5,10,15,20,25);
$search=15;
$found=false;
foreach($arr as $value){
    if($value==$search){
        $found=true;
        break;
    }
}
if($found){
    echo"$search found in array";
}else{
    echo"$search not found in array";
}
?>


<?php
print"<h1> Task 7</h1>";
print"<h3> Shape 1</h3>";
for ($i=1; $i <=3; $i++){
    for($j=1; $j<=$i; $j++){
        echo"*";
    }
    echo "<br>";
}
print"<h3>Shape 2</h3>";
for($i =3; $i>=1;$i--){
    for($j=1; $j<=$i; $j++){
        echo$j." ";
    }
    echo"<br>";
}
print"<h3>Shape 3</h3>";
$ch='A';
for($i =1; $i<=3;$i++){
    for($j=1; $j<=$i; $j++){
        echo$ch." ";
        $ch++;
    }
    echo"<br>";
}

?>

<?php
print"<h1> Task : 8 </h1>";
$arr=[
    [1,2,3,'A'],
    [1,2,'B','C'],
    [1,'D','E','F']
];
for($i=3; $i>=1;$i--){
    for($j=0;$j<$i; $j++){
        echo $arr[0][$j]." ";
    }
    echo "<br>";
}
echo"<br>";
for($i=0; $i<3;$i++){
    for($j=3-$i;$j<4;$j++){
        echo $arr[$i][$j]." ";
    }
    echo "<br>";
}
?>

