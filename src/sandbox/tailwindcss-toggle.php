<div class="bg-gray-200">
    <div x-data="{ isOpen: false }">
        <button @click="isOpen = !isOpen" class="bg-blue-500 text-white px-4 py-2">Toggle</button>

        <div x-show="isOpen" x-transition:enter="transition-transform ease-out duration-300"
            x-transition:enter-start="transform translate-x-full" x-transition:enter-end="transform translate-x-0"
            x-transition:leave="transition-transform ease-in duration-300"
            x-transition:leave-start="transform translate-x-0" x-transition:leave-end="transform translate-x-full"
            class="fixed top-0 right-0 h-full w-64 bg-white shadow p-4">
            <!-- Your content goes here -->
            <p>This is a toggleable sidebar</p>
        </div>
    </div>
</div>