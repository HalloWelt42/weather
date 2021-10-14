<?php


namespace WTR;


use WTR\methods\SubStr;
use WTR\model\WeatherStation;

class StationDecoder
{
  use SubStr;


  /**
   * @var string
   */
  private string $input;

  /**
   * @var string
   */
  private string $factory;

  /**
   * @var WeatherStation
   */
  private WeatherStation $station;


  /**
   * StationDecoder constructor.
   * @param IWeatherStation $factory
   */
  public function __construct( IWeatherStation $factory)
  {
    // create input object
    $this->station = $factory->createSstationData();
  }


  /**
   * Stationdata ( one line )
   *
   * @param string $input
   */
  public function setStationDataLine(string $input)
  {
    $this->input = $input;
  }


  /**
   *
   */
  public function init()
  {
    // selection
    $this->selection();
  }


  /**
   * @return void
   */
  private function selection(): void
  {

    $this->station->setClu($this->substr(1, 5));
    $this->station->setCofX($this->substr(7, 11));
    $this->station->setId($this->substr(13, 17));
    $this->station->setICAO($this->substr(18, 22));
    $this->station->setName($this->substr(24, 44));
    $this->station->setLatitude($this->substr(46, 51));
    $this->station->setLongitude($this->substr(53, 57));
    $this->station->setElev($this->substr(59, 64));
    $this->station->setHmodH($this->substr(66, 71));
    $this->station->setType($this->substr(73, 76));

  }


}