<!DOCTYPE HTML>
    <!--[if IE 7]>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/ie7.css'); ?>" media="screen" />
    <![endif]-->
    <!--[if IE 8]>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/ie8.css'); ?>" media="screen" />
    <![endif]-->
    <!--[if IE 9]>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/ie9.css'); ?>" media="screen" />
    <![endif]-->
    
    <!--[if lt IE 9]>
        <script src="<?php $this->options->themeUrl('js/html5shiv.js'); ?>"></script>
    <![endif]-->
<head>
    <link rel="shortcut icon" href="<?php $this->options->themeUrl('images/favicon.ico'); ?>">
    <link rel="shortcut icon" href="<?php $this->options->themeUrl('images/favicon.png'); ?>">
    <link rel="apple-touch-icon" href="<?php $this->options->themeUrl('images/apple-touch-icon.png'); ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php $this->options->themeUrl('images/apple-touch-icon-72x72.png'); ?>">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php $this->options->themeUrl('images/apple-touch-icon-114x114.png'); ?>">
    <meta charset=""utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t(' %s '),
            'search'    =>  _t(' %s '),
            'tag'       =>  _t(' %s '),
            'author'    =>  _t(' %s ')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
    <link rel="stylesheet" href="http://cdn.staticfile.org/normalize/2.1.3/normalize.min.css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/framework.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/style.css'); ?>">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    
<?php $this->header('generator=&template=&pingback=&xmlrpc=&wlw=&rss1=&rss2=&atom=&commentReply='); ?>
</head>
<body>
	<nav class="mobile">
    <div class="search-trigger"></div>
    <div class="search-form disabled">
       <form action="#">
	<input name="s" id="search" type="text" class="search" placeholder="Search.." value=""/>
    </form>
    </div>
    <ul class="nav-content clearfix">
        <li id="magic-line"></li>
        <li class="upper"><a href="<?php $this->options->siteUrl(); ?>" class="current-page upper">首页</a></li>
        <li class="drop upper">	<a class="drop-btn">分类</a>
            <ul class="drop-list">
                <?php $this->widget('Widget_Metas_Category_List')->to($category); ?> 
                    <?php while($category->next()): ?>
                    <li<?php if($this->is('category', $category->slug)): ?> class="upper" <?php endif; ?>><a href="<?php $category->permalink(); ?>" title="<?php $category->title(); ?>"><?php $category->name(); ?></a></li>
                    <?php endwhile; ?>
            </ul>
        </li>
                <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                        <?php while($pages->next()): ?>
                        <li<?php if($this->is('page', $pages->slug)): ?> class="current-page upper"<?php endif; ?>><a href="<?php $pages->permalink(); ?>"><?php $pages->title(); ?></a></li>
            <?php endwhile; ?>
    </ul>
</nav>
<header class="mobile">
    <a href="<?php $this->options->siteUrl(); ?>">
        <img class="logo" src="<?php $this->options->themeUrl('images/logo.png'); ?>" alt="<?php $this->options->title() ?>" width="96" height="35" />
    </a>
    <button type="button" class="nav-button">
        <div class="button-bars"></div>
    </button>
</header>
<div class="sticky-head"></div>