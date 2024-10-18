import './styles/autre.css';


document.addEventListener('DOMContentLoaded', function () {
    const divResultats = document.getElementById("divResultats");
    const form = document.getElementById('form_recherche');
    const recipesPerPage = 10; // Number of recipes to display per page
    let currentPage = 1;
    let recettes = [];

    form.addEventListener('input', function () {
        console.log(event.target.value);
        divResultats.innerHTML = '<p>Chargement des recettes...</p>';

        let url = '/gestion/recettes/recherche/ajax';
        let formData = new FormData(form);

        axios.post(url, formData)
            .then(response => {
                recettes = response.data;  // Save the fetched recipes
                currentPage = 1; // Reset to first page
                displayRecipes();
            })
            .catch(error => {
                console.error('Erreur lors de la requête:', error);
                divResultats.innerHTML = '<p>Une erreur est survenue lors du chargement des recettes.</p>';
            });
    });

    function displayRecipes() {
        divResultats.innerHTML = ''; // Clear previous results

        // Calculate the number of pages
        const totalPages = Math.ceil(recettes.length / recipesPerPage);
        const startIndex = (currentPage - 1) * recipesPerPage;
        const endIndex = startIndex + recipesPerPage;

        // Create a row to hold the recipe cards
        const row = document.createElement('div');
        row.classList.add('row', 'row-cols-1', 'row-cols-md-3', 'g-4');

        // Display recipes for the current page
        recettes.slice(startIndex, endIndex).forEach(recette => {
            const col = document.createElement('div');
            col.classList.add('col');

            const card = `
                <div class="recipe-card">
                    <div class="recipe-image">
                        <img src="${recette.image}" alt="${recette.titre}">
                    </div>
                    <div class="recipe-info">
                        <div class="recipe-title">${recette.titre}</div>
                        <div class="user-icon">
                            <img src="${recette.utilisateur.photo}" alt="${recette.utilisateur.nom}">
                        </div>
                        <div class="recipe-icons">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                    <path d="M8 3.5a.5.5 0 0 1 .5.5v4h3a.5.5 0 0 1 0 1H8a.5.5 0 0 1-.5-.5V4a.5.5 0 0 1 .5-.5z" />
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm0-1A7 7 0 1 1 8 1a7 7 0 0 1 0 14z" />
                                </svg>
                                <div class="icon-text">${recette.tempsDePreparation}</div>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                                    <path d="M8.515 3.5a.5.5 0 0 1 .5.5v3.794l2.847 1.447a.5.5 0 0 1-.514.858l-3.1-1.576a.5.5 0 0 1-.238-.433V4a.5.5 0 0 1 .5-.5z" />
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm0-1A7 7 0 1 1 8 1a7 7 0 0 1 0 14z" />
                                </svg>
                                <div class="icon-text">${recette.tempsDeCuison}</div>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.216.85A2.785 2.785 0 0 1 3.5 8h9a2.785 2.785 0 0 1 .716.85A2.478 2.478 0 0 1 14 10.5v.577c0 .19-.112.36-.281.445L8.833 14H7.167l-4.886-2.478A.502.502 0 0 1 2 11.078V10.5c0-.89.37-1.682.784-2.15z" />
                                </svg>
                                <div class="icon-text">${recette.nombrePortions}</div>
                            </div>
                        </div>
                        <div class="stars">
                            ${recette.difficulte == 1 ? '&#9733;&#9734;&#9734;&#9734;&#9734;' :
                                recette.difficulte == 2 ? '&#9733;&#9733;&#9734;&#9734;&#9734;' :
                                    recette.difficulte == 3 ? '&#9733;&#9733;&#9733;&#9734;&#9734;' :
                                        recette.difficulte == 4 ? '&#9733;&#9733;&#9733;&#9733;&#9734;' :
                                            recette.difficulte == 5 ? '&#9733;&#9733;&#9733;&#9733;&#9733;' :
                                                '&#9734;&#9734;&#9734;&#9734;&#9734;'}
                            (${recette.difficulte} notes)
                        </div>
                    </div>
                </div>`;

            col.innerHTML = card;
            row.appendChild(col);
        });

        divResultats.appendChild(row);
        addPagination(totalPages);
    }

    function addPagination(totalPages) {
        const pagination = document.createElement('nav');
        pagination.classList.add('pagination');

        for (let i = 1; i <= totalPages; i++) {
            const pageItem = document.createElement('a');
            pageItem.classList.add('page-link');
            pageItem.textContent = i;
            pageItem.href = '#';

            // Click event to change page
            pageItem.addEventListener('click', function (event) {
                event.preventDefault();
                currentPage = i;
                displayRecipes();
            });

            pagination.appendChild(pageItem);
        }

        divResultats.appendChild(pagination);
    }
});

