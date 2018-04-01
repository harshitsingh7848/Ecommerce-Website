$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});

timedCount();
    

function timedCount() {
  var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 ) {
         document.getElementById("result").innerHTML=this.responseText;
      }
    };  

      xhttp.open("GET", "/Ecommerce/getdetails",true);
      xhttp.send(); 
     
     //postMessage(i);
     setTimeout("timedCount()",1000);
}