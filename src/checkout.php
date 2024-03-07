<?php include __DIR__ . "./includes/header.php"; ?>

<div class="mx-auto max-w-7xl px-2 mt-4 sm:px-6 lg:px-8">

    <div class="grid grid-cols-12 gap-4 sm:gap-8 mb-8">
        <div class="col-span-12 sm:col-span-6">
            <div class="grid grid-cols-12 gap-4 sm:gap-8">
                <div class="col-span-12">
                    <div class="mdc-card fade-in" data-delay="300">
                        <h1
                            class="ff-headline font-semibold uppercase text-xl text-center bg-dark text-white p-2 rounded-t-md sm:rounded-t-lg">
                            Payment Method
                        </h1>
                        <div class="p-2 sm:p-6">
                            <!-- bg-white rounded-md mdc-card -->

                            <!-- form-tab-navs | mb-4 pb-4 -->
                            <div class="">
                                <!-- Payment Method Tabs -->
                                <div class="">
                                    <button type="button" class="mdc-button payment-tab-btn active"
                                        data-tab="payment-tab1">USE CARD</button>
                                    <button type="button" class="mdc-button payment-tab-btn" data-tab="payment-tab2">USE
                                        BANK TRANSFER</button>
                                </div>

                                <div class="py-4">
                                    <!-- Tab Content -->
                                    <div id="payment-tab1" class="payment-tab-content">

                                        <!-- card -->
                                        <div class="mdc-card overflow-hidden">
                                            <div class="grid grid-cols-12 gap-4 p-4">
                                                <div class="col-span-12 sm:col-span-8">
                                                    <ul class="payment-card-logos">
                                                        <li>
                                                            <p class="sr-only">Mastercard</p>
                                                            <img src="./images/mastercard-logo-3.svg" alt="mastercard">
                                                        </li>
                                                        <li>
                                                            <p class="sr-only">Visa</p>
                                                            <img src="./images/visa-logo.svg" alt="visa">
                                                        </li>
                                                        <li>
                                                            <p class="sr-only">Verve</p>
                                                            <img src="./images/verve-logo.svg" alt="verve">
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-span-12">
                                                    <button type="button"
                                                        class="mdc-button bg-primary py-4 px-8 mdc-card mx-auto w-full">
                                                        <span class="mdc-button__ripple"></span>
                                                        <span class="mdc-button__label text-white capitalize">Pay
                                                            Now</span>
                                                    </button>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div id="payment-tab2" class="hidden payment-tab-content">
                                        <!-- bank transfer -->
                                        <div class="mdc-card overflow-hidden">
                                            <h6 class="bg-light-300 text-white py-2 px-4 font-semibold">Transfer to
                                                the account details below</h6>
                                            <div class="p-4">
                                                <ul class="mb-4">
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

                                                <button type="submit" class="mdc-button bg-primary py-4 px-8 mdc-card w-full">
                                                    <span class="mdc-button__ripple"></span>
                                                    <span class="mdc-button__label text-white capitalize">Confirm
                                                        Payment</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <p class="text-sm text-light-300">Your personal data will be used to process your order,
                                support your experience throughout this website, and for other purposes described in our
                                <a href="#" class="text-primary font-semibold">privacy policy</a> .</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-between my-4">
                <button type="button" class="mdc-button border border-primary py-4 px-8 mdc-card">
                    <span class="mdc-button__ripple"></span>
                    <span class="mdc-button__label text-primary capitalize">Go Back</span>
                </button>
            </div>
        </div>
        <div class="col-span-12 sm:col-span-6">
            <div class="mdc-card fade-in" data-delay="300">
                <h1
                    class="ff-headline font-semibold capitalize text-xl text-center bg-dark text-white p-2 rounded-t-md sm:rounded-t-lg">
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

<?php include __DIR__ . "./includes/footer.php"; ?>