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
        this.toggleHeroForms = function (tabs, tab_content) {
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
    }
    return Main;
}());
var main_toggleHeroForms = new Main();
main_toggleHeroForms.toggleHeroForms(document.querySelectorAll(".tab-btn"), document.querySelectorAll(".tab-content"));
// 
var toggle_daily_hourly_Forms = new Main();
toggle_daily_hourly_Forms.toggleHeroForms(document.querySelectorAll(".vh-tab-btn"), document.querySelectorAll(".vh-tab-content"));
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
