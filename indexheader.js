function initMap() {
    // Specify the coordinates of your location  
    var myLatLng = {lat: 24.24166364346895, lng: 86.159596114646};
  
    // Create a map object and specify the DOM element for display
    var map = new google.maps.Map(document.getElementById('map'), {
      center: myLatLng,
      zoom: 12
    });
  
    // Create a marker and set its position
    var marker = new google.maps.Marker({
      map: map,
      position: myLatLng,
      title: 'Apna School'
    });
  }
  var currentYear = new Date().getFullYear();
    document.getElementById("year").innerHTML = currentYear;
    
  
    function myFunction() {
      var x = document.getElementById("centered_nav");
      if (x.className === "rc_nav") {
          x.className += " responsive";
      } else {
          x.className = "rc_nav";
      }
  }