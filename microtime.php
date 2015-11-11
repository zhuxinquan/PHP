<?php
    class Timer{
        private $start_time;
        private $stop_time;

        function __construct(){
            $this->start_time = 0;
            $this->stop_time = 0;
        }

        function start(){
            $this->start_time = microtime(true);
        }
        
        function stop(){
            $this->stop_time = microtime(true);
        }

        function spent(){
            return round(($this->stop_time - $this->start_time), 4);
        }
    }

        $timer = new Timer();
        $timer->start();
        usleep(1000);
        $timer->stop();

        echo "执行该脚本用时<b>".$timer->spent()."</b>秒";
?>