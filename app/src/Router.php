<?php


namespace WTR;

class Router
{
  /**
   * @var array
   */
  private array $routes;

  public function __construct()
  {
    $this->routes = [];
  }

  public function addRoute($key, $target)
  {
    $this->routes[$key] = $target;
  }

  public function goTo($url)
  {

  }
}