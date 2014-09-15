<?php 
include "inc/includes.php";
require_once("inc/Restaurant.php");
require_once("inc/Cuisine.php");
require_once("inc/Filter.php");
require_once("inc/Search.php");

// globals
global $USER_LOGGED_IN;
global $USER_NAME;
global $USER_EMAIL;
global $USERID;

/////////////////// Adding custom JS //////////////////////////
$CUSTOM_JS_INCLUDES = "<script type='text/javascript' src='js/jquery.isotope.min.js?ver=3.3.1'></script>
<script type='text/javascript' src='js/slides.min.jquery.js?ver=3.3.1'></script>
<script type='text/javascript' src='js/jquery.colorbox.js?ver=3.3.1'></script>
<script type='text/javascript' src='js/jquery.fitvids.js?ver=3.3.1'></script>
<script type='text/javascript' src='js/jquery.imagesloaded.js?ver=3.3.1'></script>
<script type='text/javascript' src='js/jquery.rating.pack.js?ver=3.3.1'></script>
<script type='text/javascript' src='js/star.rating.min.jquery.js?ver=3.3.1'></script>";
//////////////////////////////////////////////////////////////

$filter = new Filter();

$results = Search::getResultsWithFilter($filter);

?>
<?php include 'template/header.php'; ?>
<!--BEGIN .hentry -->
<div class="page type-page status-publish hentry header">
	
	<!--BEGIN .post-meta .post-header-->
	<div class="post-meta post-header">
		<h1 class="page-title">Search Filters</h1>
	<!--END .post-meta post-header -->
	</div>

	<!--BEGIN .post-content -->
	<div class="post-content">
		<div class="single-block">
			<strong>What:</strong> 
			<select name="category">
				<option value="0">Any</option>
				<option value="1">Dining</option>
				<option value="2">Lunch</option>
				<option value="3">Drinks</option>
				<option value="4">Breakfast</option>
			</select>
		</div>
		<div class="single-block">
			<strong>Where:</strong>
			<select name="location">
				<option value="0">All</option>
				<option value="1">Saket</option>
				<option value="2">Gurgaon</option>
			</select>
		</div>
		<div class="single-block">
			<strong>Max Price Range:</strong>
			<!-- <div id="price-range-inr">
				<div id="price-background"></div>
				<div id="price-actual" style="width: 50px;"></div>
			</div>
			-->
			<div id="price-range-inr">
			<input name="rating" type="radio" class="star required {half:true}" value="0.5" />
			<input name="rating" type="radio" class="star {half:true}" value="1.0" />
			<input name="rating" type="radio" class="star {half:true}" value="1.5" />
			<input name="rating" type="radio" class="star {half:true}" value="2.0"/>
			<input name="rating" type="radio" class="star {half:true}" value="2.5"/>
			<input name="rating" type="radio" class="star {half:true}" value="3.0"/>
			<input name="rating" type="radio" class="star {half:true}" value="3.5"/>
			<input name="rating" type="radio" class="star {half:true}" value="4.0"/>
			<input name="rating" type="radio" class="star {half:true}" value="4.5"/>
			<input name="rating" type="radio" class="star {half:true}" value="5.0"/>
			</div>
		</div>
		<div class="single-block">
			<strong>Location:</strong>
			<input type="text" name="location" title="Start typing location..." />
			<div class="locations-picker">
				
			</div>
		</div>
		<div>
			<div class="checkbox-wrapper"><input type="checkbox" name="delievery" value="true" /> Home Delievery</div>
			<div class="checkbox-wrapper"><input type="checkbox" name="pureveg" value="true" /> Pure Vegetarian</div>
			<div class="checkbox-wrapper"><input type="checkbox" name="reservation" value="true" /> Takes Reservations</div>
		</div>
		<div class="single-block">
			<a href="#" class="button black">Filter</a>
		</div>
	</div>
</div>
<?php
while ($reco = mysql_fetch_array($results)) {
	$restaurant = new Restaurant($reco['resId']);
	$cuisines = $restaurant->getCuisines();
	$categories = $restaurant->getCategories();
	?>
<div class="item normal" data-order='1'>

	<!--BEGIN .hentry -->
	<div class="hentry">

		<!--BEGIN .featured-image -->
		<div class="featured-image">
				
			<a href="#"><img src="http://demo.designerthemes.com/construct/files/2011/04/3995799932_8fed63e2fc_o1-300x180.jpg" width="300" height="180" alt="" /></a>
			
		<!--END .featured-image -->
		</div>
	<span class="meta-category icon-video">
		<?php
		$counter = 0; 
		foreach($cuisines as $cuisine) {
			if($counter++ != 0) echo ", ";
			?><a href="#" title="View all restaurants in <?php echo $cuisine->getName(); ?>" rel="tag"><?php echo $cuisine->getName(); ?></a><?php 
		}?>
	</span>

		<h2 class="post-title"><a href="#"><?php echo $restaurant->getName();?><span class="plus"><span>+</span> </span></a></h2>
		
		<!--BEGIN .post-content -->
		<div class="post-content">
			<p><?php echo $restaurant->getAddress();?></p>
		<!--END .post-content -->
		</div>
		<a class="read-more" href="#">Read More<span class="plus"><span>+</span> </span></a>
		<span class="meta-published">306 days ago</span>

	<!--END .hentry-->  
	</div>
</div>

<?php
}
getNavNextPage();
?>
<?php include 'template/footer.php'; ?>