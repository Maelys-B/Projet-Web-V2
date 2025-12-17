  const $bigBall = document.querySelector('.cursor__ball--big');
  const $smallBall = document.querySelector('.cursor__ball--small');
  const $hoverables = document.querySelectorAll('.hoverable a,.hoverable input,.hoverable button, .hoverable .dot');

  document.body.addEventListener('mousemove', onMouseMove);

  $hoverables.forEach(el => {
    el.addEventListener('mouseenter', onMouseHover);
    el.addEventListener('mouseleave', onMouseHoverOut);
  });

  function onMouseMove(e) {
gsap.to($bigBall, {duration: 0.4, x: e.clientX - 15, y: e.clientY - 15});
gsap.to($smallBall, {duration: 0.1, x: e.clientX - 5, y: e.clientY - 7});
  }

  function onMouseHover() {
    gsap.to($bigBall, {duration: 0.3, scale: 4});
  }

  function onMouseHoverOut() {
    gsap.to($bigBall, {duration: 0.3, scale: 1});
  }

  const slide = document.querySelector('.hero');

  const images = [
    'https://plus.unsplash.com/premium_photo-1681412205156-bb506a4ea970?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
    'https://images.unsplash.com/photo-1494438639946-1ebd1d20bf85?q=80&w=2067&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
  ];

  let index = 0;

  setInterval(() => {
    index = (index + 1) % images.length; 
    slide.style.backgroundImage = `url('${images[index]}')`;
  }, 10000);
  
const slider = document.getElementById("slider");
const nextBtn = document.getElementById("nextBtn");
const prevBtn = document.getElementById("prevBtn");

nextBtn.addEventListener("click", () => {
  slider.scrollLeft += 400;
});

prevBtn.addEventListener("click", () => {
  slider.scrollLeft -= 400;
});



