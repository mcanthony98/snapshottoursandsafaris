<?php
function randomRates(){
 $set = '0123';
 return substr(str_shuffle($set), 0, 3);   
}

?>