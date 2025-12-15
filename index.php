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
  <script type="module" src="./js/three-scene-2.js"></script>
  <script type="module" src="./js/three-scene-3.js"></script>
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
      <canvas id="WebGL-output-2"></canvas>
      <canvas id="WebGL-output-3"></canvas>
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

  <section class="aria">
    <h2 class="aria_title">インフィニティエナジー<br class="mobile_line_break">販売店舗</h2>
    <div class="aria_container">
      <div class="aria_container_flex">
        <div class="aria_container_flex_left">
          <div class="swiper_aria_hokkaido">
            <div class="aria_swiper aria_mySwiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide shop_slide">
                  <div class="shop_image">
                    <img src="./img/aria/aria_shop_2.png" alt="#">
                  </div>
                  <div class="shop_detail">
                    <p class="shop_detail_title">グローバル・グルメ・マーケット<br>札幌店</p>
                    <p class="shop_detail_address">〒060-0001　北海道札幌市中央区ユートピア大通1-2-3</p>
                    <p class="shop_detail_phone">TEL:000-0000-0000</p>
                    <p class="shop_detail_URL">URL:<span>xxxxxxxxxxxx.jp</span></p>
                    <button class="shop_detail_button" data-latitude="43.0642" data-longitude="141.3469" data-shop-name="グローバル・グルメ・マーケット 札幌店">
                      <img src="./img/aria/aria_button_icon.png" alt="#">
                      <span>あなたの現在地からの距離を見る</span>
                    </button>
                  </div>
                </div>
                <div class="swiper-slide shop_slide">
                  <div class="shop_image">
                    <img src="./img/aria/aria_shop_3.png" alt="#">
                  </div>
                  <div class="shop_detail">
                    <p class="shop_detail_title">グローバル・グルメ・マーケット<br>札幌店</p>
                    <p class="shop_detail_address">〒060-0001　北海道札幌市中央区ユートピア大通1-2-3</p>
                    <p class="shop_detail_phone">TEL:000-0000-0000</p>
                    <p class="shop_detail_URL">URL:<span>xxxxxxxxxxxx.jp</span></p>
                    <button class="shop_detail_button" data-latitude="43.0642" data-longitude="141.3469" data-shop-name="グローバル・グルメ・マーケット 札幌店">
                      <img src="./img/aria/aria_button_icon.png" alt="#">
                      <span>あなたの現在地からの距離を見る</span>
                    </button>
                  </div>
                </div>
                <div class="swiper-slide shop_slide">
                  <div class="shop_image">
                    <img src="./img/aria/aria_shop_1.png" alt="#">
                  </div>
                  <div class="shop_detail">
                    <p class="shop_detail_title">グローバル・グルメ・マーケット<br>札幌店</p>
                    <p class="shop_detail_address">〒060-0001　北海道札幌市中央区ユートピア大通1-2-3</p>
                    <p class="shop_detail_phone">TEL:000-0000-0000</p>
                    <p class="shop_detail_URL">URL:<span>xxxxxxxxxxxx.jp</span></p>
                    <button class="shop_detail_button" data-latitude="43.0642" data-longitude="141.3469" data-shop-name="グローバル・グルメ・マーケット 札幌店">
                      <img src="./img/aria/aria_button_icon.png" alt="#">
                      <span>あなたの現在地からの距離を見る</span>
                    </button>
                  </div>
                </div>
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>
          </div>
          <div class="swiper_aria_touhoku">
            <div class="aria_swiper aria_mySwiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide shop_slide">
                  <div class="shop_image">
                    <img src="./img/aria/aria_shop_2.png" alt="#">
                  </div>
                  <div class="shop_detail">
                    <p class="shop_detail_title">グローバル・グルメ・マーケット<br>仙台店</p>
                    <p class="shop_detail_address">〒060-0001　北海道札幌市中央区ユートピア大通1-2-3</p>
                    <p class="shop_detail_phone">TEL:000-0000-0000</p>
                    <p class="shop_detail_URL">URL:<span>xxxxxxxxxxxx.jp</span></p>
                    <button class="shop_detail_button" data-latitude="43.0642" data-longitude="141.3469" data-shop-name="グローバル・グルメ・マーケット 札幌店">
                      <img src="./img/aria/aria_button_icon.png" alt="#">
                      <span>あなたの現在地からの距離を見る</span>
                    </button>
                  </div>
                </div>
                <div class="swiper-slide shop_slide">
                  <div class="shop_image">
                    <img src="./img/aria/aria_shop_3.png" alt="#">
                  </div>
                  <div class="shop_detail">
                    <p class="shop_detail_title">グローバル・グルメ・マーケット<br>札幌店</p>
                    <p class="shop_detail_address">〒060-0001　北海道札幌市中央区ユートピア大通1-2-3</p>
                    <p class="shop_detail_phone">TEL:000-0000-0000</p>
                    <p class="shop_detail_URL">URL:<span>xxxxxxxxxxxx.jp</span></p>
                    <button class="shop_detail_button" data-latitude="43.0642" data-longitude="141.3469" data-shop-name="グローバル・グルメ・マーケット 札幌店">
                      <img src="./img/aria/aria_button_icon.png" alt="#">
                      <span>あなたの現在地からの距離を見る</span>
                    </button>
                  </div>
                </div>
                <div class="swiper-slide shop_slide">
                  <div class="shop_image">
                    <img src="./img/aria/aria_shop_1.png" alt="#">
                  </div>
                  <div class="shop_detail">
                    <p class="shop_detail_title">グローバル・グルメ・マーケット<br>札幌店</p>
                    <p class="shop_detail_address">〒060-0001　北海道札幌市中央区ユートピア大通1-2-3</p>
                    <p class="shop_detail_phone">TEL:000-0000-0000</p>
                    <p class="shop_detail_URL">URL:<span>xxxxxxxxxxxx.jp</span></p>
                    <button class="shop_detail_button" data-latitude="43.0642" data-longitude="141.3469" data-shop-name="グローバル・グルメ・マーケット 札幌店">
                      <img src="./img/aria/aria_button_icon.png" alt="#">
                      <span>あなたの現在地からの距離を見る</span>
                    </button>
                  </div>
                </div>
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>
          </div>
          <div class="swiper_aria_kantou">
            <div class="aria_swiper aria_mySwiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide shop_slide">
                  <div class="shop_image">
                    <img src="./img/aria/aria_shop_2.png" alt="#">
                  </div>
                  <div class="shop_detail">
                    <p class="shop_detail_title">グローバル・グルメ・マーケット<br>東京店</p>
                    <p class="shop_detail_address">〒100-0001　東京都千代田区千代田1-2-3</p>
                    <p class="shop_detail_phone">TEL:000-0000-0000</p>
                    <p class="shop_detail_URL">URL:<span>xxxxxxxxxxxx.jp</span></p>
                    <button class="shop_detail_button" data-latitude="43.0642" data-longitude="141.3469" data-shop-name="グローバル・グルメ・マーケット 札幌店">
                      <img src="./img/aria/aria_button_icon.png" alt="#">
                      <span>あなたの現在地からの距離を見る</span>
                    </button>
                  </div>
                </div>
                <div class="swiper-slide shop_slide">
                  <div class="shop_image">
                    <img src="./img/aria/aria_shop_3.png" alt="#">
                  </div>
                  <div class="shop_detail">
                    <p class="shop_detail_title">グローバル・グルメ・マーケット<br>東京店</p>
                    <p class="shop_detail_address">〒100-0001　東京都千代田区千代田1-2-3</p>
                    <p class="shop_detail_phone">TEL:000-0000-0000</p>
                    <p class="shop_detail_URL">URL:<span>xxxxxxxxxxxx.jp</span></p>
                    <button class="shop_detail_button" data-latitude="43.0642" data-longitude="141.3469" data-shop-name="グローバル・グルメ・マーケット 札幌店">
                      <img src="./img/aria/aria_button_icon.png" alt="#">
                      <span>あなたの現在地からの距離を見る</span>
                    </button>
                  </div>
                </div>
                <div class="swiper-slide shop_slide">
                  <div class="shop_image">
                    <img src="./img/aria/aria_shop_1.png" alt="#">
                  </div>
                  <div class="shop_detail">
                    <p class="shop_detail_title">グローバル・グルメ・マーケット<br>東京店</p>
                    <p class="shop_detail_address">〒100-0001　東京都千代田区千代田1-2-3</p>
                    <p class="shop_detail_phone">TEL:000-0000-0000</p>
                    <p class="shop_detail_URL">URL:<span>xxxxxxxxxxxx.jp</span></p>
                    <button class="shop_detail_button" data-latitude="43.0642" data-longitude="141.3469" data-shop-name="グローバル・グルメ・マーケット 札幌店">
                      <img src="./img/aria/aria_button_icon.png" alt="#">
                      <span>あなたの現在地からの距離を見る</span>
                    </button>
                  </div>
                </div>
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>
          </div>
          <div class="swiper_aria_toukai">
            <div class="aria_swiper aria_mySwiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide shop_slide">
                  <div class="shop_image">
                    <img src="./img/aria/aria_shop_2.png" alt="#">
                  </div>
                  <div class="shop_detail">
                    <p class="shop_detail_title">グローバル・グルメ・マーケット<br>名古屋店</p>
                    <p class="shop_detail_address">〒460-0001　愛知県名古屋市中区三の丸1-2-3</p>
                    <p class="shop_detail_phone">TEL:000-0000-0000</p>
                    <p class="shop_detail_URL">URL:<span>xxxxxxxxxxxx.jp</span></p>
                    <button class="shop_detail_button" data-latitude="43.0642" data-longitude="141.3469" data-shop-name="グローバル・グルメ・マーケット 札幌店">
                      <img src="./img/aria/aria_button_icon.png" alt="#">
                      <span>あなたの現在地からの距離を見る</span>
                    </button>
                  </div>
                </div>
                <div class="swiper-slide shop_slide">
                  <div class="shop_image">
                    <img src="./img/aria/aria_shop_3.png" alt="#">
                  </div>
                  <div class="shop_detail">
                    <p class="shop_detail_title">グローバル・グルメ・マーケット<br>名古屋店</p>
                    <p class="shop_detail_address">〒460-0001　愛知県名古屋市中区三の丸1-2-3</p>
                    <p class="shop_detail_phone">TEL:000-0000-0000</p>
                    <p class="shop_detail_URL">URL:<span>xxxxxxxxxxxx.jp</span></p>
                    <button class="shop_detail_button" data-latitude="43.0642" data-longitude="141.3469" data-shop-name="グローバル・グルメ・マーケット 札幌店">
                      <img src="./img/aria/aria_button_icon.png" alt="#">
                      <span>あなたの現在地からの距離を見る</span>
                    </button>
                  </div>
                </div>
                <div class="swiper-slide shop_slide">
                  <div class="shop_image">
                    <img src="./img/aria/aria_shop_1.png" alt="#">
                  </div>
                  <div class="shop_detail">
                    <p class="shop_detail_title">グローバル・グルメ・マーケット<br>名古屋店</p>
                    <p class="shop_detail_address">〒460-0001　愛知県名古屋市中区三の丸1-2-3</p>
                    <p class="shop_detail_phone">TEL:000-0000-0000</p>
                    <p class="shop_detail_URL">URL:<span>xxxxxxxxxxxx.jp</span></p>
                    <button class="shop_detail_button" data-latitude="43.0642" data-longitude="141.3469" data-shop-name="グローバル・グルメ・マーケット 札幌店">
                      <img src="./img/aria/aria_button_icon.png" alt="#">
                      <span>あなたの現在地からの距離を見る</span>
                    </button>
                  </div>
                </div>
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>
          </div>
          <div class="swiper_aria_hokuriku">
            <div class="aria_swiper aria_mySwiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide shop_slide">
                  <div class="shop_image">
                    <img src="./img/aria/aria_shop_2.png" alt="#">
                  </div>
                  <div class="shop_detail">
                    <p class="shop_detail_title">グローバル・グルメ・マーケット<br>金沢店</p>
                    <p class="shop_detail_address">〒920-0001　石川県金沢市尾山町1-2-3</p>
                    <p class="shop_detail_phone">TEL:000-0000-0000</p>
                    <p class="shop_detail_URL">URL:<span>xxxxxxxxxxxx.jp</span></p>
                    <button class="shop_detail_button" data-latitude="43.0642" data-longitude="141.3469" data-shop-name="グローバル・グルメ・マーケット 札幌店">
                      <img src="./img/aria/aria_button_icon.png" alt="#">
                      <span>あなたの現在地からの距離を見る</span>
                    </button>
                  </div>
                </div>
                <div class="swiper-slide shop_slide">
                  <div class="shop_image">
                    <img src="./img/aria/aria_shop_3.png" alt="#">
                  </div>
                  <div class="shop_detail">
                    <p class="shop_detail_title">グローバル・グルメ・マーケット<br>金沢店</p>
                    <p class="shop_detail_address">〒920-0001　石川県金沢市尾山町1-2-3</p>
                    <p class="shop_detail_phone">TEL:000-0000-0000</p>
                    <p class="shop_detail_URL">URL:<span>xxxxxxxxxxxx.jp</span></p>
                    <button class="shop_detail_button" data-latitude="43.0642" data-longitude="141.3469" data-shop-name="グローバル・グルメ・マーケット 札幌店">
                      <img src="./img/aria/aria_button_icon.png" alt="#">
                      <span>あなたの現在地からの距離を見る</span>
                    </button>
                  </div>
                </div>
                <div class="swiper-slide shop_slide">
                  <div class="shop_image">
                    <img src="./img/aria/aria_shop_1.png" alt="#">
                  </div>
                  <div class="shop_detail">
                    <p class="shop_detail_title">グローバル・グルメ・マーケット<br>金沢店</p>
                    <p class="shop_detail_address">〒920-0001　石川県金沢市尾山町1-2-3</p>
                    <p class="shop_detail_phone">TEL:000-0000-0000</p>
                    <p class="shop_detail_URL">URL:<span>xxxxxxxxxxxx.jp</span></p>
                    <button class="shop_detail_button" data-latitude="43.0642" data-longitude="141.3469" data-shop-name="グローバル・グルメ・マーケット 札幌店">
                      <img src="./img/aria/aria_button_icon.png" alt="#">
                      <span>あなたの現在地からの距離を見る</span>
                    </button>
                  </div>
                </div>
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>
          </div>
          <div class="swiper_aria_kansai">
            <div class="aria_swiper aria_mySwiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide shop_slide">
                  <div class="shop_image">
                    <img src="./img/aria/aria_shop_2.png" alt="#">
                  </div>
                  <div class="shop_detail">
                    <p class="shop_detail_title">グローバル・グルメ・マーケット<br>大阪店</p>
                    <p class="shop_detail_address">〒530-0001　大阪府大阪市北区梅田1-2-3</p>
                    <p class="shop_detail_phone">TEL:000-0000-0000</p>
                    <p class="shop_detail_URL">URL:<span>xxxxxxxxxxxx.jp</span></p>
                    <button class="shop_detail_button" data-latitude="43.0642" data-longitude="141.3469" data-shop-name="グローバル・グルメ・マーケット 札幌店">
                      <img src="./img/aria/aria_button_icon.png" alt="#">
                      <span>あなたの現在地からの距離を見る</span>
                    </button>
                  </div>
                </div>
                <div class="swiper-slide shop_slide">
                  <div class="shop_image">
                    <img src="./img/aria/aria_shop_3.png" alt="#">
                  </div>
                  <div class="shop_detail">
                    <p class="shop_detail_title">グローバル・グルメ・マーケット<br>大阪店</p>
                    <p class="shop_detail_address">〒530-0001　大阪府大阪市北区梅田1-2-3</p>
                    <p class="shop_detail_phone">TEL:000-0000-0000</p>
                    <p class="shop_detail_URL">URL:<span>xxxxxxxxxxxx.jp</span></p>
                    <button class="shop_detail_button" data-latitude="43.0642" data-longitude="141.3469" data-shop-name="グローバル・グルメ・マーケット 札幌店">
                      <img src="./img/aria/aria_button_icon.png" alt="#">
                      <span>あなたの現在地からの距離を見る</span>
                    </button>
                  </div>
                </div>
                <div class="swiper-slide shop_slide">
                  <div class="shop_image">
                    <img src="./img/aria/aria_shop_1.png" alt="#">
                  </div>
                  <div class="shop_detail">
                    <p class="shop_detail_title">グローバル・グルメ・マーケット<br>大阪店</p>
                    <p class="shop_detail_address">〒530-0001　大阪府大阪市北区梅田1-2-3</p>
                    <p class="shop_detail_phone">TEL:000-0000-0000</p>
                    <p class="shop_detail_URL">URL:<span>xxxxxxxxxxxx.jp</span></p>
                    <button class="shop_detail_button" data-latitude="43.0642" data-longitude="141.3469" data-shop-name="グローバル・グルメ・マーケット 札幌店">
                      <img src="./img/aria/aria_button_icon.png" alt="#">
                      <span>あなたの現在地からの距離を見る</span>
                    </button>
                  </div>
                </div>
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>
          </div>
          <div class="swiper_aria_tyugoku">
            <div class="aria_swiper aria_mySwiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide shop_slide">
                  <div class="shop_image">
                    <img src="./img/aria/aria_shop_2.png" alt="#">
                  </div>
                  <div class="shop_detail">
                    <p class="shop_detail_title">グローバル・グルメ・マーケット<br>広島店</p>
                    <p class="shop_detail_address">〒730-0001　広島県広島市中区基町1-2-3</p>
                    <p class="shop_detail_phone">TEL:000-0000-0000</p>
                    <p class="shop_detail_URL">URL:<span>xxxxxxxxxxxx.jp</span></p>
                    <button class="shop_detail_button" data-latitude="43.0642" data-longitude="141.3469" data-shop-name="グローバル・グルメ・マーケット 札幌店">
                      <img src="./img/aria/aria_button_icon.png" alt="#">
                      <span>あなたの現在地からの距離を見る</span>
                    </button>
                  </div>
                </div>
                <div class="swiper-slide shop_slide">
                  <div class="shop_image">
                    <img src="./img/aria/aria_shop_3.png" alt="#">
                  </div>
                  <div class="shop_detail">
                    <p class="shop_detail_title">グローバル・グルメ・マーケット<br>広島店</p>
                    <p class="shop_detail_address">〒730-0001　広島県広島市中区基町1-2-3</p>
                    <p class="shop_detail_phone">TEL:000-0000-0000</p>
                    <p class="shop_detail_URL">URL:<span>xxxxxxxxxxxx.jp</span></p>
                    <button class="shop_detail_button" data-latitude="43.0642" data-longitude="141.3469" data-shop-name="グローバル・グルメ・マーケット 札幌店">
                      <img src="./img/aria/aria_button_icon.png" alt="#">
                      <span>あなたの現在地からの距離を見る</span>
                    </button>
                  </div>
                </div>
                <div class="swiper-slide shop_slide">
                  <div class="shop_image">
                    <img src="./img/aria/aria_shop_1.png" alt="#">
                  </div>
                  <div class="shop_detail">
                    <p class="shop_detail_title">グローバル・グルメ・マーケット<br>広島店</p>
                    <p class="shop_detail_address">〒730-0001　広島県広島市中区基町1-2-3</p>
                    <p class="shop_detail_phone">TEL:000-0000-0000</p>
                    <p class="shop_detail_URL">URL:<span>xxxxxxxxxxxx.jp</span></p>
                    <button class="shop_detail_button" data-latitude="43.0642" data-longitude="141.3469" data-shop-name="グローバル・グルメ・マーケット 札幌店">
                      <img src="./img/aria/aria_button_icon.png" alt="#">
                      <span>あなたの現在地からの距離を見る</span>
                    </button>
                  </div>
                </div>
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>
          </div>
          <div class="swiper_aria_sikoku">
            <div class="aria_swiper aria_mySwiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide shop_slide">
                  <div class="shop_image">
                    <img src="./img/aria/aria_shop_2.png" alt="#">
                  </div>
                  <div class="shop_detail">
                    <p class="shop_detail_title">グローバル・グルメ・マーケット<br>高松店</p>
                    <p class="shop_detail_address">〒760-0001　香川県高松市番町1-2-3</p>
                    <p class="shop_detail_phone">TEL:000-0000-0000</p>
                    <p class="shop_detail_URL">URL:<span>xxxxxxxxxxxx.jp</span></p>
                    <button class="shop_detail_button" data-latitude="43.0642" data-longitude="141.3469" data-shop-name="グローバル・グルメ・マーケット 札幌店">
                      <img src="./img/aria/aria_button_icon.png" alt="#">
                      <span>あなたの現在地からの距離を見る</span>
                    </button>
                  </div>
                </div>
                <div class="swiper-slide shop_slide">
                  <div class="shop_image">
                    <img src="./img/aria/aria_shop_3.png" alt="#">
                  </div>
                  <div class="shop_detail">
                    <p class="shop_detail_title">グローバル・グルメ・マーケット<br>高松店</p>
                    <p class="shop_detail_address">〒760-0001　香川県高松市番町1-2-3</p>
                    <p class="shop_detail_phone">TEL:000-0000-0000</p>
                    <p class="shop_detail_URL">URL:<span>xxxxxxxxxxxx.jp</span></p>
                    <button class="shop_detail_button" data-latitude="43.0642" data-longitude="141.3469" data-shop-name="グローバル・グルメ・マーケット 札幌店">
                      <img src="./img/aria/aria_button_icon.png" alt="#">
                      <span>あなたの現在地からの距離を見る</span>
                    </button>
                  </div>
                </div>
                <div class="swiper-slide shop_slide">
                  <div class="shop_image">
                    <img src="./img/aria/aria_shop_1.png" alt="#">
                  </div>
                  <div class="shop_detail">
                    <p class="shop_detail_title">グローバル・グルメ・マーケット<br>高松店</p>
                    <p class="shop_detail_address">〒760-0001　香川県高松市番町1-2-3</p>
                    <p class="shop_detail_phone">TEL:000-0000-0000</p>
                    <p class="shop_detail_URL">URL:<span>xxxxxxxxxxxx.jp</span></p>
                    <button class="shop_detail_button" data-latitude="43.0642" data-longitude="141.3469" data-shop-name="グローバル・グルメ・マーケット 札幌店">
                      <img src="./img/aria/aria_button_icon.png" alt="#">
                      <span>あなたの現在地からの距離を見る</span>
                    </button>
                  </div>
                </div>
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>
          </div>
          <div class="swiper_aria_kyusyu_okinawa">
            <div class="aria_swiper aria_mySwiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide shop_slide">
                  <div class="shop_image">
                    <img src="./img/aria/aria_shop_2.png" alt="#">
                  </div>
                  <div class="shop_detail">
                    <p class="shop_detail_title">グローバル・グルメ・マーケット<br>福岡店</p>
                    <p class="shop_detail_address">〒810-0001　福岡県福岡市中央区天神1-2-3</p>
                    <p class="shop_detail_phone">TEL:000-0000-0000</p>
                    <p class="shop_detail_URL">URL:<span>xxxxxxxxxxxx.jp</span></p>
                    <button class="shop_detail_button" data-latitude="43.0642" data-longitude="141.3469" data-shop-name="グローバル・グルメ・マーケット 札幌店">
                      <img src="./img/aria/aria_button_icon.png" alt="#">
                      <span>あなたの現在地からの距離を見る</span>
                    </button>
                  </div>
                </div>
                <div class="swiper-slide shop_slide">
                  <div class="shop_image">
                    <img src="./img/aria/aria_shop_3.png" alt="#">
                  </div>
                  <div class="shop_detail">
                    <p class="shop_detail_title">グローバル・グルメ・マーケット<br>福岡店</p>
                    <p class="shop_detail_address">〒810-0001　福岡県福岡市中央区天神1-2-3</p>
                    <p class="shop_detail_phone">TEL:000-0000-0000</p>
                    <p class="shop_detail_URL">URL:<span>xxxxxxxxxxxx.jp</span></p>
                    <button class="shop_detail_button" data-latitude="43.0642" data-longitude="141.3469" data-shop-name="グローバル・グルメ・マーケット 札幌店">
                      <img src="./img/aria/aria_button_icon.png" alt="#">
                      <span>あなたの現在地からの距離を見る</span>
                    </button>
                  </div>
                </div>
                <div class="swiper-slide shop_slide">
                  <div class="shop_image">
                    <img src="./img/aria/aria_shop_1.png" alt="#">
                  </div>
                  <div class="shop_detail">
                    <p class="shop_detail_title">グローバル・グルメ・マーケット<br>福岡店</p>
                    <p class="shop_detail_address">〒810-0001　福岡県福岡市中央区天神1-2-3</p>
                    <p class="shop_detail_phone">TEL:000-0000-0000</p>
                    <p class="shop_detail_URL">URL:<span>xxxxxxxxxxxx.jp</span></p>
                    <button class="shop_detail_button" data-latitude="43.0642" data-longitude="141.3469" data-shop-name="グローバル・グルメ・マーケット 札幌店">
                      <img src="./img/aria/aria_button_icon.png" alt="#">
                      <span>あなたの現在地からの距離を見る</span>
                    </button>
                  </div>
                </div>
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>
          </div>
        </div>
        <div class="aria_container_flex_right">
          <div class="aria_container_flex_right_map">
            <div class="aria_container_flex_right_infinity_energy">
              <img src="./img/aria/aria_infinity_energy.png" alt="#">
            </div>
            <div class="aria_container_flex_right_can">
              <img src="./img/aria/aria_can.png" alt="#">
            </div>
            <div class="aria_container_flex_right_japan_map">
              <div class="aria_japan_map_aria_name">
                <p class="aria_japan_map_aria_name_hokkaido_touhoku">北海道・東北</p>
                <p class="aria_japan_map_aria_name_kantou">関東</p>
                <p class="aria_japan_map_aria_name_toukai">東海</p>
                <p class="aria_japan_map_aria_name_hokuriku">北陸</p>
                <p class="aria_japan_map_aria_name_kansai">関西</p>
                <p class="aria_japan_map_aria_name_tyugoku">中国</p>
                <p class="aria_japan_map_aria_name_sikoku">四国</p>
                <p class="aria_japan_map_aria_name_kyusyu_okinawa">九州・沖縄</p>
              </div>
              <div class="aria_japan_map_hokkaido">
                <?php echo file_get_contents('./img/aria/aria_hokaido.svg'); ?>
              </div>
              <div class="aria_japan_map_touhoku">
                <?php echo file_get_contents('./img/aria/aria_touhoku.svg'); ?>
              </div>
              <div class="aria_japan_map_kantou">
                <?php echo file_get_contents('./img/aria/aria_kantou.svg'); ?>
              </div>
              <div class="aria_japan_map_hokuriku">
                <?php echo file_get_contents('./img/aria/aria_hokuriku.svg'); ?>
              </div>
              <div class="aria_japan_map_toukai">
                <?php echo file_get_contents('./img/aria/aria_toukai.svg'); ?>
              </div>
              <div class="aria_japan_map_kansai">
                <?php echo file_get_contents('./img/aria/aria_kansai.svg'); ?>
              </div>
              <div class="aria_japan_map_tyugoku">
                <?php echo file_get_contents('./img/aria/aria_tyugoku.svg'); ?>
              </div>
              <div class="aria_japan_map_sikoku">
                <?php echo file_get_contents('./img/aria/aria_sikoku.svg'); ?>
              </div>
              <div class="aria_japan_map_kyusyu">
                <?php echo file_get_contents('./img/aria/aria_kyusyu.svg'); ?>
              </div>
              <div class="aria_japan_map_okinawa">
                <?php echo file_get_contents('./img/aria/aria_okinawa.svg'); ?>
              </div>
            </div>
          </div>
          <div class="aria_container_flex_right_root">
            <div class="aria_map_container">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2914.998138878552!2d141.34746604067132!3d43.06250669671356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0b299d1d7659a1%3A0xda51cf721a685041!2z44CSMDYwLTAwMDEg5YyX5rW36YGT5pyt5bmM5biC5Lit5aSu5Yy65YyX77yR5p2h6KW_77yT5LiB55uu!5e0!3m2!1sja!2sjp!4v1765620426157!5m2!1sja!2sjp" width="479" height="410" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              <iframe class="aria_map_container_mobile" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2914.998138878552!2d141.34746604067132!3d43.06250669671356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f0b299d1d7659a1%3A0xda51cf721a685041!2z44CSMDYwLTAwMDEg5YyX5rW36YGT5pyt5bmM5biC5Lit5aSu5Yy65YyX77yR5p2h6KW_77yT5LiB55uu!5e0!3m2!1sja!2sjp!4v1765629780810!5m2!1sja!2sjp" width="334" height="281" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              <p class="aria_distance_text">あなたの現在位置から<span id="aria_distance_value">0000</span>km</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="data">
    <h2>データから見るインフィニティエナジー</h2>
    <div class="data_container">
      <div class="data_chart_flex">
        <div class="data_pie_chart">
          <p class="data_pie_chart_title">インフィニティエナジーの<br>
            購買者層</p>
          <div class="data_pie_chart_gender">
            <canvas id="genderChart"></canvas>
          </div>
        </div>
        <div class="data_bar_chart">
          <p class="data_bar_chart_title">インフィニティエナジーの<br>
            売上</p>
          <div class="data_bar_chart_sales">
            <div class="data_bar_chart_top">
              <div class="data_bar_chart_top_left">
                <p class="data_bar_chart_top_left_text">百万ドル</p>
              </div>
              <div class="data_bar_chart_top_right">
                <span class="data_bar_chart_top_right_color"></span>
                <p class="data_bar_chart_top_right_text">売上高</p>
              </div>
            </div>
            <div class="data_bar_chart_memorys">
              <div class="data_bar_chart_memory_8000">
                <p class="data_bar_chart_memory_8000_text">8000</p>
                <div class="data_bar_chart_memory_8000_line"></div>
              </div>
              <div class="data_bar_chart_memory_6000">
                <p class="data_bar_chart_memory_6000_text">6000</p>
                <div class="data_bar_chart_memory_6000_line"></div>
              </div>
              <div class="data_bar_chart_memory_4000">
                <p class="data_bar_chart_memory_4000_text">4000</p>
                <div class="data_bar_chart_memory_4000_line"></div>
              </div>
              <div class="data_bar_chart_memory_2000">
                <p class="data_bar_chart_memory_2000_text">2000</p>
                <div class="data_bar_chart_memory_2000_line"></div>
              </div>
              <div class="data_bar_chart_memory_0">
                <p class="data_bar_chart_memory_0_text">0</p>
                <div class="data_bar_chart_memory_0_line"></div>
              </div>
            </div>
            <div class="bar_chart_content">
              <div class="bar_chart_bars">
                <div class="bar_wrapper">
                  <div class="bar" data-height="135">
                  </div>
                </div>
                <div class="bar_wrapper">
                  <div class="bar" data-height="170">
                  </div>
                </div>
                <div class="bar_wrapper">
                  <div class="bar" data-height="187">
                  </div>
                </div>
              </div>
            </div>
            <div class="data_bar_chart_bottom">
              <div class="data_bar_chart_bottom_text">21/12</div>
              <div class="data_bar_chart_bottom_text">22/12</div>
              <div class="data_bar_chart_bottom_text">23/12</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
  </section>

  <section class="flavor">
    <h2 class="flavor_title">あなたに合うフレーバーは？</h2>
    <p class="flavor_catchcopy">インフィニティエナジーでは3種類のフレーバーをご用意♪<br> 今のあなたに合うフレーバーを探っちゃおう！</p>
    <div class="flavor_yes_sample_flex">
      <div class="yes_arrow_sample"></div>
      <div class="yes_sample_text">YES</div>
    </div>
    <div class="flavor_no_sample_flex">
      <div class="no_arrow_sample"></div>
      <div class="no_sample_text">NO</div>
    </div>
    <div class="flavor_flowchart">
      <div class="flavor_flowchart_first_question">
        <div class="flavor_flowchart_first_question_container">
          <p class="flavor_flowchart_first_question_text">
            待ちに待った週末！休日はとにかくテンションを上げたい！
          </p>
        </div>
        <div class="flavor_flowchart_first_question_arrows">
          <div class="flavor_flowchart_first_question_yes_arrow"></div>
          <div class="flavor_flowchart_first_question_no_arrow"></div>
        </div>
      </div>

      <div class="flavor_flowchart_flex">
        <div class="flavor_flowchart_left">
          <div class="flavor_flowchart_second_question_container">
            <p class="flavor_flowchart_second_question_text">
              何かのイベントに参加予定
            </p>
          </div>
          <div class="flavor_flowchart_second_question_arrows">
            <div class="flavor_flowchart_second_question_yes_arrow"></div>
            <div class="flavor_flowchart_second_question_no_arrow"></div>
          </div>
          <div class="flavor_flowchart_third_question_flex">
            <div class="flavor_flowchart_third_question">
              <div class="flavor_flowchart_third_question_container">
                <p class="flavor_flowchart_third_question_text">
                  彼女と一緒？
                </p>
              </div>
              <div class="flavor_flowchart_result">
                <div class="flavor_flowchart_result_yes">
                  <div class="flavor_flowchart_third_question_yes_arrow"></div>
                  <img src="./img/flavor/flavor_result_can3.png" alt="#">
                </div>
                <div class="flavor_flowchart_result_no">
                  <div class="flavor_flowchart_third_question_no_arrow"></div>
                  <img src="./img/flavor/flavor_result_can1.png" alt="#">
                </div>
              </div>
            </div>
            <div class="flavor_flowchart_third_question">
              <div class="flavor_flowchart_third_question_container">
                <p class="flavor_flowchart_third_question_text">
                  特に予定はない？
                </p>
              </div>
              <div class="flavor_flowchart_result">
                <div class="flavor_flowchart_result_yes">
                  <div class="flavor_flowchart_third_question_yes_arrow"></div>
                  <img src="./img/flavor/flavor_result_can1.png" alt="#">
                </div>
                <div class="flavor_flowchart_result_no">
                  <div class="flavor_flowchart_third_question_no_arrow"></div>
                  <img src="./img/flavor/flavor_result_can3.png" alt="#">
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="flavor_flowchart_right">
          <div class="flavor_flowchart_second_question_container">
            <p class="flavor_flowchart_second_question_text">
              十分な睡眠は取れてる？
            </p>
          </div>
          <div class="flavor_flowchart_second_question_arrows">
            <div class="flavor_flowchart_second_question_yes_arrow"></div>
            <div class="flavor_flowchart_second_question_no_arrow"></div>
          </div>
          <div class="flavor_flowchart_third_question_flex">
            <div class="flavor_flowchart_third_question">
              <div class="flavor_flowchart_third_question_container">
                <p class="flavor_flowchart_third_question_text">
                  精神的に疲れてる？
                </p>
              </div>
              <div class="flavor_flowchart_result">
                <div class="flavor_flowchart_result_yes">
                  <div class="flavor_flowchart_third_question_yes_arrow"></div>
                  <img src="./img/flavor/flavor_result_can2.png" alt="#">
                </div>
                <div class="flavor_flowchart_result_no">
                  <div class="flavor_flowchart_third_question_no_arrow"></div>
                  <img src="./img/flavor/flavor_result_can1.png" alt="#">
                </div>
              </div>
            </div>
            <div class="flavor_flowchart_third_question">
              <div class="flavor_flowchart_third_question_container">
                <p class="flavor_flowchart_third_question_text">
                  休みは取れてる？
                </p>
              </div>
              <div class="flavor_flowchart_result">
                <div class="flavor_flowchart_result_yes">
                  <div class="flavor_flowchart_third_question_yes_arrow"></div>
                  <img src="./img/flavor/flavor_result_can3.png" alt="#">
                </div>
                <div class="flavor_flowchart_result_no">
                  <div class="flavor_flowchart_third_question_no_arrow"></div>
                  <img src="./img/flavor/flavor_result_can2.png" alt="#">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="flavor_flowchart_mobile"></div>
    <div class="flavor_detail">
      <div class="flavor_detail_list">
        <div class="flavor_detail_item">
          <div class="flavor_detail_item_top">
            <div class="flavor_detail_item_title mixed_berry_title">
              Mixed<br>Berry<br>Delight
            </div>
            <div class="flavor_detail_item_image">
              <img src="./img/flavor/flavor_detail_can1.png" alt="#">
            </div>
          </div>
          <div class="flavor_detail_item_name">ミクストベリーディライト</div>
          <div class="flavor_detail_item_detail">ベリーがブレンドされたフレーバーは、甘さと爽やかさが絶妙に組み合わさり、フルーティーな味わい。気分を落ち着かせ、頭が冴え渡ります。
          </div>
        </div>
        <div class="flavor_detail_item">
          <div class="flavor_detail_item_top">
            <div class="flavor_detail_item_title green_fusion_blast_title">
              Green<br>Fusion<br>Blast
            </div>
            <div class="flavor_detail_item_image">
              <img src="./img/flavor/flavor_detail_can2.png" alt="#">
            </div>
          </div>
          <div class="flavor_detail_item_name">グリーンフュージョンブラスト</div>
          <div class="flavor_detail_item_detail">フレッシュなミントと爽やかなライムのフレーバーにより、気分をリフレッシュさせ、生命エネルギーを高めるのに最適です。夏の暑い日の熱中症予防にも◎
          </div>
        </div>
        <div class="flavor_detail_item">
          <div class="flavor_detail_item_top">
            <div class="flavor_detail_item_title hot_blaze_inferno_title">
              Hot<br>Blaze<br>Inferno
            </div>
            <div class="flavor_detail_item_image">
              <img src="./img/flavor/flavor_detail_can3.png" alt="#">
            </div>
          </div>
          <div class="flavor_detail_item_name">ホットブレイズインフェルノ</div>
          <div class="flavor_detail_item_detail">シナモン、チリペッパーをブレンドしたフレーバーは、これまでにないスパイシーで燃え盛る情熱を感じる味わい。情熱的なエネルギーをあなたに注入します。
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
  <script src="./js/index.js"></script>

</body>

</html>