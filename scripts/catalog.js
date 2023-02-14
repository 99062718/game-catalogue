maxPrice = 9999;

document.getElementById("dropdown").onclick = function(){
    content = document.getElementById("dropdownContent")
    content.style.display = (content.style.display == "block") ? "none" : "block"
}

document.getElementById("price").onclick = function(){
    maxPrice = parseInt(prompt("Set max price:"));
}