<?php require('lib/top.php'); ?>












    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">
            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(img/bg-img/bg-1.jpg);"></div>
                <!-- Slide Content -->
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-slides-content text-center">
                              <?php
                                if(isset($_SESSION['nickname'])){
                              ?>
                              <!-- 로그인 한 경우 -->
                              <h6 data-animation="fadeInUp" data-delay="100ms">개발자 양동화</h6>
                              <h2 data-animation="fadeInUp" data-delay="300ms">관리자모드 <span>관리자모드</span></h2>
                              <?php
                                  } else {
                              ?>
                              <!-- 로그인 안한 경우 -->
                              <h6 data-animation="fadeInUp" data-delay="100ms">Dev Azuma</h6>
                              <h2 data-animation="fadeInUp" data-delay="300ms">Portfolio <span>Portfolio</span></h2>
                              <?php
                                  }
                              ?>
                                <a data-animation="fadeInUp" data-delay="500ms" href="#listen" class="btn oneMusic-btn mt-50">Listen <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Hero Slide -->
            <div class="single-hero-slide d-flex align-items-center justify-content-center">
                <!-- Slide Img -->
                <div class="slide-img bg-img" style="background-image: url(img/bg-img/bg-2.jpg);"></div>
                <!-- Slide Content -->
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="hero-slides-content text-center">
                              <?php
                                if(isset($_SESSION['nickname'])){
                              ?>
                              <!-- 로그인 한 경우 -->
                              <h6 data-animation="fadeInUp" data-delay="100ms">개발자 양동화</h6>
                              <h2 data-animation="fadeInUp" data-delay="300ms">관리자모드 <span>관리자모드</span></h2>
                              <?php
                                  } else {
                              ?>
                              <!-- 로그인 안한 경우 -->
                              <h6 data-animation="fadeInUp" data-delay="100ms">개발자 양동화</h6>
                              <h2 data-animation="fadeInUp" data-delay="300ms">포트폴리오 <span>포트폴리오</span></h2>
                              <?php
                                  }
                              ?>
                                <a data-animation="fadeInUp" data-delay="500ms" href="#listen" class="btn oneMusic-btn mt-50">Listen <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->















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















    <!-- ##### Featured Artist Area Start ##### -->
    <section class="featured-artist-area section-padding-100 bg-img bg-overlay bg-fixed" style="background-image: url(img/bg-img/bg-4.jpg);">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-12 col-md-5 col-lg-4">
                    <div class="featured-artist-thumb">
                        <img src="img/bg-img/fa.jpg" alt="">
                      </div>
                </div>
                <div class="col-12 col-md-7 col-lg-8">
                    <div class="featured-artist-content">
                        <!-- Section Heading -->
                        <div class="section-heading white text-left mb-30">
                            <p>Cover Story</p>
                            <h2>Radio Head</h2>
                        </div>
                        <p>Other famous songs by the group include High and Dry, Paranoid Android, No Surprises, and Lotus Flower. Radiohead should be the most popular band in the entire world. Seriously.</p>
                        <div class="song-play-area">
                            <div class="song-name">
                                <p>01. Creep</p>
                            </div>
                            <audio preload="auto" controls loop>
                                <source src="audio/creep.mp3">
                            </audio>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Featured Artist Area End ##### -->













    <!-- ##### Music Play Area Start ##### -->
    <section class="miscellaneous-area section-padding-100-0" id="listen">
        <div class="container">
            <div class="row">

              <!-- ***** Rock List ***** -->
              <div class="col-12 col-lg-4">
                  <div class="new-hits-area mb-100">
                      <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                          <p>락</p>
                          <h2>Rock</h2>
                      </div>

                      <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="100ms">
                          <div class="first-part d-flex align-items-center">
                              <div class="thumbnail">
                                  <img src="img/bg-img/wt1.jpg" alt="">
                              </div>
                              <div class="content-">
                                  <h6>Led Zeppelin</h6>
                                  <p>Immigrant Song</p>
                              </div>
                          </div>
                          <audio preload="auto" controls loop>
                              <source src="audio/immigrant.mp3">
                          </audio>
                      </div>

                      <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="150ms">
                          <div class="first-part d-flex align-items-center">
                              <div class="thumbnail">
                                  <img src="img/bg-img/wt2.jpg" alt="">
                              </div>
                              <div class="content-">
                                  <h6>RATM</h6>
                                  <p>People of the Sun</p>
                              </div>
                          </div>
                          <audio preload="auto" controls loop>
                              <source src="audio/people.mp3">
                          </audio>
                      </div>

                      <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="200ms">
                          <div class="first-part d-flex align-items-center">
                              <div class="thumbnail">
                                  <img src="img/bg-img/wt3.jpg" alt="">
                              </div>
                              <div class="content-">
                                  <h6>RATM</h6>
                                  <p>Bulls on Parade</p>
                              </div>
                          </div>
                          <audio preload="auto" controls loop>
                              <source src="audio/bulls.mp3">
                          </audio>
                      </div>

                      <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="250ms">
                          <div class="first-part d-flex align-items-center">
                              <div class="thumbnail">
                                  <img src="img/bg-img/wt4.jpg" alt="">
                              </div>
                              <div class="content-">
                                  <h6>ACDC</h6>
                                  <p>T.N.T</p>
                              </div>
                          </div>
                          <audio preload="auto" controls loop>
                              <source src="audio/tnt.mp3">
                          </audio>
                      </div>

                      <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="300ms">
                          <div class="first-part d-flex align-items-center">
                              <div class="thumbnail">
                                  <img src="img/bg-img/wt5.jpg" alt="">
                              </div>
                              <div class="content-">
                                  <h6>Muse</h6>
                                  <p>Feeling Good</p>
                              </div>
                          </div>
                          <audio preload="auto" controls loop>
                              <source src="audio/feel.mp3">
                          </audio>
                      </div>

                      <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="350ms">
                          <div class="first-part d-flex align-items-center">
                              <div class="thumbnail">
                                  <img src="img/bg-img/wt6.jpg" alt="">
                              </div>
                              <div class="content-">
                                  <h6>Queen</h6>
                                  <p>Fat Bottom Girls</p>
                              </div>
                          </div>
                          <audio preload="auto" controls loop>
                              <source src="audio/fat.mp3">
                          </audio>
                        </div>
                    </div>
                </div>

                <!-- ***** Jazz List ***** -->
                <div class="col-12 col-lg-4">
                    <div class="new-hits-area mb-100">
                        <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                            <p>재즈</p>
                            <h2>Jazz</h2>
                        </div>

                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="100ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/wt7.jpg" alt="">
                                </div>
                                <div class="content-">
                                    <h6>Jabber Loop</h6>
                                    <p>Mother Lake</p>
                                </div>
                            </div>
                            <audio preload="auto" controls loop>
                                <source src="audio/mother.mp3">
                            </audio>
                        </div>

                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="150ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/wt8.jpg" alt="">
                                </div>
                                <div class="content-">
                                    <h6>John Wasson</h6>
                                    <p>Caravan</p>
                                </div>
                            </div>
                            <audio preload="auto" controls loop>
                                <source src="audio/caravan.mp3">
                            </audio>
                        </div>

                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="200ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/wt9.jpg" alt="">
                                </div>
                                <div class="content-">
                                    <h6>Haley Reinhart</h6>
                                    <p>Creep</p>
                                </div>
                            </div>
                            <audio preload="auto" controls loop>
                                <source src="audio/creepjazz.mp3">
                            </audio>
                        </div>


                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="250ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/wt10.jpg" alt="">
                                </div>
                                <div class="content-">
                                    <h6>Carla Bruni</h6>
                                    <p>You Belong to Me</p>
                                </div>
                            </div>
                            <audio preload="auto" controls loop>
                                <source src="audio/belong.mp3">
                            </audio>
                        </div>


                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="300ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/wt11.jpg" alt="">
                                </div>
                                <div class="content-">
                                    <h6>Jamie Cullum</h6>
                                    <p>Mind Trick</p>
                                </div>
                            </div>
                            <audio preload="auto" controls loop>
                                <source src="audio/mind.mp3">
                            </audio>
                        </div>


                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="350ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                    <img src="img/bg-img/wt12.jpg" alt="">
                                </div>
                                <div class="content-">
                                    <h6>Branford Marsalis</h6>
                                    <p>Mo' Better Blues</p>
                                </div>
                            </div>
                            <audio preload="auto" controls loop>
                                <source src="audio/mobb.mp3">
                            </audio>
                        </div>
                    </div>
                </div>

                <!-- ***** Etc. List ***** -->
                <div class="col-12 col-lg-4">
                    <div class="new-hits-area mb-100">
                        <div class="section-heading text-left mb-50 wow fadeInUp" data-wow-delay="50ms">
                            <p>발라드</p>
                            <h2>Ballad</h2>
                        </div>

                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="100ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                  <img src="img/bg-img/pa1.jpg" alt="">
                                </div>
                                <div class="content-">
                                    <h6>Rachael Yamagata</h6>
                                    <p>Be Be Your Love</p>
                                </div>
                            </div>
                            <audio preload="auto" controls loop>
                                <source src="audio/bburluv.mp3">
                            </audio>
                        </div>

                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="150ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                  <img src="img/bg-img/pa2.jpg" alt="">
                                </div>
                                <div class="content-">
                                    <h6>Paul Kim</h6>
                                    <p>모든 날, 모든 순간</p>
                                </div>
                            </div>
                            <audio preload="auto" controls loop>
                                <source src="audio/allday.mp3">
                            </audio>
                        </div>

                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="300ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                  <img src="img/bg-img/pa5.jpg" alt="">
                                </div>
                                <div class="content-">
                                    <h6>Audrey Hepburn</h6>
                                    <p>Moon River</p>
                                </div>
                            </div>
                            <audio preload="auto" controls loop>
                                <source src="audio/moon.mp3">
                            </audio>
                        </div>

                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="250ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                  <img src="img/bg-img/pa3.jpg" alt="">
                                </div>
                                <div class="content-">
                                    <h6>Andre Gagnon</h6>
                                    <p>Love Thema</p>
                                </div>
                            </div>
                            <audio preload="auto" controls loop>
                                <source src="audio/love.mp3">
                            </audio>
                        </div>

                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="200ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                  <img src="img/bg-img/pa4.jpg" alt="">
                                </div>
                                <div class="content-">
                                    <h6>Shane Filan</h6>
                                    <p>Make You Feel My Love</p>
                                </div>
                            </div>
                            <audio preload="auto" controls loop>
                                <source src="audio/make.mp3">
                            </audio>
                        </div>

                        <div class="single-new-item d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="350ms">
                            <div class="first-part d-flex align-items-center">
                                <div class="thumbnail">
                                  <img src="img/bg-img/pa6.jpg" alt="">
                                </div>
                                <div class="content-">
                                    <h6>Anonymous</h6>
                                    <p>Imagine Digital Freedom</p>
                                </div>
                            </div>
                            <audio preload="auto" controls loop>
                                <source src="audio/digital.mp3">
                            </audio>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Miscellaneous Area End ##### -->
















    <!-- ##### Favorite Artist Intro Start ##### -->
    <div class="add-area mb-100">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="embed-responsive embed-responsive-16by9"> <!-- 유투브 비디오 반응형 -->
              <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/vsl3gBVO2k4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ##### Favorite Artist Intro End ##### -->












    <!-- ##### Long Song Area Start ##### -->
    <div class="one-music-songs-area mb-70">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <div class="single-song-area mb-30 d-flex flex-wrap align-items-end">
                        <div class="song-thumbnail">
                            <img src="img/bg-img/s1.jpg" alt="">
                        </div>
                        <div class="song-play-area">
                            <div class="song-name">
                                <p>1시간 집중력 높이는 음악, 공부할 때 듣는 음악, 차분해지고 집중력 높이는 노래</p>
                            </div>
                            <audio preload="auto" controls loop>
                                <source src="audio/long/classic.mp3">
                            </audio>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="single-song-area mb-30 d-flex flex-wrap align-items-end">
                        <div class="song-thumbnail">
                            <img src="img/bg-img/s2.jpg" alt="">
                        </div>
                        <div class="song-play-area">
                            <div class="song-name">
                                <p>일요일 아침에 방 청소하면서 틀면 난리나는 플레이리스트</p>
                            </div>
                            <audio preload="auto" controls loop>
                                <source src="audio/long/clean.mp3">
                            </audio>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="single-song-area mb-30 d-flex flex-wrap align-items-end">
                        <div class="song-thumbnail">
                            <img src="img/bg-img/s3.jpg" alt="">
                        </div>
                        <div class="song-play-area">
                            <div class="song-name">
                                <p>잔잔한 감성 팝송, 듣기좋은 노래 어쿠스틱 팝송모음 BEST 30</p>
                            </div>
                            <audio preload="auto" controls loop>
                                <source src="audio/long/fall.mp3">
                            </audio>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="single-song-area mb-30 d-flex flex-wrap align-items-end">
                        <div class="song-thumbnail">
                            <img src="img/bg-img/s4.jpg" alt="">
                        </div>
                        <div class="song-play-area">
                            <div class="song-name">
                                <p>기분좋은 재즈음악! 카페에서 듣기좋은 재즈 모음, 카페음악 모음</p>
                            </div>
                            <audio preload="auto" controls loop>
                                <source src="audio/long/jazzcafe1.mp3">
                            </audio>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="single-song-area mb-30 d-flex flex-wrap align-items-end">
                        <div class="song-thumbnail">
                            <img src="img/bg-img/s1.jpg" alt="">
                        </div>
                        <div class="song-play-area">
                            <div class="song-name">
                                <p>Jazz Music 카페에서 듣기 좋은 재즈 모음 , 겨울재즈, 카페음악 모음</p>
                            </div>
                            <audio preload="auto" controls loop>
                                <source src="audio/long/jazzcafe2.mp3">
                            </audio>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="single-song-area mb-30 d-flex flex-wrap align-items-end">
                        <div class="song-thumbnail">
                            <img src="img/bg-img/s2.jpg" alt="">
                        </div>
                        <div class="song-play-area">
                            <div class="song-name">
                                <p>따뜻하게 겨울에 듣는 재즈, 커피와 어울리는 음악, 독서음악, 카페에서 듣기좋은 재즈 음악 모음 Jazz Music</p>
                            </div>
                            <audio preload="auto" controls loop>
                                <source src="audio/long/jazzcoffee.mp3">
                            </audio>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="single-song-area mb-30 d-flex flex-wrap align-items-end">
                        <div class="song-thumbnail">
                            <img src="img/bg-img/s3.jpg" alt="">
                        </div>
                        <div class="song-play-area">
                            <div class="song-name">
                                <p>비트와 재즈의 만남, 세련된 재즈 힙합 모음, Lofi Jazz Hip Hop Beat</p>
                            </div>
                            <audio preload="auto" controls loop>
                                <source src="audio/long/jazzhip.mp3">
                            </audio>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="single-song-area mb-30 d-flex flex-wrap align-items-end">
                        <div class="song-thumbnail">
                            <img src="img/bg-img/s4.jpg" alt="">
                        </div>
                        <div class="song-play-area">
                            <div class="song-name">
                                <p>휴식을 위한 편안한 재즈 연주곡, 휴식에 적합한 진정 음악</p>
                            </div>
                            <audio preload="auto" controls loop>
                                <source src="audio/long/jazzrelax.mp3">
                            </audio>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="single-song-area mb-30 d-flex flex-wrap align-items-end">
                        <div class="song-thumbnail">
                            <img src="img/bg-img/s1.jpg" alt="">
                        </div>
                        <div class="song-play-area">
                            <div class="song-name">
                                <p>카페에서 즐기는 시원한 재즈! 여름에 듣기좋은 재즈음악 모음</p>
                            </div>
                            <audio preload="auto" controls loop>
                                <source src="audio/long/jazzsum.mp3">
                            </audio>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="single-song-area mb-30 d-flex flex-wrap align-items-end">
                        <div class="song-thumbnail">
                            <img src="img/bg-img/s2.jpg" alt="">
                        </div>
                        <div class="song-play-area">
                            <div class="song-name">
                                <p>1987 다시 돌아온 그대위해 - 유재하 추모앨범 (Timeless Music: 시간이 흘러도 좋은 추천 음악)</p>
                            </div>
                            <audio preload="auto" controls loop>
                                <source src="audio/long/jeha.mp3">
                            </audio>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="single-song-area mb-30 d-flex flex-wrap align-items-end">
                        <div class="song-thumbnail">
                            <img src="img/bg-img/s3.jpg" alt="">
                        </div>
                        <div class="song-play-area">
                            <div class="song-name">
                                <p>김민종 金旼鐘 5집 모음 - 인연(因緣) 등 (1999년)</p>
                            </div>
                            <audio preload="auto" controls loop>
                                <source src="audio/long/minjong.mp3">
                            </audio>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="single-song-area mb-30 d-flex flex-wrap align-items-end">
                        <div class="song-thumbnail">
                            <img src="img/bg-img/s4.jpg" alt="">
                        </div>
                        <div class="song-play-area">
                            <div class="song-name">
                                <p>집중과 편안함에 도움을 주는 10시간 피아노 연주</p>
                            </div>
                            <audio preload="auto" controls loop>
                                <source src="audio/long/piano.mp3">
                            </audio>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="single-song-area mb-30 d-flex flex-wrap align-items-end">
                        <div class="song-thumbnail">
                            <img src="img/bg-img/s1.jpg" alt="">
                        </div>
                        <div class="song-play-area">
                            <div class="song-name">
                                <p>빠른효과, 두뇌를 깨우는 전두엽 활성화 음악, 공부음악 이완 효과 알파파</p>
                            </div>
                            <audio preload="auto" controls loop>
                                <source src="audio/long/pre.mp3">
                            </audio>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="single-song-area mb-30 d-flex flex-wrap align-items-end">
                        <div class="song-thumbnail">
                            <img src="img/bg-img/s2.jpg" alt="">
                        </div>
                        <div class="song-play-area">
                            <div class="song-name">
                                <p>방안의 독서실 공부할 때 듣는 빗소리 델타파 집중력향상 3시간</p>
                            </div>
                            <audio preload="auto" controls loop>
                                <source src="audio/long/rain.mp3">
                            </audio>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="single-song-area mb-30 d-flex flex-wrap align-items-end">
                        <div class="song-thumbnail">
                            <img src="img/bg-img/s3.jpg" alt="">
                        </div>
                        <div class="song-play-area">
                            <div class="song-name">
                                <p>#Dance II 샤워할때 들으면 수도세 폭발해서 엄마한테 등짝맞는 힙한 노래 11곡</p>
                            </div>
                            <audio preload="auto" controls loop>
                                <source src="audio/long/shower.mp3">
                            </audio>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="single-song-area mb-30 d-flex flex-wrap align-items-end">
                        <div class="song-thumbnail">
                            <img src="img/bg-img/s4.jpg" alt="">
                        </div>
                        <div class="song-play-area">
                            <div class="song-name">
                                <p>MUSIC 🎵 공부하다 졸리면 듣는 음악 ( 잠 깨는 공부 음악 1시간 )</p>
                            </div>
                            <audio preload="auto" controls loop>
                                <source src="audio/long/wakeup.mp3">
                            </audio>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ##### Song Area End ##### -->















    <!-- ##### Favorite Artist Catagory Area Start ##### -->
    <!-- <section class="album-catagory section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="browse-by-catagories catagory-menu d-flex flex-wrap align-items-center mb-70">
                        <a href="#" data-filter="*">All Favorites </a>
                        <a href="#" data-filter=".a" class="active">A</a>
                        <a href="#" data-filter=".b">B</a>
                        <a href="#" data-filter=".c">C</a>
                        <a href="#" data-filter=".d">D</a>
                        <a href="#" data-filter=".e">E</a>
                        <a href="#" data-filter=".f">F</a>
                        <a href="#" data-filter=".g">G</a>
                        <a href="#" data-filter=".h">H</a>
                        <a href="#" data-filter=".i">I</a>
                        <a href="#" data-filter=".j">J</a>
                        <a href="#" data-filter=".k">K</a>
                        <a href="#" data-filter=".l">L</a>
                        <a href="#" data-filter=".m">M</a>
                        <a href="#" data-filter=".n">N</a>
                        <a href="#" data-filter=".o">O</a>
                        <a href="#" data-filter=".p">P</a>
                        <a href="#" data-filter=".q">Q</a>
                        <a href="#" data-filter=".r">R</a>
                        <a href="#" data-filter=".s">S</a>
                        <a href="#" data-filter=".t">T</a>
                        <a href="#" data-filter=".u">U</a>
                        <a href="#" data-filter=".v">V</a>
                        <a href="#" data-filter=".w">W</a>
                        <a href="#" data-filter=".x">X</a>
                        <a href="#" data-filter=".y">Y</a>
                        <a href="#" data-filter=".z">Z</a>
                        <a href="#" data-filter=".number">0-9</a>
                    </div>
                </div>
            </div>

            <div class="row oneMusic-albums">

                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item t c p">
                    <div class="single-album">
                        <img src="img/bg-img/a1.jpg" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>The Cure</h5>
                            </a>
                            <p>Second Song</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item s e q">
                    <div class="single-album">
                        <img src="img/bg-img/a2.jpg" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>Sam Smith</h5>
                            </a>
                            <p>Underground</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item w f r">
                    <div class="single-album">
                        <img src="img/bg-img/a3.jpg" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>Will I am</h5>
                            </a>
                            <p>First</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item t g u">
                    <div class="single-album">
                        <img src="img/bg-img/a4.jpg" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>The Cure</h5>
                            </a>
                            <p>Second Song</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item d h v">
                    <div class="single-album">
                        <img src="img/bg-img/a5.jpg" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>DJ SMITH</h5>
                            </a>
                            <p>The Album</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item t i x">
                    <div class="single-album">
                        <img src="img/bg-img/a6.jpg" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>The Ustopable</h5>
                            </a>
                            <p>Unplugged</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item b j y">
                    <div class="single-album">
                        <img src="img/bg-img/a7.jpg" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>Beyonce</h5>
                            </a>
                            <p>Songs</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item a k z">
                    <div class="single-album">
                        <img src="img/bg-img/a8.jpg" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>Aam Smith</h5>
                            </a>
                            <p>Underground</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item w l number">
                    <div class="single-album">
                        <img src="img/bg-img/a9.jpg" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>Will I am</h5>
                            </a>
                            <p>First</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item d m">
                    <div class="single-album">
                        <img src="img/bg-img/a10.jpg" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>DJ SMITH</h5>
                            </a>
                            <p>The Album</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item t n">
                    <div class="single-album">
                        <img src="img/bg-img/a11.jpg" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>The Ustopable</h5>
                            </a>
                            <p>Unplugged</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item b o">
                    <div class="single-album">
                        <img src="img/bg-img/a12.jpg" alt="">
                        <div class="album-info">
                            <a href="#">
                                <h5>Beyonce</h5>
                            </a>
                            <p>Songs</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> -->
    <!-- ##### Favorite Artist Catagory Area End ##### -->



































    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100 bg-img bg-overlay bg-fixed has-bg-img" style="background-image: url(img/bg-img/bg-2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading white wow fadeInUp" data-wow-delay="100ms">
                        <p>개발자에게 좋은 음악 추천하기</p>
                        <h2>Music Recommendation</h2>
                    </div>
                </div>
            </div>

            <?php
            require('lib/letter.php');
            ?>




















<?php require('lib/bottom.php'); ?>
