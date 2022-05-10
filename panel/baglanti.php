<?php

try {
    $baglanti = new PDO('mysql:host=localhost;dbname=onat', 'root', '');

} catch (PDOException $e) {
    print "Hata!: " . $e->getMessage() . "<br/>";
    die();
}
?>