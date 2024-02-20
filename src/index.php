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


                    <div class="bg-white rounded-md shadow-md my-8">
                        <!-- Navigation Tabs -->
                        <div class="form-tab-navs | mb-4 text-white rounded-t-md"">
                            <button class=" tab-btn sm:text-lg font-semibold text-light-500 active" data-tab="tab1">Van Hire</button>
                            <button class="tab-btn sm:text-lg font-semibold text-light-500" data-tab="tab2">Bus Hire</button>
                            <button class="tab-btn sm:text-lg font-semibold text-light-500" data-tab="tab3">Car Hire</button>
                        </div>

                        <div class="p-4">
                            <!-- Tab Content -->
                            <div id="tab1" class="tab-content">
                                <p>Content for Tab 1 goes here.</p>
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


<?php include(__DIR__ . "./includes/footer.php"); ?>