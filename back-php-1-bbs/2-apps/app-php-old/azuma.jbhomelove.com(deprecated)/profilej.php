<?php require('lib/top.php'); ?>






    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb2.jpg);">
        <div class="bradcumbContent">
            <p>履歴・経歴・紹介</p>
            <h2>Profile</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Elements Area Start ##### -->
    <section class="elements-area mt-30 section-padding-100-0">
        <div class="container">
            <div class="row">

                <!-- ========== Buttons ========== -->
                <div class="col-12">
                    <div class="elements-title mb-70">
                        <h2>言語</h2>
                    </div>
                    <!-- Buttons -->
                    <div class="oneMusic-buttons-area mb-100">
                      <a href="profile.php" class="btn oneMusic-btn m-2">Korean <i class="fa fa-angle-double-right"></i></a>
                      <a href="profilej.php" class="btn oneMusic-btn btn-2 m-2">Japanese <i class="fa fa-angle-double-right"></i></a>
                      <a href="profileu.php" class="btn oneMusic-btn m-2">English <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>

                <!-- ========== Progress Bars & Accordions ========== -->
                <!-- ========== Progress Bars & Accordions ========== -->
                <div class="col-12">
                    <div class="elements-title mb-70">
                        <h2>諮問者答 &amp; 紹介</h2>
                    </div>
                </div>

                <!-- ##### Accordians ##### -->
                <div class="col-12 col-lg-6">
                    <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true">
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6><a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Q. 自己紹介？
                            <!-- ↑ 처음부터 열린 상태로 만들기 : <h6><a role="button" class="" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Q. 자기소개? -->
                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a></h6>
                            <div id="collapseOne" class="accordion-content collapse">
                            <!-- ↑ 처음부터 열린 상태로 만들기 : <div id="collapseOne" class="accordion-content collapse show"> -->
                                <p>こんにちは! ウェブプログラマーで活動している筆名"Azuma"と申します。韓国から来ました。 職業を転向して現在は東京で開発者として働いています。</p>
                            </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseTwo" data-parent="#accordion" data-toggle="collapse" href="#collapseTwo">Q. なぜプログラマーですか？
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseTwo" class="accordion-content collapse">
                                <p>私は子どもの時から、プログラマーになりたいという夢がありました。また、海外の生活にも憧れを抱き続けていました。
                                  特技の英語を活かし教師生活を6年間勤めましたが、今後の人生を考えた際、皆より一歩スタートが遅れていたとしても、自分のやりたいことを追求し、人の役に立てたら幸せであると思い、プログラマーへの進路を決断致しました。
                                </p>
                            </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" aria-expanded="true" aria-controls="collapseThree" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseThree">Q. あなたの強みは何ですか？
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseThree" class="accordion-content collapse">
                                <p>私の強みは芸術、技術、語学、教育分野です。<br>
                                  ・芸術:音楽、写真、コーディなど分野での美的活動経験<br>
                                  ・技術:ウェブページ制作、PHP、JSPなど<br>
                                  ・言語:英語、修能1等級、貿易英語1級等<br>
                                  ・教育:6年間高校教師、1:1教育能力、顧客相談技術<br>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ##### Tabs ##### -->
                <div class="col-12 col-lg-6">
                    <div class="oneMusic-tabs-content">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="tab--1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false">サイト紹介</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab--2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="true">所持する資格証</a>
                            </li>
                        </ul>

                        <div class="tab-content mb-100" id="myTabContent">
                            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab--1">
                                <div class="oneMusic-tab-content">
                                    <!-- Tab Text -->
                                    <div class="oneMusic-tab-text">
                                        <p>このホームページは音楽とコーディングが好きな私自身のために作りました。 音楽を聴きながらコーディング資料を収集し、
                                          履歴書の代用やポートフォリオとして活用し、日常的な記録を残したりするなど、様々な目的で自分の便宜を図りました。</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab--2">
                                <div class="oneMusic-tab-content">
                                    <!-- Tab Text -->
                                    <div class="oneMusic-tab-text">
                                        <p>
                                          2008	7	ワードプロセッサー　1級（大韓商工会議所)<br>
                                          2013	2	正規教師資格　英語(大韓民国教育庁)<br>
                                          2018	1	スノーボード指導者(国民安全教育振興会)<br>
                                          2019	5	英翻訳能力(韓国翻訳能力評価委員会)<br>
                                          2019	5	情報処理技士(科学技術情報通信部)<br>
                                          2019	6	貿易英語 1級(大韓商工会議所)
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


















                <!-- ========== Loaders ========== -->
                <div class="col-12">
                    <div class="elements-title mb-70">
                        <h2>趣向</h2>
                    </div>
                </div>

                <div class="col-12">
                    <!-- Loaders Area Start -->
                    <div class="our-skills-area">
                        <div class="row">

                            <!-- Single Skills Area -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="single-skils-area mb-100">
                                    <div id="circle" class="circle" data-value="0.75">
                                        <div class="skills-text">
                                            <span>75%</span>
                                            <p>ジャズ音楽</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Skills Area -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="single-skils-area mb-100">
                                    <div id="circle2" class="circle" data-value="0.83">
                                        <div class="skills-text">
                                            <span>83%</span>
                                            <p>コメディー映画</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Skills Area -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="single-skils-area mb-100">
                                    <div id="circle3" class="circle" data-value="0.25">
                                        <div class="skills-text">
                                            <span>25%</span>
                                            <p>休みの日に外出</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Skills Area -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="single-skils-area mb-100">
                                    <div id="circle4" class="circle" data-value="0.95">
                                        <div class="skills-text">
                                            <span>95%</span>
                                            <p>海</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


























                <!-- ========== Milestones ========== -->
                <div class="col-12">
                    <div class="elements-title mb-70">
                        <h2>里程標</h2>
                    </div>
                </div>

                <div class="col-12">
                    <div class="oneMusic-cool-facts-area">
                        <div class="row">

                            <!-- Single Cool Facts -->
                            <div class="col-12 col-sm-6 col-lg-2">
                                <div class="single-cool-fact mb-100">
                                    <div class="scf-text">
                                        <h2><script>document.write(new Date().getFullYear());</script></h2>
                                        <p>年の基準</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Cool Facts -->
                            <div class="col-12 col-sm-6 col-lg-2">
                                <div class="single-cool-fact mb-100">
                                    <div class="scf-text">
                                        <h2><script>document.write(new Date().getFullYear() - 1986);</script></h2>
                                        <p>歳</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Cool Facts -->
                            <div class="col-12 col-sm-6 col-lg-2">
                                <div class="single-cool-fact mb-100">
                                    <div class="scf-text">
                                        <h2><script>document.write(new Date().getFullYear() - 2018);</script></h2>
                                        <p>開発年次</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Cool Facts -->
                            <div class="col-12 col-sm-6 col-lg-2">
                                <div class="single-cool-fact mb-100">
                                  <div class="scf-text">
                                    <h2><script type="text/javascript">  var today = new Date();  var dateString = "2019-01-01";  var dateArray = dateString.split("-");
                                    var dateObj = new Date(dateArray[0], Number(dateArray[1])-1, dateArray[2]);  var betweenDay = (today.getTime() - dateObj.getTime())/1000/60/60/24/30.5;
                                    document.write(Math.round(betweenDay));</script></h2>
                                    <p>開発月次</p>
                                  </div>
                                </div>
                            </div>

                            <!-- Single Cool Facts -->
                            <div class="col-12 col-sm-6 col-lg-2">
                                <div class="single-cool-fact mb-100">
                                    <div class="scf-text">
                                      <h2><script type="text/javascript">  var today = new Date();  var dateString = "2019-03-02";  var dateArray = dateString.split("-");
                                      var dateObj = new Date(dateArray[0], Number(dateArray[1])-1, dateArray[2]);  var betweenDay = (today.getTime() - dateObj.getTime())/1000/60/60/4;
                                      document.write(Math.round(betweenDay));</script></h2>
                                      <p>勉強の時間</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Cool Facts -->
                            <div class="col-12 col-sm-6 col-lg-2">
                                <div class="single-cool-fact mb-100">
                                  <div class="scf-text">
                                    <h2><script type="text/javascript">  var today = new Date();  var dateString = "2019-08-18";  var dateArray = dateString.split("-");
                                    var dateObj = new Date(dateArray[0], Number(dateArray[1])-1, dateArray[2]);  var betweenDay = (today.getTime() - dateObj.getTime())/1000/60/60/24;
                                    document.write(Math.round(betweenDay));</script></h2>
                                    <p>サイト開設日</p>
                                  </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

















                <!-- ========== Icon Boxes ========== -->
                <div class="col-12">
                    <div class="elements-title mb-70">
                        <h2>趣味</h2>
                    </div>
                </div>

                <div class="col-12">
                    <div class="row">

                        <!-- Single Service Area -->
                        <div class="col-12 col-md-6">
                            <div class="single-service-area d-flex flex-wrap mb-100">
                                <div class="icon">
                                    <span class="icon-photo-camera"></span>
                                </div>
                                <div class="text">
                                    <h5>写真</h5>
                                    <p>教育庁主管写真展、優秀賞受賞、ドロンのスキル</p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Service Area -->
                        <div class="col-12 col-md-6">
                            <div class="single-service-area d-flex flex-wrap mb-100">
                                <div class="icon">
                                    <span class="icon-microphone"></span>
                                </div>
                                <div class="text">
                                    <h5>音楽</h5>
                                    <p>高校、大学バンド運営、JTVロックフェスティバル大賞受賞</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


























                <!-- ========== Icon Boxes ========== -->
                <div class="col-12">
                    <div class="elements-title mb-70">
                        <h2>性格</h2>
                    </div>
                </div>

                <div class="col-12">
                    <div class="row mb-70">

                      <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                          <div class="single-web-icon mb-30">
                              <i class="icon-flag"></i>
                              <span>Aimful</span>
                          </div>
                      </div>

                      <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                          <div class="single-web-icon mb-30">
                              <i class="icon-heart"></i>
                              <span>Warm-hearted</span>
                          </div>
                      </div>

                      <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                          <div class="single-web-icon mb-30">
                              <i class="icon-calendar"></i>
                              <span>Planning Quality</span>
                          </div>
                      </div>

                      <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                          <div class="single-web-icon mb-30">
                              <i class="icon-megaphone"></i>
                              <span>Encouraging</span>
                          </div>
                      </div>

                      <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                          <div class="single-web-icon mb-30">
                              <i class="icon-users"></i>
                              <span>Interpersonal</span>
                          </div>
                      </div>

                      <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                          <div class="single-web-icon mb-30">
                              <i class="icon-checked"></i>
                              <span>Precise</span>
                          </div>
                      </div>


                    </div>
                </div>














                <!-- ========== Icon Boxes ========== -->
                <div class="col-12">
                    <div class="elements-title mb-70">
                        <h2>フロントエンドのスキル</h2>
                    </div>
                </div>

                <div class="col-12">
                    <div class="row mb-70">
                        <!-- 쓰는 아이콘 모음 -->
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-planet-earth"></i>
                                <span>HTML 5</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-image"></i>
                                <span>CSS</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-settings-2"></i>
                                <span>Javascript</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-zoom-out"></i>
                                <span>Reactive Web</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-home"></i>
                                <span>Bootstrap 4</span>
                            </div>
                        </div>



                    </div>
                </div>



















                <!-- ========== Icon Boxes ========== -->
                <div class="col-12">
                    <div class="elements-title mb-70">
                        <h2>バックエンドのスキル</h2>
                    </div>
                </div>

                <div class="col-12">
                    <div class="row mb-70">

                      <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                          <div class="single-web-icon mb-30">
                              <i class="icon-loupe"></i>
                              <span>MySQL</span>
                          </div>
                      </div>

                      <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                          <div class="single-web-icon mb-30">
                              <i class="icon-folder-1"></i>
                              <span>PHP 7.2</span>
                          </div>
                      </div>

                      <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                          <div class="single-web-icon mb-30">
                              <i class="icon-layers"></i>
                              <span>PHPMyAdmin</span>
                          </div>
                      </div>

                      <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                          <div class="single-web-icon mb-30">
                              <i class="icon-download"></i>
                              <span>FTP</span>
                          </div>
                      </div>

                      <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                          <div class="single-web-icon mb-30">
                              <i class="icon-settings-1"></i>
                              <span>Java</span>
                          </div>
                      </div>

                      <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                        <div class="single-web-icon mb-30">
                          <i class="icon-settings"></i>
                          <span>JSP</span>
                        </div>
                      </div>

                      <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                          <div class="single-web-icon mb-30">
                              <i class="icon-inbox"></i>
                              <span>Virtual Box</span>
                          </div>
                      </div>

                      <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                          <div class="single-web-icon mb-30">
                              <i class="icon-monitor"></i>
                              <span>CentOS</span>
                          </div>
                      </div>

                      <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                          <div class="single-web-icon mb-30">
                              <i class="icon-laptop"></i>
                              <span>Bash</span>
                          </div>
                      </div>

                      <!-- <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                          <div class="single-web-icon mb-30">
                              <i class="icon-favorites"></i>
                              <span>Ruby On Rails</span>
                          </div>
                      </div>

                      <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                          <div class="single-web-icon mb-30">
                              <i class="icon-line-chart"></i>
                              <span>Node.js</span>
                          </div>
                      </div>

                      <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                          <div class="single-web-icon mb-30">
                              <i class="icon-share"></i>
                              <span>Python Django</span>
                          </div>
                      </div>

                      <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                          <div class="single-web-icon mb-30">
                              <i class="icon-smartphone"></i>
                              <span>Swift</span>
                          </div>
                      </div> -->



                    </div>
                </div>


















                <!-- ========== Icon Boxes ========== -->
                <div class="col-12">
                    <div class="elements-title mb-70">
                        <h2>その他のスキル</h2>
                    </div>
                </div>

                <div class="col-12">
                    <div class="row mb-70">

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-edit"></i>
                                <span>MS Office</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-presentation"></i>
                                <span>PPT</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-bar-chart"></i>
                                <span>Excel</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-cloud"></i>
                                <span>Cloud-Computing</span>
                            </div>
                        </div>

                        <!-- <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-shield"></i>
                                <span>Web Security</span>
                            </div>
                        </div> -->

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-padlock-1"></i>
                                <span>Folder Security</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-chat-1"></i>
                                <span>TOEIC 945</span>
                            </div>
                        </div>

                        <!-- <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-chat"></i>
                                <span>JLPT N1</span>
                            </div>
                        </div> -->

                        <!-- <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-atomic"></i>
                                <span>Algorithm</span>
                            </div>
                        </div> -->

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-car"></i>
                                <span>Driving</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-microphone"></i>
                                <span>Singing</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-photo-camera"></i>
                                <span>Photography</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-video-camera"></i>
                                <span>Video Making</span>
                            </div>
                        </div>

                        <!-- <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-credit-card"></i>
                                <span>Set Payment</span>
                            </div>
                        </div> -->

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-idea"></i>
                                <span>R&D</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-like"></i>
                                <span>SNS Macro</span>
                            </div>
                        </div>



                    </div>
                </div>






































                <!-- ========== Unused Icon Boxes ========== -->
                <!-- 안쓰는 아이콘 모음 Start -->

                <!-- <div class="col-12">
                    <div class="elements-title mb-70">
                        <h2>안 쓰는 아이콘 보기</h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row mb-70">
                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-alarm-clock"></i>
                                <span>icon-alarm-clock</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-folder"></i>
                                <span>icon-folder</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-battery"></i>
                                <span>icon-battery</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-battery-1"></i>
                                <span>icon-battery-1</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-bell"></i>
                                <span>icon-bell</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-bluetooth"></i>
                                <span>icon-bluetooth</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-book"></i>
                                <span>icon-book</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-box"></i>
                                <span>icon-box</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-calculator"></i>
                                <span>Engineering Calculator</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-play-button"></i>
                                <span>icon-play-button</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-power-button"></i>
                                <span>icon-power-button</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-printer"></i>
                                <span>icon-printer</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-reload"></i>
                                <span>icon-reload</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-return"></i>
                                <span>icon-return</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-rss"></i>
                                <span>icon-rss</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-placeholder"></i>
                                <span>GPS-based</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-safebox"></i>
                                <span>icon-safebox</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-cursor"></i>
                                <span>Helicopter Crew</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-cutlery"></i>
                                <span>Cooking</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-cloud-computing"></i>
                                <span>icon-cloud-computing</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-cloud-computing-1"></i>
                                <span>icon-cloud-computing-1</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-compass"></i>
                                <span>icon-compass</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-envelope"></i>
                                <span>icon-envelope</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-eraser"></i>
                                <span>icon-eraser</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-eye"></i>
                                <span>icon-eye</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-fast-forward"></i>
                                <span>icon-fast-forward</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-file"></i>
                                <span>icon-file</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-file-1"></i>
                                <span>icon-file-1</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-file-2"></i>
                                <span>icon-file-2</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-file-3"></i>
                                <span>icon-file-3</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-filter"></i>
                                <span>icon-filter</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-gamepad"></i>
                                <span>icon-gamepad</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-id-card"></i>
                                <span>icon-id-card</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-information"></i>
                                <span>icon-information</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-key"></i>
                                <span>icon-key</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-mail"></i>
                                <span>icon-mail</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-map"></i>
                                <span>icon-map</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-medal"></i>
                                <span>icon-medal</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-message"></i>
                                <span>icon-message</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-message-1"></i>
                                <span>icon-message-1</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-message-2"></i>
                                <span>icon-message-2</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-money"></i>
                                <span>icon-money</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-music"></i>
                                <span>icon-music</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-next"></i>
                                <span>icon-next</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-padlock"></i>
                                <span>icon-padlock</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-paint-brush"></i>
                                <span>icon-paint-brush</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-pause"></i>
                                <span>icon-pause</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-phone-call"></i>
                                <span>icon-phone-call</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-shopping-cart"></i>
                                <span>icon-shopping-cart</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-speaker"></i>
                                <span>icon-speaker</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-speakers"></i>
                                <span>icon-speakers</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-trash"></i>
                                <span>icon-trash</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-trophy"></i>
                                <span>icon-trophy</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-user"></i>
                                <span>icon-user</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-user-1"></i>
                                <span>icon-user-1</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-user-2"></i>
                                <span>icon-user-2</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-user-3"></i>
                                <span>Reactive Web</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-upload"></i>
                                <span>icon-upload</span>
                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 col-lg-2">
                            <div class="single-web-icon mb-30">
                                <i class="icon-wifi"></i>
                                <span>icon-wifi</span>
                            </div>
                        </div>

                    </div>
                </div> -->
                <!-- 안쓰는 아이콘 모음 열어보기 End -->

            </div>
        </div>
    </section>
    <!-- ***** Elements Area End ***** -->










<?php require('lib/bottom.php'); ?>
