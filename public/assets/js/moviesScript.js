let collectionMovies, buttonAddMovies, spanMovies;

document.addEventListener('DOMContentLoaded', () => {
    collectionMovies = document.querySelector("#movies");
    spanMovies = collectionMovies.querySelector("span");

    buttonAddMovies = document.createElement("button");
    buttonAddMovies.className = "add-movies btn btn-primary";
    buttonAddMovies.innerText = "Ajouter une vidéo";

    spanMovies.append(buttonAddMovies);

    collectionMovies.dataset.index = collectionMovies.querySelectorAll('input').length;

    buttonAddMovies.addEventListener("click", function() {
        addButtonMovies(collectionMovies);
    });
})


function addButtonMovies(collectionMovies) {
    let prototype = collectionMovies.dataset.prototype;

    let index = collectionMovies.dataset.index;

    prototype = prototype.replace(/__name__/g, index);

    let content = document.createElement("html");
    content.innerHTML = prototype;

    let newForm = content.querySelector("div");

    let buttonDelete = document.createElement("button");
    buttonDelete.type = "button";
    buttonDelete.className = "btn btn-danger";
    buttonDelete.id = "delete-movie-" + index;
    buttonDelete.innerText = "Supprimer cette video";

    newForm.append(buttonDelete);

    collectionMovies.dataset.index++;

    let buttonAddMovies = collectionMovies.querySelector(".add-movies");
    spanMovies.insertBefore(newForm, buttonAddMovies);

    buttonDelete.addEventListener('click', function() {
        this.previousElementSibling.parentElement.remove();
    });
}

