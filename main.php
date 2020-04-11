<!-- Slide Area  -->
<div class="row slide-area">
    <div class="col-md-9">
        <div class="row">
            <?php
                for($item = 1; $item<=4; $item++){
                    if(($item % 2) != 0){
                    ?> 
                        <a href="details.php" target="_blank" class="col-md-7 slide">
                            <div class="slide-category slide-technology">បច្ចេកវិទ្យា</div>
                            <img src="<?php echo "./assets/img/technology/technology".$item.".jpg"?>" alt=""/>
                            <div class="slide-hover"></div>
                            <div class="slide-discription">
                                <h4 class="main-slide-title">រូបភាពថ្មីនៃ Ford F-150 Raptor ស៊េរីឆ្នាំ ២០២១</h4>
                                <span class="slide-title-discription">រថយន្ត​ Ford F-150 និង Ford F-150 Raptor ដែល​មាន​ការ​កែប្រែ​រូបរាង​ថ្មី....</span>
                            </div>
                            <div class="slide-upload-date">
                                សុក្រ,​១៨ មករា ២០២០ ៨ៈ០០ ព្រឹក
                            </div>
                        </a>
                    <?php
                    }else{
                        ?>
                            <a href="details.php" target="_blank" class="col-md-5 slide">
                                <div class="slide-category slide-sport">កីឡា</div>
                                <img src="<?php echo "./assets/img/sport/sport".$item.".jpg"?>" alt=""/>
                                <div class="slide-hover"></div>
                                <div class="slide-discription">
                                    <h4 class="main-slide-title">ឈ្នះ​រហូត​ពេក Klopp ឡើង​ភ្លេច​ថា Liverpool ដាច់​ក្រុម​លេខ ២ ជិត​ ២០ពិន្ទុ ​</h4>
                                    <span class="slide-title-discription">លោក Jurgen Klopp...</span>
                                </div>
                                <div class="slide-upload-date">
                                    សុក្រ,​១៨ មករា ២០២០ ៨ៈ០០ ព្រឹក
                                </div>
                            </a>
                        <?php
                    }
                }
            ?>
        </div>
    </div>
    <div class="col-md-3 ads-area">
        <div class="ads ads1">
            <img src="./assets/img/slide-ads/slide-ads1.jpg" alt="">
        </div>
        <div class="ads ads2">
            <img src="./assets/img/slide-ads/slide-ads2.jpg" alt="">
        </div>
    </div>
</div>

<!-- End Slide Area -->

<!-- Video -->
<div class="category-area">
    <div class="cate-title">
        <div class="category cate-video">
            <a href="./video-clip.php" class="category-item">វីដេអូ &gt;</a>
        </div>
        <div class="hl hl-video"></div>
    </div>
    <br>
    <div class="cate-item video-item">
        <div class="row">
            <?php
                for($item = 1;$item<=3; $item++){
                    ?>
                        <a href="./details.php" class="col-md-4 box box1">
                            <img src="<?php echo "./assets/img/video/video-md4-".$item.".jpg";?>" class="cate-video-img" alt="" />
                            <div class="title-item">តានតឹង​ណាស់​ទម្រាំ​រក​ឃើញ​អ្នក​ជើងឯក​មណ្ឌល​ប៉ោយប៉ែត​ រវាង​ Bun Koy FC​ និង​ Family Sisophon (A)​</div>       
                        </a>
                    <?php
                }
            ?>
        </div>
        <div class="row">
            <div class="col-md-9">
                    <?php 
                        for($rows = 1; $rows<=2;$rows++){
                            ?>
                            <div class="row">
                                <?php
                                    for($item = 1;$item<=4; $item++){
                                        ?>
                                            <a href="./details.php" class="col-md-3 small-item">
                                                <img src="<?php echo "./assets/img/video/video-md3-".$item.".jpg";?>" alt="">
                                                <div class="title-item">Corolla ឆ្នាំ​ ១៩៩៨ បុក​ Corolla ឆ្នាំ​ ២០១៥ លទ្ធផល​ម៉េច​វិញ?</div>                
                                            </a>
                                        <?php
                                    }
                                ?>                           
                            </div>
                        <?php
                        }
                    ?>
            </div>
            <div class="col-md-3 video-ads-area">
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FSabayNewsOfficial%2F&tabs=Profile&width=300px&height=60px&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=true&appId"
                    width="100%" height="70px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"> class="video-ads"
                </iframe>
                <div class="gif">
                    <?php
                        for($item=1; $item<=3; $item++){
                            ?>
                                <img src="<?php echo "./assets/img/video/video-ads-".$item.".gif";?>" alt="" width="100%" class="video-gif-ads video-ads" />
                            <?php
                        }
                    ?>
                </div>                     
        </div>
    </div>
