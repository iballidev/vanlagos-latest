class DatePicker {
    constructor() {
        const datepicker =
            document.querySelectorAll(".datepicker");
        for (let i = 0; i < datepicker.length; i++) {
            const element = datepicker[i];
            var picker = new Pikaday({
                field: element,
                format: 'MM/DD/YYYY', // You can change the date format as per your requirements
            });


        }
    }
}

export default DatePicker;