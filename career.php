<?php include('head.php'); include('menu.php');?>
<!---breadcrumb---->
 <div class="breadcrumb p-relative" style="background-image:url(assets/images/breadcrumb/Contact-Us.jpg);">
                    <div class="container">
					<div class="breadcrumb-wrap">
					<h6>Career</h6>
					<ul class="ul-list">
					<li><a href="index.php">Home</a></li>
					<li><a href="">>></a></li>
					<li><a href="">Career</a></li>
					</ul>
					
					
  </div></div>
</div>
 <div class="tp-service-5-features-ptb p-relative sec-pad">
                    <div class="container ">
                        <div class="tp-service-4-process-video service-5-pos">
                            <a class="popup-video dgm-testimonial-playbtn" href="">
                                <span>Get In Touch</span>
                            </a>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="tp-service-5-feature-wrap p-relative">
                                    <div class="tp-service-5-feature-content">
                                        <span><svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" fill="none">
                                                <path d="M99 74.5858L76 97.5858V25V24H75H2.41421L25.4142 1H99V25V74.5858ZM30.1193 51L1 80.1193V51H30.1193ZM49 99H20.3031L49 70.3032V99Z" stroke="white" stroke-width="2" />
                                            </svg></span>
                                        <h3 class="tp-service-5-feature-title">We provide <br> special offers for <br>
                                            the best customers</h3>
                                    </div>
                                    <img data-speed=".8" src="assets/images/resources/career.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- features area end -->
	<section class="career grey sec-pad">
		<div class="container">
			<div class="row career-row justify-content-between align-items-center">
			<div class="col-md-4">
			<img src="assets/images/fav.svg">
			</div>
				<div class="col-md-8">
					<div class="get-touch-form-block box-shadow-theme">
						<div class="section-content-block mb-4">
							<h2 class="section-title is-text-dark">Shape Your Future. Build Your Legacy</h2></div>
						<form enctype="multipart/form-data" method="POST" action="#" class="contact-us-form">
						<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sender information
    $sender_name = $_POST['sender_name'];
    $sender_email = $_POST['sender_email'];
	  $number = $_POST['number'];
    
    // Subject
    $subject = $_POST['subject'];
    
    // Message
    $message = $_POST['message'];
    
    // Attachment
    $file_attached = $_FILES['attachment']['tmp_name'];
    $file_name = $_FILES['attachment']['name'];
    $file_size = $_FILES['attachment']['size'];
    $file_type = $_FILES['attachment']['type'];
    
    // Recipient email
    $to = "enquiry@komquest.com"; 
    
    // Boundary
    $semi_rand = md5(time());
    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
    
    // Headers
    $headers = "From: $sender_name <$sender_email>\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary=\"$mime_boundary\"\r\n";
    
    // HTML content
    $html_message = '
    <html>
    <head>
        <title>' . $subject . '</title>
    </head>
    <body>
        <p><strong>From:</strong> ' . $sender_name . ' &lt;' . $sender_email . '&gt;</p>
		<p><strong>Number:</strong> ' . $number . '</p>
        <p><strong>Subject:</strong> ' . $subject . '</p>
        <p><strong>Message:</strong> ' . nl2br($message) . '</p>
    </body>
    </html>';
    
    // Message Body
    $message = "--$mime_boundary\n";
    $message .= "Content-Type: text/html; charset=\"UTF-8\"\n";
    $message .= "Content-Transfer-Encoding: 7bit\n\n";
    $message .= $html_message . "\n\n";
    $message .= "--$mime_boundary\n";
    
    // Attachment
    if (!empty($file_attached) && file_exists($file_attached)) {
        $fp = @fopen($file_attached, "rb");
        $data = @fread($fp, filesize($file_attached));
        @fclose($fp);
        $data = chunk_split(base64_encode($data));
        $message .= "Content-Type: {$file_type}; name=\"{$file_name}\"\n";
        $message .= "Content-Disposition: attachment; filename=\"{$file_name}\"\n";
        $message .= "Content-Transfer-Encoding: base64\n\n";
        $message .= $data . "\n\n";
        $message .= "--{$mime_boundary}\n";
    }
    
    // Send email
    if (@mail($to, $subject, $message, $headers)) {
        echo '<p>Email sent successfully!</p>';
    } else {
        echo '<p>Failed to send email. Please try again later.</p>';
    }
}
?>
															<div class="row g-3">
									<div class="col-xl-6">
										<input type="text" name="sender_name" value="" placeholder="Your Name" required> </div>
									<div class="col-xl-6">
										<input type="file" name="attachment" id="attachment" required> </div>
									<div class="col-xl-6">
										<input type="text" name="sender_email" value="" placeholder="Your Email" required> </div>
									<div class="col-xl-6">
										<input type="text" name="number" value="" placeholder="Contact Number" required> </div>
									<div class="col-12">
										<textarea name="message" placeholder="Your message" cols="30"></textarea>
									</div>
									<div class="col-12">
										<button name="submit" type="submit" class="submit-form"> Send Your Message </button>
									</div>
								</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!----expertise-->
  <section class="expertise-komquest sec-pad">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-10">
                              <div class="text-heading">
						<h6 class="white text-center">Our Expertise</h6>
						<h2 class="white text-center">Your Trusted Business<br> Consulting Partner</h2>
						</div>
						<div class="ek-row">
						<div class="ek-row-one">
						<h1 class="text-center fifteen-years">15 +  years</h1>
						</div>
						<div class="sec-three-points">
						<div class="stp-one">
						<h1>200 +</h1>
						<p>Industries impacted through innovative design</p>
						
						</div>
						<div class="stp-one">
						<h1>75 +</h1>
						<p>Industries impacted through innovative design</p>
						
						</div>
						<div class="stp-one">
						<h1>45 +</h1>
						<p>Industries impacted through innovative design</p>
						
						</div>
						</div>
                          </div>  </div>
                        </div> </div>
						</section>
<?php include('footer.php');?>