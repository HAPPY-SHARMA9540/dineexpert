<?php include "common/header.php" ?>
<section class="hero">

    <!-- LEFT -->
    <div class="hero-left">

        <div class="hero-tag">
            All-in-One Restaurant Management Software
        </div>

        <h1>
            Run Your Restaurant
            <span>Smarter, Faster & More Profitable</span>
        </h1>

        <p>
            Dine Expert simplifies restaurant operations with QR menus,
            billing, inventory, online orders and analytics — all in one platform.
        </p>

        <a href="javascript:void(0)" class="hero-btn openPopup">
            Book Free Demo
        </a>

    </div>

    <!-- RIGHT -->
    <div class="hero-right">
        <img src="assets/img/banner/banner1.webp" alt="Restaurant Software">
    </div>

</section>

<!-- Popup Form -->
<div id="popupFormmm" class="popup-overlay">

    <div class="popup-box">

        <!-- Close Button -->
        <span id="closePopup" class="close-btn">&times;</span>

        <!-- Left Side -->
        <div class="popup-left">
            <img src="assets/img/banner/banner1.webp" alt="Dine Expert" class="popup-image">

                <p>
                    Providing digital solutions to help businesses build a strong online presence & achieve their goals.         
                </p>
        </div>

        <!-- Right Side -->
        <div class="popup-right">

            <div class="right_contant">
                <h2 style="margin:0px;">Schedule a free demo</h2>
                <p>
                    Get in touch with our team to clarify your Queries.
                </p>
            </div>
            
            <form class="contact" id="contactForm" method="post" action=" ">
                    <div class="d-flex">
                        <div class="width">
                            <input type="text" name="cont_name" class="cont_name" placeholder="Name" >
                            <span class="usercontname error"></span>
                        </div>
                        
                        <div class="width">
                            <input type="text" name="cont_email" class="cont_email" placeholder="Email" >
                            <span class="usercontemail error"></span>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="width">
                            <div style="display:flex; align-items:center;">
                                <!-- <span  style="padding: 13px; background:#f1f1f1; color:#000; border-radius: 10px; margin-right: 10px;">
                                    +91
                                </span> -->
                                <input type="number" class="cont_phone" placeholder="Phone / WhatsApp"
                                        oninput="if(this.value.length > 10) this.value = this.value.slice(0,10)">
                            </div>
                            <span class="usercontphone error" ></span>
                        </div>

                        <div class="width"> 
                            <input type="text" name="cont_city" class="cont_city" placeholder="City" >
                            <span class="usercontcity error" ></span>
                        </div>

                        <div class="width"> 
                            <input type="text" name="cont_bname" class="cont_bname" placeholder="Business Name" >
                            <span class="usercontbname error" ></span>
                        </div>
                    </div>
                    <button type="submit" class="it-btn-theme btn submitss" name="submitss" id="">
                        Submit
                    </button>
                </form>
        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {

    // Sabhi buttons
    const openBtns = document.querySelectorAll(".openPopup");

    // Popup
    const popup = document.getElementById("popupFormmm");

    // Close button
    const closeBtn = document.getElementById("closePopup");

    // Open popup
    openBtns.forEach(function(btn){
        btn.addEventListener("click", function(e){
            e.preventDefault();
            popup.style.display = "flex";
        });
    });

    // Close popup
    closeBtn.addEventListener("click", function(){
        popup.style.display = "none";
    });

    // Outside click close
    window.addEventListener("click", function(e){
        if(e.target === popup){
            popup.style.display = "none";
        }
    });

});
</script>

<!-- ========================pup pop end=================== --></div>

<!--============== about ====================-->
<section class="about" id="about">
            <div class="container">
                <div class="about-wrapper">

                <!-- Left Content -->
                <div class="about-content">
                    <h2>About Us</h2>
                    <p >
                        Dine Expert is a comprehensive restaurant management software designed to help food businesses operate more efficiently in a fast-paced and competitive environment. Managing a restaurant involves multiple processes, from handling orders and billing to managing inventory, staff, and customer experience. </p>

                    <a class="about-btn" href="#contact">Contact</a>
                </div>

                <!-- Right Image -->
                <div class="about-img">
                    <img src="assets/img/dashboard/about.webp" alt="about">
                </div>

                </div>
            </div>
