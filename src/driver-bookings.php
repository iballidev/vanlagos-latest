<?php include __DIR__ . "./includes/header.php"; ?>

<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">


    <!-- driver account navigation -->
    <?php include(__DIR__ . "./includes/driver-account-navigation.php") ?>
    <!--  -->
    <div class="my-4"></div>

    <div class="mdc-card">
        <h1 class="ff-headline font-semibold capitalize text-xl bg-gray-400 text-white py-2 px-4 rounded-t-md sm:rounded-t-lg">
            Booking History
        </h1>
        <div class="p-2 sm:p-4">
            <!--  -->

            <div class="relative overflow-x-auto mdc-card">
                <!--  -->
                <?php include __DIR__ . "./includes/driver-bookings-navigation.php"; ?>

                <div class="p-4">
                    <!-- Tab Content -->
                    <div id="db-tab1" class="db-tab-content">
                        <!-- van hire sevice review-->
                        <?php include __DIR__ . "./includes/driver-current-bookings.php"; ?>
                    </div>
                    <div id="db-tab2" class="hidden db-tab-content">
                        <!-- bus hire sevice review-->
                        <?php include __DIR__ . "./includes/driver-completed-bookings.php"; ?>
                    </div>
                    <div id="db-tab3" class="hidden db-tab-content">
                        <!-- car hire sevice review-->
                        <?php include __DIR__ . "./includes/driver-cancelled-bookings.php"; ?>
                    </div>
                </div>








                <!-- <div class="mdc-tab-bar" role="tablist">
                    <div class="mdc-tab-scroller">
                        <div class="mdc-tab-scroller__scroll-area">
                            <div class="mdc-tab-scroller__scroll-content">

                                <a href="./user-profile.php" class="mdc-tab mdc-tab--active" role="tab"
                                    aria-selected="true" tabindex="0">
                                    <span class="mdc-tab__content">
                                        <span class="mdc-tab__icon material-icons material-icons text-md"
                                            aria-hidden="true">
                                            airport_shuttle
                                        </span>
                                        <span class="mdc-tab__text-label hidden sm:block text-sm capitalize">Van Hire
                                            Sedbice</span>
                                    </span>
                                    <span class="mdc-tab-indicator mdc-tab-indicator--active">
                                        <span
                                            class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                                    </span>
                                    <span class="mdc-tab__ripple"></span>
                                </a>

                                <a href="./user-bookings.php" class="mdc-tab" role="tab" aria-selected="true"
                                    tabindex="0">
                                    <span class="mdc-tab__content">
                                        <span class="mdc-tab__icon material-icons text-md">
                                            directions_bus
                                        </span>
                                        <span class="mdc-tab__text-label hidden sm:block text-sm capitalize">Bus Hire
                                            Sedbice</span>
                                    </span>
                                    <span class="mdc-tab-indicator mdc-tab-indicator--active">
                                        <span
                                            class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                                    </span>
                                    <span class="mdc-tab__ripple"></span>
                                </a>

                                <a href="./user-reviews.php" class="mdc-tab" role="tab" aria-selected="true"
                                    tabindex="0">
                                    <span class="mdc-tab__content">
                                        <span class="mdc-tab__icon material-icons text-md">
                                            directions_car
                                        </span>
                                        <span class="mdc-tab__text-label hidden sm:block text-sm capitalize">Car Hire
                                            Sedbice</span>
                                    </span>
                                    <span class="mdc-tab-indicator mdc-tab-indicator--active">
                                        <span
                                            class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                                    </span>
                                    <span class="mdc-tab__ripple"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!--  -->

                <!-- <div class="my-2"></div> -->

                <!-- user van hire review -->
                <?php 
                // include(__DIR__ . "./includes/user-van-hire-review.php"); 
                ?>

            </div>
        </div>
    </div>

    <div class="my-4"></div>

</div>

<?php include __DIR__ . "./includes/footer.php"; ?>