const mapChartrons = L.map('map-chartrons').setView([44.8863, -0.5673], 16);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  attribution: '&copy; OpenStreetMap contributors'
}).addTo(mapChartrons);

L.marker([44.8863, -0.5673]).addTo(mapChartrons)
  .bindPopup('BORDEAUX | MAISON DES CHARTRONS')
  .openPopup();
