document.querySelectorAll('.toggle-pass').forEach(toggle => {
    toggle.addEventListener('click', function () {
        const targetId = this.getAttribute('data-target');
        const input = document.getElementById(targetId);

        const eyeOpen = this.querySelector('.eye-open');
        const eyeClosed = this.querySelector('.eye-closed');

        if (input.type === "password") {
            input.type = "text";
            eyeOpen.style.display = "block";
            eyeClosed.style.display = "none";
        } else {
            input.type = "password";
            eyeOpen.style.display = "none";
            eyeClosed.style.display = "block";
        }
    });
});

const dropArea = document.getElementById('cvDropArea');
const fileInput = document.getElementById('cvInput');

dropArea.addEventListener('click', () => fileInput.click());

dropArea.addEventListener('dragover', (e) => {
    e.preventDefault();
    dropArea.parentElement.classList.add('drag-active');
});

dropArea.addEventListener('dragleave', () => {
    dropArea.parentElement.classList.remove('drag-active');
});

dropArea.addEventListener('drop', (e) => {
    e.preventDefault();
    dropArea.parentElement.classList.remove('drag-active');

    const file = e.dataTransfer.files[0];
    fileInput.files = e.dataTransfer.files;

    dropArea.querySelector('p.fw-bold').textContent = file.name;
});

