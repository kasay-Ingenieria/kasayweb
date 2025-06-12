<!DOCTYPE html>
<html lang="es">
<head>
    <title>Visor 3D con Clic de Enfoque</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv='imagetoolbar' content='no'/>
    
    <style>
        html, body {
            margin: 0; padding: 0; overflow: hidden;
            width: 100%; height: 100%; background-color: #282828;
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
        import { GLTFLoader } from 'three/addons/loaders/GLTFLoader.js';
        import { RGBELoader } from 'three/addons/loaders/RGBELoader.js';
        import { gsap } from 'gsap';

        // --- VARIABLES GLOBALES ---
        let camera, scene, renderer, controls;
        let model; // Hacemos el modelo accesible globalmente
        
        // --- Variables para Raycasting y control de clic/arrastre ---
        const raycaster = new THREE.Raycaster();
        const mouse = new THREE.Vector2();
        let mouseDownPos = new THREE.Vector2();
        let isDragging = false;

        function init() {
            // --- CONFIGURACIÓN DE ESCENA, CÁMARA Y RENDERER ---
            scene = new THREE.Scene();
            camera = new THREE.PerspectiveCamera(50, window.innerWidth / window.innerHeight, 0.1, 20000);
            
            renderer = new THREE.WebGLRenderer({ antialias: true, powerPreference: "high-performance" });
            renderer.setPixelRatio(window.devicePixelRatio);
            renderer.setSize(window.innerWidth, window.innerHeight);
            renderer.toneMapping = THREE.ACESFilmicToneMapping;
            renderer.toneMappingExposure = 1.8;
            document.body.appendChild(renderer.domElement);

            // --- CONTROLES DE CÁMARA ---
            controls = new OrbitControls(camera, renderer.domElement);
            controls.enableDamping = true;
            
            // ✅ Clic izquierdo vuelve a ser para ROTAR
            controls.mouseButtons.LEFT = THREE.MOUSE.ROTATE;
            controls.mouseButtons.RIGHT = THREE.MOUSE.PAN; // Clic derecho para mover
            
            // --- ILUMINACIÓN ---
            scene.add(new THREE.AmbientLight(0xffffff, 1.5));
            const directionalLight = new THREE.DirectionalLight(0xffffff, 2.0);
            directionalLight.position.set(100, 100, 50);
            scene.add(directionalLight);
            new RGBELoader().load('https://unpkg.com/three@0.165.0/examples/textures/equirectangular/royal_esplanade_1k.hdr', (texture) => {
                texture.mapping = THREE.EquirectangularReflectionMapping;
                scene.environment = texture;
            });
            
            // --- CARGA DEL MODELO ---
            const loader = new GLTFLoader();
            loader.load('modelo_5.glb', (gltf) => {
                model = gltf.scene; // Asignamos el modelo a la variable global
                const box = new THREE.Box3().setFromObject(model);
                const center = box.getCenter(new THREE.Vector3());
                model.position.sub(center);
                scene.add(model);
                const size = box.getSize(new THREE.Vector3());
                const modelDiagonal = size.length();
                camera.position.set(center.x, center.y, center.z + modelDiagonal);
                controls.target.copy(center);
                controls.update();
            }, undefined, (error) => {
                console.error("Error al cargar el modelo:", error);
            });
            
            // --- EVENTOS DE RATÓN PARA LA NUEVA FUNCIONALIDAD ---
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
            // Si el ratón se mueve más de una pequeña distancia, consideramos que es un arrastre
            if (mouseDownPos.distanceTo(new THREE.Vector2(event.clientX, event.clientY)) > 5) {
                isDragging = true;
            }
        }

        function onMouseUp(event) {
            // Si no fue un arrastre, es un clic. Procedemos a enfocar.
            if (!isDragging) {
                // 1. Normalizar coordenadas del ratón (-1 a +1)
                mouse.x = (event.clientX / window.innerWidth) * 2 - 1;
                mouse.y = -(event.clientY / window.innerHeight) * 2 + 1;

                // 2. Lanzar el rayo desde la cámara
                raycaster.setFromCamera(mouse, camera);

                // 3. Comprobar si el rayo choca con el modelo
                if (model) {
                    const intersects = raycaster.intersectObject(model, true);

                    if (intersects.length > 0) {
                        // El primer objeto es el más cercano
                        const intersectionPoint = intersects[0].point;
                        
                        // 4. Animación suave hacia el nuevo punto
                        flyToPoint(intersectionPoint);
                    }
                }
            }
        }

        function flyToPoint(targetPoint) {
            const duration = 1.2; // Duración de la animación en segundos

            // Animar el "target" de los controles hacia el punto de intersección
            gsap.to(controls.target, {
                duration: duration,
                x: targetPoint.x,
                y: targetPoint.y,
                z: targetPoint.z,
                ease: "power3.inOut" // Efecto de aceleración y desaceleración
            });
            
            // Animar la posición de la cámara para mantener la distancia relativa
            // Se calcula un nuevo punto para la cámara basado en la dirección actual
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