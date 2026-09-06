    <?php include('head.php'); $Page ='work'; include('menu.php');?>
    <!-- project slider area start --><section class="our-work-immer ">
        <div class="parallax-slider-wrapper">
            <div class="parallax-sliders">
                <div class="parallax-slider-inner">
                    <div class="parallax-item not-hide-cursor" data-cursor="View<br>Demo">
                        <a class="cursor-hide" href="#">
                            <div class="parallax-content">
                                <span>branding</span>
                                <h4>Brand some</h4>
                            </div>
                            <div class="parallax-img" data-src="assets/images/work/1.jpg"></div>
                        </a>
                    </div>
                    <div class="parallax-item not-hide-cursor" data-cursor="View<br>Demo">
                        <a class="cursor-hide" href="#">
                            <div class="parallax-content">
                                <span>Digital</span>
                                <h4>Digital Thinker</h4>
                            </div>
                            <div class="parallax-img" data-src="assets/images/work/2.jpg"></div>
                        </a>
                    </div>
                    <div class="parallax-item not-hide-cursor" data-cursor="View<br>Demo">
                        <a class="cursor-hide" href="#">
                            <div class="parallax-content">
                                <span>Markus</span>
                                <h4>Markus Erickson</h4>
                            </div>
                            <div class="parallax-img" data-src="assets/images/work/3.jpg"></div>
                        </a>
                    </div>
                    <div class="parallax-item not-hide-cursor" data-cursor="View<br>Demo">
                        <a class="cursor-hide" href="#">
                            <div class="parallax-content">
                                <span>Emko</span>
                                <h4>Emko Furniture</h4>
                            </div>
                            <div class="parallax-img" data-src="assets/images/work/4.jpg"></div>
                        </a>
                    </div>
                    <div class="parallax-item not-hide-cursor" data-cursor="View<br>Demo">
                        <a class="cursor-hide" href="#">
                            <div class="parallax-content">
                                <span>branding</span>
                                <h4>Brand some</h4>
                            </div>
                            <div class="parallax-img" data-src="assets/images/work/5.jpg"></div>
                        </a>
                    </div>
                    <div class="parallax-item not-hide-cursor" data-cursor="View<br>Demo">
                        <a class="cursor-hide" href="#">
                            <div class="parallax-content">
                                <span>Craig</span>
                                <h4>Craig Reynolds</h4>
                            </div>
                            <div class="parallax-img" data-src="assets/images/work/6.jpg"></div>
                        </a>
                    </div>
                    <div class="parallax-item not-hide-cursor" data-cursor="View<br>Demo">
                        <a class="cursor-hide" href="#">
                            <div class="parallax-content">
                                <span>Green</span>
                                <h4>Green Reel</h4>
                            </div>
                            <div class="parallax-img" data-src="assets/images/work/7.jpg"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
</section>
    


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