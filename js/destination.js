/**
 * Script combiné pour gérer l'affichage dynamique des destinations de voyage
 */
(function() {
    console.log("Chargement du script destination.js");

    // Récupération du domaine à partir de la balise <base>, sinon fallback avec window.location.href
    const baseElement = document.querySelector('base');
    const domaine = baseElement ? baseElement.href : window.location.href;

    // Fonction pour initialiser les boutons des sous-catégories
    function parcourir_bouton() {
        const categorie__ul__li = document.querySelectorAll(".categorie__ul__li");
        console.log("Nombre de sous-catégories trouvées:", categorie__ul__li.length);

        categorie__ul__li.forEach(elm => {
            elm.addEventListener('mousedown', function() {
                const categoryId = elm.dataset.category_id;
                console.log("Sous-catégorie cliquée - ID:", categoryId);
                charger_articles_par_categorie(categoryId);
            });
        });
    }

    // Fonction pour charger les articles selon la catégorie
    function charger_articles_par_categorie(categoryId) {
        const apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
        console.log("Requête API:", apiUrl);

        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                const destinationList = document.querySelector('.destination__list');
                destinationList.innerHTML = ''; // Nettoyer l'affichage précédent
                data.forEach(article => {
                    const articleElement = document.createElement('div');
                    console.log("Titre article:", article.title.rendered);
                    articleElement.innerHTML = `
                        <h3>${article.title.rendered}</h3>
                        <p>${article.excerpt.rendered}</p>
                        <a href="${article.link}">Lire plus</a>
                    `;
                    destinationList.appendChild(articleElement);
                });
            })
            .catch(error => console.error('Erreur lors de la récupération des articles:', error));
    }

    // Initialisation
    parcourir_bouton();

    // Chargement par défaut avec une catégorie donnée (ex: ID = 3)
    const defaultCategoryId = 3;
    charger_articles_par_categorie(defaultCategoryId);

})();
