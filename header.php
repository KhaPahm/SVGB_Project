<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boot strap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Font Awsome -->
    <script src="https://kit.fontawesome.com/b47a1c1ea4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo THEME_URL; ?>/style.css">
    <title>SVGB</title>
	<!-- JS notificaction -->
	<script> 
		function notifi() {
			alert("Chức năng này đang được hoàn thiện! Anh/chị vui lòng quay lại vào khi khác!")
		}
	</script>
</head>
<body <?php body_class(); ?> >
    <nav class="navbar navbar-expand-md py-4 navbar-dark shadow-sm " id="nav-header">
        <div class="container-fluid">
          <a class="navbar-brand" href="https://svgb.geg.com.vn/">
            <div class="logo-container" >
              <img src="<?php echo THEME_URL; ?>/img/logo.png" alt="" id="logo">
            </div>
        </a>
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#intro">Giới thiệu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#activities">Hoạt động</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#parner">Thành viên</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" onclick="notifi()">Liên hệ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://svgb.geg.com.vn/?page_id=92">Đăng nhập</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    