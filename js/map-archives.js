const map = L.map('map').setView([48.8563, 2.3575], 16);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  attribution: '&copy; OpenStreetMap contributors'
}).addTo(map);

L.marker([48.8563, 2.3575]).addTo(map)
  .bindPopup('PARIS – 04 | MAISON DES ARCHIVES')
  .openPopup();
