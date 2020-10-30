<?php

namespace Lavenir\Ivrc;
use Lavenir\Ivrc\Models\Desborde;

class IvrDesborde
{
  public static function index() {
    $desborde = Desborde::all();
    return $desborde;
  }
}