window.addEventListener("load", function () {
    const btnClose = this.document.querySelector('.btn-closemenu');
    const tab = this.document.querySelectorAll('.tab-item');
    const content = this.document.querySelectorAll('.content-t');
    btnClose.addEventListener("click", function (i) {
        var blockTab = document.querySelector('.block-tab');
        blockTab.className = blockTab.className.replace(" show", "");
        var root = document.getElementsByTagName('html')[0];
        root.className = root.className.replace("overflow-hidden", "");
        [...tab].forEach(itemlist => itemlist.classList.remove("active"));
        [...content].forEach(itemlist => itemlist.classList.remove("active"));
    });

    [...tab].forEach((item) => item.addEventListener("click", function (i) {
        [...tab].forEach(itemlist => itemlist.classList.remove("active"));
        if (item.className != "tab-item active ") {
            item.className += " active";
        }
        [...content].forEach(itemlist => itemlist.classList.remove("active"));
        var dataID = item.getAttribute('data-tab-id');
        console.log(dataID);
        var elements = document.querySelectorAll("[data-tab-id='" + dataID + "']");
        elements[1].className += " active";
        console.log(elements);
    })
    );


});

function showBlockTabUnBox() {
    var blockTab = document.querySelector('.block-tab');
    blockTab.className += " show";
    var root = document.getElementsByTagName('html')[0];
    root.className += 'overflow-hidden';
    var elements = document.querySelectorAll("[data-gallery-id='unbox-gallery']");
    elements[1].className += " active";
    elements[2].className += " active";
}

function showBlockTabSpecification() {
    var blockTab = document.querySelector('.block-tab');
    blockTab.className += " show";
    var root = document.getElementsByTagName('html')[0];
    root.className += 'overflow-hidden';
    var elements = document.querySelectorAll("[data-gallery-id='specification-gallery']");
    elements[1].className += " active";
    elements[2].className += " active";
}

function showBlockTabArticle() {
    var blockTab = document.querySelector('.block-tab');
    blockTab.className += " show";
    var root = document.getElementsByTagName('html')[0];
    root.className += 'overflow-hidden';
    var elements = document.querySelectorAll("[data-gallery-id='article-gallery']");
    elements[1].className += " active";
    elements[2].className += " active";
}

function showRatingCmtChild(id) {
    var reply1 = document.getElementsByClassName(id + ' reply hide');
    reply1[0].className = reply1[0].className.replace(" hide", "");
    var reply2 = document.getElementsByClassName(id + ' childC-item hide');
    reply2[0].className = reply2[0].className.replace(" hide", "");
}
