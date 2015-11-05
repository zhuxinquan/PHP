<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>图形的周长和面积计算器</title>
</head>
<body>
    <?php
        function __autoload($className){
            include("class_".ucfirst($className).".php");
        }
    ?>
    <center>
        <h2>图形的周长和面积计算器</h2>
        <br>
        <a href="index.php?action=1">矩形</a>||
        <a href="index.php?action=2">三角形</a>||
        <a href="index.php?action=3">圆形</a><br>
    </center>
    <?php
        switch ($_REQUEST["action"]) {
            case 1:
                $form=new Form("矩形", $_REQUEST, "index.php");
                echo $form;
                break;
            case 2:
                $form=new Form("三角形", $_REQUEST, "index.php");
                echo $form;
                break;
            case 3:
                $form=new Form("圆形", $_REQUEST);
                echo $form;
                break;                
            default :
                echo "请选择一个形状<br>";
        }

        if(isset($_REQUEST["act"])){
            switch ($_REQUEST["act"]) {
                case 1:
                    $shape = new Rect($_REQUEST);
                    break;
                case 2:
                    $shape = new Triangle($_REQUEST);
                    break;
                case 3:
                    $shape = new Circle($_REQUEST);
                    break;
            }
            echo "<div style='text-align:center; color:green; font-size:18px; '>";
            echo "<table align=center width=400 height=75 border=1>";
            echo "<tr><td>面积</td><td>".$shape->area()."</td>";
            echo "<tr><td>体积</td><td>".$shape->perimeter()."</td>";
            echo "</table>";
            echo "</div>";
            /*echo "面积为：".$shape->area()."<br>";
            echo "周长为：".$shape->perimeter()."<br>";*/
        }
    ?>
</body>
</html>