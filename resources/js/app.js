window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

const toggleFavorite = (id) => {

    axios.put(`/films/${id}/favorite`)
        .then((response) => {

            let favoriteButton = document.getElementById('favorite-button')
            favoriteButton.innerHTML =
                response.data.favorite ? 'В избранном' : "Добавить в избранное"
        })
}

document.addEventListener('DOMContentLoaded', () => {

    let favoriteButton = document.getElementById('favorite-button')


    if (!favoriteButton)
        return

    favoriteButton.addEventListener('click', ()=>{
        let id = favoriteButton.dataset.id ?? null
        toggleFavorite(id)
    })

})
