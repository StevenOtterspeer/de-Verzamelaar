document.addEventListener('DOMContentLoaded', () => {

    const projectForm = document.getElementById('projectForm');
  
    const carContainer = document.getElementById('carContainer');
 
    projectForm.addEventListener('submit', function(event) {
  
        event.preventDefault();
  
        const title = this.elements['title'].value;
  
        const description = this.elements['description'].value;
  
        const imageUrl = this.elements['imageUrl'].value;
  
        const price = this.elements['price'].value;
 
        const carCardElement = document.createElement('div');
  
        carCardElement.classList.add('car-card');
 
        carCardElement.innerHTML = `
  
            <h3>${title}</h3>
  
            <p>${description}</p>
  
            <p>Price: $${price}</p>
  
            <img src="${imageUrl}" alt="${title}">
  
            <button class="delete-button" onclick="deletecar('${title}')">Delete</button>
  
        `;
  
        const carData = {
  
            title,
  
            description,
  
            imageUrl,
  
            price
  
        };
  
        localStorage.setItem(title, JSON.stringify(carData));
  
        carContainer.appendChild(carCardElement);
  
        this.reset();  
    });
  
    for (let i = 0; i < localStorage.length; i++) {
  
        const key = localStorage.key(i);
  
        const carData = JSON.parse(localStorage.getItem(key));
   
        const carCardElement = document.createElement('div');
  
        carCardElement.classList.add('car-card');
  
        carCardElement.id = key;
   
        carCardElement.innerHTML = `  
            <h3>${carData.title}</h3> 
            <p>${carData.description}</p> 
            <p>Price: $${carData.price}</p>  
            <img src="${carData.imageUrl}" alt="${carData.title}">  
            <button class="delete-button" onclick="deletecar('${carData.title}')">Delete</button> 
        `;  
        carContainer.appendChild(carCardElement);  
    } 
  });
 
  function deletecar(title) {
 
    localStorage.removeItem(title);
 
    const carCardElement = document.getElementById(title); 

    if (carCardElement) {  

        carCardElement.remove();  
    }  
  }

  function displaycars() {  

    const carDisplayContainer = document.getElementById('carDisplayContainer');  

    carDisplayContainer.innerHTML = '';
   
    for (let i = 0; i < localStorage.length; i++) {  
        const key = localStorage.key(i);  

        const carData = JSON.parse(localStorage.getItem(key)); 

        const carCardElement = document.createElement('div'); 

        carCardElement.classList.add('car-card'); 

        carCardElement.innerHTML = `
  
            <h3>${carData.title}</h3>
  
            <p>${carData.description}</p>
  
            <p>Price: $${carData.price}</p>
  
            <img src="${carData.imageUrl}" alt="${carData.title}">
  
        `;
        carDisplayContainer.appendChild(carCardElement);  
    }
  }

  window.addEventListener('load', () => { 
    displaycars();
  });

