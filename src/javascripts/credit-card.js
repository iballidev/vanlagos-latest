class CreditCard {

    constructor() {
        this.configureCardNumber = (cardNumberField) => {

            cardNumberField?.addEventListener('keyup', (event) => {
                // Get the current input value
                let inputValue = event.target.value;

                // Remove any existing spaces
                inputValue = inputValue.replace(/\s/g, '');

                // Insert a space after every four characters
                inputValue = inputValue.replace(/(\d{4})/g, '$1 ');

                // Update the input value
                event.target.value = inputValue.trim();
            });
        }

        this.configureCardExpiryDate = (expirationDateField) => {
            expirationDateField?.addEventListener('keyup', (event) => {
                let inputValue = expirationDateField.value.replace(/\D/g,
                    ''); // Remove non-numeric characters
                inputValue = inputValue.substring(0, 16); // Limit to 16 characters

                let formattedValue = '';
                for (let i = 0; i < inputValue.length; i += 2) {
                    formattedValue += inputValue.slice(i, i + 2) + '/';
                }

                // Remove the trailing slash if it exists
                formattedValue = formattedValue.replace(/\/$/, '');

                expirationDateField.value = formattedValue;
            });
        }
    }

}

export default CreditCard;

