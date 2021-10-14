<?php


namespace WTR;


use SplFileObject;

class SplFileFactory
{

  /**
   * @param string $file
   * @return SplFileObject
   */
  public function createSplFile(string $file): SplFileObject
  {
    return new SplFileObject($file);
  }

}