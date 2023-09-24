document.addEventListener('DOMContentLoaded', function () {
    const backButton = document.getElementById('backBtn');
    const confirmButton = document.getElementById('confirmBtn');

    if (backButton) {
        backButton.addEventListener('click', function () {
            window.history.back();
        });
    }

    if (confirmButton) {
        confirmButton.addEventListener('click', function () {
            // Redirect to a different page
            window.location.href = '/'; // Success page (tbd)
        });
    }
});
