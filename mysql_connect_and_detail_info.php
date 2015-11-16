<?php
        $link = mysql_connect("localhost", "root", "2737353904");
        echo "与mysql服务器建立的连接成功：<br>";
        echo mysql_get_client_info();
        echo "<br>";
        echo mysql_get_host_info();
        echo "<br>";
        echo mysql_get_proto_info();
        echo "<br>";
        echo mysql_get_server_info();
        echo "<br>";
        echo mysql_client_encoding();
        echo "<br>";
        echo mysql_stat();
        echo "<br>";
        mysql_close();
?>