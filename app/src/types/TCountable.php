<?php


namespace DI\Types;


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

