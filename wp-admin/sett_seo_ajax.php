<?php
	require_once "class_quantri.php";
	include 'SitemapGenerator.php';
	
	$site_url = "http://phathaiantoanhcm.com/";
	
	$qt = new quantri;
	
	$cats = $qt->ListDMActive();
	$pages = $qt->ListPAActive();
	$news = $qt->ListTTActive();
	
	$sitemap = new SitemapGenerator();   
    $sitemap->addUrl($site_url, null, 'daily', '1.0');
	
	while($item = mysql_fetch_assoc($cats)){
		$sitemap->addUrl($site_url . $item["TieuDeKD"] . "-" . $item["idLoai"] . "/", null, 'daily', '0.85');
	}
	
	while($item = mysql_fetch_assoc($pages)){
		$sitemap->addUrl($site_url . $item["TieuDeKD"] . ".html", date('c' , strtotime($item['NgayDang'])), 'daily', '0.7');
	}
	
	while($item = mysql_fetch_assoc($news)){
		$sitemap->addUrl($site_url . $item["TieuDeKD"] . ".html", date('c' , strtotime($item['NgayDang'])), 'daily', '0.7');
	}	
		
	$sitemap->createSitemap();
	$sitemap->writeSitemap();
	$sitemap->submitSitemap();