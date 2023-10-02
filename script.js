// ***************** CHANGEMENT IMAGE MENU DEROULANT **************************
function handleBottleHover(event) {
  const imageOverlay2 = document.querySelector(".image-overlay2");
  const imageBg2 = document.querySelector(".image-bg2");

  imageOverlay2.style.opacity = event.type === "mouseenter" ? "0" : "1";
  imageBg2.style.opacity = event.type === "mouseenter" ? "1" : "0";
}

// Fonction pour gérer le hover sur le bouton CAN Champignon Dreams
function handleCanHover(event) {
  const imageOverlay2 = document.querySelector(".image-overlay2");
  const imageBg2 = document.querySelector(".image-bg2");

  imageOverlay2.style.opacity = event.type === "mouseenter" ? "1" : "0";
  imageBg2.style.opacity = event.type === "mouseenter" ? "0" : "1";
}

// Ajout des écouteurs d'événements pour les boutons BOTTLE et CAN Champignon Dreams
const bottleChampignon2 = document.getElementById("bottle-champignon2");
const canChampignon2 = document.getElementById("can-champignon2");

bottleChampignon2.addEventListener("mouseenter", handleBottleHover);
bottleChampignon2.addEventListener("mouseleave", handleBottleHover);

canChampignon2.addEventListener("mouseenter", handleCanHover);
canChampignon2.addEventListener("mouseleave", handleCanHover);

// Fonction pour gérer le hover sur le bouton BOTTLE Golden Hour
function handleBottleHoverGoldenHour(event) {
  const imageOverlay3 = document.querySelector(".image-overlay3");
  const imageBg3 = document.querySelector(".image-bg3");

  imageOverlay3.style.opacity = event.type === "mouseenter" ? "0" : "1";
  imageBg3.style.opacity = event.type === "mouseenter" ? "1" : "0";
}

// Ajout des écouteurs d'événements pour le bouton BOTTLE Golden Hour
const bottleGoldenHour = document.querySelector(".btn-bottle3");

bottleGoldenHour.addEventListener("mouseenter", handleBottleHoverGoldenHour);
bottleGoldenHour.addEventListener("mouseleave", handleBottleHoverGoldenHour);

// Fonction pour gérer le hover sur le bouton CAN Golden Hour
function handleCanHoverGoldenHour(event) {
  const imageOverlay3 = document.querySelector(".image-overlay3");
  const imageBg3 = document.querySelector(".image-bg3");

  imageOverlay3.style.opacity = event.type === "mouseenter" ? "1" : "0";
  imageBg3.style.opacity = event.type === "mouseenter" ? "0" : "1";
}

// Ajout des écouteurs d'événements pour le bouton CAN Golden Hour
const canGoldenHour = document.querySelector(".btn-can3");

canGoldenHour.addEventListener("mouseenter", handleCanHoverGoldenHour);
canGoldenHour.addEventListener("mouseleave", handleCanHoverGoldenHour);


function handleBottleHover(event) {
  const imageOverlay2 = document.querySelector(".image-overlay2");
  const imageBg2 = document.querySelector(".image-bg2");

  imageOverlay2.style.opacity = event.type === "mouseenter" ? "0" : "1";
  imageBg2.style.opacity = event.type === "mouseenter" ? "1" : "0";
}

// Ajout des écouteurs d'événements pour le bouton STARTER
const starterButton = document.querySelector("#starter-button");
starterButton.addEventListener("mouseenter", handleStarterHover);
starterButton.addEventListener("mouseleave", handleStarterHover);

// Ajout des écouteurs d'événements pour le bouton VARIETY
const varietyButton = document.querySelector("#variety-button");
varietyButton.addEventListener("mouseenter", handleVarietyHover);
varietyButton.addEventListener("mouseleave", handleVarietyHover);

// Fonction pour gérer le hover sur le bouton "STARTER"
function handleStarterHover(event) {
  const imageOverlay = document.querySelector(".image-overlay5");
  const imageBg = document.querySelector(".image-bg5");

  if (imageOverlay && imageBg) {
    imageOverlay.style.opacity = event.type === "mouseenter" ? "0" : "1";
    imageBg.style.opacity = event.type === "mouseenter" ? "1" : "0";
  }
}

