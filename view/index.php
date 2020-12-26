<?php 
	require "view/layout/head-index.php";
?>
	<!-- Home -->
		<div class="home">
			<div class="home_background" style="background-image:url(view/images/home.jpg)"></div>
			<div class="home_content">
				<div class="home_content_inner">
					<div class="home_text_large">International travel</div>
				</div>
			</div>
		</div>
		<!-- Top Destinations -->
		<div class="top">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title text-center">
							<h2>DU LỊCH NƯỚC NGOÀI</h2>
							<div>Tour Đón Giáng Sinh Và Năm Mới 2019</div>
						</div>
					</div>
				</div>
				<div class="row top_content">
					<?php
						$tour = tour_select_loaitour_1();
						foreach ($tour as $value) {
							extract($value);
							echo "	<div class='col-lg-4 col-md-6 top_col'>
										<div class='top_item'>
											<a href='index.php?page=tour-detail&matour=$Ma_tour'>
												<div class='top_item_image'><img src='$Hinh_anh'></div>
												<div class='top_item_content'>
													<div class='top_item_price'>$Gia</div>
													<div class='top_item_text'>$Ten_tour</div>
													
												</div>
											</a>
										</div>
									</div>
							";}
					?>
				</div>
			</div>
		</div>
		<!-- Top Destinations -->
		<div class="top">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title text-center">
							<h2>DU LỊCH TRONG NƯỚC</h2>
							<div>Du Lịch Lễ Hội Mùa Xuân Và Năm Mới 2020</div>
						</div>
					</div>
				</div>
				<div class="row top_content">
					<?php
						$tour = tour_select_loaitour_2();
						foreach ($tour as $value) {
							extract($value);
							echo "	<div class='col-lg-4 col-md-6 top_col'>
										<div class='top_item'>
											<a href='index.php?page=tour-detail&matour=".$Ma_tour."'>
												<div class='top_item_image'><img src='$Hinh_anh'></div>
												<div class='top_item_content'>
													<div class='top_item_price'>$Gia</div>
													<div class='top_item_text'>$Ten_tour</div>
													
												</div>
											</a>
										</div>
									</div>
							";}
					?>
				</div>
			</div>
		</div>

		<!-- Last -->

		<div class="last">
			<!-- Image by https://unsplash.com/@thanni -->
			<div class="last_background parallax-window" data-parallax="scroll" data-image-src="view/images/last.jpg" data-speed="0.8"></div>

			<div class="container">
				<div class="row">
					<div class="last_logo"><img src="view/images/last_logo.png" alt=""></div>
					<?php
						$news = news_select_all();
						foreach ($news as $value) {
							extract($value);
							echo "	<div class='col-lg-6 last_col'>
										<div class='last_item'>
											<div class='last_item_content'>
												<div class='last_subtitle'>Viet-Lao</div>
												<div class='last_percent'>50%</div>
												<div class='last_title'>$Ten_news</div>
												<div class='last_text'>$Mo_ta</div>
												<div class='button last_button'><a href='index.php?page=news-detail&manews=".$Ma_news."'>Xem chi tiết</a></div>
											</div>
										</div>
									</div>
							";}
					?>
					


				</div>
			</div>
		</div>

		<!-- Video -->

		<div class="video_section d-flex flex-column align-items-center justify-content-center">
			<!-- Image by https://unsplash.com/@peecho -->
			<div class="video_background parallax-window" data-parallax="scroll" data-image-src="view/images/video.jpg"  data-speed="0.8"></div>
			<div class="video_content">
				<div class="video_title">Một ngày trên đảo</div>
				<div class="video_subtitle">Chuyến đi do Pouy Tour tổ chức</div>
				<div class="video_play">
					<a class="video" href="https://www.youtube.com/watch?v=1La4QzGeaaQ">
						<svg version="1.1" id="Layer_1" class="play_button" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
						 x="0px" y="0px" width="140px" height="140px" viewBox="0 0 140 140" enable-background="new 0 0 140 140" xml:space="preserve">
							<g id="Layer_2">
								<circle class="play_circle" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-miterlimit="10" cx="70.333" cy="69.58"
								 r="68.542" />
								<polygon class="play_triangle" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-miterlimit="10" points="61.583,56 61.583,84.417 84.75,70 	" />
							</g>
						</svg>
					</a>
				</div>
			</div>
		</div>

		<!-- Popular -->

		<div class="popular">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title text-center">
							<h2>Thư viện</h2>
							<div>Khoảnh khắc đẹp nhất</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="popular_content d-flex flex-md-row flex-column flex-wrap align-items-md-center align-items-start justify-content-md-between justify-content-start">
							<?php
								$gallery = gallery_select_all();
								foreach ($gallery as $value) {
									extract($value);
									echo 	"	<div class='popular_item'>
													
													<img src='$Hinh_anh'>
													<div class='popular_item_content'>
														<div class='popular_item_price'></div>
														<div class='popular_item_title'>$Ten_gallery</div>
													</div>
													
												</div>
											";}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Special -->

		<div class="special">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title text-center">
							<h2>Ưu đãi đặc biệt</h2>
							<div>Cùng nhau nhìn lại những nơi này</div>
						</div>
					</div>
				</div>
			</div>
			<div class="special_content">
				<div class="special_slider_container">
					<div class="owl-carousel owl-theme special_slider">
						<!-- Special Offers Item -->
						<div class="owl-item">
							<div class="special_item">
								<div class="special_item_background"><img src="view/images/special_1.jpg" ></div>
								<div class="special_item_content text-center">
									<div class="special_category">Ghé thăm</div>
									<div class="special_title"><a href="">Đà Nẵng</a></div>
								</div>
							</div>
						</div>

						<!-- Special Offers Item -->
						<div class="owl-item">
							<div class="special_item d-flex flex-column align-items-center justify-content-center">
								<div class="special_item_background"><img src="view/images/special_2.jpg"></div>
								<div class="special_item_content text-center">
									<div class="special_category">Ghé thăm</div>
									<div class="special_title"><a href="">Sapa</a></div>
								</div>
							</div>
						</div>

						<!-- Special Offers Item -->
						<div class="owl-item">
							<div class="special_item d-flex flex-column align-items-center justify-content-center">
								<div class="special_item_background"><img src="view/images/special_3.jpg" ></div>
								<div class="special_item_content text-center">
									<div class="special_category">Ghé thăm</div>
									<div class="special_title"><a href="">Tam Đảo</a></div>
								</div>
							</div>
						</div>

						<!-- Special Offers Item -->
						<div class="owl-item">
							<div class="special_item d-flex flex-column align-items-center justify-content-center">
								<div class="special_item_background"><img src="view/images/special_4.jpg"></div>
								<div class="special_item_content text-center">
									<div class="special_category">Ghé thăm</div>
									<div class="special_title"><a href="">Bắc Giang</a></div>
								</div>
							</div>
						</div>

						<!-- Special Offers Item -->
						<div class="owl-item">
							<div class="special_item d-flex flex-column align-items-center justify-content-center">
								<div class="special_item_background"><img src="view/images/special_5.jpg"></div>
								<div class="special_item_content text-center">
									<div class="special_category">Ghé thăm</div>
									<div class="special_title"><a href="">Phú Quốc</a></div>
								</div>
							</div>
						</div>

					</div>

					<div class="special_slider_nav d-flex flex-column align-items-center justify-content-center">
						<img src="view/images/special_slider.png" alt="">
					</div>
				</div>
			</div>
		</div>

		<!-- Newsletter -->

		<?php
			require "view/component/sub.php";
		?>
<?php
	require "view/layout/footer-index.php";
?>