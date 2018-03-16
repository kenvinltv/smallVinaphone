<?php include_once 'config.php' ?>
<html>
<head>
    <meta charset="utf-8">
    <base href="http://localhost/smallVinaphone/">
    <title><?php echo title; ?></title>
    <meta name="description" content="<?php echo description; ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="shortcut icon" type="image/ico" href="favicon.ico">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="asset/css/normalize.css">
    <link rel="stylesheet" href="asset/css/style.css">
    
</head>

<body class="main-body">    
    <div class="wrapper">
        <section class="phone-request">
            <div class="container">
                <div class="phone-request-content col-lg-6 col-lg-offset-6">
                    <h2>Gói cước <span>INTERNET</span></h2>
                    <p>Bạn muốn tư vấn gói cước dịch vụ, hãy để lại thông tin cho chúng tôi?</p>
                    <form action="" method="post">
                        <input type="text" class="form-control" placeholder="Họ và tên">
                        <input type="text" class="form-control" placeholder="Số điện thoại">
                        <textarea type="text" placeholder="Để lại lời nhắn cho chúng tôi" name="message" rows="4" lp-label="Lời nhắn"></textarea>
                        <input type="submit" class="form-control" value="ĐĂNG KÝ ĐỂ NHẬN TƯ VẤN">
                    </form>
                </div>                
            </div>
        </section>
    </div>
    <!--.wrapper-->
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="asset/js/custom.js"></script>
</body>

</html>