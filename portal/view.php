<?php
    $page = 'Change this for the recce title';
    include('includes/header.php')
?>

  <div id='view-header'>
    <div id='view-map'>

    </div>
    <div id='view-banner'>
      <div id='recce-title'>
        <h1>Recce Title</h1>
      </div>
      <div id='view-profile'>
        <div id='profile-picture'>

        </div>
      </div>
    </div>
  </div>

</main>

<script>
      function initMap() {
        var map = new google.maps.Map(document.getElementById('view-map'), {
          zoom: 4,
          center: {lat: -33, lng: 151},
          disableDefaultUI: true,
          panControl: false,
          zoomControl: false,
          scaleControl: false
        });
      }
    </script>

</body>
</html>
