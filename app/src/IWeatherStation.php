<?php


namespace WTR;


use WTR\model\WeatherStation;

interface IWeatherStation
{

  /**
   * @return WeatherStation
   */
  public function createSstationData(): WeatherStation;

}