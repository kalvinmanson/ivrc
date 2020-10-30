<?php

namespace Lavenir\Ivrc;
use Lavenir\Ivrc\Models\Desborde;

class Ivrc
{
  public static function index() {
    $desborde = Desborde::all();
    return $desborde;
  }
}