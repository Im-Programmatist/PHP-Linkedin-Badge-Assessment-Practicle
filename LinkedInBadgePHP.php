<?php 
print("\n-----\t** Operator- Power of ----\t\n");
$x = 2;
$y = 2;
print("** operator used to set one variable power of another (y is power of x)".$x**$y."\n");//y is Power of x ==>4 

print("\n-----\tBoolean Condition Check----\t\n");
// '', 0 will be false in condition but 1 and -1 will be true in PHP8.0
if(!''){
	print("''-> false\n");
}
if(!0){
	print("0-> false\n");
}
if(-1){
	print("-1 -> true\n");
}

print("\n-----\tOperator precidency----\t\n");
//Operator precidency --> /,*,+,-
print("*** While assigning the value to valiable there are 2 cases -- 1. Assign plain number & 2. Assign variable to variable\n");
print("1. If value number is assign to variable it will work as per calculation, + before = then first left operand add  the value then assign value to left operand \n");
print("2. If value assign as variable then left operand will check + sign before or after and decide the operation of assign\n");
print("--> + before = then first add and then assign\n");
print("--> + after = then first assign value then add it add operation perform\n");
$total = 2 + 5 * 20 - 6 / 3;
print("Operator precidency --> /,*,+,-, so total is -".$total."\n");
$fruits = ['apple', 'orange', 'pear', 'mango', 'papaya','chetan']; 
$i = 0; 
Print("\n Assigning operator with numbers - \n");
echo $fruits[$i+=3]."\n";
echo $fruits[$i=+3]."\n";
echo $fruits[$i-=3]."\n";

Print("\n Assigning operator with variables - \n");
$a = 1;
$b = 2;
$c = 3;
$d = 5;
$e = 6;
$f = 0;

$a+=$b;
echo "\n a is -: ";
print($a);//first add(1+2) then assign addition value to a=3
echo "\n b is -: ";
print($b);// b will be same

$c=+$d;
echo "\n c is -: ";
print($c);//first assign value of d to c and then addition happen, so value of c now - 5

//as $c has assigned value of $d
$f = $c + $e;// here not 3 + 6 it is now 5+6
echo "\n F is -: ";
print($f);//it would be 11

print("\n-----\tClass and its object creation----\t\n");
class A {
	function b(){
		print("b methodd in A class called\n");
		return (string)"this is b called";
	}
	public function __toString(){
		return "hello ". $this->b(). " & my age is 29";
	}
}
$inst1=new A;
$inst1->b();
$inst2=new A();
$inst2->b();
$inst3=(new A);
$inst3->b();
print("\n Print object as string using tostring- ".$inst1);

print("\n-----\t... spread operator for no. of param to functions in php----\t\n");
//... spread operator allows amormous param values to function and return array of all these values
c(1,2,3,4,5,6,7);
function c(...$vals){
	print_r("... operator takes n number of values to function param and return array \t".$vals."\n");
}

print("\n-----\tarray declaration in php----\t\n");
//array declaration
$seasons=array("spring","summer","autumn","winter");
print_r($seasons);

print("\n-----\t/Set Cookies in php----\t\n");
//Set Cookies --->
$cookie_name = "user";
$cookie_value = "Chetan Patil";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!\n";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>\n";
    echo "Value is: " . $_COOKIE[$cookie_name]."\n";
}

print("\n-----\tprint or echo statements in php----\t\n");
//\ must se before apostropes
//Print statement using echo
$string = 'Shylock in a Shakespeare\'s "Merchant of Venice" demands his pound of flesh.';
$test = "abc";
print $string."\n";
echo $test, ' ', $string; //Valid
echo $test. ' '. $string;// valid
//print $test, ' ', $string; //invalid
print("\n");

//Read and extract xml data in php
print("\n-----\tRead and extract xml data in php----\t\n");
$books = simplexml_load_file('./books.xml');
echo $books->book[0]->categories->category[1];
print("\n");
$stringXML = "<books>
<book>
	<title>A Tale of Two Cities</title>
	<author>Charles Dickens</author>
	<categories>
		<category>Classics</category>
		<category>Historical</category>
	</categories>
</book></books>";
$books = simplexml_load_string($stringXML);
echo $books->book[0]->categories->category[1];
print("\n");
//
$result = doStuff("chetan","Korde");
var_dump($result);
function doStuff($haystack, $needle) {
	$length = strlen($needle);
	print(substr($haystack, 0, $length));
	print(strlen($needle));
	if (substr($haystack, 0, $length) == $needle)
	  return true;
	else
	  return false;
}

