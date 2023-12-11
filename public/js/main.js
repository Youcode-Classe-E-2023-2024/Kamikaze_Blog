let publication;

function displayData(data) {
  // Use map to create an array of table rows
  const rows = data.map((pub) => {

    return (
      `
        <div class="hover:no-underline text-xl  lg:ml-30 md:ml-20  bg-gray-100	 max-w-sm mx-4 rounded-md shadow-md   hover:shadow-xl transition-shadow duration-300  ">
      <div class="flex items-end justify-end h-56 w-80 bg-cover" style="background-image: url('../public/img/categories/Corded-Telephone-Desktop-Phone-Office-Phone-Hotel-Telephone-Landline-Telephone-Analog-Telephone.jpg')"></div>
      <div class="px-5 py-3">
          <h3 class="text-gray-700 uppercase">${pub.title}</h3>
          <span class="text-gray-500 mt-2">${pub.prix} DH</span>
      </div>
  </div>
     
     `

    );
  });

  const dataContainer = document.getElementById('dataContainer');
  dataContainer.innerHTML = rows.join('');
}


// search
const searchInput = document.getElementById('searchInput');

searchInput.addEventListener('keyup', function () {
    const searchTerm = searchInput.value.trim().toLowerCase();
    console.log(publication)
    const filteredPublications = publication.filter(pub => pub.title.toLowerCase().includes(searchTerm));

    displayData(filteredPublications);
});

fetch('http://localhost/Kamikaze_Blog/Publications/filter/all/all')
  .then(response => response.json())
  .then(data => {
    
    publication = data;

    displayData(publication);
  })
  .catch(error => {
    // Handle errors here
    console.error('Error:', error);
  });

const save = document.getElementById('save');
save.addEventListener('click', function (event) {
  event.preventDefault();

  var myForm = document.getElementById('myForm');
  var selectedValue1 = myForm.elements['category'].value;
  var selectedValue2 = myForm.elements['city'].value;

  fetch(`http://localhost/Kamikaze_Blog/Publications/filter/${selectedValue1}/${selectedValue2}`)
    .then(response => response.json())
    .then(data => {
      // Assign the data to the global variable
      publication = data;

      displayData(publication);
    })
    .catch(error => {
      // Handle errors here
      console.error('Error:', error);
    });
});


// Ajoutez un gestionnaire d'événements de clic à chaque carte de catégorie
const categoryCards = document.querySelectorAll('.category-card');

categoryCards.forEach(categoryCard => {
    categoryCard.addEventListener('click', function (event) {
      event.preventDefault();
  
      // Obtenez la catégorie de la carte cliquée
      const selectedCategory = categoryCard.getAttribute('data-category');
      console.log('Catégorie sélectionnée :', selectedCategory);
      var selectedValue1 = selectedCategory;
  
      // Effectuez la requête pour obtenir les publications filtrées par la catégorie sélectionnée
      fetch(`http://localhost/Kamikaze_Blog/Publications/filter/${selectedValue1}/all`)
        .then(response => response.json())
        .then(data => {
          // Assignez les données à la variable globale
          publication = data;
  
          // Affichez les données mises à jour
          displayData(publication);
        })
        .catch(error => {
          // Gérez les erreurs ici
          console.error('Error:', error);
        });
    });
  });
