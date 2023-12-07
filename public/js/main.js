let publication;
function displayData(data) {
  // Use map to create an array of table rows
  const rows = data.map((pub) =>{
    console.log(pub)
    // console.log(pub.id);
    return(
` 
        <a href="" class="hover:no-underline text-xl  lg:ml-40 md:ml-20 ml-10 w-full max-w-sm mx-4 rounded-md shadow-md   hover:shadow-xl transition-shadow duration-300 ease-in-out bg-white">
        <div class="flex items-end justify-end h-56 w-80 bg-cover" style="background-image: url('../public/img/categories/${pub.imgUrl}')">

        </div>
        <div class="px-5 py-3">
            <h3 class="text-gray-700 uppercase  ">${pub.title}</h3>
            <span class="text-gray-500 mt-2  ">${pub.prix} DH</span>
        </div>

        </a>
`     
)})
  const dataContainer = document.getElementById('dataContainer');

  dataContainer.innerHTML = rows.join('');
}

const save = document.getElementById('save');
save.addEventListener('click', function(event) {
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
}



)

