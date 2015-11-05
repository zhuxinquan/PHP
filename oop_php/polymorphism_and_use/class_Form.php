<meta charset="utf-8">
<?php
        /*function __autoload($className){
            include("class_".ucfirst($className).".php");
        }*/ 
class Form{
    private $formName;
    private $request;
    private $action;
    private $method;
    private $target;

    function __construct($formName, $request, $action = "index.php", $method = "get", $target = "_self"){
        $this->formName = $formName;
        $this->request = $request;
        $this->action = $action;
        $this->method = $method;
        $this->target = $target;
    }

    function __toString(){                  //直接打印该对象时调用
        $str = '<table align=center border=0 width=400>';
        $str.= '<caption><h3>'.$this->formName.'</h3></caption>';
        $str.= '<form action='.$this->action.' method='.$this->method.' target='.$this->target.'>';

        switch($this->request["action"]){
        case 1:
            $str.='<tr><th>矩形高度：</th><td>';
            $str.='<input type="text" name="height" value='.$this->request["height"].'>';
            $str.='</td></tr>';
            $str.='<tr><th>矩形宽度：</th><td>';
            $str.='<input type="text" name="width" value='.$this->request["width"].'>';
            $str.='</td></tr>';
            break;
        case 2:
            $str.='<tr><th>第一条边:</th><td>';
            $str.='<input type="text" name="side1" value='.$this->request["side1"].'>';
            $str.='</td></tr>';
            $str.='<tr><th>第二条边:</th><td>';
            $str.='<input type="text" name="side2" value='.$this->request["side2"].'>';
            $str.='</td></tr>';
            $str.='<tr><th>第三条边:</th><td>';
            $str.='<input type="text" name="side3" value='.$this->request["side3"].'>';
            $str.='</td></tr>';
            break;
        case 3:
            $str.='<tr><th>圆的半径：</th><td>';
            $str.='<input type="text" name="radius" value='.$this->request["radius"].'>';
            $str.='</td></tr>';
            break;
        }
        $str.='<tr><td align=center colspan=2><input type="submit" value="计算"></td></tr>';
        /*该隐藏表单的作用为保存传入本表单的值，继续将其传入要接收该值的表单*/
        $str.='<input type="hidden" name="act" value='.$this->request["action"].'>';
        $str.='<input type="hidden" name="action" value='.$this->request["action"].'>';
        $str.='</form>';
        $str.='</table>';

        return $str;
    }
}
?>
