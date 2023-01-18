let collection, buttonAdd, span;

window.onload = () => {
    collection = document.querySelector("#pictures");
    span = collection.querySelector("span");

    buttonAdd = document.createElement("button");
    buttonAdd.className = "add-pictures btn btn-primary";
    buttonAdd.innerText = "Ajouter une image";

    let newButton = span.append(buttonAdd);

    collection.dataset.index = collection.querySelectorAll('input').length;

    buttonAdd.addEventListener("click", function() {
        addButton(collection, buttonAdd);
    });
}


function addButton(collection, newButton) {
    let prototype = collection.dataset.prototype;

    let index = collection.dataset.index;

    prototype = prototype.replace(/__name__/g, index);

    let content = document.createElement("html");
    content.innerHTML = prototype;

    let newForm = content.querySelector("div");

    let buttonDelete = document.createElement("button");
    buttonDelete.type = "button";
    buttonDelete.className = "btn btn-danger";
    buttonDelete.id = "delete-picture-" + index;
    buttonDelete.innerText = "Supprimer cette image";

    newForm.append(buttonDelete);

    collection.dataset.index++;

    let buttonAdd = collection.querySelector(".add-pictures");
    span.insertBefore(newForm, buttonAdd);

    buttonDelete.addEventListener('click', function() {
        this.previousElementSibling.parentElement.remove();
    });
}

