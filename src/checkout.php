<?php include(__DIR__ . "./includes/header.php"); ?>

<div class="mx-auto max-w-7xl px-2 mt-4 sm:px-6 lg:px-8">

    <div class="grid grid-cols-12 gap-4 sm:gap-8 mb-8">

        <div class="col-span-12 sm:col-span-6">
            <div class="grid grid-cols-12 gap-4 sm:gap-8">
                <div class="col-span-12">
                    <div class="mdc-card fade-in" data-delay="300">
                        <h1 class="ff-headline font-semibold uppercase text-xl text-center bg-dark text-white p-2 rounded-t-md sm:rounded-t-lg">
                            Package Details
                        </h1>
                        <div class="p-2 sm:p-6">
                            <ul>
                                <li class="mb-4">
                                    <label for="username" class="block font-semibold mb-2 cursor-pointer">
                                        Description <span class="italic font-medium text-sm">(kindly let us know the kind of product)</span>
                                    </label>
                                    <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--no-label block">
                                        <span class="mdc-notched-outline">
                                            <span class="mdc-notched-outline__leading"></span>
                                            <span class="mdc-notched-outline__trailing"></span>
                                        </span>
                                        <input type="text" id="username" name="username" class="border border-red-500 error mdc-text-field__input" aria-label="Label" placeholder="Enter your First name and Last name" required>
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
                                                <input type="checkbox" class="mdc-checkbox__native-control" id="accept_terms_and_condition" />
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
                                    <button class="mdc-button payment-tab-btn text-light-500 active" data-tab="payment-tab1">USE CARD</button>
                                    <button class="mdc-button payment-tab-btn text-red-500" data-tab="payment-tab2">USE BANK TRANSFER</button>
                                </div>

                                <div class="p-4">
                                    <!-- Tab Content -->
                                    <div id="payment-tab1" class="payment-tab-content">
                                        <!-- card -->
                                        <p>Card</p>
                                    </div>
                                    <div id="payment-tab2" class="hidden payment-tab-content">
                                        <!-- bank transfer -->
                                        <p>Bank transfer </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
</div>

<?php include(__DIR__ . "./includes/footer.php"); ?>