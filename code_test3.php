<?php namespace Track;

ini_set("memory_limit", -1);

$input=fgets(STDIN); //整数を入力として受け取る

$numbers=str_split(rtrim($input)); //受け取った整数を一文字ずつ配列に格納

sort($numbers); //昇順にソート

//配列の先頭要素が0のときは、昇順にソートされた配列の中から、0を除く数の中で最小の要素を先頭の要素0と交換する
if ($numbers[0]==0) {
    for($i=0;$i<count($numbers);$i++){
        if($numbers[$i]!=="0"){
            $numbers[0]=$numbers[$i];
            $numbers[$i]="0";
            break;
        }
    }
}

//配列を整数に変換して出力
print(implode("",$numbers));

