!(function (d) {
  var time;
  const carrosselClassName = "carrossel-foto",
  carrosselPontoClassName = "carrossel-ponto";
  const items = d.getElementsByClassName(carrosselClassName),
  carrosselPontos = d.getElementsByClassName(carrosselPontoClassName),
    totalItems = items.length;
  var slide = 0,
    moving = true;
  if (totalItems === 0) {
    console.log(items[0])
    const carrossel = d.getElementsByClassName('carrossel-wraper')[0];
    carrossel.style.display = "none"
    return;
  }

  // Set classes
  function setInitialClasses() {
    // Targets the previous, current, and next items
    // This assumes there are at least three items.
    if (totalItems >= 3) {
      items[totalItems - 1].classList.add("prev");
      items[0].classList.add("active");
      items[1].classList.add("next");
    }

    if (totalItems == 2) {
      items[totalItems - 1].classList.add("prev");
      items[0].classList.add("active");
      items[1].classList.add("next");
    }
    carrosselPontos[0].className = carrosselPontoClassName + " active";
  }

  // Set event listeners
  function setEventListeners() {
    const next = d.getElementsByClassName('carrossel-button-next')[0],
      prev = d.getElementsByClassName('carrossel-button-prev')[0];
    if (totalItems >= 2) {
      next.addEventListener('click', moveNext);
      prev.addEventListener('click', movePrev);
    }
    if (totalItems == 1) {
      next.disabled = false;
      prev.disabled = false;
      next.style.display = 'none';
      prev.style.display = 'none';
    }
  }

  // Next navigation handler
  function moveNext() {
    // Check if moving
    if (!moving) {
      // If it's the last slide, reset to 0, else +1
      if (slide === (totalItems - 1)) {
        slide = 0;
      } else {
        slide++;
      }
      // Move carousel to updated slide
      moveCarouselTo(slide);
    }
  }
  // Previous navigation handler
  function movePrev() {
    // Check if moving
    if (!moving) {
      // If it's the first slide, set as the last slide, else -1
      if (slide === 0) {
        slide = (totalItems - 1);
      } else {
        slide--;
      }

      // Move carousel to updated slide
      moveCarouselTo(slide);
    }
  }

  function disableInteraction() {
    // Set 'moving' to true for the same duration as our transition.
    // (0.5s = 500ms)

    moving = true;
    // setTimeout runs its function once after the given time
    clearInterval(time)
    setTimeout(function () {
      moving = false
      carouselMoveTime();
    }, 500);
  }

  function moveCarouselTo(slide) {
    // Check if carousel is moving, if not, allow interaction
    if (!moving) {
      // temporarily disable interactivity
      disableInteraction();
      // Update the "old" adjacent slides with "new" ones
      var newPrevious, newNext, oldPrevious, oldNext;
      if ((totalItems - 1) > 3) {
        newPrevious = slide - 1,
          newNext = slide + 1,
          oldPrevious = slide - 2,
          oldNext = slide + 2;
      }
      else if (totalItems === 3) {
        newPrevious = slide - 1;
        newNext = slide + 1;
        if (newPrevious < 0) {
          newPrevious = totalItems - 1
        }
        if (newNext >= totalItems) {
          newNext = 0
        }
        items[newPrevious].className = carrosselClassName + " prev";
        items[slide].className = carrosselClassName + " active";
        items[newNext].className = carrosselClassName + " next";

        items[slide].parentElement.className = "";
        items[newNext].parentElement.className = "disabled";
        items[newPrevious].parentElement.className = "disabled";

        carrosselPontos[newNext].className = carrosselPontoClassName;
        carrosselPontos[slide].className = carrosselPontoClassName + " active";
        carrosselPontos[newPrevious].className = carrosselPontoClassName;
      }
      else if (totalItems === 2) {
        if (slide === 1) {
          items[0].className = carrosselClassName + " prev next";
          items[slide].className = carrosselClassName + " active";

          items[0].parentElement.className = "disabled";
          items[slide].parentElement.className = "";
          
          carrosselPontos[0].className = carrosselPontoClassName;
          carrosselPontos[slide].className = carrosselPontoClassName + " active";
        }
        else if (slide === 0) {
          items[1].className = carrosselClassName + " prev next";
          items[slide].className = carrosselClassName + " active";

          items[1].parentElement.className = "disabled";
          items[slide].parentElement.className = "";

          carrosselPontos[1].className = carrosselPontoClassName;
          carrosselPontos[slide].className = carrosselPontoClassName + " active";
          
        }
      }
      // Test if carousel has more than three items
      if ((totalItems - 1) > 3) {
        // Checks and updates if the new slides are out of bounds
        if (newPrevious <= 0) {
          oldPrevious = (totalItems - 1);
        } else if (newNext >= (totalItems - 1)) {
          oldNext = 0;
        }
        // Checks and updates if slide is at the beginning/end
        if (slide === 0) {
          newPrevious = (totalItems - 1);
          oldPrevious = (totalItems - 2);
          oldNext = (slide + 1);
        } else if (slide === (totalItems - 1)) {
          newPrevious = (slide - 1);
          newNext = 0;
          oldNext = 1;
        }
        // Now we've worked out where we are and where we're going, 
        // by adding/removing classes we'll trigger the transitions.
        // Reset old next/prev elements to default classes
        items[oldPrevious].className = carrosselClassName;
        items[oldPrevious].parentElement.className = "disabled"
        items[oldNext].className = carrosselClassName;
        items[oldNext].parentElement.className = "disabled"
        // Add new classes
        items[newPrevious].className = carrosselClassName + " prev";
        items[slide].className = carrosselClassName + " active";
        items[newNext].className = carrosselClassName + " next";

        items[newPrevious].parentElement.className = "disabled"
        items[slide].parentElement.className = ""
        items[newNext].parentElement.className = "disabled"

        carrosselPontos[newPrevious].className = carrosselPontoClassName;
        carrosselPontos[slide].className = carrosselPontoClassName + " active";
        carrosselPontos[newNext].className = carrosselPontoClassName;
      }
    }
  }

  function carouselMoveTime() {
    time = setInterval( () => {
      moveNext();
    }, 3000);
  }

  function initCarousel() {
    setInitialClasses();
    setEventListeners();
    // Set moving to false so that the carousel becomes interactive
    moving = false;
    carouselMoveTime();
  }

  // make it rain
  initCarousel();
}(document));

