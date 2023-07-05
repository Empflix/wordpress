<?php
/*
Plugin Name: Kalkulator PPM
Plugin URI: https://www.twojadomena.com/kalkulator-ppm
Description: ppm
Version: 1.02
Author: Piotr
Author URI: https://www.twojadomena.com
License: GPL2
*/


function kalkulator_ppm_formularz() {
    ob_start();

    if(isset($_POST['kalkulator_ppm_submit'])) {
        $waga = isset($_POST['waga']) ? intval($_POST['waga']) : 0;
        $wzrost = isset($_POST['wzrost']) ? intval($_POST['wzrost']) : 0;
        $wiek = isset($_POST['wiek']) ? intval($_POST['wiek']) : 0;
        $plec = isset($_POST['plec']) ? $_POST['plec'] : '';

     
        if($waga <= 30 || $waga >= 250 || $wzrost <= 140 || $wzrost >= 230 || $wiek <= 10 || $wiek >= 110 || $plec === '') {
            echo '<p style="color: red;">Wprowadź poprawne dane.</p>';
        } else {
            
            if($plec == 'mezczyzna') {
                $ppm = 66.5 + (13.75 * $waga) + (5 * $wzrost) - (6.75 * $wiek);
            } else {
                $ppm = 655.1 + (9.56 * $waga) + (1.85 * $wzrost) - (4.68 * $wiek);
            }

            
            echo '<p style="font-size: 20px; color: #008000;">Twoje PPM (Podstawowa Przemiana Materii) wynosi: ' . $ppm . ' kcal/dzień.</p>';
        }
    }

   
    ?>
    <style>
        .kalkulator-ppm-input {
            width: 100%;
            max-width: 200px;
            margin-bottom: 10px;
        }
    </style>
    <form id="kalkulator-ppm-form" method="post">
        <label for="waga">Waga (w kg):</label>
        <input type="number" name="waga" id="waga" class="kalkulator-ppm-input" min="30" max="250" required><br>
        <label for="wzrost">Wzrost (w cm):</label>
        <input type="number" name="wzrost" id="wzrost" class="kalkulator-ppm-input" min="140" max="230" required><br>
        <label for="wiek">Wiek:</label>
        <input type="number" name="wiek" id="wiek" class="kalkulator-ppm-input" min="10" max="110" required><br>
        <label for="plec">Płeć:</label>
        <select name="plec" id="plec" class="kalkulator-ppm-input" required>
            <option value="">Wybierz płeć</option>
            <option value="mezczyzna">Mężczyzna</option>
            <option value="kobieta">Kobieta</option>
        </select><br>
        <input type="submit" value="Oblicz" name="kalkulator_ppm_submit" style="margin-top: 10px;">
    </form>
    <?php

    return ob_get_clean();
}
add_shortcode('kalkulator_ppm', 'kalkulator_ppm_formularz');
