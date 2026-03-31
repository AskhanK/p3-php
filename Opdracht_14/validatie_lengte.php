<?php


$titel = "Dit is een extreem lange titel die zeker meer dan vijftig tekens bevat";


$titel = trim($titel);


if ($titel === "") {
    echo "Titel is verplicht.";
} elseif (strlen($titel) < 3) {
    echo "Titel moet minimaal 3 tekens bevatten.";
} elseif (strlen($titel) > 50) {
    echo "Titel mag maximaal 50 tekens bevatten.";
} else {
    echo "Titel is geldig.";
}

?>