<?php 
        //Include phpMyGraph class  
        include_once('phpMyGraph4.0.php'); 
         
        //Create config array for graph 
        $cfg = array 
        ( 
            'title'=>'This is my test graph', 
            'background-color'=>'FFFFFF', 
            'graph-background-color'=>'FFFFFF', 
            'font-color'=>'000000', 
            'border-color'=>'009900', 
            'column-color'=>'00FF00', 
            'column-shadow-color'=>'009900', 
            'column-font-color-q1'=>'000000', 
            'column-font-color-q2'=>'000000', 
        ); 
        //Create data array for graph 
        $data = array 
        ( 
            'jan'=>rand(-20,200), 
            'feb'=>-40, 
            'mar'=>rand(20,200), 
            'apr'=>rand(0,200), 
            'may'=>rand(0,200), 
            'jun'=>rand(0,200), 
            'jul'=>rand(-20,200), 
            'aug'=>rand(-200,200), 
            'sep'=>rand(0,200), 
            'oct'=>rand(-200,200), 
            'nov'=>rand(0,200), 
            'dec'=>rand(0,200), 
        ); 
         
        //Create new graph  
        $graph = new phpMyGraph(); 
         
        //Parse vertical line graph 
        $graph->parseVerticalLineGraph($data,$cfg); 
?> 