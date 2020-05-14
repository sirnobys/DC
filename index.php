<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>

<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script> -->
<link rel="manifest" href="manifest.json">

<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="application-name" content="DC">
<meta name="apple-mobile-web-app-title" content="DC">
<meta name="theme-color" content="#02075d">
<meta name="msapplication-navbutton-color" content="#02075d">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="msapplication-starturl" content="/htdocs/dc/index.php">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="icon" type="image/jpeg" sizes="64x64" href="img/ucc.gif">
<link rel="apple-touch-icon" type="image/jpeg" sizes="64x64" href="img/ucc.gif">
<link rel="icon" type="image/jpeg" sizes="128x128" href="img/ucc.gif">
<link rel="apple-touch-icon" type="image/jpeg" sizes="128x128" href="img/ucc.gif">
<link rel="icon" type="image/jpeg" sizes="512x512" href="img/ucc.gif">
<link rel="apple-touch-icon" type="image/jpeg" sizes="512x512" href="img/ucc.gif">

  <title>Distress Call</title>
  <script src="sw.js"></script>
<link rel="manifest" href="manifest.json">

  <!-- CSS  -->
  <link href="css/styles.css" rel="stylesheet">
      <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->
      <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> -->
<script>
function getLocation()
{
  // Check whether browser supports Geolocation API or not
  if (navigator.geolocation) { // Supported
  
    // To add PositionOptions
  
  navigator.geolocation.getCurrentPosition(getPosition);
  } else { // Not supported
  alert("Oops! This browser does not support HTML Geolocation.");
  }
}


function getPosition(position)

{x= document.getElementById("location");

   // x.innerHTML= "https://www.google.com/maps/search/?api=1&query="+position.coords.latitude+","+position.coords.longitude;
   x.value = `<?php echo '` + "https://www.google.com/maps/search/?api=1&query=" + position.coords.latitude + "," + position.coords.longitude + `'; ?>`;
    // "Latitude: " + position.coords.latitude + "<br>" +
    // "Longitude: " + position.coords.longitude;

}

// To add catchError(positionError) function

</script>

</head>

 <body onload="getLocation();" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0,.6)), url('img/help.jpg'); /* The least supported option. */
      background-size: cover;
      background-position: fixed;">


  <div class="container-fluid">

    <div class="row mt-4">
      <div class="col-md-2">
            
          </div>
  <div class="card card-shadow col-md-8 " >
  <div class="card-body text-center">
     <h3> Click on the button below to send a distress alert to authorities</h3>
  </div>
</div>
      </div>
    </div>
 
    <div class="row mt-5 pt-3">

          <div class="col-md-4 col-sm-4">
            
          </div>
<form role="form" name="form" method="get" action="index.php">
  <input type="hidden" name="location" id="location">
         
   
     
       <div class="col-md-4 col-sm-4">

            <button type="button" id="panic" class="btn btn-circle pulse1 "  data-toggle="modal" data-target="#options" name="send" value="send">
        <h6 id="sos" class="flow-text">SOS</h6></button>
         
        </div>
         
         
         <!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="options" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><b><i>Emergency Section</i></b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body bg-2">
          <div class="modal-body card ">
              <div class="row">
               <div class="col-md-2 col-sm-2">
                
                  <!-- <img src="img/hand.jpg"> -->
                   <a href="#" class="trigger1" data-name="security" ><i class="fa fa-pied-piper fa-2x fa-blue"></i><a/>
                  
                </div>
              <p><a href="#" class="trigger1" data-name="security"><span class="card-body h4"> SECURITY</span></a></p>
             </div>
            
          <hr>
           <div class="row">
                <div class="col-md-2 col-sm-2">
                   
                  <a href="#" class="trigger2" data-name="medical"  ><i class="fa fa-ambulance fa-2x fa-green"></i></a>
                </div>
              <p><a href="#" class="trigger2" data-name="medical"><span class="card-body h4">MEDICAL ASSISTANCE</span><a/></p>
              
           </div>

          <hr>
            
              <div class="row">
                <div class="col-md-2 col-sm-2">
                   
                <a href="#" class="trigger3" data-name="fire"><i class="fa fa-fire fa-2x fa-red"></i> </a>
                </div>
              <p><a href="#"  class="trigger3" data-name="fire"><span class="card-body h4">FIRE OUTBREAK</span></a></p>
           
              </div>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn text-white mb bg-3" data-dismiss="modal">Cancel</button>
   
      </div>
    </div>
  </div>
</div>
       
      
</form>

 </div>



<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<script type="text/javascript">
 
 if (navigator.serviceWorker){
  navigator.serviceWorker.register('sw.js');
}





$(function(){
 


  
   

  $('.trigger1').on('click',function(){
    var txt;
         const action = $(this).data('name');
         if("geolocation" in navigator) {
             navigator.geolocation.getCurrentPosition(function(position) {
                   let findurl = `https://www.google.com/maps/search/?query=${position.coords.latitude},${position.coords.longitude}&api=1`;
                    $.ajax({
                        url: "dc.php",
                        type:'POST',
                        dataType:"json",
                        data:{action,findurl:encodeURI(findurl), txt:"Security Assistance  "},
                        success:function(res){
                          
                          //alert(res);
                         
                          $('#options').modal('hide');
                          window.alert( "Security Distress message is successfully sent");
                        }
                        
                   })
                   return false;
             });

         }else{return}
   })


   $('.trigger2').on('click',function(){
         
         const action = $(this).data('name');
         if("geolocation" in navigator) {
             navigator.geolocation.getCurrentPosition(function(position) {
                   let findurl = `https://www.google.com/maps/search/?query=${position.coords.latitude},${position.coords.longitude}&api=1`;
                    $.ajax({
                        url: "dc.php",
                        type:'POST',
                        dataType:"json",
                        data:{action,findurl:encodeURI(findurl), txt:"Medical Assistance  "},
                        success:function(res){
                          
                          //alert(res);
                         
                          $('#options').modal('hide');
                          window.alert( "Medical distress message is successfully sent");
                          
                        }
                        
                   })
                   return false;
             });

         }else{return}
   })

   $('.trigger3').on('click',function(){
         
         const action = $(this).data('name');
  
         if("geolocation" in navigator) {
             navigator.geolocation.getCurrentPosition(function(position) {
                   let findurl = `https://www.google.com/maps/search/?query=${position.coords.latitude},${position.coords.longitude}&api=1`;
                    $.ajax({
                        url: "dc.php",
                        type:'POST',
                        dataType:"json",
                        data:{action,findurl:encodeURI(findurl), txt:"Fire Outbreak"},
                        success:function(res){
                          
                          //alert(res);
                         
                          $('#options').modal('hide');
                          window.alert("Fire distress message is successfully sent");
                        }
                        
                   })
                   return false;
             });

         }else{return}
   })


})
</script>

</body>

 
</html>
