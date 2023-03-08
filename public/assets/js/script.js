document.addEventListener('DOMContentLoaded', () => {
    if (window.location.pathname === "/tricks/add") {
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
    }

    function containsNumbers(str) {
        return /\d/.test(str);
    }

    if (containsNumbers(window.location.pathname)) {
        console.log('tricks');
        /**
         * Toggle media section in trick page on click button
         */
        document.querySelector('.see-more').addEventListener('click', function() {
            let divMedia = document.querySelector('.div-media-collapse');
    
            console.log('click click');
            divMedia.toggleAttribute('d-none');
        });

    }

});