const container = document.querySelector('.container');
const color = document.querySelector('.color');

function addTile() {

  for (let i = 0; i < 50 * 50; i++) {
    const div = document.createElement('div');

    div.addEventListener('click', () => {

        if (confirm("Confirm your tile") == true) {
            div.style.backgroundColor = color.value;
            setTimeout(addTile, 10000);
        } else {}
    })

    container.appendChild(div);
  }
}

addTile();