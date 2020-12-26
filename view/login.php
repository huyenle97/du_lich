<?php 
	require "view/layout/head-login.php";
?>
<!-- Home -->

<?php 
	if(isset($_POST['email'])){
		$Email = $_POST['email'];
		$matkhau = $_POST['password'];
		$khachhang = khach_hang_select_by_email($Email);
		if( $khachhang != null){
			if($khachhang['Mat_khau'] == $matkhau)
			{
				$_SESSION['khach_hang'] = [
					'id' => $khachhang['Ma_KH'],
					'name' => $khachhang['Ten_KH'],
					'email' => $khachhang['Email'],
					'sdt' => $khachhang['Sdt']
				];
				
			}else{
				$mes = 'Mật khẩu không chính xác';
			}
			echo'<script>
					window.location.assign("index.php")
				</script>';
			
		}else{
			$mes = 'Tài khoản không tồn tại';
		}
	}
?>
<div class="home">
		<!-- Image by https://unsplash.com/@peecho -->
		
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="view/images/bgr.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row ">
				<div class="col-md-12">
					<div class="home_content">
						<div class="home_content_inner">
							<div class="home_title">Đăng nhập</div>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="login-form">
						<div class="main-div">
							<form id="Login" method='post' >
								<label><strong> TRANG ĐĂNG NHẬP </strong></label>
								<div class="form-group mt-3">
									<input name ="email"type="email" class="form-control" id="inputUsername" placeholder="Tên tài khoản">
								</div>
								<div class="form-group">
									<input name="password" type="password" class="form-control" id="inputPassword" placeholder="Mật khẩu">
								</div>
								<button type="submit" class="btn btn-primary col-md-6 mt-3">Đăng nhập</button>
								</form>
								<div class="forgot mt-5 text-center">
									<a href="index.php?page=register">Đăng ký tài khoản</a>
								</div>
							</div>
					</div>
				</div>									
			</div>			
		</div>
	</div>

	<!-- Find Form -->

<?php 
	require "view/layout/footer-login.php";
?>