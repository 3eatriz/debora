var radio = document.querySelector('.manual-btn');
var cont = 1;

document.getElementById('radio1').checked = true;

setInterval(() => {
  proximaCitacao();
}, 5000);

function proximaCitacao() {
  cont++;
  if (cont > 3) {
    cont = 1
  }

  document.getElementById('radio' + cont).checked = true;
}