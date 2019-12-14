document.getElementById('input-field').addEventListener('focus', (event) => {
    document.getElementById('details-form').style.visibility = 'visible'
})

let houses = document.getElementsByClassName('house')

for (let i = 0; i < houses.length; ++i) {
    houses.item(i).addEventListener('click', (event) => {
        document.getElementById('details-form').style.visibility = 'hidden'
    })
}