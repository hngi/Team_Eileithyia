<section class="b-pageHeader">
            <div class="container">
                <h1 class=" wow zoomInLeft" data-wow-delay="0.5s">Registration / Login</h1>
                
            </div>
        </section><!--b-pageHeader-->

        <div class="b-breadCumbs s-shadow wow zoomInUp" data-wow-delay="0.5s">
            <div class="container">
                <a href="<?= base_url() ?>" class="b-breadCumbs__page">Home</a><span class="fa fa-angle-right"></span><a href="#" class="b-breadCumbs__page m-active">Registration / Login</a>
            </div>
        </div><!--b-breadCumbs-->

       <!--  <div class="b-map wow zoomInUp" data-wow-delay="0.5s">
            <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=W-Xpe7AurTrL7tXe8sROgCD2phwBIWEj&amp;width=100%&amp;height=400&amp;lang=en_US&amp;sourceType=constructor"></script>
        </div>
        <!--jjj-->

        <section class="b-contacts s-shadow">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="b-contacts__form">
                            <?php if (isset($_SESSION["sucess"])) { ?>
                            <?php echo $_SESSION["sucess"]; ?>
                            <?php } ?>

                            <?php if (isset($_SESSION['eror'])) { ?>
                            <?php echo $_SESSION['eror']; ?>
                            <?php } ?>

                            <?php if (isset($_SESSION['eros'])) { ?>
                            <?php echo $_SESSION['eros']; ?>
                            <?php } ?>
                            <header class="b-contacts__form-header s-lineDownLeft wow zoomInUp" data-wow-delay="0.5s">
                                <h2 class="s-titleDet">Login</h2> 
                            </header>
                            <p class=" wow zoomInUp" data-wow-delay="0.5s">Enter Your Login details Correctly...</p>
                            <div id="success"></div>
                            <form method="POST" action=""  class="s-form wow zoomInUp" data-wow-delay="0.5s">
        
                        
                        <input type="email" required="" placeholder="EMAIL ADDRESS " value="" name="email"  />
                        <input type="password" placeholder="Password" required="" value="" name="passwd" id="user-name" />
                        
                        <a style="text-decoration: underline" href="<?= base_url() ?>users/forgot_password">Forgot Password?</a><br/>
              
                                
                                <button type="submit" class="btn m-btn" name="login">LOGIN NOW<span class="fa fa-angle-right"></span></button>
                            </form>
                        </div>
                    </div>

                    <div class="col-xs-2"></div>


                    
            </div>
        </section>