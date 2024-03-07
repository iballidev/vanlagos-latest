<?php include __DIR__ . "./includes/header.php"; ?>

<section>
    <div class="hero">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="grid grid-cols-12">
                <div class="hero-height col-span-12 sm:col-span-6 flex items-start flex-col justify-center py-8">
                    <h1 class="text-white text-4xl sm:text-6xl font-bold  | animate__animated animate__fadeIn ff-headline">Unlock Adventure</h1>
                    <p class="text-white text-xl sm:text-2xl font-bold | animate__animated animate__fadeIn animate__delay-1s">Your Key to Seamless Travel with us</p>
                </div>
                <div class="col-span-12 sm:col-span-6">
                    <!-- forms tabs -->


                    <div class="rounded-md mdc-card my-8 | animate__animated animate__fadeInUp animate__delay-1s">
                        <!-- Navigation Tabs -->
                        <div class="form-tab-navs | mb-4 rounded-t-md"">
                            <button class=" mdc-button tab-btn sm:text-lg font-semibold text-light-500"
                            data-tab="tab1">Van
                            Hire</button>
                            <button class="mdc-button tab-btn sm:text-lg font-semibold text-red-500 active"
                                data-tab="tab2">Bus
                                Hire</button>
                            <button class="mdc-button tab-btn sm:text-lg font-semibold text-light-500" data-tab="tab3"
                                disabled>Car
                                Hire</button>
                        </div>

                        <div class="p-4">
                            <!-- Tab Content -->
                            <div id="tab1" class="hidden tab-content">
                                <!-- van hire form -->
                                <?php include_once(__DIR__ . "./includes/van-hire-form.php");?>
                            </div>

                            <div id="tab2" class="tab-content">
                                <!-- bus hire form -->
                                <?php include_once(__DIR__ . "./includes/bus-hire-form.php");?>
                            </div>

                            <div id="tab3" class="hidden tab-content">
                                <!-- car hire form -->
                                <?php  include_once(__DIR__ . "./includes/car-hire-form.php") ;?>
                            </div>
                        </div>
                    </div>

                    <script>
                    // JavaScript to handle tab switching
                    // const tabs = document.querySelectorAll('.tab-btn');
                    // tabs.forEach(tab => {
                    //     tab.addEventListener('click', () => {
                    //         tabs.forEach(t => t.classList.remove('active'));
                    //         tab.classList.add('active');

                    //         const targetTabId = tab.getAttribute('data-tab');
                    //         const tabContents = document.querySelectorAll('.tab-content');
                    //         tabContents.forEach(content => {
                    //             content.classList.toggle('hidden', content.id !==
                    //                 targetTabId);
                    //         });
                    //     });
                    // });
                    </script>

                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <h2 class="sr-only">Our Core Values</h2>
    <div class="mx-auto max-w-7xl px-2 pt-8 sm:pt-16 sm:px-6 lg:px-8">
        <ul class="grid grid-cols-12 items-center gap-y-10 sm:gap-y-8">

            <li class="col-span-12">
                <div class="grid grid-cols-12 items-center gap-4 sm:gap-8">
                    <div class="col-span-12 sm:col-span-6 fade-in" data-delay="200">
                        <img src="./images/punctuality-featured-image.png" alt="Punctuality featured image">
                    </div>
                    <div class="col-span-12 sm:col-span-6 fade-in" data-delay="400">
                        <h4 class="ff-headline font-bold text-2xl sm:text-4xl text-primary mb-2">Punctuality</h4>
                        <p class="text-dark sm:text-lg">At Vanlagos, we understand the value of time. That's why
                            punctuality is ingrained in every
                            aspect of our service. From the moment you make a booking to the final destination, we
                            prioritize timeliness to ensure your journey is seamless and stress-free. </p>
                    </div>
                </div>
            </li>

            <li class="col-span-12">
                <div class="grid grid-cols-12 items-center gap-4 sm:gap-8">
                    <div class="col-span-12 sm:col-span-6 order-2 sm:order-1 fade-in" data-delay="350">
                        <h4 class="ff-headline font-bold text-2xl sm:text-4xl text-primary mb-2">Air Conditioned Buses</h4>
                        <p class="text-dark sm:text-lg">Embark on any journey, be it work commute, sightseeing, or group
                            outings, and find our buses offering a cool, refreshing ambiance, even under scorching heat.
                            Bid farewell to sweltering discomfort as you embrace a relaxing ride, where you can sit
                            back, unwind, and enjoy the journey in absolute comfort.</p>
                    </div>
                    <div class="col-span-12 sm:col-span-6 order-1 sm:order-2 fade-in" data-delay="400">
                        <img src="./images/air-conditioned-buses-featured-image.png"
                            alt="Air Conditioned Buses featured image">
                    </div>
                </div>
            </li>

            <li class="col-span-12">
                <div class="grid grid-cols-12 items-center gap-4 sm:gap-8">
                    <div class="col-span-12 sm:col-span-6 fade-in" data-delay="450">
                            <img src="./images/comfortable-seats-and-leg-space-featured-image.png"
                                alt="Comfortable seats & leg space featured image">
                    </div>
                    <div class="col-span-12 sm:col-span-6 fade-in" data-delay="500">
                        <h4 class="ff-headline font-bold text-2xl sm:text-4xl text-primary mb-2">Comfortable seats & leg space</h4>
                        <p class="text-dark sm:text-lg">Ensuring comfort for all travelers, our buses feature spacious,
                            cozy seats with ample legroom, catering to passengers of every size, whether embarking on a
                            short commute or a long-distance journey, ensuring a comfortable ride with our plush seating
                            arrangements.</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>



<?php include(__DIR__ . "./includes/how-it-works.php"); ?>


<?php include __DIR__ . "./includes/footer.php"; ?>