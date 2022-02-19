window.addEventListener("load", function () {
    const tab = document.querySelectorAll(".item");
    const tabPic = document.querySelectorAll(".show-tab");
    var showTabActive = document.querySelector(".show-tab.active");
    var sliderStage = showTabActive.querySelector(".owl-stage");
    var sliderItems = showTabActive.querySelectorAll(".owl-item");
    const nextBtn = document.querySelectorAll("[data-next-id='showtab']");
    const prevBtn = document.querySelectorAll("[data-prev-id='showtab']");
    var sliderItemWidth = sliderItems[0].offsetWidth;
    var slidersLength = sliderItems.length;
    var positionX = 0;
    var index = 0;
    var counter = 0;

    [...nextBtn].forEach((item) => item.addEventListener("click", function (i) {
        changeSlide(1);
    })
    );

    [...prevBtn].forEach((item) => item.addEventListener("click", function (i) {
        changeSlide(-1);
    })
    );

    [...tab].forEach((item) => item.addEventListener("click", function (i) {
        var showTab = document.getElementById(item.id);
        if (showTab.className != 'item itemTab is-show-popup') {
            [...tab].forEach(itemlist => itemlist.classList.remove("active"));
            if (item.className != "item itemTab active ") {
                item.className += " active";
            }
            [...tabPic].forEach(itemlist => itemlist.classList.remove("active"));
            var dataID = showTab.getAttribute('data-gallery-id');
            var elements = document.querySelector("[data-gallery-id='" + dataID + "']");
            elements.className += " active";
            showTabActive = document.querySelector(".show-tab.active");;
            sliderStage = showTabActive.querySelector(".owl-stage");
            sliderItems = showTabActive.querySelectorAll(".owl-item");
            sliderItemWidth = sliderItems[0].offsetWidth;
            slidersLength = sliderItems.length;
            positionX = 0;
            index = 0;
            counter = 0;
            sliderStage.style = 'transform: translate3d(' + positionX + 'px, 0px, 0px); transition: all 0.25s ease 0s; width: ' + sliderItemWidth * slidersLength + 'px;';
            counter = index + 1;
            showTabActive.querySelector(".counter").innerHTML = '(' + counter + '/' + slidersLength + ')';
            var btnPrev = showTabActive.getElementsByClassName("owl-prev");
            btnPrev[0].className = btnPrev[0].className.replace(" disabled", "");
            btnPrev[0].className += " disabled";
            var btnNext = showTabActive.getElementsByClassName("owl-next");
            btnNext[0].className = btnNext[0].className.replace(" disabled", "");
        }
        else {
            var blockTab = document.querySelector('.block-tab');
            blockTab.className += " show";
            var root = document.getElementsByTagName( 'html' )[0];
            root.className += 'overflow-hidden';

            var dataID = showTab.getAttribute('data-gallery-id');
            var elements = document.querySelectorAll("[data-gallery-id='" + dataID + "']");
            elements[1].className += " active";
            elements[2].className += " active";
        }
    })
    );

    function changeSlide(direction) {
        if (direction === 1) {
            positionX = positionX - sliderItemWidth;
            sliderStage.style = 'transform: translate3d(' + positionX + 'px, 0px, 0px); transition: all 0.25s ease 0s; width: ' + sliderItemWidth * slidersLength + 'px;';
            index++;
            counter = index + 1;
            showTabActive.querySelector(".counter").innerHTML = '(' + counter + '/' + slidersLength + ')';
            if (index >= slidersLength - 1) {
                var btn = showTabActive.getElementsByClassName("owl-next");
                btn[0].className += " disabled";
            }
            else {
                var btn = showTabActive.getElementsByClassName("owl-prev");
                btn[0].className = btn[0].className.replace(" disabled", "");
            }
        } else if (direction === -1) {
            positionX = positionX + sliderItemWidth;
            sliderStage.style = 'transform: translate3d(' + positionX + 'px, 0px, 0px); transition: all 0.25s ease 0s; width: ' + sliderItemWidth * slidersLength + 'px;';
            index--;
            counter = counter - 1;
            showTabActive.querySelector(".counter").innerHTML = '(' + counter + '/' + slidersLength + ')';
            if (index <= 0) {
                var btn = showTabActive.getElementsByClassName("owl-prev");
                btn[0].className += " disabled";
            }
            else {
                var btn = showTabActive.getElementsByClassName("owl-next");
                btn[0].className = btn[0].className.replace(" disabled", "");
            }
        }
    }
});
