<?php 
    /*
    Template Name: Login
    */
?>

<?php get_header(); ?>

    <div class="body-login-container">
        <div>
            <div>
                <h1 style="text-align: center;">Đăng nhập</h1>
                <hr style="width: auto; border: none;">
            </div>
            <form action="">
                <div class="ip-gr">
                    <label for="username">Tên đăng nhập:</label>
                    <input type="text" placeholder="Tên đăng nhập">
                </div>
                <div class="ip-gr">
                    <label for="username">Mật khẩu:</label>
                    <input type="password" placeholder="Mật khẩu">
                </div>
                <button>Dang nhap >></button>
            </form>
        </div>

    </div>

<?php get_footer(); ?>