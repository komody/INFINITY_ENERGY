<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>INFINITY ENERGY</title>
  <link rel="icon" type="image/png" href="./img/favicon.png">
  <meta property="og:title" content="INFINITY ENERGY">
  <meta property="og:description" content="「Infinity Energy」は、無限の活力を提供し、限界を超える力を引き出す高エネルギードリンクです。あなたの日常を活性化しましょう！">
  <meta property="og:image" content="./img/OGP.png">
  <meta property="og:type" content="website">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:image" content="./img/OGP.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
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

  <section class="result">
    <div class="wrapper">
      <h2 class="result_title">インフィニティエナジーを<br class="mobile_line_break">飲んだらどうなる？</h2>
      <div class="result_container">
        <div class="result_comparison_slider">
          <div class="result_comparison_container">
            <div class="result_before_image">
              <picture>
                <source media="(max-width: 400px)" srcset="./img/result/result_before_mobile.png">
                <img src="./img/result/result_before.png" alt="#">
              </picture>
            </div>
            <div class="result_after_image">
              <picture>
                <source media="(max-width: 400px)" srcset="./img/result/result_after_mobile.png">
                <img src="./img/result/result_after.png" alt="#">
              </picture>
            </div>
            <div class="result_slider_handle">
              <div class="result_handle_circle">
                <img src="./img/result/result_slider_handle.png" alt="Slider Handle">
              </div>
              <div class="result_handle_line"></div>
            </div>
          </div>
        </div>
        <p class="result_slider_description">※スライダーを動かすと「Before」と「After」が切り替わります</p>
      </div>
      <div class="result_description">
        <div class="result_description_flex">
          <div class="result_description_flex_image">
            <img src="./img/result/result_can.png" alt="#">
          </div>
          <ul class="result_description_flex_text">
            <li>退屈な日常が充実した<br class="mobile_line_break">日々の連続に</li>
            <li>あなたの眠れる才能が覚醒</li>
            <li>脳の回転、キレが向上</li>
            <li>あらゆるシーンで<br class="mobile_line_break">高パフォーマンスを持続</li>
            <li>限界？知らないなー。</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="product">
    <h2 class="product_title">インフィニティエナジー製品</h2>
    <div class="slider_PC">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="./img/product/product_left_1.png" alt="">
          </div>
          <div class="swiper-slide">
            <img src="./img/product/product_left_2.png" alt="">
          </div>
        </div>
      </div>
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="./img/product/product_middle_1.png" alt="">
          </div>
          <div class="swiper-slide">
            <img src="./img/product/product_middle_2.png" alt="">
          </div>
        </div>
      </div>
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="./img/product/product_right_1.png" alt="">
          </div>
          <div class="swiper-slide">
            <img src="./img/product/product_right_2.png" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="slider_SP">
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="./img/product/product_left_1.png" alt="">
          </div>
          <div class="swiper-slide">
            <img src="./img/product/product_left_2.png" alt="">
          </div>
          <div class="swiper-slide">
            <img src="./img/product/product_middle_1.png" alt="">
          </div>
          <div class="swiper-slide">
            <img src="./img/product/product_middle_2.png" alt="">
          </div>
          <div class="swiper-slide">
            <img src="./img/product/product_right_1.png" alt="">
          </div>
          <div class="swiper-slide">
            <img src="./img/product/product_right_2.png" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="product_list">
      <div class="product_list_wrapper">
        <div class="product_item">
          <div class="product_item_top">
            <div class="product_item_top_flex">
              <div class="product_item_top_detail">
                <div class="product_item_top_detail_title mixed_berry_title">Mixed<br>Berry<br>Delight</div>
                <div class="product_item_top_detail_area">販売地域：全国</div>
                <div class="product_item_top_detail_amount">250ml</div>
              </div>
              <div class="product_item_top_image">
                <img src="./img/product/product_can_1.png" alt="">
              </div>
            </div>
            <div class="product_item_bottom">
              <p class="product_item_bottom_title">ミクストベリーディライト</p>
              <p class="product_item_bottom_detail">このフレーバーは、深紅のブルーベリー、ストロベリー、ブラックベ<br class="PC_line_break">リーのブレンドから成り立っています。ミクストベリーディライトは、甘さと爽やかさが絶妙に組み合わさり、フルー<br class="mobile_line_break">ティーな味わいを提供します。これは運動前やアウトドアアクティビティのお供に最適です。</p>
              <div class="product_item_bottom_flex">
                <p class="product_item_bottom_flex_amount">250ml×20本セット</p>
                <p class="product_item_bottom_flex_price">¥4,200 <span>(税込)</span></p>
              </div>
            </div>
          </div>
        </div>
        <div class="product_item">
          <div class="product_item_top">
            <div class="product_item_top_flex">
              <div class="product_item_top_detail">
                <div class="product_item_top_detail_title green_fusion_blast_title">Green<br>Fusion<br>Blast</div>
                <div class="product_item_top_detail_area">販売地域：全国</div>
                <div class="product_item_top_detail_amount">250ml</div>
              </div>
              <div class="product_item_top_image">
                <img src="./img/product/product_can_2.png" alt="">
              </div>
            </div>
            <div class="product_item_bottom">
              <p class="product_item_bottom_title">グリーンフュージョンブラスト</p>
              <p class="product_item_bottom_detail">このフレーバーは、フレッシュなミントと爽やかなライムが組み合わ<br class="PC_line_break">さったものです。グリーンフュー<br class="PC_line_break">ジョンブラストは、気分をリフレッシュし、エネルギーを高めるのに最適です。緑色の液体が魅力的で、夏の暑い日に最適な選択肢です。</p>
              <div class="product_item_bottom_flex">
                <p class="product_item_bottom_flex_amount">250ml×20本セット</p>
                <p class="product_item_bottom_flex_price">¥4,200 <span>(税込)</span></p>
              </div>
            </div>
          </div>
        </div>
        <div class="product_item">
          <div class="product_item_top">
            <div class="product_item_top_flex">
              <div class="product_item_top_detail">
                <div class="product_item_top_detail_title  hot_blaze_inferno_title">Hot<br>Blaze<br>Inferno</div>
                <div class="product_item_top_detail_area">販売地域：全国</div>
                <div class="product_item_top_detail_amount">250ml</div>
              </div>
              <div class="product_item_top_image">
                <img src="./img/product/product_can_3.png" alt="">
              </div>
            </div>
            <div class="product_item_bottom">
              <p class="product_item_bottom_title">ホットブレイズインフェルノ</p>
              <p class="product_item_bottom_detail">このフレーバーは、シナモン、チリペッパーをブレンドした、スパイ<br class="PC_line_break">シーな風味で、まるで燃え盛る情熱を感じるかのような味わいです。エナジードリンクの新たな次元を開拓し、情熱的なエネルギーを注入します。</p>
              <div class="product_item_bottom_flex">
                <p class="product_item_bottom_flex_amount">250ml×20本セット</p>
                <p class="product_item_bottom_flex_price">¥4,200 <span>(税込)</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="promotion">
    <div class="promotion_bg">
      <div class="promotion_bg_left">
        <div class="promotion_bg_left_top_flex">
          <div class="promotion_bg_left_top_flex_left">
            <div class="promotion-reveal-left"></div>
            <picture>
              <source media="(max-width: 740px)" srcset="./img/promotion/promotion_bg_mobile_1.png">
              <img src="./img/promotion/promotion_bg_1.png" alt="#">
            </picture>
          </div>
          <div class="promotion_bg_left_top_flex_right">
            <div class="promotion-reveal-right"></div>
            <picture>
              <source media="(max-width: 740px)" srcset="./img/promotion/promotion_bg_mobile_2.png">
              <img src="./img/promotion/promotion_bg_2.png" alt="#">
            </picture>
          </div>
        </div>
        <div class="promotion_bg_left_bottom">
          <div class="promotion-reveal-bottom"></div>
          <picture>
            <source media="(max-width: 740px)" srcset="./img/promotion/promotion_bg_mobile_3.png">
            <img src="./img/promotion/promotion_bg_3.png" alt="#">
          </picture>
        </div>
      </div>
      <div class="promotion_bg_right">
        <div class="promotion-reveal-bg-right"></div>
        <picture>
          <source media="(max-width: 740px)" srcset="./img/promotion/promotion_bg_mobile_4.png">
          <img src="./img/promotion/promotion_bg_4.png" alt="#">
        </picture>
      </div>
    </div>
    <div class="promotion_can">
      <img src="./img/promotion/promotion_can.png" alt="#">
    </div>
    <div class="promotion_catchcopy">
      <picture>
        <source media="(max-width: 740px)" srcset="./img/promotion/promotion_catchcopy.png">
        <img src="./img/promotion/promotion_text.png" alt="#">
      </picture>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="./js/index.js"></script>

</body>

</html>