<footer id="footer" class="footer color-bg">
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<?php dynamic_sidebar('footer_widget_one')?>
				<?php dynamic_sidebar('footer_widget_two')?>
				<?php dynamic_sidebar('footer_widget_three')?>
				<?php dynamic_sidebar('footer_widget_four')?>

			</div>
		</div>
	</div>
	<div class="copyright-bar">
		<div class="container">
			<div class="col-xs-12 col-sm-6 no-padding social">
				<ul class="link">
					<li class="fb pull-left">
						<a target="_blank" rel="nofollow" href="#" title="Facebook"></a>
					</li>
					<li class="tw pull-left">
						<a target="_blank" rel="nofollow" href="#" title="Twitter"></a>
					</li>
					<li class="googleplus pull-left">
						<a target="_blank" rel="nofollow" href="#" title="GooglePlus"></a>
					</li>
					<li class="rss pull-left">
						<a target="_blank" rel="nofollow" href="#" title="RSS"></a>
					</li>
					<li class="pintrest pull-left">
						<a target="_blank" rel="nofollow" href="#" title="PInterest"></a>
					</li>
					<li class="linkedin pull-left">
						<a target="_blank" rel="nofollow" href="#" title="Linkedin"></a>
					</li>
					<li class="youtube pull-left">
						<a target="_blank" rel="nofollow" href="#" title="Youtube"></a>
					</li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-6 no-padding">
				<div class="clearfix payment-methods">
					<ul>
						<li><img src="<?php echo esc_html(get_template_directory_uri());?>/assets/images/payments/1.png" alt=""></li>
						<li><img src="<?php echo esc_html(get_template_directory_uri());?>/assets/images/payments/2.png" alt=""></li>
						<li><img src="<?php echo esc_html(get_template_directory_uri());?>/assets/images/payments/3.png" alt=""></li>
						<li><img src="<?php echo esc_html(get_template_directory_uri());?>/assets/images/payments/4.png" alt=""></li>
						<li><img src="<?php echo esc_html(get_template_directory_uri());?>/assets/images/payments/5.png" alt=""></li>
					</ul>
				</div>
				<!-- /.payment-methods -->
			</div>
		</div>
	</div>
</footer>
<!-- JavaScripts placed at the end of the document-->

<?php wp_footer();?>
</body>

</html>