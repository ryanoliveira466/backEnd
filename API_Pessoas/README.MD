 

---

# 📄 Projeto: Listagem de Usuários

## 🧩 Estrutura dos Arquivos

- `index.html`
- `style.css`
- `script.js`

---

## 📑 index.html

Define a **estrutura da página web**:

- Campo de busca de usuários (`input`).
- Botão de **recarregar** a página.
- Tabela onde são listados os usuários.
- Usa o **Bootstrap 5.3.3** para o layout e estilização.

---

## 🎨 style.css

Responsável por:

- Reset de estilos padrão dos navegadores.
- Estilo base para deixar o layout responsivo.
- Organização dos elementos usando **Flexbox** (header, main, footer).

---

## 📜 script.js

Toda a interação com a **API REST** ocorre aqui.

Este projeto usa a **API DummyJSON** para buscar e listar usuários de forma dinâmica.

---

## 🚀 Funcionalidades Back-end / API REST

A API utilizada é:  
🔗 `https://dummyjson.com/users`

Esta API REST retorna dados de usuários no formato **JSON**.

---

## ✨ Métodos Utilizados da API

### 1. Buscar Todos os Usuários

```javascript
async function apiPessoas() {
    const pessoas = await fetch("https://dummyjson.com/users")
        .then(response => {
            if (!response.ok) {
                throw new Error("Erro ao consultar os usuários");
            }
            return response.json();
        })
        .then(data => {
            // Manipula os dados dos usuários
        });
}
```

- **Método HTTP:** `GET`
- **Endpoint:** `/users`
- **O que faz?**
  - Envia uma requisição `GET` para o servidor.
  - Recebe um array de usuários.
  - Caso a resposta não seja `200 OK`, lança um erro.

---

### 2. Renderizar Usuários na Tabela

Após receber a resposta da API:

```javascript
data.users.forEach(element => {
    // Cria linhas da tabela com dados dos usuários
});
```

- **Dados usados:**
  - `id`
  - `firstName`
  - `lastName`
  - `email`
  - `image` (avatar)

Cada usuário é adicionado como uma nova linha (`<tr>`) na tabela HTML.

---

### 3. Buscar Usuário Pelo Nome (Filtro Dinâmico)

```javascript
document.getElementById('inputUser').addEventListener('input', function () {
    // Filtra os usuários conforme o que é digitado
});
```

- A cada digitação no campo de busca:
  - Filtra os usuários que correspondem ao texto.
  - Atualiza dinamicamente a tabela com os resultados filtrados.

**Filtro aplicado apenas no front-end** (não faz nova requisição para o back-end).

---

### 4. Recarregar Página

```javascript
function recarregar() {
    location.reload();
}
```

- Simplesmente recarrega a página, restaurando a tabela para o estado inicial com todos os usuários.

---

## 📋 Resumo das Operações com a API REST

| Ação | Método HTTP | Endpoint | Resultado |
|-----|--------------|----------|------------|
| Buscar todos os usuários | GET | `/users` | Lista de usuários (JSON) |
| Filtrar usuários localmente | - | - | Filtro de dados no front-end |

---

 

## 📚 Sobre a API DummyJSON

- **Base URL:** `https://dummyjson.com`
- **Endpoint utilizado:** `/users`
- **Tipo de dados:** JSON
- **Formato de um objeto usuário:**
  ```json
  {
    "id": 1,
    "firstName": "Terry",
    "lastName": "Medhurst",
    "email": "atuny0@sohu.com",
    "image": "https://robohash.org/hicveldicta.png"
  }
  ```

---

## 🛠 Tecnologias Utilizadas

- **HTML5**
- **CSS3** (com Bootstrap 5)
- **JavaScript (ES6+)**
- **API REST pública (DummyJSON)**

---

 
