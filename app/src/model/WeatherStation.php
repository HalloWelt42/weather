<?php


namespace WTR\model;


use WTR\model\properties\Clu;
use WTR\model\properties\CofX;
use WTR\model\properties\Elev;
use WTR\model\properties\HmodH;
use WTR\model\properties\ICAO;
use WTR\model\properties\Id;
use WTR\model\properties\Latitude;
use WTR\model\properties\Longitude;
use WTR\model\properties\Name;
use WTR\model\properties\Type;

class WeatherStation
{



  use Clu;
  use Id;
  use CofX;
  use ICAO;
  use Name;
  use Latitude;
  use Longitude;
  use Elev;
  use HmodH;
  use Type;



}