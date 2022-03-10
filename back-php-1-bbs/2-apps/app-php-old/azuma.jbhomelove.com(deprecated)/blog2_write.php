<?php require('lib/top.php'); ?>




<!-- ##### Contact Area Start ##### -->
<section class="contact-area section-padding-100 bg-img bg-overlay bg-fixed has-bg-img" style="background-image: url(img/bg-img/bg-2.jpg);">
		<div class="container">
				<div class="row">
						<div class="col-12">
								<div class="section-heading white">
										<p>새 스킬 등록</p>
										<h2>New Skill Blog</h2>
								</div>
						</div>
				</div>

				<div class="row">
						<div class="col-12">
								<!-- Contact Form Area -->
								<div class="contact-form-area">
											<form action="_blog2_write.php" method="post" enctype="multipart/form-data">
												<div class="row">
														<input type="hidden" name="nickname" value="<?=$_SESSION['nickname']?>">
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
																		<input type="text" class="form-control" name="title" cols="30" rows="1" placeholder="Title" maxlength="100">
																</div>
														</div>
														<div class="col-12">
																<div class="form-group">
																		<textarea class="form-control" cols="30" rows="10" name="content" placeholder="Content"></textarea>
																</div>
														</div>
														<br>
														<div class="col-12">
																<div class="form-group">
																	<b>※ 이미지(jpg, png) 파일 등록</b><br>
																	<input type="file" name="img1"><br>
																</div>
														</div>
														<div class="col-12 text-center">
																<button class="btn oneMusic-btn mt-30" type="submit">Send <i class="fa fa-angle-double-right"></i></button>&nbsp;
																<button class="btn oneMusic-btn mt-30" type="button" onclick="location.href='blog2.php'">Back</button>
														</div>
												</div>
										</form>
								</div>
						</div>
				</div>
		</div>
</section>
<!-- ##### Contact Area End ##### -->












<?php require('lib/bottom.php'); ?>
