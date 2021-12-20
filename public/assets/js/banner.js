window.addEventListener("load",function(){
    const slider =document.querySelector(".slider-banner");
    const sliderStage = document.querySelector(".stage");
    const sliderItems = document.querySelectorAll(".banner-item");
    const nextBtn = document.querySelector(".btn-next");
    const prevBtn = document.querySelector(".btn-prev");
    const dotBtn = document.querySelectorAll(".dot")
    const sliderItemWidth = sliderItems[0].offsetWidth;
    const slidersLength = sliderItems.length;
    let positionX=0;
    let index=0;
    nextBtn.addEventListener("click",function(){
        changeSlide(1);
    });
    prevBtn.addEventListener("click",function(){
        changeSlide(-1);
    });

    [...dotBtn].forEach((item) =>item.addEventListener("click",function(i){
        [...dotBtn].forEach(itemlist =>itemlist.classList.remove("active"));
        if(item.className != "dot active")
        {
            item.className +=" active";
        }
        let slideIndex = parseInt(this.getAttribute("data-index"));
        index = slideIndex;
        positionX = -1 * Number(index) * sliderItemWidth;
        sliderStage.style='transform: translate3d('+positionX+'px, 0px, 0px); transition: all 0.25s ease 0s; width: 5600px;'
        })
    );

    function changeSlide(direction){
        if(direction === 1){
            if(index >= slidersLength - 1) {
                index=0;
                positionX = 0;
                sliderStage.style='transform: translate3d( '+positionX+'px, 0px, 0px); transition: all 1.5s ease 0s; width: 5600px;'
            }
            else{
                positionX = positionX - sliderItemWidth;
                sliderStage.style='transform: translate3d('+positionX+'px, 0px, 0px); transition: all 0.25s ease 0s; width: 5600px;'
                index++;

            }
        } else if (direction === -1){
            if(index <= 0) {
                index=slidersLength-1;
                positionX = positionX - 4 * sliderItemWidth;
                sliderStage.style='transform: translate3d( '+positionX+'px, 0px, 0px); transition: all 1.5s ease 0s; width: 5600px;'
            }
            else{
                positionX = positionX + sliderItemWidth;
                sliderStage.style='transform: translate3d('+positionX+'px, 0px, 0px); transition: all 0.25s ease 0s; width: 5600px;'
                index--;
            }
        }
        [...dotBtn].forEach(itemlist =>itemlist.classList.remove("active"));
        dotBtn[index].classList.add("active");
    }
});
