<?php
session_start();

$mots = [
    "BALLON", "PANIER", "JOUEUR", "TENNIS",
    "BASKET", "VOLLEY", "HOCKEY", "KARATE",
    "AVIRON", "SQUASH", "SPRINT", "COURSE",
    "PELOTE", "DRIBLE", "TACLES", "MATCHS",
    "BUTEUR", "FAUTES", "REVERS", "PLAQUE",
    "MUSCLE", "CARDIO", "RAPPEL", "EQUIPE",
    "GAGNER", "FINALE", "ARENES", "POTEAU",
    "FILETS", "DEPART", "RELAIS", "CRAMPE"
];

if (!isset($_SESSION['motMystere'])) {

    $_SESSION['motMystere'] = $mots[array_rand($mots)];

    $_SESSION['proposition'] = "";

    $_SESSION['essais'] = 0;

    $_SESSION['historique'] = [];

    $_SESSION['termine'] = false;
}