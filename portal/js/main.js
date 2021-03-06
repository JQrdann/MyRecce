var canDrag = false;

$(document).ready(function() {

    $(".home-content").css("opacity", 0);

    $(window).load(function() {
        $(".home-loader").fadeOut();
        $(".home-content").delay(500).animate({
            opacity: 1
        }, "slow");
    });

    var createProgress = 0;

    var expanded = true;
    $('.expand-button').click(function() {
        pageWidth = $('body').width();
        if (expanded) {
            $('aside').animate({
                width: '50px'
            }, 500);
            $('header').animate({
                width: pageWidth - 50
            }, 500)
            $('main').animate({
                width: pageWidth - 50
            }, 500)
            $('.menu-items').fadeOut(500);
            $('.social-media-icons').fadeOut(500);
            $('.logout').fadeOut(500);
            $('.logo').fadeOut(500);
            $('.expand-button').fadeOut(100);
            $('.expand-button').delay(550).fadeIn(100);
            expanded = false;
        } else {
            $('aside').animate({
                width: '220px'
            }, 500);
            $('header').animate({
                width: pageWidth - 220
            }, 500)
            $('main').animate({
                width: pageWidth - 220
            }, 500)
            $('.menu-items').fadeIn(500);
            $('.social-media-icons').fadeIn(500);
            $('.logout').fadeIn(500);
            $('.logo').fadeIn(500);
            $('.expand-button').fadeOut(100);
            $('.expand-button').delay(550).fadeIn(100);
            expanded = true;
        }
    });

    $('.next-button').click(function() {
        createProgress++;
        switchCreate(createProgress);
    });

    $('.back-button').click(function() {
        createProgress--;
        switchCreate(createProgress);
    });

    function switchCreate(createProgress) {
        switch (createProgress) {
            case 1:
                $('.create-section-1').fadeOut(500);
                $('.create-section-2').css('display', 'inline-block');
                $('.create-section-2').delay(500).animate({
                    opacity: 1
                }, 500);
                break;
            case 2:
                $('.create-section-2').fadeOut(500);
                $('.create-section-3').css('display', 'inline-block');
                $('.create-section-3').delay(500).animate({
                    opacity: 1
                }, 500);
                break;
            case 3:
                $('.create-section-3').fadeOut(500);
                $('.create-section-4').css('display', 'inline-block');
                $('.create-section-4').delay(500).animate({
                    opacity: 1
                }, 500);
                break;

        }
    }

    initMap();
});

function addFavourite(id){
  $.ajax({
    url: 'favourite.php',
    data: {action: 'add', recceID: id},
    type: 'post',
  });
}

function removeFavourite(id){
  $.ajax({
    url: 'favourite.php',
    data: {action: 'remove', recceID: id},
    type: 'post',
  });
}

function setFavourites(){
  $.ajax({
    url: 'favourite.php',
    data: {action: 'view'},
    type: 'post',
    success : function(data){
      var favs = JSON.parse(data);
      $('.recce').each(function(){
        for (var i = 0; i < favs.length; i++){
          id = favs[i].recceID;
          if($(this).attr('data-id') == id){
            toggleHeartIcon( $('.heart').closest('.recce[data-id='+id+']') );
          }
        }
      });
    }
  });
}

function getSingleRecce(){
  $.ajax({
    url: 'search-script.php',
    data: {action: 'single', id: $('#image-carosel').attr('data-id')},
    type: 'post',
    success : function(data){
      if(data == '[]'){
        alert('redirect to 404');
      }
      console.log(data);
      $obj = JSON.parse(data); //automatically appends to current json object
      fillSingleRecce($obj);
    }
  });
}

function userRecces(){
  $.ajax({
    url: 'search-script.php',
    data: {action: 'users'},
    type: 'post',
    success : function(data){
      console.log(data);
      $obj = JSON.parse(data); //automatically appends to current json object
      showItems($obj);
    }
  });
}

