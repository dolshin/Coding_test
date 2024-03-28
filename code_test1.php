<?php namespace Track;

ini_set("memory_limit", -1);

$input=fgets(STDIN); //整数を入力として受け取る

/*スタートも含まれるので1を引く。サイコロの最大値は6なので、
  6で割り、小数点は切り上げる*/

  echo(ceil(($input-1)/6)); 
                          