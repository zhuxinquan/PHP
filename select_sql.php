<?php
        $link = mysql_connect("localhost", "root", "2737353904");
        mysql_select_db('bookstore') or die('不能选择数据库 bookstore:'.mysql_error());

        $result = mysql_query("select bookId, bookName from books");
        while($row = mysql_fetch_array($result, MYSQL_ASSOC)){
                echo "id:".$row[0]."name:".$row[0];
        }
        /*$result = mysql_query("select bookId, bookName, author, publisher, price, detail from books");
        echo '<table align="center" width="80%"border="1">';
        echo '<caption><h1>图书信息表</h1></caption>';
        echo '<th>编号</th><th>图书名</th><th>作者</th><th>publisher</th><th>price</th><th>detail</th>';
        while ($row = mysql_fetch_row($result)) {
                echo '<tr>';
                foreach ($row as $data) {
                        echo '<td>'.$data.'</td>';
                }
                echo '</tr>';
        }
        echo '</table>';
        mysql_free_result($result);
        mysql_close($link);*/
?>