<?php include __DIR__ . "./includes/header.php"; ?>

<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">


    <!-- driver account navigation -->
    <?php include(__DIR__ . "./includes/driver-account-navigation.php")?>
    <!--  -->
    <div class="my-4"></div>

    <div class="mdc-card">
        <h1
            class="ff-headline font-semibold capitalize text-xl bg-gray-400 text-white py-2 px-4 rounded-t-md sm:rounded-t-lg">
            Personal Information
        </h1>
        <div class="p-4 " x-data="{ isEditProfile: false }">
            <dl x-show="!isEditProfile"
                class="text-gray-900 divide-y divide-gray-200 dark:divide-gray-700">
                <div class="flex flex-col pb-3">
                    <dt class="mb-1 text-gray-500 md:text-sm">Email address</dt>
                    <dd class="text-md font-semibold">yourname@flowbite.com</dd>
                </div>
                <div class="flex flex-col py-3">
                    <dt class="mb-1 text-gray-500 md:text-sm">Home/Business address</dt>
                    <dd class="text-md font-semibold">92 Miles Drive, Newark, NJ 07103, California, USA</dd>
                </div>
                <div class="flex flex-col pt-3">
                    <dt class="mb-1 text-gray-500 md:text-sm">Phone number</dt>
                    <dd class="text-md font-semibold">+00 123 456 789 / +12 345 678</dd>
                </div>
            </dl>
            <form x-show="isEditProfile" action="" method="post">
                <div class="grid grid-cols-12 gap-4">
                    <div class="col-span-12 sm:col-span-6">
                        <label for="first_name" class="block font-semibold cursor-pointer mb-2">First
                            Name</label>
                        <div class="mdc-text-field mdc-text-field--outlined w-full">
                            <input type="text" name="first_name" id="first_name" class="mdc-text-field__input"
                                aria-label="Label" required>
                            <span class="mdc-notched-outline">
                                <span class="mdc-notched-outline__leading"></span>
                                <span class="mdc-notched-outline__trailing"></span>
                            </span>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <label for="last_name" class="block font-semibold cursor-pointer mb-2">Last
                            Name</label>
                        <div class="mdc-text-field mdc-text-field--outlined w-full">
                            <input type="text" name="last_name" id="last_name" class="mdc-text-field__input"
                                aria-label="Label" required>
                            <span class="mdc-notched-outline">
                                <span class="mdc-notched-outline__leading"></span>
                                <span class="mdc-notched-outline__trailing"></span>
                            </span>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <label for="phone_number" class="block font-semibold cursor-pointer mb-2">Phone</label>
                        <div class="mdc-text-field mdc-text-field--outlined w-full">
                            <input type="text" name="phone_number" id="phone_number" class="mdc-text-field__input"
                                aria-label="Label" required>
                            <span class="mdc-notched-outline">
                                <span class="mdc-notched-outline__leading"></span>
                                <span class="mdc-notched-outline__trailing"></span>
                            </span>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <label for="email_address" class="block font-semibold cursor-pointer mb-2">Email
                            Address</label>
                        <div class="mdc-text-field mdc-text-field--outlined w-full">
                            <input type="text" name="email_address" id="email_address" class="mdc-text-field__input"
                                aria-label="Label" required>
                            <span class="mdc-notched-outline">
                                <span class="mdc-notched-outline__leading"></span>
                                <span class="mdc-notched-outline__trailing"></span>
                            </span>
                        </div>
                    </div>
                    <div class="col-span-12">
                        <label for="company_name" class="block font-semibold cursor-pointer mb-2">Company Name</label>
                        <div class="mdc-text-field mdc-text-field--outlined w-full">
                            <input type="text" name="company_name" id="company_name" class="mdc-text-field__input"
                                aria-label="Label" required>
                            <span class="mdc-notched-outline">
                                <span class="mdc-notched-outline__leading"></span>
                                <span class="mdc-notched-outline__trailing"></span>
                            </span>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <label for="country" class="block font-semibold cursor-pointer mb-2">Country</label>
                        <div class="mdc-text-field mdc-text-field--outlined w-full select">
                            <select id="country" name="country" class=" mdc-text-field__input" aria-label="Label"
                                required>
                                <option selected>Choose a country</option>
                                <option value="US">United States</option>
                                <option value="CA">Canada</option>
                                <option value="FR">France</option>
                                <option value="DE">Germany</option>
                            </select>
                            <span class="mdc-notched-outline">
                                <span class="mdc-notched-outline__leading"></span>
                                <span class="mdc-notched-outline__trailing"></span>
                            </span>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <label for="state" class="block font-semibold cursor-pointer mb-2">State</label>
                        <div class="mdc-text-field mdc-text-field--outlined w-full select">
                            <select id="state" name="state" class=" mdc-text-field__input" aria-label="Label" required>
                                <option selected>Choose a state</option>
                                <option value="US">United States</option>
                                <option value="CA">Canada</option>
                                <option value="FR">France</option>
                                <option value="DE">Germany</option>
                            </select>
                            <span class="mdc-notched-outline">
                                <span class="mdc-notched-outline__leading"></span>
                                <span class="mdc-notched-outline__trailing"></span>
                            </span>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <label for="address" class="block font-semibold cursor-pointer mb-2">Address</label>
                        <div class="mdc-text-field mdc-text-field--outlined w-full">
                            <input type="text" name="address" id="address" class="mdc-text-field__input"
                                aria-label="Label" required>
                            <span class="mdc-notched-outline">
                                <span class="mdc-notched-outline__leading"></span>
                                <span class="mdc-notched-outline__trailing"></span>
                            </span>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <label for="town_or_city" class="block font-semibold cursor-pointer mb-2">Town/City</label>
                        <div class="mdc-text-field mdc-text-field--outlined w-full">
                            <input type="text" name="town_or_city" id="town_or_city" class="mdc-text-field__input"
                                aria-label="Label" required>
                            <span class="mdc-notched-outline">
                                <span class="mdc-notched-outline__leading"></span>
                                <span class="mdc-notched-outline__trailing"></span>
                            </span>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <div class="flex gap-2 items-center">
                            <button type="submit" class="mdc-button bg-primary py-4 px-8">
                                <span class="mdc-button__ripple"></span>
                                <span class="mdc-button__label text-white capitalize">Save profile</span>
                            </button>
                            <button x-show="isEditProfile" @click="isEditProfile = !isEditProfile" type="button"
                                class="mdc-button primary-btn-inverse py-4 px-8">
                                <span class="mdc-button__ripple"></span>
                                <span class="mdc-button__label capitalize">Cancel</span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
            <div>
                <button x-show="!isEditProfile" @click="isEditProfile = !isEditProfile" type="button"
                    class="mdc-button primary-btn-inverse py-4 px-8 mt-4">
                    <span class="mdc-button__ripple"></span>
                    <span class="mdc-button__label capitalize">Edit
                        profile</span>
                </button>
            </div>
        </div>
    </div>

    <div class="my-4"></div>

</div>

<?php include __DIR__ . "./includes/footer.php"; ?>