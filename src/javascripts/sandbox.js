class Sandbox {
    constructor() { }


    keyupTestRating = () => {
        let _input = document.querySelector("#van-hire-review-score");
        _input.addEventListener("keyup", (e) => {
            var count_val = parseInt(e.target.value);
            if (count_val > 5) {
                alert("invalid input!");
                return;
            }
            let parent = e.target.parentElement;
            let star_rating_container = parent.querySelector(".star-rating-container");
            var star_rating = star_rating_container.querySelector(".star-rating")
            let star_rating_list = star_rating.children;

            for (let k = 0; k < star_rating_list.length; k++) {
                const li = star_rating_list[k];
                li.firstElementChild.classList.remove("text-accent");
                if (k < count_val) {
                    li.firstElementChild.classList.add("text-accent");
                }

            }
        })
    }
}

export default Sandbox;