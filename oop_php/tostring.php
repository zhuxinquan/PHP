<meta charset="utf-8">
<?php
class TestClass{
    private $foo;

    function __construct($foo){
        $this->foo = $foo;
    }
    
    /*
     * 若未定义该方法，则在最后使用echo $obj 时会
     * 出现警告，该方法是在直接输出对象引用时自
     * 动调用的方法
     */
    public function __toString(){
        return $this->foo;
    }
}

$obj = new TestClass('hello');
echo $obj;
?>
