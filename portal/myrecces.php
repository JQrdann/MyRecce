<?php
    $page = 'My Recces';
    include('includes/header.php')
?>
      <div class='myrecs'>
        <h3 class="myrecs-title">My Recces</h3>

        <div class="myrecs-content">
          <p>Click the button below to make a new recce or, click on one of your recce's to edit!</p>
        </div>

        <div class="myrecs-bar">
            <div class="myrecs-baroptions">
                <p>Options to 'Select All', 'Private recces', 'Password Protected recces', 'Delete All'.</p>
            </div>

            <div class="createareccegodiv">
              <a href='create' class="createreccego">Create a Recce</a>
            </div>
        </div>

        <div class="myrecs-sec2">
            <div class="search-recces" style='width: 90%; text-align: left; padding-left: 25px; padding-top: 10px;'>

            </div>
        </div>

        <div id='delete-recce'>
          <h1>Delete</h1>
        </div>

        <div id='modal-fader'>

        </div>

        <div id='delete-modal'>
          <h1>Are you sure you want to delete this recce?</h1>
          <div id='delete-yes'>
            Yes
          </div>
          <div id='delete-no'>
            No!
          </div>
        </div>
    </main>
    <script>
      $(document).ready(function(){
        canDrag = true;
        userRecces();
      });
    </script>
</body>
</html>
