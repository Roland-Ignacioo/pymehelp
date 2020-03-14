function validar() {
    var name, email, number, message;
    name = document.getElementById("name").value;
    email = document.getElementById("email").value;
    number = document.getElementById("number").value;
    message = document.getElementById("message").value;

    if (name == "") {
        alert("Todos los campos son obligatorios");
        return false;
    }

}