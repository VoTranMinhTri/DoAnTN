var sortSelect = document.getElementById("select");
var sortSelectList = document.getElementById("list");
var sortShow = document.getElementsByClassName("sort-show");
const a = document.querySelectorAll(".sort a")
sortSelect.onclick = function() {
    if(sortSelectList.style.display == "none")
    {
        sortSelectList.style = "display:block";
    }
    else
    {
        sortSelectList.style = "display:none";
    }
};

[...a].forEach((item) =>item.addEventListener("click",function(i){
    [...a].forEach(itemlist =>itemlist.classList.remove("check"));
    if(item.className != "check")
    {
        item.className +="check";
    }
    document.querySelector(".sort-select .sort-show").innerHTML = item.text;
    })
);

