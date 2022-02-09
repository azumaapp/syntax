<!-- ★ 새 게시판 추가시에 간단히 이것만 수정
     ★ 1. 폴더검색: DB명 sub_spring_bbs1 변경, SQL 보고 테이블 작성
     ★ 2. _bbspage.php에서 Pagination 오름차순/최신순 Desc 결정
     ★ 3. _bbs_write.php, _bbs_modify.php에서 Tag 적용/미적용 결정
     ★ 4. lib/top.php에서 게시판별 이름 설정 -->

<?php require('../lib/top.php'); ?>

<!-- DB연결 -->
<?php require('_conn.php'); ?>

<!-- 페이지연결 -->
<?php require('_bbspage.php'); ?>

<!-- ##### Breadcumb Area Start ##### -->
<section class="breadcumb-area bg-img bg-overlay" style="background-image: url(../img/bg-img/breadcumb3.jpg);">
    <div class="bradcumbContent">
      <?php
        if(isset($_SESSION['nickname'])){
      ?>
      <!-- 로그인 한 경우 -->
      <p>List</p>
      <h2>목록 관리자모드</h2>
      <?php
          } else {
      ?>
      <!-- 로그인 안한 경우 -->
      <p>List</p>
      <h2>목록</h2>
      <?php
          }
      ?>
    </div>
</section>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Pagination Start ##### -->
<section class="album-catagory section-padding-100-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-center browse-by-catagories catagory-menu d-flex flex-wrap align-items-center mb-70">

                        <!-- 페이지네이션 앞 -->
                        <a href="#"></a>
                        <?php
                        if($current_bbs_page==1){
                            // prev가 눌리지 않게 a태그 제거, 혹은 아래를 아예 지워버리면 표시자체를 안하게 할 수 있음.
                            echo "<a href='#'>&laquo;</a> ";
                            echo "<a href='#'>앞</a> ";
                        } else {
                            echo "<a href='bbs.php?current_bbs_page=1' data-filter='*'>&laquo;</a> ";
                            echo "<a href='bbs.php?current_bbs_page={$prev_bbs_page}' data-filter='*'>앞</a> ";
                        }
                        if($current_bbs_page==$end_bbs_page){
                            echo "<a href='#'>끝</a> ";
                            echo "<a href='#'>&raquo;</a> ";
                        } else {
                            echo "<a href='bbs.php?current_bbs_page={$next_bbs_page}' data-filter='*'>뒤</a> ";
                            echo "<a href='bbs.php?current_bbs_page={$end_bbs_page}' data-filter='*'>&raquo;</a> ";
                        }
                        // 등록버튼
                        if(isset($_SESSION['nickname'])) { ?>
                        <!-- 로그인 한 경우 -->
                        <br><br>
                        <a href='bbs_write.php' class="active">New</a></button>&nbsp;
                        <?php
                            } else {
                        ?>
                        <!-- 로그인 안한 경우 -->
                        <a href="javascript:alert('로그인 해주세요.');" onfocus="this.blur()" class="active">New</a></button>&nbsp;
                        <?php
                            }
                        ?>

                </div>
            </div>
        </div>
        <!-- ##### Pagination End ##### -->

        <!-- ##### Article List Start ##### -->
        <div class="row oneMusic-albums">

            <!-- Single Album -->
            <?php
            foreach($result as $v){ ?>
            <div class="col-12 col-sm-4 col-md-3 col-lg-2 single-album-item 1">
                <div class="single-album">
                  <?php if(isset($v['img_file1'])){ ?>
                    <a href="bbs_view.php?no=<?=$v['no']?>"><img src='bbs_images/<?=$v['img_file1']?>' alt=''></a>
                  <?php } else {} ?>
                    <div class="album-info">
                        <a href="bbs_view.php?no=<?=$v['no']?>">
                            <h5><?=$v['title']?></h5>
                        </a>
                        <p><?=DateTime::createFromFormat("Y-m-d H:i:s", "{$v['reg_date']}")->format("‘y F d")?> 작성</p>
                    </div>
                </div>
            </div>
          <?php } ?>

        </div>
    </div>
</section>
<!-- ##### Article List End ##### -->



<section class="album-catagory section-padding-100-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-center browse-by-catagories catagory-menu d-flex flex-wrap align-items-center mb-70">
                  <a href="#">현 페이지 <?=$current_bbs_page?> / 총 페이지 <?=$end_bbs_page?></a>
                </div>
            </div>
        </div>
    </div>
</section>


<?php require('../lib/bottom.php'); ?>
