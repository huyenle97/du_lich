<?php 
    $temp = false;
    if(isset($_POST['action']) && $_POST['action'] == 'add-tour'){
        $ten = $_POST['name'];
        $matour = $_POST['matour'];
        $ngaykhoihanh = $_POST['date'];
        $thoigian= $_POST['thoigian'];
        $gia = $_POST['price'];
        $maloaitour = $_POST['loaitour'];
        $tongtien = $_POST['tongtien'];

        //Kiểm tra sản phẩm có tồn tại hay chưa
        if(tour_select_by_name($ten) == null){
            tour_insert($ten,$mota,$chitiet,$hinhanh,$ngaykhoihanh,$thoigian,$gia,$maloaitour);
            move_uploaded_file($_FILES['image']['tmp_name'] , $hinhanh );
        }else {
            $MESSAGE = "Sản phẩm đã tồn tại";
        }
    }

    if(isset($_GET['action']) && $_GET['action'] == 'delete'){
        dat_tour_delete($_GET['id']);
        header('Localtion: admin.php?page=dat_tour');
    }

    if(isset($_GET['action']) && $_GET['action'] == 'edit'){
        // $temp = true;
        dat_tour_update($_GET['id']);
        header('Localtion: admin.php?page=dat_tour');

    }
    if(isset($_POST['action']) && $_POST['action'] == 'edit'){
        $matour = $_POST['id'];
        $ten = $_POST['name'];
        $mota = $_POST['mota'];
        $chitiet = $_POST['chitiet'];
        $ngaykhoihanh = $_POST['date'];
        $thoigian = $_POST['thoigian'];
        $gia = $_POST['price'];
        $maloaitour = $_POST['loaitour'];
        if($_FILES['image']['error'] == 4){
            $hinhanh = tour_select_by_id($matour)['Images'];
        }else{
            $hinhanh = 'view/images/tour/'.$_FILES['image']['name'];
        }
        tour_update($matour,$ten,$mota,$chitiet,$hinhanh,$ngaykhoihanh,$thoigian,$gia,$maloaitour);
        $temp = false;
        header('Localtion: admin.php?page=tour');
    }

?>        

        <div class="page">
            <?php 
                require "admin/layout/header.php";
            ?> 

            <!-- Begin Page Content -->
            <div class="page-content d-flex align-items-stretch">
                <div class="default-sidebar">
                    <?php 
                        require "admin/layout/navbar.php";
                    ?> 
                </div>
                <!-- End Left Sidebar -->

                <div class="content-inner">
                    <div class="container-fluid">
                        <!-- Begin Page Header-->
                        <div class="row">
                            <div class="page-header">
	                            <div class="d-flex align-items-center">
	                                <h2 class="page-header-title">Danh sách</h2>
	                                <div>
			                            <ul class="breadcrumb">
			                                <li class="breadcrumb-item"><a href="db-default.html"><i class="ti ti-home"></i></a></li>
			                                <li class="breadcrumb-item active">Tour</li>
			                            </ul>
	                                </div>
	                            </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                        <div class="row flex-row">
                            <div class="col-12">
                                <!-- Form -->
                                <!-- End Form -->
                                <!-- Sorting -->
                                <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>Tour đã được đặt</h4>
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
                                            <table id="sorting-table" class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Mã đặt tour</th>
                                                        <th>Tên tour</th>
                                                        <th>Tên khách hàng</th>
                                                        <th>Số điện thoại</th>
                                                        <th>Ngày đi</th>
                                                        <th>Thời gian</th>
                                                        <th>Số lượng</th>
                                                        <th>Tổng tiền</th>
                                                        <th>Trạng thái</th>
                                                        <th>Chức năng</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                    $tour = loai_tour_select(); // goi phuong thuc lay danh sach
                                                    foreach ($tour as $item){
                                                        extract($item);
                                                        echo "<tr>";
                                                        echo "<td><span class='text-primary'>".$Ma_dat_tour ."</span></td>";
                                                        echo "<td>".$Ten_tour."</span></td>";
                                                        echo "<td>".$Ten_KH."</td>";
                                                        echo "<td>".$Sdt."</td>";
                                                        echo "<td>".$Ngay_khoihanh."</td>";
                                                        echo "<td>".$Thoi_gian."</td>";
                                                        echo "<td>".$So_luong_ve."</td>";
                                                        echo "<td>".$Tong_tien."</td>";
                                                        echo "<td>".$Trang_thai."</td>";
                                                        echo "<td class='td-actions'>
                                                              <a href='admin.php?page=dat_tour&id=$Ma_dat_tour &action=edit'>
                                                                <i class='la la-check-circle edit'></i></a>
                                                              <a href='admin.php?page=dat_tour&id=$Ma_dat_tour &action=delete'>
                                                                <i class='la la-close delete'></i></a></td>";
                                                        echo "</tr>";
                                                        }
                                                ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Sorting -->
                            </div>
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- End Container -->



                    <!-- Begin Page Footer-->
                    <?php 
                        require "layout/footer.php";
                    ?> 
                </div>
            </div>
            <!-- End Page Content -->
        </div>