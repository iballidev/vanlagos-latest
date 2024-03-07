<?php include __DIR__ . "./includes/header.php"; ?>

<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="mdc-card fade-in max-w-lg mx-auto my-8" data-delay="300">
        <h1 class="ff-headline font-semibold uppercase text-2xl text-center bg-dark text-white p-4 rounded-t-lg">
            Sign Up
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
                            <input type="text" id="email_address" name="email_address"
                                class="mdc-text-field__input error" aria-label="Label">
                            <span class="mdc-notched-outline">
                                <span class="mdc-notched-outline__leading"></span>
                                <span class="mdc-notched-outline__trailing"></span>
                            </span>
                        </div>
                    </li>
                    <li class="col-span-1">
                        <label for="password" class="block font-semibold mb-2 cursor-pointer lowercase first-letter:uppercase">Password</label>
                        <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--no-label block">
                            <input type="password" id="password" name="password" class="mdc-text-field__input error"
                                aria-label="Label">
                            <span class="mdc-notched-outline">
                                <span class="mdc-notched-outline__leading"></span>
                                <span class="mdc-notched-outline__trailing"></span>
                            </span>
                        </div>
                    </li>
                    <li class="col-span-1">
                        <label for="confirm_password" class="block font-semibold mb-2 cursor-pointer lowercase first-letter:uppercase">Confirm
                            Password</label>
                        <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--no-label block">
                            <input type="text" id="confirm_password" name="confirm_password"
                                class="mdc-text-field__input error" aria-label="Label">
                            <span class="mdc-notched-outline">
                                <span class="mdc-notched-outline__leading"></span>
                                <span class="mdc-notched-outline__trailing"></span>
                            </span>
                        </div>
                    </li>
                    <li class="col-span-1">
                        <!--  -->
                        <p class="my-8 text-center">By signing up, I agree to the terms and conditions</p>
                        <!-- <input type="submit" value="Sign Up" class="bg-primary text-white block max-w-sm mx-auto rounded w-full h-12 mb-4"> -->
                        <button class="mdc-button w-full max-w-sm mx-auto bg-primary py-6 mdc-card">
                            <span class="mdc-button__ripple"></span>
                            <span class="mdc-button__label text-white">Sign Up</span>
                        </button>
                    </li>
                </ul>

                <p class="text-center text-light-500 mt-8">If you don’t have an account click on <a href="./login.php"
                        class="text-primary font-semibold">Sign In</a></p>
            </form>
        </div>
    </div>
</div>

<?php include __DIR__ . "./includes/footer.php"; ?>