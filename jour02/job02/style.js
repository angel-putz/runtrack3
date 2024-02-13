window.onload = function() {
    document.getElementById("button").addEventListener("click", citation);
}

function citation() {
    var text = document.getElementById("citation").innerText;
    console.log(text);
}