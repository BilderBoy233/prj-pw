// Captura o formulário
const form = document.querySelector('form');
const resultado = document.getElementById('resultado');



form.addEventListener('submit', function(event) {
    event.preventDefault(); // Impede o envio tradicional

    const formData = new FormData(form);

    fetch('dados.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        resultado.innerHTML = data;
    })
    .catch(error => {
        resultado.innerHTML = 'Erro ao enviar: ' + error;
    });
});
