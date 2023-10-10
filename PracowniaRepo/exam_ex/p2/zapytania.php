<?php



$zapytania = [
    "SELECT `imie`, `nazwisko`, `adres`, `miasto`, `czyRODO`, `czyBadania` FROM `pracownicy` WHERE id = 2;", //kw1

    "SELECT COUNT(*) FROM `pracownicy`;", //kw2

    "SELECT `id`, `imie`, `nazwisko` FROM `pracownicy` WHERE id = 2;", //kw3

    "SELECT pracownicy.id, stanowiska.nazwa, stanowiska.opis FROM `pracownicy`  INNER JOIN  `stanowiska`  WHERE pracownicy.stanowiska_id = stanowiska.id and pracownicy.id = 2;" //kw4
];
