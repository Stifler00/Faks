<?php
$ocjene = array($_POST["k1"], $_POST["k2"]);
$prosjek = ($ocjene[0] + $ocjene[1]) / 2;

if($ocjene[0] == 1 || $ocjene[1] == 1) {
    alert("Jedan od kolokvija je negativan, pad!");
}
else {
    print "Ocjena 1. kolokvija: " . $ocjene[0] . "<br>";
    print "Ocjena 2. kolokvija: " . $ocjene[1] . "<br>";
    print "Prosječna ocjena oba kolokvija: " . $prosjek . "<br>";
    print "Konačna ocjena iz predmeta: " . round($prosjek);
}
?>