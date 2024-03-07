<?php include __DIR__ . "./includes/header.php"; ?>

<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <!-- driver account navigation -->
    <?php include(__DIR__ . "./includes/driver-account-navigation.php") ?>
    <!--  -->
    <div class="my-4"></div>

    <div class="mdc-card">
        <h1 class="ff-headline font-semibold capitalize text-xl bg-gray-400 text-white py-2 px-4 rounded-t-md sm:rounded-t-lg flex items-center justify-between">
            <span>Notifications</span>

            <span>
                <button class="text-sm font-normal uppercase">Clear all</button>
            </span>
        </h1>

        <ul class="new-notification-list | flex flex-col gap-6 p-4 bg-gray-50 text-sm">
            <li class="mdc-card p-4">
                <div class="date | font-bold">01 March 2025</div>
                <ul class="bg-white rounded p-4 rounded-md flex flex-col">
                    <li>
                        <a target="_blank" href="https://amazon.com" class="p-4 mb-2 text-sm text-blue-800 rounded-lg bg-blue-50 visited:text-gray-800 visited:bg-gray-50" role="alert">
                            <span class="font-medium">Info alert!</span> Change a few things up and try submitting again.
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://web.facebook.com/iballi2017" class="p-4 mb-2 text-sm text-blue-800 rounded-lg bg-blue-50 visited:text-gray-800 visited:bg-gray-50" role="alert">
                            <span class="font-medium">Info alert!</span> Change a few things up and try submitting again.
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://yahoo.com" class="p-4 mb-2 text-sm text-blue-800 rounded-lg bg-blue-50 visited:text-gray-800 visited:bg-gray-50" role="alert">
                            <span class="font-medium">Info alert!</span> Change a few things up and try submitting again.
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://google.com" class="p-4 mb-2 text-sm text-blue-800 rounded-lg bg-blue-50 visited:text-gray-800 visited:bg-gray-50" role="alert">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur commodi fuga cumque neque magni.
                        </a>
                    </li>
                </ul>
            </li>
            <li class="mdc-card p-4">
                <div class="date | font-bold">02 March 2025</div>
                <ul class="bg-white rounded p-4 rounded-md flex flex-col">
                    <li>
                        <a target="_blank" href="https://tiktok.com" class="p-4 mb-2 text-sm text-blue-800 rounded-lg bg-blue-50 visited:text-gray-800 visited:bg-gray-50" role="alert">
                            <span class="font-medium">Info alert!</span> Change a few things up and try submitting again.
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://canva.com" class="p-4 mb-2 text-sm text-blue-800 rounded-lg bg-blue-50 visited:text-gray-800 visited:bg-gray-50" role="alert">
                            <span class="font-medium">Info alert!</span> Change a few things up and try submitting again.
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://instagram.com" class="p-4 mb-2 text-sm text-blue-800 rounded-lg bg-blue-50 visited:text-gray-800 visited:bg-gray-50" role="alert">
                            <span class="font-medium">Info alert!</span> Change a few things up and try submitting again.
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://twitter.com" class="p-4 mb-2 text-sm text-blue-800 rounded-lg bg-blue-50 visited:text-gray-800 visited:bg-gray-50" role="alert">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur commodi fuga cumque neque magni.
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>


    <div class="my-4"></div>



</div>

<?php include __DIR__ . "./includes/footer.php"; ?>