</section>

<section class="section" id="features">
  <div class="container">
    <div class="section-title">
      <h2>Everything <span>Your Restaurant Needs</span></h2>
      <p>Manage every restaurant operation from one dashboard.</p>
    </div>

    <div class="features-grid">
      <div class="feature-card popupCard " data-img="assets/img/banner/banner1.webp">
        <div class="feature-icon"><img src="assets/img/icon/qr-code.png" alt="" style="padding-right:10px;"></div>
        <div>
          <h3>QR Menu</h3>
          <p>Customers scan QR code to access menu instantly.</p>
        </div>
      </div>
      <div class="feature-card popupCard " data-img="assets/img/banner/banner2.webp">
        <div class="feature-icon"><img src="assets/img/icon/notification.png" alt="" style="padding-right:10px;"></div>
        <div>
          <h3>Call Waiter</h3>
          <p>Guests can call waiter or request bill in one tap.</p>
        </div>
      </div>
      <div class="feature-card popupCard ">
        <div class="feature-icon"><img src="assets/img/icon/checkout.png" alt="" style="padding-right:10px;"></div>
        <div>
          <h3>Online Ordering</h3>
          <p>Accept dine-in, takeaway and car orders.</p>
        </div>
      </div>
      <div class="feature-card popupCard ">
        <div class="feature-icon"><img src="assets/img/icon/billing-machine.png" alt="" style="padding-right:10px;"></div>
        <div>
        <h3>POS Billing</h3>
        <p>Fast and easy billing for counter orders.</p>
        </div>
      </div>
      <div class="feature-card popupCard ">
        <div class="feature-icon"><img src="assets/img/icon/logistics.png" alt="" style="padding-right:10px;"></div>
        <div>
        <h3>Inventory</h3>
        <p>Track raw materials and stock in real time.</p>
        </div>
      </div>
      <div class="feature-card popupCard ">
        <div class="feature-icon"><img src="assets/img/icon/bar-chart.png" alt="" style="padding-right:10px;"></div>
        <div>
        <h3>Reports</h3>
        <p>View sales, profit and performance reports.</p>
        </div>
      </div>
      <div class="feature-card popupCard ">
        <div class="feature-icon"><img src="assets/img/icon/crm.png" alt="" style="padding-right:10px;"></div>
        <div>
        <h3>Customer Management</h3>
        <p>Store customer records and order history.</p>
        </div>
      </div>
      <div class="feature-card popupCard ">
        <div class="feature-icon"><img src="assets/img/icon/breakfast.png" alt="" style="padding-right:10px;"></div>
        <div>
        <h3>Table Management</h3>
        <p>Create and manage tables with ease.</p>
        </div>
      </div>

      <div class="feature-card popupCard ">
        <div class="feature-icon"><img src="assets/img/icon/otp.png" alt="" style="padding-right:10px;"></div>
        <div>
        <h3>OTP Login</h3>
        <p>Secure Login With Mobile Number & OTP.</p>
        </div>
      </div>
      <div class="feature-card popupCard ">
        <div class="feature-icon"><img src="assets/img/icon/profit.png" alt="" style="padding-right:10px;"></div>
        <div>
        <h3>Accounting</h3>
        <p>Complete accounting & Financial reports.</p>
        </div>
      </div>
      <div class="feature-card popupCard ">
        <div class="feature-icon"><img src="assets/img/icon/inventory.png" alt="" style="padding-right:10px;"></div>
        <div>
        <h3>Item Management</h3>
        <p>Manage item, catagories, veriants & modifiers.</p>
        </div>
      </div>
      <div class="feature-card popupCard ">
        <div class="feature-icon"><img src="assets/img/icon/icons8-flour-32.png" alt="" style="padding-right:10px;"></div>
        <div>
        <h3>Raw Material</h3>
        <p>Manage raw materials & consumption.</p>
        </div>
      </div>

      <div class="feature-card popupCard ">
        <div class="feature-icon"><img src="assets/img/icon/quote.png" alt="" style="padding-right:10px;"></div>
        <div>
        <h3>Request Bill</h3>
        <p>Guests can request bill directly.</p>
        </div>
      </div>
      <div class="feature-card popupCard ">
        <div class="feature-icon"><img src="assets/img/icon/order-now.png" alt="" style="padding-right:10px;"></div>
        <div>
        <h3>Purchase Management</h3>
        <p>Track purchase & Suppilers.</p>
        </div>
      </div>
      <div class="feature-card popupCard ">
        <div class="feature-icon"><img src="assets/img/icon/bar-chart.png" alt="" style="padding-right:10px;"></div>
        <div>
        <h3>Reports & Analytics</h3>
        <p>Powerful reports for batter decisions.</p>
        </div>
      </div>
      <div class="feature-card popupCard ">
        <div class="feature-icon"><img src="assets/img/icon/staff-management.png" alt="" style="padding-right:10px;"></div>
        <div>
        <h3>Staff Management</h3>
        <p>Manage roles, uers & permissions.</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Popup -->
