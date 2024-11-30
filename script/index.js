const colors = ["#793FDF", "#7091F5",  "#97FFF4", "#FFFD8C"];

function createCard(userText){

    var newCard = document.createElement("div");
    
    //var text = document.getElementById("input").value;
    var textNode = document.createTextNode(userText);

    var parentDiv = document.getElementById("main-section");
    var currentDiv = document.getElementById("card4");

    newCard.appendChild(textNode);
    newCard.setAttribute('class', 'card');
    newCard.style.backgroundColor = colors[Math.floor(Math.random() * 4)];

    parentDiv.insertBefore(newCard, currentDiv);
}

function showTextBox(){
    var textDiv = document.createElement("div");
    var textBox = document.createElement("textarea");
    var mainSection = document.getElementById("main-section");
    textBox.setAttribute("type", "text");
    textBox.setAttribute("id", "input")
    textDiv.appendChild(textBox);

    textDiv.setAttribute("class", "text-box-div");
    textBox.setAttribute("class", "text-box-style");
    

    document.body.insertBefore(textDiv, mainSection);

}