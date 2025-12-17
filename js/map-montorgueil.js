const map = L.map('map').setView([48.8646, 2.3476], 16);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  attribution: '&copy; OpenStreetMap contributors'
}).addTo(map);

L.marker([48.8646, 2.3476]).addTo(map)
  .bindPopup('PARIS – 02 | ATELIER MONTORGUEIL')
  .openPopup();
