<?php
    $page = 'Change this for the recce title';
    include('includes/header.php')
?>

  <style>
    main{
      background-color: #f7f7f7;
    }
  </style>

  <!--<div id='view-header'>
    <div id='view-map'>

    </div>
    <div id='view-banner'>
      <div id='recce-title'>
        <h1>Recce Title</h1>
      </div>
    </div>
  </div>-->

  <div id='image-carosel' data-id='<?php echo $_GET["id"]?>'>
    <div class='view-image'></div>
    <div class='view-image'></div>
    <div class='view-image'></div>
    <div class='view-image'></div>
    <div class='view-image'></div>
    <div class='view-image'></div>
  </div>

  <div id='view-details'>
    <div id='view-desc'>
      <h2 id='view-title'></h2>
      <p></p>
    </div>
    <div id='view-features'>
      <h2 id='view-title' style='padding-left: 20px; padding-top: 20px;'>Features</h2>
    </div>
  </div>

  <div id='user-info'>
    <div id='user-details'>
      <div id='user-profile'></div>
      <h2 class='username'></h2>
      <div id='view-profile'>
        View Profile
      </div>
    </div>
    <div id='user-contact'>
      <h2>Address</h2><br>
    </div>
  </div>

</main>

<script src='js/view.js'></script>
<script>
  $(document).ready(function(){
    getSingleRecce();
  });

  /*function initMap() {
    var map = new google.maps.Map(document.getElementById('view-map'), {
      zoom: 9,
      center: {lat: -33, lng: 151},
      disableDefaultUI: true,
      panControl: false,
      zoomControl: false,
      scaleControl: false
    });
  }*/
</script>
</body>
</html>
