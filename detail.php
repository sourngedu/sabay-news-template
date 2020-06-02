<?php include('header.php'); ?>

<style>
    .single-left-content {
        width: calc(100% - 325px);
        min-height: 300px;
        float: left;
        padding: 0;
    }

    .white-bg {
        background: #fff;
        box-shadow: 1px 2px 2px 1px rgba(0,0,0,.2);
    }
    .ad-wrapper, .ads-intext, .block-bottom-ad {
        background-color: #fff;
        position: relative;
    }
</style>
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
                <div class="row">
                    <div class="col-md-9">
                        <?php include_once('includes/page_detail.php'); ?>
                    </div>

                    <div class="col-md-3">
                        <h1>Right Sidebar</h1>
                    
                    </div>
                </div>
        </div>
    </div>

    <div class="container-fluid footer-area">
        <div class="container">           
            <?php include('footer.php'); ?>
        </div>
    </div>
    
</body>

</html>