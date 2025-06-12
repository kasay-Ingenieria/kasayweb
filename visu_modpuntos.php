<!DOCTYPE html>
<html lang="es">
<head>
    <title>Visor de Nube de Puntos (.ply)</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv='imagetoolbar' content='no'/>
    
    <style>
        html, body {
            margin: 0; padding: 0; overflow: hidden;
            width: 100%; height: 100%; background-color: #1c1c1c; /* Fondo un poco más oscuro para resaltar puntos */
        }
        canvas { display: block; }
    </style>
</head>
<body>
    <script type="importmap">
    {
        "imports": {
            "three": "https://unpkg.com/three@0.165.0/build/three.module.js",
            "three/addons/": "https://unpkg.com/three@0.165.0/examples/jsm/",
            "gsap": "https://unpkg.com/gsap@3.12.5/index.js"
        }
    }
    </script>

    <script type="module">
        import * as THREE from 'three';
        import { OrbitControls } from 'three/addons/controls/OrbitControls.js';
        import { PLYLoader } from 'three/addons/loaders/PLYLoader.js'; // <-- CAMBIO DE CARGADOR
        import { gsap } from 'gsap';

        // --- VARIABLES GLOBALES ---
        let camera, scene, renderer, controls;
        let pointCloud; // Variable para la nube de puntos
        
        const raycaster = new THREE.Raycaster();
        const mouse = new THREE.Vector2();
        let mouseDownPos = new THREE.Vector2();
        let isDragging = false;

        function init() {
            scene = new THREE.Scene();
            camera = new THREE.PerspectiveCamera(50, window.innerWidth / window.innerHeight, 0.1, 20000);
            
            renderer = new THREE.WebGLRenderer({ antialias: true });
            renderer.setPixelRatio(window.devicePixelRatio);
            renderer.setSize(window.innerWidth, window.innerHeight);
            document.body.appendChild(renderer.domElement);

            controls = new OrbitControls(camera, renderer.domElement);
            controls.enableDamping = true;
            controls.mouseButtons.LEFT = THREE.MOUSE.ROTATE;
            controls.mouseButtons.RIGHT = THREE.MOUSE.PAN;
            
            // --- CARGADOR PLY ---
            const loader = new PLYLoader();
            loader.load('nube_de_puntos.ply', (geometry) => { // El loader devuelve una geometría directamente
                
                // 1. Centrar la geometría antes de crear el objeto
                geometry.computeBoundingBox();
                const center = new THREE.Vector3();
                geometry.boundingBox.getCenter(center);
                geometry.center();

                // 2. Crear el material para los puntos
                const material = new THREE.PointsMaterial({
                    size: 0.01,         // <-- ¡PUEDE QUE NECESITES AJUSTAR ESTO!
                    vertexColors: true  // Usa los colores definidos en el archivo .ply
                });

                // 3. Crear el objeto de nube de puntos
                pointCloud = new THREE.Points(geometry, material);
                pointCloud.position.copy(center); // Lo movemos a su centro original
                scene.add(pointCloud);

                // 4. Encuadrar la vista inicial
                const size = new THREE.Vector3();
                geometry.boundingBox.getSize(size);
                const modelDiagonal = size.length();
                camera.position.set(center.x, center.y, center.z + modelDiagonal);
                controls.target.copy(center);
                controls.update();

            }, undefined, (error) => {
                console.error("Error al cargar el archivo .ply:", error);
            });
            
            renderer.domElement.addEventListener('mousedown', onMouseDown);
            renderer.domElement.addEventListener('mousemove', onMouseMove);
            renderer.domElement.addEventListener('mouseup', onMouseUp);

            animate();
        }

        function onMouseDown(event) {
            isDragging = false;
            mouseDownPos.set(event.clientX, event.clientY);
        }

        function onMouseMove(event) {
            if (mouseDownPos.distanceTo(new THREE.Vector2(event.clientX, event.clientY)) > 5) {
                isDragging = true;
            }
        }

        function onMouseUp(event) {
            if (!isDragging) {
                mouse.x = (event.clientX / window.innerWidth) * 2 - 1;
                mouse.y = -(event.clientY / window.innerHeight) * 2 + 1;
                raycaster.setFromCamera(mouse, camera);

                if (pointCloud) {
                    // El raycaster necesita saber el tamaño de los puntos para una mejor precisión
                    raycaster.params.Points.threshold = 0.05; // Ajusta este umbral si el clic no es preciso
                    
                    const intersects = raycaster.intersectObject(pointCloud, true);
                    if (intersects.length > 0) {
                        flyToPoint(intersects[0].point);
                    }
                }
            }
        }

        function flyToPoint(targetPoint) {
            const duration = 1.2;
            gsap.to(controls.target, {
                duration: duration,
                x: targetPoint.x,
                y: targetPoint.y,
                z: targetPoint.z,
                ease: "power3.inOut"
            });
            
            const cameraDirection = new THREE.Vector3().subVectors(camera.position, controls.target).normalize();
            const distance = camera.position.distanceTo(controls.target);
            const newCameraPosition = new THREE.Vector3().addVectors(targetPoint, cameraDirection.multiplyScalar(distance));

            gsap.to(camera.position, {
                duration: duration,
                x: newCameraPosition.x,
                y: newCameraPosition.y,
                z: newCameraPosition.z,
                ease: "power3.inOut"
            });
        }

        function animate() {
            requestAnimationFrame(animate);
            controls.update();
            renderer.render(scene, camera);
        }

        function onWindowResize() {
            camera.aspect = window.innerWidth / window.innerHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(window.innerWidth, window.innerHeight);
        }
        
        init();
        window.addEventListener('resize', onWindowResize);
    </script>
</body>
</html>