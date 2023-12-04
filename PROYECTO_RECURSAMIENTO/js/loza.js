document.addEventListener('DOMContentLoaded', function () {
    const radioButtons = document.querySelectorAll('.lozaRadio');
    const guardarBtn = document.getElementById('guardarBtn');
    const mensajeAgradecimiento = document.getElementById('mensajeAgradecimiento');

    radioButtons.forEach((radio) => {
        radio.addEventListener('change', function () {
            if (this.checked) {
                guardarBtn.style.display = 'block';
            }
        });
    });

    guardarBtn.addEventListener('click', function () {
        guardarBtn.style.display = 'none';
        mensajeAgradecimiento.style.display = 'block';
    });
});
