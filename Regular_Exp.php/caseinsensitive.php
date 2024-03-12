<?php 
$string = "Bangladesh ,pakistan,Indai maldiv Nepal";
if(preg_match("/^Bangladesh/i",$string)){
    echo "Banglades is a most population Country";
}
else{
    echo "It's a huge effect whole country";
}
echo "<hr>";
$array  =("Bangladesh"."\n"."Pakistan"."India"."/n"."Nepal"."/n");
if(preg_match("/^pakistan/i",$array)){
    echo "Pakistan is a part of Bangladesh";
}
else{
    echo "Nothing to item priting";
}
echo "<hr>";
$string = "foobar foo--bar fubar tometo";
if(preg_match("/(foo)/",$string)){
    echo "match found";
}
else{
    echo "Not found Matching";
}
echo "<hr>";
$string = "Bangladesh is a Beautiful Country has natural thinking";
if(preg_match("/\b Beautiful\b/im",$string)){
    echo "Match found";
}
else{
    echo "No match found";
}
echo "<hr>";
$string = "Pakistan is a Islamic Country";
if(preg_match("/lam\B/",$string)){
    echo "match found";
}
else{
    echo "Not match found";
}
echo "<hr>";
$string = "Nadia is a clever Girl";
if(preg_match("/eve\B/",$string)){
    echo"match found";
}
else{
    echo "do not match found";
}
echo "<hr>";
$string = "abckdefghijklmop12365478";
if(preg_match('/\AABc/i',$string)){
    echo "match found";
}
else{
    echo "do not found match";
}
echo "<hr>";
$string = "abckdefghijklmop12365478";
if(preg_match('/478\z/',$string)){
    echo "the string match with being 78";
}
else{
    echo "the string do not match";
}
echo "<hr>";
$arr= "yellow,yellow, yellow, yellow,yellow,yellow,yellow ,not-yellow,yellow";
preg_match_all('/yellow/',$arr,$result);
echo "<pre>";
print_r($result);
echo "<hr>";
$arr= "yellow,yellow, yellow, yellow,yellow,yellow,yellow ,not-yellow,yellow";
preg_match_all('/\G(yellow),/',$arr,$result);
print_r($result);
echo "<hr>";
$string  ="I am from Bangladesh";
if(preg_match('/Bangla(?=desh)/i',$string)){
    echo "match found";
}
else{
    echo "match not found";
}
echo "<hr>";
$string = "I live in fin land";
if(preg_match('/fin(?!land)/',$string)){
    echo "match found";
}
else{
    echo "not found matching";
}
echo "<hr>";

$string  ="I am from Bangladesh";
if(preg_match('/(?<=bangla)desh/i',$string)){
    echo "found Match";
}
else{
    echo "not found matching";
}
echo "<hr>";
$string = "Bangladesh is a Beauti ful Country";
if(preg_match('/(?<!beauti)ful/i',$string)){
    echo "found Matching";
}
else{
    echo "not found matching";
}
echo "<hr>";

$string = "The quick brown fox jumps over the lazy dog.";
if(preg_match('/[^\w]FOX\s/i',$string)){
    echo "fox is present";
}
else{
   echo  "fox is not present";
}
echo "<hr>";
$string = "visit w3school";
$pattern  = "/w3school/";
echo preg_replace($pattern ,"microsoft",$string);
 


?>