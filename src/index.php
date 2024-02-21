<?php include(__DIR__ . "./includes/header.php"); ?>

<section>
    <div class="hero">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="grid grid-cols-12">
                <div class="col-span-12 sm:col-span-7">
                    one
                </div>
                <div class="col-span-12 sm:col-span-5">
                    <!-- forms tabs -->


                    <div class="bg-white rounded-md mdc-card  my-8">
                        <!-- Navigation Tabs -->
                        <div class="form-tab-navs | mb-4 rounded-t-md"">
                            <button class="mdc-button tab-btn sm:text-lg font-semibold text-light-500 active" data-tab="tab1">Van
                            Hire</button>
                            <button class="mdc-button tab-btn sm:text-lg font-semibold text-red-500" data-tab="tab2">Bus
                                Hire</button>
                            <button class="mdc-button tab-btn sm:text-lg font-semibold text-light-500" data-tab="tab3">Car
                                Hire</button>
                        </div>

                        <div class="p-4">
                            <!-- Tab Content -->
                            <div id="tab1" class="tab-content">
                                <!-- <p>Content for Tab 1 goes here.</p> -->
                                <form action="">
                                    <div class="grid grid-cols-12 gap-4">
                                        <!-- <div class="col-span-8">
                                            <label for="pick_up"
                                                class="block font-semibold mb-2 cursor-pointer">Pick-up</label>
                                            <input type="text" id="pick_up" placeholder="Input your address"
                                                class="block w-full px-2 py-3 rounded-md ring-1 ring-gray-300 focus-within:ring-2 sm:max-w-md">
                                        </div> -->
                                        <div class="col-span-12 sm:col-span-8">
                                            <label for="pick_up"
                                                class="block font-semibold mb-2 cursor-pointer">Pick-up</label>
                                            <div
                                                class="mdc-text-field mdc-text-field--outlined mdc-text-field--no-label block">
                                                <span class="mdc-notched-outline">
                                                    <span class="mdc-notched-outline__leading"></span>
                                                    <span class="mdc-notched-outline__trailing"></span>
                                                </span>
                                                <input id="pick_up" class="mdc-text-field__input" type="text"
                                                    aria-label="Label" placeholder="Input your address">
                                            </div>
                                        </div>
                                        <!-- <div class="col-span-4">
                                            <label for="pick_up_state"
                                                class="block font-semibold mb-2 cursor-pointer">State</label>
                                            <select name="pick_up_state" id="pick_up_state"
                                                class="block w-full px-2 py-3 rounded-md ring-1 ring-gray-300 focus-within:ring-2 sm:max-w-md">
                                                <option value="lagos">Lagos</option>
                                                <option value="ogun">Ogun</option>
                                            </select>
                                        </div> -->
                                        <div class="col-span-12 sm:col-span-4">
                                            <label for="pick_up_state"
                                                class="block font-semibold mb-2 cursor-pointer">State</label>
                                            <div
                                                class="drop-select-icon | mdc-text-field mdc-text-field--outlined mdc-text-field--no-label block">
                                                <span class="mdc-notched-outline">
                                                    <span class="mdc-notched-outline__leading"></span>
                                                    <span class="mdc-notched-outline__trailing"></span>
                                                </span>

                                                <select name="pick_up_state" id="pick_up_state"
                                                    class="mdc-text-field__input block w-full min-h-full">
                                                    <option value="lagos">Lagos</option>
                                                    <option value="ogun">Ogun</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- <div class="col-span-8">
                                            <label for="drop_off"
                                                class="block font-semibold mb-2 cursor-pointer">Drop-off</label>
                                            <input type="text" id="drop_off" placeholder="Input your address"
                                                class="block w-full px-2 py-3 rounded-md shadow-sm ring-1 ring-gray-300 focus-within:ring-2 sm:max-w-md">
                                        </div> -->

                                        <div class="col-span-12 sm:col-span-8">
                                            <label for="drop_off"
                                                class="block font-semibold mb-2 cursor-pointer">Drop-off</label>
                                            <div
                                                class="mdc-text-field mdc-text-field--outlined mdc-text-field--no-label block">
                                                <span class="mdc-notched-outline">
                                                    <span class="mdc-notched-outline__leading"></span>
                                                    <span class="mdc-notched-outline__trailing"></span>
                                                </span>
                                                <input id="drop_off" class="mdc-text-field__input" type="text"
                                                    aria-label="Label" placeholder="Input your address">
                                            </div>
                                        </div>
                                        <!-- <div class="col-span-4">
                                            <label for="drop_off_state"
                                                class="block font-semibold mb-2 cursor-pointer">State</label>
                                            <select name="drop_off_state" id="drop_off_state"
                                                class="block w-full px-2 py-3 rounded-md shadow-sm ring-1 ring-gray-300 focus-within:ring-2 sm:max-w-md">
                                                <option value="lagos">Lagos</option>
                                                <option value="ogun">Ogun</option>
                                            </select>
                                        </div> -->


                                        <div class="col-span-12 sm:col-span-4">
                                            <label for="drop_off_state"
                                                class="block font-semibold mb-2 cursor-pointer">State</label>
                                            <div
                                                class="drop-select-icon | mdc-text-field mdc-text-field--outlined mdc-text-field--no-label block">
                                                <span class="mdc-notched-outline">
                                                    <span class="mdc-notched-outline__leading"></span>
                                                    <span class="mdc-notched-outline__trailing"></span>
                                                </span>

                                                <select name="drop_off_state" id="drop_off_state"
                                                    class="mdc-text-field__input block w-full min-h-full">
                                                    <option value="lagos">Lagos</option>
                                                    <option value="ogun">Ogun</option>
                                                </select>
                                            </div>
                                        </div>


                                        <!-- <div class="col-span-4">
                                            <label for="pick_up_date"
                                                class="block font-semibold mb-2 cursor-pointer">Pick-up Date</label>
                                            <input type="date" name="pick_up_date" id="pick_up_date"
                                                class="block w-full px-2 py-3 rounded-md shadow-sm ring-1 ring-gray-300 focus-within:ring-2 sm:max-w-md">
                                        </div> -->
                                        <div class="col-span-6 sm:col-span-4">
                                            <label for="pick_up_date"
                                                class="block font-semibold mb-2 cursor-pointer">Pick-up Date</label>
                                            <div
                                                class="mdc-text-field mdc-text-field--outlined mdc-text-field--no-label block">
                                                <span class="mdc-notched-outline">
                                                    <span class="mdc-notched-outline__leading"></span>
                                                    <span class="mdc-notched-outline__trailing"></span>
                                                </span>

                                                <input type="text" name="" id="pick_up_date"
                                                    class="datepicker block w-full px-2 py-3">
                                            </div>
                                        </div>
                                        <div class="col-span-6 sm:col-span-4">
                                            <label for="pick_up_time"
                                                class="block font-semibold mb-2 cursor-pointer">Pick-up Time</label>

                                            <div
                                                class="drop-select-icon | mdc-text-field mdc-text-field--outlined mdc-text-field--no-label block">
                                                <span class="mdc-notched-outline">
                                                    <span class="mdc-notched-outline__leading"></span>
                                                    <span class="mdc-notched-outline__trailing"></span>
                                                </span>

                                                <select name="pick_up_time" id="pick_up_time"
                                                    class="mdc-text-field__input block w-full min-h-full">
                                                    <option value="7:00am">7:00am</option>
                                                    <option value="8:00am">8:00am</option>
                                                    <option value="9:00am">9:00am</option>
                                                    <option value="10:00am">10:00am</option>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="col-span-12 sm:col-span-4">
                                            <label for="number_of_hours"
                                                class="block font-semibold mb-2 cursor-pointer">No of Hours</label>

                                            <div
                                                class="drop-select-icon | mdc-text-field mdc-text-field--outlined mdc-text-field--no-label block">
                                                <span class="mdc-notched-outline">
                                                    <span class="mdc-notched-outline__leading"></span>
                                                    <span class="mdc-notched-outline__trailing"></span>
                                                </span>

                                                <select name="number_of_hours" id="number_of_hours"
                                                    class="mdc-text-field__input block w-full min-h-full">
                                                    <option value="4 hours">4 hours</option>
                                                    <option value="5 hours">5 hours</option>
                                                </select>
                                            </div>

                                        </div>


                                        <div class="col-span-12">
                                            <button class="mdc-button w-full bg-primary py-6 mdc-card">
                                                <span class="mdc-button__ripple"></span>
                                                <span class="mdc-button__label text-white">Hire Now</span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div id="tab2" class="hidden tab-content">
                                <p>Content for Tab 2 goes here.</p>
                            </div>

                            <div id="tab3" class="hidden tab-content">
                                <p>Content for Tab 3 goes here.</p>
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

<!--  -->
<div class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
    <label for="datepicker" class="block text-sm font-medium text-gray-700">Select a Date:</label>
    <input type="text" id="datepicker" class="datepicker mt-1 p-2 border rounded-md w-full" placeholder="Select a date">
</div>

<!--  -->


<label class="mdc-text-field mdc-text-field--filled mdc-text-field--no-label">
    <span class="mdc-text-field__ripple"></span>
    <input class="mdc-text-field__input" type="text" placeholder="Placeholder text" aria-label="Label">
    <span class="mdc-line-ripple"></span>
</label>
<!--  -->
<label class="mdc-text-field mdc-text-field--outlined mdc-text-field--no-label block">
    <span class="mdc-notched-outline">
        <span class="mdc-notched-outline__leading"></span>
        <span class="mdc-notched-outline__trailing"></span>
    </span>
    <input class="mdc-text-field__input" type="text" aria-label="Label" placeholder="hello">
</label>
<?php include(__DIR__ . "./includes/footer.php"); ?>