function fillFavourites(){
  $.ajax({
    url: 'search-script.php',
    data: {action: 'favourites'},
    type: 'post',
    success : function(data){
      console.log(data);
      $obj = JSON.parse(data); //automatically appends to current json object
      showItems($obj);
    }
  });
}

function recceListeners(){
  $('.heart').click(function(){
    toggleHeartIcon($(this).closest('.recce'));
  });

  $('.recce').click(function(e) {
      if ($(e.target).attr('class') == 'eye' || $(e.target).attr('class') == 'pupil' || $(e.target).attr('class') == 'eye watched') {
          var eye = $('.eye', this);
          var pupil = $('.pupil', this);
          pupil.stop().animate({
              left: '2px',
              top: '14px'
          }, 150).delay(50).animate({
              left: '13px',
              top: '3px'
          }, 300).animate({
              left: '8px',
              top: '9px'
          }, 150);
          eye.toggleClass('watched');
          return;
      }
  });

  if(canDrag){
    var recceClick = false;
    var recce, canDelete = false;

    $('.recce').mousedown(function(e){
      recceClick = true;
      recce = $(this).clone();
      $(this).addClass('selected-recce');
      $(this).after(recce);
      recce.css({
        'position': 'fixed',
        'top': e.pageY - recce.height()/2,
        'left': e.pageX - recce.width()/2,
        'z-index': 999
      });

      $('#delete-recce').animate({
        height:75
      }, 300);
    });

    $('body').mousemove(function(e){
      if(recceClick){
        recce.css('top', e.pageY - recce.height()/2);
        recce.css('left', e.pageX - recce.width()/2);

        if(e.pageY > $(document).height() - 75){
          canDelete = true;
        }
      }
    });

    $('body').mouseup(function(){
      if(recceClick){
        recce.remove();
        recceClick = false;

        if(canDelete){
          deleteRecce(recce);
        }else{
          $('.selected-recce').removeClass('selected-recce');
        }
      }
      $('#delete-recce').stop().animate({
        height:0
      }, 300);
      canDelete = false;
    });
  }
}

function deleteRecce(e){

  $('#delete-modal').fadeIn(300);
  $('#modal-fader').fadeIn(300);

  $('#delete-no, #modal-fader').click(function(){
    $('#delete-modal').fadeOut(300);
    $('#modal-fader').fadeOut(300);
  });

  $('#delete-yes').click(function(){
    $('.selected-recce').remove();
    $('#delete-modal').fadeOut(300);
    $('#modal-fader').fadeOut(300);
  });


}

function toggleHeartIcon(t){
  var heart = t.find('.heart');
  heart.stop().animate({
      height: 45,
      width: 45,
      'padding-left': '5px',
      'padding-top': '5px'
  }, 150).delay(50).animate({
      height: 35,
      width: 35,
      'padding-left': '10px',
      'padding-top': '10px'
  }, 150);

  var src = heart.attr('src');
  var recceID = heart.closest('.recce').attr('data-id');

  if(heart.attr('data-fav') == 'true'){
    heart.attr('data-fav', 'false');
    heart.attr("src", 'icons/heart-empty.svg');
    removeFavourite(recceID);
  }else{
    heart.attr('data-fav', 'true');
    heart.attr("src", 'icons/heart.svg');
    addFavourite(recceID);
  }

  return;
}

var searchStrings = [];

//AJAX function to print stock items
function search(count) {
    //$titleOp = $("#filter-title-option").val();
    var title = $("#search").val();

    $.ajax({
      url: 'search-script.php',
      data: {action: 'search', count: count, title: title},
      type: 'post',
      success : function(data){

        console.log(data);
        $obj = JSON.parse(data); //automatically appends to current json object
        showItems($obj);
      }
    });
}

