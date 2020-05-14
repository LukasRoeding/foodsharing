<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $thema = $_POST['thema'];
    $mailFrom = $_POST['email'];
    $message = $_POST['nachricht'];

    $mailto = "finanzen@foodsharing-dortmund.de";
    $header = "Von: ".$mailFrom;
    $txt = "Wir haben eine email von".$name.".\n\n".$message;

    mail($mailto, $thema, $txt, $header);
    header("Location: kontakt.php?mailsend");
}