<?php include(__DIR__ . "./includes/header.php"); ?>
<div class="bg-light">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <ul class="breadcrumb py-2">
            <li><a href="#">Home</a></li>
            <li>Van Hire</li>
        </ul>
        <div class="py-16">
            <h1 class="font-bold text-center text-4xl sm:text-5xl text-dark-200 uppercase">Van Hire</h1>
        </div>
    </div>
</div>



<div class="mx-auto max-w-3xl px-2 sm:px-6 lg:px-8 my-4">


    <!-- van hire form -->
    <?php include_once(__DIR__ . "./includes/van-hire-form.php"); ?>


</div>
hhh
<div class="mdc-dialog">
    <div class="mdc-dialog__container">
        <div class="mdc-dialog__surface" role="alertdialog" aria-modal="true" aria-labelledby="my-dialog-title" aria-describedby="my-dialog-content">
            <!-- Title cannot contain leading whitespace due to mdc-typography-baseline-top() -->
            <h2 class="mdc-dialog__title" id="my-dialog-title"><!--
     -->Choose a Ringtone<!--
   --></h2>
            <div class="mdc-dialog__content" id="my-dialog-content">
                <ul class="mdc-list mdc-list--avatar-list">
                    <li class="mdc-list-item" tabindex="0" data-mdc-dialog-action="none">
                        <span class="mdc-list-item__text">None</span>
                    </li>
                    <li class="mdc-list-item" data-mdc-dialog-action="callisto">
                        <span class="mdc-list-item__text">Callisto</span>
                    </li>
                    <!-- ... -->
                </ul>
            </div>
        </div>
    </div>
    <div class="mdc-dialog__scrim"></div>
</div>

<?php include(__DIR__ . "./includes/footer.php"); ?>