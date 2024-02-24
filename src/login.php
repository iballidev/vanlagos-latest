<?php include(__DIR__ . "./includes/header.php"); ?>

<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="grid grid-cols-12 items-center">
        <div class="hidden lg:block col-span-12 lg:col-span-6">
            <div class="overflow-hidden bg-dark h-full relative">
                <h2 class="uppercase text-primary text-4xl text-center font-bold pt-8 pb-4">Vanlagos</h2>
                <img class="mb-16" src="./images/pexels-cottonbro-studio-4606402.png" alt="">
                <div class=" bottom-24 absolute text-center w-full block">
                    <p class="font-bold text-2xl max-w-lg mx-auto">VAN LAGOS WE ARE READY AND AVAILABLE AT YOUR REQUEST.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-span-12 lg:col-span-6">
            <div class="mdc-card fade-in max-w-lg mx-auto my-8" data-delay="300">
                <h1 class="ff-headline font-semibold uppercase text-2xl text-center bg-dark text-white p-4 rounded-t-lg">
                    Sign In
                </h1>
                <p class="bg-red-500 py-2 text-center text-white">Kindly fill out all informations</p>
                <div class="p-6">
                    <form action="">
                        <ul class="grid grid-cols-1 gap-y-4">
                            <li class="col-span-1">
                                <label for="username" class="block font-semibold mb-2 cursor-pointer">Email Address /
                                    Phone number</label>
                                <!-- <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--no-label block">
                                    <span class="mdc-notched-outline">
                                        <span class="mdc-notched-outline__leading"></span>
                                        <span class="mdc-notched-outline__trailing"></span>
                                    </span>
                                    <input type="text" id="username" name="username"
                                        class="border border-red-500 error mdc-text-field__input" aria-label="Label"
                                        placeholder="Input your address" required>
                                </div> -->
                                <input type="text" id="username" name="username"
                                    class="h-14 border rounded w-full error p-2 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-100 sm:text-sm sm:leading-6" aria-label="Label"
                                    placeholder="Enter your email address" required>
                            </li>
                            <li class="col-span-1">
                                <label for="password" class="block font-semibold mb-2 cursor-pointer">Password</label>
                                <!-- <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--no-label block">
                                    <span class="mdc-notched-outline">
                                        <span class="mdc-notched-outline__leading"></span>
                                        <span class="mdc-notched-outline__trailing"></span>
                                    </span>
                                    <input type="password" id="password" name="password" class="mdc-text-field__input"
                                        aria-label="Label" placeholder="Input your address" required>
                                </div> -->
                                <input type="text" id="password" name="password"
                                    class="h-14 border rounded w-full error p-2 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-100 sm:text-sm sm:leading-6" aria-label="Label"
                                    placeholder="Input your address" required>
                                <a href="./forgot-password.php" class="text-end block text-sm text-primary font-semibold">Forgot
                                    password</a>
                            </li>
                            <li class="col-span-1">
                                <!-- <input type="submit" value="Log In" class="bg-primary text-white rounded w-full p-4 mb-4"> -->
                                <!--  -->
                                <button class="mdc-button w-full bg-primary py-6 mdc-card">
                                    <span class="mdc-button__ripple"></span>
                                    <span class="mdc-button__label text-white">Log In</span>
                                </button>
                            </li>
                        </ul>

                        <p class="text-center text-light-500 mt-8">If you don’t have an account click on <a
                                href="register.php" class="text-primary font-semibold">Sign Up</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include(__DIR__ . "./includes/footer.php"); ?>