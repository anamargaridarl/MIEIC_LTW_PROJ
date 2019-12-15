document.getElementById('input-field').addEventListener('focus', (event) => {
    document.getElementById('details-form').style.visibility = 'visible'
})

let houses = document.getElementsByClassName('house')

for (let i = 0; i < houses.length; ++i) {
    houses.item(i).addEventListener('click', (event) => {
        document.getElementById('details-form').style.visibility = 'hidden'
    })
}

document.getElementById('checkin').addEventListener('change', (event) => {
    let checkin = new Date(document.getElementById('checkin').value);
    let checkout = new Date(document.getElementById('checkout').value);
    console.log(checkin);
    console.log(checkout);

    if (checkout > checkin) {
        document.getElementById('submit').disabled = false;
    } else {
        document.getElementById('submit').disabled = true;
    }
})

document.getElementById('checkout').addEventListener('change', (event) => {
    let checkin = new Date(document.getElementById('checkin').value);
    let checkout = new Date(document.getElementById('checkout').value);
    console.log(checkin);
    console.log(checkout);
    
    if (checkout > checkin) {
        document.getElementById('submit').disabled = false;
    } else {
        document.getElementById('submit').disabled = true;
    }
})