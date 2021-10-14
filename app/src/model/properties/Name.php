<?php


namespace WTR\model\properties;


use WTR\model\WeatherStation;

trait Name
{
  private string $name;

  /**
   * @return string
   */
  public function getName(): string
  {
    return $this->name;
  }

  /**
   * @param string $name
   * @return $this
   */
  public function setName(string $name): self
  {
    $this->name = $name;
    return $this;
  }

}