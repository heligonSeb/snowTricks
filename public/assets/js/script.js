document.addEventListener('DOMContentLoaded', () => {

        let elPictures = document.getElementById('trick_form_pictures');
    
        let picturesInput = elPictures?.getElementsByTagName('input');
    
        if (picturesInput) {
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

        const seeMore = document.querySelector('.see-more');
        
        if (seeMore) {
            seeMore.addEventListener('click', function() {
                let divMedia = document.querySelector('.div-media-collapse');
        
                console.log('click click', divMedia);
                divMedia.classList.toggle('d-none');

                switch (seeMore.innerHTML) {
                    case 'Voir les médias':
                        seeMore.innerHTML = 'Cacher les médias';
                        break;

                    case 'Cacher les médias':
                        seeMore.innerHTML = 'Voir les médias';
                        break;
                
                    default:
                        break;
                }
               
            });
        }

});