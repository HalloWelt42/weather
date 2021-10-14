<?php


namespace PharmatechnikSDK\OrderOut\entities\base\Types;

use OutOfBoundsException;


trait TSeekableIterator
{
  use TIterator;

  /**
   * @param int $position
   */
  public function seek(int $position)
  {
    if (!isset($this->array[$position])) {
      throw new OutOfBoundsException("invalid seek position ({$position})");
    }

    $this->position = $position;
  }
}
