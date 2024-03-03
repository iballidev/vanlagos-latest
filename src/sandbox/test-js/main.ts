
document.addEventListener('DOMContentLoaded', function () {
  /** Main */
  class Main {
    constructor() { }

    handleAnimateOnViewportIntercept = () => {
      const faders = document.querySelectorAll(".fade-in");
      const fromLeft = document.querySelectorAll(".from-left");
      const fromRight = document.querySelectorAll(".from-right");
      const fromBottom = document.querySelectorAll(".from-bottom");
      const fromTop = document.querySelectorAll(".from-top");
      const sliders = document.querySelectorAll(".slide-in");


      const appearOptions = {
        threshold: 0,
        rootMargin: "0px 0px -100px 0px"
      };
      const appearOnScroll = new IntersectionObserver((entries, appearOnScroll) => {
        entries.forEach((entry) => {
          console.log("entry: ", entry.target)
          let dataDelay = entry.target.getAttribute("data-delay");
          console.log("dataDelay: ", dataDelay)
          if (!entry.isIntersecting) return;

          if (dataDelay) {
            setTimeout(() => {
              entry.target.classList.add("appear");
              appearOnScroll.unobserve(entry.target);
            }, parseInt(dataDelay));
          } else {
            entry.target.classList.add("appear");
            appearOnScroll.unobserve(entry.target);
          }
        });
      }, appearOptions);

      faders.forEach((fader) => {
        appearOnScroll.observe(fader);
      });
      fromLeft.forEach((fader) => {
        appearOnScroll.observe(fader);
      });
      fromRight.forEach((fader) => {
        appearOnScroll.observe(fader);
      });
      fromTop.forEach((fader) => {
        appearOnScroll.observe(fader);
      });
      fromBottom.forEach((fader) => {
        appearOnScroll.observe(fader);
      });

      sliders.forEach((slider) => {
        appearOnScroll.observe(slider);
      });
    }
  }

  /**Forms toggler */
  class FormsToggler {
    handleToggleHeroForms = (tabs: any, tab_content: any) => {
      console.log(tabs);
      tabs.forEach((tab: any) => {
        tab.addEventListener("click", () => {
          tabs.forEach((t: any) => t.classList.remove("active"));
          tab.classList.add("active");

          const targetTabId = tab.getAttribute("data-tab");
          const tabContents = tab_content;
          tabContents.forEach((content: any) => {
            content.classList.toggle("hidden", content.id !== targetTabId);
          });
        });
      });
    };
  }

  /** Credit card config */
  class CreditCard {
    constructor() { }

    configureCardNumber = (cardNumberField: any) => {

      cardNumberField.addEventListener('keyup', (event: any) => {
        // Get the current input value
        let inputValue = event.target.value;

        // Remove any existing spaces
        inputValue = inputValue.replace(/\s/g, '');

        // Insert a space after every four characters
        inputValue = inputValue.replace(/(\d{4})/g, '$1 ');

        // Update the input value
        event.target.value = inputValue.trim();
      });
    }

    configureCardExpiryDate = (expirationDateField: any) => {
      expirationDateField.addEventListener('keyup', (event:any) =>{
        let inputValue = expirationDateField.value.replace(/\D/g,
          ''); // Remove non-numeric characters
        inputValue = inputValue.substring(0, 16); // Limit to 16 characters

        let formattedValue = '';
        for (let i = 0; i < inputValue.length; i += 2) {
          formattedValue += inputValue.slice(i, i + 2) + '/';
        }

        // Remove the trailing slash if it exists
        formattedValue = formattedValue.replace(/\/$/, '');

        expirationDateField.value = formattedValue;
      });
    }
  }

  // const init = new Main();
  // // handle display animations
  // init.handleAnimateOnViewportIntercept();

  // const main_toggleHeroForms = new FormsToggler();
  // // toggle hero main hire forms
  // main_toggleHeroForms.handleToggleHeroForms(
  //   document.querySelectorAll<any>(".tab-btn"),
  //   document.querySelectorAll<any>(".tab-content")
  // );
  // // toogle daily-hourly forms
  // const toggle_daily_hourly_Forms = new FormsToggler();
  // toggle_daily_hourly_Forms.handleToggleHeroForms(
  //   document.querySelectorAll<any>(".vh-tab-btn"),
  //   document.querySelectorAll<any>(".vh-tab-content")
  // );

  // // toggle payment methods
  // const toggle_payment_methods = new FormsToggler();
  // toggle_payment_methods.handleToggleHeroForms(
  //   document.querySelectorAll<any>(".payment-tab-btn"),
  //   document.querySelectorAll<any>(".payment-tab-content")
  // );



  // let creditCard = new CreditCard();
  // // credit card value
  // const card_number_field = document.getElementById('card_number')
  // creditCard.configureCardNumber(card_number_field);
  // // expiry date value
  // const expiration_date_field = document.getElementById('expiration_date');
  // creditCard.configureCardExpiryDate(expiration_date_field);

})