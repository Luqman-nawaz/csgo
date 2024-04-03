document.addEventListener("DOMContentLoaded", function () {
  const counters = document.querySelectorAll(".counter");
  
  counters.forEach(counter => {
      const valueElement = counter.querySelector(".value");
      const minusButton = counter.querySelector(".minus");
      const plusButton = counter.querySelector(".plus");
      
      let counterValue = parseInt(valueElement.value);

      function updateCounter(newValue) {
          valueElement.value = newValue;
          counterValue = newValue;

          // Disable the minus button if counterValue is 1
          if (counterValue === 1) {
              minusButton.disabled = true;
          } else {
              minusButton.disabled = false;
          }
      }

      function incrementCounter() {
          const newValue = counterValue + 1;
          updateCounter(newValue);
      }

      function decrementCounter() {
          if (counterValue > 1) {
              const newValue = counterValue - 1;
              updateCounter(newValue);
          }
      }

      plusButton.addEventListener("click", incrementCounter);
      minusButton.addEventListener("click", decrementCounter);

      updateCounter(counterValue);
  });
});