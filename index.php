    <?php include('header.php'); ?>
    <title>Home - Sabay News</title>
</head>
<body>
    <div class="container-fluid top-width">
        <div class="container top-logo">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xl-3 logo">
                        <img class="logo-img" src="./img/logo.png" alt="" />
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xl-9 top-ads">
                        <img class="main-ads" src="./img/top-main-ads.jpg" alt="" />
                    </div>
                </div>
        </div>
    </div>
    <div class="container-fluid top-menu">
        <div class="container">
            <?php include('nav-bar.php'); ?>
        </div>
    </div>
        <br>
    <div class="container-fluid">
        <div class="container">
            <?php include('main.php'); ?>
            <br>

        </div>
    </div>

    <div class="container-fluid footer-area">
        <div class="container">           
            <?php include('footer.php'); ?>
        </div>
    </div>
    
</body>

</html>