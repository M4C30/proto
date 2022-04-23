const container = document.querySelector('.container');
let size = 50;
const color = document.querySelector('.color');

let timeOut;

function addTile(size) {

  for (let i = 0; i < size * size; i++) {
    const div = document.createElement('div');
    div.classList.add('pixel');

    div.addEventListener('click', () => {
        // inplaats van click kan je ook mousedown gebruiken
        if (confirm("Confirm your tile") == true) {
            div.style.backgroundColor = color.value;
            timeOut = setTimeout(addTile, 10000);
        } else {
            div.style.backgroundColor = none;
        }
    })

    container.appendChild(div);
  }
}

addTile(size);