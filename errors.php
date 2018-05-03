<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  class Collection implements Countable, JsonSerializable {

    protected $items = [];

    // __set()
    // __get()
    // __call()
    // __toString()

    public function __set($key, $value) {
      $this->set($key, $value);
    }

    public function add($value) {
      $this->items[] = $value;
    }

    /*public function set($key, $value) {
      $this->items[$key] = $value;
    }*/

    public function jsonSerialize() {
      return json_encode($this->items);
    }

    public function count() {
      return  count($this->items);
    }

    public function all() {
      return $this->items;
    }

  }

  $c = new Collection();
  $c->add('Mohit');
  $c->add('Mayur');

  $c->key3 = 'KD';

  print_r($c->all());

/*Fatal error: Uncaught Error: Call to undefined method Collection::set() in /var/www/html/test_core/Interface.php:15 
               Stack trace: #0 /var/www/html/test_core/Interface.php(44): Collection->__set('key3', 'KD') 
               #1 {main} thrown in /var/www/html/test_core/Interface.php on line 15 */
