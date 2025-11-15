import { StrictMode } from "react";
import { createRoot } from "react-dom/client";
import "./Card.css";
import "./Cardemp.css";
import Card from "./components/Card.jsx";
import Carde from "./components/Cardemp.jsx";
const elements2 = document.querySelectorAll(".carde-element");
const elements = document.querySelectorAll(".card-element");
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