import { MDCDialog } from '@material/dialog';
import AppDialog from "./app-dialog";

class ConfirmationDialog extends AppDialog {
    constructor(trigger, mdc_dialog, content_component) {
        super(trigger, mdc_dialog, content_component);
    }


    display = (call_func) => {
        const dialog = this.mdc_dialog ? new MDCDialog(this.mdc_dialog) : null;

        dialog?.listen('MDCDialog:closing', function (e) {
            // contentElement.removeAttribute('aria-hidden');
            // console.log("e: ", e.detail.action)
            // console.log('Dialog closing');
            if (e.detail.action !== 'accept') {
                console.log('NO');
            } else {
                console.log('YES: <--- call API with JQuery here! --->');
                /**function call after confirmation */
                call_func()
            }

        });

        this.trigger?.addEventListener('click', () => {
            dialog?.open();
        });


    }
}

export default ConfirmationDialog;
