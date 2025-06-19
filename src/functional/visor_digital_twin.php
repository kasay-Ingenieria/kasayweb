<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visor Digital Twin (Realista)</title>
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
        import { GLTFLoader } from 'three/addons/loaders/GLTFLoader.js';
        import { RGBELoader } from 'three/addons/loaders/RGBELoader.js';
        
        // --- Configura aquí el centro de rotación ---
        const OFFSET_X = 0;
        const OFFSET_Y = 1;
        const OFFSET_Z = 0;

        // --- Configuraciones Generales ---
        const MODEL_PATH = 'assets/glb/digital_twin_modelo.glb';
        const ENVIRONMENT_MAP_PATH = 'textures/royal_esplanade_1k.hdr';
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
            renderer.setPixelRatio(window.devicePixelRatio);
            renderer.setSize(container.clientWidth, container.clientHeight);
            
            // ✅ SE APLICA EL RENDERIZADO FOTORREALISTA
            renderer.toneMapping = THREE.ACESFilmicToneMapping;
            renderer.toneMappingExposure = 1.5;

            container.appendChild(renderer.domElement);
            
            controls = new OrbitControls(camera, renderer.domElement);
            controls.enableDamping = true;
            controls.addEventListener('start', () => { isAutoRotating = false; clearTimeout(inactivityTimer); });
            controls.addEventListener('end', () => { startInactivityTimer(); });

            const ambientLight = new THREE.AmbientLight(0xffffff, 1.5);
            scene.add(ambientLight);
            const directionalLight = new THREE.DirectionalLight(0xffffff, 1.5);
            directionalLight.position.set(100, 100, 50).normalize();
            scene.add(directionalLight);
            
            // ✅ SE CARGA EL MAPA DE ENTORNO PARA LUCES Y REFLEJOS
            new RGBELoader().load(ENVIRONMENT_MAP_PATH, (texture) => {
                texture.mapping = THREE.EquirectangularReflectionMapping;
                scene.environment = texture;
            });

            const loader = new GLTFLoader();
            loader.load(MODEL_PATH, (gltf) => {
                const model = gltf.scene;
                
                const box = new THREE.Box3().setFromObject(model);
                const center = box.getCenter(new THREE.Vector3());
                const size = box.getSize(new THREE.Vector3());

                const initialPosition = new THREE.Vector3(
                    -center.x + OFFSET_X, 
                    -center.y + OFFSET_Y, 
                    -center.z + OFFSET_Z
                );
                model.position.copy(initialPosition);

                const pivot = new THREE.Group();
                scene.add(pivot);
                pivot.add(model);
                
                const boxHelper = new THREE.BoxHelper(model, 0xffff00);
                pivot.add(boxHelper);
                boxHelper.visible = false;

                objectToRotate = pivot; 
                startInactivityTimer();
                pivot.rotation.set(0, 5, 0); 

                const maxDim = Math.max(size.x, size.y, size.z);
                const fov = camera.fov * (Math.PI / 180);
                
                let cameraZ = Math.abs(maxDim / 2 / Math.tan(fov / 2)) * 0.7; 
                camera.position.set(0, cameraZ * 0.4, cameraZ);
                controls.target.copy(pivot.position);
                
                controls.minDistance = maxDim * 0.1;
                controls.maxDistance = maxDim * 2;
                
                controls.update();

            }, undefined, (error) => {
                console.error('Error al cargar el modelo:', error);
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

