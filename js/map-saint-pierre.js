const mapSTP = L.map('map-stp').setView([44.8378, -0.5790], 16);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  attribution: '&copy; OpenStreetMap contributors'
}).addTo(mapSTP);

L.marker([44.8378, -0.5790]).addTo(mapSTP)
  .bindPopup('BORDEAUX | ATELIER SAINT-PIERRE')
  .openPopup();
