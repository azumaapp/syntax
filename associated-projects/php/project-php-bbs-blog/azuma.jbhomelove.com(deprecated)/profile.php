<?php require('lib/top.php'); ?>






    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb2.jpg);">
        <div class="bradcumbContent">
            <p>이력・경력・소개</p>
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
                        <h2>언어</h2>
                    </div>
                    <!-- Buttons -->
                    <div class="oneMusic-buttons-area mb-100">
                        <a href="profile.php" class="btn oneMusic-btn btn-2 m-2">Korean <i class="fa fa-angle-double-right"></i></a>
                        <a href="profilej.php" class="btn oneMusic-btn m-2">Japanese <i class="fa fa-angle-double-right"></i></a>
                        <a href="profileu.php" class="btn oneMusic-btn m-2">English <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>

                <!-- ========== Progress Bars & Accordions ========== -->
                <div class="col-12">
                    <div class="elements-title mb-70">
                        <h2>자문자답 &amp; 소개</h2>
                    </div>
                </div>

                <!-- ##### Accordians ##### -->
                <div class="col-12 col-lg-6">
                    <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true">
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6><a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Q. 자기소개?
                            <!-- ↑ 처음부터 열린 상태로 만들기 : <h6><a role="button" class="" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Q. 자기소개? -->
                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a></h6>
                            <div id="collapseOne" class="accordion-content collapse">
                            <!-- ↑ 처음부터 열린 상태로 만들기 : <div id="collapseOne" class="accordion-content collapse show"> -->
                                <p>안녕하세요! 웹 프로그래머로 활동하고 있는 필명 「Azuma」라고 합니다. 한국으로부터 왔습니다. 현재는 도쿄에서 개발자로 근무하고 있습니다.</p>
                            </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseTwo" data-parent="#accordion" data-toggle="collapse" href="#collapseTwo">Q. 왜 프로그래머입니까?
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseTwo" class="accordion-content collapse">
                                <p>저는 어렸을 때부터 프로그래머가 되고 싶다는 꿈이 있었습니다. 또, 해외의 생활에도 동경을 계속 안고 있었습니다. 특기인 영어를 살려 고등학교 영어교사로서 6년간 근무했습니다만, 향후의 삶을 생각할 때 모두보다 한 걸음
                                  출발이 늦더라도, 자신이 하고 싶은 것을 추구하면서, 보다 더 사회에 공헌하는, 즉 인간을 이롭게 하는 프로그램을 만들고자 프로그래머에 대한 진로를 결정하였습니다.</p>
                            </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" aria-expanded="true" aria-controls="collapseThree" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseThree">Q. 당신의 강점은 무엇입니까?
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseThree" class="accordion-content collapse">
                                <p>저의 강점은 예술, 기술, 어학, 교육 분야입니다.<br>
                                  ・예술 : 음악, 사진, 코디 등 다양한 분야의 미적 활동 경험<br>
                                  ・기술 : 웹페이지제작, PHP, JSP 등<br>
                                  ・언어 : 영어 수능 1등급, 무역영어 1급 외 어학자격증 4개 소지<br>
                                  ・교육 : 6년간 학교교육경력, 1:1 교육능력, 고객상담기술<br>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ##### Tabs ##### -->
                <div class="col-12 col-lg-6">
                    <div class="oneMusic-tabs-content">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="tab--1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false">사이트 소개</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab--2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="true">소지 자격증</a>
                            </li>
                        </ul>

                        <div class="tab-content mb-100" id="myTabContent">
                            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab--1">
                                <div class="oneMusic-tab-content">
                                    <!-- Tab Text -->
                                    <div class="oneMusic-tab-text">
                                        <p>이 홈페이지는 음악과 코딩을 동시에 좋아하는 저 자신을 위해 만들어졌습니다. 음악을 듣는 동시에, 코딩 자료들을 수집하고, 이력서 대용이나 포트폴리오로 활용하고, 일상적인 기록을 남기기도 하는 등 다양한 목적으로 스스로의 편의에 맞게 만들었습니다.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab--2">
                                <div class="oneMusic-tab-content">
                                    <!-- Tab Text -->
                                    <div class="oneMusic-tab-text">
                                        <p>
                                          2008 7 워드프로세서 1급(대한상공회의소)<br>
                                          2013 2 정교사자격증영어(대한민국 교육청)<br>
                                          2018 1 스노우보드지도자(국민안전교육진흥회)<br>
                                          2019 5 영한번역사(한국번역능력평가위원회)<br>
                                          2019 5 정보처리기사(과학기술정보통신부)<br>
                                          2019 6 무역영어 1급(대한상공회의소)<br>
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
                        <h2>취향</h2>
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
                                            <p>재즈 음악</p>
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
                                            <p>코미디 영화</p>
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
                                            <p>쉬는날 나가기</p>
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
                                            <p>바다</p>
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
                        <h2>이정표</h2>
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
                                        <p>년 기준</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Cool Facts -->
                            <div class="col-12 col-sm-6 col-lg-2">
                                <div class="single-cool-fact mb-100">
                                    <div class="scf-text">
                                        <h2><script>document.write(new Date().getFullYear() - 1986);</script></h2>
                                        <p>살</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Cool Facts -->
                            <div class="col-12 col-sm-6 col-lg-2">
                                <div class="single-cool-fact mb-100">
                                    <div class="scf-text">
                                        <h2><script>document.write(new Date().getFullYear() - 2018);</script></h2>
                                        <p>개발연차</p>
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
                                    <p>개발개월</p>
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
                                      <p>공부시간</p>
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
                                    <p>사이트 개설일</p>
                                  </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

















                <!-- ========== Icon Boxes ========== -->
                <div class="col-12">
                    <div class="elements-title mb-70">
                        <h2>취미</h2>
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
                                    <h5>사진</h5>
                                    <p>시교육청 주관 사진전 우수상 수상, 드론 스킬 보유</p>
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
                                    <h5>노래</h5>
                                    <p>고교, 대학 밴드운영, JTV 생생록페스티벌 대상 수상</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


























                <!-- ========== Icon Boxes ========== -->
                <div class="col-12">
                    <div class="elements-title mb-70">
                        <h2>성격</h2>
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
                        <h2>프론트엔드 스킬</h2>
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
                        <h2>백엔드 스킬</h2>
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
                        <h2>기타 스킬</h2>
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
