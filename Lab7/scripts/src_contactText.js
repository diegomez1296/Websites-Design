function contactText() {

    // .delay(1000)
    // .fadeIn(1000);
    var contact_icons = document.getElementById("contact_icons");

    if (contact_icons.style.display == "block") {
        contact_icons.style.display = "none";
        //$('#contact_icons').slideUp();
    }
    else {
      contact_icons.style.display = "block";
    }
}