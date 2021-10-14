<?php


namespace WTR\model\properties;


use WTR\model\WeatherStation;

trait CofX
{
  private int $CofX;

  /**
   * @return int
   */
  public function getCofX(): int
  {
    return $this->CofX;
  }

  /**
   * @param string $CofX
   * @return $this
   */
  public function setCofX(string $CofX): self
  {
    if ($CofX === NULL) {

      return $this;
    }

    $this->CofX = (int)$CofX;
    return $this;
  }

}