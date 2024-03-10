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
                            class="bg-blue-100 h-20 w-20 flex items-center justify-center | rounded-full text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 dark:bg-gray-700 dark:text-blue-400 border border-blue-400">
                            <span class="material-icons text-blue dark:text-white text-5xl">
                                fact_check
                            </span>
                        </span>
                        <span>
                            <h6 class="text-lg font-semibold">Current Trips</h6>
                            <p class="text-2xl font-bold">1</p>
                        </span>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-4">
                    <div class="mdc-card flex-row gap-4 h-full p-4">
                        <span
                            class="bg-blue-100 h-20 w-20 flex items-center justify-center | rounded-full text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 dark:bg-gray-700 dark:text-green-400 border border-green-400">
                            <span class="material-icons text-green dark:text-white text-5xl">
                                fact_check
                            </span>
                        </span>
                        <span>
                            <h6 class="text-lg font-semibold">Total Completed Trips</h6>
                            <p class="text-2xl font-bold">21</p>
                        </span>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-4">
                    <div class="mdc-card flex-row gap-4 h-full p-4">
                        <span
                            class="bg-red-100 h-20 w-20 flex items-center justify-center | rounded-full text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 dark:bg-gray-700 dark:text-red-400 border border-red-400">
                            <span class="material-icons text-red dark:text-white text-5xl">
                                fact_check
                            </span>
                        </span>
                        <span>
                            <h6 class="text-lg font-semibold">Total Cancelled Trips</h6>
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

            <!--  -->

            <hr class="my-4">

            <div class="mdc-card">
                <h1
                    class="ff-headline font-semibold capitalize text-xl bg-dark text-white py-2 px-4 rounded-t-md sm:rounded-t-lg">
                    Booking History
                </h1>
                <div class="p-2 sm:p-4">
                    <div class="flex gap-2 items-end justify-end mb-4">
                        <label for="country" class="block font-bold cursor-pointer">Filter</label>
                        <div class="mdc-text-field mdc-text-field--outlined w-full max-w-40 select small">
                            <select id="country" name="country" class=" mdc-text-field__input text-sm"
                                aria-label="Label">
                                <option value="all" selected>All</option>
                                <option value="running">Running</option>
                                <option value="cancelled">Cancelled</option>
                                <option value="completed">Completed</option>
                                <option value="pending">Pending</option>
                            </select>
                            <span class="mdc-notched-outline">
                                <span class="mdc-notched-outline__leading"></span>
                                <span class="mdc-notched-outline__trailing"></span>
                            </span>
                        </div>
                    </div>
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class=" align-end-cells-right | w-full text-sm text-left rtl:text-right text-gray-500">
                            <thead class="text-md text-gray-700 uppercase bg-gray-50 ">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Booking
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Number of hours
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Total price
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Date
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Status
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr
                                    class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white font-bold">
                                        <a href="user-booking-details.php?id=123" class="text-primary">Bus Hire</a>
                                    </th>
                                    <td class="px-6 py-4">
                                        4
                                    </td>
                                    <td class="px-6 py-4 font-semibold">
                                        N16,000
                                    </td>
                                    <td class="px-6 py-4">
                                        01/03/2024
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="font-semibold bg-blue-100 text-blue-800 text-xs me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">Started</span>
                                    </td>
                                </tr>
                                <!--  -->

                                <tr
                                    class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white font-bold">
                                        <a href="user-booking-details.php?id=214" class="text-primary">Van Hire</a>
                                    </th>
                                    <td class="px-6 py-4">
                                        1
                                    </td>
                                    <td class="px-6 py-4 font-semibold">
                                        N5,000
                                    </td>
                                    <td class="px-6 py-4">
                                        21/02/2024
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="font-semibold bg-green-100 text-green-800 text-xs me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Completed</span>
                                    </td>
                                </tr>
                                <!--  -->

                                <tr
                                    class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white font-bold">
                                        <a href="user-booking-details.php?id=435" class="text-primary">Van Hire</a>
                                    </th>
                                    <td class="px-6 py-4">
                                        2
                                    </td>
                                    <td class="px-6 py-4 font-semibold">
                                        N10,000
                                    </td>
                                    <td class="px-6 py-4">
                                        01/02/2024
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="font-semibold bg-red-100 text-red-800 text-xs me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">Cancelled</span>
                                    </td>
                                </tr>
                                <!--  -->

                                <tr
                                    class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white font-bold">
                                        <a href="user-booking-details.php?id=184" class="text-primary">Van Hire</a>
                                    </th>
                                    <td class="px-6 py-4">
                                        2
                                    </td>
                                    <td class="px-6 py-4 font-semibold">
                                        N10,000
                                    </td>
                                    <td class="px-6 py-4">
                                        01/02/2024
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="font-semibold bg-gray-100 text-gray-800 text-xs me-2 px-2.5 py-0.5 rounded dark:bg-gray-900 dark:text-gray-300">Pending</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="my-4"></div>

                    <!-- pagination -->
                    <nav aria-label="Page navigation example" class="text-end">
                        <ul class="inline-flex -space-x-px text-sm">
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                            </li>
                            <li>
                                <a href="#" aria-current="page"
                                    class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </div>



    <div class="my-4"></div>

</div>

<?php include __DIR__ . "./includes/footer.php"; ?>