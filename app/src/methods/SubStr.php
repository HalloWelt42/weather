<?php


namespace WTR\methods;


trait SubStr
{

  /**
   * substring
   *    with global input
   *
   * @param int $begin
   * @param int $end
   * @return string
   */
  public function substr(int $begin, int $end): string
  {
    return substr($this->input, $begin - 1, $end - $begin + 1);
  }
}