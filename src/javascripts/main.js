console.log("Hi Programmer!!!");
var Main = /** @class */ (function () {
    function Main() {
        // const greet = (element: HTMLButtonElement) => {
        //   const speak = () => {
        //     alert("Hello world!");
        //   };
        //   element?.addEventListener("click", speak);
        // };
        // greet(document.querySelector<HTMLButtonElement | any>("#clickme_btn"));
        //
        this.handleToggleHeroForms = function (tabs, tab_content) {
            console.log(tabs);
            tabs.forEach(function (tab) {
                tab.addEventListener("click", function () {
                    tabs.forEach(function (t) { return t.classList.remove("active"); });
                    tab.classList.add("active");
                    var targetTabId = tab.getAttribute("data-tab");
                    var tabContents = tab_content;
                    tabContents.forEach(function (content) {
                        content.classList.toggle("hidden", content.id !== targetTabId);
                    });
                });
            });
        };
        this.handleAnimateOnViewportIntercept = function () {
            var faders = document.querySelectorAll(".fade-in");
            var fromLeft = document.querySelectorAll(".from-left");
            var fromRight = document.querySelectorAll(".from-right");
            var fromBottom = document.querySelectorAll(".from-bottom");
            var fromTop = document.querySelectorAll(".from-top");
            var sliders = document.querySelectorAll(".slide-in");
            var appearOptions = {
                threshold: 0,
                rootMargin: "0px 0px -100px 0px"
            };
            var appearOnScroll = new IntersectionObserver(function (entries, appearOnScroll) {
                entries.forEach(function (entry) {
                    console.log("entry: ", entry.target);
                    var dataDelay = entry.target.getAttribute("data-delay");
                    console.log("dataDelay: ", dataDelay);
                    if (!entry.isIntersecting)
                        return;
                    if (dataDelay) {
                        setTimeout(function () {
                            entry.target.classList.add("appear");
                            appearOnScroll.unobserve(entry.target);
                        }, parseInt(dataDelay));
                    }
                    else {
                        entry.target.classList.add("appear");
                        appearOnScroll.unobserve(entry.target);
                    }
                });
            }, appearOptions);
            faders.forEach(function (fader) {
                appearOnScroll.observe(fader);
            });
            fromLeft.forEach(function (fader) {
                appearOnScroll.observe(fader);
            });
            fromRight.forEach(function (fader) {
                appearOnScroll.observe(fader);
            });
            fromTop.forEach(function (fader) {
                appearOnScroll.observe(fader);
            });
            fromBottom.forEach(function (fader) {
                appearOnScroll.observe(fader);
            });
            sliders.forEach(function (slider) {
                appearOnScroll.observe(slider);
            });
        };
    }
    return Main;
}());
var init = new Main();
init.handleAnimateOnViewportIntercept();
var main_toggleHeroForms = new Main();
main_toggleHeroForms.handleToggleHeroForms(document.querySelectorAll(".tab-btn"), document.querySelectorAll(".tab-content"));
// 
var toggle_daily_hourly_Forms = new Main();
toggle_daily_hourly_Forms.handleToggleHeroForms(document.querySelectorAll(".vh-tab-btn"), document.querySelectorAll(".vh-tab-content"));
// const tabs = document.querySelectorAll('.tab-btn');
// tabs.forEach(tab => {
//     tab.addEventListener('click', () => {
//         tabs.forEach(t => t.classList.remove('active'));
//         tab.classList.add('active');
//         const targetTabId = tab.getAttribute('data-tab');
//         const tabContents = document.querySelectorAll('.tab-content');
//         tabContents.forEach(content => {
//             content.classList.toggle('hidden', content.id !==
//                 targetTabId);
//         });
//     });
// });
