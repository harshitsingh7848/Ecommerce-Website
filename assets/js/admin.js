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


$(function () {
  var datepicker = $.fn.datepicker.noConflict(); // return $.fn.datepicker to previously assigned value
$.fn.bootstrapDP = datepicker;    
 //for orders
 $('#datetimepicker6').datetimepicker({
 format:'YYYY-MM-DD'
 });
 $('#datetimepicker7').datetimepicker({
 format:'YYYY-MM-DD',
 useCurrent: false //Important! See issue #1075
 });
 
 $("#datetimepicker6").on("dp.change", function (e) {
 $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
 });
 $("#datetimepicker7").on("dp.change", function (e) {
 $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
 });
 
 //for users
 $('#datetimepicker8').datetimepicker({
 format:'YYYY-MM-DD'
 });
 $('#datetimepicker9').datetimepicker({
 format:'YYYY-MM-DD',
 useCurrent: false //Important! See issue #1075
 });
 
 $("#datetimepicker8").on("dp.change", function (e) {
 $('#datetimepicker9').data("DateTimePicker").minDate(e.date);
 });
 $("#datetimepicker9").on("dp.change", function (e) {
 $('#datetimepicker8').data("DateTimePicker").maxDate(e.date);
 });
 
 var url='';
 startDate='';
 endDate='';
 selected='';

 function ajaxcall(url,startDate,endDate,selected)
 {
 
 $.ajax({
 type: 'GET',
 url: url,
 data: {'startDate':startDate,'endDate':endDate,'selected':selected},
 dataType: 'json',
 cache: false,
 success: function(response){
 console.log(response);
 
 if(url=="getOrders")
 {
 getorders(response);
 }
 else if(url=="getUsers")
 {
 getusers(response);
 }
 else if(url=="getProduct")
 {
 getproduct(response);
 }
 else
 {
 getmap(response);
 }
 },
 });
 
 
 }
 //for order chart
 $('#apply').click(function(e) {
 url = "getOrders";
 var startDate = $('#datetimepicker6').find("input").val();
 var endDate = $('#datetimepicker7').find("input").val();
 var result = ajaxcall(url,startDate,endDate);
 });

 //for user chart
 $('#applyuser').click(function(e) {
 

 url = "getUsers";
 var startDate = $('#datetimepicker8').find("input").val();
 var endDate = $('#datetimepicker9').find("input").val();
 var result = ajaxcall(url,startDate,endDate);
 
 });

 //for product chart
 $('#selected').click(function(e) {
 
 url = "getProduct";
 var selected = $(this).html();
 var result = ajaxcall(url,selected);
 

 });




 function getorders(result)
 {
 var arrs = []; 
 var i=0;
 $.each(result, function( index, value ) {
 
 arrs[i] = value;
 i++;
 });
 console.log(arrs);
 var ctx = document.getElementById("orderchart");
 var myChart = new Chart(ctx, {
 type: 'bar',
 data: {
 labels: ["Jan", "Feb", "Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],
 datasets: [{
 label: 'No. of orders per month',
 data: arrs,
 backgroundColor: [
 'rgba(0, 77, 0)',
 'rgba(0, 77, 0)',
 'rgba(0, 77, 0)',
 'rgba(0, 77, 0)',
 'rgba(0, 77, 0)',
 'rgba(0, 77, 0)',
 'rgba(0, 77, 0)',
 'rgba(0, 77, 0)',
 'rgba(0, 77, 0)',
 'rgba(0, 77, 0)',
 'rgba(0, 77, 0)',
 'rgba(0, 77, 0)'
 ],
 }]
 },
 options: {
 scales: {
 yAxes: [{
 scaleLabel: {
 display: true,
 labelString: 'No. of Orders'
 }
 }],
 xAxes: [{
 scaleLabel: {
 display: true,
 labelString: 'Months'
 }
 }]
 } 
 }
 });

 }

 function getusers(response)
 {
 var arrs = []; 
 var i=0;
 $.each(response, function( index, value ) {
 
 arrs[i] = value;
 i++;
 });
 console.log(arrs);
 var ctx = document.getElementById("userchart");
 var myChart = new Chart(ctx, {
 type: 'bar',
 data: {
 labels: ["Jan", "Feb", "Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],
 datasets: [{
 label: 'No. of users per month',
 data: arrs,
 backgroundColor: [
 'rgba(0, 0, 204)',
 'rgba(0, 0, 204)',
 'rgba(0, 0, 204)',
 'rgba(0, 0, 204)',
 'rgba(0, 0, 204)',
 'rgba(0, 0, 204)',
 'rgba(0, 0, 204)',
 'rgba(0, 0, 204)',
 'rgba(0, 0, 204)',
 'rgba(0, 0, 204)',
 'rgba(0, 0, 204)',
 'rgba(0, 0, 204)'

 ],
 }]
 },
 options: {
 scales: {
 yAxes: [{
 scaleLabel: {
 display: true,
 labelString: 'No. of Users'
 }
 }],
 xAxes: [{
 scaleLabel: {
 display: true,
 labelString: 'Months'
 }
 }]
 } 
 }
 });

 }

 function getproduct(response)
 {
 var arrs = []; 
 var aray = [];
 var i=0;
 $.each(response, function( index, value ) {
 
 arrs[i] = value;
 aray[i] = index;
 i++;
 });
 console.log(arrs);
 var ctx = document.getElementById("productchart");
 var myChart = new Chart(ctx, {
 type: 'bar',
 data: {
 labels: aray,
 datasets: [{
 label: 'No. of orders placed',
 data: arrs,
 backgroundColor: [
 'rgba(179, 0, 0)',
 'rgba(179, 0, 0)',
 'rgba(179, 0, 0)',
 'rgba(179, 0, 0)',
 'rgba(179, 0, 0)',
 'rgba(179, 0, 0)',
 'rgba(179, 0, 0)',
 'rgba(179, 0, 0)',
 'rgba(179, 0, 0)',
 'rgba(179, 0, 0)',
 'rgba(179, 0, 0)',

 ],
 
 }]
 },
 options: {
 scales: {
 yAxes: [{
 scaleLabel: {
 display: true,
 labelString: 'No. of orders placed'
 }
 }],
 xAxes: [{
 scaleLabel: {
 display: true,
 labelString: 'Brands'
 }
 }]
 } 
 }
 });

 }
 }); 