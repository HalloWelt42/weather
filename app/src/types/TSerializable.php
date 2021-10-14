<?php


namespace DI\Types;


trait TSerializable
{
  public function serialize()
  {
    $unserialized = '';
    return (string)$unserialized;
  }

  public function unserialize($serialized)
  {

  }
}