</div>
<br><br>
<!-- កម្សាន្ត -->
<div class="category-area">
    <div class="cate-title">
        <div class="category cate-entertainment">
            <a href="./entertainment.php" class="category-item">កម្សាន្ត &gt;</a>
        </div>
        <div class="hl hl-entertainment"></div>
        <br>
        <div class="cate-item entertainment-item">
            <div class="row">
                <a href="./details.php" class="col-md-4 left-item">
                    <div class="left-img">
                    <img src="./assets/img/entertainment/entertainment1.jpg" alt="">
                    </div>
                    <div class="left-title hl-entertainment">
                        ភាពយន្ត​ខ្មែរ​មួយ​រឿង លើក​ពី​ការ​ប្រើ​ប្រាស់​ពាក្យ​ពេចន៍​លើ Facebook ត្រៀម​ឡើង​រោង​កុន​ហើយ​
                    </div>
                </a>
                <div class="col-md-8">
                    <?php 
                        for($rows = 1; $rows<=2;$rows++){
                            ?>
                            <div class="row">
                                <?php
                                    for($item = 1;$item<=4; $item++){
                                        ?>
                                            <a href="./details.php" class="col-md-3 small-item">
                                                <img src="<?php echo "./assets/img/entertainment/entertainment".$item.".jpg";?>" alt="">
                                                <div class="title-item">Corolla ឆ្នាំ​ ១៩៩៨ បុក​ Corolla ឆ្នាំ​ ២០១៥ លទ្ធផល​ម៉េច​វិញ?</div>                
                                            </a>
                                        <?php
                                    }
                                ?>                           
                            </div>
                        <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- បច្ចេកវិទ្យា -->
<div class="category-area">
    <div class="cate-title">
        <div class="category cate-technology">
            <a href="./technology.php" class="category-item">បច្ចេកវិទ្យា &gt;</a>
        </div>
        <div class="hl hl-technology"></div>
        <br>
        <div class="cate-item technology-item">
            <div class="row">
                <a href="./details.php" class="col-md-4 left-item">
                    <div class="left-img">
                    <img src="./assets/img/technology/technology1.jpg" alt="">
                    </div>
                    <div class="left-title hl-technology">
                        ភាពយន្ត​ខ្មែរ​មួយ​រឿង លើក​ពី​ការ​ប្រើ​ប្រាស់​ពាក្យ​ពេចន៍​លើ Facebook ត្រៀម​ឡើង​រោង​កុន​ហើយ​
                    </div>
                </a>
                <div class="col-md-8">
                    <?php 
                        for($rows = 1; $rows<=2;$rows++){
                            ?>
                            <div class="row">
                                <?php
                                    for($item = 1;$item<=4; $item++){
                                        ?>
                                            <a href="./details.php" class="col-md-3 small-item">
                                                <img src="<?php echo "./assets/img/technology/technology".$item.".jpg";?>" alt="">
                                                <div class="title-item">Corolla ឆ្នាំ​ ១៩៩៨ បុក​ Corolla ឆ្នាំ​ ២០១៥ លទ្ធផល​ម៉េច​វិញ?</div>                
                                            </a>
                                        <?php
                                    }
                                ?>                           
                            </div>
                        <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- ជីវិត និងសង្គម -->
<div class="category-area">
    <div class="cate-title">
        <div class="category cate-life">
            <a href="./life.php" class="category-item">ជីវិត និងសង្គម &gt;</a>
        </div>
        <div class="hl hl-life"></div>
        <br>
        <div class="cate-item life-item">
            <div class="row">
                <a href="./details.php" class="col-md-4 left-item">
                    <div class="left-img">
                    <img src="./assets/img/life/life1.jpg" alt="">
                    </div>
                    <div class="left-title hl-life">
                        ភាពយន្ត​ខ្មែរ​មួយ​រឿង លើក​ពី​ការ​ប្រើ​ប្រាស់​ពាក្យ​ពេចន៍​លើ Facebook ត្រៀម​ឡើង​រោង​កុន​ហើយ​
                    </div>
                </a>
                <div class="col-md-8">
                    <?php 
                        for($rows = 1; $rows<=2;$rows++){
                            ?>
                            <div class="row">
                                <?php
                                    for($item = 1;$item<=4; $item++){
                                        ?>
                                            <a href="./details.php" class="col-md-3 small-item">
                                                <img src="<?php echo "./assets/img/life/life".$item.".jpg";?>" alt="">
                                                <div class="title-item">Corolla ឆ្នាំ​ ១៩៩៨ បុក​ Corolla ឆ្នាំ​ ២០១៥ លទ្ធផល​ម៉េច​វិញ?</div>                
                                            </a>
                                        <?php
                                    }
                                ?>                           
                            </div>
                        <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- កីឡា -->
<div class="category-area">
    <div class="cate-title">
        <div class="category cate-sport">
            <a href="./sport.php" class="category-item">​ កីឡា​ &gt;</a>
        </div>
        <div class="hl hl-sport"></div>
        <br>
        <div class="cate-item sport-item">
            <div class="row">
                <a href="./details.php" class="col-md-4 left-item">
                    <div class="left-img">
                    <img src="./assets/img/sport/sport1.jpg" alt="">
                    </div>
                    <div class="left-title hl-sport">
                        ភាពយន្ត​ខ្មែរ​មួយ​រឿង លើក​ពី​ការ​ប្រើ​ប្រាស់​ពាក្យ​ពេចន៍​លើ Facebook ត្រៀម​ឡើង​រោង​កុន​ហើយ​
                    </div>
                </a>
                <div class="col-md-8">
                    <?php 
                        for($rows = 1; $rows<=2;$rows++){
                            ?>
                            <div class="row">
                                <?php
                                    for($item = 1;$item<=4; $item++){
                                        ?>
                                            <a href="./details.php" class="col-md-3 small-item">
                                                <img src="<?php echo "./assets/img/sport/sport".$item.".jpg";?>" alt="">
                                                <div class="title-item">Corolla ឆ្នាំ​ ១៩៩៨ បុក​ Corolla ឆ្នាំ​ ២០១៥ លទ្ធផល​ម៉េច​វិញ?</div>                
                                            </a>
                                        <?php
                                    }
                                ?>                           
                            </div>
                        <?php
                        }
                    ?>
                </div>

            </div>
        </div>
    </div>
    
</div>