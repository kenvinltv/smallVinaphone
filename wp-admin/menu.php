<?php 
	require_once "checklogin.php";
	require_once "class_quantri.php";
	$qt =  new quantri;
?>
<script type="text/javascript">

		$(document).ready(function() {

			// Store variables

			var accordion_head = $('.accordion > li > a'),
				accordion_body = $('.accordion li > .sub-menu');

			// Open the first tab on load

            if ($.cookie('kaka')>0){
                var menu = $.cookie('kaka');
                var menu_hien = '#'+menu+' a';
                $(menu_hien).addClass('active').next().slideDown('normal');
            }
            else
		      	$('#1 a').addClass('active').next().slideDown('normal');

			// Click function

			accordion_head.on('click', function(event) {

				// Disable header links

				event.preventDefault();

				// Show and hide the tabs on click

				if ($(this).attr('class') != 'active'){
					accordion_body.slideUp('normal');
					$(this).next().stop(true,true).slideToggle('normal');
					accordion_head.removeClass('active');
					$(this).addClass('active');
				}

			});

		});

        function luu(menu){
            $.cookie('kaka',menu,{expires:7,path:'/'});
        }
	</script>
<div id="wrapper-250">

		<ul class="accordion">
			<li id="1" class="home">
				<a href="#one">Trang Chủ</a>
				<ul class="sub-menu">
					<li><a onclick="luu(1)" href="http://phongkhamdakhoaviethan.vn"><em>01</em>Trang Phòng Khám</a></li>
					<li><a onclick="luu(1)" href="http://tuvanbenhsuimaoga.vn"><em>02</em>Trang Chủ</a></li>
				</ul>

			</li>
            <?php if ($_SESSION['kt_login_level'] >= 1 & $_SESSION['kt_login_id']!=12 ) { ?>
            <li id="2" class="page">
				<a href="#one">Pages</a>
				<ul class="sub-menu">
					<li><a onclick="luu(2)" href="main.php?p=pa_xem"><em>01</em>Tất Cả trang<span><?php //echo $qt->TongPages(); ?></span></a></li>
                    <li><a onclick="luu(2)" href="main.php?p=pa_them"><em>02</em>Thêm Trang</a></li>
				</ul>
			</li>
			<li id="5" class="post">
				<a href="#one">Tin Tức</a>
				<ul class="sub-menu">
                    <li><a onclick="luu(5)" href="main.php?p=tt_xem"><em>01</em>Tất Cả Tin Tức<span><?php //echo $qt->TongTT(); ?></span></a></li>
                    <li><a onclick="luu(5)" href="main.php?p=tt_them"><em>02</em>Thêm Tin Tức</a></li>
				</ul>
			</li>
			<?php } ?>
            <?php if ($_SESSION['kt_login_level'] >= 2 & $_SESSION['kt_login_id']!=12 ) { ?>
            <li id="6" class="catalog">
				<a href="#one">Danh Mục</a>
				<ul class="sub-menu">
                    <li><a onclick="luu(6)" href="main.php?p=dm_xem"><em>01</em>Tất Cả Danh Mục<span><?php //echo $qt->TongDM(); ?></span></a></li>
                    <li><a onclick="luu(6)" href="main.php?p=dm_them"><em>02</em>Thêm Danh Mục</a></li>
				</ul>
			</li>
			<li id="11" class="question">
				<a href="#one">Câu Hỏi</a>
				<ul class="sub-menu">
                    <li><a onclick="luu(11)" href="main.php?p=ch_xem"><em>01</em>Tất Cả Câu Hỏi<span><?php //echo $qt->TongCH(); ?></span></a></li>
				</ul>
			</li>			
            <li id="14" class="setting-page">
                <a href="#one">Setting Page</a>
                <ul class="sub-menu">
                    <li><a onclick="luu(14)" href="main.php?p=sett_chinh"><em>01</em>Setting Page<span><?php //echo $qt->TongCH(); ?></span></a></li>
                    <li><a onclick="luu(14)" href="main.php?p=sett_seo"><em>01</em>SEO<span><?php //echo $qt->TongCH(); ?></span></a></li>
                </ul>
            </li>
            <?php } ?>
            <?php if ($_SESSION['kt_login_level'] >= 3 & $_SESSION['kt_login_id']!=12) { ?>
			<li id="8" class="slider">
				<a href="#one">Slider</a>
				<ul class="sub-menu">
                    <li><a onclick="luu(8)" href="main.php?p=sl_xem"><em>01</em>Quản Lý Slider<span><?php //echo $qt->TongSL(); ?></span></a></li>
                	<li><a onclick="luu(8)" href="main.php?p=sl_them"><em>02</em>Thêm Slider</a></li>
				</ul>
			</li>
			<?php } ?>
			<li id="7" class="register">
				<a href="#one">Đăng Ký</a>
				<ul class="sub-menu">
                    <li><a onclick="luu(7)" href="main.php?p=dk_xem"><em>01</em>Quản Lý Đăng Ký<span><?php //echo $qt->TongCH(); ?></span></a></li>
				</ul>
			</li>
			<li id="10" class="feedback">
				<a href="#one">Góp ý</a>
				<ul class="sub-menu">
                    <li><a onclick="luu(10)" href="main.php?p=gy_xem"><em>01</em>Quản Lý Góp Ý<span><?php //echo $qt->TongCH(); ?></span></a></li>
				</ul>
			</li>
			<li id="9" class="sign">

				<a href="#four">Tài Khoản</a>

				<ul class="sub-menu">
					<li><a onclick="luu(9)" href="thoat.php"><em>01</em>Log Out</a></li>
					<li><a onclick="luu(9)" href="main.php?p=tk_doi"><em>02</em>Đổi Mật Khẩu</a></li>
					<?php if ($_SESSION['kt_login_level'] >= 3) { ?>
					<li><a  onclick="luu(9)" href="main.php?p=tk_xem"><em>03</em>Quản Lý User<span><?php //echo $qt->TongTK(); ?></span></a></li>
                    <li><a onclick="luu(9)" href="main.php?p=tk_them"><em>04</em>Thêm User</a></li>
                    <?php } ?>
				</ul>

			</li>
			<!--<li id="11" class="files">
				<a href="#one">Setting</a>
				<ul class="sub-menu">
                    <li><a  onclick="luu(11)" href="main.php?p=option_xem"><em>01</em>Setting<span>1</span></a></li>
				</ul>
			</li>-->

		</ul>

	</div>

