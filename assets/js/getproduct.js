function timedCount() {
  var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 ) {
         document.getElementById("products").innerHTML=this.responseText;
      }
    };  

      xhttp.open("GET", "/Ecommerce/getproducts",true);
      xhttp.send(); 
     
     //postMessage(i);
     setTimeout("timedCount()",1000);
}
timedCount();