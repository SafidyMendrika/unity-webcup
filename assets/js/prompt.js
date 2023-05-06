// Create a Three.js scene
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
animate();

// Handle button click
var typeButtons = document.querySelectorAll('.type-button');

typeButtons.forEach(typeButton => {
    typeButton.addEventListener('click', () => {
        for (let i = 0; i < typeButtons.length; i++) {
            typeButtons[i].classList.toggle('active', false);
        }

        typeButton.classList.toggle('active');

        var dreamTypeValue = document.querySelector('#dream-type');
        dreamTypeValue.setAttribute("value", typeButton.dataset.type);
    })
});