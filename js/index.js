
document.addEventListener("DOMContentLoaded",scrollblogs);

function scrollblogs(){
        const scrollingContainer = document.querySelector(".scrolling-container");
        const prevIndicator = document.querySelector(".indicator.prev");
        const nextIndicator = document.querySelector(".indicator.next");

        prevIndicator.addEventListener("click", function() {
            scrollingContainer.scrollBy({
                left: -300, 
            });
        });

        nextIndicator.addEventListener("click", function() {
            scrollingContainer.scrollBy({
                left: 300,
                behavior: "smooth"
            });
        });
    };
   