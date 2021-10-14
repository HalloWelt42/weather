<?php


namespace WTR\model\properties;


trait Id
{

  private string $id;

  /**
   * @return int
   */
  public function getId(): int
  {
    return $this->id;
  }

  public function setId(?string $id): self
  {
    if ($id === NULL) {
      return $this;
    }
    $this->id = $id;
    return $this;

  }

}