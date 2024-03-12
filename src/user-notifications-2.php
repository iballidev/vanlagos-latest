<?php include __DIR__ . "./includes/header.php"; ?>

<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <!-- user account navigation -->
    <?php include __DIR__ . "./includes/user-account-navigation.php"; ?>
    <!--  -->
    <div class="my-4"></div>

    <div class="mdc-card">
        <h1 class="ff-headline font-semibold capitalize text-xl bg-dark text-white py-2 px-4 rounded-t-md sm:rounded-t-lg">
            Notifications
        </h1>

        <ul class="notification-list-2 | flex flex-col gap-4 w-full p-4 text-sm flex-nowrap">
            <li>
                <a href="https://yahoo.com" class="block p-2 sm:p-4 mb-2 text-sm text-[#424662] visited:text-[#ff8c00]" role="alert">
                    <span><strong>Reminder:&nbsp;</strong>Trip completed</span>
                    <span>1s</span>
                </a>
            </li>
            <li>
                <a href="https://aol.com" class="block p-2 sm:p-4 mb-2 text-sm text-[#424662] visited:text-[#ff8c00]" role="alert">
                    <span><strong>Reminder:&nbsp;</strong>Your have started the trip: 4 hours left</span>
                <span>3h</span>
                </a>
            </li>
            <li>
                <a href="https://ibrahimalli.com" class="block p-2 sm:p-4 mb-2 text-sm text-[#424662] visited:text-[#ff8c00]" role="alert">
                    <span><strong>Reminder:&nbsp;</strong>Your have started the trip: 4 hours left</span>
                    <span>1d</span>
                </a>
            </li>
        </ul>

    </div>


    <div class="my-4"></div>



</div>

<?php include __DIR__ . "./includes/footer.php"; ?>