function fillSingleRecce(recce){
  var r = recce[0];
  $('#view-title').html(r.Name);
  $('#view-desc p').html(r.Description);

  $('.view-image').eq(0).css('background-image', 'url("'+ r.Photo1 +'")');
  $('.view-image').eq(1).css('background-image', 'url("'+ r.Photo2 +'")');
  $('.view-image').eq(2).css('background-image', 'url("'+ r.Photo3 +'")');
  $('.view-image').eq(3).css('background-image', 'url("'+ r.Photo4 +'")');
  $('.view-image').eq(4).css('background-image', 'url("'+ r.Photo5 +'")');
  $('.view-image').eq(5).css('background-image', 'url("'+ r.Photo6 +'")');

  var features = r.Features.split(',');

  for(var i = 0; i < features.length; i++){
    switch(features[i]){
      case "Catering Services":
        $('#view-features').append('<div class="view-feature"><img src="icons/cateringservices.svg"><p>Catering Services</p></div>');
        break;
      case "Disabled Access":
        $('#view-features').append('<div class="view-feature"><img src="icons/disabledaccess.svg"><p>Disabled Access</p></div>');
        break;
      case "First Aid":
        $('#view-features').append('<div class="view-feature"><img src="icons/firstaid.svg"><p>First Aid</p></div>');
        break;
      case "Floor plan":
        $('#view-features').append('<div class="view-feature"><img src="icons/floorplan.svg"><p>Floor Plan</p></div>');
        break;
      case "Lighting":
        $('#view-features').append('<div class="view-feature"><img src="icons/lighting.svg"><p>Lighting</p></div>');
        break;
      case "Parking":
        $('#view-features').append('<div class="view-feature"><img src="icons/parking.svg"><p>Parking</p></div>');
        break;
      case "Power Outlets":
        $('#view-features').append('<div class="view-feature"><img src="icons/poweroutlets.svg"><p>Power Outlets</p></div>');
        break;
      case "Sound Issues":
        $('#view-features').append('<div class="view-feature"><img src="icons/soundissues.svg"><p>Sound Issues</p></div>');
        break;
      case "Toilets":
        $('#view-features').append('<div class="view-feature"><img src="icons/toilets.svg"><p>Toilets</p></div>');
        break;
      case "Wifi":
        $('#view-features').append('<div class="view-feature"><img src="icons/wifi.svg"><p>Wifi</p></div>');
        break;
    }
  }

  $('.username').html(r.Submitter);
  $('#user-contact').append('<p>'+ r.AddressLine1 +'</p>');
  $('#user-contact').append('<p>'+ r.AddressLine2 +'</p>');
  $('#user-contact').append('<p>'+ r.City +'</p>');
  $('#user-contact').append('<p>'+ r.County +'</p>');
  $('#user-contact').append('<p>'+ r.Postcode.toUpperCase() +'</p>');
  $('#user-contact').append('<p>'+ r.Country +'</p>');

  //$('#view-features').html(r.Features);
}

function showItems(items) {
    $(".search-recces").html("");
    for (var i = 0; i < items.length; i++) {
        $content = "<div class='recce' data-id='" + items[i].ID + "'><div class='recce-picture' style='background-image: url(" + '"' + items[i].Photo1 + '"' + ")'><div class='recce-favourite'><img class='heart' data-fav='false' src='icons/heart-empty.svg'></div><div class='eye'><div class='pupil'></div></div><div class='recce-price'>&pound;" + items[i].Price + "</div></div><div class='recce-details'><div class='recce-location'>"+items[i].County+"</div><div class='recce-name'>" + items[i].Name + "</div></div></div>"
        $(".search-recces").append($content);

        var searchString = items[i].AddressLine1 + ' ' + items[i].AddressLine2 + ' ' + items[i].City + ' ' + items[i].Postcode;
        searchStrings.push([items[i].ID, searchString]);
    }

    setFavourites();
    recceListeners();
}

