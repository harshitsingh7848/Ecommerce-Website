$(document).ready(function(){
    if (localStorage.getItem('count')) {
     var totalCount = localStorage.getItem('count');
      $('.product-count').text(totalCount);  
   } 
   });