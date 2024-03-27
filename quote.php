<?php
 require('top.php');
 ?>
<!-------------------------quote section start-------------------------->
     <div class="container-fluid">
        <div class="row">
           <div class="col-lg-12 col-11 mx-auto">
               <div class="row">
                   <div class="col-lg-12 quote-heading text-center">
                       <h1>FREE QUOTE</h1>
                   </div>
                   <div class="col-lg-10 mx-auto req-quote my-5">
                    <h1 class="main-header">REQUEST A QUOTE</h1>
                    <p>Need A Free Quote? Please Feel Free to Contact Us</p>
                    <p class="my-5">Welcome to Jagma Consulting, where we are committed to driving your success through tailored consulting services. Our team of experienced consultants is dedicated to partnering with you to navigate challenges, capitalize on opportunities, and achieve your goals.</p>
                    <p class="my-5">Before we begin our journey together, we'd like to gather some key information to better understand your unique needs and objectives. This will help us provide you with a comprehensive and customized solution that delivers real, measurable results.</p>
                    <h1 class="blue-quote">Let's Get Started</h1>
                    <p class="my-5">To kick off our collaboration, we invite you to fill out the free quote form. This will give us a head start in understanding your requirements and tailoring our approach accordingly. Rest assured, your information will remain confidential and will only be used for the purpose of providing you with an accurate quote.</p>
                    <div class="quote-info d-flex align-items-center mb-5">
                        <div>
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div>
                            <h2>Call to ask any question</h2>
                            <h1 class="blue-quote">+91 9234738747</h1>
                        </div>
                    </div>
                   </div>
                   <div class="col-lg-10 col-12 mx-auto quote_area my-3">
                   <form id = "form1">
                        <div class="quote_heading text-center">
                            <h3>Unlocking Your Potential Through Expert Consultation</h3>
                        </div>
                            <hr class="hr1">
                            <div class="quote_logo d-flex justify-content-around align-items-center text-center">
                                <div>
                                    <i class="fa-solid fa-user" id="quote_btn1"></i>
                                    <h5>Personal Details</h5>
                                </div>
                                <div>
                                    <i class="fa-solid fa-sitemap" id="quote_btn2"></i>
                                    <h5>Organisation Details</h5>
                                </div>
                                <div>
                                    <i class="fa-solid fa-briefcase" id="quote_btn3"></i>
                                    <h5>personal Details</h5>
                                </div>
                            </div>
                            <!-----------------first page of quote--------------------->
                            <div class="quote_field quote_field-first mx-auto" id="quote1">
                                <h1 class="mb-3">Personal Details</h1>
                                <hr class="hr2">
                                <div>
                                <div class="d-flex">
                                <div>
                                  <input type="text" name="name" id="name" placeholder="Your Name*">
                                  <span class="error" id="name_error"></span>
                                </div>
                                <div>
                                  <input type="text" name="email" id="email" placeholder="Email Id*">
                                  <span class="error" id="email_error"></span>
                                </div>
                                <div>
                                  <input type="text" id="aemail" id="aemail" placeholder="Alternate Email Id"><br>
                                  <span class="error" id="ale_error"></span>
                                </div>
                                </div>
                                <div class="d-flex">
                                <div>
                                  <input type="text" name="phone" id="phone" placeholder="Phone*">
                                  <span class="error" id="phone_error"></span>
                                </div>
                                <div class="">
                                  <input type="text" name="aphone" id="aphone" placeholder="Alternate">
                                  <span class="error" id="alp_error"></span>
                                </div>
                                </div>
                                </div>
                                <button type="button" onclick="send1()">Next</button>
                                <span class="new_msg"></span>
                            </div>
                              <!-----------------second page of quote--------------------->
                            <div class="quote_field quote_field-second mx-auto" id="quote2">
                                <h1>Organisational Details</h1>
                                <hr class="hr2">
                            <div class="quote_field2 d-flex justify-content-around align-items-center">
                            <div>
                                <input type="text" name="org" id="org" placeholder="Your Organisation Name*">
                                
                                    <span class="error" id="org_error"></span>
                                
                            </div>
                            <div>
                                <input type="text" name="url" id="url" placeholder="URL of your Organisation*">
                                
                                    <span class="error" id="url_error"></span>
                                
                            </div>
                            <div>
                                <input type="text" name="head" id="head" placeholder="Total Head Count*">
                                
                                    <span class="error" id="head_error"></span>
                                
                            </div>
                            </div>
                            <div class="m-5">
                                <button type="button" onclick="send2()" class="d-block">Next</button>
                                <span class="new_msg"></span>
                            </div>
                            </div>

                            
                              <!-----------------third page of quote--------------------->
                            <div class="quote_field mx-auto quote-field_third" id="quote3">
                                <h1>Project Details</h1>
                                <hr class="hr2 m-0 p-0">
                            <div class="quote_field2 d-flex justify-content-around align-items-center">
                            <div>
                                <input type="text" name="project" id="project" placeholder="Project Type*">
                                
                                    <span class="error" id="project_error"></span>
                                
                            </div>
                            <div>
                                <input type="text" name="skill" id="skill" placeholder="Skills and Technology">
                                
                                    <span class="error" id="skill"></span>
                            
                            </div>
                            <div>
                                <input type="text" name="tent" id="tent" placeholder="Tentative project start date">
                                
                                    <span class="error" id="tent_error"></span>
                                
                            </div>
                            </div>
                             <div class="quote-field2 d-flex justify-content-around align-items-center">
                            <div>
                                <input type="text" name="location" id="location" placeholder="Project Locations">
                                
                                    <span class="error" id="location_error"></span>
                                
                            </div>
                            <div>
                                <input type="text" name="requir" id="requir" placeholder="Select Requirement*">
                                
                                    <span class="error" id="requir_error"></span>
                                
                            </div>
                            <div>
                                <input type="text" name="time" id="time" placeholder="Estimated Delivery Time">
                                
                                    <span class="error" id="time_error"></span>
                                
                            </div>
                            </div>
                             <div class="quote-field2 d-flex justify-content-around align-items-center">
                            <div>
                                <input type="text" name="pricing" id="pricing" placeholder="Select Pricing Quote*">
                                
                                    <span class="error" id="pricing_error"></span>
                                
                            </div>
                            <div>
                                <input type="text" name="size" id="size" placeholder="Select Project Size*">
                                
                                    <span class="error" id="size_error"></span>
                                
                            </div>
                            <div>
                                <input type="text" name="org" id="org" placeholder="Expected Resource Loading Sheet" class="border-0">
                                
                                
                            </div>
                            </div>
                            <div class="d-inline-block">
                                <input type="file" name="file1" class="quote-file">
                            </div>
                            <div class="m-5">
                                <button type="button" onclick="send2()" class="d-block">Request A Quote</button>
                                <span class="new_msg"></span>
                            </div>
                            </div>
                          </form>
                   </div>

                   
                   <div class="col-lg-10 quote-text mx-auto my-5 fs-3">
                    <p>Once we receive your submission, our team will review your details and reach out to you within the next 3 Business days to discuss the next steps. We're excited to embark on this journey with you and help you achieve sustainable growth and success.</p>
                    <p>If you have any immediate questions or would like to speak to a consultant before filling out the quote, please don't hesitate to contact us at [contact information].</p>
                    <p>Thank you for considering Jagma Consulting. We look forward to the opportunity of working together!</p>
                   </div>
               </div>
           </div>
        </div>
     </div>
   <!-----------------------------quote html ends here------------------------------------>
   <?php
 require('footer.php');
 ?>
