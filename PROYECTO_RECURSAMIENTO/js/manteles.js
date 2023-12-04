document.addEventListener('DOMContentLoaded', function () {
    const checkboxes = document.querySelectorAll('.colorCheckbox');
    const guardarBtn = document.getElementById('guardarBtn');
    const mensajeAgradecimiento = document.getElementById('mensajeAgradecimiento');

    let selectedColors = 0;

    checkboxes.forEach((checkbox) => {
        checkbox.addEventListener('change', function () {
            if (this.checked) {
                selectedColors++;
            } else {
                selectedColors--;
            }

            if (selectedColors >= 2) {
                checkboxes.forEach((cb) => {
                    if (!cb.checked) {
                        cb.disabled = true;
                    }
                });
                guardarBtn.style.display = 'block';
            } else {
                checkboxes.forEach((cb) => {
                    cb.disabled = false;
                });
                guardarBtn.style.display = 'none';
            }
        });
    });

    guardarBtn.addEventListener('click', function () {
        guardarBtn.style.display = 'none';
        mensajeAgradecimiento.style.display = 'block';
    });
});
