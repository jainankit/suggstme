<?php
include "inc/includes.php";

// Other includes
require_once ("inc/Recommendation.php");
require_once("inc/Restaurant.php");
require_once("inc/Cuisine.php");
require_once("inc/Filter.php");

// globals
global $USER_LOGGED_IN;
global $USER_NAME;
global $USER_EMAIL;
global $USERID;

if (!$USER_LOGGED_IN) {
	header("Location:index.php");
}
/////////////////// Adding custom JS //////////////////////////
$CUSTOM_JS_INCLUDES = "<script type='text/javascript' src='js/jquery.isotope.min.js?ver=3.3.1'></script>
<script type='text/javascript' src='js/slides.min.jquery.js?ver=3.3.1'></script>
<script type='text/javascript' src='js/jquery.colorbox.js?ver=3.3.1'></script>
<script type='text/javascript' src='js/jquery.fitvids.js?ver=3.3.1'></script>
<script type='text/javascript' src='js/jquery.imagesloaded.js?ver=3.3.1'></script>";
//////////////////////////////////////////////////////////////

$recommendation = new Recommendation($USERID);
$filter = new Filter();
//$filter->setCuisine(7);
$result = $recommendation->getFilteredWithCategory(2, $filter);
$recoCount = mysql_num_rows($result);
?>
<?php include "template/header.php"; ?>
<?php 
if ($reco = mysql_fetch_array($result)) {
	$restaurant = new Restaurant($reco['resId']);
	$cuisines = $restaurant->getCuisines();
?>
<div class="page type-page status-publish hentry header">
	
	<!--BEGIN .post-meta .post-header-->
	<div class="post-meta post-header">
		<h1 class="page-title">Today's oven fresh for you</h1>
	<!--END .post-meta post-header -->
	</div>

	<!--BEGIN .post-content -->
	<div class="post-content">
		<!--BEGIN .featured-details -->
		<div class="item">

			<div class="details">
				<h2 class="post-title"><a href="#"><?php echo $restaurant->getName();?><span class="plus"><span>+</span></span></a></h2>
				<?php
				$counter = 0;
				foreach($cuisines as $cuisine) {
					if($counter++ != 0) echo ", ";
					?><span class="meta-category"><?php echo $cuisine->getName();?></span><?php
				}
				?>
				<!--BEGIN .featured-post-content -->
				<div class="featured-post-content">
					<div class="featued-single-block">
						<?php
						$counter = 0;
						foreach($restaurant->getCategories() as $category) {
							if ($couter++ != 0) echo ", ";
							?><span class="category">
								<a href="restaurant.php?id=<?php echo $category->getCategoryId();?>" label="get recommendations for <?php echo $category->getName();?>"><?php echo $category->getName();?></a></span><?php
						}
						?>
					</div>
					
					<div class="featured-single-block">
					<?php echo $restaurant->getAddress(); ?></div>
				<!--END .post-content -->
				</div>
				
				<a class="read-more" href="#">Read More<span class="plus"><span>+</span></span></a>
			</div>
		<!--END .featured-details -->
		</div>
		<div class="featured-image-block">
			<div class="featured-image-cover">
				<a href="#"><img src="http://demo.designerthemes.com/construct/files/2011/04/3995799932_8fed63e2fc_o1-400x390.jpg" width="400" height="390" alt="" /></a>
			</div>
		</div>

	<!--END .post-content -->
	</div>
</div>
<?php
	while ($reco = mysql_fetch_array($result)) {
		$restaurant = new Restaurant($reco['resId']);
		$cuisines = $restaurant->getCuisines();
	?>
	<div class="item normal" data-order='1'>

		<!--BEGIN .hentry -->
		<div class="hentry" id="post-785">

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
				?><a href="#" title="View all restaurants in <?php echo $cuisine->getName(); ?>" rel="tag"><?php echo $cuisine->getName() ?></a><?php 
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
	getLoadMoreButton();
}
?>
<?php include "template/footer.php"; ?>