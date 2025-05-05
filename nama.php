<?php
if (isset($_GET['nama'])) {
    $nama = htmlspecialchars($_GET['nama']);
    echo "Halo, $Farras Dwie Cahyani";
} else {
    echo "Farras Dwie Cahyani";
}
?>