<script>
   
   var btn1 = document.getElementById("quote_btn1");
   var btn2 = document.getElementById("quote_btn2");
   var btn3 = document.getElementById("quote_btn3");
   var quote1 = document.getElementById("quote1");
   var quote2 = document.getElementById("quote2");
   var quote3 = document.getElementById("quote3");
   var form1 = document.getElementById("form1");

   btn1.addEventListener('click', function(){
      quote1.style.display = "block";
      quote2.style.display = "none";
      quote3.style.display = "none";
   });

   btn2.addEventListener('click', function(){
      quote2.style.display = "block";
      quote1.style.display = "none";
      quote3.style.display = "none";
   });

   btn3.addEventListener('click', function(){
      quote3.style.display = "block";
      quote2.style.display = "none";
      quote1.style.display = "none";
      form1.style.height = "63rem";
   });
</script>
<!---------------------------first form data script----------------------------->
<script>
    function send1(){
        jQuery(".error").html("");
        var name =jQuery("#name").val();
        var email =jQuery("#email").val();
        var aemail =jQuery("#aemail").val();
        var phone =jQuery("#phone").val();
        var aphone =jQuery("#aphone").val();
        
        is_error = '';
        if(name==''){
            jQuery("#name_error").html("Please enter name");
            is_error = "yes";
        }
        if(email==''){
            jQuery("#email_error").html("Please enter email");
            is_error = "yes";
        }
        if(aemail==''){
            jQuery("#ale_error").html("enter altername email");
            is_error = "yes";
        }
        if(phone==''){
            jQuery("#phone_error").html("Please enter phone");
            is_error = "yes";
        }
        if(aphone==''){
            jQuery("#alp_error").html("enter alternate phone");
            is_error = "yes";
        }else{
            if(is_error==''){
                jQuery.ajax({
                    url: 'send_first.php',
                    type: 'post',
                    data: 'name='+name+ '&email='+email+ '&aemail='+aemail+ '&phone='+phone+ '&aphone='+aphone,
                    success:function(result){
                        if(result=="valid"){
                            jQuery(".new_msg").html("Data sent successfully");
                            jQuery("#name").val("");
                            jQuery("#email").val("");
                            jQuery("#aemail").val("");
                            jQuery("#phone").val("");
                            jQuery("#aphone").val("");
                        }else{
                            jQuery(".new_msg").html("Data not sent");
                        }
                    }
                });
            }
        }
    }
