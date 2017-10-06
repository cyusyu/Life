<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
    $form->addInput($logoUrl);
    
    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    array('ShowRecentPosts' => _t('显示最新文章'),
    'ShowRecentComments' => _t('显示最近回复'),
    'ShowCategory' => _t('显示分类'),
    'ShowArchive' => _t('显示归档'),
    'ShowOther' => _t('显示其它杂项')),
    array('ShowRecentPosts', 'ShowRecentComments', 'ShowCategory', 'ShowArchive', 'ShowOther'), _t('侧边栏显示'));
    
    $form->addInput($sidebarBlock->multiMode());
}


/*
function themeFields($layout) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
    $layout->addItem($logoUrl);
}
*/



function summary($txt){
$html = preg_replace('/<\s*img\s+[^>]*?src\s*=\s*(\'|\")(.*?)\\1[^>]*?\/?\s*>/im',"", $txt->content);
preg_match_all('/<p>.*?<\/p>/im', $html, $m);
if(count($m[0])>0){
	if(strlen($m[0][0])<200){
	echo($m[0][0].$m[0][1]);
	}
	else{
	echo($m[0][0]);
	}
}
else{
$txt->excerpt(300, '...');
}
}
function thumbnail($img){
preg_match_all('/(?<=img.src=").*?(?=")/im', $img->content, $m); 
 if (count($m[0])>0){
echo($m[0][0]);
 }
 else{
	 global $themeDir;
	 echo($themeDir."http://d.pcs.baidu.com/thumbnail/cf59254a5ae4e631dc0bf1eec36168df?fid=268451041-250528-143711447024483&time=1438048800&rt=sh&sign=FDTAER-DCb740ccc5511e5e8fedcff06b081203-EVyvgEYl%2FSXx9Ps0td3RPguZcFc%3D&expires=2h&prisign=unkown&chkv=0&chkbd=0&chkpc=&size=c500_u500&quality=100");
	 }
}