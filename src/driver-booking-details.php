<?php include(__DIR__ . "./includes/header.php"); ?>

<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">

    <!-- driver account navigation -->
    <?php include(__DIR__ . "./includes/driver-account-navigation.php") ?>
    <!--  -->
    <div class="my-4"></div>

    <div class="mdc-card">
        <h1 class="flex items-center ff-headline font-semibold capitalize text-xl bg-gray-400 text-white py-2 px-4 rounded-t-md sm:rounded-t-lg">
            <?php include(__DIR__ . "./includes/back-button.php") ?>
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
                                <h3 class="font-bold">Payment method</h3>
                                <p>Pay with cards, Bank Transfer or USSD</p>
                            </div>

                            <div class="mb-4">
                                <h3 class="font-bold">Payment Details</h3>

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
                        <div class="p-4">

                            <!-- tailwind status badges -->
                            <span class="inline-flex items-center rounded-md bg-gray-200 px-2 py-1 text-xs font-medium text-gray-600 ring-1 ring-inset ring-gray-500/10">Pending</span>
                            <span class="inline-flex items-center rounded-md bg-red-200 px-2 py-1 text-xs font-medium text-red-700 ring-1 ring-inset ring-red-600/10">Cancelled</span>
                            <span class="inline-flex items-center rounded-md bg-yellow-200 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">Pending</span>
                            <span class="inline-flex items-center rounded-md bg-green-200 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Completed</span>
                            <span class="inline-flex items-center rounded-md bg-blue-200 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-700/10">Started</span>
                            <span class="inline-flex items-center rounded-md bg-blue-900 px-2 py-1 text-xs font-medium text-white ring-1 ring-inset ring-white/10">Passed</span>


                            <div class="my-4"></div>
                            <!-- timer value -->
                            <input type="tel" value="305" id="time-value" hidden>
                            <!--  -->
                            <div id="timer" class="flex justify-between border p-4 rounded-lg text-center font-bold text-2xl">
                                00:00:00</div>
                        </div>
                    </div>
                </div>

                <div class="col-span-12 flex justify-center gap-2">
                    <button class="mdc-button primary-btn px-6" id="counter-start-button">Start</button>
                    <button class="mdc-button danger-btn-inverse px-6 hidden" id="counter-stop-button">Stop</button>
                </div>
            </div>
        </div>
    </div>

    <div class="my-4"></div>




    <script>
        // // Set the countdown time in seconds
        // var countdownTime = 300; // 300 for 5 minutes
        // let time_value = document.getElementById('time-value');

        // // countdownTime = parseInt(time_value.value)

        // let timer = countdownTime;
        // let isCancelled = false;
        // let isStart = false;

        // let timer_screen = document.getElementById('timer');
        // /**default counter screen style */
        // timer_screen ? timer_screen.innerHTML =
        //     `<span>0hr</span>:<span>0min</span>:<span>0sec</span>` :
        //     null;

        // !timer_screen.classList.contains("text-gray-300") ? timer_screen.classList.add("text-gray-300") : null;


        // function updateTimerDisplay() {
        //     if (isCancelled) return
        //     const hours = Math.floor(timer / 3600);
        //     const minutes = Math.floor((timer % 3600) / 60);
        //     const seconds = timer % 60;

        //     !timer_screen.classList.contains("text-green-600") ? timer_screen.classList.add("text-green-600") : null;

        //     if (timer < 300) {
        //         !timer_screen.classList.contains("text-danger") ? timer_screen.classList.add("text-danger") : null;
        //         timer_screen.classList.contains("text-green-600") ? timer_screen.classList.remove("text-green-600") : null;
        //     } else {
        //         timer_screen.classList.contains("text-danger") ? timer_screen.classList.remove("text-danger") : null;
        //         !timer_screen.classList.contains("text-green-600") ? timer_screen.classList.add("text-green-600") : null;
        //     }

        //     /**update counter screen style */
        //     timer_screen ? timer_screen.innerHTML =
        //         `<span>${hours}hr</span>:<span>${String(minutes).padStart(2, '0')}min</span>:<span>${String(seconds).padStart(2, '0')}sec</span>` :
        //         null;
        // }

        // function startCountdown() {
        //     // if (!isStart) return;

        //     updateTimerDisplay();

        //     const countdownInterval = setInterval(function() {
        //         if (timer > 0) {
        //             timer--;
        //             updateTimerDisplay();
        //         } else {
        //             clearInterval(countdownInterval);
        //             isCancelled ? alert("Countdown Timer Cancelled!") : alert("Countdown Timer Expired!");
        //         }
        //     }, 1000); // Update every second
        // }

        // function stopCountdown() {
        //     let time_used = countdownTime - timer
        //     time_used = time_used / 60
        //     alert(`time used: ${time_used.toFixed(3).toString()} minutes`);
        //     isCancelled = true;
        //     updateTimerDisplay();
        // }

        // document.querySelector("#stop-counter-button")?.addEventListener('click', stopCountdown);
        // // document.querySelector("#start-counter-button")?.addEventListener('click', startCountdown);

        // // Start the countdown when the page loads
        // document.addEventListener('DOMContentLoaded', startCountdown);
    </script>

</div>

<?php include(__DIR__ . "./includes/footer.php"); ?>