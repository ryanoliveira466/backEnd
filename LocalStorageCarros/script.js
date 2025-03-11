document.addEventListener('DOMContentLoaded', function(){
    loadCars();

    var carForm = document.getElementById('car-form');
    carForm.addEventListener('submit', addCar);
});

//Carregar os carros do back-end(simulação de back-end)(localStorage) para a memória RAM

function loadCars() {
    var carList = document.getElementById('car-list');
    var cars = JSON.parse(localStorage.getItem('cars')) || [];
    carList.innerHTML = "";

    for (let i = 0; i < cars.length; i++) {
        addCarToList(cars[i], i);
    }
}

//Adicionar os carros a lista

function addCarToList(car, index){
    var carList = document.getElementById('car-list');
    var li = document.createElement('li');
    li.className = "list-group-item d-flex justify-content-between align-items-center";
    li.innerHTML = "<span>" + (index+1) + " - <strong>" + car.model + "</strong> - " + car.year + " - $ " + car.price + "</span>" + "<button class='btn btn-danger btn-sm' onclick='deleteCar(" + index + ")'>Deletar</button>"
    carList.appendChild(li)
}


//Adicionar um carro ao localStorage, usando a função saveCars

function addCar(event){
    event.preventDefault();

    var model = document.getElementById('model').value; 
    var year = parseInt(document.getElementById('year').value);
    var price = parseFloat(document.getElementById('price').value);

    var cars = JSON.parse(localStorage.getItem("cars")) || []
    cars.push({
        model: model,
        year: year,
        price: price
    })

    saveCars(cars);
    loadCars()
}

//Salvar os carros, ou adicioná-los no localStorage

function saveCars(cars) {
    localStorage.setItem("cars", JSON.stringify(cars))
}


//Deletar somente um carro

function deleteCar(index){
    var cars = JSON.parse(localStorage.getItem('cars')) || []

    cars.splice(index,1)
    saveCars(cars);
    loadCars()
}