<?php
	session_start();
	// add thu vien
	require "dao/pdo.php";
	require "dao/loai-tour.php";
	require "dao/tour.php";
	require "dao/news.php";
	require "dao/gallery.php";
	require "dao/banner.php";
	require "dao/khachhang.php";
	require "dao/admin.php";
	require "dao/dat_tour.php";
	
	// add head
	require "admin/layout/head-admin.php";

	if(isset($_GET['page'])){
		$page=$_GET['page'];
	}
	else {
		$page = 'index';
	}
	if($page=="index")
	{
		require "admin/index.php";
	}
	elseif($page=="loai-tour")
	{
		require "admin/loai-tour.php";
	}
	elseif($page=="tour")
	{
		require "admin/tour.php";
	}
	elseif($page=="dat_tour")
	{
		require "admin/dat_tour.php";
	}
	elseif($page=="news")
	{
		require "admin/news.php";
	}
	elseif($page=="gallery")
	{
		require "admin/gallery.php";
	}
	elseif($page=="banner")
	{
		require "admin/banner.php";
	}
	elseif($page=="khach-hang")
	{
		require "admin/khach-hang.php";
	}
	elseif($page=="profile")
	{
		require "admin/profile.php";
	}
	else{
		echo '';
	}

	// add footer
	require "admin/layout/foot-admin.php";
?>
