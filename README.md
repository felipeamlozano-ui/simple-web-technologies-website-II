# Simple Web Technologies — React Integration

## Descrição

Este projeto tem como objetivo integrar componentes React em uma estrutura de páginas HTML tradicional. Diferente de aplicações SPA (Single Page Application), aqui o React é utilizado de forma pontual, sendo injetado em elementos específicos do DOM já existentes.

A proposta consiste em demonstrar, na prática, como utilizar o React para enriquecer interfaces sem a necessidade de reestruturar completamente uma aplicação web.

---

## Objetivo

O principal objetivo do projeto foi:

* Aplicar conceitos de componentização com React
* Integrar React a páginas HTML estáticas
* Utilizar dados dinâmicos via atributos HTML (`data-*`)
* Trabalhar com múltiplas raízes React (multi-root)
* Organizar componentes e estilos de forma modular

---

## Estrutura do Projeto

```
React/
│── src/
│   ├── components/
│   │   ├── Card.jsx
│   │   ├── Cardemp.jsx
│   │   ├── Carrinho.jsx
│   │   ├── Produto.jsx
│   │   └── TestHeader.jsx
│   │
│   ├── Card.css
│   ├── Cardemp.css
│   ├── Carrinho.css
│   ├── Produto.css
│   ├── TestHeader.css
│   │
│   └── main.jsx
│
├── index.html
├── package.json
└── vite.config.js
```

---

## Implementação

### 1. Integração com HTML existente

O projeto parte de uma estrutura HTML já definida. Elementos que devem receber componentes React são identificados por classes específicas e atributos `data-*`.

Exemplo:

```html
<div 
  class="card-element" 
  data-img="produto.png" 
  data-text="Produto Exemplo">
</div>
```

Esses atributos funcionam como fonte de dados para os componentes React.

---

### 2. Seleção de elementos no DOM

No arquivo `main.jsx`, é realizada a seleção dos elementos que servirão como ponto de montagem para os componentes React:

```javascript
const elements = document.querySelectorAll(".card-element");
```

Essa abordagem permite identificar múltiplos pontos da página onde o React será utilizado.

---

### 3. Criação de múltiplas raízes React

Para cada elemento encontrado, é criada uma raiz independente utilizando a API moderna do React (`createRoot`):

```javascript
elements.forEach((el) => {
  const root = createRoot(el);
});
```

Essa estratégia caracteriza o uso de múltiplas instâncias do React dentro da mesma página, sem centralizar tudo em uma única árvore.

---

### 4. Renderização dinâmica de componentes

Cada elemento recebe um componente React, com dados extraídos diretamente dos atributos HTML:

```jsx
root.render(
  <Card 
    imagePath={el.dataset.img} 
    text={el.dataset.text} 
  />
);
```

Isso garante desacoplamento entre estrutura HTML e lógica de renderização.

---

### 5. Componentização

O projeto foi estruturado com múltiplos componentes reutilizáveis:

#### Card.jsx

Responsável por exibir informações visuais básicas, como imagem e texto.

#### Cardemp.jsx

Variação do componente Card, possivelmente com alterações de estilo ou comportamento.

#### Produto.jsx

Representa um item individual, podendo ser expandido para incluir lógica de negócio.

#### Carrinho.jsx

Estrutura inicial de um carrinho de compras, ainda sem gerenciamento de estado complexo.

#### TestHeader.jsx

Componente auxiliar utilizado para testes de renderização e estrutura.

---

### 6. Estilização

Cada componente possui seu próprio arquivo CSS, promovendo separação de responsabilidades:

* Estilos isolados por componente
* Maior facilidade de manutenção
* Redução de conflitos globais

---

### 7. Uso do React StrictMode

Os componentes são renderizados dentro do `StrictMode`, com o objetivo de:

* Identificar práticas inadequadas
* Garantir maior segurança no desenvolvimento
* Antecipar problemas em produção

---

## Tecnologias Utilizadas

* React
* React DOM
* Vite
* JavaScript (ESModules)
* CSS
* ESLint

---

## Execução do Projeto

### Instalação de dependências

```
npm install
```

### Ambiente de desenvolvimento

```
npm run dev
```

### Build de produção

```
npm run build
```

### Visualização da build

```
npm run preview
```

---

## Resultados Obtidos

Com este projeto, foi possível:

* Compreender como o React pode ser utilizado fora do contexto de SPA
* Aplicar renderização dinâmica baseada em dados do DOM
* Trabalhar com múltiplas instâncias independentes do React
* Desenvolver componentes reutilizáveis com organização modular

---

## Possíveis Extensões

* Implementação de gerenciamento de estado (Context API ou Redux)
* Integração com APIs externas
* Expansão do carrinho com funcionalidades reais
* Implementação de roteamento
* Melhoria da responsividade

---

## Conclusão

O projeto demonstra uma abordagem prática para utilização do React em aplicações que não foram originalmente construídas com esse framework. Essa estratégia é especialmente útil para modernização gradual de sistemas legados, permitindo a adoção de tecnologias modernas sem necessidade de reescrita completa.

---

## Autor

Felipe Augusto

---
