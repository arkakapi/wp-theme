<?php
$issues = [
	1 => [
		'title'   => 'Issue 1-2 (Combined)',
		'content' => '	<ul>
                            <li>Set up your VPN with My Connection</li>
                            <li>Introduction to Cryptology</li>
                            <li>Chain of Independence: Blockchain</li>
                            <li>Revolutionary Blockchain Technology: Is it safe?</li>
                            <li>Thoughts on Meltdown and Spectre Vulnerabilities</li>
                            <li>Vulnerabilities of Bluetooth: Past and Future</li>
                            <li>Why you shouldn’t store sensitive data in javascript files</li>
                            <li>The art of Data Hiding: STEGANOGRAPHY</li>
                            <li>Acting on the Sly: Overcome Obstacles with DNS Tunnelling</li>
                            <li>Possession is Nine-Tenths of the Law: User Agreements</li>
                            <li>The King’s Naked: Constraints of Blockchain</li>
                            <li>Signal Intelligence: Methods of Signal Listening and Analysis</li>
                            <li>How to be a shareholder of Google: Double your income with Google Adsense</li>
                            <li>Anonymizing Internet from the Router with OpenWrt and TOR</li>
                        </ul>',
		'price'   => '<ul>
						<li><b>Leanpub:</b> <a href="https://leanpub.com/arkakapimagazine" target="_blank">https://leanpub.com/arkakapimagazine</a></li>
                        <li><b>Patreon:</b> <a href="https://www.patreon.com/arkakapimag" target="_blank">https://www.patreon.com/arkakapimag</a></li>
					</ul>',
	]
]
?>

<!-- Home Section -->
<section class="home-section bg-dark-alfa-30 parallax-2" data-background="<?php echo get_template_directory_uri(); ?>/images/background1-2.jpg" id="home">
    <div class="js-height-full container">

        <!-- Hero Content -->
        <div class="home-content">
            <div class="home-text">

                <h1 class="hs-line-12 no-transp font-alt mb-50 mb-xs-30">
                    ARKA KAPI
                </h1>
                <h2 class="hs-line-8 font-alt mb-50 mb-xs-30">
                    Bimonthly CYBER SECURITY MAGAZINE
                </h2>

                <!--div class="local-scroll">
					<a href="#about" class="btn btn-mod btn-border-w btn-medium btn-round hidden-xs">See More</a>
				</div-->

            </div>
        </div>
        <!-- End Hero Content -->

        <!-- Scroll Down -->
        <div class="local-scroll">
            <a href="#about" class="scroll-down"><i class="fa fa-angle-down scroll-down-icon"></i></a>
        </div>
        <!-- End Scroll Down -->

    </div>
</section>
<!-- End Home Section -->

<!-- About Section -->
<section class="page-section" id="about">
    <div class="container relative">

        <h2 class="section-title font-alt align-left mb-70 mb-sm-40">
            ABOUT US
        </h2>

        <div class="section-text mb-50 mb-sm-20">
            <div class="row">

                <div class="col-md-4">
                    <blockquote>
                        <p>
                            Imagination is more important than knowledge. For knowledge is limited, whereas imagination embraces the entire world, stimulating progress, giving birth to evolution.
                        </p>
                        <footer>
                            Albert Einstein
                        </footer>
                    </blockquote>
                </div>

                <div class="col-md-8 col-sm-12 mb-sm-100 mb-xs-60">
                    <ul>
                        <li>Editor in Chief: Ziyahan Albeniz - ziyahan@arkakapimag.com</li>
                        <li>Editorial Operations Manager: Ümran Yıldırımkaya - umran@arkakapimag.com</li>
                        <li>Chief Business Officer: Oğuz Aydınyılmaz - oguz@arkakapimag.com</li>
                        <li>Publishing Coordinator: Şahin Solmaz - sahin@arkakapimag.com</li>
                        <li>Legal Advisor: Mehmet Pehlivan - mehmet@arkakapimag.com</li>
                        <li>Translators: Serdar Savaş, Emre İyidoğan, Enes Özen, Zekvan Arslan, d1scharg3d</li>
                        <li>Advertisement and Subscription: contact@arkakapimag.com</li>
                        <li>HQ: Hobyar Mah. Cemal Nadir Sok. No:24/178 Cağaloğlu - İstanbul/Turkey. Tel: +90 0212 514 68 61</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Section -->

<!-- About Section -->
<section class="page-section" id="issues">
    <div class="container relative">

        <h2 class="section-title font-alt align-left mb-70 mb-sm-40">
            ISSUES
        </h2>

        <div class="section-text mb-50 mb-sm-20">
            <div class="row">

                <div class="col-md-12 alert success" style="margin-bottom: 50px;">
                    <a href="#subscription" class="btn btn-mod btn-w btn-medium btn-round">PLEASE CLICK FOR ANNUAL SUBSCRIPTION.</a>
                </div>

                <ul class="nav nav-tabs tpl-tabs animate issues-tab" style="margin-bottom: 20px;">
					<?php
					foreach ( $issues as $key => $val ) {
						$class = $key == count( $issues ) ? "active" : "";
						echo '<li class="' . $class . '">
                                      <a href="#issue' . $key . '" data-toggle="tab">Issue ' . $key . '</a>
                                  </li>';
					}
					?>
                </ul>

                <div class="tab-content tpl-tabs-cont section-text">
					<?php
					foreach ( $issues as $key => $val ) {
						$class = $key == count( $issues ) ? "in active" : "";
						?>
                        <div class="tab-pane fade <?php echo $class; ?>" id="issue<?php echo $key; ?>">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/kapaklar/sayi<?php echo $key; ?>.jpg" alt="">
                                </div>
                                <div class="col-md-8 col-sm-12 mb-sm-100 mb-xs-60">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <ul class="nav nav-tabs tpl-tabs animate">
                                                <li class="active">
                                                    <a href="#issue<?php echo $key; ?>content" data-toggle="tab">Content</a>
                                                </li>
                                                <li>
                                                    <a href="#issue<?php echo $key; ?>buy" data-toggle="tab">Buy</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content tpl-tabs-cont section-text">
                                                <div class="tab-pane fade in active" id="issue<?php echo $key; ?>content">
													<?php echo $val['content']; ?>
                                                </div>
                                                <div class="tab-pane fade" id="issue<?php echo $key; ?>buy">
													<?php echo $val['price']; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						<?php
					}
					?>
                </div>


            </div>
        </div>
    </div>
