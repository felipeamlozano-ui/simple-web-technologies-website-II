import React, { useState, useEffect } from "react";
import "../Carrinho.css";

function Carrinho() {
  const [dadosDocCarrinho, setDadosDocCarrinho] = useState([]);
  const [mensagens, setMensagens] = useState([]);
  const [usuarioLogado, setUsuarioLogado] = useState(null);

  // Checa se o usuário está logado
  const checarLogin = () => {
    fetch("/Projeto/verificacao.php", {
      method: "GET",
    })
      .then((res) => res.json())
      .then((resultado) => {
        if (resultado === true) {
          setUsuarioLogado(true);
          carregarCarrinho(); 
        } else {
          setUsuarioLogado(false);
          alert("Você precisa estar logado para acessar o carrinho.");
        }
      })
      .catch((err) => {
        console.error("Erro na verificação de login:", err);
        alert("Erro ao verificar login.");
      });
  };

  // Carrega o carrinho do usuário logado
  const carregarCarrinho = () => {
    fetch("/Projeto/carrinho.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      credentials: "include",
      body: JSON.stringify({}),
    })
      .then((res) => {
        if (!res.ok) {
          if (res.status === 401) {
            alert("Usuário não logado");
          }
          throw new Error("Erro HTTP: " + res.status);
        }
        return res.json();
      })
      .then((data) => {
        setDadosDocCarrinho(Array.isArray(data) ? data : []);
        setMensagens(Array.isArray(data) ? Array(data.length).fill(false) : []);
      })
      .catch((err) => {
        console.error("Erro ao carregar carrinho:", err);
        alert("Erro ao carregar carrinho.");
      });
  };

  // Carrega os itens confirmados
 const carregarItensConfirmados = () => {
  fetch("/Projeto/confirmados.php", {
    credentials: "include",
  })
    .then((res) => {
      if (!res.ok) {
        throw new Error("Erro HTTP: " + res.status);
      }
      return res.json();
    })
    .then((data) => {
      if (!data.confirmados) return;

      const confirmados = data.confirmados;
      const novosChecks = dadosDocCarrinho.map(
        (item) => (confirmados[item.Item_id] ? true : false)
      );

      setMensagens(novosChecks);
    })
    .catch((err) => {
      console.error("Erro ao carregar itens confirmados:", err);
    });
};

  useEffect(() => {
    checarLogin();
  }, []);

  useEffect(() => {
    if (dadosDocCarrinho.length > 0) {
      carregarItensConfirmados();
    }
  }, [dadosDocCarrinho]);

  // Confirma item
  const confirmarItem = (index) => {
    const copia = [...mensagens];
    copia[index] = !copia[index];
    setMensagens(copia);
    if (copia[index]) alert("Item confirmado!");

    const itemConfirmado = dadosDocCarrinho[index];
    fetch("/Projeto/confirmados.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      credentials: "include",
      body: JSON.stringify({
        quantidade: 1,
        Item_id: itemConfirmado.Item_id,
      }),
    }).catch((err) => {
      console.error("Erro ao enviar itens confirmados", err);
    });
  };

  if (usuarioLogado === false) {
    return <p>Você precisa estar logado para acessar o carrinho.</p>;
  }

  return (
    <div
      style={{
        display: "flex",
        flexDirection: "column",
        alignItems: "center",
        gap: "10px",
      }}
    >
      {dadosDocCarrinho.map((item, index) => (
        <div key={index} className="carrinho-item">
          <img
            className="carrinho-item-image"
            style={{ width: "120px", height: "120px", objectFit: "cover" }}
            src={item.imagePath}
            alt={item.text}
          />
          <div
            className="carrinho-item-text"
            style={{
              margin: 0,
              fontSize: "12px",
              fontWeight: "bold",
              whiteSpace: "pre-line",
              fontFamily: "Verdana",
              backgroundColor: "#a8a4a4af",
              padding: "5px",
            }}
          >
            {item.text.split("\n").map((linha, i) => (
              <p key={i} className={`linha-texto linha-${i}`}>
                {linha.trim()}
              </p>
            ))}

            <button
              className="button-item-text"
              onClick={() => confirmarItem(index)}
              style={{
                alignItems: "center",
                gap: "5px",
                border: "none",
                background: "transparent",
                cursor: "pointer",
              }}
            >
              <div
                className={`checkbox-circle ${
                  mensagens[index] ? "checked" : ""
                }`}
              ></div>
              <span>{mensagens[index] ? "OK" : ""}</span>
            </button>
          </div>
        </div>
      ))}
    </div>
  );
}

export default Carrinho;
