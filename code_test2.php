<?php namespace Track;

ini_set("memory_limit", -1);

$input=fgets(STDIN); //文字列を入力として受け取る

$game_record=str_split(rtrim($input)); //受け取った文字列を一文字ずつ配列に格納

$placement=["b","w"]; //石の配置

$b_count=1; //黒石の個数
$w_count=1; //白石の個数



for($i=0;$i<count($game_record);$i++){
    if($i%2==0){
        if ($game_record[$i]=="L" && end($placement)=="b") {
            array_unshift($placement,"b");
            $b_count=count($placement);
            $w_count=0;
        }elseif($game_record[$i]=="R" && $placement[0]=="b"){
            array_push($placement,"b");
            $b_count=count($placement);
            $w_count=0;
        }elseif($game_record[$i]=="L" && end($placement)=="w"){
            array_unshift($placement,"b");
            $b_count++;
        }elseif($game_record[$i]=="R" && $placement[0]=="w"){
            array_push($placement,"b");
            $b_count++;
        }
        
    }else{
        if ($game_record[$i]=="L" && end($placement)=="w") {
            array_unshift($placement,"w");
            $w_count=count($placement);
            $b_count=0;
        }elseif($game_record[$i]=="R" && $placement[0]=="w"){
            array_push($placement,"w");
            $w_count=count($placement);
            $b_count=0;
        }elseif($game_record[$i]=="L" && end($placement)=="b"){
            array_unshift($placement,"w");
            $w_count++;
        }elseif($game_record[$i]=="R" && $placement[0]=="b"){
            array_push($placement,"w");
            $w_count++;
        }
    }
}

printf("%s %s",$b_count,$w_count); //黒石、白石の個数を出力






