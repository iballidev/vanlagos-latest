<?php include __DIR__ . "./includes/header.php"; ?>

<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">


    <!-- driver account navigation -->
    <?php include(__DIR__ . "./includes/driver-account-navigation.php") ?>
    <!--  -->
    <div class="my-4"></div>

    <div class="mdc-card">
        <h1
            class="ff-headline font-semibold capitalize text-xl bg-gray-400 text-white py-2 px-4 rounded-t-md sm:rounded-t-lg">
            Dashboard
        </h1>

        <div class="p-4 ">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 sm:col-span-4">
                    <div class="mdc-card flex-row gap-4 h-full p-4">
                        <span
                            class="bg-blue-100 h-20 w-20 flex items-center justify-center | rounded-full text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-400">
                            <span class="material-icons text-blue dark:text-white text-5xl">
                                fact_check
                            </span>
                        </span>
                        <span>
                            <h6 class="text-lg font-semibold">Current Trip</h6>
                            <p class="text-2xl font-bold">1</p>
                        </span>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-4">
                    <div class="mdc-card flex-row gap-4 h-full p-4">
                        <span
                            class="bg-blue-100 h-20 w-20 flex items-center justify-center | rounded-full text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-green-400 border border-green-400">
                            <span class="material-icons text-green dark:text-white text-5xl">
                                fact_check
                            </span>
                        </span>
                        <span>
                            <h6 class="text-lg font-semibold">Completed Trip</h6>
                            <p class="text-2xl font-bold">21</p>
                        </span>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-4">
                    <div class="mdc-card flex-row gap-4 h-full p-4">
                        <span
                            class="bg-red-100 h-20 w-20 flex items-center justify-center | rounded-full text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-red-400 border border-red-400">
                            <span class="material-icons text-red dark:text-white text-5xl">
                                fact_check
                            </span>
                        </span>
                        <span>
                            <h6 class="text-lg font-semibold">Cancelled Trip</h6>
                            <p class="text-2xl font-bold">3</p>
                        </span>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-5">
                    <div class="mdc-card justify-between h-full p-4">
                        <h6 class="text-lg font-semibold mb-8">Total-Closed trip</h6>
                        <?php include __DIR__ . "./includes/total-closed-trips-graph.php"; ?>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-7">
                    <div class="mdc-card justify-between h-full p-4"> 
                        <h6 class="text-lg font-semibold mb-8">Completed trip</h6>
                        <?php include __DIR__ . "./includes/closed-trips-graph.php"; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="my-4"></div>

</div>

<?php include __DIR__ . "./includes/footer.php"; ?>