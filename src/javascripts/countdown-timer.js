class CountdownTimer {
    constructor(time_value, stop_counter_button) {
        this.countdownTime = 300; // 300 for 5 minutes
        this.time_count = this.countdownTime;
        this.isCancelled = false;
        this.isStart = false;

        this.timer_screen = document.getElementById('timer');
        /**default counter screen style */
        this.timer_screen ? this.timer_screen.innerHTML =
            `<span>0hr</span>:<span>0min</span>:<span>0sec</span>` :
            null;

        !this.timer_screen.classList.contains("text-gray-300") ? this.timer_screen.classList.add("text-gray-300") : null;

        console.log("timer_screen: ", this.timer_screen)






        // Start the countdown
        this.startCountdown();

    }


    updateTimerDisplay = (count) => {
        console.log("updateTimerDisplay count: ", count)
        console.log("updateTimerDisplay!")
    }

    startCountdown = () => {
        console.log("startCountdown!")
        // if (!isStart) return;

        
        console.warn("this A: ", this)

        console.log("this.time_count 1: ", this.time_count)
        this.updateTimerDisplay(this.time_count);
        console.log("this.time_count 2: ", this.time_count)
        let count = this.time_count;
        const countdownInterval = setInterval(function () {
            console.warn("this B: ", this)
            console.log("this.time_count 3: ", this.time_count)
            console.log("count: ", count)
            if (count > 0) {
                count--;
                // updateTimerDisplay(count);
            } else {
                clearInterval(countdownInterval);
                this.isCancelled ? alert("Countdown Timer Cancelled!") : alert("Countdown Timer Expired!");
            }
        }, 1000); // Update every second

    }

    stopCountdown = () => {
        console.log("stopCountdown!")
    }


}

export default CountdownTimer;