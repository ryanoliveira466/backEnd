document.addEventListener('DOMContentLoaded', function () {
    if (document.getElementById("registerForm")) {
        document.getElementById('registerForm').addEventListener("submit", function (e) {
            e.preventDefault();
            let email = document.getElementById('registerEmail').value
            let password = document.getElementById('registerPassword').value
            registerUser(email, password);
        })
    }

    if (document.getElementById("loginForm")) {
        document.getElementById('loginForm').addEventListener("submit", function (e) {
            e.preventDefault();
            let email = document.getElementById('loginEmail').value
            let password = document.getElementById('loginPassword').value
            loginUser(email, password);
        })
    }

    if (document.getElementById("usersTableBody")) {
        displayUsers();
    }



})









function registerUser(email, password) {
    let users = JSON.parse(localStorage.getItem('users')) || [];

    if (users.some(user => user.email === email)) {
        alert("Este email já está cadastrado");
        return;
    }


    users.push({ email, password })
    localStorage.setItem("users", JSON.stringify(users));
    window.location.href = "login.html";

}





function loginUser(email, password) {
    let users = JSON.parse(localStorage.getItem('users')) || [];

    if (users.some(user => user.email === email && user.password === password)) {
        window.location.href = "access.html";
    }

    else {
        alert("E-mail ou senha incorretos");
        return;
    }

}

function displayUsers() {
    let users = JSON.parse(localStorage.getItem('users')) || [];
    let tableUsers = document.getElementById('usersTableBody');

    tableUsers.innerHTML = "";

    users.forEach((element, index) => {
        let tr = document.createElement('tr');
        let tdEmail = document.createElement('td');
        let tdAction = document.createElement('td');

        tdEmail.innerHTML = element.email;
        tdAction.innerHTML = `<button onclick="removeUser(${index})" type="button" class="btn btn-danger">Excluir</button>`;

        tr.appendChild(tdEmail);
        tr.appendChild(tdAction);

        tableUsers.appendChild(tr);
    });
}



function clearAllUsers() {
    localStorage.removeItem('users');
    displayUsers();
}

function logout() {
    window.location.href = "login.html";
}

function removeUser(index) {
    let users = JSON.parse(localStorage.getItem('users')) || [];
    users.splice(index, 1);
    localStorage.setItem('users', JSON.stringify(users));
    displayUsers();
}