<?php require('lib/top.php'); ?>




    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb3.jpg);">
        <div class="bradcumbContent">
            <p>관리자 로그인</p>
            <h2>Admin Login</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->






    <!-- ##### Login Area Start ##### -->
    <section class="login-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="login-content">
                        <h3>관리자 로그인</h3>
                        <!-- Login Form -->
                        <div class="login-form">
                            <form action="_login.php" method="post">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">ID</label>
                                    <input type="id" name='id' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Admin ID" maxlength="20">
                                    <small id="emailHelp" class="form-text text-muted"><i class="fa fa-lock mr-2"></i>관리자 전용 코너입니다. 회원가입은 불가합니다.</small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" name='password' class="form-control" id="exampleInputPassword1" placeholder="Password" maxlength="20">
                                </div>
                                <button type="submit" class="btn oneMusic-btn mt-30">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Login Area End ##### -->













<?php require('lib/bottom.php'); ?>