// Fonction pour gérer le hover sur le bouton "VARIETY"
function handleVarietyHover(event) {
  const imageOverlay = document.querySelector(".image-overlay5");
  const imageBg = document.querySelector(".image-bg5");

  if (imageOverlay && imageBg) {
    imageOverlay.style.opacity = event.type === "mouseenter" ? "1" : "0";
    imageBg.style.opacity = event.type === "mouseenter" ? "0" : "1";
  }
}
// remonter tout en haut 
// Sélectionnez le bouton de retour en haut par son identifiant
const scrollToTopButton = document.getElementById("scroll-to-top-button");

// Ajoutez un écouteur d'événements pour détecter le défilement de la page
window.addEventListener("scroll", () => {
  // Si la position de défilement est supérieure à 200 pixels, affichez le bouton
  if (window.scrollY > 200) {
    scrollToTopButton.style.display = "block";
  } else {
    scrollToTopButton.style.display = "none";
  }
});

// Ajoutez un écouteur d'événements pour faire remonter la page lorsque le bouton est cliqué
scrollToTopButton.addEventListener("click", () => {
  window.scrollTo({
    top: 0, // Faites défiler jusqu'au sommet de la page
    behavior: "smooth" // Animation de défilement fluide
  });
});

// MENU BURGER

// JavaScript pour ouvrir et fermer le menu
const menuBurger = document.getElementById("menu-burger");
const menuDeroulant = document.querySelector(".menu-deroulant");
const fermerMenu = document.getElementById("fermer-menu");

menuBurger.addEventListener("click", () => {
  menuDeroulant.style.left = "0"; // Ouvrir le menu en cliquant
});

fermerMenu.addEventListener("click", () => {
  menuDeroulant.style.left = "-310px"; // Fermer le menu en cliquant sur la croix
});


// ****************                                                  SLIDE 1 ******************
// ****************                                                  SLIDE 1 ******************
// ****************                                                  SLIDE 1 ******************
document.addEventListener('DOMContentLoaded', function() {
const sliderContainer = document.querySelector('.slider-container');
const slider = sliderContainer.querySelector('.slider');
const slides = slider.querySelectorAll('.slide');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');
const indicators = document.querySelectorAll('.indicator');

let currentIndex = 0;
let startX = 0; // Position X au début du mouvement
let isDragging = false; // Indicateur de mouvement en cours

prevBtn.addEventListener('click', () => {
  if (currentIndex > 0) {
    currentIndex--;
    updateSliderPosition();
  }
});

nextBtn.addEventListener('click', () => {
  if (currentIndex < slides.length - 1) {
    currentIndex++;
    updateSliderPosition();
  }
});

indicators.forEach((indicator, index) => {
  indicator.addEventListener('click', () => {
    currentIndex = index;
    updateSliderPosition();
  });
});

sliderContainer.addEventListener('mousedown', (event) => {
  isDragging = true;
  startX = event.clientX;
});

sliderContainer.addEventListener('mousemove', (event) => {
  if (!isDragging) return;

  const currentX = event.clientX;
  const diffX = currentX - startX;

  // Si le mouvement est suffisamment horizontal, change le slide
  if (Math.abs(diffX) > 50) {
    isDragging = false;
    if (diffX > 0) {
      // Swipe vers la droite
      if (currentIndex > 0) {
        currentIndex--;
        updateSliderPosition();
      }
    } else {
      // Swipe vers la gauche
      if (currentIndex < slides.length - 1) {
        currentIndex++;
        updateSliderPosition();
      }
    }
  }
});

sliderContainer.addEventListener('mouseup', () => {
  isDragging = false;
});

function updateSliderPosition() {
  const newPosition = -currentIndex * 100;
  slider.style.transform = `translateX(${newPosition}vw)`;

  indicators.forEach((indicator, index) => {
    if (index === currentIndex) {
      indicator.classList.add('active');
    } else {
      indicator.classList.remove('active');
    }
  });
}
});

