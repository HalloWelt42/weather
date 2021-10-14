<?php


namespace WTR\model\properties;


trait Longitude
{
  private float  $longitude;

  /**
   * @return float
   */
  public function getLongitude(): float
  {
    return $this->longitude;
  }

  /**
   * @param string $longitude
   * @return $this
   */
  public function setLongitude(string $longitude): self
  {
    if($longitude===NULL){
      return $this;
    }

    $this->longitude = (float)$longitude;
    return $this;
  } // el.

}