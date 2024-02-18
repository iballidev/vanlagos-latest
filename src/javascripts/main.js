var greet = function (element) {
    var speak = function () {
        alert("Hello world!");
    };
    element.addEventListener("click", speak);
};
greet(document.querySelector("#clickme_btn"));
