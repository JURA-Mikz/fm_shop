<?php
class Seiseki{
  protected $class_total = []; //配列として初期化
  protected $name;
  protected $scores;

  public function get(){
    arsort($this->class_total); // 値で降順ソート
    return $this->class_total;
  }

  public function set($name , $scores){
    $this->name = $name;
    $this->scores = $scores;
    $this->sum();
  }

  protected function sum(){
    $this->class_total += 
      [ $this->name => array_sum($this->scores) ];
  }

  public function avg(){
    $avg = array_sum($this->scores)/count($this->scores);
    return $this->name .'さんの平均 '. $avg. '点<br>';
  }
}

$seseki = new Seiseki();        //インスタンス作成するときは()をつける

$seseki->set('佐藤',[90,88,77]); //値のセット
$seseki->set('伊藤',[66,54,44]); //値のセット
$seseki->set('後藤',[55,53,88]); //値のセット

//平均点を表示させる方法、セットした値を呼び出し、echoでavg(平均を出力)
$seseki->set('佐藤',[90,88,77]); echo $seseki->avg();
$seseki->set('伊藤',[66,54,44]); echo $seseki->avg();
$seseki->set('後藤',[55,53,88]); echo $seseki->avg();

print_r( $seseki->get() );

//→ [佐藤] => 255 [後藤] => 196 [伊藤] => 164 