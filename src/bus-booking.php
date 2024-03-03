<?php include(__DIR__ . "./includes/header.php"); ?>
<div class="bg-light">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <ul class="breadcrumb py-2">
            <li><a href="#">Home</a></li>
            <li>Bus Hire</li>
        </ul>
        <div class="py-16">
            <h1 class="font-bold text-center text-4xl sm:text-5xl text-dark-200 uppercase">Bus Hire</h1>
        </div>
    </div>
</div>
<div class="mx-auto max-w-3xl px-2 sm:px-6 lg:px-8">
    <div class="mdc-card p-6 my-4">
        <!-- bus hire form -->
        <?php include_once(__DIR__ . "./includes/bus-hire-form.php"); ?>
    </div>
</div>

<?php include(__DIR__ . "./includes/footer.php"); ?>