<?php 
    require_once 'pdo.php';
	function book_tour_insert($makh,$matour,$so_luong,$tong_tien,$thanhtoan){
		$sql = "INSERT INTO dat_tour(Ma_KH,Ma_tour,So_luong_ve,Tong_tien,Thanh_toan) VALUES(?,?,?,?,?)";
		pdo_execute($sql,$makh,$matour,$so_luong,$tong_tien,$thanhtoan);
	}
	
	function loai_tour_select(){
		$sql = "SELECT * FROM dat_tour inner join tour on dat_tour.Ma_tour=tour.Ma_tour 
									inner join khach_hang on dat_tour.Ma_KH=khach_hang.Ma_KH";
        return pdo_query($sql);
	}

	function dat_tour_delete($madattour){
		$sql = "UPDATE dat_tour SET Trang_thai = 'Đã hủy'   WHERE 	Ma_dat_tour =?";
        pdo_execute($sql, $madattour);
	}
	
	function dat_tour_update($madattour){
        $sql = "UPDATE dat_tour SET Trang_thai = 'Đã xác nhận'   WHERE 	Ma_dat_tour =?";
        pdo_execute($sql, $madattour);
    }
	
?>