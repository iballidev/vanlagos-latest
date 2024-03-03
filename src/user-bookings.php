<?php include(__DIR__ . "./includes/header.php"); ?>

<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">


    <!-- user account navigation -->
    <?php include(__DIR__ . "./includes/user-account-navigation.php")?>
    <!--  -->
    <div class="my-4"></div>

    <div class="mdc-card">
        <h1
            class="ff-headline font-semibold capitalize text-xl bg-dark text-white py-2 px-4 rounded-t-md sm:rounded-t-lg">
            Booking History
        </h1>
        <div class="p-2 sm:p-4">
            <div class="flex gap-2 items-end justify-end mb-4">
                <label for="country" class="block font-bold cursor-pointer">Filter</label>
                <div class="mdc-text-field mdc-text-field--outlined w-full max-w-40 select small">
                    <select id="country" name="country" class=" mdc-text-field__input text-sm" aria-label="Label">
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
                <table
                    class=" align-end-cells-right | w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-md text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
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
                            <th scope="row" class="px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white font-bold">
                                Bus Hire
                            </th>
                            <td class="px-6 py-4">
                                4
                            </td>
                            <td class="px-6 py-4">
                                N16,000
                            </td>
                            <td class="px-6 py-4">
                                01/03/2024
                            </td>
                            <td class="px-6 py-4">
                                <span
                                    class="font-semibold bg-blue-100 text-blue-800 text-xs me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">Started</span>
                            </td>
                            <!-- <td class="px-6 py-4">
                                <div class="flex items-center justify-end w-full">
                                    <button type="button"
                                        class="mdc-card text-dark bg-gray-300 hover:bg-dark-800 font-medium rounded-lg text-sm px-4 py-2 me-2 mb-2">Cancel</button>
                                    <button type="button"
                                        class="mdc-card text-white bg-green-500 hover:bg-green-600 font-medium rounded-lg text-sm px-4 py-2 me-2 mb-2">Completed</button>
                                </div>
                            </td> -->
                        </tr>
                        <!--  -->

                        <tr
                            class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white font-bold">
                                Van Hire
                            </th>
                            <td class="px-6 py-4">
                                1
                            </td>
                            <td class="px-6 py-4">
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
                            <th scope="row" class="px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white font-bold">
                                Van Hire
                            </th>
                            <td class="px-6 py-4">
                                2
                            </td>
                            <td class="px-6 py-4">
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
                            <th scope="row" class="px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white font-bold">
                                Van Hire
                            </th>
                            <td class="px-6 py-4">
                                2
                            </td>
                            <td class="px-6 py-4">
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
                            class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                    </li>
                    <li>
                        <a href="#" aria-current="page"
                            class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                    </li>
                </ul>
            </nav>

        </div>
    </div>

    <div class="my-4"></div>

</div>

<?php include(__DIR__ . "./includes/footer.php"); ?>