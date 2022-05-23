<?php
session_start();

//METTRE LES ELEMENTS HTML QUI CORRESPONDENT AUX COMPTES RESPECTIFS 
if (!empty($_SESSION['GOD-MODE'])) {
    echo "SALUT " . $_SESSION['GOD-MODE'];
} else if (!empty($_SESSION['ADMIN-MODE'])) {

    echo "Salut " . $_SESSION['ADMIN-MODE'];
} else if (!empty($_SESSION['CUSTOMER'])) {
    echo "Salut " . $_SESSION['CUSTOMER'];
}
