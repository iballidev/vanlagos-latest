<?php include __DIR__ . "./includes/header.php"; ?>

<div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="mdc-card fade-in max-w-lg mx-auto my-8" data-delay="300">
        <h1 class="ff-headline font-semibold uppercase text-2xl text-center bg-dark text-white p-4 rounded-t-lg">
            Create Password
        </h1>
        <p class="bg-red-500 py-2 text-center text-white">Something went wrong!</p>

        <div class="p-6">
            <form action="">
                <ul class="grid grid-cols-1 gap-y-4">
                    <li class="col-span-1">
                        <label for="new_password" class="block font-semibold mb-2 cursor-pointer">New Password</label>
                        <input type="password" id="new_password" name="new_password" class="h-14 border rounded w-full error p-2 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-100 sm:text-sm sm:leading-6" aria-label="Label" required>
                    </li>
                    <li class="col-span-1">
                        <label for="confirm_password" class="block font-semibold mb-2 cursor-pointer">Confirm Password</label>
                        <input type="password" id="confirm_password" name="confirm_password" class="h-14 border rounded w-full error p-2 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-100 sm:text-sm sm:leading-6" aria-label="Label" required>
                    </li>
                    <li class="col-span-1">
                        <!-- <input type="submit" value="Log In" class="bg-primary text-white rounded w-full p-4 mb-4"> -->
                        <!--  -->
                        
                            <button class="mdc-button w-full bg-primary py-6">
                                <span class="mdc-button__ripple"></span>
                                <span class="mdc-button__label text-white uppercase">Create</span>
                            </button>
                            
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>

<?php include __DIR__ . "./includes/footer.php"; ?>