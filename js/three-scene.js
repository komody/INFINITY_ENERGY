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
  controls.enableZoom = false;
  controls.enablePan = false;
  controls.update();

  const hemiLight = new THREE.HemisphereLight(0xffffff, 0x444444, 0.7);
  hemiLight.position.set(0, 1, 0);
  scene.add(hemiLight);

  const dirLight = new THREE.DirectionalLight(0xffffff, 0.8);
  dirLight.position.set(3, 5, 2);
  scene.add(dirLight);

  const ambientLight = new THREE.AmbientLight(0xffffff, 0.3);
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
  const gltf = await loader.loadAsync("./3Dmodel/can_kv.gltf");
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

// 初期化実行
initCanScene('#WebGL-output');
initCanScene('#WebGL-output-mobile');
