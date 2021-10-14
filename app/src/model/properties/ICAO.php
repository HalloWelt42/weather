<?php


namespace WTR\model\properties;


trait ICAO
{
  private string $ICAO;

  /**
   * @return string
   */
  public function getICAO(): string
  {
    return $this->ICAO;
  }

  /**
   * @param string $ICAO
   * @return $this
   */
  public function setICAO(string $ICAO): self
  {
    $this->ICAO = $ICAO;
    return $this;
  }

}