<?php
class Renshu_1{
      public $a =123;
      static public $b =234;
//静的 クラス外から直接使える

public function A(){
return $this->a.'<br>';
}

public function B(){
return self::$b.'<br>';
}

}
$r1 =new Renshu_1();
$r2 =new Renshu_1();
　$r1->a = 567;
　echo $r1->a;
　echo $r2->a;
Renshu_1::$b=789;
echo Renshu_1::b;
echo $r1->B();
