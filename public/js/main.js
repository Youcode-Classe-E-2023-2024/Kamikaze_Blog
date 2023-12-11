let publication;
let endpoint = 'http://localhost/Kamikaze_Blog/Publications/filter/'
console.log(endpoint + `all/all`)
function displayData(data) {
  // Use map to create an array of table rows
  const rows = data.map((pub) => {

    return (
      `
       
  <a href="<?php echo URLROOT . '/Pages/details/' . $item->id; ?>" class="  hover:no-underline text-xr  lg:mx-20 md:mx-10 mx-5 w-80 max-w-sm  rounded-md shadow-md   hover:shadow-xl transition-shadow duration-300 ease-in-out bg-gray-100">
    <div class="flex items-end justify-end h-56 w-80 bg-cover bg-no-repeat" style="background-image: url('<?php echo URLROOT ?>/public/img/publications/${pub.imgUrl}')">
    </div>
    <div class="px-5 py-3 text-center flex flex-col   ">

        <h3 class="text-black uppercase text-2xl font-bold  ">${pub.title}</h3>
        <div>
            <span class=" mt-2 text-blue-500 font-bold p-2  ">${pub.prix} DH</span>
        </div>
       
            <span class="float-right p-2 text-gray-400 ">${pub.created_at}</span>
            
        
    </div>

  </a>
     
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

fetch(endpoint + `all/all`)
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

  fetch(endpoint + `${selectedValue1}/${selectedValue2}`)
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
      fetch(endpoint + `${selectedValue1}/all`)
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
