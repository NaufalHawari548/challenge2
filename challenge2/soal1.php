<?php

$data = array(
    "<h3>Data 1</h3>" => array(
        "Lumba-lumba" => array(96, 108, 89),
        "Koala" => array(88, 91, 110)
    ),
    "<h3>Data Bonus 1</h3>" => array(
        "Lumba-lumba" => array(97, 112, 101),
        "Koala" => array(109, 95, 123)
    ),
    "<h3>Data Bonus 2</h3>" => array(
        "Lumba-lumba" => array(97, 112, 101),
        "Koala" => array(109, 95, 106)
    )
);

function TotalScore($scores) {
    $total = array_sum($scores);
    $count = count($scores);
    return $total / $count;
}

function dataPemenang($data) {
    foreach ($data as $key => $teams) {
        $lumbaLumbaScore = $teams["Lumba-lumba"];
        $koalaScore = $teams["Koala"];

        $TotallumbaLumba = TotalScore($lumbaLumbaScore);
        $TotalKoala = TotalScore($koalaScore);

        if ($TotallumbaLumba >= 100 && $TotalKoala >= 100) {
            if ($TotallumbaLumba > $TotalKoala) {
                $winner = "Tim Lumba-lumba Menang";
            } elseif ($TotallumbaLumba < $TotalKoala) {
                $winner = " Tim Koala Menang";
            } else {
                if ($TotallumbaLumba == $TotalKoala && $TotallumbaLumba >= 100) {
                    $winner = "Tim Seri";
                } else {
                    $winner = "Tidak Ada Tim yang memenangkan Tropi ";
                }
            }
        } else {
            $winner = "Tidak Ada Tim yang memenangkan Tropi";
        }

        echo "$key <br/>";
        echo "Lumba Lumba Score : $TotallumbaLumba<br/>";
        echo "Koala Score : $TotalKoala<br/>";
        echo "Hasil => $winner<hr>";
        
    }
}

dataPemenang($data);

?>
