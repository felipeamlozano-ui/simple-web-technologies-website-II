document.addEventListener("DOMContentLoaded", function () {
  const input = document.getElementById("pesquisar");

  input.addEventListener("keypress", function (e) {
    if (e.key === "Enter") {
      e.preventDefault();
      buscar();
    }
  });

  function buscar() {
    const termo = input.value.trim();
    if (!termo) return;

    document.querySelectorAll(".highlight").forEach((span) => {
      span.replaceWith(span.textContent);
    });

    const regex = new RegExp(`(${termo})`, "gi");
    let encontrados = [];

    function highlightText(node) {
      if (node.nodeType === 3) {
        const matches = node.nodeValue.match(regex);
        if (matches) {
          const frag = document.createDocumentFragment();
          let lastIndex = 0;
          node.nodeValue.replace(regex, (match, offset) => {
            const index = node.nodeValue.indexOf(match, lastIndex);
            if (index > lastIndex) {
              frag.appendChild(
                document.createTextNode(node.nodeValue.slice(lastIndex, index))
              );
            }
            const span = document.createElement("span");
            span.className = "highlight";
            span.textContent = match;
            frag.appendChild(span);
            encontrados.push(span);
            lastIndex = index + match.length;
          });
          if (lastIndex < node.nodeValue.length) {
            frag.appendChild(
              document.createTextNode(node.nodeValue.slice(lastIndex))
            );
          }
          node.parentNode.replaceChild(frag, node);
        }
      } else if (node.nodeType === 1 && node.childNodes) {
        node.childNodes.forEach((child) => highlightText(child));
      }
    }

    highlightText(document.body);

    if (encontrados.length > 0) {
      encontrados[0].scrollIntoView({ behavior: "smooth", block: "center" });
    } else {
      alert("Nenhum resultado encontrado!");
    }
  }

  window.buscar = buscar;
});
const login = document.getElementById("login");
login.addEventListener("click", function () {
  setTimeout(function () {
    window.location.href = "../HTML/login.html";
  }, 200);
});
const suporte = document.getElementById("suporte");
suporte.addEventListener("click", function () {
  setTimeout(function () {
    window.location.href = "../HTML/suporte.html";
  }, 200);
});
const pp1 = document.getElementById("pp1");
const pp2 = document.getElementById("pp2");
const pp3 = document.getElementById("pp3");
const cc1 = document.getElementById("cc1");
const hh = document.getElementById("hh");
const btm = document.getElementById("btm");
const hhh = document.getElementById("hhh");
const promotion = document.getElementById("promotion");
promotion.addEventListener("click", function () {
  pp2.style.display = "none";
  pp2.style.paddingTop = "0px";
  pp3.style.display = "none";
  cc1.style.display = "block";
  hh.style.display = "block";
  pp1.style.display = "none";
  btm.style.display = "none";
  hhh.style.display = "block";
  pp2.style.display = "none";
  pp3.style.display = "none";
  cc1.style.display = "flex";
  pp1.style.paddingTop = "140px";
  cc1.paddingTop = "140px";
  btm.style.display = "block";
  btm.style.marginTop = "58px";
});
const produtos = document.getElementById("produtos");
produtos.addEventListener("click", function () {
  pp2.style.display = "none";
  pp3.style.display = "none";
  cc1.style.display = "none";
  hh.style.display = "none";
  pp1.style.paddingTop = "140px";
  btm.style.display = "block";

  pp2.style.display = "block";
  pp2.style.paddingTop = "140px";
  pp3.style.display = "none";
  cc1.style.display = "none";
  hh.style.display = "none";
  pp1.style.display = "none";
  btm.style.display = "block";
  hhh.style.display = "block";
});
btm.addEventListener("click", function () {
  pp2.style.display = "block";
  pp2.style.paddingTop = "0px";
  pp3.style.display = "block";
  cc1.style.display = "flex";
  hh.style.display = "block";
  pp1.style.display = "block";
  btm.style.display = "none";
  hhh.style.display = "block";
});
const contador = document.getElementById("contador-cart");
function atualizarQuantidadeCarrinho() {
  fetch(
    "https://uncallously-productile-leighton.ngrok-free.dev/Projeto/verificacao.php"
  )
    .then((res) => res.json())
    .then((situacaodousuario) => {
      if (situacaodousuario == true) {
        fetch(
          "https://uncallously-productile-leighton.ngrok-free.dev/Projeto/carrinho.php",
          {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify({ idcart: true }),
          }
        )
          .then((res) => res.json())
          .then((qtd) => {
            if (contador) {
              contador.innerText = qtd;
              console.log("Atualizado");
            } else {
              console.log("contador-cart NÃO encontrado!");
            }
          });
      }
      else{
        console.log("Usuario não logado")
        contador.innerText = 0;
      }
    });
}

document.addEventListener("DOMContentLoaded", () => {
  setInterval(() => {
    atualizarQuantidadeCarrinho();
  }, 1000);
});
const toggle = document.getElementById("theme-toggle");
let tema = null;
toggle.addEventListener("change", () => {
  if (toggle.checked) {
    console.log("Modo escuro ativado!");
    document.body.style.backgroundColor = "black";
    tema = "black";
    fetch(
      "https://uncallously-productile-leighton.ngrok-free.dev/Projeto/configuracoes.php",
      {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({tema}),
      }
    );
  } else {
    console.log("Modo claro ativado!");
    document.body.style.backgroundColor = "white";
    tema = "white";
    fetch(
      "https://uncallously-productile-leighton.ngrok-free.dev/Projeto/configuracoes.php",
      {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({tema}),
      }
    );
  }
});
