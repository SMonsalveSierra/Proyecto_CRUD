document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("form");
    form.addEventListener("submit", function(event) {
        const name = document.querySelector("[name='name']").value;
        const lastname = document.querySelector("[name='lastname']").value;

        if (name.trim() === "" || lastname.trim() === "") {
            event.preventDefault();
            alert("El nombre y apellido no pueden estar vacíos");
        }
    });
});