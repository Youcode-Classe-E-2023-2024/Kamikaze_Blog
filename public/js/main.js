const save = document.getElementById('save');
save.addEventListener('click', function(event) {
    event.preventDefault();
    
    var myForm = document.getElementById('myForm');
    var selectedValue1 = myForm.elements['category'].value;
    var selectedValue2 = myForm.elements['city'].value;
 
    fetch(`http://localhost/Kamikaze_Blog/Publications/filter/${selectedValue1}/${selectedValue2}`)
    .then(response => response.json())
    .then(data => {
        // Handle the response data here
        console.log(data);
      
    })
    .catch(error => {
        // Handle errors here
        console.error('Error:', error);
    });

})

