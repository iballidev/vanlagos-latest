console.log('hello world');

import { MDCRipple } from '@material/ripple/index';

import { MDCFormField } from '@material/form-field';
import { MDCRadio } from '@material/radio';


var foo_button = document.querySelector('.foo-button')
const ripple = foo_button ? new MDCRipple(foo_button) : null;
var mdc_button = document.querySelector('.mdc-button')

const buttonRipple = mdc_button ? new MDCRipple(mdc_button) : null;


var mdc_button_all = document.querySelectorAll('.mdc-button')
for (let i = 0; i < mdc_button_all?.length; i++) {
    const element = mdc_button_all[i];
    console.log("element: ", element)
    const buttonRipple = new MDCRipple(element)
}


import { MDCDialog } from '@material/dialog';
const mdc_dialog = document.querySelector('.mdc-dialog')
const dialog = mdc_dialog ? new MDCDialog(mdc_dialog) : null;


import { MDCList } from '@material/list';
const mdc_list = document.querySelector('.mdc-dialog .mdc-list')
const list = mdc_list ? new MDCList(mdc_list) : null;

dialog?.listen('MDCDialog:opened', () => {
    list.layout();
});


console.log("hello***");


dialog?.listen('MDCDialog:opened', function () {
    // Assuming contentElement references a common parent element with the rest of the page's content
    // contentElement.setAttribute('aria-hidden', 'true');
    console.log('Dialog opened');

});
dialog?.listen('MDCDialog:closing', function () {
    // contentElement.removeAttribute('aria-hidden');
    console.log('Dialog closing');

});



document.getElementById('show-dialog-button')?.addEventListener('click', () => {
    dialog?.open();
});

// Get the scrim element
const scrim = document.querySelector('.mdc-dialog .mdc-dialog__scrim');

// Prevent closing on scrim click
scrim?.addEventListener('click', function (event) {
    event.stopPropagation(); // Stop the event from propagating to the dialog
});



/**radio button */
const mdc_radio = document.querySelector('.mdc-radio')
const radio = mdc_radio ? new MDCRadio(mdc_radio) : null;
const mdc_form_field = document.querySelector('.mdc-form-field')
const formField = mdc_form_field ? new MDCFormField(mdc_form_field) : null;
formField ? formField.input = radio : null;


/**text field */
import { MDCTextField } from '@material/textfield';
const mdc_text_field = document.querySelector('.mdc-text-field')
const textField = mdc_text_field ? new MDCTextField(mdc_text_field) : null;


import { MDCCheckbox } from '@material/checkbox';
const mdc_checkbox = document.querySelector('.mdc-checkbox')
const checkbox = mdc_checkbox ? new MDCCheckbox(mdc_checkbox) : null;
formField ? formField.input = checkbox : null;