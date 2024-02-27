<?php include(__DIR__ . "./includes/header.php"); ?>

<div class="mx-auto max-w-7xl px-2 mt-4 sm:px-6 lg:px-8">

    <div class="grid grid-cols-12 gap-4 sm:gap-8 mb-8">
        <div class="col-span-12 sm:col-span-6">
            <!-- form starts -->
            <form action="">
                <div class="grid grid-cols-12 gap-4 sm:gap-8">
                    <div class="col-span-12">
                        <div class="mdc-card fade-in" data-delay="300">
                            <h1 class="ff-headline font-semibold uppercase text-xl text-center bg-dark text-white p-2 rounded-t-md sm:rounded-t-lg">
                                Package Details
                            </h1>
                            <div class="p-2 sm:p-6">
                                <ul>
                                    <li class="mb-4">
                                        <label for="package_description" class="block font-semibold mb-2 cursor-pointer">
                                            Description <span class="italic font-medium text-sm">(kindly let us know the kind of product)</span>
                                        </label>
                                        <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--no-label block">
                                            <span class="mdc-notched-outline">
                                                <span class="mdc-notched-outline__leading"></span>
                                                <span class="mdc-notched-outline__trailing"></span>
                                            </span>
                                            <input type="text" id="package_description" name="package_description" class="border border-red-500 error mdc-text-field__input" aria-label="Label" placeholder="Enter your First name and Last name" required>
                                        </div>
                                    </li>
                                    <li class="mb-4">
                                        <fieldset>
                                            <legend class="block font-semibold cursor-pointer">Fragile</legend>
                                            <div class="flex items-center">
                                                <div class="flex items-center">
                                                    <div class="mdc-touch-target-wrapper" style="margin-left: -.9em;">
                                                        <div class="mdc-radio mdc-radio--touch">
                                                            <input class="mdc-radio__native-control" type="radio" id="fragile_yes" name="is_fragile" checked>
                                                            <div class="mdc-radio__background">
                                                                <div class="mdc-radio__outer-circle"></div>
                                                                <div class="mdc-radio__inner-circle"></div>
                                                            </div>
                                                            <div class="mdc-radio__ripple"></div>
                                                        </div>
                                                    </div>
                                                    <label for="fragile_yes" class="block font-semibold cursor-pointer">
                                                        Yes
                                                    </label>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="mdc-touch-target-wrapper">
                                                        <div class="mdc-radio mdc-radio--touch">
                                                            <input class="mdc-radio__native-control" type="radio" id="fragile_no" name="is_fragile" checked>
                                                            <div class="mdc-radio__background">
                                                                <div class="mdc-radio__outer-circle"></div>
                                                                <div class="mdc-radio__inner-circle"></div>
                                                            </div>
                                                            <div class="mdc-radio__ripple"></div>
                                                        </div>
                                                    </div>
                                                    <label for="fragile_no" class="block font-semibold cursor-pointer">
                                                        No
                                                    </label>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <p class="text-sm">Help in Loading and Offloading (fee of ₦2000)</p>
                                    </li>
                                    <li class="border-t border-gray-200 pt-2">
                                        <div class="flex items-center">
                                            <div class="mdc-form-field" style="margin-left: -.75em;">
                                                <div class="mdc-checkbox">
                                                    <input type="checkbox" class="mdc-checkbox__native-control" id="accept_terms_and_condition" name="accept_terms_and_condition" />
                                                    <div class="mdc-checkbox__background">
                                                        <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                                            <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59" />
                                                        </svg>
                                                        <div class="mdc-checkbox__mixedmark"></div>
                                                    </div>
                                                    <div class="mdc-checkbox__ripple"></div>
                                                </div>
                                                <label for="accept_terms_and_condition" class="cursor-pointer">I agree to the &nbsp;</label>
                                            </div>
                                            <a href="./terms-and-conditions.php" class="block font-semibold text-primary">
                                                terms and condition
                                            </a>
                                        </div>
                                    </li>
                                </ul>

                                <!-- -->
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12">
                        <div class="mdc-card fade-in" data-delay="300">
                            <h1 class="ff-headline font-semibold uppercase text-xl text-center bg-dark text-white p-2 rounded-t-md sm:rounded-t-lg">
                                Payment Method
                            </h1>
                            <div class="p-2 sm:p-6">
                                <!-- bg-white rounded-md mdc-card -->

                                <!-- form-tab-navs | mb-4 pb-4 -->
                                <div class="">
                                    <!-- Payment Method Tabs -->
                                    <div class="">
                                        <button type="button" class="mdc-button payment-tab-btn text-light-500 active" data-tab="payment-tab1">USE CARD</button>
                                        <button type="button" class="mdc-button payment-tab-btn text-red-500" data-tab="payment-tab2">USE BANK TRANSFER</button>
                                    </div>

                                    <div class="py-4">
                                        <!-- Tab Content -->
                                        <div id="payment-tab1" class="payment-tab-content">

                                            <!-- card -->
                                            <div class="mdc-card overflow-hidden">
                                                <h6 class="bg-light-300 text-white py-2 px-4 font-semibold">Enter card details</h6>
                                                <div class="grid grid-cols-12 gap-4 p-4">
                                                    <div class="col-span-12 sm:col-span-8">
                                                        <label for="card_number" class="block text-gray-600 text-sm font-medium mb-1">Card Number</label>
                                                        <input type="text" id="card_number" name="card_number" class="form-input w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="0000 0000 0000 0000" required maxlength="19">
                                                    </div>
                                                    <div class="col-span-12 sm:col-span-4">
                                                        <div>
                                                            <label for="expiration_date" class="block text-gray-600 text-sm font-medium mb-1">Expiration Date</label>
                                                            <input type="text" id="expiration_date" name="expiration_date" class="form-input w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="MM/YY" required maxlength="5">
                                                        </div>
                                                    </div>
                                                    <div class="col-span-6 sm:col-span-4">
                                                        <label for="cvc" class="block text-gray-600 text-sm font-medium mb-1">CVC</label>
                                                        <input type="text" id="cvc" name="cvc" class="form-input w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" placeholder="123" required maxlength="3">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div id="payment-tab2" class="hidden payment-tab-content">
                                            <!-- bank transfer -->
                                            <div class="mdc-card overflow-hidden">
                                                <h6 class="bg-light-300 text-white py-2 px-4 font-semibold">Transfer to the account details below</h6>
                                                <ul class="p-4">
                                                    <li>
                                                        <span class="font-semibold">Bank Name:&nbsp;</span>
                                                        <span>GT Bank</span>
                                                    </li>
                                                    <li>
                                                        <span class="font-semibold">Account Name:&nbsp;</span>
                                                        <span>Adewale Martins B.</span>
                                                    </li>
                                                    <li>
                                                        <span class="font-semibold">Account Number:&nbsp;</span>
                                                        <span>098272633444</span>
                                                    </li>
                                                </ul>
                                                <hr>
                                                <div class="grid grid-cols-12 gap-4 p-4">
                                                    <div class="col-span-12 sm:col-span-6">
                                                        <label for="first_name" class="block text-gray-600 text-sm font-medium mb-1">First Name</label>
                                                        <input type="text" id="first_name" name="first_name" class="form-input w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
                                                    </div>
                                                    <div class="col-span-12 sm:col-span-6">
                                                        <div>
                                                            <label for="last_name" class="block text-gray-600 text-sm font-medium mb-1">Last Name</label>
                                                            <input type="text" id="last_name" name="last_name" class="form-input w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- form ends -->
        </div>
        <div class="col-span-12 sm:col-span-6">
            <div class="mdc-card fade-in" data-delay="300">
                <h1 class="ff-headline font-semibold capitalize text-xl text-center bg-dark text-white p-2 rounded-t-md sm:rounded-t-lg">
                    Summary
                </h1>
                <div class="p-2 sm:p-6">

                    <table class="style-regular table align-end-cells-right">
                        <tbody>
                            <tr>
                                <th>Vehicle</th>
                                <td>Van</td>
                            </tr>
                            <tr>
                                <th>Pick-up Address</th>
                                <td>13, ademoyo street Magun, mushin</td>
                            </tr>
                            <tr>
                                <th>State</th>
                                <td>Lagos</td>
                            </tr>
                            <tr>
                                <th>Drop-off Address</th>
                                <td>13, Solari street Sajukun, Osupa</td>
                            </tr>
                            <tr>
                                <th>State</th>
                                <td>Lagos</td>
                            </tr>
                            <tr>
                                <th>Pick-up date</th>
                                <td>13th October 2024</td>
                            </tr>
                            <tr>
                                <th>Pick-up time</th>
                                <td>7:00am</td>
                            </tr>
                            <tr>
                                <th>Number of hours</th>
                                <td>4</td>
                            </tr>
                            <tr>
                                <th>Price</th>
                                <td>1 x ₦ 15,000</td>
                            </tr>
                            <tr>
                                <th>Load off loader free</th>
                                <td>Nil</td>
                            </tr>
                            <tr>
                                <th>Total Amount</th>
                                <td class="text-2xl font-semibold">₦ 15,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <script>
        function configureCardNumber() {
            document.getElementById('card_number').addEventListener('keyup', function(event) {
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

        function configureCardExpiryDate() {
            document.addEventListener("DOMContentLoaded", function() {
                const creditCardInput = document.getElementById('expiration_date');

                creditCardInput.addEventListener('keyup', function(event) {
                    let inputValue = creditCardInput.value.replace(/\D/g, ''); // Remove non-numeric characters
                    inputValue = inputValue.substring(0, 16); // Limit to 16 characters

                    let formattedValue = '';
                    for (let i = 0; i < inputValue.length; i += 2) {
                        formattedValue += inputValue.slice(i, i + 2) + '/';
                    }

                    // Remove the trailing slash if it exists
                    formattedValue = formattedValue.replace(/\/$/, '');

                    creditCardInput.value = formattedValue;
                });
            });
        }
        configureCardNumber();
        configureCardExpiryDate();
    </script>
</div>

<?php include(__DIR__ . "./includes/footer.php"); ?>