// ************                                         SLIDE 2 *********** 
// ************                                         SLIDE 2 *********** 
// ************                                         SLIDE 2 *********** 
document.addEventListener('DOMContentLoaded', function() {
const sliderContainer2 = document.querySelector('.slider-container2');
const slider2 = sliderContainer2.querySelector('.slider2');
const slides2 = slider2.querySelectorAll('.slide2');
const indicators2 = sliderContainer2.querySelectorAll('.indicator2');

let currentIndex2 = 0;
let startPosition2 = 0;
let isDragging2 = false;

indicators2.forEach((indicator, index) => {
  indicator.addEventListener('click', () => {
    currentIndex2 = index;
    updateSliderPosition2();
  });
});

slider2.addEventListener('mousedown', (e) => {
  isDragging2 = true;
  startPosition2 = e.clientX;
});

slider2.addEventListener('mousemove', (e) => {
  if (!isDragging2) return;
  const currentPosition = e.clientX;
  const difference = currentPosition - startPosition2;
  const newPosition = currentIndex2 * -100 + difference;

  if (newPosition > 0) {
    slider2.style.transform = `translateX(0)`;
  } else if (newPosition < -(slides2.length - 1) * 100) {
    slider2.style.transform = `translateX(${-100 * (slides2.length - 1)}%)`;
  } else {
    slider2.style.transform = `translateX(${newPosition}px)`;
  }
});

slider2.addEventListener('mouseup', (e) => {
  if (!isDragging2) return;
  const threshold = 100;

  if (currentIndex2 < slides2.length - 1) {
    if (startPosition2 - e.clientX > threshold) {
      currentIndex2 += 1;
    }
  }

  if (currentIndex2 > 0) {
    if (e.clientX - startPosition2 > threshold) {
      currentIndex2 -= 1;
    }
  }

  updateSliderPosition2();
  isDragging2 = false;
});

function updateSliderPosition2() {
  const newPosition2 = -currentIndex2 * 100;
  slider2.style.transform = `translateX(${newPosition2}%)`;

  indicators2.forEach((indicator, index) => {
    if (index === currentIndex2) {
      indicator.classList.add('active2');
    } else {
      indicator.classList.remove('active2');
    }
  });
}
});

// *************************                            SLIDE 3 ******************
// *************************                            SLIDE 3 ******************
// *************************                            SLIDE 3 ******************
document.addEventListener('DOMContentLoaded', function() {
const sliderContainer3 = document.querySelector('.slider-container3');
const slider3 = sliderContainer3.querySelector('.slider3');
const slides3 = slider3.querySelectorAll('.slide3');
const prevBtn3 = document.getElementById('prevBtn3');
const nextBtn3 = document.getElementById('nextBtn3');

let currentIndex3 = 0;
let startPosition3 = 0;
let isDragging3 = false;
let hasClicked = false; // Nouvelle variable pour vérifier le clic initial

prevBtn3.addEventListener('click', () => {
  if (currentIndex3 > 0) {
    currentIndex3--;
    updateSliderPosition3();
  }
});

nextBtn3.addEventListener('click', () => {
  if (currentIndex3 < slides3.length - 1) {
    currentIndex3++;
    updateSliderPosition3();
  }
});

slider3.addEventListener('mousedown', (e) => {
  hasClicked = true; // Enregistre le clic initial
  isDragging3 = true;
  startPosition3 = e.clientX;
});

slider3.addEventListener('mousemove', (e) => {
  if (!hasClicked || !isDragging3) return; // Vérifie le clic initial avant le swipe
  const currentPosition3 = e.clientX;
  const difference3 = currentPosition3 - startPosition3;
  const newPosition3 = currentIndex3 * -100 + difference3;

  if (newPosition3 > 0) {
    slider3.style.transform = `translateX(0)`;
  } else if (newPosition3 < -(slides3.length - 1) * 100) {
    slider3.style.transform = `translateX(${-100 * (slides3.length - 1)}%)`;
  } else {
    slider3.style.transform = `translateX(${newPosition3}px)`;
  }
});

slider3.addEventListener('mouseup', (e) => {
  if (!isDragging3) return;
  const threshold3 = 100;

  if (currentIndex3 < slides3.length - 1 && startPosition3 - e.clientX > threshold3) {
    currentIndex3++;
  }

  if (currentIndex3 > 0 && e.clientX - startPosition3 > threshold3) {
    currentIndex3--;
  }

  updateSliderPosition3();
  isDragging3 = false;
  hasClicked = false; // Réinitialise le clic initial
});

slider3.addEventListener('mouseleave', () => {
  if (isDragging3) {
    isDragging3 = false;
    hasClicked = false; // Réinitialise le clic initial
    updateSliderPosition3();
  }
});

function updateSliderPosition3() {
  const newPosition3 = -currentIndex3 * 100;
  slider3.style.transform = `translateX(${newPosition3}%)`;
}
});


