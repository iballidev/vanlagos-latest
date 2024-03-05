import CreditCard from "./credit-card.js";
import DatePicker from "./date-picker.js";
import FormsToggler from "./form-toggler.js";
import RatingStarToValue from "./rating-value-to-star.js";
import ViewportIntersection from "./viewport-intersection.js";

document.addEventListener('DOMContentLoaded', function () {

    /**remove page loader */
    const page_loader = document.querySelector(".page-loader");
    page_loader?.classList.contains("show") ?
        page_loader.classList.remove("show") :
        null;


    /**window back */
    const window_back_btn = document.querySelectorAll(".window-back-btn");
    for (let i = 0; i < window_back_btn.length; i++) {
        const element = window_back_btn[i];
        element.addEventListener("click", () => {
            console.log("go back!")
            history.back();
        })

    }


    /**CREDITCARD field controls */
    let creditCard = new CreditCard();
    /**credit card value */
    const card_number_field = document.getElementById('card_number')
    creditCard.configureCardNumber(card_number_field);

    /**expiry date value */
    const expiration_date_field = document.getElementById('expiration_date');
    creditCard.configureCardExpiryDate(expiration_date_field);


    /**toggle hero main hire forms */
    const main_toggleHeroForms = new FormsToggler();
    main_toggleHeroForms.handleToggleHeroForms(
        document.querySelectorAll(".tab-btn"),
        document.querySelectorAll(".tab-content")
    );
    /**toogle daily-hourly forms */
    const toggle_daily_hourly_Forms = new FormsToggler();
    toggle_daily_hourly_Forms.handleToggleHeroForms(
        document.querySelectorAll(".vh-tab-btn"),
        document.querySelectorAll(".vh-tab-content")
    );

    /**toggle payment methods */
    const toggle_payment_methods = new FormsToggler();
    toggle_payment_methods.handleToggleHeroForms(
        document.querySelectorAll(".payment-tab-btn"),
        document.querySelectorAll(".payment-tab-content")
    );


    /**handle display animations */
    const viewport_intersect = new ViewportIntersection();
    viewport_intersect.handleAnimateOnViewportIntercept();

    /**handle rating value to star */
    const rating_star_to_value = new RatingStarToValue();
    rating_star_to_value;


    /**handle date_picker */
    const date_picker = new DatePicker();
    date_picker;

});



