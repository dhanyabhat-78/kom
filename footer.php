   <footer>
  <div class="footer-row top">
  <div class="container-largee">
  <div class="row justify-content-between">
   <div class="col-lg-3 col-md-6 col-12">
   <div class="footer-fst-warp">
   <ul class="list-style1">
   <li class="one"><a href="mailto:enquiry@komquest.com">
enquiry@komquest.com </a></li>
   <li><a href="tel:7204488888">(+91) 72044 88888</a></li>

   </ul>
   </div>
   </div>
     <div class="col-lg-2 col-md-6 col-12">
   <div class="footer-fst-warp">
   <h6>How To Find Us</h6>
   <ul class="list-style1">
   <li><a href="#">4th floor, Mangalore Gate,
Kankanady,<br> Mangalore -575002 India</a></li>
  
   </ul>
   </div>
   </div>
      <div class="col-lg-2 col-md-6 col-md-12">
   <div class="footer-fst-warp">
   <h6>Social</h6>
    <div class="tp-footer-widgetsocial">
                                        <a href="https://www.facebook.com/komquest/">
                                          <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                        <a href="https://www.instagram.com/komquest/">
                                          <i class="fa-brands fa-instagram"></i>
                                        </a>
                                        <a href="https://in.linkedin.com/company/komquest">
                                          <i class="fa-brands fa-linkedin-in"></i>
                                        </a>
                                        <a href="https://twitter.com/komquest/">
                                            <i class="fa-brands fa-x-twitter"></i>
                                        </a>
                                    </div>
   </div>
   </div>
    </div>
	
	<h1 class="text-center footer-main-text">Komquest Solutions</h1>
	
	<div class="komquest-group-photo">
	<img src="assets/images/home/komquest-group-photo.jpg">
	<div class="kgp-content">
	<h3>Experience life at Einar.
Join us at our offices in
LA and London. <span class="qodef-e-decoration"><svg class="qodef-svg--decoration-arrow-big" xmlns="http://www.w3.org/2000/svg" width="128" height="51" viewBox="0 0 128 51" fill="currentColor"><rect y="24" width="115" height="2"></rect><path d="M111,13C104,6,99,0,99,0H96s6,11,11,18l5,7-5,7c-5,7-11,18-11,18h3s5-6,12-13c9-9,17-11,17-11V24S120,22,111,13Z"></path></svg></span></h3>
	
	</div>
	
	</div>
	
  </div>
  </div>














    </footer>
   </main>
        <!--</div>
    </div>-->
    <!-- JS here -->


    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-bundle.js"></script>
    <script src="assets/js/swiper-bundle.js"></script>
    <script src="assets/js/plugin.js"></script>
    <script src="assets/js/three.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/scroll-magic.js"></script>
    <script src="assets/js/hover-effect.umd.js"></script>
    <script src="assets/js/magnific-popup.js"></script>
    <script src="assets/js/parallax-slider.js"></script>
    <script src="assets/js/nice-select.js"></script>
    <script src="assets/js/purecounter.js"></script>
    <script src="assets/js/isotope-pkgd.js"></script>
    <script src="assets/js/imagesloaded-pkgd.js"></script>
    <script src="assets/js/Observer.min.js"></script>
    <script src="assets/js/splitting.min.js"></script>
    <script src="assets/js/webgl.js"></script>
    <script src="assets/js/parallax-scroll.js"></script>
    <script src="assets/js/atropos.js"></script>
    <script src="assets/js/slider-active.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/tp-cursor.js"></script>
    <script src="assets/js/portfolio-slider-1.js"></script>
    <script type="module" src="assets/js/distortion-img.js"></script>
    <script type="module" src="assets/js/index.js"></script>
    <script type="module" src="assets/js/index1.js"></script>

<script>
  // script.js
document.addEventListener("DOMContentLoaded", function() {
    // 1. Find the main parent container
    const mainContainer = document.querySelector('.email-solu-komquest-new');
    
    // If this specific section isn't on the page, stop the script (prevents errors)
    if (!mainContainer) return; 

    // 2. Find nav items and content boxes ONLY inside this parent
    const navItems = mainContainer.querySelectorAll('.eskn-nav-item');
    const contentBoxes = mainContainer.querySelectorAll('.eskn-content-box');

    // 3. Add hover event listeners to the nav items
    navItems.forEach(item => {
        item.addEventListener('mouseenter', function() {
            
            // Remove 'active' from all nav items and content boxes
            navItems.forEach(nav => nav.classList.remove('active'));
            contentBoxes.forEach(box => box.classList.remove('active'));

            // Add 'active' to the hovered nav item
            this.classList.add('active');

            // Find the matching content box and make it active
            const targetId = this.getAttribute('data-target');
            const targetBox = mainContainer.querySelector('#' + targetId);
            
            if (targetBox) {
                targetBox.classList.add('active');
            }
        });
    });
});
  </script>
<script>
  
  // service area animation 
  if (document.querySelectorAll(".service-area").length > 0) {
    mm.add("(min-width: 1200px)", () => {
      const tl = gsap.timeline();

      tl.to(".services-wrapper-1 .service-box-1", {
        x: 0,
        ease: "power2.inOut",
        scrollTrigger: {
          trigger: ".services-wrapper-box",
          start: "top top",
          end: "+=50%",
          toggleActions: "play complete play reverse",
          pin: true,
          scrub: 0,
        }
      });

      tl.to(".add-shape-wrapper", {
        transform: "translate(0, 0)",
        ease: "none",
        scrollTrigger: {
          trigger: ".add",
          start: "top top",
          end: "center top",
          scrub: true,
          // markers: true,
        }
      });

      tl.to(".add-shape", {
        transform: "scale(860)",
        ease: "power2.in",
        scrollTrigger: {
          trigger: ".add",
          start: "center top",
          end: "bottom -=100%",
          pin: ".service-area",
          scrub: 0,
          // markers: true,
        }
      });
    });
  }

</script>
</body>

</html>