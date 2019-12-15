'use strict'
let text = document.getElementById('searchbar');
text.addEventListener('keyup', cityChanged);

function setCity(event) {
  console.log(event.target)
  let city = event.target.innerHTML;
  let searchbar = document.getElementById('searchbar');

  searchbar.value = city;
}

// Handler for change event on text input
function cityChanged(event) {
  let text = event.target;

  if (text.value == '') {
    document.getElementById('suggestionlist').style.display = 'none';
    return;
  }
  
  document.getElementById('suggestionlist').style.display = 'unset';

  let request = new XMLHttpRequest();
  request.addEventListener('load', citiesReceived);
  request.open('get', 'api/getcities.php?name=' + text.value, true);
  request.send();
}

// Handler for ajax response received
function citiesReceived() {
  let cities = JSON.parse(this.responseText);
  let list = document.getElementById('suggestions');
  list.innerHTML = ''; // Clean current cities

  console.log(cities);

  // Add new suggestions
  for (let city in cities) {
    let item = document.createElement('li');
    item.className = 'suggested-city';
    item.innerHTML = cities[city].city_name;
    list.appendChild(item);

    let suggestions = document.getElementsByClassName('suggested-city');
    for (let i = 0; i < suggestions.length; ++i) {
      console.log("oi")
      suggestions.item(i).addEventListener('click', setCity);
    }
  }
}
