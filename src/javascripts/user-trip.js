let isStarted = false;
let isCancelled = false;
let time_count = 0;

class UserTrip {
    constructor(time_value) {
        // this.countdownTime = 300; // 300 for 5 minutes
        this.countdownTime = time_value; // 300 for 5 minutes
        time_count = this.countdownTime;

        this.counter_cancel_btn = document.getElementById('counter-cancel-button');
        this.counter_cancel_btn?.classList.add("hidden");

        this.init();
    }

    init = () => {
        this.timer_screen = document.getElementById('timer');
        /**default counter screen style */
        let dash = !isStarted ? `<span>_ _</span>` : '';
        this.timer_screen ? this.timer_screen.innerHTML =
            `<span>${dash}hr</span>:<span> ${dash}min</span>:<span>${dash}sec</span>` :
            null;

            if(this.timer_screen)
                !this.timer_screen.classList.contains("text-gray-300") ? this.timer_screen.classList.add("text-gray-300") : null;

        // Start the countdown
        if (!isStarted) return
        this.startCountdown(time_count, this.updateTimerDisplay);
    }



    updateTimerDisplay = (count) => {
        if (isCancelled || this.isStopped) return
        const hours = Math.floor(count / 3600);
        const minutes = Math.floor((count % 3600) / 60);
        const seconds = count % 60;

        !this.timer_screen.classList.contains("text-green-600") ? this.timer_screen.classList.add("text-green-600") : null;

        if (count < 300) {
            !this.timer_screen.classList.contains("text-danger") ? this.timer_screen.classList.add("text-danger") : null;
            this.timer_screen.classList.contains("text-green-600") ? this.timer_screen.classList.remove("text-green-600") : null;
        } else {
            this.timer_screen.classList.contains("text-danger") ? this.timer_screen.classList.remove("text-danger") : null;
            !this.timer_screen.classList.contains("text-green-600") ? this.timer_screen.classList.add("text-green-600") : null;
        }

        /**update counter screen style */
        this.timer_screen ? this.timer_screen.innerHTML =
            `<span>${hours}hr</span>:<span>${String(minutes).padStart(2, '0')}min</span>:<span>${String(seconds).padStart(2, '0')}sec</span>` :
            null;

        time_count = count;
    }



    cancelCountdown = () => {
        if (!isStarted) return;
        isCancelled = true;
        isStarted = false;
        this.updateTimerDisplay(time_count);
        this.counter_cancel_btn?.classList.add("hidden");
        this.preview();
    }


    preview = () => {
        let time_used = this.countdownTime - time_count;
        // time_used = time_used / 60
        // alert(`time used: ${time_used.toFixed(3).toString()} minutes`);

        let hours = Math.floor(time_used / 3600);
        let minutes = Math.floor((time_used % 3600) / 60);
        let seconds = time_used % 60;


        alert(`time used: ${hours} hours, ${minutes} minutes, ${seconds} seconds`);
    }
}

class DriverTrip extends UserTrip {

    constructor(time_value) {
        super(time_value);
        this.isStopped = false;
        this.counter_start_btn = document.getElementById('counter-start-button');
        this.counter_stop_btn = document.getElementById('counter-stop-button');
        this.counter_stop_btn?.classList.add("hidden");
    }

    startTrip = () => {
        isStarted = true;
        this.startCountdown(time_count, this.updateTimerDisplay);
        this.counter_stop_btn?.classList.contains("hidden") ? this.counter_stop_btn.classList.remove("hidden") : null;
    }

    startCountdown = (time_count, updateTimerDisplay) => {
        if (!isStarted) return;
        this.counter_start_btn?.classList.add("hidden")
        this.counter_cancel_btn?.classList.remove("hidden")
        this.counter_stop_btn?.classList.remove("hidden")
        this.updateTimerDisplay(time_count);

        let count = time_count;
        // console.log("count: ", count)
        const countdownInterval = setInterval(function () {
            // console.log("count: ", count)
            if (count > 0) {
                count--;
                updateTimerDisplay(count);
            } else {
                clearInterval(countdownInterval);
                isCancelled ? alert("Countdown Timer Cancelled!") : alert("Countdown Timer Expired!");
            }
        }, 1000); // Update every second

    }

    stopCountdown = () => {
        this.updateTimerDisplay(time_count);
        this.counter_stop_btn?.classList.add("hidden");
        this.preview();
    }

    endTrip = () => {
        if (!isStarted) return;
        this.isStopped = true;
        isStarted = false;
        this.stopCountdown();
    }

}


export { UserTrip, DriverTrip }