<?php


namespace WTR\model\properties;


trait HmodH
{
  private int $Hmod_H;

  /**
   * @return int
   */
  public function getHmodH(): int
  {
    return $this->Hmod_H;
  }

  /**
   * @param string $Hmod_H
   * @return $this
   */
  public function setHmodH(string $Hmod_H): self
  {
   if($Hmod_H===NULL){
     return $this;
   }

    $this->Hmod_H = (int)$Hmod_H;
    return $this;
  }

}