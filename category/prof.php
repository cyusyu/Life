<?php $this->need('header.php'); ?>
<section class="hero small accent parallax" style="background-image: url(<?php $this->options->themeUrl('images/parallax.jpg'); ?>);">
    <div class="hero-content container">
        <h1><?php $this->archiveTitle(array(
            'category'  =>  _t('%s'),
            'search'    =>  _t('包含"%s"'),
            'tag'       =>  _t('标签"%s"'),
            'author'    =>  _t('%s')
        ), '', ''); ?></h1>
    </div>
    <div class="sub-hero container">	<span class="line"></span>
    </div>
</section>
<section class="portfolio-block">
    <div class="container">
        <div class="row">
            <ul class="filtering col-lg-12">
                <li class="filter" data-filter="all">用心创造生活</li>
            </ul>
        </div>
    </div>
    <ul class="portfolio-grid">
         <?php if ($this->have()): ?>
            <?php while($this->next()): ?>          
        <li class="thumbnail mix mix_all category-1">
            <a href="<?php $this->permalink() ?>">
                 <img src="<?php @thumbnail($this); ?>" alt="<?php $this->title() ?>" />
                <div class="projectinfo">
                    <div class="meta">
                        <h4><?php $this->title() ?></h4>
                    </div>
                </div>
            </a>
        </li>
                <?php endwhile; ?>
            <?php else: ?>
             <li class="thumbnail mix mix_all category-1">
            <h2 class="h3"><?php _e('没有找到内容'); ?></h2>
             </li>
            <?php endif; ?>
                </ul> 
            
</section>
<section class="clients container">
		<div class="row">
			<div class="type-post" id="pagination">
                <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?></div>
        </div>
		</div>
	</section>
<?php $this->need('footer.php'); ?>