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

    public function set($key, $value) {
      $this->items[$key] = $value;
    }

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

?>
/*Output : Array ( [0] => Mohit [1] => Mayur [key3] => KD )  */

--------------------------------------------------------------------------------------------------------------------------------

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

    public function set($key, $value) {
      $this->items[$key] = $value;
    }

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

  echo '<pre>' , print_r($c->all());

?>
/* Output : Array
(
    [0] => Mohit
    [1] => Mayur
    [key3] => KD
)
1 */

------------------------------------------------------------------------------------------------------------------------------

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

    public function set($key, $value) {
      $this->items[$key] = $value;
    }

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

  echo '<pre>' . print_r($c->all(), true);

?>
/* Output :
Array
(
    [0] => Mohit
    [1] => Mayur
    [key3] => KD
)
*/

--------------------------------------------------------------------------------------------------------------------------------

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

    public function get($key) {
      return array_key_exists($key, $this->items) ? $this->items[$key] : null;
    }

    public function set($key, $value) {
      $this->items[$key] = $value;
    }

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

  echo $c->get('key3');

?>
/* Output : KD */

--------------------------------------------------------------------------------------------------------------------------------

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

    public function __get($value) {
      return $this->get($value);
    }

    public function add($value) {
      $this->items[] = $value;
    }

    public function get($key) {
      return array_key_exists($key, $this->items) ? $this->items[$key] : null;
    }

    public function set($key, $value) {
      $this->items[$key] = $value;
    }

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

  /*echo $c->get('key3');*/
  echo $c->key3;

?>
/*Output : KD */

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

    public function __get($value) {
      return $this->get($value);
    }

    public function add($value) {
      $this->items[] = $value;
    }

    public function get($key) {
      return array_key_exists($key, $this->items) ? $this->items[$key] : null;
    }

    public function __call($func, $args) {
      echo $func . 'has been called with arguments' . implode(',', $args);
    }

    public function set($key, $value) {
      $this->items[$key] = $value;
    }

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

  echo $c->Mohit();
?>

/* Output : Mohithas been called with arguments */
