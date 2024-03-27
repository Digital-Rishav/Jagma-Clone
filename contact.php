<?php
require('top.php');
?>
     <!--------------------------contact section start-------------------------->
     <div class="container-fluid">
        <div class="row">
           <div class="col-lg-12 col-11 mx-auto feature">
               <div class="row">
                   <div class="col-lg-12 feature-heading text-center">
                       <h1>CONTACT US</h1>
                   </div>
                   <div class="col-lg-6 col-11 mx-auto feature-text text-center mb-5">
                    <h1 class="my-5">CONTACT US</h1>
                    <p class="contact-para">If You Have Any Query, Feel Free To Contact Us</p>
                   </div>
                   <div class="col-lg-10 col-12 mx-auto contact-main mt-5 p-0">
                    <div class="row">
                        <div class="col-lg-4 col-12 mx-auto">
                            <div class="contact-main-div mx-auto d-flex align-items-center justify-content-around">
                                <div>
                                    <i class="fa-solid fa-award"></i>
                                </div>
                                <div class="mt-3">
                                    <h1>Call to ask any question</h1>
                                    <p>+91 9234738747</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12 mx-auto">
                            <div class="contact-main-div d-flex align-items-center justify-content-around mx-auto">
                                <div>
                                    <i class="fa-solid fa-award"></i>
                                </div>
                                <div class="mt-3">
                                    <h1>Email to get free quote</h1>
                                    <p>support@jagmaconsulting.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12 mx-auto">
                            <div class="contact-main-div mx-auto d-flex align-items-center justify-content-around">
                                <div>
                                    <i class="fa-solid fa-award"></i>
                                </div>
                                <div class="">
                                   <p>Visit our office</p>
                                </div>
                            </div>
                        </div>
                    </div>
                   </div>
                   <div class="col-lg-10 col-12 mx-auto contact-main my-5 p-0">
                    <div class="row">
                        <div class="col-lg-6 col-12 mx-auto">
                            <div class="contact-sub-div mx-auto">
                               <form class="w-100 bg-white">
                                <div>
                                    <div class="d-flex flex-column">
                                    <input type="text" name="name" id="name" placeholder="Your Name" require>
                                    
                                      <span class="error" id="name_error"></span>
                                    
                                    </div>
                                    <div class="d-flex flex-column">
                                    <input type="text" name="email" id="email" placeholder="Your Email" require>
                                    
                                      <span class="error" id="email_error"></span>
                                    
                                    </div>
                                </div>
                                    <div>
                                    <input type="text" name="sub" id="sub" placeholder="Subject" require> 
                                    
                                      <span class="error mt-4" id="sub_error"></span>
                                    
                                    </div>
                                    <div>
                                    <textarea name="msg" id="msg" placeholder="Your Message" class="w-100" rows="6" require></textarea>
                                    
                                      <span class="error" id="msg_error"></span>
                                    
                                    </div>
                                    <button type="button" onclick="send_message()" class="d-inline-block">SEND MESSAGE</button>
                                    <span class="new_msg"></span>
                               </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12 mx-auto">
                            <div class="contact-sub-div mx-auto mt-4">
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14388.93941606165!2d85.08143720145344!3d25.630329788951357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed577564a2366b%3A0x8c818cf08ab0a29!2sRajeev%20Nagar%2C%20Patna%2C%20Bihar!5e0!3m2!1sen!2sin!4v1710568375559!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
     <!--------------------------contact section end-------------------------->
     <?php
require('footer.php');
?>
<script>
    function send_message(){
        jQuery('.error').html('');
        var name =jQuery('#name').val();
        var email =jQuery('#email').val();
        var sub =jQuery('#sub').val();
        var msg =jQuery('#msg').val();
        var is_error='';

        if(name==''){
            jQuery('#name_error').html("Please enter name");
            is_error = 'yes';
        }
        if(email==''){
            jQuery('#email_error').html("Please enter email");
            is_error = 'yes';
        }
        if(sub==''){
            jQuery('#sub_error').html("Please enter subject");
            is_error = 'yes';
        }
        if(msg==''){
            jQuery('#msg_error').html("Please enter message");
            is_error = 'yes';
        }else

        if(is_error==''){
            jQuery.ajax({
              url: 'send_message.php',
              type:'post',
              data:'name='+name+ '&email='+email+ '&sub='+sub+ '&msg='+msg,
              success: function(result){
                  if(result == "valid"){
                    jQuery("#name").val("");
                    jQuery("#email").val("");
                    jQuery("#sub").val("");
                    jQuery("#msg").val("");
                    jQuery('.new_msg').html("Data sent successfully");
                    
                  }else{
                    jQuery('.new_msg').html("data not sent");
                  }
              }
            });
        }
    }
</script>