window.addEventListener("load", function () {
    var sliderStage = document.querySelector("[data-box-id='boxscroll']");
    var sliderItems = sliderStage.querySelectorAll(".owl-item");

    const nextBtn = document.querySelector("[data-next-id='btnboxscroll']");
    const prevBtn = document.querySelector("[data-prev-id='btnboxscroll']");
    var sliderItemWidth = sliderItems[0].offsetWidth;
    var slidersLength = sliderItems.length;
    var positionX = 0;
    var index = 0;
    nextBtn.addEventListener("click", function () {
        changeSlide(1);
    });
    prevBtn.addEventListener("click", function () {
        changeSlide(-1);
    });



    function changeSlide(direction) {
        if (direction === 1) {
            positionX = positionX - sliderItemWidth;
            sliderStage.style = 'transform: translate3d(' + positionX * 5 + 'px, 0px, 0px); transition: all 1.25s ease 0s; width: ' + sliderItemWidth * slidersLength + 'px;';
            index++;
            if (index == 1) {
                nextBtn.className += " disabled";
                prevBtn.className = prevBtn.className.replace(" disabled", "");
            }
        } else if (direction === -1) {
            positionX = positionX + sliderItemWidth;
            sliderStage.style = 'transform: translate3d(' + positionX * 5 + 'px, 0px, 0px); transition: all 1.25s ease 0s; width: ' + sliderItemWidth * slidersLength + 'px;';
            index--;
            if (index == 0) {
                prevBtn.className += " disabled";
                nextBtn.className = nextBtn.className.replace(" disabled", "");
            }
        }
    }
});