////// SLIDER PRESENTATION BOUTEILLE CHAMPIGNON
document.addEventListener('DOMContentLoaded', function() {
const sliderContainer10 = document.querySelector('.container-middle-slider');
const slider10 = sliderContainer10.querySelector('.slider10');
const slides10 = slider10.querySelectorAll('.slide10'); // Change slides to slides10
const prevBtn10 = document.getElementById('prevBtn10');
const nextBtn10 = document.getElementById('nextBtn10');
const indicators10 = document.querySelectorAll('.indicator10');

let currentIndex = 0;
let startX = 0; // Position X au début du mouvement
let isDragging = false; // Indicateur de mouvement en cours

prevBtn10.addEventListener('click', () => {
  if (currentIndex > 0) {
    currentIndex--;
    updateSliderPosition();
  }
});

nextBtn10.addEventListener('click', () => {
  if (currentIndex < slides10.length - 1) { // Change slides.length to slides10.length
    currentIndex++;
    updateSliderPosition();
  }
});

indicators10.forEach((indicator, index) => {
  indicator.addEventListener('click', () => { // Change indicator10 to indicator
    currentIndex = index;
    updateSliderPosition();
  });
});

sliderContainer10.addEventListener('mousedown', (event) => {
  isDragging = true;
  startX = event.clientX;
});

sliderContainer10.addEventListener('mousemove', (event) => {
  if (!isDragging) return;

  const currentX = event.clientX;
  const diffX = currentX - startX;

  // Si le mouvement est suffisamment horizontal, change le slide
  if (Math.abs(diffX) > 50) {
    isDragging = false;
    if (diffX > 0) {
      // Swipe vers la droite
      if (currentIndex > 0) {
        currentIndex--;
        updateSliderPosition();
      }
    } else {
      // Swipe vers la gauche
      if (currentIndex < slides10.length - 1) { // Change slides.length to slides10.length
        currentIndex++;
        updateSliderPosition();
      }
    }
  }
});

sliderContainer10.addEventListener('mouseup', () => {
  isDragging = false;
});

function updateSliderPosition() {
  const newPosition = -currentIndex * 100;
  slider10.style.transform = `translateX(${newPosition}vw)`; // Change slider to slider10

  indicators10.forEach((indicator, index) => {
    if (index === currentIndex) {
      indicator.classList.add('active');
    } else {
      indicator.classList.remove('active');
    }
  });
};
});


document.addEventListener('DOMContentLoaded', function() {
  const sliderContainer10tel = document.querySelector('.container-middle-slider-tel');
  const slider10tel = sliderContainer10tel.querySelector('.slider10-tel');
  const slides10tel = slider10tel.querySelectorAll('.slide10-tel');
  const prevBtn10tel = document.getElementById('prevBtn10-tel');
  const nextBtn10tel = document.getElementById('nextBtn10-tel');
  const indicators10tel = document.querySelectorAll('.indicator10-tel');
  
  let currentIndex = 0;
  let startX = 0;
  let isDragging = false;
  
  prevBtn10tel.addEventListener('click', () => {
    if (currentIndex > 0) {
      currentIndex--;
      updateSliderPosition();
    }
  });
  
  nextBtn10tel.addEventListener('click', () => {
    if (currentIndex < slides10tel.length - 1) { // Correction ici
      currentIndex++;
      updateSliderPosition();
    }
  });
  
  indicators10tel.forEach((indicator, index) => {
    indicator.addEventListener('click', () => {
      currentIndex = index;
      updateSliderPosition();
    });
  });
  
  sliderContainer10tel.addEventListener('mousedown', (event) => {
    isDragging = true;
    startX = event.clientX;
  });
  
  sliderContainer10tel.addEventListener('mousemove', (event) => {
    if (!isDragging) return;
  
    const currentX = event.clientX;
    const diffX = currentX - startX;
  
    if (Math.abs(diffX) > 50) {
      isDragging = false;
      if (diffX > 0) {
        if (currentIndex > 0) {
          currentIndex--;
          updateSliderPosition();
        }
      } else {
        if (currentIndex < slides10tel.length - 1) { // Correction ici
          currentIndex++;
          updateSliderPosition();
        }
      }
    }
  });
  
  sliderContainer10tel.addEventListener('mouseup', () => {
    isDragging = false;
  });
  
  function updateSliderPosition() {
    const newPosition = -currentIndex * 100;
    slider10tel.style.transform = `translateX(${newPosition}vw)`;
  
    indicators10tel.forEach((indicator, index) => {
      if (index === currentIndex) {
        indicator.classList.add('active');
      } else {
        indicator.classList.remove('active');
      }
    });
  }
});

  
  
