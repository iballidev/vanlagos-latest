<?php include __DIR__ . "./includes/header.php"; ?>

<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="mdc-card fade-in max-w-lg mx-auto my-8" data-delay="300">
        <h1 class="ff-headline font-semibold uppercase text-2xl text-center bg-dark text-white p-4 rounded-t-lg">
            FORGOT PASSWORD
        </h1>
        <p class="bg-red-500 py-2 text-center text-white">Something went wrong!</p>

        <div class="p-6">
            <p class="text-center mb-4">Please enter the email address you registered with. We will send you a link</p>
            <form action="">
                <ul class="grid grid-cols-1 gap-y-4">
                    <li class="col-span-1">
                        <label for="email" class="block font-semibold mb-2 cursor-pointer">Email Address</label>
                        <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--no-label block">
                            <input type="text" id="email" name="email" class="border border-red-500 error mdc-text-field__input" aria-label="Label" required>
                            <span class="mdc-notched-outline">
                                <span class="mdc-notched-outline__leading"></span>
                                <span class="mdc-notched-outline__trailing"></span>
                            </span>
                        </div>
                    </li>
                    <li class="col-span-1">
                        <!-- <input type="submit" value="Log In" class="bg-primary text-white rounded w-full p-4 mb-4"> -->
                        <!--  -->
                        <div class="max-w-60 mx-auto">
                            <button class="mdc-button w-full bg-primary py-6">
                                <span class="mdc-button__ripple"></span>
                                <span class="mdc-button__label text-white uppercase">Send link</span>
                            </button>
                        </div>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>

<?php include __DIR__ . "./includes/footer.php"; ?>