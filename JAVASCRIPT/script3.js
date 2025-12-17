document.addEventListener("DOMContentLoaded", () => {
  const p = document.querySelectorAll("p");
  const h1 = document.querySelectorAll("h1");
  const h2 = document.querySelectorAll("h2");

  function aplicarTema(tema) {
    document.body.style.backgroundColor = tema === "escuro" ? "black" : "white";

    const corTexto = tema === "escuro" ? "white" : "black";

    p.forEach((el) => (el.style.color = corTexto));
    h1.forEach((el) => (el.style.color = corTexto));
    h2.forEach((el) => (el.style.color = corTexto));
  }

  fetch("../cookie.php")
    .then((res) => {
      if (!res.ok) throw new Error("Erro ao buscar tema do cookie");
      return res.json();
    })
    .then((data) => {
      aplicarTema(data.valor);
    })
    .catch((err) => {
      console.error("Não foi possível carregar o tema:", err);
      aplicarTema("claro");
    });
});
