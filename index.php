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
  <link rel="stylesheet" href="./css/kv.css">
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
    import { OrbitControls } from "three/addons/controls/OrbitControls.js";
    import { GLTFLoader } from "three/addons/loaders/GLTFLoader.js";

    // サイズを指定
    const width = 617;
    const height = 925;

    // レンダラーを作成
    const canvasElement = document.querySelector("#WebGL-output");
    const renderer = new THREE.WebGLRenderer({
      canvas: canvasElement,
      alpha: true,
    });
    renderer.setPixelRatio(window.devicePixelRatio);
    renderer.setSize(width, height);
    // renderer.physicallyCorrectLights = true;
    // renderer.outputEncoding = THREE.sRGBEncoding;
    // renderer.toneMapping = THREE.ACESFilmicToneMapping;

    // シーンを作成
    const scene = new THREE.Scene();

    // カメラを作成
    const camera = new THREE.PerspectiveCamera(10, width / height, 0.1, 10000);
    // カメラの初期座標を設定
    camera.position.set(1000, 400, 2);

    // カメラコントローラーを作成
    const controls = new OrbitControls(camera, canvasElement);
    controls.target.set(0, 0, 0);
    controls.update();

    const ambientLight = new THREE.AmbientLight(0xffffff);
    ambientLight.intensity = 10;
    scene.add(ambientLight);

    const directionalLight = new THREE.DirectionalLight(0xffffff);
    directionalLight.intensity = 20;
    directionalLight.position.set(100, 100, 50);
    scene.add(directionalLight);

    const directionalLight2 = new THREE.DirectionalLight(0xffffff);
    directionalLight2.intensity = 20;
    directionalLight2.position.set(-100, -100, 50);
    scene.add(directionalLight2);

    const directionalLight3 = new THREE.DirectionalLight(0xffffff);
    directionalLight3.intensity = 20;
    directionalLight3.position.set(50, 100, -100);
    scene.add(directionalLight3);

    const directionalLight4 = new THREE.DirectionalLight(0xffffff);
    directionalLight4.intensity = 20;
    directionalLight4.position.set(100, 50, 100);
    scene.add(directionalLight4);

    const directionalLight5 = new THREE.DirectionalLight(0xffffff);
    directionalLight5.intensity = 20;
    directionalLight5.position.set(-100, 50, 100);
    scene.add(directionalLight5);

    const pointLight = new THREE.PointLight(0xffffff);
    pointLight.intensity = 50;
    pointLight.position.set(0, 0, 200); 
    scene.add(pointLight);

    // GLTF形式のモデルデータを読み込む
    const loader = new GLTFLoader();
    // GLTFファイルのパスを指定
    const gltf = await loader.loadAsync("./3D/can_kv.gltf");
    // 読み込み後に3D空間に追加
    const model = gltf.scene;
    scene.add(model);

    model.scale.set(30, 30, 30);

    tick();

    // 毎フレーム時に実行されるループイベント
    function tick() {
      renderer.render(scene, camera);
      requestAnimationFrame(tick);
    }

    function animate() {
      requestAnimationFrame(animate);
      model.rotation.y += 0.001;
      renderer.render(scene, camera);
    }
    animate();
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
        <p class="kv_contents_text">「Infinity Energy」は、無限の活力を提供し、限界を超える力を引き出す高エネルギードリンクです。あなたの日常を活性化しましょう！</p>
      </div>
      <!-- 3D表示用の領域 -->
      <canvas id="WebGL-output"></canvas>
    </div>
  </section>
</body>
</html>
