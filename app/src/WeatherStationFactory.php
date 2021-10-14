<?php


namespace WTR;


use WTR\model\WeatherStation;

class WeatherStationFactory implements IWeatherStation
{

  /**
   * @return WeatherStation
   */
  public function createSstationData(): WeatherStation
  {
    return new WeatherStation();
  }


}