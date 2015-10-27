<meta charset="utf-8">
<?php
class myclass{
    private $var1 = 100;

    private function printHello(){
        echo "hello\n";
    }

    public function pu(){
        $this->printHello();
    }
}

class myclass2{
    function useProperty(){
        echo "输出从父类继承过来的成员属性值".$this->var1."<br>";
        $this->printHello();                //由于printHello方法为myclass类的似有方法，继承子类无法访问 
    }
}
$subObj1 = new myclass();
$subObj1->pu();
$subObj = new myclass2();
$subObj->useProperty();
?>
