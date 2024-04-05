<?php

function validateCreditCard($cardNumber, &$validate, &$errors)
{
      $cardNumber = str_replace(' ', '', $cardNumber);

      if (strlen($cardNumber) != 16) {
            $validate = 0;
            $errors['numTarjeta'] = 'La tarjeta debe tener 16 dígitos';
            return;
      }
      if (!is_numeric($cardNumber)) {
            $validate = 0;
            $errors['numTarjeta'] = 'Solo puede ingresar números';
            return;
      }

      $sum = 0;
      $array = str_split($cardNumber);
      for ($i = 0; $i < 16; $i++) {
            if ($i % 2) {
                  $sum += $array[$i];
            } else {
                  $val = $array[$i] * 2;
                  $sum += $val < 9 ? $val : str_split($val)[0] + str_split($val)[1];
            }
      }

      if ($sum % 10 || $sum == 0) {
            $validate = 0;
            $errors['numTarjeta'] = 'El número de tarjeta no es válido';
            return;
      }

      $validate = 1;
      $errors['numTarjeta'] =  '';
}

function validateCVV($cvv, &$validate, &$errors)
{
      if (strlen($cvv) != 3 && strlen($cvv) != 4) {
            $validate = 0;
            $errors['cvv'] = 'Este campo debe tener 3 o 4 dígitos';
            return;
      }
      if (preg_match_all('/[0-9]/', $cvv) != strlen($cvv)) {
            $validate = 0;
            $errors['cvv'] = 'Este campo solo puede tener números';
            return;
      }

      $validate = $validate == 0 ? 0 : 1;
      $errors['cvv'] =  '';
}

function validateText($text, &$validate, &$errors, $pos)
{
      if (!$text) {
            $validate = 0;
            $errors[$pos] = 'Este campo no puede estar vacío';
            return;
      }
      if (strlen($text) < 3) {
            $validate = 0;
            $errors[$pos] = 'Este campo debe tener al menos 3 dígitos';
            return;
      }
      if (preg_match_all('/[a-zA-Z]/', $text) != strlen($text)) {
            $validate = 0;
            $errors[$pos] = 'Este campo solo puede contener texto';
            return;
      }

      $validate = $validate == 0 ? 0 : 1;
      $errors[$pos] =  '';
}

function validateDate($date, &$validate, &$errors)
{
      if ($date) {
            $today = getdate();
            $expDate = explode('-', $date);
            $year = $expDate[0];
            $month = $expDate[1];
            if ($today['year'] > $year || ($today['mon'] >= $month && $today['year'] == $year)) {
                  $validate = 0;
                  $errors['fechaExp'] = 'La fecha no es válida';
                  return;
            }
      }

      if (!$date) {

                  $validate = 0;
                  $errors['fechaExp'] = 'Ingrese una fecha de vencimiento';
                  return;
            
      }


      $validate = $validate == 0 ? 0 : 1;
      $errors['fechaExp'] =  '';
}