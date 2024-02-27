<?php include(__DIR__ . "./includes/header.php"); ?>

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
                    <a href="./van-booking.php" class="mdc-button w-full bg-primary py-6 mdc-card">
                        <span class="mdc-button__ripple"></span>
                        <span class="mdc-button__label text-white text-xl capitalize">Hire Now</span>
                    </a>
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
                <a href="./bus-booking.php" class="mdc-button w-full bg-primary py-6 mdc-card">
                    <span class="mdc-button__ripple"></span>
                    <span class="mdc-button__label text-white text-xl capitalize">Hire Now</span>
                </a>
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
                <a href="./car-booking.php" class="mdc-button w-full bg-primary py-6 mdc-card">
                    <span class="mdc-button__ripple"></span>
                    <span class="mdc-button__label text-white text-xl capitalize">Hire Now</span>
                </a>
            </div>
        </div>
    </div>


</div>

<?php include(__DIR__ . "./includes/footer.php"); ?>