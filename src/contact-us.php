<?php
include(__DIR__ . "./includes/header.php");
?>

<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="grid grid-cols-12 gap-4 my-8">
        <div class="col-span-12 sm:col-span-5">
            <div class="mdc-card p-6">
                <h2 class="font-semibold text-2xl mb-8 text-center capitalize">Get in touch with us today</h2>

                <form action="">
                    <div class="grid grid-cols-12 gap-4">
                        <div class="col-span-12">
                            <label for="full_name" class="block font-semibold cursor-pointer mb-2">Full Name</label>
                            <div class="mdc-text-field mdc-text-field--outlined w-full">
                                <input type="text" name="full_name" id="full_name" class="mdc-text-field__input error" aria-label="Label" required>
                                <span class="mdc-notched-outline">
                                    <span class="mdc-notched-outline__leading"></span>
                                    <span class="mdc-notched-outline__trailing"></span>
                                </span>
                            </div>
                        </div>
                        <div class="col-span-12">
                            <label for="email_address" class="block font-semibold cursor-pointer mb-2">Email Address</label>
                            <div class="mdc-text-field mdc-text-field--outlined w-full">
                                <input type="text" name="email_address" id="email_address" class="mdc-text-field__input error" aria-label="Label" required>
                                <span class="mdc-notched-outline">
                                    <span class="mdc-notched-outline__leading"></span>
                                    <span class="mdc-notched-outline__trailing"></span>
                                </span>
                            </div>
                        </div>
                        <div class="col-span-12">
                            <label for="phone_number" class="block font-semibold cursor-pointer mb-2">Phone Number</label>
                            <div class="mdc-text-field mdc-text-field--outlined w-full">
                                <input type="text" name="phone_number" id="phone_number" class="mdc-text-field__input error" aria-label="Label" required>
                                <span class="mdc-notched-outline">
                                    <span class="mdc-notched-outline__leading"></span>
                                    <span class="mdc-notched-outline__trailing"></span>
                                </span>
                            </div>
                        </div>
                        <div class="col-span-12">
                            <label for="message" class="block font-semibold cursor-pointer mb-2">Message</label>
                            <div class="mdc-text-field mdc-text-field--textarea mdc-text-field--no-label w-full">
                                <span class="mdc-notched-outline">
                                    <span class="mdc-notched-outline__leading rounded-l-md"></span>
                                    <span class="mdc-notched-outline__trailing rounded-r-md"></span>
                                </span>
                                <span class="mdc-text-field__resizer">
                                    <textarea class="mdc-text-field__input" rows="5" cols="40" aria-label="Label"></textarea>
                                </span>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-start-5 sm:col-end-9">
                                <button class="mdc-button w-full bg-primary py-6 mdc-card">
                                    <span class="mdc-button__ripple"></span>
                                    <span class="mdc-button__label text-white">Submit</span>
                                </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-span-12 sm:col-span-7">B</div>
    </div>
</div>

<?php
include(__DIR__ . "./includes/footer.php");
?>