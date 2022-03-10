<?php require('lib/top.php'); ?>


















    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <p>개발자 연락처</p>
            <h2>Contact</h2>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->


















    <!-- ##### Contact Info Area Start ##### -->
    <section class="contact-area section-padding-100-0">
        <div class="container">
            <div class="row">

                <div class="col-12 col-lg-3">
                    <div class="contact-content mb-100">
                        <!-- Title -->
                        <div class="contact-title mb-50">
                            <h5>Contact Info</h5>
                        </div>

                        <!-- Single Contact Info -->
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="icon mr-30">
                                <span class="icon-placeholder"></span>
                            </div>
                            <p>2-chōme-24 Shibuya, Shibuya City, Tōkyō-to</p>
                        </div>

                        <!-- Single Contact Info -->
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="icon mr-30">
                                <span class="icon-smartphone"></span>
                            </div>
                            <p><a href="tel:+82-10-4441-0015">+82 10-4441-0015</a><br>Kakao : ubii1<br>Line : ubii2</p>
                        </div>

                        <!-- Single Contact Info -->
                        <div class="single-contact-info d-flex align-items-center">
                            <div class="icon mr-30">
                                <span class="icon-mail"></span>
                            </div>
                            <p><a href="mailto:ubi@kakao.com">ubi@kakao.com</p>
                        </div>

                        <!-- Contact Social Info -->
                        <!-- 아이콘 참조 : https://fontawesome.com/v4.7.0/icons/ -->
                        <div class="contact-social-info mt-50">
                            <a href="https://www.facebook.com/yangdonghwa" target="_blank" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <!-- <a href="https://instagram.com/ydhvocal" target="_blank" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a> -->
                            <a href="https://www.youtube.com/channel/UCt76J5CYnXL-uoJmQPG2Azw?view_as=subscriber" target="_blank" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                            <!-- <a href="https://cafe.naver.com/yysam" target="_blank" data-toggle="tooltip" data-placement="top" title="Naver Cafe"><i class="fa fa-leaf" aria-hidden="true"></i></a> -->
                            <a href="https://github.com/Azumait/music" target="_blank" data-toggle="tooltip" data-placement="top" title="Github"><i class="fa fa-github" aria-hidden="true"></i></a>
                            <!-- <a href="https://www.000webhost.com/members/website/list" target="_blank" data-toggle="tooltip" data-placement="top" title="PHP Database"><i class="fa fa-database" aria-hidden="true"></i></a> -->
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-9">
                    <!-- ##### Google Maps ##### -->
                    <div class="map-area mb-100">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15455.129734186488!2d139.7003119696544!3d35.6640205772473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b563b00109f%3A0x337328def1e2ab26!2z7Iuc67aA7JW87Jet!5e0!3m2!1sko!2sjp!4v1567142133986!5m2!1sko!2sjp" allowfullscreen></iframe>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Contact Info Area End ##### -->












    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100 bg-img bg-overlay bg-fixed has-bg-img" style="background-image: url(img/bg-img/bg-2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading white">
                        <p>개발자에게 편지쓰기</p>
                        <h2>Get In Touch</h2>
                    </div>
                </div>
            </div>

            <?php
            require('lib/letter.php');
            ?>






<?php require('lib/bottom.php'); ?>
