let text = document.getElementById("searchbar");
text.addEventListener("keyup", cityChanged);

// Handler for change event on text input
function cityChanged(event) {
  let text = event.target;

  let request = new XMLHttpRequest();
  request.addEventListener("load", citiesReceived);
  request.open("get", "api/getcities.php?name=" + text.value, true);
  request.send();
}

// Handler for ajax response received
function citiesReceived() {
  let cities = JSON.parse(this.responseText);
  let list = document.getElementById("suggestions");
  // list.innerHTML = ""; // Clean current cities

  console.log(cities);

  // Add new suggestions
  // for (city in cities) {
  //   let item = document.createElement("li");
  //   item.innerHTML = cities[city].name;
  //   list.appendChild(item);
  // }
}
