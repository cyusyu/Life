<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<section class="hero small accent parallax" style="background-image: url(<?php $this->options->themeUrl('images/parallax.jpg'); ?>);">
  <div class="hero-content container">
    <h1>
      <?php $this->archiveTitle(array(
            'category'  =>  _t('%s'),
            'search'    =>  _t('"%s"'),
            'tag'       =>  _t('"%s"'),
            'author'    =>  _t('%s')
        ), '', ''); ?>
    </h1>
  </div>
  <div class="sub-hero container"> <span class="line"></span> </div>
</section>
<section class="content container">
  <div class="row">
    <div class="col-sm-8">
      <?php if ($this->have()): ?>
      <?php while($this->next()): ?>
      <div class="post image"> <span class="date">
        <?php $this->date('d'); ?>
        <br>
        <small>
        <?php $this->date('M'); ?>
        </small></span>
        <div class="post-title">
          <h2><a href="<?php $this->permalink() ?>">
            <?php $this->title() ?>
            </a></h2>
        </div>
        <div class="post-body">
          <p>
            <?php $this->content('阅读全文&raquo;'); ?>
          </p>
        </div>
      </div>
      <?php endwhile; ?>
      <?php else: ?>
      <div class="post image"><span class="date">00<br>
        <small>⌒</small></span>
        <div class="post-title">
          <h2>
            <?php _e('没有找到内容'); ?>
          </h2>
        </div>
        <div class="post-body">
          <p>回首页： <a href="<?php $this->options->siteUrl(); ?>">
            <?php $this->options->title(); ?>
            </a> </p>
        </div>
      </div>
      <?php endif; ?>
      <div class="type-post" id="pagination">
        <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
      </div>
    </div>
    <?php $this->need('sidebar.php'); ?>
  </div>
</section>
<?php $this->need('footer.php'); ?>
