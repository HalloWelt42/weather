<?php


namespace PharmatechnikSDK\OrderOut\entities\base\Types;


use ArrayAccess;
use Countable;
use Exception;
use SeekableIterator;

class ListType implements ArrayAccess, SeekableIterator, Countable  /* TODO : Serializable */
{
  use TArrayAccess;
  use TCountable;
  use TSeekable;
  use TIterator;

  /**
   * @var string
   */
  protected $T;

  /**
   * @var array
   */
  protected $container;

  /**
   * @var int
   */
  protected $position;

  /**
   * ListType constructor.
   * @param string|null $T
   * @throws Exception
   */
  public function __construct(string $T = NULL)
  {
    if (class_exists($T) === FALSE) {
      throw new Exception();
    }

    $this->T = $T;

    $this->container = [];
    $this->position  = 0;
  }

  /**
   * @param mixed $value
   * @throws Exception
   */
  public function typeTest($value)
  {
    if ($value instanceof $this->T === FALSE) {
      throw new Exception("isn't type of {$this->T}");
    }
  }


  /**
   * Gibt den Objekt-Typ der Elemente der aktuellen Liste zurück
   *    - ist der Typ nicht definiert wird Leerstring zurückgegeben
   *
   * @return string Typ des Objekte inkl. Namespace (falls vorhanden)
   */
  public function getType()
  {
    return $this->T ?: '';
  }

}
