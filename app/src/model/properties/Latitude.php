<?php


namespace WTR\model\properties;


use WTR\model\WeatherStation;

trait Latitude
{
  private float  $latitude;

  /**
   * @return float
   */
  public function getLatitude(): float
  {
    return $this->latitude;
  }

  /**
   * @param string $latitude
   * @return $this
   */
  public function setLatitude(string $latitude): self
  {
    if($latitude === NULL){
      return $this;
    }

    $this->latitude = (float)$latitude;
    return $this;
  } // nl.

}