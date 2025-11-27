import React, { useState } from "react";
import "../Card.css";
function Card({ imagePath, text }) {
  const [isLoaded, setIsLoaded] = useState(false);
  const [isHovered, setIsHovered] = useState(false);
  const handleAddToCart = () => {
    fetch(
      "https://uncallously-productile-leighton.ngrok-free.dev/Projeto/verificacao.php",
      {
        method: "POST",
      }
    )
      .then((res) => res.json()) // transforma a resposta em JSON
      .then((resultado) => {
        if (resultado === true) {
          console.log("Item adicionado ao carrinho");
          fetch(
            "https://uncallously-productile-leighton.ngrok-free.dev/Projeto/carrinho.php",
            {
              //https://uncallously-productile-leighton.ngrok-free.dev/projeto/HTML/carrinho.php
              method: "POST",
              headers: { "Content-Type": "application/json" },
              body: JSON.stringify({
                text: text,
                imagePath: imagePath,
              }),
            }
          );
        } else {
          console.log("Não apto a adicionar ao carrinho");
          alert("Você precisa estar logado para adicionar itens ao carrinho!");
        }
      })
      .catch((erro) => console.error("Erro:", erro));
  };
  return (
    <div
      className="carde-element"
      onMouseEnter={() => setIsHovered(true)}
      onMouseLeave={() => setIsHovered(false)}
      style={{ position: "relative" }}
    >
      {!isLoaded && (
        <div className="loader-wrapper">
          <div className="animacaoload"></div>
        </div>
      )}

      <img
        className="imgejsx"
        src={imagePath}
        alt="Imagem"
        onLoad={() => setIsLoaded(true)}
        style={{
          opacity: isLoaded ? 1 : 0,
          transition: "opacity 0.5s ease, filter 0.3s ease",
          filter: isHovered ? "brightness(0.7)" : "brightness(1)",
        }}
      />

      <div
        className="addtocard-jsx"
        style={{
          opacity: isHovered ? 1 : 0,
          transition: "opacity 0.25s ease",
          zIndex: 10,
        }}
      >
        <button
          type="button"
          className="add-btn"
          onClick={(e) => {
            e.preventDefault();
            handleAddToCart();
            // document.getElementById("contador-cart").innerText =
            //   parseInt(document.getElementById("contador-cart").innerText) + 1;
            // alert("Item adicionado ao carrinho!");
          }}
        >
          Adicionar ao Carrinho
        </button>
        <br />
        <svg
          xmlns="http://www.w3.org/2000/svg"
          height="24px"
          viewBox="0 -960 960 960"
          width="24px"
          fill="#e3e3e3"
        >
          <path d="M440-600v-120H320v-80h120v-120h80v120h120v80H520v120h-80ZM280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM40-800v-80h131l170 360h280l156-280h91L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68.5-39t-1.5-79l54-98-144-304H40Z" />
        </svg>
      </div>

      <p className="pjesx">{text}</p>
    </div>
  );
}

export default Card;


// import React, { useState } from "react";
// import "../Cardemp.css";
// function Cardemp({ imagePath, text}) {
//   const [isLoaded, setIsLoaded] = useState(false);
//   const [isHovered, setIsHovered] = useState(false);
//   const handleAddToCart = () => {
//     fetch("http://localhost/Projeto/carrinho.php", {
//       method: "POST",
//       headers: { "Content-Type": "application/json" },
//       body: JSON.stringify({
//         text: text,
//         imagePath: imagePath,
//       }),
//     });
//   };
//   return (
//     <div
//       className="carde-element"
//       onMouseEnter={() => setIsHovered(true)}
//       onMouseLeave={() => setIsHovered(false)}
//       style={{ position: "relative" }}
//     >
//       {!isLoaded && (
//         <div className="loader-wrapper">
//           <div className="animacaoload"></div>
//         </div>
//       )}

//       <img
//         className="imgejsx"
//         src={imagePath}
//         alt="Imagem"
//         onLoad={() => setIsLoaded(true)}
//         style={{
//           opacity: isLoaded ? 1 : 0,
//           transition: "opacity 0.5s ease, filter 0.3s ease",
//           filter: isHovered ? "brightness(0.7)" : "brightness(1)",
//         }}
//       />

//       <div
//         className="addtocard-jsx"
//         style={{
//           opacity: isHovered ? 1 : 0,
//           transition: "opacity 0.25s ease",
//           zIndex: 10,
//         }}
//       >
//         <button
//           type="button"
//           className="add-btn"
//           onClick={(e) => {
//             e.preventDefault();
//             handleAddToCart();
//             document.getElementById("contador-cart").innerText =
//               parseInt(document.getElementById("contador-cart").innerText) + 1;
//           }}
//         >
//           Adicionar ao Carrinho
//         </button>
//         <br />
//         <svg
//           xmlns="http://www.w3.org/2000/svg"
//           height="24px"
//           viewBox="0 -960 960 960"
//           width="24px"
//           fill="#e3e3e3"
//         >
//           <path d="M440-600v-120H320v-80h120v-120h80v120h120v80H520v120h-80ZM280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM40-800v-80h131l170 360h280l156-280h91L692-482q-11 20-29.5 31T622-440H324l-44 80h480v80H280q-45 0-68.5-39t-1.5-79l54-98-144-304H40Z" />
//         </svg>
//       </div>

//       <p className="pjesx">{text}</p>
//     </div>
//   );
// }

// export default Cardemp;
