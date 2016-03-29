<?php $this->inc('elements/header.php');?>

<div class="slider">
                <div class="slider_cont">
                    <div class="separater_hd"></div>
                    <div class="slider_image">
                        <img src="<?php echo $this->getThemePath();?>/assets/img/Slider.png">
                        <ul class="bullets">
                            <li><a href="#" class="active">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                        </ul>
                        <div class="clear"></div>
                    </div>

                    <h1>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</h1>
                </div>
                <div class="clear"></div>
            </div>

            <div class="container_12">

                <div class="grid_4 logic">
                    <h2>Perfect Logic</h2>
                    <p class="desc">All you want your website to do</p>

                    <div class="img">
                        <img src="<?php echo $this->getThemePath();?>/assets/img/img1.jpg">
                    </div>

                    <p class="info">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>

                    <div class="more_div">
                        <a href="#" class="more">Learn More</a>
                    </div>
                    <div class="clear"></div>

                </div>


                <div class="grid_4 solution">
                    <h2>Complete solution</h2>
                    <p class="desc">A tool anything and everything you can think</p>

                    <div class="img">
                        <img src="<?php echo $this->getThemePath();?>/assets/img/img2.jpg">
                    </div>

                    <p class="info">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>

                    <div class="more_div">
                        <a href="#" class="more">Learn More</a>
                    </div>
                    <div class="clear"></div>

                </div>


                <div class="grid_4 culture">
                    <h2>uber cultre</h2>
                    <p class="desc">Fresh. Modern and ready for future</p>

                    <div class="img">
                        <img src="<?php echo $this->getThemePath();?>/assets/img/img3.jpg">
                    </div><!-- END OF IMG DIV -->

                    <p class="info">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>

                    <div class="more_div">
                        <a href="#" class="more">Learn More</a>
                    </div>
                    <div class="clear"></div>

                </div>

                <div class="clear"></div>
                <div class="sep"></div>
                <div class="grid_4 social_con">
                    <h3>Socail Connections</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>

                    <div class="social">
                        <ul>
                            <li><a href="#" class="rss">rss</a></li>
                            <li><a href="#" class="fb">facebook</a></li>
                            <li><a href="#" class="li">linkedin</a></li>
                            <li><a href="#" class="yt">youtube</a></li>
                            <li><a href="#" class="tw">twitter</a></li>
                        </ul>
                    </div>

                    <h3>Newsletter</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>

                    <form action="#" method="post">
                        <input type="email" name="email" placeholder="your email adress">

                        <input type="submit" value="Subscribe">
                    </form>
                </div>

                <div class="grid_4 contact">
                    <h3>Contact</h3>

                    <form action="#" method="post">

                        <input type="text" name="name" placeholder="your name">
                        <input type="email" name="email" placeholder="your email adress">

                        <textarea name="message" placeholder="message"></textarea>

                        <input type="submit" value="Send it">

                    </form>

                </div>

                <div class="grid_4 news">
                    <h3>News Updates</h3>

                    <ul>
                        <li>
                            <a href="#"><img src="<?php echo $this->getThemePath();?>/assets/img/news_1.png" alt="1st News"  title="1st News Title"/></a>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                            <div class="clear"></div>
                        </li>
                        <li>
                            <a href="#"><img src="<?php echo $this->getThemePath();?>/assets/img/news_2.png" alt="2nd News"  title="2nd News Title"/></a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna.</p>
                            <div class="clear"></div>
                        </li>
                        <li>
                            <a href="#"><img src="<?php echo $this->getThemePath();?>/assets/img/news_3.png" alt="3rd News"  title="3rd News Title"/></a>
                            <p>Vestibulum erat wisi, condimentum sed, commodo vitae</p>
                            <div class="clear"></div>
                        </li>
                    </ul>

                    <a href="#" class="blog">Visit our blog</a>
                </div>
            </div>
<?php $this->inc('elements/footer.php');?>