</script>
<!---------------------------second form data script----------------------------->
<script>
    function send2(){
        jQuery(".error").html("");
        var org =jQuery("#org").val();
        var url =jQuery("#url").val();
        var head =jQuery("#head").val();
        
        is_error = '';
        if(org==''){
            jQuery("#org_error").html("Please enter organisation name");
            is_error = "yes";
        }
        if(url==''){
            jQuery("#url_error").html("Please enter URL");
            is_error = "yes";
        }
        if(head==''){
            jQuery("#head_error").html("enter enter head count");
            is_error = "yes";
        }else{
            if(is_error==''){
                jQuery.ajax({
                    url: 'send_second.php',
                    type: 'post',
                    data: 'org='+org+ '&url='+url+ '&head='+head,
                    success:function(result){
                        if(result=="valid"){
                            jQuery("#org").val("");
                            jQuery("#url").val("");
                            jQuery("#head").val("");
                            jQuery(".new_msg").html("Data sent successfully");
                           
                        }else{
                            jQuery(".new_msg").html("Data not sent");
                        }
                    }
                });
            }
        }
    }
</script>
<!---------------------------third form data script----------------------------->
<script>
    function send1(){
        jQuery(".error").html("");
        var name =jQuery("#name").val();
        var email =jQuery("#email").val();
        var aemail =jQuery("#aemail").val();
        var phone =jQuery("#phone").val();
        var aphone =jQuery("#aphone").val();
        
        is_error = '';
        if(name==''){
            jQuery("#name_error").html("Please enter name");
            is_error = "yes";
        }
        if(email==''){
            jQuery("#email_error").html("Please enter email");
            is_error = "yes";
        }
        if(aemail==''){
            jQuery("#ale_error").html("enter altername email");
            is_error = "yes";
        }
        if(phone==''){
            jQuery("#phone_error").html("Please enter phone");
            is_error = "yes";
        }
        if(aphone==''){
            jQuery("#alp_error").html("enter alternate phone");
            is_error = "yes";
        }else{
            if(is_error==''){
                jQuery.ajax({
                    url: 'send_first.php',
                    type: 'post',
                    data: 'name='+name+ '&email='+email+ '&aemail='+aemail+ '&phone='+phone+ '&aphone='+aphone,
                    success:function(result){
                        if(result=="valid"){
                            jQuery(".msg").html("Data sent successfully");
                        }else{
                            jQuery(".msg").html("Data not sent");
                        }
                    }
                })
            }
        }
    }
</script>
</body>
</html>