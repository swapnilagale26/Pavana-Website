
<!-- Modal -->
<div class="schedule modal fade  " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myForm1">Schedule A Call</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
         <!--  <form action=""  method="post" id="myForm1"> -->
         <form action="contact_valid1.php" class="form-validation" autocomplete="off" method="post" id="myForm1" enctype="multipart/form-data">
          <div id="check2"></div>
            <div class="form-group row">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <input type="text" class="form-control" name="name" id="name" placeholder="First name" required>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <input type="text" class="form-control" name="lname" id="lname" placeholder="Last name" required>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email Address" required>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <input type="text" class="form-control" name="org" id="org" placeholder="Organization" required>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <input type="text" class="form-control" name="city" id="city" placeholder="City" required>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <input type="text" class="form-control" name="country" id="country" placeholder="Country"  required>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <input type="text" class="form-control" name="prefertime" id="prefertime" placeholder="Preferred time to call" required>
              </div>
              
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number"  required>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                <select class="form-control" name="services" id="services" >
                  <option value="Services Interested in">Services Interested in</option>
                  <option value="Custom / Bespoke eLearning">Custom / Bespoke eLearning</option>
                  <option value="Mobile Learning">Mobile Learning</option>
                  <option value="Translation & Localization">Translation & Localization</option>
                  <option value="Animated Explainer Videos">Animated Explainer Videos</option>
                  <option value="Extended Course Development Center">Extended Course Development Center</option>
                  <option value="Custom / Bespoke Software Development">Custom / Bespoke Software Development</option>
                  <option value="Open Source Solution - Moodle">Open Source Solution - Moodle</option>
                  <option value="Learning Management System">Learning Management System</option>
                </select>
              </div>
            
            </div>
            <div class="form-group row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <p><strong>Note:</strong> Field marked with * are mandatory</p>
              </div>
            </div>
          <div class="modal-footer">
        <button type="submit" name="submit" value="Get request" id="btn_submit1" class="btn submit ">Submit</button>
      </div>
      </form>
      </div>
      
    </div>
    
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    // $(document).ready(function(){
    //     $('#myForm1').submit(function(e){
    //   alert('hi');
    //         e.preventDefault();
    //         var name = $('#name').val();
    //         var lname = $('#lname').val();
    //         var email = $('#email').val();
    //         var phone = $('#phone').val();
    //         var org = $('#org').val();
    //         var city = $('#city').val();
    //         var country = $('#country').val();
    //         var prefertime = $('#prefertime').val();
            

    //   var error = false;
    //   var flg=1;
      
    //    var name_regex="^[a-zA-Z\\s]*$";
    //     var email_regex =/\b(^(\S+@).+((\.com)|(\.net)|(\.edu)|(\.mil)|(\.gov)|(\.org)|(\.info)|(\.in)|(\.biz)|(\.aero)|(\.coop)|(\.museum)|(\.name)|(\.pro)|(\..{2,2}))$)\b/gi;
    //     var mobile_regex=/\d{10}/;
    
    //   if(!name.match(name_regex) || name == "")
    //   {
    //     $('#check2').html('** Please Enter your Name **').css( "color", "red");
    //     $("#name").focus();
    //     var error = true;
    //     return false;
    //   }
    //     if (lname == "") 
    //   {
    //     $('#check2').html('** Please Enter Your Last Name **').css( "color", "red");
    //     $("#lname").focus();
    //     var error = true;
    //     return false;
    //   }
    //   if (!email.match(email_regex)|| email == "") 
    //   {
    //     $('#check2').html('** Please Enter Your Email Id **').css( "color", "red");
    //     $("#email").focus();
    //     var error = true;
    //     return false;
    //   }
    //   if (!phone.match(mobile_regex)|| phone == "") 
    //   {
    //     $('#check2').html('** Please Enter Your Mobile Number **').css( "color", "red");
    //     $("#phone").focus();
    //     var error = true;
    //     return false;
    //   }
    //     if (org == "") 
    //   {
    //     $('#check2').html('** Please Enter Your Organization **').css( "color", "red");
    //     $("#org").focus();
    //     var error = true;
    //     return false;
    //   }

    //     if (city == "") 
    //   {
    //     $('#check2').html('** Please Enter Your City **').css( "color", "red");
    //     $("#city").focus();
    //     var error = true;
    //     return false;
    //   }
    //     if (country == "") 
    //   {
    //     $('#check2').html('** Please Enter Your Country **').css( "color", "red");
    //     $("#country").focus();
    //     var error = true;
    //     return false;
    //   }
    //     if (prefertime == "") 
    //   {
    //     $('#check2').html('** Please Enter Your Preferred Time To Call **').css( "color", "red");
    //     $("#prefertime").focus();
    //     var error = true;
    //     return false;
    //   }
    //   if(error!=true)
    //   {
    //     $('#btn_submit1').attr({'disabled' : 'true', 'value' : 'Sending...' });  
    //      var form = $('#myForm1')[0];
    //     var formData = new FormData(form);
    //     $.ajax({
    //       url: "contact_valid1.php", 
    //       type: "POST",             
    //       data: formData,
    //       contentType: false,       
    //       cache: false,             
    //       processData:false, 
    //       success: function(data) {
          
            
    //         if(data=='sent')
    //         {
    //           $('#btn_submit1').removeAttr('disabled').attr('value', 'Sent')
    //              $('#check2').html(data).css("color","green");
    //            $("#myForm1").get(0).reset();
              
    //         }
    //         else
    //         {
    //             $('#btn_submit1').removeAttr('disabled').attr('value', 'Retry');
    //           $('#check2').html(data).css("color","red");
    //         }
    //       }
    //     });
    //     return false;
    //   }
    //     });
    // });
