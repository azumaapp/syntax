<head>
    <meta charset="utf-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>NewLeaf</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="../apple-touch-icon.png">
    <link rel="icon" type="image/png" href="../favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="../favicon-16x16.png" sizes="16x16" />
    <link rel="stylesheet" href="../css/normalize.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/jquery.fancybox.css">
    <link rel="stylesheet" href="../css/flexslider.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/queries.css">
    <link rel="stylesheet" href="../css/etline-font.css">
    <link rel="stylesheet" href="../bower_components/animate.css/animate.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="../js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body id="top">
<section id="letterform">
    <div class="container">
      <div class="sign-up section-padding text-center">
        <div class="row">
            <div class="text-center col-md-6 col-md-offset-3">
                <h3>NewLeaf에게 무엇이든 물어보세요.</h3>
                <p>남겨주신 Email을 통해 답변을 받으실 수 있습니다.</p>
                <button onclick="location.href='intro.php'" class="btn-fill sign-up-btn">돌아가기</button>
                <div style="padding: 10px;"></div>

                <form class="signup-form" action="_letter.php" method="POST" role="form">
                    <div class="form-input-group">
                        <i class="fa fa-envelope"></i><input type="email" class="" name="email" placeholder="Enter your email" minlength="1" maxlength="99" required>
                    </div>
                    <div class="form-input-group">
                        <i class="fa fa-pencil"></i><input type="text" class="" name="subject" placeholder="Enter a title." minlength="1" maxlength="99" required>
                    </div>
                    <div class="form-input-group">
                        <i class="fa fa-pencil"></i><input type="text" class="" cols="30" rows="10" name="message" placeholder="Give us a message." minlength="1" maxlength="8000" required></textarea>
                    </div>

                    <button type="submit" class="btn-fill sign-up-btn">보내기</button><br>

                </form>
            </div>
        </div>
      </div>
    </div>
</section>

</section>

<?php require('../lib1/bottom.php'); ?>
