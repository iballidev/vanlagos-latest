<?php include(__DIR__ . "./includes/header.php"); ?>

<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <!-- user account navigation -->
    <?php include(__DIR__ . "./includes/user-account-navigation.php") ?>
    <!--  -->
    <div class="my-4"></div>

    <div class="mdc-card">
        <h1 class="ff-headline font-semibold capitalize text-xl bg-dark text-white py-2 px-4 rounded-t-md sm:rounded-t-lg">
            Notifications
        </h1>
        <!--  -->
        <ul class="p-4">
            <!-- new messages -->
            <li>
                <div class="p-4 mb-2 text-sm text-blue-800 rounded-lg bg-blue-50" role="alert">
                    <a href="#"><span class="font-medium">Info alert!</span> Change a few things up and try submitting again.</a>
                </div>
            </li>
            <li>
                <div class="p-4 mb-2 text-sm text-blue-800 rounded-lg bg-blue-50" role="alert">
                    <a href="#"><span class="font-medium">Info alert!</span> Change a few things up and try submitting again.</a>
                </div>
            </li>
            <!-- viewed messages -->
            <li>
                <div class="p-4 mb-2 text-sm text-gray-800 rounded-lg bg-gray-50" role="alert">
                    <a href="#"><span class="font-medium">Info alert!</span> Change a few things up and try submitting again.</a>
                </div>
            </li>
            <li>
                <div class="p-4 mb-2 text-sm text-gray-800 rounded-lg bg-gray-50" role="alert">
                    <a href="#"><span class="font-medium">Info alert!</span> Change a few things up and try submitting again.</a>
                </div>
            </li>
            <li>
                <div class="p-4 mb-2 text-sm text-gray-800 rounded-lg bg-gray-50" role="alert">
                    <a href="#"><span class="font-medium">Info alert!</span> Change a few things up and try submitting again.</a>
                </div>
            </li>
        </ul>

        <!-- pagination -->
        <div class="p-4">
            <nav aria-label="Page navigation example" class="text-end">
                <ul class="inline-flex -space-x-px text-sm">
                    <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700">Previous</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">1</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">2</a>
                    </li>
                    <li>
                        <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700">3</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">4</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">5</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>


    <div class="my-4"></div>



</div>

<?php include(__DIR__ . "./includes/footer.php"); ?>