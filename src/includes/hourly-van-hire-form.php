<form action="">
    <div class="grid grid-cols-12 gap-4">
        <div class="col-span-12 sm:col-span-8">
            <label for="pick_up" class="block font-semibold mb-2 cursor-pointer">Pick-up</label>
            <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--no-label block">
                <span class="mdc-notched-outline">
                    <span class="mdc-notched-outline__leading"></span>
                    <span class="mdc-notched-outline__trailing"></span>
                </span>
                <input id="pick_up" class="mdc-text-field__input" type="text" aria-label="Label"
                    placeholder="Input your address">
            </div>
        </div>
        <div class="col-span-12 sm:col-span-4">
            <label for="pick_up_state" class="block font-semibold mb-2 cursor-pointer">State</label>
            <div class="select | mdc-text-field mdc-text-field--outlined mdc-text-field--no-label block">
                <span class="mdc-notched-outline">
                    <span class="mdc-notched-outline__leading"></span>
                    <span class="mdc-notched-outline__trailing"></span>
                </span>

                <select name="pick_up_state" id="pick_up_state" class="mdc-text-field__input block w-full min-h-full">
                    <option value="lagos">Lagos</option>
                    <option value="ogun">Ogun</option>
                </select>
            </div>
        </div>
        <div class="col-span-12 sm:col-span-8">
            <label for="drop_off" class="block font-semibold mb-2 cursor-pointer">Drop-off</label>
            <div class="mdc-text-field mdc-text-field--outlined mdc-text-field--no-label block">
                <span class="mdc-notched-outline">
                    <span class="mdc-notched-outline__leading"></span>
                    <span class="mdc-notched-outline__trailing"></span>
                </span>
                <input id="drop_off" class="mdc-text-field__input" type="text" aria-label="Label"
                    placeholder="Input your address">
            </div>
        </div>
        <div class="col-span-12 sm:col-span-4">
            <label for="drop_off_state" class="block font-semibold mb-2 cursor-pointer">State</label>
            <div class="select | mdc-text-field mdc-text-field--outlined mdc-text-field--no-label block">
                <span class="mdc-notched-outline">
                    <span class="mdc-notched-outline__leading"></span>
                    <span class="mdc-notched-outline__trailing"></span>
                </span>

                <select name="drop_off_state" id="drop_off_state" class="mdc-text-field__input block w-full min-h-full">
                    <option value="lagos">Lagos</option>
                    <option value="ogun">Ogun</option>
                </select>
            </div>
        </div>
        <div class="col-span-6 sm:col-span-4">
            <label for="pick_up_date" class="block font-semibold mb-2 cursor-pointer">Pick-up Date</label>
            <div class="calendar | mdc-text-field mdc-text-field--outlined mdc-text-field--no-label block">
                <span class="mdc-notched-outline">
                    <span class="mdc-notched-outline__leading"></span>
                    <span class="mdc-notched-outline__trailing"></span>
                </span>

                <input type="text" name="" id="pick_up_date" class="datepicker block w-full px-2 py-3">
            </div>
        </div>
        <div class="col-span-6 sm:col-span-4">
            <label for="pick_up_time" class="block font-semibold mb-2 cursor-pointer">Pick-up Time</label>

            <div class="select | mdc-text-field mdc-text-field--outlined mdc-text-field--no-label block">
                <span class="mdc-notched-outline">
                    <span class="mdc-notched-outline__leading"></span>
                    <span class="mdc-notched-outline__trailing"></span>
                </span>

                <select name="pick_up_time" id="pick_up_time" class="mdc-text-field__input block w-full min-h-full">
                    <option value="7:00am">7:00am</option>
                    <option value="8:00am">8:00am</option>
                    <option value="9:00am">9:00am</option>
                    <option value="10:00am">10:00am</option>
                </select>
            </div>

        </div>
        <div class="col-span-12 sm:col-span-4">
            <label for="number_of_hours" class="block font-semibold mb-2 cursor-pointer">No of Hours</label>

            <div class="select | mdc-text-field mdc-text-field--outlined mdc-text-field--no-label block">
                <span class="mdc-notched-outline">
                    <span class="mdc-notched-outline__leading"></span>
                    <span class="mdc-notched-outline__trailing"></span>
                </span>

                <select name="number_of_hours" id="number_of_hours"
                    class="mdc-text-field__input block w-full min-h-full">
                    <option value="4 hours">4 hours</option>
                    <option value="5 hours">5 hours</option>
                </select>
            </div>

        </div>


        <div class="col-span-12">
            <button class="mdc-button w-full bg-primary py-6">
                <span class="mdc-button__ripple"></span>
                <span class="mdc-button__label text-white">Hire Now</span>
            </button>
        </div>
    </div>
</form>