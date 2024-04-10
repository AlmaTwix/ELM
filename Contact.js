document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('form');
    const responseMessage = document.querySelector('.response-message');

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        const formData = new FormData(this);

        fetch(this.getAttribute('action'), {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            responseMessage.innerText = data;
            form.reset();
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
});