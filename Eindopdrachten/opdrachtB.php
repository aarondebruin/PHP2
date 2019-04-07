<?php
    Include("include/regex.php");


    $check = $_POST['check'];
    $option = $_POST['option'];


    switch ($option) {
        case 'checkGeslacht':
          echo checkGeslacht($check);
          break;

        case 'checkLetter':
          echo checkLetter($check);
          break;

        case 'checkNummer':
          echo checkNummer($check);
          break;

        case 'checkPostcode':
          echo checkPostcode($check);
          break;

        case 'checkTelefoonnummer':
          echo checkTelefoonnummer($check);
          break;

        case 'checkEmail':
          echo checkEmail($check);
          break;

        case 'checkAdres':
          echo checkAdres($check);
          break;
    }
 ?>
