class CountdownTimer {
    constructor(time_value, stop_counter_button) {
        // this.countdownTime = 300; // 300 for 5 minutes
        this.countdownTime = time_value; // 300 for 5 minutes
        this.time_count = this.countdownTime;
        this.isCancelled = false;
        this.isStarted = false;
        this.isStopped = false;

        this.counter_stop_btn = document.getElementById('counter-stop-button');
        this.counter_cancel_btn = document.getElementById('counter-cancel-button');
        this.counter_start_btn = document.getElementById('counter-start-button');
        this.counter_stop_btn?.classList.add("hidden");
        this.counter_cancel_btn?.classList.add("hidden");

        this.init();

    }

    init = () => {
        this.timer_screen = document.getElementById('timer');
        /**default counter screen style */
        let dash = !this.isStarted ? `<span>_ _</span>` : '';
        this.timer_screen ? this.timer_screen.innerHTML =
            `<span>${dash}hr</span>:<span> ${dash}min</span>:<span>${dash}sec</span>` :
            null;

        !this.timer_screen.classList.contains("text-gray-300") ? this.timer_screen.classList.add("text-gray-300") : null;

        // Start the countdown
        if (!this.isStarted) return
        this.startCountdown(this.time_count, this.updateTimerDisplay);
    }


    updateTimerDisplay = (count) => {
        if (this.isCancelled || this.isStopped) return
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

        this.time_count = count;
    }

    startCountdown = (time_count, updateTimerDisplay) => {
        if (!this.isStarted) return;
        this.counter_start_btn?.classList.add("hidden")
        this.counter_cancel_btn?.classList.remove("hidden")
        this.counter_stop_btn?.classList.remove("hidden")
        this.updateTimerDisplay(time_count);

        let count = time_count;

        const countdownInterval = setInterval(function () {
            if (count > 0) {
                count--;
                updateTimerDisplay(count);
            } else {
                clearInterval(countdownInterval);
                this.isCancelled ? alert("Countdown Timer Cancelled!") : alert("Countdown Timer Expired!");
            }
        }, 1000); // Update every second

    }

    startTrip = () => {
        this.isStarted = true;
        this.startCountdown(this.time_count, this.updateTimerDisplay);
        this.counter_stop_btn.classList.contains("hidden") ? this.counter_stop_btn.classList.remove("hidden") : null;
    }


    stopCountdown = () => {
        if (!this.isStarted) return
        console.log("stopCountdown!")
        this.isStopped = true;
        this.isStarted = false;
        this.updateTimerDisplay(this.time_count);
        // this.counter_start_btn.classList.contains("hidden") ? this.counter_start_btn.classList.remove("hidden") : null;
        this.counter_stop_btn?.classList.add("hidden");
        this.preview();
    }

    cancelCountdown = () => {
        if (!this.isStarted) return
        console.log("cancelCountdown!");
        this.isCancelled = true;
        this.isStarted = false;
        this.updateTimerDisplay(this.time_count);
        counter_cancel_btn?.classList.add("hidden");
        this.preview();
    }

    preview = () => {
        let time_used = this.countdownTime - this.time_count;
        time_used = time_used / 60
        alert(`time used: ${time_used.toFixed(3).toString()} minutes`);
    }


}

export default CountdownTimer;