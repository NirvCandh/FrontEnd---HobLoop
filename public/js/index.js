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
