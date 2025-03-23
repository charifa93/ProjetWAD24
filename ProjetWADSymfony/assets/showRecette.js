import './styles/showRecette.css';

function setupSaisonRecetteHandler({ LinkSelector, divResultatsId, showBtnId, ListId }) {
    const links = document.querySelectorAll(LinkSelector);
    const divResultats = document.getElementById(divResultatsId);
    const showBtn = document.getElementById(showBtnId);
    const list = document.getElementById(ListId);

    // Gérer l'affichage des listes (saison/type de plat/origines)
    showBtn.addEventListener('click', function () {
        if (list.style.display === "none" || list.style.display === "") {
            list.style.display = "block";  // Afficher la liste
        } else {
            list.style.display = "none";  // Masquer la liste
        }
    });

    // Gérer les clics sur les liens
    links.forEach(function (link) {
        link.addEventListener('click', function (event) {
            event.preventDefault();  // Empêcher le comportement par défaut du lien

            let valeur = this.getAttribute('data-valeur') || '';  
        
               // Vider le contenu précédent et afficher un message de chargement
            divResultats.innerHTML = '<p>Chargement des recettes...</p>';

            let idParent = event.target.parentElement.id;

            // Construire l'URL en fonction des filtres (saison et/ou type de plat)
            let url = '/gestion/recettes/afficher';
            url += `/${idParent}/${valeur}`;  // Seule la saison

            console.log(url);

            // Utiliser Axios pour faire une requête AJAX
            axios.get(url).then(response => {
                    const recettes = response.data;  // Données en JSON
                    divResultats.innerHTML = '';  // Vider le contenu précédent

                    // Vérifier si des recettes sont trouvées
                    if (recettes.length > 0) {
                        recettes.forEach(recette => {
                            const recetteItem = document.createElement('div');
                            recetteItem.classList.add('recette-item');

                            recetteItem.innerHTML = `<img src="${recette.image}" alt="Image de la recette" class="recette-image">
                            <h2>${recette.titre}</h2>
                            <h3>${recette.utilisateur.nom}</h3>`;
                            

                            divResultats.appendChild(recetteItem);
                        });
                    } else {
                        divResultats.innerHTML = '<p>Aucune recette trouvée pour cette sélection.</p>';
                    }
                })
                .catch(error => {
                    console.error('Erreur lors de la requête:', error);
                    divResultats.innerHTML = '<p>Une erreur est survenue lors du chargement des recettes.</p>';
                });
        });
    });
}


setupSaisonRecetteHandler({LinkSelector: '.saison-link',divResultatsId: 'divResultats',showBtnId: 'showSaisonsBtn',ListId: 'saison'});
setupSaisonRecetteHandler({LinkSelector: '.typeDePlat-link',divResultatsId: 'divResultats',showBtnId: 'showPlatsBtn',ListId: 'typeDePlat'});
setupSaisonRecetteHandler({LinkSelector: '.origine-link',divResultatsId: 'divResultats',showBtnId: 'showOriginesBtn',ListId: 'origine'});
setupSaisonRecetteHandler({LinkSelector: '.preparation-link',divResultatsId: 'divResultats',showBtnId: 'showPreparationsBtn',ListId: 'preparation'});

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// document.getElementById('userMenu').addEventListener('click', function() {
//     document.getElementById('userDropdown').classList.toggle('hidden');
//     });
    
//     document.addEventListener('click', function(event) {
//     const userMenu = document.getElementById('userMenu');
//     const userDropdown = document.getElementById('userDropdown');
//     if (!userMenu.contains(event.target) && !userDropdown.classList.contains('hidden')) {
//     userDropdown.classList.add('hidden');
//     }
//     });
    const favoriteButtons = document.querySelectorAll('.ri-heart-line');
    favoriteButtons.forEach(button => {
    button.addEventListener('click', function() {
    this.classList.toggle('ri-heart-line');
    this.classList.toggle('ri-heart-fill');
    this.classList.toggle('text-primary');
    });
    });
