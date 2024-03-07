<?php include __DIR__ . "./includes/header.php"; ?>

<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">


    <!-- user account navigation -->
    <?php include __DIR__ . "./includes/user-account-navigation.php"?>
    <!--  -->
    <div class="my-4"></div>

    <div class="mdc-card">
        <h1
            class="ff-headline font-semibold capitalize text-xl bg-dark text-white py-2 px-4 rounded-t-md sm:rounded-t-lg">
            My Reviews
        </h1>
        <div class="p-2 sm:p-4">
            <div class="relative overflow-x-auto mdc-card">
                <table class="align-end-cells-right | w-full text-sm text-left rtl:text-right text-gray-500">

                    <tbody>

                        <tr class="border-b">

                            <td colspan="5">
                                <!-- user van hire review -->
                                <?php include __DIR__ . "./includes/user-van-hire-review.php"; ?>
                            </td>
                        </tr>
                        <tr class="border-b">

                            <td colspan="5">
                                <!-- user bus hire review -->
                                <?php include __DIR__ . "./includes/user-bus-hire-review.php"; ?>
                            </td>
                        </tr>
                        <tr class="border-b">

                            <td colspan="5">
                                <!-- user car hire review -->
                                <?php include __DIR__ . "./includes/user-car-hire-review.php"; ?>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <div class="my-4"></div>

</div>

<?php include __DIR__ . "./includes/footer.php"; ?>