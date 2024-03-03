class ViewportIntersection {
    constructor() { }
    handleAnimateOnViewportIntercept = () => {
        const faders = document.querySelectorAll(".fade-in");
        const fromLeft = document.querySelectorAll(".from-left");
        const fromRight = document.querySelectorAll(".from-right");
        const fromBottom = document.querySelectorAll(".from-bottom");
        const fromTop = document.querySelectorAll(".from-top");
        const sliders = document.querySelectorAll(".slide-in");


        const appearOptions = {
            threshold: 0,
            rootMargin: "0px 0px -100px 0px"
        };
        const appearOnScroll = new IntersectionObserver((entries, appearOnScroll) => {
            entries.forEach((entry) => {
                let dataDelay = entry.target.getAttribute("data-delay");
                if (!entry.isIntersecting) return;

                if (dataDelay) {
                    setTimeout(() => {
                        entry.target.classList.add("appear");
                        appearOnScroll.unobserve(entry.target);
                    }, parseInt(dataDelay));
                } else {
                    entry.target.classList.add("appear");
                    appearOnScroll.unobserve(entry.target);
                }
            });
        }, appearOptions);

        faders.forEach((fader) => {
            appearOnScroll.observe(fader);
        });
        fromLeft.forEach((fader) => {
            appearOnScroll.observe(fader);
        });
        fromRight.forEach((fader) => {
            appearOnScroll.observe(fader);
        });
        fromTop.forEach((fader) => {
            appearOnScroll.observe(fader);
        });
        fromBottom.forEach((fader) => {
            appearOnScroll.observe(fader);
        });

        sliders.forEach((slider) => {
            appearOnScroll.observe(slider);
        });
    }
}
export default ViewportIntersection;