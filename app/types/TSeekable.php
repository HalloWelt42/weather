<?php


namespace PharmatechnikSDK\OrderOut\entities\base\Types;

use OutOfBoundsException;

trait TSeekable
{
  /**
   * @param int $position
   */
  public function seek($position)
  {
    if (!isset($this->array[$position])) {
      throw new OutOfBoundsException("invalid seek position ({$position})");
    }

    $this->position = $position;
  }
}
