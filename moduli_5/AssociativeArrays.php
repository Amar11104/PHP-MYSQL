<?php
    $grade = array(
        "Math" => "3",
        "Art" => "5",
        "History" => "4"
    );
    echo "Math grade is" . $grade['Math'];
    echo "<br>";

    foreach($grade as $subject => $grade){
        echo "subject: " .$subject . ", Grade :" .$grade;
        echo "<br>";
    }
?>