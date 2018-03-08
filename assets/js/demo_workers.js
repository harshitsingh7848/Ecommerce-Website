var i = 0;



function timedCount() {
  var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 ) {
        i =this.responseText;
      }
    };  

      xhttp.open("GET", "/Ecommerce/getdetails",true);
      xhttp.send(); 
     
     postMessage(i);
     setTimeout("timedCount()",1000);
}

timedCount();