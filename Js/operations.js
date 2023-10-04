let logout = document.getElementById("logout");
let addAdmin = document.getElementById("admin");
let addProduct = document.getElementById("product");

logout.addEventListener('click',() => {
    window.open("logout.php");
})
addAdmin.addEventListener('click',() => {
    window.open("adminRegister.html");
})
