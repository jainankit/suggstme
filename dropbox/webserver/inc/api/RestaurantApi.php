<?php
require_once __ROOT__.'/inc/Search.php';
/**
 * All methods in this class return a JSON string which is used to return the response
 * back to the client.
 *
 * @author ankitjain
 */
class RestaurantApi
{
	/**
	 * Returns json of format same as table layout of <code>sm_res_info</code>:
	 * 
	 * {"count":TOTAL_RESULTS,
	 *  "restaurants":[
	 *  	{"resid":"RES_ID",
	 *  	 "name":"NAME",
	 *  	 "address":"ADDRESS",
	 *       "latitude":"LATITUDE",
	 *       "longitude":"LONGITUDE"},
	 *       ...
	 *  ]}
	 */
	public static function getRestaurantsStartingWith($string) {
		$results = Search::getRestaurantsStartingWith($string);

		$arrayResult["count"] = mysql_num_rows($results);
		$arrayResult["restaurants"] = array();
		while ($result = mysql_fetch_array($results, MYSQL_ASSOC)) {
			$arrayResult["restaurants"][] = $result;
		}
		return json_encode($arrayResult);
	}
}
?>