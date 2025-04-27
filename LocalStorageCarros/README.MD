 

---

# Como o Código Usa o Local Storage

Este projeto é um sistema simples de **cadastro de carros** que utiliza o **Local Storage** do navegador para armazenar os dados dos carros cadastrados. O armazenamento local permite que as informações permaneçam disponíveis mesmo após recarregar ou fechar o navegador.

## Fluxo de Funcionamento

### 1. Carregar Carros Salvos (`loadCars`)
- Quando a página é carregada (`DOMContentLoaded`), a função `loadCars` é chamada.
- Ela busca os carros armazenados no Local Storage usando:
  ```javascript
  var cars = JSON.parse(localStorage.getItem('cars')) || [];
  ```
- Depois, ela popula a lista de carros no HTML (`#car-list`).

### 2. Adicionar um Novo Carro (`addCar`)
- Ao enviar o formulário (`submit`), a função `addCar` é acionada.
- Essa função:
  1. Captura os dados digitados nos inputs (`modelo`, `ano`, `valor`).
  2. Carrega os carros existentes do Local Storage.
  3. Adiciona o novo carro ao array.
  4. Salva novamente no Local Storage chamando `saveCars(cars)`.
  5. Atualiza a lista na tela chamando `loadCars()`.

```javascript
var cars = JSON.parse(localStorage.getItem("cars")) || [];
cars.push({ model, year, price });
saveCars(cars);
```

### 3. Salvar Carros no Local Storage (`saveCars`)
- Esta função recebe um array de carros e salva no Local Storage:
  ```javascript
  localStorage.setItem("cars", JSON.stringify(cars));
  ```
- Os dados são armazenados em formato **JSON stringificado**.

### 4. Deletar um Carro (`deleteCar`)
- Quando o botão "Deletar" de um carro é clicado, a função `deleteCar(index)` é chamada.
- Ela:
  1. Busca o array de carros no Local Storage.
  2. Remove o carro da posição `index`.
  3. Atualiza o Local Storage chamando `saveCars(cars)`.
  4. Atualiza a lista na tela com `loadCars()`.

```javascript
cars.splice(index, 1);
saveCars(cars);
```

---

## Resumo Visual

| Ação         | Função        | Interação com Local Storage |
|--------------|---------------|-----------------------------|
| Carregar     | `loadCars`     | Lê dados salvos             |
| Adicionar    | `addCar`       | Atualiza e salva novos dados|
| Salvar       | `saveCars`     | Salva array no storage      |
| Deletar      | `deleteCar`    | Remove item e atualiza      |

---

 
