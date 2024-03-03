<?php include(__DIR__ . "./includes/header.php"); ?>


<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="mdc-card overflow-hidden border-none fade-in max-w-lg mx-auto my-8" data-delay="300">
        <h1 class="ff-headline font-semibold uppercase text-2xl text-center bg-dark text-white p-4 rounded-t-lg">
            Sign In
        </h1>

        <div class="p-6">
            <!-- error alert -->
            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                <span class="font-medium">Danger alert!</span> Change a few things up and try submitting again.
            </div>

            <form action="">
                <ul class="grid grid-cols-1 gap-y-4">
                    <li class="col-span-1">
                        <label for="email_address" class="block font-semibold mb-2 cursor-pointer lowercase first-letter:uppercase">Email Address</label>
                        <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--no-label block">
                            <input type="text" id="email_address" name="email_address" class="border border-red-500 error mdc-text-field__input" aria-label="Label" required>
                            <span class="mdc-notched-outline">
                                <span class="mdc-notched-outline__leading"></span>
                                <span class="mdc-notched-outline__trailing"></span>
                            </span>
                        </div>
                    </li>
                    <li class="col-span-1">
                        <label for="password" class="block font-semibold mb-2 cursor-pointer lowercase first-letter:uppercase">Password</label>
                        <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--no-label block">
                            <input type="password" id="password" name="password" class="mdc-text-field__input error" aria-label="Label" required>
                            <span class="mdc-notched-outline">
                                <span class="mdc-notched-outline__leading"></span>
                                <span class="mdc-notched-outline__trailing"></span>
                            </span>
                        </div>
                        <a href="./forgot-password.php" class="text-end block text-sm text-primary font-semibold">Forgot
                            password</a>
                    </li>
                    <li class="col-span-1">
                        <!-- <input type="submit" value="Log In" class="bg-primary text-white rounded w-full p-4 mb-4"> -->
                        <!--  -->
                        <button class="mdc-button w-full bg-primary py-6">
                            <span class="mdc-button__ripple"></span>
                            <span class="mdc-button__label text-white">Log In</span>
                        </button>
                    </li>
                </ul>

                <p class="text-center text-light-500 mt-8">If you don’t have an account click on <a href="register.php" class="text-primary font-semibold">Sign Up</a></p>
            </form>
        </div>
    </div>
</div>

<?php include(__DIR__ . "./includes/footer.php"); ?>