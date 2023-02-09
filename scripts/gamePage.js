sideDivs = document.getElementsByClassName("sideDiv");
scoreDiv = document.getElementById("score");

sideDivs[0].style.backgroundImage = "url('img/" + gameId + "/cover.png')";
sideDivs[1].style.backgroundImage = "url('img/" + gameId + "/cover.png')";

if(score < 50){
    scoreDiv.style.backgroundColor = "red";
} else if(score < 80){
    scoreDiv.style.backgroundColor = "orange";
}