const visor = document.getElementById("visor");
const botaoIniciarPausar = document.getElementById("botao-iniciar-pausar");
const botaoZerar = document.getElementById("botao-zerar");
const listaParadas = document.getElementById("lista-paradas");

let intervalo = null;
let rodando = false;

let inicio = 0;
let acumulado = 0;     // tempo em ms

// Formata milissegundos em HH:MM:SS
function formatar(ms) {
    const totalSegundos = Math.floor(ms / 1000);
    const h = String(Math.floor(totalSegundos / 3600)).padStart(2, '0');
    const m = String(Math.floor((totalSegundos % 3600) / 60)).padStart(2, '0');
    const s = String(totalSegundos % 60).padStart(2, '0');
    return `${h}:${m}:${s}`;
}

// Atualiza o visor com o tempo atual
function atualizarVisor() {
    const agora = Date.now();
    const decorrido = acumulado + (agora - inicio);
    visor.textContent = formatar(decorrido);
}

// Inicia/pausa o cronômetro
function iniciarOuPausar() {
    if (!rodando) {
        // Iniciar
        inicio = Date.now();
        intervalo = setInterval(atualizarVisor, 100);  // atualiza a cada 100ms
        botaoIniciarPausar.textContent = "Pausar";
        rodando = true;

    } else {
        // Pausar
        clearInterval(intervalo);
        acumulado += Date.now() - inicio;  // salva o tempo acumulado até aqui

        registrarParada(acumulado);        // adiciona à lista de paradas
        botaoIniciarPausar.textContent = "Iniciar";
        rodando = false;
    }
}

// Zera tudo
function zerarCronometro() {
    clearInterval(intervalo);
    rodando = false;
    acumulado = 0;
    visor.textContent = "00:00:00";
    botaoIniciarPausar.textContent = "Iniciar";
    listaParadas.innerHTML = "";  // limpa a lista de paradas
}

// Salva uma parada
function registrarParada(ms) {
    const item = document.createElement("li");
    item.textContent = formatar(ms);
    listaParadas.appendChild(item);
}

botaoIniciarPausar.addEventListener("click", iniciarOuPausar);
botaoZerar.addEventListener("click", zerarCronometro);

// Atalhos de teclado
document.addEventListener("keydown", (e) => {
    if (e.code === "Space") {
        e.preventDefault();
        iniciarOuPausar();
    }
    if (e.key === "p") {
        if (rodando) iniciarOuPausar();
    }
    if (e.key === "z") {
        zerarCronometro();
    }
});
