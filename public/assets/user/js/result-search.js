window.addEventListener("load", function () {
    //Banner trang chủ
    const sliderStage = document.querySelector(".stage");
    const sliderItems = document.querySelectorAll(".banner-item");
    const nextBtn = document.querySelector(".btn-next");
    const prevBtn = document.querySelector(".btn-prev");
    const dotBtn = document.querySelectorAll(".dot")
    const sliderItemWidth = sliderItems[0].offsetWidth;
    const slidersLength = sliderItems.length;
    let positionX = 0;
    let index = 0;
    nextBtn.addEventListener("click", function () {
        changeSlide(1);
    });
    prevBtn.addEventListener("click", function () {
        changeSlide(-1);
    });

    [...dotBtn].forEach((item) => item.addEventListener("click", function (i) {
        [...dotBtn].forEach(itemlist => itemlist.classList.remove("active"));
        if (item.className != "dot active") {
            item.className += " active";
        }
        let slideIndex = parseInt(this.getAttribute("data-index"));
        index = slideIndex;
        positionX = -1 * Number(index) * sliderItemWidth;
        sliderStage.style = 'transform: translate3d(' + positionX + 'px, 0px, 0px); transition: all 0.25s ease 0s; width: 5600px;'
    })
    );

    function changeSlide(direction) {
        if (direction === 1) {
            if (index >= slidersLength - 1) {
                index = 0;
                positionX = 0;
                sliderStage.style = 'transform: translate3d( ' + positionX + 'px, 0px, 0px); transition: all 1.5s ease 0s; width: 5600px;'
            }
            else {
                positionX = positionX - sliderItemWidth;
                sliderStage.style = 'transform: translate3d(' + positionX + 'px, 0px, 0px); transition: all 0.25s ease 0s; width: 5600px;'
                index++;
            }
        } else if (direction === -1) {
            if (index <= 0) {
                index = slidersLength - 1;
                positionX = positionX - (slidersLength - 1) * sliderItemWidth;
                sliderStage.style = 'transform: translate3d( ' + positionX + 'px, 0px, 0px); transition: all 1.5s ease 0s; width: 5600px;'
            }
            else {
                positionX = positionX + sliderItemWidth;
                sliderStage.style = 'transform: translate3d(' + positionX + 'px, 0px, 0px); transition: all 0.25s ease 0s; width: 5600px;'
                index--;
            }
        }
        [...dotBtn].forEach(itemlist => itemlist.classList.remove("active"));
        dotBtn[index].classList.add("active");
    }

    autoSlides();
    function autoSlides() {
        if (index >= slidersLength - 1) {
            index = 0;
            positionX = 0;
            sliderStage.style = 'transform: translate3d( ' + positionX + 'px, 0px, 0px); transition: all 1.5s ease 0s; width: 5600px;'
        }
        else {
            positionX = positionX - sliderItemWidth;
            sliderStage.style = 'transform: translate3d(' + positionX + 'px, 0px, 0px); transition: all 0.25s ease 0s; width: 5600px;'
            index++;
        }
        [...dotBtn].forEach(itemlist => itemlist.classList.remove("active"));
        dotBtn[index].classList.add("active");
        setTimeout(autoSlides, 5000);
    }
});

//Phân loại theo giảm giá,...
function filterDiscount() {
    var a = document.getElementsByClassName("c-checkitem");
    // console.log(a);
    if (a[0].className == "c-checkitem") {
        a[0].className += " active";
    }
    else {
        a[0].className = a[0].className.replace(" active", "");
    }
}
function filterZeroPercent() {
    var a = document.getElementsByClassName("c-checkitem");
    // console.log(a);
    if (a[1].className == "c-checkitem") {
        a[1].className += " active";
    }
    else {
        a[1].className = a[1].className.replace(" active", "");
    }
}
function filterMonopoly() {
    var a = document.getElementsByClassName("c-checkitem");
    // console.log(a);
    if (a[2].className == "c-checkitem") {
        a[2].className += " active";
    }
    else {
        a[2].className = a[2].className.replace(" active", "");
    }
}

function filterNew() {
    var a = document.getElementsByClassName("c-checkitem");
    // console.log(a);
    if (a[3].className == "c-checkitem") {
        a[3].className += " active";
    }
    else {
        a[3].className = a[3].className.replace(" active", "");
    }
}


//Nút xem thêm điện thoại
let loadMoreBtn = document.querySelector('#load-more')
if (document.querySelectorAll(".listproduct.all .item").length <= 10 && document.querySelectorAll(".listproduct.all .item").length > 0 ) {
    loadMoreBtn.style.display = 'none';
}
function loadMore() {
    let currentItem = 10;
    let item = [...document.querySelectorAll(".listproduct.all .item")];
    for (var i = currentItem; i < currentItem + 5; i++) {
        if (i == item.length) {
            break;
        }
        item[i].style.display = 'block';
    }
    currentItem += 5;

    if (currentItem >= item.length) {
        loadMoreBtn.style.display = 'none';
    }
}


