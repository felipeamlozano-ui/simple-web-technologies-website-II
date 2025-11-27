import { StrictMode } from "react";
import { createRoot } from "react-dom/client";
import "./Card.css";
import "./Cardemp.css";
import "./Produto.css";
import Produto from "./components/Produto.jsx";
import Card from "./components/Card.jsx";
import Carde from "./components/Cardemp.jsx";
import Carrinho from "./components/Carrinho.jsx";
const elements2 = document.querySelectorAll(".carde-element");
const elements = document.querySelectorAll(".card-element");
const carrinho = document.querySelectorAll(".carrinho-element");
const produtos = document.querySelectorAll(".produto-element");
elements.forEach((el) => {
  const imagePath = el.dataset.img;
  const text = el.dataset.text;
  const root = createRoot(el);
  root.render(
    <StrictMode>
      <Card imagePath={imagePath} text={text} />
    </StrictMode>
  );
});
elements2.forEach((el1) => {
  const imagePath1 = el1.dataset.img;
  const text1 = el1.dataset.text;
  const root1 = createRoot(el1);
  root1.render(
    <StrictMode>
      <Carde imagePath={imagePath1} text={text1} />
    </StrictMode>
  );
});
produtos.forEach((el3) => {
  const imagePath3 = el3.dataset.img;
  const text3 = el3.dataset.text;
  const root3 = createRoot(el3);
  root3.render(
    <StrictMode>
      <Produto imagePath={imagePath3} text={text3} />
    </StrictMode>
  );
});
carrinho.forEach((el1) => {
  const root2 = createRoot(el1);
  root2.render(
    <StrictMode>
        <h1 style={{
          whiteSpace: "no-wrap",
          fontFamily: "Verdana",
          fontSize: "20px",
          fontWeight: "bold",
          marginBottom: "10px",
        }}>
          Carrinho de Compras:
        </h1>
        <Carrinho/>
    </StrictMode>
  );
});