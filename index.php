<pre>
<?php

//// output
// echo "Hello world";
// echo "<br>";
// print_r( [1, 2, 3, 4] );
// var_dump( [1, 2, 3, 4] );

////variables
// $a = "10";
// $b = 20;
// echo $a + $b;
// echo '<br>';
// var_dump($a);

$str = "hello world";
$arr = [1, 2, 3, 4];
$good = false;//true
$kotak = null;
$json = [ 
    "name" => "Zubair",
    "class" => 10,
 ];
var_dump($json);

// + - * /    < > >= same as js
// concatenation    .

//if else same as js

//for loop while loop do-while loop same as js


$data = [1, 2, 3, 4, 5];
$sum = 0;

foreach($data as $item)
{
    $sum += $item;
}

echo "Sum is ";
echo $sum;

/* 
data = [1, 2, 3 ,4];
for(let item of data)
{
    sum += item;
}
*/


echo '<h1>Strings</h1>';


$name = "Moin";
$age = 10;
echo "How are you $name and age is $age";
echo "<br>";
echo 'How are you $name and age is $age';

$x = "hello";
$y = "world";

echo "<br>";
echo "<br>";
echo $x ." ". $y;


echo "<br>";
echo 'Length of str ';
echo strlen( "Hello world" );





// Arrays one-dimension   multi-dimension    associative-array( js JSON, key=>value pairs)
















?>
</pre>