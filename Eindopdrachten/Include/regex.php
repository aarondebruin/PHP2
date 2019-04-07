<?php

function checkLetter($input){
  if (preg_match("/[a-z]{1,}/i", $input)) {
    return "Je input is een letter";
  } else {
    return "Je input is geen letter";
  }
  }

function checkNummer($input){
  if (preg_match("/[0-9]{1,}/", $input)) {
    return "Je input is een nummer";
  } else {
    return "Je input is geen nummer";
  }
}

function checkPostcode($input){
  if (preg_match("/^[0-9]{4}[A-Z]{2}$/i", $input)) {
    return "De postcode die u heeft ingevoerd is geldig";
  } else {
    return "De postcode die u heeft ingevoerd is ongeldig";
  }
}

function checkTelefoonnummer($input){
  if (preg_match("/^06[0-9]{8}$/", $input)) {
    return "De telefoon nummer is geldig ";
  } else {
    return "Ongeldig nummer";
  }
}

function checkGeslacht($input){
  if (preg_match("/^man\b$|^vrouw\b$/i", $input)) {
    return "Je bent een $input";
  } else {
    return "Ongeldig geslacht";
  }
}

function checkEmail($input){
  if (preg_match("/^.+@.+\..+/", $input)) {
    return "De e-mail is geldig";
  } else {
    return "De e-mail is ongeldig!";
  }
}

function checkAdres($input){
  if (preg_match("/^[a-z]+\s[0-9]{1,4}$/i", $input)) {
    return "Het adres is geldig";
  }else {
    return "Het adres is ongeldig ";
  }
}

 ?>
