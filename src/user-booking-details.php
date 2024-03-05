<?php include(__DIR__ . "./includes/header.php"); ?>

<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">

    <!-- user account navigation -->
    <?php include(__DIR__ . "./includes/user-account-navigation.php")?>
    <!--  -->
    <div class="my-4"></div>

    <div class="mdc-card">
        <h1
            class="flex items-center ff-headline font-semibold capitalize text-xl bg-dark text-white py-2 px-4 rounded-t-md sm:rounded-t-lg">
            <?php include(__DIR__ . "./includes/back-button.php")?>
            Booking History
        </h1>
        <div class="p-2 sm:p-4">
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 sm:col-span-7">
                    <div class="mdc-card">
                        <h2 class="font-semibold bg-light-500 text-white text-lg rounded-t-md p-2">Destination
                            Information</h2>
                        <div class="p-4">
                            <table class="table align-end-cells-right">
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
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-5">
                    <div class="mdc-card">
                        <h2 class="font-semibold bg-light-500 text-white text-lg rounded-t-md p-2">Payment
                            Information</h2>
                        <div class="p-4">
                            <div class="mb-4">
                                <h3 class="font-semibold">Payment method</h3>
                                <p>Pay with cards, Bank Transfer or USSD</p>
                            </div>

                            <div class="mb-4">
                                <h3 class="font-semibold">Payment Details</h3>

                                <table class="style-regular table align-end-cells-right">
                                    <tbody>
                                        <tr>
                                            <th>Number of hours:</th>
                                            <td>4</td>
                                        </tr>
                                        <tr>
                                            <th>Price</th>
                                            <td>1 x ₦15,000.00</td>
                                        </tr>
                                        <tr>
                                            <th>Load off loader fees:</th>
                                            <td>Nil</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="my-8"></div>
                                <table class="style-regular table align-end-cells-right">
                                    <tbody>
                                        <tr>
                                            <th>Total:</th>
                                            <td class="text-lg font-bold">₦15,000.00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-12">
                    <div class="mdc-card">
                        <h2 class="font-semibold bg-light-500 text-white text-lg rounded-t-md p-2">
                            Time Remaining
                        </h2>
                        <div class="p-4">Bottom</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="my-4"></div>




</div>

<?php include(__DIR__ . "./includes/footer.php"); ?>