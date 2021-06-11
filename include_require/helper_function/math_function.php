<?php

function add(...$nums){
  $sum = 0;
  foreach($nums as $i => $num) $sum += $num;
  return $sum;
}

function sub($f , $s){
  return $f - $s;
}
