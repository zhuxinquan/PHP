<!DOCTYPE html>
<html>
<head>
    <title>HTML表单</title>
    <meta charset=utf-8>
</head>
<body>
    <form action="" method="post">
        请输入一个字符串：
        <input type="text" size="30" name="str" value="<?php echo html2Text($_POST['str']); ?>">
        <input  type="submit" name="submit" value="提交"><br>
    </form>
    <?php
        if(isset($_POST["submit"])){
            echo "原形输出:".$_POST['str']."<br>";

            echo "转换实体: ".htmlspecialchars($_POST['str'])."<br>";
            echo "删除斜线:".stripslashes($_POST['str'])."<br>";
            echo "删除斜线和转换实体:".html2Text($_POST['str'])."<br>";  
        }

        function html2Text($input){
            return htmlspecialchars(stripslashes($input));
        }
    ?>
</body>
</html>