const imgs = [
  'https://cdn.pixabay.com/photo/2019/01/27/21/27/dubrovnik-3959074_960_720.jpg',
  'http://sf.co.ua/12/09/wallpaper-2292997.jpg',
  'https://i.pinimg.com/originals/4e/e7/fe/4ee7fe4a81fe5a9b77a0d3459886bd7d.jpg',
  'https://blog.britishmuseum.org/wp-content/uploads/2017/07/xDothraki-on-the-steppe.jpg.pagespeed.ic.rF0iyAzfh9.jpg',
  'https://resize-parismatch.lanmedia.fr/img/var/news/storage/images/paris-match/culture/medias/game-of-thrones-qui-est-assis-sur-le-trone-de-fer-a-la-fin-1624964/26549681-1-fre-FR/Game-of-Thrones-Qui-est-assis-sur-le-Trone-de-fer-a-la-fin.jpg',
];

// ------------------------ changement Photos setInterval ------------------------------------// 

const nbImgs = imgs.length;
const time = 4000;
let position = 0;

let changeImg = setInterval(() => {
  document.getElementById("imgSlide").src = imgs[position];
  if (position < nbImgs - 1) 
    position++;
  else 
    position = 0;

}, time);



// ------------------- Liens reservation ----------------------//

function go() {
  let valueSelect = document.getElementById('select').value;
  console.log(valueSelect);
  if (valueSelect == "") {
     document.getElementById("rappel").innerHTML = "Veuillez choisir une déstination !";
  } else if (valueSelect == "1") {
    document.location.href = "port_real.php";
  } else if (valueSelect == "0") {
    document.location.href = "winterfell.php";
  }
}


// ------------------- Menu burger ----------------------//

function drop() {
  document.getElementsByClassName('dropdown')[0].classList.toggle('down')
  setTimeout(function () {
  document.getElementsByClassName('dropdown')[0].style.overflow = ('hidden')
  }, 500)
}


// ------------------- Changement de prix ----------------------//

function changePrix() {
  var Destination = document.getElementById('destination').value;
  var nbPersonnes = document.getElementById('voyageur').value;
  var prix = document.getElementById('spanPO');
  if (Destination == "port_real") {
    prix.innerHTML = nbPersonnes * 249;
  } else if (Destination == "winterfell") {
    prix.innerHTML = nbPersonnes * 299;
  } else {
    prix.innerHTML = 0;
  }
}