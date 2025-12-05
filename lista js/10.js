// a) Botão que mostra um alert ao clicar
document.getElementById("alertButton").addEventListener("click", () => {
    alert("Você clicou no botão!");
});

// b) Mostrar cada tecla digitada no console
document.getElementById("textInput").addEventListener("keydown", (event) => {
    console.log("Tecla pressionada:", event.key);
});

// c) Quando focar o campo, muda para amarelo
document.getElementById("textInput").addEventListener("focus", () => {
    document.getElementById("textInput").style.backgroundColor = "yellow";
});

// d) Quando perder o foco, volta ao normal
document.getElementById("textInput").addEventListener("blur", () => {
    document.getElementById("textInput").style.backgroundColor = "";
});

// e) Mouseover na div → muda o fundo
document.getElementById("hoverDiv").addEventListener("mouseover", () => {
    document.getElementById("hoverDiv").style.backgroundColor = "lightblue";
});

// f) Mouseout → restaura a cor
document.getElementById("hoverDiv").addEventListener("mouseout", () => {
    document.getElementById("hoverDiv").style.backgroundColor = "";
});

// g) Ao mudar o select, altera a cor do fundo da página
document.getElementById("colorSelect").addEventListener("change", (event) => {
    document.body.style.backgroundColor = event.target.value;
});