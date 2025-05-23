(function() {
    console.log("Chargement du script pays.js");

    const baseElement = document.querySelector('base');
    const domaine = baseElement ? baseElement.href : window.location.href;

    function parcourir_bouton() {
        const categorie__ul__li = document.querySelectorAll(".pays__ul__li"); // classe mise à jour
        console.log("Nombre de sous-catégories trouvées:", categorie__ul__li.length);

        categorie__ul__li.forEach(elm => {
            elm.addEventListener('mousedown', function() {
                const categoryId = elm.dataset.category_id;
                console.log("Sous-catégorie cliquée - ID:", categoryId);
                charger_articles_par_categorie(categoryId);
            });
        });
    }

    function charger_articles_par_categorie(categoryId) {
        const apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
        console.log("Requête API:", apiUrl);

        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                const paysList = document.querySelector('.pays__list');
                paysList.innerHTML = '';
                data.forEach(article => {
                    const articleElement = document.createElement('div');
                    articleElement.innerHTML = `
                        <h3>${article.title.rendered}</h3>
                        <p>${article.excerpt.rendered}</p>
                        <a href="${article.link}">Lire plus</a>
                    `;
                    paysList.appendChild(articleElement);
                });
            })
            .catch(error => console.error('Erreur lors de la récupération des articles:', error));
    }

    parcourir_bouton();

    // Chargement d'une catégorie par défaut si nécessaire (optionnel)
    const defaultCategoryId = 3; // Modifier selon l'ID d'une sous-catégorie de "pays-cat"
    charger_articles_par_categorie(defaultCategoryId);

})();
