(function(){
    console.log("destination.js");

    // Fonction pour gérer le clic sur une sous-catégorie et récupérer les articles
    function parcourir_bouton(){
        const categorie__ul__li = document.querySelectorAll(".categorie__ul__li");
        console.log("categorie__ul__li.length = ", categorie__ul__li.length);
        
        categorie__ul__li.forEach(elm => {
            elm.addEventListener('mousedown', function(){
                const categoryId = elm.dataset.category_id; // Récupérer l'ID de la sous-catégorie cliquée
                console.log("Category ID clicked:", categoryId);
                loadArticlesByCategory(categoryId);
            });
        });
    }

    // Fonction pour charger les articles d'une catégorie
    function loadArticlesByCategory(categoryId){
        const domaine = window.location.href;
        const apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;
        console.log("API URL:", apiUrl);

        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                const destinationList = document.querySelector('.destination__list');
                destinationList.innerHTML = '';  // Vider la liste actuelle avant de charger les nouveaux articles
                data.forEach(article => {
                    const articleElement = document.createElement('div');
                    console.log("Article Title:", article.title.rendered);
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

    // Initialisation du gestionnaire d'événements pour les sous-catégories
    parcourir_bouton();
})();