<div id="creativePopupWrapper" class="creative-popup-overlay">

    <div class="creative-popup-box">

        <!-- Close -->
        <span id="creativePopupCloseBtn" 
              class="creative-close-btn">&times;</span>

        <!-- Image -->
        <div class="creative-popup-left">
            <img src="assets/img/banner/banner1.webp"
                 alt=""
                 id="popupDynamicImage"
                 class="creative-popup-image">
        </div>

    </div>

</div>

<script>
document.addEventListener("DOMContentLoaded", function () {

    // Cards
    const popupCards = document.querySelectorAll(".popupCard");

    // Popup
    const popup = document.getElementById("creativePopupWrapper");

    // Close Btn
    const closeBtn = document.getElementById("creativePopupCloseBtn");

    // Dynamic Image
    const popupImg = document.getElementById("popupDynamicImage");


    // Open Popup
    popupCards.forEach(function(card){

        card.addEventListener("click", function(){

            // Get Image
            const newImg = card.getAttribute("data-img");

            // Change Image
            popupImg.src = newImg;

            // Open Popup
            popup.style.display = "flex";

        });

    });


    // Close Popup
    closeBtn.addEventListener("click", function(){
        popup.style.display = "none";
    });


    // Outside Click Close
    window.addEventListener("click", function(e){

        if(e.target === popup){
            popup.style.display = "none";
        }

    });

});
</script>

<style>
  /* Overlay */
.creative-popup-overlay{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.75);
    display: none;
    justify-content: center;
    align-items: center;
    z-index: 99999;
    padding: 20px;
}

/* Popup Box */
.creative-popup-box{
    position: relative;
    width: 100%;
    max-width: 1100px;
    height: 650px;   /* Height Badi */
    background: #ffffff;
    border-radius: 25px;
    overflow: hidden;
    display: flex;
    align-items: stretch;
    box-shadow: 0 10px 40px rgba(0,0,0,0.25);
    animation: popupFade 0.4s ease;
}

/* Left Side */
.creative-popup-left{
    width: 100%;
    height: 100%;
}

