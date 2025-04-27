

---

# 📄 Projeto: Cadastro de Carros

## 🧩 Estrutura dos Arquivos

- `index.html`
- `script.js`
- `style.css`

---

## 📑 index.html

Responsável pela estrutura da página:

- Formulário para adicionar um novo carro (marca, nome, preço, tipo de combustível).
- Tabela para exibir todos os carros cadastrados.
- Importação de Bootstrap 5.3.3 para estilização.
- Carregamento dos scripts JS (`script.js`) no final do `body`.
- Spinner de carregamento exibido enquanto a lista de carros é carregada.

---

## 📜 script.js

Contém toda a **lógica de funcionamento** usando **JavaScript** e **fetch API**.

---

## ✨ Funcionalidades e Métodos

### 1. Buscar todos os carros cadastrados

```javascript
async function fetchData() {
    const tableBody = document.getElementById('tableCarros');
    try {
        const spinner = document.getElementById('divBotaoCarregando');
        spinner.remove(); // Remove o spinner após carregar os dados

        const response = await fetch('https://carangas.herokuapp.com/cars');
        const data = await response.json();
        const cars = data;
        tableBody.innerHTML = "";

        cars.reverse().forEach(function (car) {
            const fuelText = getFuelName(car.gasType);
            const row = `
            <tr data-id="${car._id}">
              <td>${car.brand}</td>
              <td>${car.name}</td>
              <td>${car.price}</td>
              <td>${fuelText}</td>
              <td><button class="btn btn-warning container-fluid" id="update-btn" data-id=${car._id}>Editar</button></td>
              <td><button class="btn btn-danger container-fluid" id="delete-btn" data-id=${car._id}>Excluir</button></td>
            </tr>`;
            tableBody.innerHTML += row;
        });
    } catch (error) {
        console.error(error);
    }
}
```

- **O que faz?**: 
  - Busca a lista de carros da API.
  - Remove o spinner de carregamento.
  - Preenche a tabela HTML com os dados.

---

### 2. Adicionar um novo carro

```javascript
async function addCar() {
    const brand = document.getElementById('inputBrand').value;
    const name = document.getElementById('inputName').value;
    const price = parseFloat(document.getElementById('inputPrice').value);
    const fuelType = document.getElementById('fuelType').value;

    const newCar = {
        "brand": brand,
        "name": name,
        "price": price,
        "gasType": fuelType
    };

    try {
        const response = await fetch(`https://carangas.herokuapp.com/cars`, {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify(newCar)
        });
        console.log('Carro adicionado com sucesso');
    } catch (error) {
        console.error(error);
    }
}
```

- **O que faz?**: 
  - Coleta os dados do formulário.
  - Cria um objeto `newCar`.
  - Envia para a API para cadastrar o novo carro.

---

### 3. Deletar um carro

```javascript
async function deleteCar(carId) {
    try {
        const response = await fetch(`https://carangas.herokuapp.com/cars/${carId}`, {
            method: "DELETE",
            headers: {
                "Content-Type": "application/json"
            }
        });

        if (!response.ok) {
            throw new Error("Erro ao Deletar o carro");
        }
    } catch (error) {
        console.error(error);
    }
}
```

- **O que faz?**: 
  - Recebe o `ID` do carro a ser deletado.
  - Faz uma requisição `DELETE` para a API removendo o carro.

- **Evento de click para excluir:**

```javascript
document.addEventListener('click', function (event) {
    if (event.target.id.startsWith('delete-btn')) {
        const carId = event.target.getAttribute('data-id');
        deleteCar(carId);

        const row = event.target.closest('tr');
        row.remove();
    }
});
```
- Remove a linha da tabela **imediatamente** após clicar no botão "Excluir".

---

### 4. Editar um carro

#### a) Abrir Modal de edição

```javascript
async function openEditModal(carId) {
    try {
        const response = await fetch(`https://carangas.herokuapp.com/cars/${carId}`);
        const car = await response.json();

        document.getElementById('editCarId').value = car._id;
        document.getElementById('editBrand').value = car.brand;
        document.getElementById('editName').value = car.name;
        document.getElementById('editPrice').value = car.price;
        document.getElementById('editFuelType').value = car.gasType;

        const editModal = new bootstrap.Modal(document.getElementById('editCarModal'));
        editModal.show();
    } catch (error) {
        console.error(error);
    }
}
```

- **O que faz?**: 
  - Pega os dados do carro selecionado.
  - Preenche o formulário dentro do Modal Bootstrap.
  - Abre o modal para edição.

#### b) Salvar alterações

```javascript
document.getElementById('editCarForm').addEventListener('submit', async function (event) {
    event.preventDefault();

    const carId = document.getElementById('editCarId').value;
    const updatedCar = {
        brand: document.getElementById('editBrand').value,
        name: document.getElementById('editName').value,
        price: parseFloat(document.getElementById('editPrice').value),
        gasType: document.getElementById('editFuelType').value
    };

    try {
        const response = await fetch(`https://carangas.herokuapp.com/cars/${carId}`, {
            method: "PUT",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify(updatedCar)
        });

        console.log("Carro atualizado com sucesso");

        const editModal = bootstrap.Modal.getInstance(document.getElementById('editCarModal'));
        editModal.hide();

        fetchData(); // Atualiza a tabela

    } catch (error) {
        console.error(error);
    }
});
```

- **O que faz?**:
  - Atualiza o carro na API usando método `PUT`.
  - Fecha o modal.
  - Recarrega a lista de carros para refletir a edição.

---

### 5. Traduzir o tipo de combustível

```javascript
function getFuelName(value) {
    const fuelTypes = {
        "0": "Desconhecido",
        "1": "Gasolina",
        "2": "Etanol + Gasolina",
        "3": "Eletricidade",
        "4": "Etanol",
    };

    return fuelTypes[value] || " - ";
}
```

- **O que faz?**:
  - Recebe um número e retorna o tipo de combustível correspondente.

---

## 🎨 style.css

O CSS tem dois papéis principais:

- **Resetar** todo o estilo padrão dos navegadores.
- **Layout flexível**:
  - `header` e `footer` fixos com altura de 100px.
  - `main` cresce para ocupar o restante da tela.
  - `flexbox` usado para organizar os elementos.

---

## 📋 Funcionalidades Gerais

| Funcionalidade        | Status |
|------------------------|--------|
| Listar carros          | ✅     |
| Cadastrar novos carros | ✅     |
| Deletar carros         | ✅     |
| Editar carros          | ✅     |
| Modal dinâmico         | ✅     |
| Spinner de carregamento| ✅     |

---

## 🛠 Tecnologias Utilizadas

- **HTML5**
- **CSS3**
- **JavaScript (ES6+)**
- **Bootstrap 5.3.3**
- **API REST (`https://carangas.herokuapp.com`)**

---
