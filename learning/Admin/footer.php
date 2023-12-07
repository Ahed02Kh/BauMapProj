<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						<br>Copyrights  ©2022 جميع الحقوق محفوظة جامعة البلقاء التطبيقية تصميم وبرمجة مركز الحاسوب<br>
						
					</div>

					<div class="col_half col_last tright">
						<div class="fright clearfix">
							<a target="_blank" href="https://web.facebook.com/BalqaAppUni?_rdc=1&_rdr" class="social-icon si-small si-borderless si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a target="_blank" href="https://twitter.com/i/flow/login?redirect_after_login=%2FAlBalqaUni" class="social-icon si-small si-borderless si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a target="_blank" href="https://www.instagram.com/balqaappuni/" class="social-icon si-small si-borderless si-instagram">
								<i class="icon-instagram"></i>
								<i class="icon-instagram"></i>
							</a>

							<a target="_blank" href="https://www.youtube.com/channel/UCWFRnA8Gcso9MW14gBMJu1A?view_as=subscriber" class="social-icon si-small si-borderless si-pinterest">
								<i class="icon-youtube"></i>
								<i class="icon-youtube"></i>
							</a>

							<a target="_blank" href="https://www.linkedin.com/in/al-balqa-applied-university-6a2383184/" class="social-icon si-small si-borderless si-linkedin">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>	
						</div>

						<div class="clear"></div>

						<i class="icon-envelope2"></i> جامعة البلقاء التطبيقية <span class="middot">&middot;</span> <i class="icon-headphones"></i> +962 5 3532312 
					</div>

			</div><!-- #copyrights end -->

			</div>
			
		</footer> <!-- #footer end -->


		

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="../js/functions.js"></script>

	<script type="text/javascript">
		jQuery(document).ready(function($){
			$( '#vertical-nav nav ul li:has(ul)' ).addClass('sub-menu');
			$( '#vertical-nav nav ul li:has(ul) > a' ).append( ' <i class="icon-angle-down"></i>' );

			$( '#vertical-nav nav ul li:has(ul) > a' ).click( function(e){
				var element = $(this);
				$( '#vertical-nav nav ul li' ).not(element.parents()).removeClass('active');
				element.parent().children('ul').slideToggle( function(){
					$(this).find('ul').hide();
					$(this).find('li.active').removeClass('active');
				});
				$( '#vertical-nav nav ul li > ul' ).not(element.parent().children('ul')).not(element.parents('ul')).slideUp();
				element.parent('li:has(ul)').toggleClass('active');
				e.preventDefault();
			});
		});
		

	</script>

</body>
</html>