function initMap() {
    var lat, lng;

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(successFunction, errorFunction);
    } else {
        alert('It seems like Geolocation, which is required for this page, is not enabled in your browser. Please use a browser which supports it.');
    }

    function errorFunction(position) {
        console.log('There was an error');
    }

    function successFunction(position) {
        lat = position.coords.latitude;
        lng = position.coords.longitude;
        console.log(lat, lng);

        var userPos = ['Your Location', lat, lng];

        var map = new google.maps.Map(document.getElementById('quickmapview'), {
            zoom: 12,
            center: new google.maps.LatLng(userPos[1], userPos[2]),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        var marker, markers = [];

        var userIcon = {
            url: 'icons/mapIcon.png',
            size: new google.maps.Size(16, 16),
            origin: new google.maps.Point(0, 0),
            anchor: new google.maps.Point(8, 8)
        };

        var recceIcon = {
            url: 'icons/mappin.png',
            size: new google.maps.Size(32, 47),
            origin: new google.maps.Point(0, 0),
            anchor: new google.maps.Point(16, 47)
        };

        var userMarker = new google.maps.Marker({
            position: new google.maps.LatLng(userPos[1], userPos[2]),
            icon: userIcon,
            map: map
        });

        codeLocations(searchStrings, map);

        function codeLocations(list, map) {
            for (var i = 0; i < list.length; i++) {
                console.log("Looping " + list[i][1]);
                var geocoder = new google.maps.Geocoder();
                var geoOptions = {
                    address: list[i][1]
                };
                geocoder.geocode(geoOptions, createGeocodeCallback(list[i], map));
            }
        }

        function createGeocodeCallback(item, map) {
            console.log("Generating geocode callback for " + item[0]);
            return function(results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    console.log("Geocoding " + item[0] + " OK");
                    addMarker(map, item, results[0].geometry.location);
                } else {
                    console.log("Geocode failed " + status);
                }
            }
        }

        function addMarker(map, item, location) {
            console.log("Setting marker for " + item.location + " (location: " + location + ")");
            var marker = new google.maps.Marker({
                position: location,
                map: map,
                icon: recceIcon,
                id: item[0]
            })

            markers.push(marker);
            //marker.setTitle(item.title);
            new google.maps.event.addListener(marker, "click", function() {
                $('.recce').each(function(){$(this).removeClass('recce-active');})
                $('.recce[data-id='+this.id+']').addClass('recce-active');
                recceQuickViewSearch(this.id);
                for (var i = 0; i < markers.length; i++) {
                    markers[i].setIcon('icons/mappin.png');
                }
                this.setIcon("icons/mapPinSelected.png");
            });
        }

        function recceQuickViewSearch(id) {
            $.post('single-search.php', {
                "id": id,
            }, function(data, status) {
                if (status == "success") {
                    var obj = JSON.parse(data); //automatically appends to current json object
                    renderQuickView(obj)
                } else {
                    $(".quickmapview-subbox").html("There was an error fetching the data from the server");
                }
            });
        }

        function renderQuickView(item) {
            $(".quickmapview-subbox").css('background-image', 'url(' + item[0].Photo1 + ')');
            var content = item[0].Name + '<br><br>' + item[0].Description + '<a class="recce-view-button" href="view?id='+item[0].ID+'">View Recce</a>';
            $(".recce-quick-view").html(content);
        }

        $('.recce').click(function() {
            $('.recce').each(function(){$(this).removeClass('recce-active');})
            $(this).addClass('recce-active');
            for (var i = 0; i < markers.length; i++) {
                if (markers[i].id == $(this).attr('data-id')) {
                    var latlng = markers[i].getPosition();
                    map.panTo(latlng);
                    for (var j = 0; j < markers.length; j++) {
                        markers[j].setIcon('icons/mappin.png');
                    }
                    markers[i].setIcon("icons/mapPinSelected.png");
                }
            }
            recceQuickViewSearch($(this).attr('data-id'));
        })
    }

    $('#mobile').click(function(){
      $(this).toggleClass('mobile-open');
      $('#mobile-nav').toggleClass('mobile-nav-open');
    });
}

//if at bottom of page
$(window).scroll(function() {
    if ($(window).scrollTop() + $(window).height() == $(document).height()) {
        more();
    }
});
