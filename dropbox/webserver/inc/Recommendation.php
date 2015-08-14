<?php

require_once("Filter.php");

/**
 * Manages all kinds of recommendation requests. In most cases, methods
 * return the output from executed sql query.
 *
 * Requires mysql database to be connected.
 *
 * uses  sm_user_reco_small, sm_user_reco_large, sm_user_visited,
 * sm_restaurant_info, sm_user_filters, sm_res_categories, sm_res_cuisine
 *
 * @author Ankit Jain (suggst.me)
 */
// TODO(ankit): Add support for distance based filtering.
class Recommendation
{
  /**
   * Facebook user id. It is a per user unique identifier.
   */
  protected $fbid;

  public function __construct($fbid) {
    $this->fbid = $fbid;
  }

  /**
   * Returns a list of recommended restaurants which were not visited by user
   * in past 30 days.
   */
  public function getUnfilteredNotVisited() {
    // Past 30 days.
    $time = time() - (30 * 24 * 60 * 60);
    $query = 
      mysql_query("SELECT sm_user_reco_small.fbid AS fbid,
            sm_user_reco_small.resId AS resId,
            sm_user_reco_small.rating AS rating
          FROM sm_user_reco_small LEFT JOIN sm_user_visited
          ON sm_user_reco_small.fbid = sm_user_visited.fbid
              AND sm_user_reco_small.resId = sm_user_visited.resId
          WHERE (sm_user_visited.visited_on IS NULL OR
                sm_user_visited.visited_on < '".$time."')
              AND sm_user_reco_small.fbid='".$this->fbid."'
          ORDER BY sm_user_reco_small.rating DESC")
          or die(mysql_error());
    return $query;
  }

  /**
   * Returns a list of recommended restaurants which were not visited by user
   * in past 30 days and fall in user's default filter category.
   */
  public function getFilteredNotVisited($filter = null) {
    if (!$filter) {
      $filter = new Filter();
    }
    $time = time() - (30 * 24 * 60 * 60);
    $filterString = $this->getFiltersQuery($filter);
          $query = 
      mysql_query("SELECT sm_user_reco_small.fbid AS fbid,
            sm_user_reco_small.resId AS resId,
            sm_user_reco_small.rating AS rating
          FROM  sm_restaurant_info"
          . (($filter->getCuisine() != 0) ? ", sm_res_cuisine" : "").",
          sm_user_reco_small
          LEFT JOIN sm_user_visited
          ON sm_user_reco_small.fbid = sm_user_visited.fbid
              AND sm_user_reco_small.resId = sm_user_visited.resId
          WHERE (sm_user_visited.visited_on IS NULL OR
                sm_user_visited.visited_on < '".$time."')
              AND sm_user_reco_small.fbid='".$this->fbid."'
              AND sm_user_reco_small.resId = sm_restaurant_info.resId"
              .$filterString.
          " ORDER BY sm_user_reco_small.rating DESC")
          or die(mysql_error());
    return $query;
  }

  /**
   * Returns a list of recommended restaurants for the user with
   * the given cuisine. It takes care of user's default filters.
   *
   * @Deprecated: with new changes, filters for cuisines don't make
   * much sense.
   */
  public function getFilteredWithCuisine($cuisineId) {
    // $filterString  = $this->getFiltersQuery();

    $query = 
      mysql_query("SELECT sm_user_reco_small.fbid AS fbid,
            sm_user_reco_small.resId AS resId,
            sm_user_reco_small.rating AS rating
          FROM  sm_restaurant_info, sm_user_reco_small, sm_res_cuisine
          WHERE sm_user_reco_small.fbid='".$this->fbid."'
              AND sm_user_reco_small.resId = sm_restaurant_info.resId
              AND sm_res_cuisine.cuisineId = \"".$cuisineId."\"
              AND sm_res_cuisine.resId = sm_restaurant_info.resId".
             // .$filterString.
          " ORDER BY rating DESC")
          or die(mysql_error());
    return $query;

  }

  /**
   * Returns a list of recommended restaurants for the user with
   * the given category. It takes care of user's default filters.
   */
  public function getFilteredWithCategory($catId, $filter = null) {
    if (!$filter) {
      $filter = new Filter();
    }
    $filterString = $this->getFiltersQuery($filter);

    $query =
      mysql_query("SELECT sm_user_reco_small.fbid AS fbid,
            sm_user_reco_small.resId AS resId,
            sm_user_reco_small.rating AS rating
          FROM  sm_restaurant_info, sm_user_reco_small, sm_res_categories"
          . (($filter->getCuisine() != 0) ? ", sm_res_cuisine" : "")."
          WHERE sm_user_reco_small.fbid='".$this->fbid."'
              AND sm_user_reco_small.resId = sm_restaurant_info.resId
              AND sm_res_categories.catId = \"".$catId."\"
              AND sm_res_categories.resId = sm_restaurant_info.resId"
              .$filterString.
          " ORDER BY rating DESC")
          or die(mysql_error());
    return $query;
  }

  /**
   * Adds filters to the sql query.
   * Requires sm_restaurant_info, sm_res_cuisine in the parent sql.
   */
  protected function getFiltersQuery($filter = null) {

    /*$filtersQuery = mysql_query("SELECT * FROM sm_user_filters WHERE
       fbid ='".$this->fbid."'") or die(mysql_error());

    $filter = mysql_fetch_array($filtersQuery);

    // Create sql substring for filters
    $filterString = "";
    // Wants a strictly vegetarian place.
    if ($filter['strict_veg'] == 1) {
      $filterString .= " AND sm_restaurant_info.strict_veg = '1'";
    }
    // Wants a place which serves liquor.
    if ($filter['alcohol'] == 1) {
      $filterString .=" AND sm_restaurant_info.alcohol = '1'";
    }*/

    $filterString = "";

    if (!$filter) {
      $filter = new Filter();
    }
    if ($filter->getCuisine() != 0) {
      $filterString .= " AND sm_res_cuisine.cuisineId = \""
          .$filter->getCuisine()."\"
          AND sm_res_cuisine.resId = sm_restaurant_info.resId";
    }
    if ($filter->getCostFor2() != 0) {
      $filterString .= " AND sm_restaurant_info.cost = \""
        .$filter->getCostFor2()."\"";
    }
    if ($filter->getAlcohol()) {
      $filterString .= " AND sm_restaurant_info.alcohol = '1'";
    }

    return $filterString;
  }
}
?>
