function myFunction() {
    var x = document.getElementsByClassName("sticky-top")[0];
    var y = document.getElementsByClassName("top-bar-container")[0];
    var z = document.getElementById("ok");
    var elements = document.getElementsByClassName("form-group");

    if (x.style.display === "block") {
        x.style.display = "none";
        y.style.marginTop = "0px";
        z.innerHTML="Log In";
    } else {
        x.style.display = "block";
        y.style.marginTop = "75px";
        z.innerHTML="Back";
        for (var i=0; i<elements.length-1; i+=1){
            elements[i].style.display = "block";
            elements[i].style.marginBottom = "10px";
        }
    }
}
