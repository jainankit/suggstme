<?php

require_once("Cuisine.php");
require_once("Category.php");

/**
 * Represents a restaurant. Initializes with restaurant id (resId).
 *
 * uses sm_restaurant_info, sm_cuisine_type, sm_res_cuisine
 *
 * @author Ankit Jain (suggst.me)
 */
class Restaurant
{
  protected $resId;
  protected $name;
  protected $cost;
  protected $rating;
  protected $votes;
  protected $address;
  protected $phone;
  protected $strict_veg;
  protected $alcohol;
  protected $cats;
  protected $cuisines;
  protected $images;

  public function __construct($resId) {
    $this->resId = $resId;
    $query = mysql_query("SELECT * FROM sm_restaurant_info
        WHERE resId = '".$resId."'") or die(mysql_error());
    if ($result = mysql_fetch_array($query)) {
      $this->name = $result['name'];
      $this->rating = $result['rating'];
      $this->address = $result['address'];
      $this->cost = $result['cost'];
      $this->strict_veg = ($result['strict_veg'] == 1);
      $this->alcohol = ($result['alcohol'] == 1);
    }
  }

  /**
   * Returns an array of Cuisine objects
   */
  public function getCuisines() {
    $count = 0;
    if (!$this->cuisines) { 
      $this->cuisines = array();
      $query = mysql_query("SELECT * FROM sm_res_cuisine, sm_cuisine_type
          WHERE resId = \"".$this->resId."\"
            AND sm_res_cuisine.cuisineId = sm_cuisine_type.cuisineId")
          or die(mysql_error());

      while($result = mysql_fetch_array($query)) {
        $cuisine = new Cuisine($result['sm_res_cuisine.cuisineId'], $result['name']);
        $this->cuisines[$count++] = $cuisine;
      }
    }
    return $this->cuisines;
  }

  /**
   * Returns an array of Category objects
   */
  public function getCategories() {
    $count = 0;
    if (!$this->cats) {
      $this->cats = array();
      $query = mysql_query("SELECT * FROM sm_res_categories, sm_categories
          WHERE resId = \"".$this->resId."\"
            AND sm_res_categories.catId = sm_categories.catId")
          or die(mysql_error());

      while($result = mysql_fetch_array($query)) {
        $cat = new Category($result['sm_res_categories.catId'], $result['category']);
        $this->cats[$count++] = $cat;
      }
    }
    return $this->cats;
  }

  /**
   * Returns an array of images associated with the restaurant.
   */
  public function getImages() {
    $count = 0;
    if (!$this->images) {
      $this->images = array();
      // First find the restaurant specific images.
      $query = mysql_query("SELECT * FROM sm_res_images WHERE resId =\""
          .$this->resId."\"") or die(mysql_error());
      while($result = mysql_fetch_array($query)) {
        $this->images[$count++] = $result['image_url'];
      }

      // Now add the cuisine specific images.
      $query = mysql_query("SELECT * FROM sm_cuisine_images, sm_res_cuisine
          WHERE sm_res_cuisine.cuisineId = sm_cuisine_images.cuisineId
            AND sm_res_cuisine.resId = \"".$this->resId."\"")
          or die(mysql_error());
      while($result = mysql_fetch_array($query)) {
        $this->images[$count++] = $result['image_url'];
      }
      return $this->images;
    }
  }

  public function getResId() {
    return $this->resId;
  }

  public function getName() {
    return $this->name;
  }

  public function getCost() {
    return $this->cost;
  }

  public function getRating() {
    return $this->rating;
  }

  public function getVotes() {
    return $this->votes;
  }

  public function getAddress() {
    return $this->address;
  }

  public function getPhone() {
    return $this->phone;
  }

  public function isStrictlyVeg() {
    return $this->strict_veg;
  }

  public function servesAlcohol() {
    return $this->alcohol;
  }
}
