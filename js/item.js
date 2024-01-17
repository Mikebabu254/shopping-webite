let addItem = document.getElementById("add_btn");
let itemForm = document.getElementById("add_item_form");

addItem.onclick = function () {
    if (itemForm.style.visibility === "hidden") {
        itemForm.style.visibility ="visible";
    } else {
        itemForm.style.visibility ="hidden";
    }
}


