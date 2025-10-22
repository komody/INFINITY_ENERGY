<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/style.css">
  <!-- <link rel="stylesheet" href="./css/kv.css"> -->
  <script type="importmap">
    {
      "imports": {
        "three": "https://cdn.jsdelivr.net/npm/three@0.164.1/build/three.module.js",
        "three/addons/": "https://cdn.jsdelivr.net/npm/three@0.164.1/examples/jsm/"
      }
    }
  </script>
  <script type="module">
    import * as THREE from "three";
    import {
      OrbitControls
    } from "three/addons/controls/OrbitControls.js";
    import {
      GLTFLoader
    } from "three/addons/loaders/GLTFLoader.js";
    import {
      RGBELoader
    } from "three/addons/loaders/RGBELoader.js";


    async function initCanScene(canvasSelector) {
      const canvasElement = document.querySelector(canvasSelector);
      if (!canvasElement) return;

      const getCanvasSize = () => ({
        w: canvasElement.clientWidth || canvasElement.width,
        h: canvasElement.clientHeight || canvasElement.height,
      });

      const renderer = new THREE.WebGLRenderer({
        canvas: canvasElement,
        alpha: true,
      });
      renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
      const {
        w: initW,
        h: initH
      } = getCanvasSize();
      renderer.setSize(initW, initH, false);

      renderer.useLegacyLights = false;
      renderer.outputColorSpace = THREE.SRGBColorSpace;
      renderer.toneMapping = THREE.ACESFilmicToneMapping;
      renderer.toneMappingExposure = 0.9;

      const scene = new THREE.Scene();

      const camera = new THREE.PerspectiveCamera(10, (initW || 1) / (initH || 1), 0.1, 10000);
      camera.position.set(1000, 150, 2);

      const controls = new OrbitControls(camera, canvasElement);
      controls.target.set(0, 0, 0);
      controls.update();

      const hemiLight = new THREE.HemisphereLight(0xffffff, 0x444444, 0.9);
      hemiLight.position.set(0, 1, 0);
      scene.add(hemiLight);

      const dirLight = new THREE.DirectionalLight(0xffffff, 1.0);
      dirLight.position.set(3, 5, 2);
      scene.add(dirLight);

      const ambientLight = new THREE.AmbientLight(0xffffff, 0.4);
      scene.add(ambientLight);

      const pmremGenerator = new THREE.PMREMGenerator(renderer);
      pmremGenerator.compileEquirectangularShader();
      const hdrLoader = new RGBELoader().setDataType(THREE.FloatType);
      const hdrEquirect = await hdrLoader.loadAsync(
        "https://cdn.jsdelivr.net/gh/mrdoob/three.js@r164/examples/textures/equirectangular/royal_esplanade_1k.hdr"
      );
      const envRT = pmremGenerator.fromEquirectangular(hdrEquirect);
      scene.environment = envRT.texture;
      hdrEquirect.dispose();
      pmremGenerator.dispose();

      const loader = new GLTFLoader();
      const gltf = await loader.loadAsync("./3D/can_kv.gltf");
      const model = gltf.scene;
      scene.add(model);

      model.scale.set(30, 30, 30);

      model.traverse((child) => {
        if (child.isMesh && child.material) {
          if (child.material.envMapIntensity !== undefined) {
            child.material.envMapIntensity = 1.2;
          }
          child.material.metalness = 0.5;
          child.material.roughness = 0.7;
          child.material.envMapIntensity = 0.2;
          child.material.needsUpdate = true;
        }
      });

      function animate() {
        requestAnimationFrame(animate);
        model.rotation.y += 0.001;
        renderer.render(scene, camera);
      }
      animate();

      function onResize() {
        const {
          w,
          h
        } = getCanvasSize();
        if (!w || !h) return;
        renderer.setSize(w, h, false);
        camera.aspect = w / h;
        camera.updateProjectionMatrix();
      }
      window.addEventListener('resize', onResize);
      // 初期に一度同期
      onResize();
    }

    initCanScene('#WebGL-output');
    initCanScene('#WebGL-output-mobile');
  </script>
</head>

<body>
  <section class="kv">
    <div class="kv_flex">
      <div class="kv_contents">
        <h1><img src="./img/kv_title.png" alt="#"></h1>
        <div class="kv_contents_catchcopy">
          <img src="./img/kv_catchcopy_text.png" alt="#">
        </div>
        <p class="kv_contents_text"><span class="kv_contents_text_first_line">「In<span class="kv_contents_text_first_line_fi">fi</span>nity Energy」は、無限の活力を提供し、限界を超える</span>力を引き出す高エネルギードリンクです。あなたの日常を活性化しましょう！</p>
      </div>
      <canvas id="WebGL-output"></canvas>
    </div>
  </section>
  <section class="kv_mobile">
    <div class="kv_mobile_contents">
      <h1><img src="./img/kv_title.png" alt="#"></h1>
      <canvas id="WebGL-output-mobile"></canvas>
      <div class="kv_mobile_contents_catchcopy">
        <img src="./img/kv_catchcopy_text.png" alt="#">
      </div>
      <p class="kv_mobile_contents_text"><span class="kv_mobile_contents_text_first_line">「Infinity Energy」は、無限の活力</span>を提供し、限界を超える力を引き出す高エネルギードリンクです。あなたの日常を活性化しましょう！</p>
    </div>
  </section>
</body>

</html>