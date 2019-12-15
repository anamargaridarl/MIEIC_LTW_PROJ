'use strict'
let text = document.getElementById('searchbar');
text.addEventListener('keyup', cityChanged);
text.addEventListener('click', setValue);

function setValue(event) {
  let suggestions = document.getElementsByClassName('suggested-city');

  if (suggestions.length != 0) {
    document.getElementById('suggestionlist').style.display = 'block';
  }
}

function setCity(event) {
  let city = event.target.innerHTML;
  let searchbar = document.getElementById('searchbar');
  document.getElementById('suggestionlist').style.display = 'none';

  searchbar.value = city;
}

// Handler for change event on text input
function cityChanged(event) {
  let text = event.target;

  if (text.value == '') {
    console.log("cenas")
    document.getElementById('suggestionlist').style.display = 'none';
    return;
  }
  
  document.getElementById('suggestionlist').style.display = 'block';

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

  if (cities.length == 0) {
    document.getElementById('suggestionlist').style.display = 'none';
    return;
  }

  // Add new suggestions
  for (let city in cities) {
    let item = document.createElement('li');
    item.className = 'suggested-city';
    item.innerHTML = cities[city].location;
    list.appendChild(item);

    let suggestions = document.getElementsByClassName('suggested-city');
    for (let i = 0; i < suggestions.length; ++i) {
      suggestions.item(i).addEventListener('click', setCity);
    }
  }
}
