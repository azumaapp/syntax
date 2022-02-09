<?php require('lib/top.php'); ?>







    <!-- ##### Breadcumb Area Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/breadcumb3.jpg);">
        <div class="bradcumbContent">
          <?php
            if(isset($_SESSION['nickname'])){
          ?>
          <!-- 로그인 한 경우 -->
          <p>Life Blog Admin</p>
          <h2>Life Blog 관리자모드 </h2>
          <?php
              } else {
          ?>
          <!-- 로그인 안한 경우 -->
          <p>Travel &amp; Lifestyle</p>
          <h2>Life Blog</h2>
          <?php
              }
          ?>
        </div>
    </section>
    <!-- ##### Breadcumb Area End ##### -->




























<!-- DB Blog Loading Start -->
<?php
require('_conn.php');


if(isset($_GET['current_page'])){
    $current_page=$_GET['current_page'];
} else {
    $current_page=1;
}

$start = ($current_page-1)*5;
// ▲ ★ 넘기는 개수 수정할 때 맨 끝 숫자 수정

$sqlall = "SELECT * FROM `azuma_a_blog3` where del_flg = '0'";
$count = mysqli_query($conn, $sqlall)->num_rows;
$end_page = ceil($count/5);
// ▲ ★ 넘기는 개수 수정할 때 맨 끝 숫자 수정

$sql = "SELECT * FROM `azuma_a_blog3` where del_flg = '0' order by no desc limit $start, 5";
// ▲ ★ 넘기는 개수 수정할 때 맨 끝 숫자 수정
// ▲ limit a, 5 = a 부터 5개

$result = mysqli_query($conn, $sql);


$prev_page = $current_page-1;
$next_page = $current_page+1;

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
                <a href="#"><img src='blog_images/<?=$v['img_file1']?>' alt=''></a>
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
                              <p class="tags">in<a href="blog3.php"> Life Blog</a></p> <!-- BBSID -->
                              <?php if(isset($v['update_date'])){echo "<p class='tags'>Updated On ".DateTime::createFromFormat("Y-m-d H:i:s", "{$v['update_date']}")->format("‘y F d")."</p>";} else {} ?>
                          </div>
                          <!-- Post Excerpt -->
                          <p><?=$v['content']?></p>
              <?php
                if(isset($_SESSION['nickname'])) {
              ?>
              <!-- 로그인 한 경우 -->
                <br><br>
                <button onclick="location.href='blog3_write.php'">등록</button>&nbsp;
                <button onclick="location.href='blog3_modify.php?no=<?=$v['no']?>'">수정</button>&nbsp;
                <button onclick="location.href='_blog3_delete.php?no=<?=$v['no']?>'">삭제</button>&nbsp;
              <?php
                  } else {
              ?>
              <!-- 로그인 안한 경우 -->
              <?php
                  }
              ?>
                      </div>
                  </div>
              <?php
                }
              ?>












                    <!-- Pagination -->
                    <div class="oneMusic-pagination-area wow fadeInUp" data-wow-delay="300ms">
                        <nav>
                            <ul class="pagination">
                              <?php if($current_page==1) { ?>
                                  <li class="page-item active"><a class="page-link" href="#">&laquo;</a></li>
                                  <li class="page-item"><a class="page-link" href="#">앞</a></li>
                              <?php } else { ?>
                                  <li class="page-item"><a class="page-link" href="blog3.php?current_page=1">&laquo;</a></li>
                                  <li class="page-item"><a class="page-link" href="blog3.php?current_page=<?=$prev_page?>">앞</a></li>
                              <?php } ?>
                              <?php if($current_page==$end_page) { ?>
                                  <li class="page-item"><a class="page-link" href="#">끝</a></li>
                                  <li class="page-item active"><a class="page-link" href="#">&raquo;</a></li>
                              <?php } else { ?>
                                  <li class="page-item"><a class="page-link" href="blog3.php?current_page=<?=$next_page?>">뒤</a></li>
                                  <li class="page-item"><a class="page-link" href="blog3.php?current_page=<?=$end_page?>">&raquo;</a></li>
                              <?php } ?>
                            </ul>
                        </nav>
                    </div>
                </div>

                <?php
                require('lib/side_widget.php');
                ?>

            </div>
        </div>
    </div>
    <!-- ##### Blog Area End ##### -->

























    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100 bg-img bg-overlay bg-fixed has-bg-img" style="background-image: url(img/bg-img/bg-2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading white">
                        <p>개발자에게 편지 보내기</p>
                        <h2>Get In Touch</h2>
                    </div>
                </div>
            </div>

            <?php
            require('lib/letter.php');
            ?>











<?php require('lib/bottom.php'); ?>
