// console.log("HEEEEEEEERRRRRRRRRRRRRRR");

// document.addEventListener("click", function (e) {
//     /* Existing code removed for bervity */

//     /* Use classList.contains method to check if target element has supp class */
//     if (e.target.classList.contains("labelDiv")) {
//         // alert(e.target.id);
//         console.log("e.target.id");
//         console.log(e.target.id);
//         controleur.supprimerItem();
//     }
// });

function handleClick(cls) {
    const destination = document.getElementById(cls);
    if (!destination.className.includes("destination_div_active")) {
        destination.classList.add("destination_div_active");
    } else {
        destination.classList.remove("destination_div_active");
    }
}
