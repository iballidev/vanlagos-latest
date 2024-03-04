<div class="mdc-dialog bus-hire-dialog">
    <div class="mdc-dialog__container">
        <div class="mdc-dialog__surface" role="alertdialog" aria-modal="true" aria-labelledby="my-dialog-title" aria-describedby="my-dialog-content">
            <div class="mdc-dialog__content" id="my-dialog-content">
                <h3 class="text-2xl text-center font-semibold bg-dark-200 text-accent py-4 px-2 rounded-t-lg">Bus Hire</h3>
                <!-- bus hire form -->
                <?php include_once(__DIR__ . "./bus-hire-form.php"); ?>
            </div>
            <div class="mdc-dialog__actions">
                <button type="button" class="mdc-button mdc-dialog__button" data-mdc-dialog-action="cancel">
                    <div class="mdc-button__ripple"></div>
                    <span class="mdc-button__label">Cancel</span>
                </button>
                <!-- <button type="button" class="mdc-button mdc-dialog__button" data-mdc-dialog-action="discard">
                    <div class="mdc-button__ripple"></div>
                    <span class="mdc-button__label">Discard</span>
                </button> -->
            </div>
        </div>
    </div>
    <div class="mdc-dialog__scrim"></div>
</div>