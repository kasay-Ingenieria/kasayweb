<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visor DTM (con Simbología y Ayuda Visual)</title>
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
        
        // ===================================================================
        // 1. CONFIGURA AQUÍ EL CENTRO DE ROTACIÓN PARA EL DTM
        // ===================================================================
        const OFFSET_X = 0;
        const OFFSET_Y = 0;
        const OFFSET_Z = 0;
        // ===================================================================

        // --- Configuraciones Generales ---
        const MODEL_PATH = 'assets/glb/dtm_modelo.glb';
        const INACTIVITY_DELAY = 4000;
        const ROTATION_SPEED = 0.004;

        // --- Rampa de Colores Detallada ---
        const colorRamp = [
            { height: 0.0,  color: new THREE.Color(0xADD8E6) }, { height: 0.05, color: new THREE.Color(0x9FE2BF) },
            { height: 0.1,  color: new THREE.Color(0x90EE90) }, { height: 0.15, color: new THREE.Color(0x67D180) },
            { height: 0.2,  color: new THREE.Color(0x3CB371) }, { height: 0.25, color: new THREE.Color(0x2FA249) },
            { height: 0.3,  color: new THREE.Color(0x228B22) }, { height: 0.35, color: new THREE.Color(0x9ACD32) },
            { height: 0.4,  color: new THREE.Color(0xFFF974) }, { height: 0.45, color: new THREE.Color(0xFFEC41) },
            { height: 0.5,  color: new THREE.Color(0xFFD700) }, { height: 0.55, color: new THREE.Color(0xFFC000) },
            { height: 0.6,  color: new THREE.Color(0xFFA500) }, { height: 0.65, color: new THREE.Color(0xFF9900) },
            { height: 0.7,  color: new THREE.Color(0xFF8C00) }, { height: 0.75, color: new THREE.Color(0xCD7F32) },
            { height: 0.8,  color: new THREE.Color(0xA0522D) }, { height: 0.85, color: new THREE.Color(0x966939) },
            { height: 0.9,  color: new THREE.Color(0x8B4513) }, { height: 0.95, color: new THREE.Color(0xC9C0BB) },
            { height: 1.0,  color: new THREE.Color(0xFFFFFF) }
        ];

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

            const ambientLight = new THREE.AmbientLight(0xffffff, 1.0);
            scene.add(ambientLight);
            const directionalLight = new THREE.DirectionalLight(0xffffff, 1.0);
            directionalLight.position.set(100, 100, 50);
            scene.add(directionalLight);

            const loader = new GLTFLoader();
            loader.load(MODEL_PATH, (gltf) => {
                const model = gltf.scene;
                
                // --- ✅ ORDEN CORREGIDO ---

                // 1. Primero, se calcula el centro y se aplica el offset para posicionar el modelo.
                let box = new THREE.Box3().setFromObject(model);
                const center = box.getCenter(new THREE.Vector3());
                const size = box.getSize(new THREE.Vector3());
                
                const initialPosition = new THREE.Vector3(
                    -center.x + OFFSET_X, 
                    -center.y + OFFSET_Y, 
                    -center.z + OFFSET_Z
                );
                model.position.copy(initialPosition);
                
                // Forzar la actualización de la matriz del modelo para que los cálculos siguientes sean correctos
                model.updateMatrixWorld(true);

                // 2. Ahora que el modelo está en su posición final, calculamos la caja y el rango de altura.
                box = new THREE.Box3().setFromObject(model);
                const globalMinY = box.min.y;
                const globalMaxY = box.max.y;
                const globalHeightRange = globalMaxY - globalMinY;
                
                // 3. Con la posición y el rango correctos, aplicamos los colores.
                model.traverse((child) => {
                    if (child.isMesh) {
                        const geometry = child.geometry;
                        const positionAttribute = geometry.attributes.position;
                        const colors = [];
                        const color = new THREE.Color();
                        const vertex = new THREE.Vector3();

                        for (let i = 0; i < positionAttribute.count; i++) {
                            vertex.fromBufferAttribute(positionAttribute, i);
                            child.localToWorld(vertex); // Ahora esto obtiene la posición Y correcta
                            const worldY = vertex.y;
                            const normalizedY = (globalHeightRange > 0) ? ((worldY - globalMinY) / globalHeightRange) : 0;
                            
                            for (let j = 0; j < colorRamp.length - 1; j++) {
                                const lowerStop = colorRamp[j];
                                const upperStop = colorRamp[j + 1];
                                if (normalizedY >= lowerStop.height && normalizedY <= upperStop.height) {
                                    const ratio = (normalizedY - lowerStop.height) / (upperStop.height - lowerStop.height);
                                    color.lerpColors(lowerStop.color, upperStop.color, ratio);
                                    break;
                                }
                            }
                            colors.push(color.r, color.g, color.b);
                        }

                        geometry.setAttribute('color', new THREE.Float32BufferAttribute(colors, 3));
                        child.material = new THREE.MeshStandardMaterial({
                            vertexColors: true,
                            roughness: 0.9,
                            metalness: 0.1
                        });
                    }
                });
                
                const pivot = new THREE.Group();
                scene.add(pivot);
                pivot.add(model);
                
                const boxHelper = new THREE.BoxHelper(model, 0xffff00);
                pivot.add(boxHelper);
                boxHelper.visible = false;
                
                objectToRotate = pivot; 
                startInactivityTimer();
                pivot.rotation.set(0, 1, 0); 

                const maxDim = Math.max(size.x, size.y, size.z);
                const fov = camera.fov * (Math.PI / 180);
                
                let cameraZ = Math.abs(maxDim / 2 / Math.tan(fov / 2)) * 0.6;
                camera.position.set(0, cameraZ * 0.4, cameraZ);
                controls.target.copy(pivot.position);
                
                controls.minDistance = maxDim * 0.1;
                controls.maxDistance = maxDim * 2;
                
                controls.update();

            }, undefined, (error) => {
                console.error('Error al cargar el modelo DTM:', error);
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
