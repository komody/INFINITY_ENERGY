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
</head>
<body>  
  <section class="kv">
    <div class="kv_water">
      <div class="kv_flex">
        <div class="kv_contents">
          <h1><img src="./img/kv_title.png" alt="#"></h1>
          <div><img src="./img/kv_catchcopy.png" alt="#"></div>
          <p>「Infinity Energy」は、無限の活力を提供し、限界を超える力を引き出す高エネルギードリンクです。あなたの日常を活性化しましょう！</p>
        </div>
        <!-- 3D表示用の領域 -->
        <canvas id="WebGL-output"></canvas>
      </div>
    </div>
  </section>

  <!-- Three.jsコードの記述 -->
  <script type="module">
    // CDNからThree.js読み込み
    import * as THREE from 'https://unpkg.com/three@0.126.1/build/three.module.js';
    import { OrbitControls } from 'https://unpkg.com/three@0.126.1/examples/jsm/controls/OrbitControls.js';
    import { GLTFLoader } from 'https://unpkg.com/three@0.126.1/examples/jsm/loaders/GLTFLoader.js';

    let camera, scene, renderer, controls;

    function init() {
      // シーンの作成
      scene = new THREE.Scene();
      scene.fog = new THREE.FogExp2(0xffffff, 0.005); // 遠くの物が霞んで見える設定

      // カメラの作成
      camera = new THREE.PerspectiveCamera(
        45,                                     // 視野
        window.innerWidth / window.innerHeight, // アスペクト比
        0.1,                                    // どの程度のカメラの距離から描画を始めるか
        1000                                    // どのくらい遠くまで見えるか
      );
      camera.position.set(-30, 40, 30);
      camera.lookAt(scene.position);
      scene.add(camera);

      // レンダラーの作成
      const canvas = document.getElementById("WebGL-output");
      renderer = new THREE.WebGLRenderer({ canvas: canvas });
      renderer.setClearColor(new THREE.Color(0xeeeeee));
      renderer.setSize(window.innerWidth, window.innerHeight);
      renderer.shadowMap.enabled = true;

      // 照明の設定
      const ambientLight = new THREE.AmbientLight(0xffffff, 2); // 環境光の強度を上げる
      scene.add(ambientLight);

      const spotLight = new THREE.SpotLight(0xffffff, 1);
      spotLight.position.set(-20, 30, -5);
      spotLight.castShadow = true;
      scene.add(spotLight);

      const directionalLight = new THREE.DirectionalLight(0xffffff, 1); // 平行光の強度を上げる
      directionalLight.position.set(20, -30, 5).normalize();
      scene.add(directionalLight);

      // glbファイルの読み込み
      const loader = new GLTFLoader();
      loader.load('./3D/can_kv.gltf', function(gltf) {
        gltf.scene.traverse((child) => {
          if (child.isMesh) {
            child.castShadow = true;
            child.receiveShadow = true;
          }
        });
        gltf.scene.scale.set(6, 6, 6);
        gltf.scene.position.set(0, 0, 0);
        scene.add(gltf.scene);
      }, undefined, function(error) {
        console.error(error);
      });

      // カメラコントロールの設定
      controls = new OrbitControls(camera, renderer.domElement);
      controls.enableRotate = true;

      // シーンの描画
      render();
    }

    // シーンを描画する関数
    function render() {
      requestAnimationFrame(render);
      renderer.render(scene, camera);
    }

    // 表示領域をウィンドウサイズに合わせる
    function onResize() {
      camera.aspect = window.innerWidth / window.innerHeight;
      camera.updateProjectionMatrix();
      renderer.setSize(window.innerWidth, window.innerHeight);
    }

    window.addEventListener("load", init);
    window.addEventListener("resize", onResize, false);
  </script>
</body>
</html>
