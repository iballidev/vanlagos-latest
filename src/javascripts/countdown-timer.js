class CountdownTimer {
    constructor(time_value, stop_counter_button) {
        // this.countdownTime = 300; // 300 for 5 minutes
        this.countdownTime = time_value; // 300 for 5 minutes
        this.time_count = this.countdownTime;
        this.isCancelled = false;
        this.isStart = false;

        this.timer_screen = document.getElementById('timer');
        /**default counter screen style */
        this.timer_screen ? this.timer_screen.innerHTML =
            `<span>0hr</span>:<span>0min</span>:<span>0sec</span>` :
            null;

        !this.timer_screen.classList.contains("text-gray-300") ? this.timer_screen.classList.add("text-gray-300") : null;

        // Start the countdown
        this.startCountdown(this.time_count, this.updateTimerDisplay);

    }


    updateTimerDisplay = (count) => {
        if (this.isCancelled) return
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
        // if (!isStart) return;

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

    stopCountdown = () => {
        console.log("stopCountdown!")
        let time_used = this.countdownTime - this.time_count;
        time_used = time_used / 60
        alert(`time used: ${time_used.toFixed(3).toString()} minutes`);
        this.isCancelled = true;
        this.updateTimerDisplay(this.time_count);
    }


}

export default CountdownTimer;