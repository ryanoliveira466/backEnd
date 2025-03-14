var CEP = document.getElementById('CEP')

function consultarCEP() {
    fetch(`https://viacep.com.br/ws/${CEP.value}/json/`)
        .then(response => {
            if (!response.ok) {
                throw new Error("Erro ao consultar o CEP")

            }
            return response.json()
        })
        .then(data => {
            const bairro = data.bairro || "Não informado"
            const rua = data.logradouro || "Não informado"
            const cidade = data.localidade || "Não informado"
            const complemento = data.complemento || "Não informado"
            const estado = data.uf || "Não informado"

            const resultDiv = document.getElementById('result')
            resultDiv.innerHTML = `
            <p><strong>CEP: </strong>${CEP.value}</p>
            <p><strong>Estado: </strong>${estado}</p>
            <p><strong>Cidade: </strong>${cidade}</p>
            <p><strong>Bairro: </strong>${bairro}</p>
            <p><strong>Rua: </strong>${rua}</p>
            <p><strong>Complemento: </strong>${complemento}</p>
            `

        })


        .catch(error => {
            document.getElementById('result').innerHTML = `
            <div class="alert" alert-danger" role="alert">
            Erro ao consultar o CEP. Verifique se o CEP está correto
            </div>
            `;

            console.error('Erro ao buscar o CEP:', error)

        })



}