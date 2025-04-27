 

---

# 📄 Projeto: Consulta de CEP - Ryan

## 🧩 Estrutura dos Arquivos

- `index.html`
- `script.js`

---

## 📑 index.html

Este arquivo cria a estrutura básica da página web:

- Campo de entrada para digitar o CEP (`input`).
- Botão para **consultar** o CEP.
- Botão para **limpar** a consulta (recarrega a página).
- Um **card** para exibir o resultado da consulta.
- Estilização usando **Bootstrap 5.3.3**.

---

## 📜 script.js

O `script.js` contém toda a lógica de interação com a **API pública ViaCEP**.

A API ViaCEP é uma **API REST** gratuita que retorna informações de endereço a partir de um número de CEP.

---

## ✨ Funcionalidades Baseadas na API

### 1. Buscar Informações de um CEP

Função principal que consulta a API ViaCEP:

```javascript
function consultarCEP() {
    fetch(`https://viacep.com.br/ws/${CEP.value}/json/`)
        .then(response => {
            if (!response.ok) {
                throw new Error("Erro ao consultar o CEP")
            }
            return response.json()
        })
        .then(data => {
            // Tratamento dos dados recebidos
        })
        .catch(error => {
            // Tratamento de erros
        });
}
```

- **O que acontece?**
  - Faz uma requisição **GET** para `https://viacep.com.br/ws/{CEP}/json/`.
  - Se a resposta for válida (`status 200 OK`), transforma o resultado em **JSON**.
  - Caso o CEP esteja incorreto ou haja erro de rede, gera uma mensagem de erro.

---

### 2. Tratar e Exibir o Resultado

Após obter os dados, o script organiza as informações:

```javascript
.then(data => {
    const bairro = data.bairro || "Não informado";
    const rua = data.logradouro || "Não informado";
    const cidade = data.localidade || "Não informado";
    const complemento = data.complemento || "Não informado";
    const estado = data.uf || "Não informado";

    const resultDiv = document.getElementById('result');
    resultDiv.innerHTML = `
        <p><strong>CEP: </strong>${CEP.value}</p>
        <p><strong>Estado: </strong>${estado}</p>
        <p><strong>Cidade: </strong>${cidade}</p>
        <p><strong>Bairro: </strong>${bairro}</p>
        <p><strong>Rua: </strong>${rua}</p>
        <p><strong>Complemento: </strong>${complemento}</p>
    `;
})
```

- **Campos que podem ser exibidos:**
  - CEP
  - Estado
  - Cidade
  - Bairro
  - Rua
  - Complemento

- **Obs**: Se algum campo vier vazio no JSON, é substituído por `"Não informado"`.

---

### 3. Tratar Erros de Consulta

Se houver erro na consulta, o sistema informa ao usuário:

```javascript
.catch(error => {
    document.getElementById('result').innerHTML = `
        <div class="alert alert-danger" role="alert">
            Erro ao consultar o CEP. Verifique se o CEP está correto.
        </div>
    `;

    console.error('Erro ao buscar o CEP:', error);
})
```

- Exibe uma mensagem de alerta no HTML.
- Mostra o erro no console do navegador.

---

## 🔥 Fluxo Resumido da API

```mermaid
flowchart TD
    A[Usuário digita o CEP] --> B[Clique no botão "Consultar"]
    B --> C[Faz requisição GET na API ViaCEP]
    C -->|Sucesso| D[Exibe dados de endereço]
    C -->|Erro| E[Exibe mensagem de erro]
```

---

## 📋 Funcionalidades da API REST (ViaCEP)

| Requisição | URL                                | Método | Descrição                         |
|------------|------------------------------------|--------|-----------------------------------|
| Buscar CEP | `https://viacep.com.br/ws/{CEP}/json/` | GET    | Retorna os dados do endereço baseado no CEP |

- **Formato da resposta**: JSON
- **Campos principais retornados**:
  - `cep`
  - `logradouro` (rua)
  - `bairro`
  - `localidade` (cidade)
  - `uf` (estado)
  - `complemento`

---

## 🛠 Tecnologias Utilizadas

- **HTML5**
- **CSS3** (via Bootstrap)
- **JavaScript ES6**
- **API REST ViaCEP**

---
 
