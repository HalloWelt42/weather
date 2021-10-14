<?php


namespace PharmatechnikSDK\OrderOut\entities\base\Types;


trait TCountable
{
  /**
   * @return int
   */
  public function count()
  {
    return count($this->container);
  }
}

