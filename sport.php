<?php include('header.php'); ?>
    <title>កីឡា - Sabay News</title>
</head>
<body>
    <div class="container-fluid top-width">
        <?php include('top-width.php'); ?>
    </div>
    <div class="container-fluid top-menu">
        <div class="container">
            <?php include('nav-bar.php'); ?>
        </div>
    </div>

    <div class="container">
    <div class="page-details">
        <div class="row">
            <!------------------Left Content------------------>
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 left-content top-title">
                <div class="top-category">
                    <div id="sport">
                        កីឡា &gt;
                    </div>
                    <div class="top-cate-line" style="background-color: #4390F8;"></div>
                </div>
            </div>

            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 left-content">
                <div class="content">
                    <div class="row">
                        <?php
                            for($item=1; $item<=2; $item++){
                                ?>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="top-list-content">
                                            <div class="top-list-img">
                                                <img src="<?php echo "./assets/img/sport/sport".$item.".jpg";?>" alt="">
                                            </div>
                                            <div class="post-title">                                         
                                            តស៊ូ​ច្រើន​ឆ្នាំ តាំង​ពី​នៅ​ជ្រក​ជាមួយ​បង ឥឡូវ​នាយ គ្រឿន សល់​ទ្រព្យ​រាប់​សិប​ម៉ឺន​ ជា​ញើស​ឈាម​សិល្បៈ
                                            </div>
                                        </div>
                                    </div>
                                <?php
                            }
                        ?>
                    </div>
                    <div class="row">
                        <?php
                            for($item=1;$item<=15;$item++){
                                ?>

                                    <a href="./details.php" class="col-xl-12 col-lg-12 col-md-6 col-sm-6 col-6 post-list">
                                            <div class="row">
                                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">
                                                <div class="post-list-img">
                                                    <img src="<?php echo "./assets/img/sport/sport2.jpg";?>" alt="" style="width:100%;">
                                                </div>
                                                    
                                                </div>
                                                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                                                    <div class="post-title">                                         
                                                    តស៊ូ​ច្រើន​ឆ្នាំ តាំង​ពី​នៅ​ជ្រក​ជាមួយ​បង ឥឡូវ​នាយ គ្រឿន សល់​ទ្រព្យ​រាប់​សិប​ម៉ឺន​ ជា​ញើស​ឈាម​សិល្បៈ
                                                    </div>
                                                    <div class="post-time">
                                                        ម្សិលមិញ ម៉ោង 9:53
                                                    </div>
                                                    <div class="post-hr-line"></div>
                                                    <div class="post-description">                                           
                                                    នាយ គ្រឿន ត្រូវ​បាន​គេ​ដឹង​ថា ពេល​ចូល​ប្រឡូក​សិល្បៈ​ដំបូង គឺ​ជ្រក​ក្រោម​ដំបូល​ផ្ទះ​នាយ...                   
                                                    </div>
                                                </div>
                                            </div>                                   
                                        </a>   
                                <?php
                            }

                        ?>   
                    </div> 
                </div>
                
            </div>
            <!------------------Right Content------------------>
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 right-content">
                <img
                    class="right-content-img"
                    src="./assets/img/ads/right-content-ads-1.gif"
                    alt="">
                <div class="youtube-embet">
                    <iframe
                        width="100%"
                        height="250"
                        src="https://www.youtube.com/embed/zk0ZyZ-5ufc"
                        frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen="allowfullscreen"></iframe>
                </div>

                <div class="right-hot-news">
                    <div class="hot-news-title">
                        <h5>អត្ថបទ​ពេញនិយម</h5>
                        <div class="hot-news-hr"></div>
                    </div>
                    <?php
                        for($hot_new = 1; $hot_new<= 5; $hot_new++){
                            ?>
                                <div class="hot-news-item">
                                    <div class="hot-news-media">
                                        <img src="./assets/img/small/extra_small-1.jpg" alt="">
                                    </div>
                                    <a href="./details.php" class="hot-news-title">
                                        Di Maria៖ ខ្ញុំ​លេង​ជាមួយ Messi, Ronaldo, Ibra និង Rooney
                                        តែ​កីឡាករ​នេះ​ល្អ​ជាង​គេ
                                    </a>
                                </div>
                            <?php
                        }
                    ?>

                </div>

                <img class="right-content-img" src="./assets/img/ads/right-content-ads-2.jpg" alt="">
                
                <div class="right-new-post">
                    <div class="new-post-title">
                        <h5>អត្ថបទ​ថ្មី</h5>
                        <div class="new-post-hr"></div>
                    </div>
                    <?php
                    
                        for($new_post = 1; $new_post<=5; $new_post++){
                            ?>
                                <div class="new-post-item">
                                    <div class="new-post-media">
                                        <img src="./assets/img/small/extra_small-1.jpg" alt="">
                                    </div>
                                    <a href="./details.php" class="new-post-title">
                                        Di Maria៖ ខ្ញុំ​លេង​ជាមួយ Messi, Ronaldo, Ibra និង Rooney
                                        តែ​កីឡាករ​នេះ​ល្អ​ជាង​គេ
                                    </a>
                                </div>
                        <?php
                        }
                    ?>

                </div>

                <div class="youtube-embet">
                    <iframe
                        width="100%"
                        height="250"
                        src="https://www.youtube.com/embed/zk0ZyZ-5ufc"
                        frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen="allowfullscreen"></iframe>
                </div>

            </div>
            <!------------------End Right Content------------------>

        </div>
    </div>
</div>

    <div class="container-fluid footer">
            <?php include('footer2.php'); ?>
    </div>
</body>
</html>