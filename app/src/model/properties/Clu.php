<?php


namespace WTR\model\properties;


use WTR\model\WeatherStation;

trait Clu
{

  private int $clu;

  /**
   * @return int
   */
  public function getClu(): int
  {
    return $this->clu;
  }

  /**
   * @param string|null $clu
   * @return $this
   */
  public function setClu(?string $clu): self
  {
    if (
      $clu === NULL
      or is_numeric($clu) === FALSE
    ) {
      return $this;
    }

    $this->clu = $clu;
    return $this;
  }

}