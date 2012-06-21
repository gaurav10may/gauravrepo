<?php
/***

	The template for displaying the footer.
	
	Contains the closing of the id=main div and all content after

***/

?>

	</div><!-- #main -->

	<footer id="footer" role="contentinfo">


		<p id="footer_copyright">Copyright &copy; <?=date('Y')?> NBCUDPS. All rights reserved.</p>
		<p id="footer_terms">Use of this website signifies your agreement to the Terms of Service &amp; Privacy Policy.</p>
		<div id="footer_links"> 
			<ul> 
				<li><a href="<?=bloginfo('url') ?>/privacy/">Privacy Policy</a></li> 
				<li><a href="<?=bloginfo('url') ?>/terms/">Terms of Service</a></li> 
				<li><a href="<?=bloginfo('url') ?>/contact/">Contact Us</a></li> 
			</ul> 
		</div>	
	</footer><!-- #footer -->

</div><!-- #wrapper -->

<?php wp_footer(); ?>

</body>
</html>