</section>
<!-- End About Section -->

<!-- Divider -->
<hr class="mt-0 mb-0 "/>
<!-- End Divider -->

<!-- Subscription Section -->
<section class="page-section" id="subscription">
    <div class="container relative">
        <h2 class="section-title font-alt mb-70 mb-sm-40">
            SUBSCRIPTION
        </h2>
    </div>
</section>
<!-- End Subscription Section -->

<!-- Call Action Section -->
<section class="page-section pt-0 pb-0 banner-section bg-dark" data-background="<?php echo get_template_directory_uri(); ?>/images/background2.jpg">
    <div class="container relative">

        <div class="row">

            <div class="col-sm-6">

                <div class="mt-140 mt-lg-80 mb-140 mb-lg-80">
                    <div class="banner-content">
                        <h3 class="banner-heading font-alt">SUBSCRIBE</h3>
                        <div class="banner-decription">
                            You can access Arka Kapı Magazine digitally in PDF format every 2 months by subscribing to Arka Kapı Magazine. As a digital subscriber, you can help prevent more trees from being cut and leave a healthier world for the next generation.
                        </div>
                        <div class="local-scroll subscribe-buttons">
                            <a href="#" class="btn btn-mod btn-w btn-medium btn-round" onclick="alert('Coming soon...'); return false;">USE ETHEREUM</a>
                            <a href="#" class="btn btn-mod btn-w btn-medium btn-round" onclick="alert('Coming soon...'); return false;">USE CREDIT CART</a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-sm-6 banner-image wow fadeInUp">
                <img src="<?php echo get_template_directory_uri(); ?>/images/promo-1.png" alt=""/>
            </div>

        </div>

    </div>
</section>
<!-- End Call Action Section -->

<!-- Divider -->
<hr class="mt-0 mb-0 "/>
<!-- End Divider -->

<!-- Contact Section -->
<section class="page-section" id="contact">
    <div class="container relative">

        <h2 class="section-title font-alt mb-70 mb-sm-40">
            CONTACT
        </h2>

        <div class="row mb-60 mb-xs-40">

            <div class="col-md-8 col-md-offset-2">
                <div class="row">

                    <!-- Phone -->
                    <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                        <div class="contact-item">
                            <div class="ci-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="ci-title font-alt">
                                TELEPHONE
                            </div>
                            <div class="ci-text">
                                +90 212 514 68 61
                            </div>
                        </div>
                    </div>
                    <!-- End Phone -->

                    <!-- Address -->
                    <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                        <div class="contact-item">
                            <div class="ci-icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="ci-title font-alt">
                                ADDRESS
                            </div>
                            <div class="ci-text">
                                Hobyar Mah. Cemal Nadir Sok. No:24/178 Cağaloğlu İstanbul/Turkey
                            </div>
                        </div>
                    </div>
                    <!-- End Address -->

                    <!-- Email -->
                    <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                        <div class="contact-item">
                            <div class="ci-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="ci-title font-alt">
                                E-MAIL
                            </div>
                            <div class="ci-text">
                                <a href="mailto:contact@arkakapimag.com">contact@arkakapimag.com</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Email -->

                </div>
            </div>

        </div>

        <!-- Contact Form -->
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <form class="form contact-form" id="contact_form">
                    <div class="clearfix">

                        <div class="cf-left-col">

                            <!-- Name -->
                            <div class="form-group">
                                <input type="text" name="name" id="name" class="input-md round form-control"
                                       placeholder="NAME SURNAME" pattern=".{3,100}" required>
                            </div>

                            <!-- Email -->
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="input-md round form-control"
                                       placeholder="E-MAIL" pattern=".{5,100}" required>
                            </div>

                        </div>

                        <div class="cf-right-col">

                            <!-- Message -->
                            <div class="form-group">
                                    <textarea name="message" id="message" class="input-md round form-control"
                                              style="height: 84px;" placeholder="MESSAGE"></textarea>
                            </div>

                        </div>

                    </div>

                    <div class="clearfix">

                        <div class="cf-left-col">

                            <!-- Inform Tip -->
                            <div class="form-tip pt-20">
                                <i class="fa fa-info-circle"></i> ALL FIELDS ARE REQUIRED
                            </div>

                        </div>

                        <div class="cf-right-col">

                            <!-- Send Button -->
                            <div class="align-right pt-10">
                                <button class="submit_btn btn btn-mod btn-medium btn-round" id="submit_btn">SEND
                                </button>
                            </div>

                        </div>

                    </div>


                    <div id="result"></div>
                </form>

            </div>
        </div>
        <!-- End Contact Form -->

    </div>
</section>
<!-- End Contact Section -->