<?php


namespace WTR\model\properties;


trait Type
{
  private string $type;

  /**
   * @return string
   */
  public function getType(): string
  {
    return $this->type;
  }

  /**
   * @param string $type
   * @return $this
   */
  public function setType(string $type): self
  {
    $this->type = $type;
    return $this;
  }

}