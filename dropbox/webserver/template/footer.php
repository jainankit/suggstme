</div><!-- #content -->

			<!--END #content -->
			</div>

		<!--END #main -->
		</div>

	<!--END #page -->

    </div>

<!--END #wrapper -->
</div>

<!--BEGIN #bottom -->
<div id="bottom">

	<!--BEGIN #footer -->
	<div id="footer">
		
		<!-- #footer-inner.clearfix -->
		<div id="footer-inner" class="clearfix">

		
			<!--BEGIN #footer-menu -->
			<div id="footer-menu" class="clearfix">
				<div class="menu-footer-menu-container"><ul id="menu-footer-menu" class="menu">
<li id="menu-item-1328" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1328"><a href="#">About us</a></li>
<li id="menu-item-1329" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1329"><a href="#">Feedback</a></li>
<li id="menu-item-1330" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1330"><a href="#">How it works</a></li>
<li id="menu-item-1332" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1332"><a href="#">Contact</a></li>
<li id="menu-item-1336" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1336"><a href="#">Sitemap</a></li>

</ul></div>			<!--END #footer-menu -->
			</div>
	
			<!--BEGIN #credits -->
			<div id="credits">
				<p>Copyright 2012 Suggst.me - A <a href="http://suggst.me" title="Suggst.me">Recommender</a> by <a href="http://suggst.me/">Suggst.me</a></p>
			<!--END #credits -->

			</div>
		
		</div>
		<!-- /#footer-inner.clearfix -->

	<!--END #footer -->
	</div>

<!--END #bottom -->
</div>

<script type='text/javascript'>
/* <![CDATA[ */
var dt = {"startPage":"1","maxPages":"3","nextLink":"http:\/\/demo.designerthemes.com\/construct\/page\/2\/"};
/* ]]> */
</script>
<script type='text/javascript' src='js/jquery.custom.js?ver=1.0'></script>
<script type="text/javascript">
$('input').each(function(){
	if ($(this).attr('title') && ($(this).attr('title').length > 0)) {
		if(this.value == '') {
			this.value = $(this).attr('title');
			$(this).addClass('text-default-label');
		}
 
		$(this).focus(function(){
			if(this.value == $(this).attr('title')) {
				this.value = '';
				$(this).removeClass('text-default-label');
			}
		});
 
		$(this).blur(function(){
			if(this.value == '') {
				this.value = $(this).attr('title');
				$(this).addClass('text-default-label');
			}
		});
	}
});
</script>
</body>

</html>