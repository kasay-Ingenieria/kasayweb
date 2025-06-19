<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visor Nube de Puntos</title>
    <base href="/kasayweb/">
    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
            overflow: hidden;
            background-color: #282828;
        }
        #visor-container {
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
    <div id="visor-container"></div>

    <script type="importmap">
    {
        "imports": {
            "three": "https://cdn.jsdelivr.net/npm/three@0.165.0/build/three.module.js",
            "three/addons/": "https://cdn.jsdelivr.net/npm/three@0.165.0/examples/jsm/"
        }
    }
    </script>

    <script type="module">
        import * as THREE from 'three';
        import { OrbitControls } from 'three/addons/controls/OrbitControls.js';
        import { PLYLoader } from 'three/addons/loaders/PLYLoader.js';
        
        // ===================================================================
        // ✅ 1. CONFIGURA AQUÍ EL CENTRO DE ROTACIÓN PARA LA NUBE DE PUNTOS
        // ===================================================================
        const OFFSET_X = 0;
        const OFFSET_Y = 0;
        const OFFSET_Z = 0;
        // ===================================================================

        // --- Configuraciones Generales ---
        const MODEL_PATH = 'assets/glb/nube_modelo.ply'; // <-- Ruta al archivo .ply
        const INACTIVITY_DELAY = 4000;
        const ROTATION_SPEED = 0.004;

        // --- Inicialización ---
        const container = document.getElementById('visor-container');
        let camera, scene, renderer, controls;
        let inactivityTimer, objectToRotate;
        let isAutoRotating = false;

        function startInactivityTimer() {
            clearTimeout(inactivityTimer);
            inactivityTimer = setTimeout(() => { isAutoRotating = true; }, INACTIVITY_DELAY);
        }
        
        function init() {
            scene = new THREE.Scene();
            scene.background = new THREE.Color(0x282828);
            camera = new THREE.PerspectiveCamera(50, container.clientWidth / container.clientHeight, 0.1, 20000);
            renderer = new THREE.WebGLRenderer({ antialias: true, powerPreference: "high-performance" });
            renderer.setPixelRatio(Math.min(window.devicePixelRatio, 1.5));
            renderer.setSize(container.clientWidth, container.clientHeight);
            container.appendChild(renderer.domElement);
            
            controls = new OrbitControls(camera, renderer.domElement);
            controls.enableDamping = true;
            controls.addEventListener('start', () => { isAutoRotating = false; clearTimeout(inactivityTimer); });
            controls.addEventListener('end', () => { startInactivityTimer(); });

            // No se necesita iluminación compleja para la nube de puntos con colores de vértice
            const ambientLight = new THREE.AmbientLight(0xffffff, 1.0);
            scene.add(ambientLight);

            const loader = new PLYLoader();
            loader.load(MODEL_PATH, (geometry) => {
                // La geometría ya viene con colores si el archivo PLY los incluye
                geometry.computeBoundingBox();

                const material = new THREE.PointsMaterial({
                    size: 0.02,         // Tamaño de cada punto
                    vertexColors: true  // Le dice al material que use los colores del archivo
                });

                const points = new THREE.Points(geometry, material);
                
                // Rotar el modelo si es necesario (algunos softwares exportan con ejes diferentes)
                points.rotation.x = -Math.PI / 2;
                
                const box = new THREE.Box3().setFromObject(points);
                const center = box.getCenter(new THREE.Vector3());
                const size = box.getSize(new THREE.Vector3());
                
                // Aplicamos el offset a la posición inicial
                const initialPosition = new THREE.Vector3(
                    -center.x + OFFSET_X, 
                    -center.y + OFFSET_Y, 
                    -center.z + OFFSET_Z
                );
                points.position.copy(initialPosition);

                const pivot = new THREE.Group();
                scene.add(pivot);
                pivot.add(points);
                
                objectToRotate = pivot; 
                startInactivityTimer();
                pivot.rotation.set(0, 5, 0); 
                
                const maxDim = Math.max(size.x, size.y, size.z);
                const fov = camera.fov * (Math.PI / 180);
                
                let cameraZ = Math.abs(maxDim / 2 / Math.tan(fov / 2)) * 0.5// Ajuste de zoom para nubes de puntos
                camera.position.set(0, cameraZ * 0.4, cameraZ);
                controls.target.copy(pivot.position);
                
                controls.minDistance = maxDim * 0.1;
                controls.maxDistance = maxDim * 5; // Aumentamos el límite para poder verla completa
                
                controls.update();

            }, undefined, (error) => {
                console.error('Error al cargar la nube de puntos:', error);
            });

            window.addEventListener('resize', onWindowResize);
        }

        function onWindowResize() {
            camera.aspect = container.clientWidth / container.clientHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(container.clientWidth, container.clientHeight);
        }

        function animate() {
            requestAnimationFrame(animate);
            if (isAutoRotating && objectToRotate) {
                objectToRotate.rotation.y += ROTATION_SPEED;
            }
            controls.update();
            renderer.render(scene, camera);
        }

        init();
        animate();
    </script>
</body>
</html>
