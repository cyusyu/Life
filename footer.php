		<footer>
		<div class="container">
			<div class="row">
				<ul class="contact-list col-md-8">
					<li><i class="fa fa-envelope"></i> 邮箱号</li>
					<li><i class="fa fa-weixin"></i> 微信号</li>
					<li><i class="fa fa-tachometer"></i> <a href="http://wuyanlong.com">Theme author</a> 站长统计</li>
				</ul>
				<ul class="social-list col-md-4">
					<li><a href="http://typecho.org/"><i class="fa fa-tumblr"></i></a></li>
					<li><a href="http://fortawesome.github.io/Font-Awesome/icons/"><i class="fa fa-flag"></i></a></li>
					<li><a href="#"><i class="fa fa-html5"></i></a></li>
					<li><a href="#"><i class="fa fa-css3"></i></a></li>
					<li class="copyright">©-<a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a></li>
				</ul>
			</div>
		</div>
	</footer>
<?php $this->footer(); ?>
<script src="<?php $this->options->themeUrl('js/404.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/backgroundcheck.js'); ?>"></script>
<script type="text/javascript" charset="utf-8" src="<?php $this->options->themeUrl('js/jquery.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/main.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/plugins.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/retina.js'); ?>"></script>
</body>
</html>