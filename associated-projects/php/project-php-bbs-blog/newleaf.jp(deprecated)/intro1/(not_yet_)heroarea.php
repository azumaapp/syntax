<!-- Hero Area (수강생 Area) styles.css와 jquery.fancybox.pack.js참조 -->

<!-- ##### Youtube Link Area Start ##### -->
<section class="latest-albums-area section-padding-100">
    <div class="container">
        <div class="row">
          <div class="col-12">
                <div class="section-heading style-2">
                    <p>Official Video</p>
                    <h2>&ldquo;Music Page&rdquo; </h2>
                </div>
            </div>
        </div>

<!-- ★ 여기서부터 -->
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="ablums-text text-center mb-70">
                  <?php
                    if(isset($_SESSION['nickname'])){
                  ?>
                  <!-- 로그인 한 경우 -->
                  <p>Pledge<br>
                    This day has been given to me fresh and clear. <br>
                    I promise myself that I shall use this day to the fullest and I realize that <br>
                    it will never come back again. <br>
                    I am the only person who has the power to decide what I will be. <br>
                    I make myself what I am.</p>
                  <?php
                      } else {
                  ?>
                  <!-- 로그인 안한 경우 -->
                  <p>This is the portfolio site of the developer whose penname is Azuma.<br> The Index page consists of music you listen to when I study. <br> Be my guest, Thanks.</p>
                  <?php
                      }
                  ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="albums-slideshow owl-carousel">

                    <div class="single-album">
                        <img src="img/bg-img/a1.jpg" alt="">
                        <div class="album-info">
                            <a href="https://www.youtube.com/watch?v=Us-TVg40ExM&list=RDEMPu5npKYjBQbYJlm-cabI9g&start_radio=1" target="_blank">
                                <h5>Playing For Changes</h5>
                            </a>
                            <p>Stand by Me</p>
                        </div>
                    </div>


                    <div class="single-album">
                        <img src="img/bg-img/a2.jpg" alt="">
                        <div class="album-info">
                            <a href="https://www.youtube.com/watch?v=giouzUH5rOc&list=RDgiouzUH5rOc&start_radio=1&t=10" target="_blank">
                                <h5>Play the Music</h5>
                            </a>
                            <p>Caffeine Music</p>
                        </div>
                    </div>


                    <div class="single-album">
                        <img src="img/bg-img/a3.jpg" alt="">
                        <div class="album-info">
                            <a href="https://www.youtube.com/watch?v=RtBbinpK5XI&list=RDRtBbinpK5XI&start_radio=1&t=3" target="_blank">
                                <h5>RHCP</h5>
                            </a>
                            <p>The Adventures of Rain Dance Maggie</p>
                        </div>
                    </div>


                    <div class="single-album">
                        <img src="img/bg-img/a4.jpg" alt="">
                        <div class="album-info">
                            <a href="https://www.youtube.com/watch?v=VMnjF1O4eH0&list=RDVMnjF1O4eH0&start_radio=1&t=0" target="_blank">
                                <h5>Queen</h5>
                            </a>
                            <p>Fat Bottom Girls</p>
                        </div>
                    </div>


                    <div class="single-album">
                        <img src="img/bg-img/a5.jpg" alt="">
                        <div class="album-info">
                            <a href="https://www.youtube.com/watch?v=m2uTFF_3MaA" target="_blank">
                                <h5>Beatles</h5>
                            </a>
                            <p>Yellow Submarine</p>
                        </div>
                    </div>

                    <div class="single-album">
                        <img src="img/bg-img/a6.jpg" alt="">
                        <div class="album-info">
                            <a href="https://www.youtube.com/watch?v=QomBi4vd0ug&list=RDQomBi4vd0ug&start_radio=1&t=8" target="_blank">
                                <h5>Shane Filan</h5>
                            </a>
                            <p>Make You Feel My Love</p>
                        </div>
                    </div>


                    <div class="single-album">
                        <img src="img/bg-img/a7.jpg" alt="">
                        <div class="album-info">
                            <a href="https://www.youtube.com/watch?v=oYa8NmMtjfw&list=RDoYa8NmMtjfw&start_radio=1&t=3" target="_blank">
                                <h5>Branford Marsalis Quartet</h5>
                            </a>
                            <p>Mo' Better Blues</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Youtube Link Area End ##### -->
