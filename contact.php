<?php include('head.php'); include('menu.php');?>
<!---breadcrumb---->
 <div class="breadcrumb p-relative" style="background-image:url(assets/images/breadcrumb/Contact-Us.jpg);">
                    <div class="container">
					<div class="breadcrumb-wrap">
					<h6>Contact Us</h6>
					<ul class="ul-list">
					<li><a href="index.php">Home</a></li>
					<li><a href="">>></a></li>
					<li><a href="">Contact Us</a></li>
					</ul>
					
					
  </div></div>
</div>
  <!-- hero area start -->
                <div class="tp-contact-us-ptb p-relative">
                    <div class="tp-career-shape-1">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="123" height="130" viewBox="0 0 123 130" fill="none">
                                <path d="M58.2803 1.15449C63.3023 14.3017 71.049 54.3533 48.1082 67.0973C36.1831 73.4283 11.7107 77.3064 2.37778 43.9355C-1.14293 31.3468 9.61622 20.8908 32.0893 28.8395C45.055 33.4255 76.4207 44.0467 90.5787 70.0771C98.0511 83.8154 104.166 111.84 99.1745 129.671M99.1745 129.671C100.942 121.014 108.128 104.495 122.737 107.673M99.1745 129.671C100.181 123.978 97.0522 110.014 76.485 99.698M75.3644 33.2431C80.479 35.6688 96.6446 46.4742 101.81 64.2891" stroke="black" stroke-width="1.5" />
                            </svg>
                        </span>
                    </div>
                    <div class="container container-1230">
                        <div class="ar-about-us-4-hero-ptb">
                            <div class="row justify-content-center">
                                <div class="col-xl-12">
                                    <div class="tp-contact-us-heading tp_fade_anim" data-delay=".3">
                                        <div class="ar-about-us-4-title-box d-flex align-items-center mb-20">
                                            <span class="tp-section-subtitle pre tp_fade_anim">contact us</span>
                                            <div class="ar-about-us-4-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="81" height="9" viewBox="0 0 81 9" fill="none">
                                                    <rect y="4" width="80" height="1" fill="#000" />
                                                    <path d="M77 7.96366L80.5 4.48183L77 1" stroke="#000" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                        </div>
                                        <h3 class="tp-career-title pb-30">web design and development service 
                                            <br>in mangalore
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4"></div>
                                <div class="col-lg-8">
                                    <div class="tp-faq-text tp_fade_anim">
                                        <p class="m-0">Have any questions? Reach out to us from our contact <br>form and we will get back to you shortly.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tp-contact-us-bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="tp-contact-us-text smooth">
                                        <a href="#down">
                                            <p><svg xmlns="http://www.w3.org/2000/svg" width="15" height="21" viewBox="0 0 15 21" fill="none">
                                                    <rect x="6.25781" width="1.5" height="21" fill="#000" />
                                                    <path d="M14.1641 13.6257C10.28 13.6257 7.13714 16.9239 7.13714 21" stroke="#000" stroke-width="1.5" stroke-miterlimit="10" />
                                                    <path d="M7.13672 21C7.13672 16.9239 3.99384 13.6257 0.109797 13.6257" stroke="#000" stroke-width="1.5" stroke-miterlimit="10" />
                                                </svg> Scroll to explore</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="tp-contact-us-text d-none d-md-block text-md-end">
                                        <p><a href="">Get A Free Quote</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- hero area end -->

                <!-- contact us form area start -->
                <div id="down" class="tp-contact-us-form-ptb sec-pad">
                    <div class="container container-1750">
                        <div class="tp-contact-us-form-wrapper">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="tp-contact-us-map p-relative">
                                   
                                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4826.5354910244005!2d74.8581241!3d12.8697379!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba35a324ba400bf%3A0x2d5215f18eb3a14d!2sKomquest%20Solutions%20-%20Web%20Design%20Company!5e1!3m2!1sen!2sin!4v1774247132531!5m2!1sen!2sin" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="tp-contact-us-wrap">
                                        <h4 class="tp-contact-us-title mb-55">Send a Message</h4>
                                        <form id="contact-form" action="#" method="POST">
										<?php  if(isset($_POST['submit'])){  
                    $fname = $_POST['name'];
                    $email = $_POST['email'];
                    $subject1 = $_POST['subject'];
                    $message1 = $_POST['message'];
                    $to = 'enquiry@komquest.com';

                    $subject = 'Contacting form for Komquest Solutions';

                    $headers = "From: " .$email. "\r\n";
                    $headers .= "MIME-Version: 1.0\r\n";
                    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                    $message = '<html><body>';
                    $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
                    $message .= "<tr style='background: #eee;'><td><strong>Name :</strong> </td><td>" . $fname . "</td></tr>";
                    $message .= "<tr><td><strong>Email :</strong> </td><td>" . $email . "</td></tr>";
                    $message .= "<tr><td><strong>Subject :</strong> </td><td>" . $subject1 . "</td></tr>";
                    $message .= "<tr><td><strong>Message :</strong> </td><td>" . $message1 . "</td></tr>";
                                                                
                    $message .= "</table>";
                    $message .= "</body></html>";
                        if (mail($to, $subject, $message, $headers)){
                            echo 'Your queries are important to us, our associates will contact you shortly with feasible solution. Thank you';
                        }else{
                            echo 'Message is not sent , Please try again later.';
                        }
                    }
                    
            ?>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="tp-contact-form-input mb-20">
                                                        <label>Full name*</label>
                                                        <input name="name" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="tp-contact-form-input mb-20">
                                                        <label>Email address*</label>
                                                        <input name="email" type="email">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tp-contact-form-input mb-20">
                                                        <label>Subject</label>
                                                        <input name="subject" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tp-contact-form-input mb-20">
                                                        <label>How Can We Help You*
                                                        </label>
                                                        <textarea name="message"></textarea>
                                                    </div>
                                                    <div class="tp-contact-form-btn">
                                                        <button class="w-100" type="submit"><span>
                                                                <span class="text-1">Send Message</span>
                                                                <span class="text-2">Send Message</span>
                                                            </span>
                                                        </button>
                                                        <p class="ajax-response mt-5"></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- contact us form area end -->

                <!-- about area start -->
                <div class="cn-contactform-support-area sec-pad">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-10">
                                <div class="cn-contactform-support-bg d-flex align-items-center justify-content-center">
                                    <div class="cn-contactform-support-text text-center">
                                        <span>Feel free to connect with us directly below. Our team will respond within 24 hours</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- about area end -->

                <!-- contact area start -->
                <div class="tp-contact-us-info-area sec-pad">
                    <div class="container ">
                        <div class="row">
						  <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                                <div class="tp-contact-us-content text-center" data-speed="1.2">
 <div class="tp-contact-us-thumb d-flex justify-content-center">
                                        <img src="assets/images/resources/1.jpg" alt="">
                                    </div>
                                 <div class="tp-contact-us-bottom">
                                        <div class="tp-contact-us-info-details">
                                            <h4 class="tp-contact-us-info-title">Saudi Arabia</h4>
                                            <a href="mailto:enquiry@komquest.com">enquiry@komquest.com</a>
                                            <a href="tel:917204488888">72044 88888</a>
                                        </div>
                                        <div class="tp-contact-us-btn">
                                            <a class="tp-btn-yellow-green  w-100" target="_blank" href="">
                                                <span>
                                                    <span class="text-1">View Location</span>
                                                    <span class="text-2">View Location</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
						    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                                <div class="tp-contact-us-content text-center mt-60" data-speed=".9">
                                    <div class="tp-contact-us-thumb d-flex justify-content-center">
                                        <img src="assets/images/resources/1.jpg" alt="">
                                    </div>
									       <div class="tp-contact-us-bottom">
                                        <div class="tp-contact-us-info-details">
                                            <h4 class="tp-contact-us-info-title">India</h4>
                                            <a href="mailto:enquiry@komquest.com">enquiry@komquest.com</a>
                                            <a href="tel:7204488888">(+91) 72044 88888</a>
                                        </div>
                                        <div class="tp-contact-us-btn">
                                            <a class="tp-btn-yellow-green active w-100" target="_blank" href="https://maps.app.goo.gl/f2nr5TezfWFRqHRJ7">
                                                <span>
                                                    <span class="text-1">View Location</span>
                                                    <span class="text-2">View Location</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                          
                        
                            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                                <div class="tp-contact-us-content text-center" data-speed="1.2">
                                    <div class="tp-contact-us-thumb d-flex justify-content-center">
                                        <img src="assets/images/resources/1.jpg" alt="">
                                    </div>
                                    <div class="tp-contact-us-bottom">
                                        <div class="tp-contact-us-info-details">
                                            <h4 class="tp-contact-us-info-title">UAE</h4>
                                           <a href="mailto:enquiry@komquest.com">enquiry@komquest.com</a>
                                          <a href="tel:917204488888">72044 88888</a>
                                        </div>
                                        <div class="tp-contact-us-btn">
                                            <a class="tp-btn-yellow-green w-100" target="_blank" href="">
                                                <span>
                                                    <span class="text-1">View Location</span>
                                                    <span class="text-2">View Location</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- contact area end -->


<?php include('footer.php');?>