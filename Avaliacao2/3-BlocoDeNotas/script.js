document.addEventListener("DOMContentLoaded", () => {
    
    const listaEl = document.getElementById("lista");
    const textoEl = document.getElementById("texto");
    const btnNova = document.getElementById("btnNova");
    const btnSalvar = document.getElementById("btnSalvar");
    const btnExcluir = document.getElementById("btnExcluir");

    let notas = JSON.parse(localStorage.getItem("notas")) || [];
    let indiceSelecionado = null;

    // Salva a lista de notas no navegador para não perder ao recarregar a página
    function salvar() {
        localStorage.setItem("notas", JSON.stringify(notas));
    }

    // Atualiza a lista visual de notas na tela
    // Ela recria os <li> toda vez que algo muda
    function mostrarNotas() {
        listaEl.innerHTML = "";

        notas.forEach((nota, i) => {
            const li = document.createElement("li");
            // Mostramos apenas parte do texto para não ocupar muito espaço
            li.textContent = nota.text.substring(0, 80) || "(vazia)";
            li.onclick = () => abrirNota(i);
            listaEl.appendChild(li);
        });

        // Caso não exista nenhuma nota cadastrada
        if (notas.length === 0) {
            const li = document.createElement("li");
            li.textContent = "Nenhuma nota";
            listaEl.appendChild(li);
        }
    }

    // Carrega o texto da nota selecionada para o campo de edição
    function abrirNota(i) {
        indiceSelecionado = i;
        textoEl.value = notas[i].text;
    }

    btnNova.onclick = () => {
        indiceSelecionado = null;
        textoEl.value = "";
    };

    btnSalvar.onclick = () => {
        const texto = textoEl.value.trim();
        if (texto === "") {
            alert("A nota está vazia!");
            return;
        }

        if (indiceSelecionado === null) {
            notas.push({ text: texto });
        } else {
            notas[indiceSelecionado].text = texto;
        }

        salvar();
        mostrarNotas();
    };

    btnExcluir.onclick = () => {
        if (indiceSelecionado === null) {
            alert("Nenhuma nota selecionada!");
            return;
        }

        if (confirm("Excluir esta nota?")) {
            notas.splice(indiceSelecionado, 1);
            indiceSelecionado = null;
            textoEl.value = "";
            salvar();
            mostrarNotas();
        }
    };

    mostrarNotas();
});