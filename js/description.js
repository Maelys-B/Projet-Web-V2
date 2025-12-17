const items = document.querySelectorAll('input[name="slider"]');
const descriptions = document.querySelectorAll('.description');

items.forEach((item, index) => {
  item.addEventListener('change', () => {
    descriptions.forEach(desc => desc.style.display = 'none');
    descriptions[index].style.display = 'block';
  });
});

descriptions.forEach((desc, i) => {
  desc.style.display = i === 0 ? 'block' : 'none';
});