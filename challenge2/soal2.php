<?php

$data = array(
    "Data 1" => array(
        "Mark" => array("mass" => 78, "height" => 1.69),
        "John" => array("mass" => 92, "height" => 1.95)
    ),
    "Data 2" => array(
        "Mark" => array("mass" => 95, "height" => 1.88),
        "John" => array("mass" => 85, "height" => 1.76)
    )
);

function HitungBMI($mass, $height) {
    return $mass / ($height * $height);
}

function HasilBMI($mark, $john) {
    $markBMI = HitungBMI($mark["mass"], $mark["height"]);
    $johnBMI = HitungBMI($john["mass"], $john["height"]);

    return $markBMI > $johnBMI;
}

foreach ($data as $key => $d) {
    $mark = $d["Mark"];
    $john = $d["John"];
    
    $markHigherBMI = HasilBMI($mark, $john);

    echo "<br/>Data $key:\n<br/>";
    echo "Mark's BMI: " . HitungBMI($mark["mass"], $mark["height"]) . "\n<br/>";
    echo "John's BMI: " . HitungBMI($john["mass"], $john["height"]) . "\n<br/>";
    echo "Mark has higher BMI than John: " . ($markHigherBMI ? "True" : "False") . "<br/>";
}

?>
