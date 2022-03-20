window.addEventListener("load", function () {
    const filterstar = this.document.querySelectorAll('.check-filterstar');

    [...filterstar].forEach((item) => item.addEventListener("click", function (i) {
        [...filterstar].forEach(itemlist => itemlist.classList.remove("active"));
        if (item.className != "check-filterstar active ") {
            item.className += " active";
        }
    })
    );

    const boxsort = this.document.querySelector('.boxsort-click-show');
    const boxsortlist = this.document.querySelector('.boxsort-list');
    const boxsortlistitem = this.document.querySelectorAll('.boxsort-list li');
    boxsort.addEventListener("click", function (i) {
        if (boxsort.className != "boxsort-click-show active") {
            boxsort.className += " active";
            boxsortlist.style = "display:block";
        }
        else {
            boxsort.className = boxsort.className.replace(" active", "");
            boxsortlist.style = "display:none";
        }
    });

    [...boxsortlistitem].forEach((item) => item.addEventListener("click", function (i) {
        document.querySelector(".boxsort-click-show.active").innerHTML = item.innerHTML;
        boxsortlist.style = "display:none";
        boxsort.className = boxsort.className.replace(" active", "");
    })
    );
});

//Hiển thị phản hồi
function showRatingCmtChild(id) {
    var reply1 = document.getElementsByClassName(id + ' reply hide');
    reply1[0].className = reply1[0].className.replace(" hide", "");
    var reply2 = document.getElementsByClassName(id + ' childC-item hide');
    reply2[0].className = reply2[0].className.replace(" hide", "");
}
