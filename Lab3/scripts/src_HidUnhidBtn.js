function buttonScr() {

    var article_button = document.getElementById("article_button");
    var article_intro = document.getElementById("article_intro");
    var article_all = document.getElementById("article_all");

    if (document.getElementById("article_button").value == 0) {
        article_button.innerText = "Mniej..."
        article_button.value = 1;
        article_intro.style.display = "none";
        article_all.style.display = "block";
    }
    else {
        article_button.innerText = "Więcej..."
        article_button.value = 0;
        article_all.style.display = "none";
        article_intro.style.display = "block";
    }
} 