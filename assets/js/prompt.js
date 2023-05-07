// Checking if the user loses some snity


/*// Create a Three.js scene
var scene = new THREE.Scene();
scene.background = new THREE.Color(0x3b3772);


// Create a camera and position it
var camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
camera.position.z = 5;

// Create a renderer and set its size
var renderer = new THREE.WebGLRenderer();
renderer.setSize(window.innerWidth, window.innerHeight);

// Add the renderer to the container element
document.getElementById('background-container').appendChild(renderer.domElement);

// Create a cube geometry and material
var geometry = new THREE.BoxGeometry();
var material = new THREE.MeshBasicMaterial({ color: 0xffffff });

// Create a mesh and add it to the scene
var cube = new THREE.Mesh(geometry, material);
scene.add(cube);

function animate() {
    requestAnimationFrame(animate);
    cube.rotation.x += 0.01;
    cube.rotation.y += 0.01;
    renderer.render(scene, camera);
}
animate();*/
/*
// Handle button click
var typeButtons = document.querySelectorAll('.type-button');
const root_theme =  document. querySelector(':root');
const sun = document.querySelector(".sun");

typeButtons.forEach(typeButton => {
    typeButton.addEventListener('click', () => {
        for (let i = 0; i < typeButtons.length; i++) {
            typeButtons[i].classList.toggle('active', false);
        }

        typeButton.classList.toggle('active');

        var dreamTypeValue = document.querySelector('#dream-type');
        dreamTypeValue.setAttribute("value", typeButton.dataset.type);


        // changint the background
        changeTheme(dreamTypeValue.value);
    })
});

function changeTheme(dreamType){
    const darkPurple = "#281678";
    const darkerPurple = "#1b0c5e";

    if (dreamType == "reve"){
        root_theme.style.setProperty("--onirix-purple",darkPurple);
        sun.classList.remove("east");
    }
    if (dreamType == "cauchemar"){
        root_theme.style.setProperty("--onirix-purple",darkerPurple);
        sun.classList.add("east");
    }
}

*/
// history
const icon = document.querySelector(".icon-arrow-right");
const historique = document.querySelector(".historique");
const historyText = document.querySelector(".historique .text");
const historyContainer = document.querySelector(".history-container");
icon.addEventListener("click", () => {
  let closed = false;
  if (historique.classList.contains("active")) {
    historyContainer.classList.remove("active");
    closed = true;
  }
  historique.classList.toggle("active");
  historyText.classList.toggle("simple");
  icon.classList.toggle("active");

  if (!closed) {
    window.setTimeout(() => {
      historyContainer.classList.add("active");
    }, 800);
  }
});

var predictionAffichage = new Array();
var currentPredictionIndex = 1;

var continueButton = document.querySelector("[data-continuer]");
var retourButton = document.querySelector("[data-retour]");

function afficher(predictions)
{
  predictionAffichage = predictions;

  if (predictionAffichage.length == 0) return;
  setTimeout(
      () => {
        document.querySelector(".response-text-container").classList.add("show");
      }, 1000
  )

  afficherPrediction(true)
}

function afficherPrediction(add) {
  const categorie = document.querySelector("[data-categorie]");
  const predictionTexte = document.querySelector("[data-prediction]");

  if (predictionAffichage[currentPredictionIndex] == undefined && add) {
    currentPredictionIndex--;
  } else if (!predictionAffichage[currentPredictionIndex] == undefined && !add) {
    currentPredictionIndex++;
  }

  var catText = predictionAffichage[currentPredictionIndex]['nomcategorie'];
  categorie.textContent = catText.charAt(0).toUpperCase() + catText.slice(1);
  var predText = predictionAffichage[currentPredictionIndex]['prediction'];
  predictionTexte.textContent = predText.charAt(0).toUpperCase() + predText.slice(1);
}

continueButton.addEventListener("click", (e) => {
  e.preventDefault();
  currentPredictionIndex++;

  if (currentPredictionIndex >= predictionAffichage.length) currentPredictionIndex = 1;

  afficherPrediction(true)
})

retourButton.addEventListener("click", (e) => {
  e.preventDefault();
  currentPredictionIndex--;


  if (currentPredictionIndex < 1) currentPredictionIndex = 1;

  afficherPrediction(false);
})