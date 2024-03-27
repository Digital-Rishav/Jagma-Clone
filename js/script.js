var nav1 = document.getElementById("navbar-id");
var sticky = nav1.offsetTop;
window.addEventListener('scroll', function(){
 if(window.pageYOffset>sticky){
   nav1.classList.add("new-nav");
 }else{
   nav1.classList.remove("new-nav");
 }
});




const nav2 = document.getElementById("header_id");
  const scrolltop = document.getElementById("scroll-top");
  window.addEventListener('scroll', ()=>{
    if(window.pageYOffset > sticky+800){
    scrolltop.style.display = "block";
  }else{
    scrolltop.style.display = "none";
  }
  });
  
  scrolltop.addEventListener('click', function(){
      nav2.scrollIntoView({ behavior: "smooth" });
  });



  
  var caret = document.getElementsByClassName("sub-header_box");
 
  for(var i=0; i<caret.length; i++){
    var caret_div = caret[i].getElementsByClassName("sub-caret");
    caret[i].addEventListener('click', function(){
      for(j=0; j<caret_div.length; j++){
      caret_div[j].classList.toggle("new-caret");
      }
    });
  }
 