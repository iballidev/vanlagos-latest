import AppDialog from "./material/app-dialog";
import { MDCRipple } from "@material/ripple/index";
import { MDCFormField } from "@material/form-field";
import { MDCRadio } from "@material/radio";
import { MDCCheckbox } from "@material/checkbox";
import { MDCList } from "@material/list";
import { MDCTextField } from "@material/textfield";
import { MDCTabBar } from "@material/tab-bar";
import ConfirmationDialog from "./material/confirmation-dialog";

const mdc_tab_bar = document.querySelector(".mdc-tab-bar");
const tabBar = mdc_tab_bar ? new MDCTabBar(mdc_tab_bar) : null;

var foo_button = document.querySelector(".foo-button");
const ripple = foo_button ? new MDCRipple(foo_button) : null;

// var mdc_button = document.querySelector('.mdc-button');
// const buttonRipple = mdc_button ? new MDCRipple(mdc_button) : null;

var mdc_button_all = document.querySelectorAll(".mdc-button");
for (let i = 0; i < mdc_button_all?.length; i++) {
    const element = mdc_button_all[i];
    const buttonRipple = element ? new MDCRipple(element) : null;
}

const mdc_dialog = document.querySelector(".mdc-dialog");
const van_hire_dialog = document.querySelector(".van-hire-dialog");
const bus_hire_dialog = document.querySelector(".bus-hire-dialog");
const delete_account_dialog = document.querySelector(".delete-account-dialog");

const mdc_list = document.querySelector(".mdc-dialog .mdc-list");
const list = mdc_list ? new MDCList(mdc_list) : null;

/**Dialog */
const app_dialog = new AppDialog(
    document.getElementById("show-dialog-button"),
    mdc_dialog,
    [list]
);
app_dialog.display();
app_dialog.deactivate_scrim_effect();
/**Van Hire Pricing Dialog */
const van_hire_pricing_dialog = new AppDialog(
    document.getElementById("show-van-hire-dialog-button"),
    van_hire_dialog,
    []
);
van_hire_pricing_dialog.display();
van_hire_pricing_dialog.deactivate_scrim_effect();
/**Bus Hire Pricing Dialog */
const bus_hire_pricing_dialog = new AppDialog(
    document.getElementById("show-bus-hire-dialog-button"),
    bus_hire_dialog,
    []
);
bus_hire_pricing_dialog.display();
bus_hire_pricing_dialog.deactivate_scrim_effect();
/**delete account dialog */
// const _delete_account_dialog = new AppDialog(document.getElementById('show-delete-account-dialog-button'), delete_account_dialog, []);
// _delete_account_dialog.display()
// _delete_account_dialog.deactivate_scrim_effect()
const _delete_account_dialog = new ConfirmationDialog(
    document.getElementById("show-delete-account-dialog-button"),
    delete_account_dialog,
    []
);
_delete_account_dialog.display(handleDeleteAccount);
_delete_account_dialog.deactivate_scrim_effect();
/**call function after confirmation is true */
function handleDeleteAccount() {
    alert("call api")
}

/**radio button */
const mdc_radio = document.querySelector(".mdc-radio");
const radio = mdc_radio ? new MDCRadio(mdc_radio) : null;
const mdc_form_field = document.querySelector(".mdc-form-field");
const formField = mdc_form_field ? new MDCFormField(mdc_form_field) : null;
formField ? (formField.input = radio) : null;

/**text field */
const mdc_text_field = document.querySelector(".mdc-text-field");
const textField = mdc_text_field ? new MDCTextField(mdc_text_field) : null;

const mdc_checkbox = document.querySelector(".mdc-checkbox");
const checkbox = mdc_checkbox ? new MDCCheckbox(mdc_checkbox) : null;
formField ? (formField.input = checkbox) : null;
