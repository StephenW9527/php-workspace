<?php
    $scores = array(
        "physics" => array(75,78,68,95,100),
        "chemistry" => array(98,85,77,65,88),
        "biology" => array(91,89,75,86,74)
    );

    // echo $scores['chemistry'][0];

       echo '有'.sizeof($scores)."個科目<br>";
       echo '物理有'.sizeof($scores["physics"])."個成績<br>";
       echo '化學有'.sizeof($scores["chemistry"])."個成績<br>";
       echo '生物有'.sizeof($scores["biology"])."個成績<br>";

?>