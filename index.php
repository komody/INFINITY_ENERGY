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
  <script type="module" src="./js/three-scene.js"></script>
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
      <p class="kv_mobile_contents_text"><span class="kv_mobile_contents_text_first_line">「In<span class="kv_mobile_contents_text_first_line_fi">fi</span>nity Energy」は、無限の活力</span>を提供し、限界を超える力を引き出す高エネルギードリンクです。あなたの日常を活性化しましょう！</p>
    </div>
  </section>

  <section class="kinds">
    <div class="wrapper">
      <div class="kinds_content">
        <div class="kinds_title">
          <img src="./img/kinds_main.png" alt="INFINITY EMERGY">
        </div>
        <div class="kinds_list">
          <div class="kinds_item">
            <div class="kinds_item_title">
              <picture>
                <source media="(max-width: 400px)" srcset="./img/kinds_Mixed_Berry_Delight_mobile.png">
                <img src="./img/kinds_Mixed_Berry_Delight.png" alt="ミクストベリーディライト">
              </picture>
            </div>
            <div class="kinds_item_info">
              <div class="kinds_item_can_container">
                <div class="kinds_item_can kinds_item_mixed_berry_triangle">
                  <img src="img/kinds_kan1.png" class="can_label" alt="#">
                </div>
              </div>
              <div class="kinds_item_details">
                <div class="kinds_item_details_name">ミクストベリー<br class="mobile_line_break">ディライト</div>
                <p class="kinds_item_details_description">ブルーベリー、ストロベ<br class="mobile_line_break">リー、ブラックベリーのブレンド。甘さと爽やかさが絶妙。</p>
                <div class="kinds_item_details_buttons">
                  <button class="kinds_item_details_btn mixed_berry_btn">
                    <p class="kinds_item_details_btn_text">集中力を高めたい</p>
                  </button>
                  <button class="kinds_item_details_btn mixed_berry_btn">
                    <p class="kinds_item_details_btn_text">気持ちをリセットしたい</p>
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div class="kinds_item">
            <div class="kinds_item_title">
              <picture>
                <source media="(max-width: 400px)" srcset="./img/kinds_Green_Fusion_Blast_mobile.png">
                <img src="./img/kinds_Green_Fusion_Blast.png" alt="#">
              </picture>
            </div>
            <div class="kinds_item_info">
              <div class="kinds_item_can_container">
                <div class="kinds_item_can kinds_item_green_fusion_triangle">
                  <img src="img/kinds_kan2.png" class="can_label" alt="#">
                </div>
              </div>
              <div class="kinds_item_details">
                <div class="kinds_item_details_name">グリーンフュー<br class="mobile_line_break">ジョンブラスト</div>
                <p class="kinds_item_details_description">フレッシュなミントと爽やかなライムをブレンド。夏の暑い日に最適。</p>
                <div class="kinds_item_details_buttons">
                  <button class="kinds_item_details_btn green_fusion_btn">
                    <p class="kinds_item_details_btn_text">リフレッシュしたい</p>
                  </button>
                  <button class="kinds_item_details_btn green_fusion_btn">
                    <p class="kinds_item_details_btn_text">気分を高めたい</p>
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div class="kinds_item">
            <div class="kinds_item_title">
              <picture>
                <source media="(max-width: 400px)" srcset="./img/kinds_Hot_Blaze_Inferno_mobile.png">
                <img src="./img/kinds_Hot_Blaze_Inferno.png" alt="#">
              </picture>
            </div>
            <div class="kinds_item_info">
              <div class="kinds_item_can_container">
                <div class="kinds_item_can kinds_item_hot_blaze_triangle">
                  <img src="img/kinds_kan3.png" class="can_label" alt="#">
                </div>
              </div>
              <div class="kinds_item_details">
                <div class="kinds_item_details_name">ホットブレイズ<br class="mobile_line_break">インフェルノ</div>
                <p class="kinds_item_details_description">シナモン、チリペッパーをブレンドした、スパイシーな風味。エナジードリンクの新たな次元を開拓。</p>
                <div class="kinds_item_details_buttons">
                  <button class="kinds_item_details_btn hot_blaze_btn">
                    <p class="kinds_item_details_btn_text">気持ちを高ぶらせたい</p>
                  </button>
                  <button class="kinds_item_details_btn hot_blaze_btn">
                    <p class="kinds_item_details_btn_text">恋人と熱くなりたい</p>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="now_you">
    <h2 class="now_you_title">今のあなたは？</h2>
    <div class="wrapper">
      <div class="now_you_container">
        <div class="now_you_panel">
          <ul class="now_you_switches">
            <li class="now_you_switch">
              <label class="now_you_switch_label">
                <span class="now_you_label">疲れている</span>
                <input type="checkbox" class="switch" data-target="condition">
                <span class="now_you_switch_slider" aria-hidden="true"></span>
              </label>
            </li>
            <li class="now_you_switch">
              <label class="now_you_switch_label">
                <span class="now_you_label">週末にイベントに参加予定</span>
                <input type="checkbox" class="switch" data-target="weekend">
                <span class="now_you_switch_slider" aria-hidden="true"></span>
              </label>
            </li>
            <li class="now_you_switch">
              <label class="now_you_switch_label">
                <span class="now_you_label">頑張り時だから眠気を抑えたい</span>
                <input type="checkbox" class="switch" data-target="sleep_time">
                <span class="now_you_switch_slider" aria-hidden="true"></span>
              </label>
            </li>
            <li class="now_you_switch">
              <label class="now_you_switch_label">
                <span class="now_you_label">とにかくテンションを上げたい</span>
                <input type="checkbox" class="switch" data-target="tension">
                <span class="now_you_switch_slider" aria-hidden="true"></span>
              </label>
            </li>
          </ul>
        </div>

        <div class="now_you_bubbles" aria-live="polite">
          <img src="./img/now_you/now_you_man.png" alt="キャラクター" class="now_you_character">
          <img src="./img/now_you/now_you_condition.png" alt="最近、調子が良くないなー" class="bubble bubble_condition" data-name="condition">
          <img src="./img/now_you/now_you_weekend.png" alt="週末を元気に迎えたい…！" class="bubble bubble_weekend" data-name="weekend">
          <img src="./img/now_you/now_you_sleep_time.png" alt="睡眠時間が取れないけど頑張りたい…！" class="bubble bubble_sleep_time" data-name="sleep_time">
          <img src="./img/now_you/now_you_tension.png" alt="テンションを上げて、休日を楽しむぞ！" class="bubble bubble_tension" data-name="tension">
        </div>
      </div>
    </div>
  </section>

  <script src="./js/index.js"></script>

</body>

</html>