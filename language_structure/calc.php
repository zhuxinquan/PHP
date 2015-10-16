<html>
    <head>
    	<meta charset="utf-8">
        <title>简单计算器</title>
    </head>
    <body>
    <?php
        if(isset($_POST["num1"]) && isset($_POST["num2"])){
            if(empty($_POST["num1"])){
                echo "<font color='red'>第一个操作数不能为空</font></br>";
                unset($_POST["sub"]);
            }
            if(empty($_POST["num2"])){
                echo "<font color='red'>第二个操作数不能为空</font></br>";
                unset($_POST["sub"]);
            }

            $oper = $_POST["oper"];
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];

            if($oper == "/" || $oper == "%"){
                if($num2 == 0){
                    echo "<font color='red'>0 不能作为除数</font></br>";
                    unset($_POST["sub"]);
                }
            }
        }
    ?>

    <table border="1" align="center" width="400">
        <form action="" method="POST">
            <caption><h2>简单计算器</h2></caption>
            <tr>
                <td><input type="TEXT" size="10" name="num1" value=" <?php
                                                                        if(!empty($num1))
                                                                            echo $num1;
                                                                    ?> " >
                </td>
                <td>
                    <select name="oper">
                        <option value="+" <?php
                                                if($_POST["oper"] == "+")
                                                    echo "selected";
                                            ?>> + </option>
                        <option value="-" <?php
                                                if($_POST["oper"] == "-")
                                                    echo "selected";
                                            ?>> - </option>
                        <option value="*" <?php
                                                if($_POST["oper"] == "*")
                                                    echo "selected";
                                            ?>> * </option>
                        <option value="/" <?php
                                                if($_POST["oper"] == "/")
                                                    echo "selected";
                                            ?>> / </option>
                        <option value="%" <?php
                                                if($_POST["oper"] == "%")
                                                    echo "selected";
                                            ?>> % </option>                                          
                    </select>
                </td>
                <td><input type="TEXT" size="10" name="num2" value="
                    <?php 
                        if(!empty($num2))
                            echo $num2;
                    ?>">
                </td>
                <td><input type="SUBMIT" name="sub" value="计算"></td>
            </tr>
            

            <?php
                if(isset($_POST["sub"]) && !empty($_POST["sub"])){
                    $sum = 0;
                    switch($oper)
                    {
                        case "+":
                            $sum = $num1 + $num2;
                            break;
                        case "-":
                            $sum = $num1 - $num2;
                            break;
                        case "*":
                            $sum = $num1 * $num2;
                            break;
                        case "/":
                            $sum = $num1 / $num2;
                            break;
                        case "%":
                            $sum = $num1 % $num2;
                            break;
                    }
                    echo "<tr><td colspan='4' align='center'>";
                    echo "计算结果：$num1 $oper $num2 = $sum";
                    echo "</td></tr>";
                }
            ?>
        </form>
    </body>
</html>
