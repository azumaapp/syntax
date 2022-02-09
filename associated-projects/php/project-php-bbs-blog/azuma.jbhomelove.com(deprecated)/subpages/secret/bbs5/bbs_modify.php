<?php require('../lib/top.php'); ?>




<?php
require('_conn.php');

$no = $_GET['no'];
$sql = "select * from `sub_secret_bbs5` where no = $no";
$result = mysqli_query($conn, $sql);
$bbs = mysqli_fetch_assoc($result);
?>






<!-- ##### Contact Area Start ##### -->
<section class="contact-area section-padding-100 bg-img bg-overlay bg-fixed has-bg-img" style="background-image: url(../img/bg-img/bg-2.jpg);">
		<div class="container">
				<div class="row">
						<div class="col-12">
								<div class="section-heading white">
										<p><?=$no?>번</p>
										<h2>수정하기</h2>
								</div>
							</div>
				</div>

				<div class="row">
						<div class="col-12">
								<!-- Contact Form Area -->
								<div class="contact-form-area">
											<form action="_bbs_modify.php" method="post" enctype="multipart/form-data">
												<input type="hidden" name="no" value="<?=$no?>">
												<input type="hidden" name="nickname" value="<?=$bbs['nickname']?>">
												<div class="row">
														<!-- <div class="col-lg-6">
																<div class="form-group">
																		<input type="text" class="form-control" name="name" placeholder="Name">
																</div>
														</div> -->
														<!-- <div class="col-lg-6">
																<div class="form-group">
																		<input type="email" class="form-control" name="email" placeholder="E-mail">
																</div>
														</div> -->
														<div class="col-12">
																<div class="form-group">
																		<input type="text" class="form-control" name="title" cols="30" rows="1" value="<?=$bbs['title']?>" maxlength="99">
																</div>
														</div>
														<div class="col-12">
																<div class="form-group">
																	<textarea class="form-control" cols="30" rows="10" name="content"><?php $bcontent = $bbs['content']; $bcontent = str_replace("<br />", "", $bcontent); echo $bcontent?></textarea>
																	<!-- [참조] php문에서 <br />을 \n으로 치환하면 바꿀때마다 한줄씩 줄바꿈이 추가되기 때문에 공백 ("")으로 두는 게 수정버튼 클릭시 그대로 나온다. -->
															</div>
														</div>
														<br>
														<div class="col-12">
																<div class="form-group">
																	<b>※ 이 사진을 변경하려면 등록하세요. : <?=$bbs['img_file1']?></b><br>
																	<input type="file" name="img1"><br>
																</div>
														</div>
														<div class="col-12 text-center">
																<button class="btn oneMusic-btn mt-30" type="submit">Send <i class="fa fa-angle-double-right"></i></button>&nbsp;
																<button class="btn oneMusic-btn mt-30" type="button" onclick="location.href='bbs.php'">Back</button>
														</div>
												</div>
										</form>
								</div>
						</div>
				</div>
		</div>
</section>
<!-- ##### Contact Area End ##### -->







<?php require('../lib/bottom.php'); ?>
