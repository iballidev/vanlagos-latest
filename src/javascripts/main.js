console.log("Hi Programmer!!!");
var greet = function (element) {
    var speak = function () {
        alert("Hello world!");
    };
    element === null || element === void 0 ? void 0 : element.addEventListener("click", speak);
};
greet(document.querySelector("#clickme_btn"));
// 
var toggleHeroForms = function (tabs) {
    console.log(tabs);
    tabs.forEach(function (tab) {
        console.log(tab);
        tab.addEventListener('click', function () {
            tabs.forEach(function (t) { return t.classList.remove('active'); });
            tab.classList.add('active');
            var targetTabId = tab.getAttribute('data-tab');
            var tabContents = document.querySelectorAll('.tab-content');
            tabContents.forEach(function (content) {
                content.classList.toggle('hidden', content.id !==
                    targetTabId);
            });
        });
    });
};
toggleHeroForms(document.querySelectorAll('.tab-btn'));
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
