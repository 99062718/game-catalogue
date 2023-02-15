maxPrice = 9999;
games = document.getElementsByClassName("games");

document.getElementById("dropdown").onclick = function(){
    content = document.getElementById("dropdownContent")
    content.style.display = (content.style.display == "block") ? "none" : "block"
}

document.getElementById("price").onclick = function(){
    maxPrice = parseFloat(prompt("Set max price:"));
}

document.getElementById("okButton").onclick = function(){
    for (x = 0; x < games.length; x++){
        if (maxPrice < gameData[x]["price"]){
            games[x].style.display = "none";
            continue;
        }
        games[x].style.display = "inline-block";
    }
}