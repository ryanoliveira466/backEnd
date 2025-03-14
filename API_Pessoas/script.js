document.addEventListener('DOMContentLoaded', apiPessoas())



async function apiPessoas() {

    const pessoas = await fetch("https://dummyjson.com/users")
        .then(response => {
            if (!response.ok) {
                throw new Error("Erro ao consultar o CEP")
            }
            return response.json()
        })
        .then(data => {


            /////////
            let arrayUsers;
            arrayUsers = data.users

            document.getElementById('inputUser').addEventListener('input', function () {
                document.getElementById('userTable').innerHTML = ""
                let input = document.getElementById('inputUser').value
                
                for (let i = 0; i < arrayUsers.length; i++) {
                    let userName = `${arrayUsers[i].firstName} ${arrayUsers[i].lastName}`
                    
                    if (userName.trim().toLocaleLowerCase().includes(input.trim().toLocaleLowerCase())) {


                        let id = arrayUsers[i].id
                        let firstName = arrayUsers[i].firstName
                        let lastName = arrayUsers[i].lastName
                        let email = arrayUsers[i].email
                        let perfil = arrayUsers[i].image

                        let userTable = document.getElementById('userTable')
                        let tr = document.createElement('tr')

                        let th = document.createElement('th')
                        th.scope = 'row'
                        th.classList.add('text-center')
                        th.innerHTML = id

                        let tdName = document.createElement('td')
                        tdName.classList.add('text-center', 'fw-lighter')
                        tdName.innerHTML = `${firstName} ${lastName}`
                        let tdEmail = document.createElement('td')
                        tdEmail.classList.add('text-center', 'fw-lighter')
                        tdEmail.innerHTML = email
                        let tdPerfil = document.createElement('td')
                        tdPerfil.classList.add('text-center', 'fw-lighter')
                        tdPerfil.innerHTML = `<img src="${perfil}" class="img-fluid" alt="" srcset="">`

                        tr.appendChild(th)
                        tr.appendChild(tdName)
                        tr.appendChild(tdEmail)
                        tr.appendChild(tdPerfil)

                        userTable.appendChild(tr)

                    }

                }


            })
            /////////


            data.users.forEach(element => {

                let id = element.id
                let firstName = element.firstName
                let lastName = element.lastName
                let email = element.email
                let perfil = element.image

                let userTable = document.getElementById('userTable')
                let tr = document.createElement('tr')

                let th = document.createElement('th')
                th.scope = 'row'
                th.classList.add('text-center')
                th.innerHTML = id

                let tdName = document.createElement('td')
                tdName.classList.add('text-center', 'fw-lighter')
                tdName.innerHTML = `${firstName} ${lastName}`
                let tdEmail = document.createElement('td')
                tdEmail.classList.add('text-center', 'fw-lighter')
                tdEmail.innerHTML = email
                let tdPerfil = document.createElement('td')
                tdPerfil.classList.add('text-center', 'fw-lighter')
                tdPerfil.innerHTML = `<img src="${perfil}" class="img-fluid" alt="" srcset="">`

                tr.appendChild(th)
                tr.appendChild(tdName)
                tr.appendChild(tdEmail)
                tr.appendChild(tdPerfil)

                userTable.appendChild(tr)


            });

        })



}

function recarregar() {
    location.reload();
}

