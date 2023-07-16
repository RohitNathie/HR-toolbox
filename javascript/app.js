particlesJS("particles-js", {
  particles: {
    number: { value: 10, density: { enable: false, value_area: 800 } },
    color: { value: "#ffffff" },
    shape: {
      type: "image",
      stroke: { width: 5, color: "#000000" },
      polygon: { nb_sides: 100 },
      image: { src: "resources/images/User_iconv2.png", width: 100, height: 100 },
    },
    opacity: {
      value: 100,
      random: false,
      anim: { enable: true, speed: 0.4, opacity_min: 0.1, sync: false },
    },
    size: {
      value: 200,
      random: true,
      anim: { enable: true, speed: 1, size_min: 0.9, sync: false },
    },
    line_linked: {
      enable: true,
      distance: 500,
      color: "#ffffff",
      opacity: 10,
      width: 3,
    },
    move: {
      enable: true,
      speed: 1.1,
      direction: "random",
      random: true,
      straight: false,
      out_mode: "bounce",
      bounce: true,
      attract: { enable: false, rotateX: 600, rotateY: 1000 },
    },
  },
  interactivity: {
    detect_on: "canvas",
    events: {
      onhover: { enable: false, mode: "bubble" },
      onclick: { enable: false, mode: "push" },
      resize: false,
    },
    modes: {
      grab: { distance: 400, line_linked: { opacity: 1 } },
      bubble: { distance: 700, size: 40, duration: 2, opacity: 8, speed: 0.1 },
      repulse: { distance: 300, duration: 0 },
      push: { particles_nb: 5 },
      remove: { particles_nb: 10 },
    },
  },
  retina_detect: true,
});

var count_particles, stats, update;
stats = new Stats();
stats.setMode(0);
stats.domElement.style.position = "absolute";
stats.domElement.style.left = "0px";
stats.domElement.style.top = "0px";
document.body.appendChild(stats.domElement);
count_particles = document.querySelector(".js-count-particles");
update = function () {
  stats.begin();
  stats.end();
  if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
    count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
  }
  requestAnimationFrame(update);
};
requestAnimationFrame(update);