//extract the domain suffix ("com") from the string 
print("\n-----\textract suffix from the string ----\t\n");
$string = "https://www.youtube.com";
print("suffix ('com')  - ".substr($string, -3)."\n");
print("suffix ('https')  - ".substr($string, 0, 5)."\n");
print("skip https:// and rest string is - ".substr($string, 8)."\n");

print("\n-----\t == & === Operator----\t\n");
if( 1 == true){
	echo "1";
}//True
if( 1 === true){
  	echo "2";
}//False
if("chetan" == true){
  	echo "3";
}//True
if("php" === false){
  	echo "4";
}//False
print("\n");

//$ and $$ variables 
//Here $$name will convert to $(value of $name) i.e. $Cat
print("\n-----\t$ and $$ variables----\t\n");
$name = "Cat";
$$name = "Dog";
echo $name . "<br/>";
echo $$name . "<br/>";
echo $Cat;

//Spaceship Operator- introduce in php7.0
//This is a three-way comparison operator 
//and it can perform greater than, less than and equal comparison between two operands.
//This operator has similar behavior like strcmp() or version_compare()
/*This <=> operator offers combined comparison :
Return 0 if values on either side are equal
Return 1 if value on the left is greater
Return -1 if the value on the right is greater
*/
print("\n-----\tSpaceship Operator----\t\n");
print((76<=>'76 abc'));//return -1
print("\n".(76<=>76));//return 0
print("\n".('76 abc'<=>'76 abc'));//return 0
print("\n".('76 abc'<=>76));//return 1
echo"Integers \n";
echo 7 <=> 7 ;
echo"\nFloat\n";
echo 2.5 <=> 1.5; 
echo"\nStrings\n";
echo "g" <=> "b" ;   
echo"\nArrays\n";
echo [] <=> []; 
echo"\n";
echo [1, 7, 3, 5] <=> [1, 7, 3];

print("\n-----\t preg_match method----\t\n");
$my_text = 'The quick grey [squirrel].';
preg_match('#\[(.*?)\]#', $my_text, $match);
print $match[1]."\n";

print("\n-----\t associative array from 2 array----\t\n");
//Create an associative array using $array1 as the keys and $array2 as the values:
$array1 = ['country', 'capital', 'language']; $array2 = ['France', 'Paris', 'French'];
$array3 = array_combine($array1, $array2);
print_r($array3);
printf('#%02x%02x%02x', 255, 0, 0);
$numbers = array(4,6,2,22,11);
sort($numbers);
$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++){
    echo $numbers[$x];
    echo "\n";
}

//Generator Functions In PHP
Print("\n ---- Genrator Functions in PHP ----\n");
/* Traversing a big collection of data using looping construct such as foreach would require large memory 
and considerable processing time. 
With generators it is possible to iterate over a set of data without these overheads.
*/
/*Most inportant keyword that make each function as generator - foreach loop and yield keyword*/
print("\n generator function must have- foreach loop and yield keyword\n");
function rangegenerator($start, $stop, $step){
	for ($i=$start; $i<=$stop; $i+=$step){
	   yield $i;
	}
}
foreach (rangegenerator(2,10,2) as $val){
	echo $val . " ";
}

print("\narray using generator function\n");
function arrgenerator($arr){
	foreach ($arr as $key=>$val){
	   yield $key=>$val;
	}
}
$arr=array("one"=>1, "two"=>2, "three"=>3, "four"=>4);
$gen=arrgenerator($arr);
foreach ($gen as $key=>$val)
echo $key . "=>" . $val . "\n";

//DIvision By Zero
//echo 5 % 0.5; //error division by zero

$ip_address = "164.12.1200.1"; 
if(filter_var($ip_address, FILTER_VALIDATE_IP))
{ 
	echo "$ip_address is a valid IP address\n"; 
} 
else { 
	echo "$ip_address is not a valid IP address\n"; 
}

$i = 0; 
while($i < 6) { 
	if($i++ == 3) break; 
} 
echo "loop stopped at $i by break statement\n";

// PHP code determines which element(s) of the array is/are apple
print("----- \tDetermine element of array with perticular value...-----\t\n");
$array = array(
	'fruit1' => 'apple',
	'fruit2' => 'orange',
	'fruit3' => 'grape',
	'fruit4' => 'apple',
	'fruit5' => 'apple');

while ($fruit_name = current($array)) {
	//print(current($array)."\n");//it prints value of current element in array
	if ($fruit_name == 'apple') {
		echo key($array).'\n';
	}
	next($array);
}

?>

