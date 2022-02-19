function filterDiscount(){
    var a = document.getElementsByClassName("c-checkitem");
    // console.log(a);
    if(a[0].className == "c-checkitem")
    {
        a[0].className += " active";
    }
    else
    {
        a[0].className = a[0].className.replace(" active", "");
    }
}
function filterZeroPercent(){
    var a = document.getElementsByClassName("c-checkitem");
    // console.log(a);
    if(a[1].className == "c-checkitem")
    {
        a[1].className += " active";
    }
    else
    {
        a[1].className = a[1].className.replace(" active", "");
    }
}
function filterMonopoly(){
    var a = document.getElementsByClassName("c-checkitem");
    // console.log(a);
    if(a[2].className == "c-checkitem")
    {
        a[2].className += " active";
    }
    else
    {
        a[2].className = a[2].className.replace(" active", "");
    }
}

function filterNew(){
    var a = document.getElementsByClassName("c-checkitem");
    // console.log(a);
    if(a[3].className == "c-checkitem")
    {
        a[3].className += " active";
    }
    else
    {
        a[3].className = a[3].className.replace(" active", "");
    }
}
