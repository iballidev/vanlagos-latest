class RatingStarToValue {
    constructor() {
        this.star_rating_container = document.querySelectorAll(".star-rating-container");
        this.max_rating = 5;

        for (let i = 0; i < this.star_rating_container.length; i++) {
            const sr_container = this.star_rating_container[i];

            let content = `<ul class="star-rating | flex items-center">`;
            for (let l = 0; l < this.max_rating; l++) {
                content += `<li>`;
                content += `<span class="material-icons text-base">`;
                content += `star`;
                content += `</span>`;
                content += `</li>`;
            }
            content += `</ul>`;

            sr_container ? sr_container.innerHTML = content : null;
        }

        this.service_rating();
    }



    service_rating = () => {
        var sr_containers = document.querySelectorAll(".star-rating-container");

        for (let j = 0; j < sr_containers.length; j++) {
            const sr_container = sr_containers[j];
            var star_rating = sr_container.querySelector(".star-rating")
            var count_val = star_rating ? sr_container?.nextElementSibling.value : null;

            let star_rating_list = star_rating.children;
            for (let k = 0; k < star_rating_list.length; k++) {
                const li = star_rating_list[k];
                if(k < parseInt(count_val))
                    li.firstElementChild.classList.add("text-accent");

            }
        }


    }
}


export default RatingStarToValue;

