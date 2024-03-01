<?php include(__DIR__ . "./includes/header.php"); ?>

<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <!-- user account navigation -->
    <?php include(__DIR__ . "./includes/user-account-navigation.php")?>
    <!--  -->
    <div class="my-4"></div>

    <div class="mdc-card">
        <h1
            class="ff-headline font-semibold capitalize text-xl bg-dark text-white py-2 px-4 rounded-t-md sm:rounded-t-lg">
            Change Password
        </h1>
        <!--  -->
        <div class="mdc-card p-4">


            <div class="mdc-card p-4">
                <form action="" method="post">
                    <div class="grid grid-cols-1 gap-4">
                        <div class="col-span-1">
                            <label for="password" class="block font-semibold mb-2 cursor-pointer lowercase first-letter:uppercase">Password</label>
                            <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--no-label block">
                                <input type="password" id="password" name="password" class="mdc-text-field__input"
                                    aria-label="Label" required>
                                <span class="mdc-notched-outline">
                                    <span class="mdc-notched-outline__leading"></span>
                                    <span class="mdc-notched-outline__trailing"></span>
                                </span>
                            </div>
                        </div>
                        <div class="col-span-1">
                            <label for="new_password" class="block font-semibold mb-2 cursor-pointer lowercase first-letter:uppercase">New
                                Password</label>
                            <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--no-label block">
                                <input type="password" id="new_password" name="new_password"
                                    class="mdc-text-field__input" aria-label="Label" required>
                                <span class="mdc-notched-outline">
                                    <span class="mdc-notched-outline__leading"></span>
                                    <span class="mdc-notched-outline__trailing"></span>
                                </span>
                            </div>
                        </div>
                        <div class="col-span-1">
                            <label for="confirm_new_password" class="block font-semibold mb-2 cursor-pointer lowercase first-letter:uppercase">Confirm
                                New Password</label>
                            <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--no-label block">
                                <input type="password" id="confirm_new_password" name="confirm_new_password"
                                    class="mdc-text-field__input" aria-label="Label" required>
                                <span class="mdc-notched-outline">
                                    <span class="mdc-notched-outline__leading"></span>
                                    <span class="mdc-notched-outline__trailing"></span>
                                </span>
                            </div>
                        </div>
                        <div class="col-span-1">
                            <!-- <input type="submit" value="Log In" class="bg-primary text-white rounded w-full p-4 mb-4"> -->
                            <!--  -->
                            <button class="mdc-button bg-primary py-4 px-6 mdc-card">
                                <span class="mdc-button__ripple"></span>
                                <span class="mdc-button__label text-white lowercase first-letter:uppercase">Change password</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>


    <div class="my-4"></div>



</div>

<?php include(__DIR__ . "./includes/footer.php"); ?>