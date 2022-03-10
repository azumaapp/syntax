<?php require('../lib/top.php'); ?>
<?php
// _bbs_delete가 끝나서 돌아온 거라면 뒤로 한번 더 가기 : bbs 해당 리스트 상태로
if(isset($_SESSION['delback'])){
  unset($_SESSION['delback']);
  echo "<script>history.go(-1);</script>";
} else { // _bbs_delete 안했을 경우에 해당하는 페이지 전체 묶어버리기
$no = $_GET['no'];
?>

    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(../img/bg-img/breadcumb3.jpg);">
        <div class="bradcumbContent">
          <?php
            if(isset($_SESSION['nickname'])){
          ?>
          <!-- 로그인 한 경우 -->
          <p><?=$no?>번</p>
          <h2>상세보기 관리자모드</h2>
          <?php
              } else {
          ?>
          <!-- 로그인 안한 경우 -->
          <p><?=$no?>번</p>
          <h2>상세보기</h2>
          <?php
              }
          ?>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->




























<!-- DB Blog Loading Start -->
<?php
$no = $_GET['no'];

require('_conn.php');

// no값에 해당하는 게시물 호출
$sql = "SELECT * FROM `sub_secret_bbs1` WHERE no = $no";
$result = mysqli_query($conn, $sql);
?>
<!-- DB Blog Loading End -->

























<!-- ##### Blog Area Start ##### -->
<div class="blog-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-9">

              <?php foreach($result as $v) { ?>
                  <!-- Single Post Start -->
                  <div class="single-blog-post mb-100 wow fadeInUp" data-wow-delay="100ms">
                      <!-- Post Thumb -->
                      <div class="blog-post-thumb mt-30">
                          <?php if(isset($v['img_file1'])){ ?>
                            <a href="#"><img src='bbs_images/<?=$v['img_file1']?>' alt=''></a>
                          <?php } else { ?>
                            <br><br>
                          <?php } ?>
                          <!-- Post Date -->
                          <div class="post-date">
                            <span>
                              <?=DateTime::createFromFormat("Y-m-d H:i:s", "{$v['reg_date']}")->format("d") // {$v['update_date']}로 바꾸면 등록일 → 수정일 ?>
                            </span>
                            <span>
                              <?=DateTime::createFromFormat("Y-m-d H:i:s", "{$v['reg_date']}")->format("F ‘y")?>
                            </span>
                          </div>
                      </div>
                      <!-- Blog Content -->
                      <div class="blog-content">
                          <!-- Post Title -->
                          <a href="#" class="post-title"><?=$v['title']?></a>
                          <!-- Post Meta -->
                          <div class="post-meta d-flex mb-30">
                            <p class="post-author">By<a href="http://azuma.jbhomelove.com"> <?=$v['nickname']?></a></p>
                            <?php if(isset($v['update_date'])){echo "<p class='tags'>Updated On ".DateTime::createFromFormat("Y-m-d H:i:s", "{$v['update_date']}")->format("‘y F d")."</p>";} else {} ?>
                          </div>
                          <!-- Post Excerpt -->
                          <p><?=$v['content']?></p>
              <?php
                if(isset($_SESSION['nickname'])) {
              ?>
              <!-- 로그인 한 경우 -->
                <br><br>
                <button onclick="javascript:window.location.replace(document.referrer);">이전</button>&nbsp;
                <button onclick="location.href='bbs_modify.php?no=<?=$v['no']?>'">수정</button>&nbsp;
                <button onclick="location.href='_bbs_delete.php?no=<?=$v['no']?>'">삭제</button>&nbsp;
              <?php
                  } else {
              ?>
              <!-- 로그인 안한 경우 -->
              <br><br>
              <button onclick="javascript:window.location.replace(document.referrer);">이전</button>&nbsp;
              <?php
                  }
              ?>
                      </div>
                  </div>
              <?php
                }
              ?>

            </div>

                <?php
                require('../lib/side_widget.php');
                ?>

            </div>
        </div>
    </div>
    <!-- ##### Blog Area End ##### -->











<?php require('../lib/bottom.php'); ?>

<?php } ?>
