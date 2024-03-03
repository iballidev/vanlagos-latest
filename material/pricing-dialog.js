
import { MDCDialog } from '@material/dialog';

class PricingDialog {
    constructor(trigger, mdc_dialog, content_component) {
        this.trigger = trigger;
        this.mdc_dialog = mdc_dialog;
        this.content_component = content_component;
    }

    display = () => {
        const dialog = this.mdc_dialog ? new MDCDialog(this.mdc_dialog) : null;

        dialog?.listen('MDCDialog:opened', () => {
            for (let i = 0; i < this.content_component.length; i++) {
                const component = this.content_component[i];
                component?.layout();

            }
        });

        dialog?.listen('MDCDialog:opened', function () {
            // Assuming contentElement references a common parent element with the rest of the page's content
            // contentElement.setAttribute('aria-hidden', 'true');
            console.log('Dialog opened');

        });
        dialog?.listen('MDCDialog:closing', function () {
            // contentElement.removeAttribute('aria-hidden');
            console.log('Dialog closing');

        });
        this.trigger?.addEventListener('click', () => {
            dialog?.open();
        });

    }

    deactivate_scrim_effect = () => {

        // Get the scrim element
        const scrim = this.mdc_dialog?.querySelector('.mdc-dialog__scrim');

        // Prevent closing on scrim click
        scrim?.addEventListener('click', function (event) {
            event.stopPropagation(); // Stop the event from propagating to the dialog
        });


    }
}


export default PricingDialog;