</script>

<footer>
  <div class="footer-1 " style="background-image: url('img/new-img/footer-back1.jpg')">
    <div class="container">
      <div class="row">
          <div class="col-md-4 col-sm-6 col-12">
          <h2>PAVANA LAKE CAMPING</h2>
          
          <ul class="footer-news mt-25">
            <li><div class="media">
              <i class="fas fa-map-marker-alt"></i>
              <div class="media-body">
                <p>Thakursai Village, PavanaNagar, Pune</p>
              </div>
            </div></li>
            <li><div class="media">
              <i class="fas fa-mobile-alt"></i>
              <div class="media-body">
                <p>+91 897-513-3319 (What's App) / 915-614-8612 /<br> 726-206-2415 (What's App / Google Pay / <br> Phone Pay)</p>
              </div>
            </div></li>
          <li><div class="media">
              <i class="far fa-envelope"></i>
              <div class="media-body">
                <p>pavanalakecampinghelp@gmail.com</p>
              </div>
              </div></li>
          </ul>
        </div>
        <div class="col-md-4 col-sm-6 col-12" style="display:none">
          <h2>RECENT POST</h2>
          <div class="row mt-25">
            <div class="col-md-12 col-sm-6" style="line-height: 35px;">
              <ul class="footer-nav footer-nav1" >
                <li><a href="#">Upcoming trends to look for in 2020</a></li>
                <li><a href="#">5 steps to convert Flash to HTML5 and why?</a></li>
                <li><a href="#">How to leverage video learning in the corporate workplace</a></li>
                <li><a href="#">Best practices for converting ILT to eLearning</a></li>
              </ul>
              <!-- <a href="https://api.whatsapp.com/send?phone=918975133319&text=Hello%20Pavana%20Riverside%20Camping%20let%20me%20know%20more%20about%20Package,%20Details%20and%20and%20Bookings" class="btn whatsapp"> <i class="fab fa-whatsapp"></i> WhatsApp <i class="fas fa-arrow-right"></i></a> -->
            </div>
         
          </div>
        </div>
        
        <div class="col-md-4 col-sm-6 col-12">
          <h2>QUICK LINKS</h2>
          <div class="row mt-25">
            <div class="col-lg-4  col-md-4  col-sm-6">
              <ul class="footer-nav">
                <li><a href="#book">Book Now</a></li>
                <li><a href="#package">Our Package</a></li>
                <li><a href="tel:8975133319">Call Now</a></li>
				   <li><a href="#"  data-toggle="modal" data-target="#know_ventura" style="width: 500px">Camping Schedule</a></li>
                <li><a href="#about-pavana">About Us</a></li>
                <li style="margin-top: 20px; font-size:20px" ><a href="https://www.facebook.com/pg/Pavana-Lake-Camping-107590257620551/about/?ref=page_internal" style="font-size: 20px" target="_blank"><i class="fab fa-facebook"></i></a><a href="https://www.linkedin.com/in/pavana-camping-4037aa1a9/" style="margin-left:10px;font-size: 20px" target="_blank"><i class="fab fa-linkedin"></i></a> <a href="tel:8975133319" style="margin-left:4px;font-size: 20px" target="_blank"><i class="fa fa-phone"></i></a></li>
                <li><a href="https://www.instagram.com/pavanalakecampinghelp/" style="font-size: 20px" target="_blank"><i class="fab fa-instagram"></i></a><a href="https://api.whatsapp.com/send?phone=918975133319&text=Hello%20Pavana%20Riverside%20Camping%20,%20Please%20let%20me%20know%20more%20about%20Camping,%20details%20and%20bookings%20offerings" style="margin-left:10px; font-size: 20px" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
              </ul>
      </div>
     
           
          </div>
        </div>
     
      </div>
    </div>
    <div class="footer-1-bar" style="margin-bottom: -80px">
      <p>copyright © <script>document.write(new Date().getFullYear())</script>. All Rights Reserved. | <a href=""> sitemap </a> | <a href="#">Privacy Pocily</a> | <a href="">Terms Of Use</a></p>
    </div>
 
  </div>
  <!-- <button class="open-button" onclick="openForm()">Let's Talk</button> -->
