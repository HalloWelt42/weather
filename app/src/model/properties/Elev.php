<?php


namespace WTR\model\properties;


trait Elev
{
  private int $elev;

  /**
   * @return int
   */
  public function getElev(): int
  {
    return $this->elev;
  }

  /**
   * @param string $elev
   * @return $this
   */
  public function setElev(string $elev): self
  {
    if($elev===NULL){
      return $this;
    }

    $this->elev = (int)$elev;
    return $this;
  }

}