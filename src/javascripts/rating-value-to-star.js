class RatingStarToValue {
    constructor() {
        var star_rating_container = document.querySelectorAll(".star-rating-container");

        for (let i = 0; i < star_rating_container.length; i++) {
            const sr_container = star_rating_container[i];

            let content = `<ul class="star-rating | flex items-center">`;
            for (let l = 0; l < 5; l++) {
                content += `<li>`;
                content += `<span class="material-icons text-base">`;
                content += `star`;
                content += `</span>`;
                content += `</li>`;
            }
            content += `</ul>`;

            sr_container ? sr_container.innerHTML = content : null;


            var star_rating = document.querySelectorAll(".star-rating-container .star-rating");
            var count_val = star_rating ? sr_container?.nextElementSibling.value : null;

            for (let i = 0; i < star_rating.length; i++) {
                const s_rating = star_rating[i];
                var items = s_rating?.children;
                for (let i = 0; i < items?.length; i++) {
                    const element = items[i];
                    element.firstElementChild.classList.add("text-accent");
                    if (i == parseInt(count_val) - 1) {
                        break;
                    }
                }
            }
        }
    }
}


export default RatingStarToValue;

