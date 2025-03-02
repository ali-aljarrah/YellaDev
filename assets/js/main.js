document.addEventListener('DOMContentLoaded', function() {
    const loader = document.querySelector(".loader");

    loader.classList.remove("show");

    // Change language action
    var dropdown = document.getElementById('LangOption');
    dropdown.addEventListener('change', function() {
        document.getElementById('LangForm').submit();
    });
});