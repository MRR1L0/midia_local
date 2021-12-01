
let map;


function initMap() { 
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: lat, lng: lng },
    zoom: 15,
    disableDefaultUI: true,
    zoomControl: true,
  });

  google.maps.event.addListener(map, 'click', function(event) {
    lat = event.latLng.lat();
    lng = event.latLng.lng();
    let latitude = document.getElementById("latitude");
    let longitude = document.getElementById("longitude")
    let container = document.getElementById("cadastro-container");
    if(container.style.display === 'none'){
      container.style.display = 'block'
    }else{
      container.style.display = 'none'
    }
    latitude.value = lat;
    longitude.value = lng;
    const marker = new google.maps.Marker({
      position:{ lat: lat, lng: lng },
      map: map,

    });
  });
  
}

function consultar(){
  let container = document.getElementById("tbl_consulta");
  if(container.style.display === 'none'){
    container.style.display = 'block'
  }else{
    container.style.display = 'none'
  }
}




