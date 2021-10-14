<?php


namespace DI\Types;


trait TIterator
{
  /**
   * @var int
   */
  protected $position;

  /**
   * reset position
   */
  public function rewind()
  {
    $this->position = 0;
  }

  /**
   * @return mixed
   */
  public function current()
  {
    return $this->container[$this->position];
  }

  /**
   * @return int
   */
  public function key()
  {
    return $this->position;
  }

  /**
   * +1 step forward
   */
  public function next()
  {
    ++$this->position;
  }

  /**
   * @return bool
   */
  public function valid()
  {
    return isset($this->container[$this->position]);
  }
}
