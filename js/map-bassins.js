const mapBassins = L.map('map-bassins').setView([44.8515, -0.5655], 16);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  attribution: '&copy; OpenStreetMap contributors'
}).addTo(mapBassins);

L.marker([44.8515, -0.5655]).addTo(mapBassins)
  .bindPopup('BORDEAUX | HALLE DES BASSINS')
  .openPopup();
