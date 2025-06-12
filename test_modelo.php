<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visor Múltiple con Three.js - Versión Optimizada</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@main/dist/en/v7.0.0/legacy/ol.css" type="text/css">
    
    <style>
        html, body { margin: 0; padding: 0; height: 100%; width: 100%; overflow: hidden; font-family: sans-serif; background-color: #2e2e2e; color: #ffffff; }
        #container { display: flex; flex-direction: row; width: 100%; height: 100vh; }
        #columna-modelos { width: 50%; height: 100%; display: flex; flex-direction: column; }
        .panel-modelo { height: 50%; width: 100%; box-sizing: border-box; border-bottom: 1px solid #555; display: flex; flex-direction: column; }
        .panel-modelo:last-child { border-bottom: none; }
        #panel-mapa { width: 50%; height: 100%; border-left: 1px solid #555; display: flex; flex-direction: column; }
        .panel-header { background-color: #1c1c1c; padding: 10px; font-weight: bold; text-align: center; border-bottom: 1px solid #555; flex-shrink: 0; }
        .panel-content { flex: 1; overflow: hidden; position: relative; }
        .panel-content canvas { display: block; }
 
    </style>
</head>
<body>

    <div id="container">
        <div id="columna-modelos">
            <div class="panel-modelo">
                <div class="panel-header">Modelo A (Con Textura)</div>
                <div id="visor-A" class="panel-content"></div>
            </div>
            <div class="panel-modelo">
                <div class="panel-header">Modelo B (Maqueta sin Textura)</div>
                <div id="visor-B" class="panel-content"></div>
            </div>
        </div>
 
    </div>

    <script type="importmap">
    {
        "imports": {
            "three": "https://unpkg.com/three@0.165.0/build/three.module.js",
            "three/addons/": "https://unpkg.com/three@0.165.0/examples/jsm/"
        }
    }
    </script>

    <script type="module">
        import * as THREE from 'three';
        import { OrbitControls } from 'three/addons/controls/OrbitControls.js';
        import { GLTFLoader } from 'three/addons/loaders/GLTFLoader.js';
        import { EffectComposer } from 'three/addons/postprocessing/EffectComposer.js';
        import { RenderPass } from 'three/addons/postprocessing/RenderPass.js';
        import { SSAOPass } from 'three/addons/postprocessing/SSAOPass.js';
        import { RGBELoader } from 'three/addons/loaders/RGBELoader.js';

        // --- FUNCIÓN PRINCIPAL PARA CREAR UN VISOR DE THREE.JS ---
        // AHORA RECIBE EL OBJETO DEL MODELO YA CARGADO
        function setupThreeViewer(container, modelObject, applyMaquetteMaterial) {
            
            // Paneles de Control
            const initialDistanceFactor = 0.18;
            const cameraAngleHorizontal = 2.5;
            const cameraAngleVertical = 1.5;
            const targetOffsetX = 0;
            const targetOffsetY = -0.04;
            const DAMPING_FACTOR = 0.05;
            const ZOOM_SPEED = 1;
            const ROTATE_SPEED = 1;
            const PAN_SPEED = 1.5;
            const INACTIVITY_DELAY = 3000;
            const ROTATION_SPEED = 0.003;
            const BACKGROUND_COLOR = 0x282828;
            const AMBIENT_INTENSITY_A = 1.5;
            const DIRECT_INTENSITY_A = 1.5;
            const TONE_MAPPING_EXPOSURE_A = 2;

            let inactivityTimer, isAutoRotating = false, objectToRotate, composer;

            const scene = new THREE.Scene();
            const camera = new THREE.PerspectiveCamera(50, container.clientWidth / container.clientHeight, 0.1, 20000);
            
            // ✅ OPTIMIZACIÓN 1: AJUSTE DE RENDERER
            const renderer = new THREE.WebGLRenderer({ antialias: true, powerPreference: "high-performance" });
            renderer.setClearColor(BACKGROUND_COLOR); 
            renderer.setPixelRatio(window.devicePixelRatio * 0.8); // Renderiza a menor resolución
            renderer.setSize(container.clientWidth, container.clientHeight);
            container.appendChild(renderer.domElement);

            const controls = new OrbitControls(camera, renderer.domElement);
            controls.enableDamping = true;
            controls.dampingFactor = DAMPING_FACTOR;
            controls.zoomSpeed = ZOOM_SPEED;
            controls.rotateSpeed = ROTATE_SPEED;
            controls.panSpeed = PAN_SPEED;

            const ambientLight = new THREE.AmbientLight(0xffffff, 0.8);
            scene.add(ambientLight);
            const directionalLight = new THREE.DirectionalLight(0xffffff, 1.5);
            directionalLight.position.set(100, 100, 50);
            scene.add(directionalLight);

            if (applyMaquetteMaterial) {
                composer = new EffectComposer(renderer);
                const renderPass = new RenderPass(scene, camera);
                composer.addPass(renderPass);
                const ssaoPass = new SSAOPass(scene, camera, container.clientWidth, container.clientHeight);
                ssaoPass.kernelRadius = 16;
                // ✅ OPTIMIZACIÓN 2: REDUCIR MUESTRAS DE SSAO
                ssaoPass.samples = 16;
                composer.addPass(ssaoPass);
            } else {
                renderer.toneMapping = THREE.ACESFilmicToneMapping;
                renderer.toneMappingExposure = TONE_MAPPING_EXPOSURE_A;
                ambientLight.intensity = AMBIENT_INTENSITY_A;
                directionalLight.intensity = DIRECT_INTENSITY_A;
                new RGBELoader().load('https://unpkg.com/three@0.165.0/examples/textures/equirectangular/royal_esplanade_1k.hdr', function (texture) {
                    texture.mapping = THREE.EquirectangularReflectionMapping;
                    scene.environment = texture; 
                });
            }
            
            const startInactivityTimer = () => { clearTimeout(inactivityTimer); inactivityTimer = setTimeout(() => { isAutoRotating = true; }, INACTIVITY_DELAY); };
            controls.addEventListener('start', () => { isAutoRotating = false; clearTimeout(inactivityTimer); });
            controls.addEventListener('end', () => { startInactivityTimer(); });

            // --- CONFIGURACIÓN DEL MODELO (YA NO LO CARGA, SOLO LO PROCESA) ---
            const model = modelObject;
            if (applyMaquetteMaterial) {
                const maquetteMaterial = new THREE.MeshStandardMaterial({ color: 0xffffff, roughness: 0.8, metalness: 0.1 });
                model.traverse((child) => { if (child.isMesh) { child.material = maquetteMaterial; } });
            }
            const box = new THREE.Box3().setFromObject(model);
            const center = box.getCenter(new THREE.Vector3());
            model.position.sub(center);
            const group = new THREE.Group();
            group.add(model);
            group.position.copy(center);
            scene.add(group);
            objectToRotate = group;
            const size = box.getSize(new THREE.Vector3());
            const modelDiagonal = size.length();
            controls.target.copy(group.position);
            controls.target.x += modelDiagonal * targetOffsetX;
            controls.target.y += modelDiagonal * targetOffsetY;
            const radius = modelDiagonal * initialDistanceFactor;
            camera.position.copy(controls.target);
            camera.position.x += radius * cameraAngleHorizontal;
            camera.position.y += radius * cameraAngleVertical;
            camera.position.z += radius;
            camera.lookAt(controls.target);
            controls.minDistance = modelDiagonal * 0.1;
            controls.maxDistance = modelDiagonal * 1;
            controls.update();
            startInactivityTimer();

            function animate() {
                requestAnimationFrame(animate);
                if (isAutoRotating && objectToRotate) { objectToRotate.rotation.y += ROTATION_SPEED; }
                controls.update();
                if (composer) { composer.render(); } else { renderer.render(scene, camera); }
            }
            animate();

            window.addEventListener('resize', () => {
                camera.aspect = container.clientWidth / container.clientHeight;
                camera.updateProjectionMatrix();
                renderer.setSize(container.clientWidth, container.clientHeight);
                if (composer) { composer.setSize(container.clientWidth, container.clientHeight); }
            });
        }

        // --- ✅ INICIALIZACIÓN OPTIMIZADA ---
        async function init() {
            const loader = new GLTFLoader();
            const loadModel = (url) => new Promise((resolve, reject) => loader.load(url, (gltf) => resolve(gltf.scene), undefined, reject));

            try {
                console.log("Iniciando carga de modelos...");
                const [modelA_scene, modelB_scene] = await Promise.all([
                    loadModel('modelo_5.glb'),
                    loadModel('modelo_6.glb')
                ]);
                console.log("Modelos cargados con éxito.");

                const visorA = document.getElementById('visor-A');
                const visorB = document.getElementById('visor-B');

                setupThreeViewer(visorA, modelA_scene, false);
                setupThreeViewer(visorB, modelB_scene, true); // Clonar no es necesario si son archivos diferentes

            } catch (error) {
                console.error("Fallo crítico al cargar los modelos:", error);
            }
        }

        document.addEventListener('DOMContentLoaded', init);
    </script>

    <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@main/dist/en/v7.0.0/legacy/ol.js"></script>
</body>
</html>