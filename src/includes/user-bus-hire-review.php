<table x-data="{ isOpen: false }" class="align-end-cells-right | w-full text-sm text-left rtl:text-right text-gray-500">
    <thead class="text-md text-gray-700 uppercase bg-gray-50 ">
        <tr>
            <th scope="col" class="px-6 py-3">
                Service
            </th>
            <th scope="col" class="px-6 py-3">
                Rating
            </th>
            <th scope="col" class="px-6 py-3 min-w-96">
                Comment
            </th>
            <th scope="col" class="px-6 py-3">
                Date
            </th>
            <th scope="col" class="px-6 py-3">
            </th>
        </tr>
    </thead>

    
    <tbody>

        <!-- preview row -->
        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50">
            <th scope="row" class="px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white font-bold">
                Bus Hire
            </th>
            <td class="px-6 py-4">
                <!-- review data -->
                <div class="star-rating-container"></div>
                <!-- <input type="tel" name="" id="" value="0" readonly hidden> -->
                <input type="tel" name="" id="" value="0">
            </td>
            <td class="px-6 py-4">
                <p>
                    Blanditiis aperiam quam, illum in soluta odio ab asperiores facere explicabo eius quibusdam! Quis,
                    neque optio, blanditiis a fugiat beatae reprehenderit quaerat, inventore magni modi asperiores ipsam
                    mollitia labore consequatur esse minus est! Officia eius explicabo dignissimos ad suscipit?
                    Laboriosam eius accusantium ipsum, ducimus id inventore quam ad animi hic assumenda placeat
                    aspernatur. Qui repellat accusantium fugiat, minima alias quas animi delectus accusamus eum. Ducimus
                    doloremque eos, accusamus, voluptates quasi quia nesciunt molestias suscipit natus, voluptatibus
                    magni quaerat voluptatum dolor ea et alias incidunt facere hic. Maiores minus reiciendis aut. Modi.
                </p>
            </td>
            <td class="px-6 py-4">
                01/03/2024
            </td>
            <td class="px-6 py-4">
                <div class="flex items-center justify-end w-full">
                    <button @click="isOpen = !isOpen" type="button"
                        class="text-dark bg-gray-300 hover:bg-dark-800 font-medium rounded-lg text-sm px-4 py-2 me-2 mb-2">
                        <span x-show="!isOpen">Review</span>
                        <span x-show="isOpen">Cancel</span>

                    </button>
                </div>
            </td>
        </tr>


        <!-- update form -->
        <tr x-show="isOpen" x-transition:enter="transition ease-out duration-3000"
            x-transition:enter-start="transform opacity-0 scale-95"
            x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="transform opacity-100 scale-100"
            x-transition:leave-end="transform opacity-0 scale-95"
            class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 border-b dark:border-gray-700">

            <td class="px-6 py-4 text-left" colspan="5">

                <form action="" method="post">
                    <ul class="grid grid-cols-1 gap-y-4">
                        <li class="col-span-1">
                            <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--no-label block">
                                <input type="text" id="bus-hire-service-rating" name="bus-hire-service-rating"
                                    class="border border-red-500 mdc-text-field__input" aria-label="Label"
                                    value="bus Hire" readonly>
                                <span class="mdc-notched-outline">
                                    <span class="mdc-notched-outline__leading"></span>
                                    <span class="mdc-notched-outline__trailing"></span>
                                </span>
                            </div>
                        </li>
                        <li class="col-span-1">
                            <label for="bus-hire-rating" class="block font-semibold mb-2 cursor-pointer">Rating</label>
                            <div class="mdc-text-field mdc-text-field--outlined w-full select">
                                <select id="bus-hire-rating" name="bus-hire-rating" class=" mdc-text-field__input" aria-label="Label"
                                    required>
                                    <option selected>Select Rating</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                                <span class="mdc-notched-outline">
                                    <span class="mdc-notched-outline__leading"></span>
                                    <span class="mdc-notched-outline__trailing"></span>
                                </span>
                            </div>
                        </li>
                        <li class="col-span-1">
                            <div class="col-span-12">
                                <label for="van-hire-rating-comment" class="block font-semibold mb-2 cursor-pointer">
                                    Comment
                                </label>
                                <div
                                    class="mdc-text-field mdc-text-field--textarea mdc-text-field--no-label w-full pt-2">
                                    <span class="mdc-notched-outline">
                                        <span class="mdc-notched-outline__leading rounded-l-md"></span>
                                        <span class="mdc-notched-outline__trailing rounded-r-md"></span>
                                    </span>
                                    <span class="mdc-text-field__resizer">
                                        <textarea class="mdc-text-field__input" id="van-hire-rating-comment" name="van-hire-rating-comment"
                                            rows="5" cols="40" aria-label="Label"></textarea>
                                    </span>
                                </div>
                            </div>
                        </li>
                        <li class="col-span-1">
                            <button class="mdc-button primary-btn py-4 px-6">
                                <span class="mdc-button__ripple"></span>
                                <span class="mdc-button__label text-white">Submit</span>
                            </button>
                        </li>
                    </ul>
                </form>
            </td>
        </tr>
    </tbody>
</table>