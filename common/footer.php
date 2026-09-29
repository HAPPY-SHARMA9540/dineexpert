    <footer>
        <div class="container footer-grid">
        <div class="footer-column">
            <div class="logo"><img src="assets/img/logo/logo4.png" width="100" alt="" style="width:210px;"></div>
            <p style="margin-top:20px; color:#000000;">Dine Expert is a complete restaurant management solution designed to simplify operations, improve efficiency, and support business growth.</p>
        </div>

        <div class="footer-column">
            <h4>Quick Links</h4>
            <ul>
            <li><a href="#hero">Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#features">Features</a></li>
            <li><a href="#package">Package</a></li>
            <li><a href="#faq">FAQ</a></li>
            <li><a href="#contact">Contact</a></li>
            </ul>
        </div>

        <div class="footer-column">
            <h4>Solutions</h4>
            <ul>
            <li>Restaurants</li>
            <li>Cafes</li>
            <li>Cloud Kitchens</li>
            <li>Food Courts</li>
            </ul>
        </div>
        

        <div class="footer-column">
            <h4>Contact</h4>
<ul class="contact-info">
    <li>
        <i class="fa-solid fa-phone"></i>
        +91 9548734456
    </li>

    <li>
        <i class="fas fa-envelope"></i>
        info@dineexpert.com
    </li>

    <li>
        <i class="fa-solid fa-location-dot"></i>
        35 G/9 behind Rashmi Goyal
Hospital, Rampur Garden Bareilly, U.P.
India – 243003
    </li>
</ul>

<style>
.contact-info{
    list-style:none;
    padding:0;
    margin:0;
}

.contact-info li{
    display:flex;
    /* align-items:center; */
    gap:10px;
    margin-bottom:12px;
    font-size:16px;
    color:#fff;
}

.contact-info li i{
    color:#ff4d4d;
    font-size:18px;
    width:20px;
    margin-top:5px;
}
</style>
            <!-- Social Media Icons -->
<div class="social-icons">

    <a href="https://www.facebook.com/dineexpert/" target="_blank">
        <i class="fab fa-facebook-f"></i>
    </a>

    <a href="https://www.instagram.com/dineexpert_" target="_blank">
        <i class="fab fa-instagram"></i>
    </a>

    <a href="https://in.pinterest.com/dineexpert/" target="_blank">
        <i class="fa-brands fa-pinterest-p"></i>
    </a>

    <a href="https://x.com/dineexperts" target="_blank">
        <i class="fa-brands fa-x-twitter"></i>
    </a>

    <a href="https://www.linkedin.com/company/dine-expert/" target="_blank">
        <i class="fab fa-linkedin-in"></i>
    </a>

    <a href="https://www.youtube.com/@dineexperts" target="_blank">
        <i class="fab fa-youtube"></i>
    </a>

</div>

<style>
.social-icons{
    display:flex;
    gap:10px;
    align-items:center;
}

.social-icons a{
    width: 40px;
    height: 40px;
    background: #000;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    text-decoration: none;
    transition: 0.3s;
    font-size: 18px;
}

.social-icons a:hover{
    background:#ff4d4d;
    transform:translateY(-5px);
}
</style>
        </div>
        </div>

        <div class="copyright">
        © 2026 All Rights Reserved Dine Expert | Powered by <a href="https://worldomania.com/" style="color:red;"> Worldomania</a> 
        </div>
    </footer>
        <div id="popupSuccess" class="popup">
            <div class="popup-box1">
                <h2>Thank You 🙏</h2>
                <p>Thank You For Connecting With BrandTune Studio.</p>
                <button id="closePopup">OK</button>
            </div>
        </div>

  <style>
        .popup {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0,0,0,0.6);
  display: none;
  justify-content: center;
  align-items: center;
  justify-items: center;
  align-content: center;
  z-index: 9999;
}

.popup-box1 {
    background: #fff;
    padding: 25px 20px;
    border-radius: 10px;
    text-align: center;
    width: 100%;
    height: 27%;
    max-width: 500px;
    animation: popupFade 0.3s ease;
}

.popup-box1 h2 {
  margin-bottom: 10px;
  color: #7d19f2;
}

.popup-box1 button {
  margin-top: 15px;
  padding: 8px 20px;
  border: none;
  background: #7d19f2;
  color: #fff;
  border-radius: 5px;
  cursor: pointer;
}

@keyframes popupFade {
  from { transform: scale(0.7); opacity: 0; }
  to { transform: scale(1); opacity: 1; }
}
    </style>

    </body>
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script type="text/javascript">
    $(".submitss").click(function(event) {
    event.preventDefault();

    var user = $(".cont_name").val().trim();
    var cont_email = $(".cont_email").val().trim();
    var cont_bname = $(".cont_bname").val().trim();
    var cont_city = $(".cont_city").val().trim();
    var cont_phone = $(".cont_phone").val().trim();
    let error = false;
    let errorMsg = "";

    // Name validation
    if (user == "") {
        $(".usercontname").html("Please fill the name").show();
        errorMsg += "• Please fill the name\n";
        error = true;
    }

    // Email validation
    if (cont_bname == "") {
        $(".usercontbname").html("Please fill the bname").show();
        errorMsg += "• Please fill the bname\n";
        error = true;
    }

    // Email validation
    if (cont_email == "") {
        $(".usercontemail").html("Please fill the email").show();
        errorMsg += "• Please fill the email\n";
        error = true;
    }

    // Email validation
    if (cont_city == "") {
        $(".usercontcity").html("Please fill the city").show();
        errorMsg += "• Please fill the city\n";
        error = true;
    }

    // Phone validation
    if (cont_phone == "") {
        $(".usercontphone").html("Please fill the phone no.").show();
        errorMsg += "• Please fill the phone number\n";
        error = true;
    } else if (isNaN(cont_phone)) {
        $(".usercontphone").html("Only digits allowed").show();
        errorMsg += "• Phone must contain digits only\n";
        error = true;
    } else if (cont_phone.length != 10) {
        $(".usercontphone").html("Phone must be 10 digits").show();
        errorMsg += "• Phone number must be 10 digits\n";
        error = true;
    }

    // If error found — show alert after 3 seconds
    if (error) {
        // setTimeout(function(){
        //     alert("Please fix the following:\n\n" + errorMsg);
        // }, 3000);

        setTimeout(function(){
            $(".error").html('');
        }, 2000);

        return false;
    }

    // AJAX Submit
    $.ajax({
        type: "POST",
        url: "mailer.php",
        data: {user,cont_bname,cont_email,cont_city,cont_phone},
        dataType: 'json',
        success: function(data) {
    if (data.msg) {
        $('.contact')[0].reset();

        $("#popupSuccess").fadeIn(); // popup show

    } else {
        alert("Something went wrong!");
    }
}
    });

});

