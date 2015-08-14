<?php
/**
 * Represents a category. Initializes with category id and name (optional).
 * If name is not provided, it loads the name from database.
 *
 * uses sm_categories
 *
 * @author Ankit Jain (suggst.me)
 */
class Category
{
  protected $categoryId;
  protected $name;

  public function __construct($categoryId, $name="") {
    $this->categoryId = $categoryId;
    $this->name = $name;
  }

  public function getCategoryId() {
    return $this->categoryId;
  }

  public function getName() {
    if ($this->name == "") {
      $query = mysql_query("SELECT * FROM sm_categories WHERE catId = \""
          .$this->catId."\"") or die(mysql_error());
      if ($result = mysql_fetch_array($query)) {
        $this->name = $result['category'];
      }
    }
    return $this->name;
  }
}
?>
