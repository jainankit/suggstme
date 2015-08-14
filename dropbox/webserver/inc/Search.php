<?php

require_once("Filter.php");

/**
 * Searches the restaurants list and returns results. In most cases, methods
 * return the output from executed sql query.
 *
 * Requires mysql database to be connected.
 *
 * uses  sm_restaurant_info, sm_res_categories, sm_res_cuisines
 *
 * @author Ankit Jain (suggst.me)
 */
// TODO(ankit): Add support for distance based filtering.
class Search
{
	public function getResults() {
		return getResultsWithFilter();
	}
	public static function getResultsWithFilter($filter = null) {
		if (!$filter) {
			$filter = new Filter();
		}
		$queryString = "SELECT * FROM sm_restaurant_info".
			(($filter->getCuisine() != 0) ? ", sm_res_cuisine" : "").
			(($filter->getCategory() != 0) ? ", sm_res_categories" : "").
			" WHERE 1".
			(($filter->getCategory() != 0) ? " AND sm_res_categories.catId = '".$filter->getCategory()."'
					AND sm_res_categories.resId = sm_restaurant_info.resId" : "").
			(($filter->getCuisine() != 0) ? " AND sm_res_cuisine.cuisineId = '".$filter->getCuisine()."'
					AND sm_res_cuisine.resId = sm_restaurant_info.resId" : "").
			(($filter->getCostFor2() != 0) ? " AND sm_restaurant_info.cost < '".$filter->getCostFor2()."'" : "").
			($filter->getAlcohol() ? " AND sm_restaurant_info.alcohol = 1" : "").
			($filter->getPureVegetarian() ? " AND sm_restaurant_info.strict_veg = 1" : "").
			" ORDER BY resId DESC";
		$query = mysql_query($queryString);

		return $query;
	}

	public static function getRestaurantsStartingWith($string) {
		$queryString = "SELECT * FROM sm_res_info WHERE name LIKE '".$string."%' ORDER BY name";
		$query = mysql_query($queryString);
		return $query;
	}
}