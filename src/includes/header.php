<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vanlagos</title>
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css"
        integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- material design -->
    <!-- <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/material-components-web/14.0.0/material-components-web.css"
        integrity="sha512-j9A2LKfsPKqkj4NbtVncb6451JV3kQWoCP1Coayq04haUgIUTs3t2N0vn0kbtS7CsKVP2O9RvfQI4YYjURVxIA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
    <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- Animate.Style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!--  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.8.0/css/pikaday.min.css">
    <!-- tailwindcss -->
    <link rel="stylesheet" href="./stylesheets/tailwindcss/output.css">
    <!-- custom css -->
    <link rel="stylesheet" href="./stylesheets/main.css">
</head>

<body>

    <!-- top header -->
    <?php include(__DIR__ . "./top-header.php") ?>

    <!-- <nav class="bg-light"> -->
    <!-- <nav class="bg-gray-800 sm:bg-light"> -->
    <nav class="bg-gray-800 sm:bg-[var(--clr-light)]">

        <div x-data="{ isOpen: false }">
            <!-- mobile nav state begins -->
            <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
                <div class="relative flex h-20 items-center justify-between">
                    <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                        <!-- Mobile menu button-->
                        <button @click="isOpen = !isOpen" type="button"
                            class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                            aria-controls="mobile-menu" aria-expanded="false">
                            <span class="absolute -inset-0.5"></span>
                            <span class="sr-only">Open main menu</span>
                            <!--
            Icon when menu is closed.

            Menu open: "hidden", Menu closed: "block"
          -->
                            <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                            <!--
            Icon when menu is open.

            Menu open: "block", Menu closed: "hidden"
          -->
                            <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="flex flex-1 items-center justify-between sm:items-stretch">
                        <div class="flex flex-shrink-0 items-center">
                            <!-- <img class="h-8 w-auto ml-10 sm:ml-0"
                                src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500"
                                alt="Your Company"> -->
                            <a href="./"><img class="h-8 w-auto ml-10 sm:ml-0" src="./images/brand-logo-2.svg"
                                    alt="Your Company">
                            </a>
                        </div>
                        <div class="hidden sm:ml-6 sm:block">
                            <div class="flex space-x-4">
                                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                <a href="./"
                                    class="bg-gray-100 text-dark hover:text-gray-700 rounded-md px-3 py-2 text-sm font-medium"
                                    aria-current="page">Home</a>
                                <a href="./about-us.php"
                                    class="text-dark hover:bg-gray-100 hover:text-gray-700 rounded-md px-3 py-2 text-sm font-medium">About
                                    Us</a>
                                <a href="./pricing.php"
                                    class="text-dark hover:bg-gray-100 hover:text-gray-700 rounded-md px-3 py-2 text-sm font-medium">Pricing</a>
                                <a href="./contact-us.php"
                                    class="text-dark hover:bg-gray-100 hover:text-gray-700 rounded-md px-3 py-2 text-sm font-medium">Contact
                                    Us</a>
                            </div>
                        </div>
                    </div>
                    <div
                        class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                        <div x-data="{ isOpen: false }">
                            <!-- Profile dropdown -->
                            <div class="relative">
                                <div class="relative z-40 sm:z-40">
                                    <button @click="isOpen = !isOpen" type="button"
                                        class="mdc-button overflow-hidden foo-button pill after-pseudo-icon caret-down bg-primary hover:bg-blue-400 relative flex px-4 py-2 text-sm font-medium text-light"
                                        id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                        <div class="mdc-button__ripple"></div>
                                        <span class="absolute -inset-1.5"></span>
                                        <span class="sr-only">Open user menu</span>
                                        <span
                                            class="text-white max-w-24 text-ellipsis overflow-hidden whitespace-nowrap capitalize">Alli
                                            Ibrahim Abayomi</span>
                                    </button>
                                </div>


                                <!--
            Dropdown menu, show/hide based on menu state.

            Entering: "transition ease-out duration-100"
              From: "transform opacity-0 scale-95"
              To: "transform opacity-100 scale-100"

            Leaving: "transition ease-in duration-75"
              From: "transform opacity-100 scale-100"
              To: "transform opacity-0 scale-95"
          -->
                                <!--  -->
                                <div x-show="isOpen" x-transition:enter="transition ease-out duration-3000"
                                    x-transition:enter-start="transform opacity-0 scale-95"
                                    x-transition:enter-end="transform opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-75"
                                    x-transition:leave-start="transform opacity-100 scale-100"
                                    x-transition:leave-end="transform opacity-0 scale-95"
                                    class="absolute right-0  z-30 sm:z-20 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                    role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                    tabindex="-1">
                                    <!-- Active: "bg-gray-100", Not Active: "" -->
                                    <a href="./user-profile.php" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                        tabindex="-1" id="user-menu-item-0">Your Profile</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                        tabindex="-1" id="user-menu-item-1">Settings</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                        tabindex="-1" id="user-menu-item-2">Sign out</a>
                                </div>
                                <!--  -->
                            </div>
                        </div>
                        <a href="./login.php"
                            class="ml-2 pill bg-primary hover:bg-blue-400 text-white rounded-md px-3 py-2 text-sm font-medium">Sign
                            In / Sign Up</a>
                    </div>
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div x-show="isOpen" class="sm:hidden absolute bg-gray-800 w-full z-10" id="mobile-menu">
                <div class="space-y-1 px-2 pb-3 pt-2">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="./" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium"
                        aria-current="page">Home</a>
                    <a href="./about-us.php"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">About
                        Us</a>
                    <a href="./pricing.php"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Pricing</a>
                    <a href="./contact-us.php"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Contact
                        Us</a>
                    <a href="./login.php"
                        class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Sign
                        In / Sign Up</a>
                </div>
            </div>

            <!-- mobile nav state ends -->
        </div>
    </nav>


    <!-- Your content goes here -->