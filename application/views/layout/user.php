<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
    <head>

        <!-- Basic Page Needs
  ================================================== -->
        <meta charset="UTF-8">
        <title>Kemcaana</title>
        <meta name="description" content="Kemcaana - ">
        <meta name="keywords" content="" />
        <meta name="author" content="Kemcaana">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Mobile Specific Metas
  ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- Favicons
  ================================================== -->
        <link rel="shortcut icon" href="http://beta.absorb.com.pk/kemcaana/wp-content/themes/kemcaana/images/favicon.ico">
        <!-- CSS   ================================================== -->
        <meta name='robots' content='noindex,follow' />
        <link rel='stylesheet' id='main-style-css'  href='<?php echo base_url('/public/css/style.css?ver=3.8') ?>' type='text/css' media='all' />
        <link rel='stylesheet' id='dynamic_css-css'  href='<?php echo base_url('/public/css/theme.css?ver=3.8') ?>' type='text/css' media='all' />
        <link rel='stylesheet' href='<?php echo base_url('/public/css/flexslider.css?ver=3.8') ?>' type='text/css' media='all' />
        <link rel='stylesheet' href='<?php echo base_url('/public/css/global.css') ?>' type='text/css' media='all' />

        <script src="<?php echo base_url('/public/js/jquery-1.11.1.min.js') ?>"></script>
        <script src="<?php echo base_url('/public/js/common.js') ?>"></script>

    <body>
        <!-- Primary Page Layout
        ====Register============================================== -->
        <div id="wrap" class="colorskin-">
            <!-- Top Bar
       ================================================== -->
            <section class="top-bar">
                <div class="container">


                    <?php
                    //$user = $this->session->userdata('consultant');
                    if ($this->session->userdata('consultant')) {
                        ?> <div class="top-links rgtflot">
                            <h6><?php echo $this->session->userdata['consultant']->FirstName; ?></h6>
                            <a href="<?php echo base_url('index/logout'); ?>">Sign out</a></div>
                    <?php } else { ?>
                        <!--                        <div class="top-links rgtflot"><a href="javascript:void(0)" class="login-popup"> Login</a>|<a href="javascript:void(0)" class="register-popup">Register</a>-->
                        <div class="top-links rgtflot"><a href="<?php echo base_url('register/login') ?>" class=""> Login</a>|<a href="<?php echo base_url('register/index') ?>" class="">Register</a>
                        <?php } ?>    
                    </div>
                </div>
                <div id="register-box">
                    <span>Register as?</span>
                    <div class="display-block"><input type="radio" name="rdoRegister" class="rdoRegister" id="rdoCons" value="<?php echo base_url('register/consultant') ?>" checked>Consultant</div>
                    <div class="display-block"><input type="radio" name="rdoRegister" class="rdoRegister" id="rdoGrad" value="<?php echo base_url('register/graduate') ?>">Graduate</div>
                    <div class="display-block"><input type="button" name="btnRegister" id="btnRegister"data-url="" value="Register"></div>
                </div>
            </section>

            <div id="login-box" style="display: none; background-color: #737357;">
                <span><h3>Login Details</h3></span>
                <form action="<?php echo base_url('index/processconsultant') ?>" method="post">

                </form>
            </div>
            <!-- Header
      ================================================== -->
            <header id="header">
                <div  class="container">
                    <div class="col-md-5 col-sm-4">
                        <div class="logo"><a href="#">
                                <img src="<?php echo base_url('/public/images/Kemcaana-Logo.png') ?>" width="600" id="img-logo" alt="logo">
                            </a></div></div>
                    <nav id="nav-wrap" class="nav-wrap1 col-md-7 col-sm-8">
                        <div id="topsearch" class="row">
                            <div class="col-md-8 col-sm-8">
                                <div class="socailfollow">
                                    <a class="twitter" href="http://twitter.com/kemcaana" target="_blank"><i class="icomoon-twitter"></i></a>
                                    <a class="facebook" href="https://www.facebook.com/kemcaana" target="_blank"><i class="icomoon-facebook"></i></a>
                                    <a class="linkedin" href="#"><i class="icomoon-linkedin"></i></a>
                                    <a class="google" href="#"><i class="icomoon-google"></i></a>
                                    <a class="yahoo" href="https://groups.yahoo.com/neo/groups/kemcaana/info" target="_blank"><i class="icomoon-yahoo"></i></a>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-md-offset-1 col-sm-offset-1">

                            </div>
                        </div>
                        <ul id="nav">
                            <li><a href="#" data-description="">Home</a></li>
                            <?php if ($this->session->userdata('consultant')) { ?>
                            <li>
                                <a href="http://beta.absorb.com.pk/hope/" data-description="">Hope</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="<?php echo base_url('page/accomodations') ?>" data-description="">Accomodations</a></li>
                                    <li class="menu-item"><a href="<?php echo base_url('page/clinical') ?>" data-description="">Clinical Rotations and Externhips</a></li>
                                    <li class="menu-item"><a href="<?php echo base_url('page/rotations') ?>" data-description="">University Rotations</a></li>
                                    <li class="menu-item"><a href="<?php echo base_url('page/loan') ?>" data-description="">HOPE Loan Program</a></li>
                                    <li class="menu-item"><a href="<?php echo base_url('page/consenus') ?>" data-description="">HOPE Consenus Statements for USMLE Exams</a></li>
                                    <li class="menu-item"><a href="<?php echo base_url('page/visaissues') ?>" data-description="">Visa Issues</a></li>
                                    <li class="menu-item"><a href="<?php echo base_url('page/links') ?>" data-description="">Useful Links</a></li>
                                    <li class="menu-item"><a href="<?php echo base_url('page/sessions') ?>" data-description="">Student Club Skype Sessions</a></li>
                                    <li class="menu-item"><a href="<?php echo base_url('page/preparing') ?>" data-description="">Preparing for CS exams and residency interviews</a></li>
                                    <li class="menu-item"><a href="<?php echo base_url('page/research') ?>" data-description="">Research Opportunities</a></li>
                                </ul>
                            </li>
                            <?php } ?>
                            <li>
                                <a href="http://beta.absorb.com.pk/kemcaana/alumni/" data-description="">Alumni</a>
                                <ul class="sub-menu">
                                    <li class="menu-item submenux"><a href="http://beta.absorb.com.pk/kemcaana/alumni/membership/" data-description="">Membership</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="http://beta.absorb.com.pk/kemcaana/alumni/membership/membership-info/" data-description="">Membership Info</a></li>
                                            <li class="menu-item"><a href="http://beta.absorb.com.pk/kemcaana/alumni/membership/become-a-member/" data-description="">Become A Member</a></li>
                                            <li class="menu-item"><a href="http://beta.absorb.com.pk/kemcaana/alumni/membership/members-area/" data-description="">Members Area</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item"><a href="http://beta.absorb.com.pk/kemcaana/projects/document-credentials-verification-service/" data-description="">Document Verification Service</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="http://beta.absorb.com.pk/kemcaana/about/" data-description="">About us</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="http://beta.absorb.com.pk/kemcaana/about/objectives/" data-description="">Objectives</a></li>
                                    <li class="menu-item"><a href="http://beta.absorb.com.pk/kemcaana/about/history-of-kemcaana/" data-description="">History of KEMCAANA</a></li>
                                    <li class="menu-item"><a href="http://beta.absorb.com.pk/kemcaana/about/history-of-kemcu/" data-description="">History of KEMC(U)</a></li>
                                    <li class="menu-item"><a href="http://beta.absorb.com.pk/kemcaana/about/constitutions-and-bylaws/" data-description="">Constitutions and Bylaws</a></li>
                                    <li class="menu-item"><a href="http://beta.absorb.com.pk/kemcaana/about/contact-us/" data-description="">Contact Us</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="http://beta.absorb.com.pk/kemcaana/leadership/" data-description="">Leadership</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="http://beta.absorb.com.pk/kemcaana/leadership/office-bearers/" data-description="">Office Bearers</a></li>
                                    <li class="menu-item"><a href="http://beta.absorb.com.pk/kemcaana/leadership/councilors/" data-description="">Councilors</a></li>
                                    <li class="menu-item"><a href="http://beta.absorb.com.pk/kemcaana/leadership/board-of-trustees/" data-description="">Board of Trustees</a></li>
                                    <li class="menu-item"><a href="http://beta.absorb.com.pk/kemcaana/leadership/committees/" data-description="">Committees</a></li>
                                </ul>
                            </li>
                            <li><a href="http://beta.absorb.com.pk/kemcaana/projects/" data-description="">Projects</a></li>
                            <li><a href="http://beta.absorb.com.pk/kemcaana/president-corner/" data-description="">Presidents Corner</a></li>
                        </ul>
                    </nav>
                    <!-- /nav-wrap -->
                </div>
            </header>
            <!-- end-header -->

            <?php echo $content; ?>

            <!-- Footer Start
       ================================================== -->
            <footer id="footer" >
                <section class="container footer-in">
                    <div class="col-md-4"><div class="widget">
                            <h5 class="subtitle">KEMCAANA</h5>
                            <ul>
                                <li><a href="http://beta.absorb.com.pk/kemcaana/projects/kemcaana-young-investigator-award/">Young Investigator Award</a></li>
                                <li><a href="http://beta.absorb.com.pk/kemcaana/publications/">Publications</a></li>
                                <li><a href="http://beta.absorb.com.pk/kemcaana/kemcaana-appna-doctor-house/">KEMCAANA / APPNA Doctor House</a></li>
                                <li><a href="http://beta.absorb.com.pk/kemcaana/projects/document-credentials-verification-service/">Document Verification</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="widget">
                            <h5 class="subtitle">Important Links</h5>
                            <ul>
                                <li><a href="http://kemu.edu.pk/" target="_blank">King Edward Medical University</a></li>
                                <li><a href="http://www.appna.org/" target="_blank">APPNA</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="widget">
                            <h5 class="subtitle">Email Newsletter</h5>
                            <div>
                                <form id="form-wysija-2" method="post" >
                                    Subscribe to our newsletter and join our 1 subscribers.
                                    <p>
                                        <input type="text" title="Email" placeholder="Email" value="" />
                                    </p>
                                    <input type="submit" value="Subscribe!" />
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end-footer-in -->
                <section class="footbot">
                    <div class="container">
                        <div class="col-md-6">
                            <!-- footer-navigation /end -->
                            <div class="footer-navi">
                                Ã‚Â© Copyright 2014 KEMCAANA. All rights reserved.</div>
                        </div>
                        <div class="col-md-6">
                            <!-- footer-navigation /end -->
                            <img src="<?php echo base_url('/public/images/ab.png') ?>" width="65" alt="">
                        </div>
                    </div>
                </section>    <!-- end-footbot -->
            </footer>
            <!-- end-footer -->
        </div>
        <!-- end-wrap -->
        <!-- End Document
        ================================================== -->
        <script type="text/javascript" src="<?php echo base_url('/public/js/jquery.min.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('/public/js/jquery.flexslider.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('/public/js/script.js') ?>"></script>
    </body>
</html>