/* Image Full Cover */
.creative-popup-image{
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

/* Right Content */
.creative-popup-header{
    width: 50%;
    height: 100%;
    padding: 60px;
    display: flex;
    align-items: center;
}

.creative-popup-header-content h2{
    font-size: 38px;
    color: #111;
    margin-bottom: 15px;
    line-height: 1.2;
}

.creative-popup-header-content p{
    font-size: 17px;
    color: #666;
    line-height: 1.7;
}

/* Close Button */
.creative-close-btn{
   position: absolute;
    top: 0px;
    right: 20px;
    font-size: 35px;
    color: #000;
    cursor: pointer;
    transition: 0.3s;
}

.creative-close-btn:hover{
    transform: rotate(90deg);
    color: red;
}

/* Animation */
@keyframes popupFade{
    from{
        opacity: 0;
        transform: scale(0.8);
    }
    to{
        opacity: 1;
        transform: scale(1);
    }
}

/* Mobile Responsive */
@media(max-width:768px){

    .creative-popup-box{
        height: auto;
        flex-direction: column;
    }

    .creative-popup-left{
        width: 100%;
        height: auto;
    }

    .creative-popup-header{
        width: 100%;
        height: auto;
        padding: 30px 20px;
    }

}


</style>

<section class="section dashboard-section">
  <div class="container dashboard-layout">
    <div>
      <div class="tag">Who we are</div>
      <h2 style="margin-bottom:20px;"><span>Why Restaurants</span> Choose Dine Expert</h2>
      <ul class="custom-list" style=" margin: 20px 15px;">
          <li>Easy to use interface </li>
          <li>Saves time through automation </li>
          <li>Improves operational efficiency</li> 
          <li>Secure and reliable system</li> 
          <li>24/7 support</li> 

      </ul>
      <a href="#" class="btn">Book a Demo</a>
    </div>
    <div class="dashboard-box"> <img src="assets/img/dashboard/dashboard.webp" width="100" alt=""></div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="stats">
      <div class="stat-card">
        <h3 class="counter" data-target="500">0</h3>
        <p>Restaurants</p>
      </div>
      <div class="stat-card">
        <h3 class="counter" data-target="10000">0</h3>
        <p>Orders Daily</p>
      </div>
      <div class="stat-card">
        <h3 class="counter" data-target="99.9">0</h3>
        <p>Uptime</p>
      </div>
      <div class="stat-card">
        <h3 class="counter" data-target="24">0</h3>
        <p>Support</p>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-title">
      <h2>What Our Customers Say</h2>
      <p>Trusted by restaurants across India.</p>
    </div>

<!-- Testimonial Slider -->
<div class="wrap" id="testimonialSlider">

  <!-- Card 1 -->
  <div class="t-card">
    <div class="quote">
      <svg width="50" height="50" viewBox="0 0 24 24" fill="#db2529">
        <path d="M7 17h3l2-4V7H6v6h3l-2 4zm9 0h3l2-4V7h-6v6h3l-2 4z"/>
      </svg>
    </div>

    <img src="assets/img/reveiw/review1.jpg" class="avatar">

    <div class="stars">★★★★★</div>

    <p>
      Dine Expert has completely transformed how we manage our restaurant.
      Billing, inventory, and orders are now seamless, and our team works
      more efficiently with fewer errors.
    </p>

    <h4>Rahul Sharma</h4>
    <span>Delhi</span>
  </div>

  <!-- Card 2 -->
  <div class="t-card">
    <div class="quote">
      <svg width="50" height="50" viewBox="0 0 24 24" fill="#db2529">
        <path d="M7 17h3l2-4V7H6v6h3l-2 4zm9 0h3l2-4V7h-6v6h3l-2 4z"/>
      </svg>
    </div>

    <img src="https://images.openai.com/static-rsc-4/BzquAaLeqeRB6bptRGtIY2Veo-NLeAFDwaj23t5cVLk-FIa31VCvFD5neg3rRZ4_zlJfACBBwewXdRKR7e4Iahk271QGOWPamrK9-m62SOEqiuFR4R0_m7MJSo2TIpG2fi0vpRv_vq_WS29cLvHcSHy96-5wfCnTVsKevjDXoJC9Dn7khNKuk6WeT9jbjV9J?purpose=fullsize" class="avatar">

    <div class="stars">★★★★★</div>

    <p>
      The QR menu and online ordering features have improved our customer
      experience. Service is faster, and managing orders is much easier
      than before.
    </p>

    <h4>Priya Mehta</h4>
    <span>Mumbai</span>
  </div>

  <!-- Card 3 -->
  <div class="t-card">
    <div class="quote">
      <svg width="50" height="50" viewBox="0 0 24 24" fill="#db2529">
        <path d="M7 17h3l2-4V7H6v6h3l-2 4zm9 0h3l2-4V7h-6v6h3l-2 4z"/>
      </svg>
    </div>

    <img src="assets/img/reveiw/review2.jpg" class="avatar">

    <div class="stars">★★★★★</div>

    <p>
      The reporting and analytics tools help us track performance clearly.
      It has made decision-making easier and improved our overall business
      operations.
    </p>

    <h4>Amit Verma</h4>
    <span>Bangalore</span>
  </div>

  <!-- Card 4 -->
  <div class="t-card">
    <div class="quote">
      <svg width="50" height="50" viewBox="0 0 24 24" fill="#db2529">
        <path d="M7 17h3l2-4V7H6v6h3l-2 4zm9 0h3l2-4V7h-6v6h3l-2 4z"/>
      </svg>
    </div>

    <img src="assets/img/reveiw/review7.jpeg" class="avatar">

    <div class="stars">★★★★★</div>

    <p>
      Managing multiple processes was difficult earlier, but Dine Expert
      simplified everything. It saves time and improves coordination
      across our staff.
    </p>

    <h4>Neha Kapoor</h4>
    <span>Gurgaon</span>
  </div>

  <!-- Card 5 -->
  <div class="t-card">
    <div class="quote">
      <svg width="50" height="50" viewBox="0 0 24 24" fill="#db2529">
        <path d="M7 17h3l2-4V7H6v6h3l-2 4zm9 0h3l2-4V7h-6v6h3l-2 4z"/>
      </svg>
    </div>

    <img src="assets/img/reveiw/review3.jpg" class="avatar">

    <div class="stars">★★★★★</div>

    <p>
      Real-time inventory and billing have made our operations more organized.
      We now have better control over stock and daily activities.
    </p>

    <h4>Rohit Singh</h4>
    <span>Lucknow</span>
  </div>

  <!-- Card 6 -->
  <div class="t-card">
    <div class="quote">
      <svg width="50" height="50" viewBox="0 0 24 24" fill="#db2529">
        <path d="M7 17h3l2-4V7H6v6h3l-2 4zm9 0h3l2-4V7h-6v6h3l-2 4z"/>
      </svg>
    </div>

    <img src="assets/img/reveiw/review8.jpg" class="avatar">

    <div class="stars">★★★★★</div>

    <p>
      The system is simple to use and very effective. It has reduced
      manual errors and improved the speed of our service significantly.
    </p>

    <h4>Ankit Jain</h4>
    <span>Jaipur</span>
  </div>

  <!-- Card 7 -->
  <div class="t-card">
    <div class="quote">
      <svg width="50" height="50" viewBox="0 0 24 24" fill="#db2529">
        <path d="M7 17h3l2-4V7H6v6h3l-2 4zm9 0h3l2-4V7h-6v6h3l-2 4z"/>
      </svg>
    </div>

    <img src="assets/img/reveiw/review6.webp" class="avatar">

    <div class="stars">★★★★★</div>

    <p>
      Dine Expert helped us streamline our workflow and improve customer
      handling. The automation features save time and increase efficiency daily.
    </p>

    <h4>Sonal Gupta</h4>
    <span>Noida</span>
  </div>

  <!-- Card 8 -->
  <div class="t-card">
    <div class="quote">
      <svg width="50" height="50" viewBox="0 0 24 24" fill="#db2529">
        <path d="M7 17h3l2-4V7H6v6h3l-2 4zm9 0h3l2-4V7h-6v6h3l-2 4z"/>
      </svg>
    </div>

    <img src="assets/img/reveiw/review5.jpg" class="avatar">

    <div class="stars">★★★★★</div>

    <p>
      The platform is reliable and easy to implement. It has improved
      our billing process and overall management system.
    </p>

    <h4>Karan Malhotra</h4>
    <span>Chandigarh</span>
  </div>

</div>
  </div>
</section>

<script>

const slider = document.getElementById("testimonialSlider");

if (window.innerWidth <= 991) {

    const gap = 15;

    // initial clone
    const cards = [...slider.children];

    cards.forEach(card => {
        const clone = card.cloneNode(true);
        slider.appendChild(clone);
    });

    const firstCard = slider.querySelector(".t-card");
    const cardWidth = firstCard.offsetWidth + gap;

    let scrollAmount = 0;

    function autoSlide() {

        scrollAmount += cardWidth;

        slider.scrollTo({
            left: scrollAmount,
            behavior: "smooth"
        });

        // end ke pass naye clone add karo
        if (
            slider.scrollLeft + slider.clientWidth >=
            slider.scrollWidth - (cardWidth * 2)
        ) {

            const newCards = [...slider.children];

            newCards.forEach(card => {
                const clone = card.cloneNode(true);
                slider.appendChild(clone);
            });

        }

    }

    setInterval(autoSlide, 2500);

}

</script>

  <section id="contact">
          <div style="    justify-items: anchor-center; margin-bottom: 15px;">
              <h2 class="title" style="margin: 0px;">Request Your Dine Expert</h2>
          </div >
          <div class="container1">
                  <!-- <div><img src="assets/img/music2.webp" alt=""></div> -->
              <form class="contact" id="contactForm" method="post" action=" ">
                      <div class="d-flex">
                          <div class="width">
                              <input type="text" name="cont_name" class="cont_name" placeholder="Name" >
                              <span class="usercontname error"></span>
                          </div>
                          
                          <div class="width">
                              <input type="text" name="cont_email" class="cont_email" placeholder="Email" >
                              <span class="usercontemail error"></span>
                          </div>
                      </div>

                      <div class="d-flex">
                          <div class="width">
                              <div style="display:flex; align-items:center;">
                                  <!-- <span  style="padding: 13px; background:#f1f1f1; color:#000; border-radius: 10px; margin-right: 10px;">
                                      +91
                                  </span> -->
                                  <input type="number" class="cont_phone" placeholder="Phone / WhatsApp"
                                          oninput="if(this.value.length > 10) this.value = this.value.slice(0,10)">
                              </div>
                              <span class="usercontphone error" ></span>
                          </div>

                          <div class="width"> 
                              <input type="text" name="cont_city" class="cont_city" placeholder="City" >
                              <span class="usercontcity error" ></span>
                          </div>

                          <div class="width"> 
                              <input type="text" name="cont_bname" class="cont_bname" placeholder="Business Name" >
                              <span class="usercontbname error" ></span>
                          </div>
                      </div>
                      <button type="submit" class="it-btn-theme btn submitss" name="submitss" id="">
                          Submit
                      </button>
                  </form>
          </div>
  </section>

<section class="pricing" id="package">
  <!-- Basic -->
  <div class="card">
    <h2>Basic</h2>
    <div class="price">₹999</div>
    <ul class="features">
      <li>QR Menu</li>
      <li>POS Billing</li>
      <li>Basic Reports</li>
    </ul>
    <a href="#" class="btn openPopupp" data-price="999">Get Started</a>
  </div>

  <!-- Pro -->
  <div class="card pro">
    <div class="badge">Most Popular</div>
    <h2>Pro</h2>
    <div class="price">₹2499</div>
    <ul class="features">
      <li>All Features</li>
      <li>Online Ordering</li>
      <li>Accounting</li>
    </ul>
    <a href="#" class="btn openPopupp" data-price="2499">Get Started</a>
  </div>

  <!-- Enterprise -->
  <div class="card">
    <h2>Enterprise</h2>
    <div class="price">₹4999</div>
    <ul class="features">
      <li>Multi Outlet Support</li>
      <li>Advanced Reports</li>
      <li>24/7 Support</li>
    </ul>
    <a href="#" class="btn openPopupp" data-price="4999">Get Started</a>
  </div>
</section>

<!-- Popup Form -->
<div id="popupForm" class="popup-overlay popupFormm">

    <div class="popup-box">

        <!-- Close Button -->
        <span class="close-btn closePopupp">&times;</span>

        <!-- Left Side -->
        <div class="popup-left">
            <img src="assets/img/banner/banner1.webp" alt="Dine Expert" class="popup-image">

                <p>
                    Providing digital solutions to help businesses build a strong online presence & achieve their goals.         
                </p>
        </div>

        <!-- Right Side -->
        <div class="popup-right">

            <div class="right_contant">
                <h2 style="margin:0px;">Schedule a free demo</h2>
                <p>
                    Get in touch with our team to clarify your Queries.
                </p>
            </div>
            
            <form class="contactt" id="contactForm" method="post" action=" ">
                    <div class="d-flex">
                        <div class="width">
                            <input type="text" name="conte_name" class="conte_name" placeholder="Name" >
                            <span class="usercontename error"></span>
                        </div>
                        <div class="width">
                            <input type="text" name="conte_email" class="conte_email" placeholder="Email" >
                            <span class="userconteemail error"></span>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="width">
                            <div style="display:flex; align-items:center;">
                                <input type="number" class="conte_phone" placeholder="Phone / WhatsApp"
                                        oninput="if(this.value.length > 10) this.value = this.value.slice(0,10)">
                            </div>
                            <span class="usercontephone error" ></span>
                        </div>
                        <div class="width"> 
                            <input type="text" name="conte_city" class="conte_city" placeholder="City" >
                            <span class="usercontecity  error" ></span>
                        </div>
                         <div class="width"> 
                            <input type="text" name="conte_bname" class="conte_bname" placeholder="Business Name" >
                            <span class="usercontebname error" ></span>
                        </div>
                    </div>

                      <div class="width" style="margin:10px 0px;">
                          <input type="text" name="conte_price" class="conte_price" id="conte_price" placeholder="Price">
                        </div>

                    <button type="submit" class="it-btn-theme btn submitsss" name="submitsss" id="">
                        Submit
                    </button>
            </form>
        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {

    const openBtnss = document.querySelectorAll(".openPopupp");

    const popupp = document.getElementById("popupForm");

    const closeBtnn = document.querySelector(".closePopupp");

    const priceField = document.getElementById("conte_price");

    // Open popup
    openBtnss.forEach(function(btn){

        btn.addEventListener("click", function(e){

            e.preventDefault();

            // Button ka price uthao
            let price = this.getAttribute("data-price");

            // Input field me set karo
            priceField.value = price;

            // Popup open
            popupp.style.display = "flex";
        });

    });

    openBtnss.forEach(function(btn){
        btn.addEventListener("click", function(e){
            e.preventDefault();
            popupp.style.display = "flex";
        });
    });

    closeBtnn.addEventListener("click", function(){
        popupp.style.display = "none";
    });

    window.addEventListener("click", function(e){
        if(e.target === popupp){
            popupp.style.display = "none";
        }
    });

});
</script>

