

<?php

    function evenchecker($start, $end, $step) {
        $result = "";
       /* for($i=$start;$i<=$end;$i+=$step){
            
            $result .= $i+1 . " ";
        }*/

       /* $i=$start;
        while($i<=$end){
            $result .= $i+1 . " ";
            $i+=$step;
        }*/
        $i=$start;
        do {
            $result .= $i+1 . " ";
            $i+=$step;
        }
        while($i<=$end);
        return $result;
    }

    
    $a = evenchecker(1, 20, 2);
    echo $a;







?>