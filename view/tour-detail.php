<?php 
	include "view/layout/head-tour-detail.php";
	require "dao/dat_tour.php";
?>

<div class="">
	<!-- Image by https://unsplash.com/@peecho -->
	
	<?php
		$banner = banner_select_loaitour_1();
		foreach ($banner as $value) {
			extract($value);
			echo "	
					<div class='' style='height:300px'>
						<img style='width:100%;height:100%' src='$Hinh_anh'>
						<div class='tour_content'>
							<h3>Chi tiết tour</h3>
						</div>
					</div>
			";}
	?>

</div>
<!--chitiet-->
<section class="canhcam-shop-details-1">
	<article class="product-details">
		<div class="container">
			<?php
				$matour = $_GET['matour'];
				$chitiettour = tour_select_by_id($matour);
				extract($chitiettour);
				echo " 	<div class='row d-flex mt-3'>
							<div class='col-md-6 order-md-2 mb-4 infomation'>
								<h1>".$Ten_tour."</h1>
								<hr>
								<div class='table-responsive'>
									<table class='table'>
										<tbody>
											<tr>
												<td>Giá:</td>
												<td class='price'>$Gia</td>
											</tr>
											<tr>
												<td>Số ngày:</td>
												<td>$Thoi_gian</td>
											</tr>
											<tr>
												<td>Mô tả chuyến đi:</td>
												<td>$Mo_ta</td>
											</tr>
											<tr>
												<td>Công dụng chính</td>
												<td>Giúp da tươi mát và tinh khiết, phục hồi độ sáng và khỏe mạnh cho làn da từ bên trong</td>
											</tr>
											<tr>
												<td>Sự kiện đang diễn ra tại Tour:</td>
												<td>$Mo_ta</td>
											</tr>
										</tbody>
									</table>
									<button type='submit' class='btn btn-warning' data-toggle='modal' ".(isset($_SESSION['khach_hang']) ? 'data-target="#myModal"': 'data-target="#notif"')."  >Đặt Tour</button>
								</div>
							</div>
							<div class='col-md-6 order-md-1 slider-img'>
								<div><img class='hinhproduct' src='$Hinh_anh' /></div>
							</div>
						</div>
						<div class='row tab-product'>
							<div class='col-12'>
								<nav>
									<div class='nav nav-tabs' id='nav-tab' role='tablist'><a class='nav-item nav-link active' id='tab1-tab' data-toggle='tab' href='#tab1' role='tab' aria-controls='tab1' aria-selected='true'>MÔ TẢ CHUYẾN ĐI</a><a class='nav-item nav-link' id='tab2-tab' data-toggle='tab' href='#tab2' role='tab' aria-controls='tab2' aria-selected='false'>THỜI GIAN ĐI</a><a class='nav-item nav-link' id='tab4-tab' data-toggle='tab' href='#tab4' role='tab' aria-controls='tab2' aria-selected='false'>CHI TIẾT TOUR</a></div>
								</nav>
								<div class='tab-content' id='nav-tabContent'>
									<div class='tab-pane fade show active' id='tab1' role='tabpanel' aria-labelledby='tab1-tab'>
										<div class='text'>
											<h6>$Mo_ta</h6>
										</div>
									</div>
									<div class='tab-pane fade' id='tab2' role='tabpanel' aria-labelledby='tab2-tab'> 
										<div class='text'>
											<h3>$Ngay_khoihanh</h3>
											
										</div>
									</div>
									
									<div class='tab-pane fade' id='tab4' role='tabpanel' aria-labelledby='tab4-tab'> 
										<div class='text'>
											<h4>$Chi_tiet</h4>
											
										</div>
									</div>
									
								</div>
							</div>
								<div class='modal fade' id='myModal'>
									<div class='modal-dialog modal-lg flex'>
									<form class='form-horizontal' action='#' method='post'>
										<div class='modal-content'>
											<div class='modal-header'>
												<h4 class='modal-title'><strong>THÔNG TIN ĐẶT TOUR</strong></h4>
												<button type='button' class='close' data-dismiss='modal'>&times;</button>
											</div>
											<div class='modal-body'>
												<input type='hidden' value='".$Ma_tour."' name='ma_tour'>
												<input type='hidden' value='' name='sum' id='sum_tour'>
												<div class='col-lg-12 mb-3' style='display:flex'>
													<div class='col-lg-4 mb-3 mt-3'>
														<label>Tên Tour</label>
													</div>
													<div class='col-lg-8 mb-3'>
														<div class='group material-input mt-3'>
															<span>".$Ten_tour."</span>
															<span class='highlight'></span>
															<span class='bar'></span>
														</div>
													</div>
												</div>
												<div class='col-lg-12 mb-3' style='display:flex'>
													<div class='col-lg-4 mb-3 mt-3'>
														<label>Tên khách hàng</label>
													</div>
													<div class='col-lg-8 mb-3'>
														<div class='group material-input mt-3'>
															<span>".(isset($_SESSION['khach_hang']) ? $_SESSION['khach_hang']['name'] :  '')."</span>
															<span class='highlight'></span>
															<span class='bar'></span>
														</div>
													</div>
												</div>
												<div class='col-lg-12 mb-3' style='display:flex'>
													<div class='col-lg-4 mb-3 mt-3'>
														<label>Số điện thoại</label>
													</div>
													<div class='col-lg-8 mb-3'>
														<div class='group material-input mt-3'>
															<span>".(isset($_SESSION['khach_hang']) ? $_SESSION['khach_hang']['sdt'] :  '')."</span>
															<span class='highlight'></span>
															<span class='bar'></span>
														</div>
													</div>
												</div>
												<div class='col-lg-12 mb-3' style='display:flex'>
													<div class='col-lg-4 mb-3 mt-3'>
														<label>Giá Tour</label>
													</div>
													<div class='col-lg-8 mb-3'>
														<div class='group material-input mt-3'>
															<span>".$Gia."</span>
														</div>
													</div>
												</div>
												<div class='col-lg-12 mb-3' style='display:flex'>
													<div class='col-lg-4 mb-3 mt-3'>
														<label>Số lượng</label>
													</div>
													<div class='col-lg-8 mb-3'>
														<div class='group material-input'>
															<input type='number' value ='' name='count' id='count' required >
															<span class='highlight'></span>
															<span class='bar'></span>
														</div>
													</div>
												</div>
												<div class='col-lg-12 mb-3' style='display:flex'>
													<div class='col-lg-4 mb-3 mt-3'>
														<label>Tổng tiền</label>
													</div>
													<div class='col-lg-8 mb-3'>
														<div class='group material-input'>
															<input type='text' value ='' id='sum' disabled>
															<span class='highlight'></span>
														</div>
													</div>
												</div>
												<div class='col-lg-12 mb-3' style='display:flex'>
													<div class='col-lg-4 mb-3 mt-3'>
														<label>Hình thức thanh toán</label>
													</div>
													<div class='col-lg-8 mb-3'>
														<div class='group material-input form-group'>
															<select class='form-control' name='payment'>
																<option value='tien_mat'>Tiền mặt</option>
																<option value='the'>Thẻ ngân hàng</option>
																<option value='airpay'>Thanh toán qua AirPay</option>
																<option value='momo'>Thanh toán qua Momo</option>
														</select>
														</div>
													</div>
												</div>
											</div>
											<div class='modal-footer'>
												<button type='button' class='btn btn-success' data-dismiss='modal'>Hủy</button>
												<button type='submit' name='action' value='book-tour' class='btn btn-warning'>Đặt Tour</button>
											</div>
										</div>
									</form>
									</div>
								</div>
							<div class='modal fade' id='notif'>
								<div class='modal-dialog modal-lg flex'>
									<div class='modal-content'>
										<div class='modal-header'>
											<h5 class='modal-title text_center'><strong>Quý khách vui lòng đăng nhập để được đặt Tour ạ!</strong></h5>
										</div>
									</div>
								</div>
							</div>
					</div>";
			?>
		</div>
	</article>
</section>
<section>
	<div class="container">	
		<div class="row">
			<div class="col">
				<div class="section_title text-center">
					<h2>Tour khác</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="special_content">
		<div class="special_slider_container">
			<div class="owl-carousel owl-theme special_slider">
					<?php
						$tour = tour_select_all();
						foreach ($tour as $value) {
							extract($value);
							echo "	<div class='owl-item'>
										<a href='index.php?page=tour-detail&matour=".$Ma_tour."'>
											<div class='special_item'>
												<div class='special_item_background'><img src='$Hinh_anh' ></div>
												<div class='special_item_content text-center'>
													<div class='special_category'>$Ten_tour</div>
												</div>
											</div>
										</a>
									</div>
							";}
					?>

			</div>

			<div class="special_slider_nav d-flex flex-column align-items-center justify-content-center">
				<img src="view/images/special_slider.png" alt="">
			</div>
		</div>
	</div>
</section>

<script>
	var el = document.getElementById("count");
		el.addEventListener("keyup", function() {
			var count = document.getElementById("count").value;
		
		<?php
				$matour = $_GET['matour'];
				$chitiettour = tour_select_by_id($matour);
				extract($chitiettour);
				echo 'var price = "'.$Gia. '";';
		?>
		price = price.replace(/\./g,'');
		sum = count*price;
		document.getElementById("sum").value = (sum.toString()).replace(/\B(?=(\d{3})+(?!\d))/g, ".");
		document.getElementById("sum_tour").value = (sum.toString()).replace(/\B(?=(\d{3})+(?!\d))/g, ".");
		});
	
</script>
<?php
	require "view/layout/footer-index.php";
?>

<?php 
	$temp = false;
    if(isset($_POST['action']) && $_POST['action'] == 'book-tour'){
        $matour = $_POST['ma_tour'];
		$makh = $_SESSION['khach_hang']['id'];
        $so_luong = $_POST['count'];
		$tong_tien = $_POST['sum'];
		$thanhtoan = $_POST['payment'];
		book_tour_insert($makh,$matour,$so_luong,$tong_tien,$thanhtoan);
		echo '<script>	
				$.notify("Quý khách đã đặt Tour thành công!","success");
			  </script>';
	}
	
?>