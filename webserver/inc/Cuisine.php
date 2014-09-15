<?php
/**
 * Represents a cuisine. Initializes with cuisine id and name (optional).
 * If name is not provided, it loads the name from database.
 *
 * uses sm_cuisine_type
 *
 * @author Ankit Jain (suggst.me)
 */
class Cuisine
{
  protected $cuisineId;
  protected $name;

  public function __construct($cuisineId, $name="") {
    $this->cuisineId = $cuisineId;
    $this->name = $name;
  }

  public function getCuisineId() {
    return $this->cuisineId;
  }

  public function getName() {
    if ($this->name == "") {
      $query = mysql_query("SELECT * FROM sm_cuisine_type WHERE cuisineId = \""
          .$this->cuisineId."\"") or die(mysql_error());
      if ($result = mysql_fetch_array($query)) {
        $this->name = $result['name'];
      }
    }
    return $this->name;
  }
}
?>