<!-- 
<div class="chat-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <div class="new-div">
      <h4>Let's Talk</h4>
      <p>Please fill out the form below to start chatting with the next available agent.</p>
    </div>

    <div class="form">
      <div class="form-group row">
        <div class="col-md-12">
          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Name">
        </div>
      </div>
      <div class="form-group row">
        <div class="col-md-12">
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
      </div>
       <div class="form-group row btn-row"> 
          <div class="col-md-6">
            <button type="submit" class="btn btn-primary">Start Chat</button>
          </div>
          <div class="col-md-6">
            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
          </div>
        </div>
   
  <!--   <textarea placeholder="Type message.." name="msg" required></textarea> -->
</div> 

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
</footer>
<a href="#" class="scroll-to-top"><i class="fas fa-chevron-up"></i></a><script src="js/jquery.min.js"></script><script src="js/plugins.js"></script><script src="js/navigation.js"></script><script src="js/navigation.fixed.js"></script><script src="js/map.js"></script><script src="js/rev-slider/jquery.themepunch.tools.min.js"></script><script src="js/rev-slider/jquery.themepunch.revolution.min.js"></script><script src="js/rev-slider/revolution.extension.actions.min.js"></script><script src="js/rev-slider/revolution.extension.carousel.min.js"></script><script src="js/rev-slider/revolution.extension.kenburn.min.js"></script><script src="js/rev-slider/revolution.extension.layeranimation.min.js"></script><script src="js/rev-slider/revolution.extension.migration.min.js"></script><script src="js/rev-slider/revolution.extension.parallax.min.js"></script><script src="js/rev-slider/revolution.extension.navigation.min.js"></script><script src="js/rev-slider/revolution.extension.slideanims.min.js"></script><script src="js/rev-slider/revolution.extension.video.min.js"></script><script src="js/main.js"></script>

<script>

function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

</script>
<script src="js/wow.min.js"></script>
  <script>
  new WOW().init();
  </script>
<script>
  $(document).ready(function(){
      $('.customer-logos').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: false,
        dots: false,
          pauseOnHover: false,
          responsive: [{
          breakpoint: 768,
          settings: {
            slidesToShow: 3
          }
        }, {
          breakpoint: 520,
          settings: {
            slidesToShow: 2
          }
        }]
      });
    });
</script>


  <script>
  $(document).ready(function() {

// Gets the video src from the data-src on each button

var $videoSrc;  
$('.video-btn').click(function() {
    $videoSrc = $(this).data( "src" );
});
console.log($videoSrc);

  
  
// when the modal is opened autoplay it  
$('#myModal').on('shown.bs.modal', function (e) {
    
// set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
$("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" ); 
})
  


// stop playing the youtube video when I close the modal
$('#myModal').on('hide.bs.modal', function (e) {
    // a poor man's stop video
    $("#video").attr('src',$videoSrc); 
}) 
// document ready  
});
</script>

</body>
</html>