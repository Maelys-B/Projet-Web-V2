const elements = document.querySelectorAll('.slide-in');

  const observer = new IntersectionObserver(
    entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('active');
        }
      });
    },
    {
      threshold: 0.2 
    }
  );

  elements.forEach(el => observer.observe(el));



  var flkty = new Flickity('.js-flickity', { wrapAround: true });



  const track = document.querySelector('.slider-track');

track.innerHTML += track.innerHTML; 

let pos = 0;
const speed = 1; 

function animate() {
  pos -= speed;

  if (pos <= -track.scrollWidth / 2) {
    pos = 0; // reset quand la moitié des images a défilé
  }

  track.style.transform = `translateX(${pos}px)`;
  requestAnimationFrame(animate);
}

animate();



