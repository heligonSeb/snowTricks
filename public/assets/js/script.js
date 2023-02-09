document.addEventListener('DOMContentLoaded', () => {
    let elPictures = document.getElementById('trick_form_pictures');

    let picturesInput = elPictures.getElementsByTagName('input');

    for (let i = 0; i < picturesInput.length; i++) {
        picturesInput[i].required = false;
    }


    let elMovies = document.getElementById('trick_form_movies');

    let moviesInput = elMovies.getElementsByTagName('input');

    for (let i = 0; i < moviesInput.length; i++) {
        moviesInput[i].required = false;
    }

    elPictures.classList.add('d-none');
    elMovies.classList.add('d-none');
});