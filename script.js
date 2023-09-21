//   REDIRECTION VERS PAGE PRODUIT MENU DEROULANT
document.addEventListener('DOMContentLoaded', function() {
  const bottleChampignon1 = document.getElementById('bottle-champignon1');
  const bottleChampignon2 = document.getElementById('bottle-champignon2');
  const bottleChampignon3 = document.getElementById('bottle-champignon3');
  const canChampignon1 = document.getElementById('can-champignon1');
  const canChampignon2 = document.getElementById('can-champignon2');
  const canChampignon3 = document.getElementById('can-champignon3');
  
  bottleChampignon1.addEventListener('click', function(event) {
      event.preventDefault();
      window.location.href = 'index.php?page=3&product=bottle'; 
  });

  bottleChampignon2.addEventListener('click', function(event) {
    event.preventDefault();
    window.location.href = 'index.php?page=3&product=bottle'; 
});
  
  bottleChampignon3.addEventListener('click', function(event) {
      event.preventDefault();
      window.location.href = 'index.php?page=3&product=bottle';
  });

  canChampignon1.addEventListener('click', function(event) {
    event.preventDefault();
    window.location.href = 'index.php?page=3&product=can';
});

canChampignon2.addEventListener('click', function(event) {
    event.preventDefault();
    window.location.href = 'index.php?page=3&product=can';
});

canChampignon3.addEventListener('click', function(event) {
  event.preventDefault();
  window.location.href = 'index.php?page=3&product=can';
});
});

// ***************** CHANGEMENT IMAGE MENU DEROULANT **************************
$(document).ready(function() {
    $(".btn-bottle").hover(function() {
      $(".image-overlay2").css("opacity", "0");
      $(".image-bg2").css("opacity", "1"); // Rétablit l'opacité de l'image de base
    });
    $(".btn-can").hover(function() {
      $(".image-overlay2").css("opacity", "1");
      $(".image-bg2").css("opacity", "0"); // Réduit l'opacité de l'image de base
    });
  });
  
  $(document).ready(function() {
    $(".btn-bottle3").hover(function() {
      $(".image-overlay3").css("opacity", "0");
      $(".image-bg3").css("opacity", "1"); // Rétablit l'opacité de l'image de base
    });
    $(".btn-can3").hover(function() {
      $(".image-overlay3").css("opacity", "1");
      $(".image-bg3").css("opacity", "0"); // Réduit l'opacité de l'image de base
    });
  });
  
  $(document).ready(function() {
    $(".btn-bottle4").hover(function() {
      $(".image-overlay4").css("opacity", "0");
      $(".image-bg4").css("opacity", "1"); // Rétablit l'opacité de l'image de base
    });
  
    $(".btn-can4").hover(function() {
      $(".image-overlay4").css("opacity", "1");
      $(".image-bg4").css("opacity", "0"); // Réduit l'opacité de l'image de base
    });
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
}
  
// const canChampignon1 = document.getElementById('can-champignon1');
// const canChampignon2 = document.getElementById('can-champignon2');
// const canChampignon3 = document.getElementById('can-champignon3');
 
// // Ajoutez un gestionnaire d'événement de clic à chacun des éléments
// canChampignon1.addEventListener('click', function(event) {
//     event.preventDefault();
//     window.location.href = 'index.php?page=9'; // Redirection pour le premier élément
// });

// canChampignon2.addEventListener('click', function(event) {
//     event.preventDefault();
//     window.location.href = 'index.php?page=9'; // Redirection pour le deuxième élément
// });

// canChampignon3.addEventListener('click', function(event) {
//     event.preventDefault();
//     window.location.href = 'index.php?page=9'; // Redirection pour le troisième élément
// });
  
});
 