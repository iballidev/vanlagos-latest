document.addEventListener('DOMContentLoaded', function () {
    /** Main */
    var Main = /** @class */ (function () {
        function Main() {
            this.handleAnimateOnViewportIntercept = function () {
                var faders = document.querySelectorAll(".fade-in");
                var fromLeft = document.querySelectorAll(".from-left");
                var fromRight = document.querySelectorAll(".from-right");
                var fromBottom = document.querySelectorAll(".from-bottom");
                var fromTop = document.querySelectorAll(".from-top");
                var sliders = document.querySelectorAll(".slide-in");
                var appearOptions = {
                    threshold: 0,
                    rootMargin: "0px 0px -100px 0px"
                };
                var appearOnScroll = new IntersectionObserver(function (entries, appearOnScroll) {
                    entries.forEach(function (entry) {
                        console.log("entry: ", entry.target);
                        var dataDelay = entry.target.getAttribute("data-delay");
                        console.log("dataDelay: ", dataDelay);
                        if (!entry.isIntersecting)
                            return;
                        if (dataDelay) {
                            setTimeout(function () {
                                entry.target.classList.add("appear");
                                appearOnScroll.unobserve(entry.target);
                            }, parseInt(dataDelay));
                        }
                        else {
                            entry.target.classList.add("appear");
                            appearOnScroll.unobserve(entry.target);
                        }
                    });
                }, appearOptions);
                faders.forEach(function (fader) {
                    appearOnScroll.observe(fader);
                });
                fromLeft.forEach(function (fader) {
                    appearOnScroll.observe(fader);
                });
                fromRight.forEach(function (fader) {
                    appearOnScroll.observe(fader);
                });
                fromTop.forEach(function (fader) {
                    appearOnScroll.observe(fader);
                });
                fromBottom.forEach(function (fader) {
                    appearOnScroll.observe(fader);
                });
                sliders.forEach(function (slider) {
                    appearOnScroll.observe(slider);
                });
            };
        }
        return Main;
    }());
    /**Forms toggler */
    var FormsToggler = /** @class */ (function () {
        function FormsToggler() {
            this.handleToggleHeroForms = function (tabs, tab_content) {
                console.log(tabs);
                tabs.forEach(function (tab) {
                    tab.addEventListener("click", function () {
                        tabs.forEach(function (t) { return t.classList.remove("active"); });
                        tab.classList.add("active");
                        var targetTabId = tab.getAttribute("data-tab");
                        var tabContents = tab_content;
                        tabContents.forEach(function (content) {
                            content.classList.toggle("hidden", content.id !== targetTabId);
                        });
                    });
                });
            };
        }
        return FormsToggler;
    }());
    /** Credit card config */
    var CreditCard = /** @class */ (function () {
        function CreditCard() {
            this.configureCardNumber = function (cardNumberField) {
                cardNumberField.addEventListener('keyup', function (event) {
                    // Get the current input value
                    var inputValue = event.target.value;
                    // Remove any existing spaces
                    inputValue = inputValue.replace(/\s/g, '');
                    // Insert a space after every four characters
                    inputValue = inputValue.replace(/(\d{4})/g, '$1 ');
                    // Update the input value
                    event.target.value = inputValue.trim();
                });
            };
            this.configureCardExpiryDate = function (expirationDateField) {
                expirationDateField.addEventListener('keyup', function (event) {
                    var inputValue = expirationDateField.value.replace(/\D/g, ''); // Remove non-numeric characters
                    inputValue = inputValue.substring(0, 16); // Limit to 16 characters
                    var formattedValue = '';
                    for (var i = 0; i < inputValue.length; i += 2) {
                        formattedValue += inputValue.slice(i, i + 2) + '/';
                    }
                    // Remove the trailing slash if it exists
                    formattedValue = formattedValue.replace(/\/$/, '');
                    expirationDateField.value = formattedValue;
                });
            };
        }
        return CreditCard;
    }());
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
});
