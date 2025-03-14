async function fetchData() {
    const tableBody = document.getElementById('tableCarros')

    try {
        const spinner = document.getElementById('divBotaoCarregando')
        spinner.remove()

        const response = await fetch('https://carangas.herokuapp.com/cars')
        const data = await response.json()
        const cars = data;
        tableBody.innerHTML = ""

        cars.reverse().forEach(function(car) {
            const row = `
            <tr data-id="${car.id}">
            <td>${car.brand}</td>
            <td>${car.name}</td>
            <td>${car.price}</td>
            `;
            tableBody.innerHTML += row;
        });




    } catch (error) {

    }

}

fetchData()