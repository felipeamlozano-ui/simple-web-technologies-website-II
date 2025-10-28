document.addEventListener("DOMContentLoaded", function() {
    const input = document.getElementById("pesquisar");

    input.addEventListener("keypress", function(e) {
        if (e.key === "Enter") {
            e.preventDefault();
            buscar();
        }
    });

    function buscar() {
        const termo = input.value.trim();
        if (!termo) return;

        document.querySelectorAll(".highlight").forEach(span => {
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
                            frag.appendChild(document.createTextNode(node.nodeValue.slice(lastIndex, index)));
                        }
                        const span = document.createElement("span");
                        span.className = "highlight";
                        span.textContent = match;
                        frag.appendChild(span);
                        encontrados.push(span);
                        lastIndex = index + match.length;
                    });
                    if (lastIndex < node.nodeValue.length) {
                        frag.appendChild(document.createTextNode(node.nodeValue.slice(lastIndex)));
                    }
                    node.parentNode.replaceChild(frag, node);
                }
            } else if (node.nodeType === 1 && node.childNodes) {
                node.childNodes.forEach(child => highlightText(child));
            }
        }

        highlightText(document.body);

        if (encontrados.length > 0) {
            encontrados[0].scrollIntoView({behavior: "smooth", block: "center"});
        } else {
            alert("Nenhum resultado encontrado!");
        }
    }

    window.buscar = buscar;
});
const login = document.getElementById('login');
login.addEventListener("click", function() {
    setTimeout(function() {
    window.location.href = "../HTML/login.html";
}, 200);
});
const suporte = document.getElementById('suporte');
suporte.addEventListener("click", function() {
    setTimeout(function() {
    window.location.href = "../HTML/suporte.html";
}, 200);
});
const pp1 = document.getElementById('pp1');
const pp2 = document.getElementById('pp2');
const pp3 = document.getElementById('pp3');
const cc1 = document.getElementById('cc1');
const hh = document.getElementById('hh');
const btm = document.getElementById('btm');
const hhh = document.getElementById('hhh');
const promotion = document.getElementById('promotion');
promotion.addEventListener("click", function() {
    pp2.style.display = "none";
    pp2.style.paddingTop = "0px"
    pp3.style.display = "none";
    cc1.style.display = "block";
    hh.style.display = "block";
    pp1.style.display = "none";
    btm.style.display = "none";
    hhh.style.display = "block";
    pp2.style.display = "none";
    pp3.style.display = "none";
    cc1.style.display = "flex";
    pp1.style.paddingTop = "140px"
    cc1.paddingTop = "140px"
    btm.style.display = "block";
    btm.style.marginTop = "58px"
});
const produtos = document.getElementById('produtos');
produtos.addEventListener("click", function() {
    pp2.style.display = "none";
    pp3.style.display = "none";
    cc1.style.display = "none";
    hh.style.display = "none";
    pp1.style.paddingTop = "140px"
    btm.style.display = "block";

    pp2.style.display = "block";
    pp2.style.paddingTop = "140px"
    pp3.style.display = "none";
    cc1.style.display = "none";
    hh.style.display = "none";
    pp1.style.display = "none";
    btm.style.display = "block";
    hhh.style.display = "block";
});
btm.addEventListener("click", function() {
    pp2.style.display = "block";
    pp2.style.paddingTop = "0px"
    pp3.style.display = "block";
    cc1.style.display = "flex";
    hh.style.display = "block";
    pp1.style.display = "block";
    btm.style.display = "none";
    hhh.style.display = "block";
});
// Nao mexe nessa parte, bagui dificil de configurar do cão
document.querySelectorAll('.card').forEach(card => {
    const loader = card.querySelector('.animacaoload');
    const img = card.querySelector('img');
    const wrapper = card.querySelector('.loader-wrapper')
    loader.style.width = '50px';
    loader.style.height = '50px';
    loader.style.border = '5px solid #f3f3f3';
    loader.style.borderTop = '5px solid #3498db';
    loader.style.borderRadius = '50%';
    loader.style.animation = 'girar 1s linear infinite';
    loader.style.margin = '10px auto';
    loader.style.position = 'absolute';
    const style = document.createElement('style');
    style.textContent = `
        @keyframes girar {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
    `;
    const preco = card.querySelector('.preco')
    preco.style.opacity = '0';
    img.style.opacity = '0';
    document.head.appendChild(style);
    const mostrarImagem = () => {
        loader.style.animation = 'none';
        wrapper.style.display = 'none';
        loader.style.transition = 'opacity 0.5s ease';
        loader.style.opacity = 0;
        setTimeout(() => {
            loader.style.display = 'none';
            img.style.display = 'block';
            img.style.opacity = 0;
            img.style.transition = 'opacity 0.5s ease';
            preco.style.opacity = 1;
            requestAnimationFrame(() => {
                img.style.opacity = 1;
            });
        }, 500);
    };
    img.addEventListener('load', mostrarImagem);
    if (img.complete) {
        mostrarImagem();
    }
});