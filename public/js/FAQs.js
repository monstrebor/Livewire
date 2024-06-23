function toggleVisibility(id) {
    var questionText = document.getElementById(id);
    if (questionText.style.display === "none" || questionText.style.display === "") {
        questionText.style.display = "block";
    } else {
        questionText.style.display = "none";
    }
}