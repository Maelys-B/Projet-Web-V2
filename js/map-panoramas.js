const map = L.map('map').setView([48.8719, 2.3430], 16);
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  attribution: '&copy; OpenStreetMap contributors'
}).addTo(map);

L.marker([48.8719, 2.3430]).addTo(map)
  .bindPopup('PARIS – 02 | CAFÉ DES PANORAMAS')
  .openPopup();

