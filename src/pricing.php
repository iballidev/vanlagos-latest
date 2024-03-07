<?php include __DIR__ . "./includes/header.php"; ?>
<?php include(__DIR__ . "./includes/dialog-van-hire.php"); ?>
<?php include(__DIR__ . "./includes/dialog-bus-hire.php"); ?>

<div class="bg-banner-1">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <ul class="breadcrumb py-2 text-bright">
            <li><a href="#">Home</a></li>
            <li>Pricing</li>
        </ul>
        <div class="py-16">
            <h1 class="font-bold text-center text-4xl sm:text-5xl text-dark-200">Pricing</h1>
        </div>
    </div>
</div>



<!--  -->

<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">


    <div class="grid grid-cols-3 gap-4 sm:gap-8 my-8">
        <div class="col-span-12 sm:col-span-1">
            <div class="pricing-card | text-center p-6 border border-primary rounded-xl">
                <img src="./images/bus-icons-head.svg" alt="Van Hire" class="mx-auto mb-4">
                <h2 class="text-2xl bg-dark-200 text-white p-2 font-bold">Van hire</h2>
                <!--  pricing table -->
                <table class="w-full text-sm my-4">
                    <tbody>
                        <tr>
                            <th class="text-start whitespace-nowrap">₦ 15,000</th>
                            <td class="text-start">for 4hours (min. rate and booking time)</td>
                        </tr>
                        <tr>
                            <th class="text-start whitespace-nowrap">₦ 5,000</th>
                            <td class="text-start">for each additional hour</td>
                        </tr>
                        <tr>
                            <th class="text-start whitespace-nowrap">₦ 35,000</th>
                            <td class="text-start">for full day booking (8 hrs)</td>
                        </tr>
                    </tbody>
                </table>
                <!--  -->
                <div class="sm:px-8">
                    <!-- <a href="./van-booking.php" class="mdc-button w-full bg-primary py-6">
                        <span class="mdc-button__ripple"></span>
                        <span class="mdc-button__label text-white text-xl capitalize">Hire Now</span>
                    </a> -->
                    <div class="my-2"></div>
                    <button class="mdc-button w-full primary-btn py-6" id="show-van-hire-dialog-button">
                        <span class="mdc-button__ripple"></span>
                        <span class="mdc-button__label text-white text-xl capitalize">Hire Now</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-span-12 sm:col-span-1">
            <div class="pricing-card | text-center p-6 border border-primary rounded-xl">
                <img src="./images/bus-icons-head.svg" alt="Bus Hire" class="mx-auto mb-4">
                <h2 class="text-2xl bg-dark-200 text-white p-2 font-bold">Bus hire</h2>
                <!--  pricing table -->
                <table class="w-full text-sm my-4">
                    <tbody>
                        <tr>
                            <th class="text-start whitespace-nowrap">₦ 20,000</th>
                            <td class="text-start">for 4hours (min. rate and booking time)</td>
                        </tr>
                        <tr>
                            <th class="text-start whitespace-nowrap">₦ 5,000</th>
                            <td class="text-start">for each additional hour</td>
                        </tr>
                        <tr>
                            <th class="text-start whitespace-nowrap">₦ 40,000</th>
                            <td class="text-start">for full day booking (8 hrs)</td>
                        </tr>
                    </tbody>
                </table>
                <!--  -->
                <!-- <a href="./bus-booking.php" class="mdc-button w-full bg-primary py-6">
                    <span class="mdc-button__ripple"></span>
                    <span class="mdc-button__label text-white text-xl capitalize">Hire Now</span>
                </a> -->
                <div class="my-2"></div>
                <button class="mdc-button w-full primary-btn py-6" id="show-bus-hire-dialog-button">
                    <span class="mdc-button__ripple"></span>
                    <span class="mdc-button__label text-white text-xl capitalize">Hire Now</span>
                </button>
            </div>
        </div>
        <div class="col-span-12 sm:col-span-1">
            <div class="pricing-card | text-center p-6 border border-primary rounded-xl">
                <img src="./images/bus-icons-head.svg" alt="Car Hire" class="mx-auto mb-4">
                <h2 class="text-2xl bg-dark-200 text-white p-2 font-bold">Car hire</h2>
                <!--  pricing table -->
                <table class="w-full text-sm my-4">
                    <tbody>
                        <tr>
                            <th class="text-start whitespace-nowrap">₦ 7,500</th>
                            <td class="text-start">for 4hours (min. rate and booking time)</td>
                        </tr>
                        <tr>
                            <th class="text-start whitespace-nowrap">₦ 2,500</th>
                            <td class="text-start">for each additional hour</td>
                        </tr>
                        <tr>
                            <th class="text-start whitespace-nowrap">₦ 17,500</th>
                            <td class="text-start">for full day booking (8 hrs)</td>
                        </tr>
                    </tbody>
                </table>
                <!--  -->
                <a href="./car-booking.php" class="mdc-button w-full bg-primary py-6">
                    <span class="mdc-button__ripple"></span>
                    <span class="mdc-button__label text-white text-xl capitalize">Hire Now</span>
                </a>
            </div>
        </div>
    </div>


</div>

<div class="mdc-dialog mdc-dialog--fullscreen" id="van-hire-dialog">
    <div class="mdc-dialog__container">
        <div class="mdc-dialog__surface" role="alertdialog" aria-modal="true" aria-labelledby="my-dialog-title"
            aria-describedby="my-dialog-content">
            <div class="mdc-dialog__content" id="my-dialog-content">
                <h1>Van Hire Dialog</h1>
                <ul class="mdc-list">
                    <li class="mdc-list-item" tabindex="0">
                        <span class="mdc-list-item__ripple"></span>
                        <span class="mdc-list-item__text">Single-line item</span>
                    </li>
                    <li class="mdc-list-item">
                        <span class="mdc-list-item__ripple"></span>
                        <span class="mdc-list-item__text">Single-line item</span>
                    </li>
                    <li class="mdc-list-item">
                        <span class="mdc-list-item__ripple"></span>
                        <span class="mdc-list-item__text">Single-line item</span>
                    </li>
                </ul>
            </div>
            <div class="mdc-dialog__actions">
                <button type="button" class="mdc-button mdc-dialog__button" data-mdc-dialog-action="cancel">
                    <div class="mdc-button__ripple"></div>
                    <span class="mdc-button__label">Cancel</span>
                </button>
                <button type="button" class="mdc-button mdc-dialog__button" data-mdc-dialog-action="discard">
                    <div class="mdc-button__ripple"></div>
                    <span class="mdc-button__label">Discard</span>
                </button>
            </div>
        </div>
    </div>
    <div class="mdc-dialog__scrim"></div>
</div>
<?php include __DIR__ . "./includes/footer.php"; ?>