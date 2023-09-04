particlesJS({
  particles: {
    number: { value: 12, density: { enable: true, value_area: 1200 } },
    color: { value: "#ffffff" },
    shape: {
      type: "image",
      stroke: { width: 3, color: "#000000" },
      polygon: { nb_sides: 100 },
      image: { src: "resources/images/User_iconv2.png", width: 80, height: 80 },
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
      distance: 300,
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
      out_mode: "out",
      bounce: "true",
      attract: { enable: false, rotateX: 600, rotateY: 600 },
    },
  },
  interactivity: {
    detect_on: "canvas",
    events: {
      onhover: { enable: false, mode: "bubble" },
      onclick: { enable: false, mode: "push" },
      resize: true,
    },
    modes: {
      grab: { distance: 400, line_linked: { opacity: 1 } },
      bubble: { distance: 700, size: 40, duration: 2, opacity: 8, speed: 0.1 },
      repulse: { distance: 300, duration: 0 },
      push: { particles_nb: 5 },
      remove: { particles_nb: 10 },
    },
  },
  retina_detect: false,
});