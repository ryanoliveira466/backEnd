async function fetchData() {
    const tableBody = document.getElementById('tableCarros')

    try {
        const spinner = document.getElementById('divBotaoCarregando')
        spinner.remove()

        const response = await fetch('https://carangas.herokuapp.com/cars')
        const data = await response.json()
        const cars = data;
        tableBody.innerHTML = ""



        cars.reverse().forEach(function (car) {
            const fuelText = getFuelName(car.gasType);

            const row = `
            <tr data-id="${car._id}">
            <td>${car.brand}</td>
            <td>${car.name}</td>
            <td>${car.price}</td>
            <td>${fuelText}</td>
            <td><button class="btn btn-warning container-fluid text-center" id="update-btn" data-id=${car._id}>Editar</button></td>
            <td><button class="btn btn-danger container-fluid text-center" id="delete-btn" data-id=${car._id}>Excluir</button></td>
            `;
            tableBody.innerHTML += row;
        });




    } catch (error) {

    }

}


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






async function addCar() {
    // event.preventDefault();

    const brand = document.getElementById('inputBrand').value
    const name = document.getElementById('inputName').value
    const price = parseFloat(document.getElementById('inputPrice').value)
    const fuelType = document.getElementById('fuelType').value

    const newCar = {
        "brand": brand,
        "name": name,
        "price": price,
        "gasType": fuelType
    }

    try {
        const response = await fetch(`https://carangas.herokuapp.com/cars`, {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify(newCar)
        })

        console.log('Carro adicionado com sucesso');


    } catch (error) {
        console.error(error)
    }

}




//addCar() = chama função addCar só adiciona sem chamar
// document.getElementById('carForm').addEventListener('submit', addCar)

document.addEventListener('click', function (event) {
    if (event.target.id.startsWith('delete-btn')) {
        const carId = event.target.getAttribute('data-id');

        deleteCar(carId)


        const row = event.target.closest('tr');
        row.remove();
    }
})




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

        // console.log("Carro deletado com sucesso!");
        // location.reload()


    } catch (error) {
        console.error(error);
    }

}

document.addEventListener('DOMContentLoaded', function () {

    document.body.insertAdjacentHTML('beforeend', `
        <div class="modal Fade" id="editCarModal" tabindex="-1" aria-labelledby="EditCarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editCarModalLabel">Editar Carro</h5>
          <button class="btn-close" type="button" id="closeEditModal" data-bs-dismiss="modal"
            aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="editCarForm">
            <input type="hidden" id="editCarId">

            <div class="mb-3">
              <label for="editBrand" class="form-label">Marca</label>
              <input type="text" class="form-control" id="editBrand" required>
            </div>

            <div class="mb-3">
              <label for="editName" class="form-label">Nome</label>
              <input type="text" class="form-control" id="editName" required>
            </div>

            <div class="mb-3">
              <label for="editPrice" class="form-label">Preço</label>
              <input type="number" class="form-control" id="editPrice" required>
            </div>

            <div class="mb-3">
              <label for="editFuelType" class="form-label">Tipo de Combustível</label>
              <select class="form-select" id="editFuelType" required>
                <option value="0">Desconhecido</option>
                <option value="1" selected>Gasolina</option>
                <option value="2">Flex</option>
                <option value="3">Elétrico</option>
                <option value="4">Etanol</option>
              </select>
            </div>

            <button type="submit" class="btn btn-primary" id="saveEditCar">Salvar Alterações</button>
          </form>
        </div>
      </div>
    </div>
  </div>
        `);


        document.getElementById('tableCarros').addEventListener('click', function(event){
            if (event.target.id.startsWith('update-btn')) {
                const carId = event.target.getAttribute('data-id');
                openEditModal(carId)
            }
        });



        async function openEditModal(carId) {
            try {

                const response = await fetch(`https://carangas.herokuapp.com/cars/${carId}`);

                const car = await response.json();

                document.getElementById('editCarId').value = car._id
                document.getElementById('editBrand').value = car.brand
                document.getElementById('editName').value = car.name
                document.getElementById('editPrice').value = car.price
                document.getElementById('editFuelType').value = car.gasType

                const editModal = new bootstrap.Modal(document.getElementById('editCarModal'));
                editModal.show()
                
            } catch (error) {
                console.error(error)
            }
            
        }



        document.getElementById('editCarForm').addEventListener('submit', async function (event) {
            event.preventDefault()

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
                editModal.hide()

                fetchData();

              
                


            } catch (error) {
                console.error(error);
            }
       
            
        })

})



fetchData()


