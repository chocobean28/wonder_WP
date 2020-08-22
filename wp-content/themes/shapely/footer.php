<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shapely
 */

?>

</div><!-- #main -->
</section><!-- section -->

<div class="footer-callout">
	<?php shapely_footer_callout(); ?>
</div>

<footer id="colophon" class="site-footer footer bg-dark" role="contentinfo">
	<div class="container footer-inner">  <!--contact-info-->
		<div class="col-md-3">
            <img src="../../../wonder_WP/wp-content/uploads/2020/icon/footerlogo.png" id="footerlogo" alt="頁尾LOGO">    
        </div>
		<div class="row">
			<div class="d-flex flex-column">
				<div class="row justify-content-end">
					<div class="col-4">
						<img src="../../../wonder_WP/wp-content/uploads/2020/icon/phone.png" alt="" >
						<p style="color: #fff; padding: 0 20px"> 07-5583089</p> 
					</div>
					<div class="col-4">
						<img src="../../../wonder_WP/wp-content/uploads/2020/icon/mail.png" alt="">
						<p style="color: #fff; padding: 0 20px; font-size: 16px;">c.p.e.time@gmail.com</p>
					</div>
				</div>
				<div class="d-flex flex-column">
					<div class="d-flex flex-row mt-2">
						<img src="../../../wonder_WP/wp-content/uploads/2020/icon/locate.png" alt="" id="locate">
						<p style="color: #fff; padding: 0 20px"> 813 高 雄 市 左 營 區 維 新 街 1 號</p>
					</div>
					<div class="d-flex flex-row mt-2"> 
						<img src="../../../wonder_WP/wp-content/uploads/2020/icon/time.png" alt="" id="time">
						<p style="color: #fff; padding: 0 20px"> 週一至週日 11:00-20:00</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="site-info col col-12">
				<div class="copyright-text">
					<span class="text-white" >Copyright &copy 共 體 班 運 動 俱 樂 部 All Rights Reserved.  網 頁 設 計 : 創 力 整 合 行 銷</span>
				</div>
				<!--<div class="footer-credits">
					<?php shapely_footer_info(); ?>
				</div>-->
			</div><!-- .site-info -->
		</div>
	
		
	</div>
	

	<a class="btn btn-sm fade-half back-to-top inner-link" href="#top"><i class="fa fa-angle-up"></i></a>
</footer><!-- #colophon -->
</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
