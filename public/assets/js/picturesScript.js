let collectionPictures, buttonAddPcitures, spanPictures;

window.onload = () => {
    collectionPictures = document.querySelector("#pictures");
    spanPictures = collectionPictures.querySelector("span");

    buttonAddPcitures = document.createElement("button");
    buttonAddPcitures.className = "add-pictures btn btn-primary";
    buttonAddPcitures.innerText = "Ajouter une image";

    spanPictures.append(buttonAddPcitures);

    collectionPictures.dataset.index = collectionPictures.querySelectorAll('input').length;

    buttonAddPcitures.addEventListener("click", function() {
        addButtonPictures(collectionPictures);
    });
}


function addButtonPictures(collectionPictures) {
    let prototype = collectionPictures.dataset.prototype;

    let index = collectionPictures.dataset.index;

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

    collectionPictures.dataset.index++;

    let buttonAddPcitures = collectionPictures.querySelector(".add-pictures");
    spanPictures.insertBefore(newForm, buttonAddPcitures);

    buttonDelete.addEventListener('click', function() {
        this.previousElementSibling.parentElement.remove();
    });
}