$("#closePopup").click(function(){
    $("#popupSuccess").fadeOut();
});
    </script>


  <script type="text/javascript">
    $(".submitsss").click(function(event) {
    event.preventDefault();

    var user = $(".conte_name").val().trim();
    var conte_bname = $(".conte_bname").val().trim();
    var conte_email = $(".conte_email").val().trim();
    var conte_phone = $(".conte_phone").val().trim();
    var conte_city = $(".conte_city").val().trim();
    var conte_price = $(".conte_price").val().trim();
    let error = false;
    let errorMsg = "";

    // Name validation
    if (user == "") {
        $(".usercontename").html("Please fill the name").show();
        errorMsg += "• Please fill the name\n";
        error = true;
    }

    // Email validation
    if (conte_bname == "") {
        $(".usercontebname").html("Please fill the bname").show();
        errorMsg += "• Please fill the bname\n";
        error = true;
    }

    // Email validation
    if (conte_email == "") {
        $(".userconteemail").html("Please fill the email").show();
        errorMsg += "• Please fill the email\n";
        error = true;
    }

    // Email validation
    if (conte_city == "") {
        $(".usercontecity").html("Please fill the city").show();
        errorMsg += "• Please fill the city\n";
        error = true;
    }

    // Phone validation
    if (conte_phone == "") {
        $(".usercontephone").html("Please fill the phone no.").show();
        errorMsg += "• Please fill the phone number\n";
        error = true;
    } else if (isNaN(conte_phone)) {
        $(".usercontephone").html("Only digits allowed").show();
        errorMsg += "• Phone must contain digits only\n";
        error = true;
    } else if (conte_phone.length != 10) {
        $(".usercontephone").html("Phone must be 10 digits").show();
        errorMsg += "• Phone number must be 10 digits\n";
        error = true;
    }

    // Email validation
    if (conte_price == "") {
        $(".userconteprice").html("Please fill the price").show();
        errorMsg += "• Please fill the price\n";
        error = true;
    }

    // If error found — show alert after 3 seconds
    if (error) {
        // setTimeout(function(){
        //     alert("Please fix the following:\n\n" + errorMsg);
        // }, 3000);

        setTimeout(function(){
            $(".error").html('');
        }, 2000);

        return false;
    }

    // AJAX Submit
    $.ajax({
        type: "POST",
        url: "package.php",
        data: {user,conte_bname,conte_email,conte_phone,conte_city,conte_price},
        dataType: 'json',
        success: function(data) {
    if (data.msg) {
        $('.contactt')[0].reset();

        $("#popupSuccess").fadeIn(); // popup show

    } else {
        alert("Something went wrong!");
    }
}
    });

});

$("#closePopup").click(function(){
    $("#popupSuccess").fadeOut();
});
    </script>

<script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();

        const target = document.querySelector(this.getAttribute('href'));
        target.scrollIntoView({
            behavior: 'smooth',
            block: 'center'  
        });
    });
});
</script>

<script>
    // ==========================================================

const toggle = document.getElementById("menu-toggle");
const menu = document.getElementById("menu");
const overlay = document.getElementById("overlay");
const closeBtn = document.getElementById("menu-close");

toggle.addEventListener("click", () => {
  toggle.classList.toggle("active");
  menu.classList.toggle("active");
  overlay.classList.toggle("active");
});

closeBtn.addEventListener("click", () => {
  toggle.classList.remove("active");
  menu.classList.remove("active");
  overlay.classList.remove("active");
});

overlay.addEventListener("click", () => {
  toggle.classList.remove("active");
  menu.classList.remove("active");
  overlay.classList.remove("active");
});
</script>


<script>

const items = document.querySelectorAll('.faq-item');
items.forEach(item => {
  item.querySelector('.question').addEventListener('click', () => {

    // close all
    items.forEach(i => i.classList.remove('active'));

    // open clicked
    item.classList.add('active');

  });
});
</script>


    <script>
    const counters = document.querySelectorAll('.counter');

    counters.forEach(counter => {
    const target = parseFloat(counter.getAttribute('data-target'));
    let count = 0;

    const update = () => {
        const increment = target / 100;

        if (count < target) {
        count += increment;
        counter.innerText = Math.floor(count);
        requestAnimationFrame(update);
        } else {
        // final values format
        if (target === 10000) {
            counter.innerText = "10K+";
        } else if (target === 500) {
            counter.innerText = "500+";
        } else if (target === 99.9) {
            counter.innerText = "99.9%";
        } else if (target === 24) {
            counter.innerText = "24/7";
        } else {
            counter.innerText = target;
        }
        }
    };

    update();
    });
    </script>


    </html>
