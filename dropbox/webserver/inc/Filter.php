<?php
/**
 * Represents a customized filter. Initializes with default values. All the
 * values in the filter can be set using the setter methods.
 *
 *
 * @author Ankit Jain (suggst.me)
 */
class Filter
{
  // Maximum distance(in kms) that the user wants to travel.
  protected $distance = 50;

  // Id of cuisine preferred. 0 represent all cuisines.
  protected $cuisine = 0;

  // Id of category to show. 0 represent all categories.
  protected $category = 0;

  // Locality id. 0 represented using user's current location.
  // Not supported yet.
  protected $locality = 0;

  // Cost for two. Represents maximum spend for the user.
  // 0 represent no limit set by user.
  protected $costFor2 = 0;

  // Boolean value, true if user is looking for a place which serves
  // liquor.
  protected $alcohol = false;

  // Boolean value, true if user is looking for only pure vegetarian places.
  protected $pureVegetarian = false;

  // Boolean value, true if user is looking for only options with home delievery.
  protected $homeDelievery = false;

  public function setDistance($distance) {
    $this->distance = $distance;
  }

  public function getDistance() {
    return $this->distance;
  }

  public function setCuisine($cuisineId) {
    $this->cuisineId = $cuisineId;
  }

  public function getCuisine() {
    return $this->cuisineId;
  }

  public function setCategory($category) {
  	$this->category = $category;
  }

  public function getCategory() {
  	return $this->category;
  }

  public function setLocality($locality) {
    $this->locality = $locality;
  }

  public function getLocality() {
    return $this->locality;
  }

  public function setCostFor2($costFor2) {
    $this->costFor2 = $costFor2;
  }

  public function getCostFor2() {
    return $this->costFor2;
  }

  public function setAlcohol($alcohol) {
    $this->alcohol = $alcohol;
  }

  public function getAlcohol() {
    return $this->alcohol;
  }

  public function setPureVegetarian($vegetarian) {
  	$this->pureVegetarian = $vegetarian;
  }

  public function getPureVegetarian() {
  	return $this->pureVegetarian;
  }

  public function setHomeDelievery($homeDelievery) {
  	$this->homeDelievery = $homeDelievery;
  }

  public function getHomeDelievery() {
  	return $this->homeDelievery;
  }
}
?>