<section class="faq-container" id="faq">
  <h2>Frequently Asked Questions</h2>

  <div class="faq-grid">

    <div class="faq-item">
      <div class="question">
            What is Dine Expert?
        <span class="icon">▼</span>
      </div>
      <div class="answer">Dine Expert is an all-in-one restaurant management software that handles billing, inventory, orders, and analytics.</div>
    </div>

    <div class="faq-item">
      <div class="question">
        Who can use Dine Expert?
        <span class="icon">▼</span>
      </div>
      <div class="answer">It is suitable for cafés, restaurants, cloud kitchens, and multi-outlet businesses.`</div>
    </div>

    <div class="faq-item">
      <div class="question">
        How does it help restaurants?
        <span class="icon">▼</span>
      </div>
      <div class="answer">It automates daily operations, reduces manual work, and improves efficiency.</div>
    </div>

    <div class="faq-item">
      <div class="question">
        Does it support online ordering?
        <span class="icon">▼</span>
      </div>
      <div class="answer">Yes, it supports dine-in, takeaway, and delivery orders.</div>
    </div>

    <div class="faq-item">
      <div class="question">
        Is the software easy to use?
        <span class="icon">▼</span>
      </div>
      <div class="answer">Yes, it has a user-friendly interface designed for easy operation.</div>
    </div>

    <div class="faq-item">
      <div class="question">
        Can I track inventory in real time?
        <span class="icon">▼</span>
      </div>
      <div class="answer">Yes, inventory tracking is available with real-time updates.</div>
    </div>

    <div class="faq-item">
      <div class="question">
          Does it provide reports and analytics?
        <span class="icon">▼</span>
      </div>
      <div class="answer">Yes, it offers detailed reports for better business decisions.</div>
    </div>

    <div class="faq-item">
      <div class="question">
        Is my data secure?
        <span class="icon">▼</span>
      </div>
      <div class="answer">Yes, the system ensures secure data handling and storage.</div>
    </div>

    <div class="faq-item">
      <div class="question">
        Can it manage multiple outlets?
        <span class="icon">▼</span>
      </div>
      <div class="answer">Yes, it supports multi-location restaurant management.</div>
    </div>

    <div class="faq-item">
      <div class="question">
        How can I get started?
        <span class="icon">▼</span>
      </div>
      <div class="answer">You can book a demo and set up the system based on your requirements.</div>
    </div>
  </div>
</section>

<?php include "common/footer.php" ?>
