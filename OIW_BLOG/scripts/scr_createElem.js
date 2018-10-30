
function addElement() {
    
    var newdiv = document.createElement("div");
    newdiv.innerText = "Nowy div";
    newdiv.classList.add("newDiv");
    newdiv.style.setProperty("background-color", "#e1c00b");
    newdiv.style.setProperty("height", "75px");
    newdiv.style.setProperty("width", "100px");
    newdiv.style.setProperty("text-align", "center");
    newdiv.style.setProperty("margin-left", "50%");
    document.body.appendChild(newdiv);


    var btn = document.createElement("BUTTON");
    btn.innerText = "Nowy Przycisk";
    btn.style.setProperty("height", "50px");
    btn.style.setProperty("width", "100px");
    btn.style.setProperty("text-align", "center");
    btn.style.setProperty("margin-left", "50%");
    document.body.appendChild(btn);


    
}
