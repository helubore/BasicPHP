
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- This link points to an html file with php embedded code. It 
wont run. -->
<a href="try.html">Click Me</a>
<?php 

//PHP Syntax rules
$Helu = "Helu Bore";
$color = "Red";

echo "Hello World <br>";
echo "Today's weather is gloomy. The sky is " . $color . "<br>";
echo "The data type of $color is " . gettype($color) . "<br>";
echo $Helu;

#constants

define("TODAY","Monday");

echo "The day today is " . TODAY;

#Breaking the rules

define("TODAY","Tuesday");

echo "The day today is " . TODAY;

#using the echo language construct

echo "This is a string <br>" ;//used to display strings of text

echo $color; //used to display the value of a variable

echo "<h1>This is a Heading </h1>"; //used to display html code

#breaking the rules

// echo hello;

// echo <br>;

#using the print language construct

print("Hello, World!");

print "hello, world";

print "<br>";

#breaking the rules

// print "Hello, World!" ,"<br>"; //produces an error

// print "helu"

// echo "Helu is serious programmer", "Helu loves Computer Science";

// lessons learnt print does not accept more than one parameter and that is the main difference with echo


?>
</body>
</html>

