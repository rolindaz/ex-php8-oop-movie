<?php

require_once("./Bonus_3/Models/Genre.php");

$genres = [
    $romantico = new Genre("Romantico", "Si concentra sulle storie d'amore, spaziando da commedie leggere a drammi intensi."),
    $avventura = new Genre("Avventura", "Segue i protagonisti in un viaggio o in un'impresa avventurosa, spesso in luoghi esotici o pericolosi."),
    $drammatico = new Genre("Drammatico", "Esplora temi seri e profondi, concentrandosi sulle relazioni umane e sui conflitti emotivi."),
    $thriller = new Genre("Thriller", "Si basa sul mistero, l'indagine e la suspense, spesso con elementi di suspense o polizieschi."),
    $azione = new Genre("Azione", "Incentrato su suspense, adrenalina ed emozioni forti, spesso con sequenze di combattimento ed inseguimenti."),
    $commedia = new Genre("Commedia", "Mira a far ridere lo spettatore attraverso situazioni umoristiche."),
    $fantascienza = new Genre("Fantascienza", "Ambientato in mondi futuristici, spazia dall'esplorazione dello spazio alle tecnologie avanzate."),
    $horror = new Genre("Horror", "Progettato per spaventare e creare tensione, utilizzando elementi soprannaturali o psicologici."),
    $animazione = new Genre("Animazione", "Realizzato con tecniche di animazione, può abbracciare quasi tutti gli altri generi."),
    $crime = new Genre("Crime", "Si concentra su attività criminali e mafiose.")
];
