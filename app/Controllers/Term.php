<script>
    const termsCheckbox = document.getElementById('agreeTerms');
    const registerButton = document.getElementById('register-button');

    termsCheckbox.addEventListener('click', function() {
        if (termsCheckbox.checked) {
            registerButton.disabled = false;
        } else {
            registerButton.disabled = true;
        }
    });
</script>