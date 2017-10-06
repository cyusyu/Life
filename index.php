<?php
/**
 * 大气响应式typecho主题Poem-pro
 * @package Poem-pro
 * @author wuyanlong.com
 * @version 2.0
 * @link http://wuyanlong.com
 */
 if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<section class="hero accent parallax" style="background-image: url(<?php $this->options->themeUrl('images/parallax.jpg'); ?>);">
  <div class="hero-content container">
    <p>poem-pro主题2.0——wuyanlong.com</p>
    <h2>poem-pro：优雅才优秀</h2>
  </div>
  <div class="sub-hero container"> <span class="line"></span> <a href="#" class="button white">作品展示</a> </div>
</section>
<section class="center-mobile content container">
		<div class="row">
			<div class="col-sm-4">
			<h2 style="color:#2db4d8"><center><a href="#">分类一</a></center></h2>
				<p><center>这是分类描述</center></p>
			</div>
			<div class="col-sm-4">
				<h2 style="color:#2db4d8"><center><a href="#">分类二</a></center></h2>
				<p><center>这是分类描述</center></p>
			</div>
			<div class="col-sm-4">
				<h2 style="color:#2db4d8"><center><a href="#">分类三</a></center></h2>
				<p><center>这是分类描述</center></p>
			</div>
		</div>
	</section>
<?php $this->need('footer.php'); ?>
