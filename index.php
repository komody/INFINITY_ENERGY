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
  <!-- <script type="module" src="./js/three-scene.js"></script>
  <script type="module" src="./js/three-scene-2.js"></script> -->
  <script type="module" src="./js/three-scene-3.js"></script>
  <script type="module" src="./js/three-scene-mobile.js"></script>
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
      <!-- <canvas id="WebGL-output"></canvas>
      <canvas id="WebGL-output-2"></canvas> -->
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
          <img src="./img/kinds/kinds_main.png" alt="INFINITY EMERGY">
        </div>
        <div class="kinds_list">
          <div class="kinds_item">
            <div class="kinds_item_title">
              <div class="kinds_item_title_text mixed_berry_title">Mixed <br class="PC_line_break">Berry <br class="PC_line_break">Delight</div>
            </div>
            <div class="kinds_item_info">
              <div class="kinds_item_can_container">
                <div class="kinds_item_can kinds_item_mixed_berry_triangle">
                  <img src="img/kinds/kinds_kan1.png" class="can_label" alt="#">
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
              <div class="kinds_item_title_text green_fusion_blast_title">Green <br class="PC_line_break">Fusion <br class="PC_line_break">Blast</div>
            </div>
            <div class="kinds_item_info">
              <div class="kinds_item_can_container">
                <div class="kinds_item_can kinds_item_green_fusion_triangle">
                  <img src="img/kinds/kinds_kan2.png" class="can_label" alt="#">
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
              <div class="kinds_item_title_text hot_blaze_inferno_title">Hot <br class="PC_line_break">Blaze <br class="PC_line_break">Inferno</div>
            </div>
            <div class="kinds_item_info">
              <div class="kinds_item_can_container">
                <div class="kinds_item_can kinds_item_hot_blaze_triangle">
                  <img src="img/kinds/kinds_kan3.png" class="can_label" alt="#">
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
    <h2>データから見る<br class="mobile_line_break">インフィニティエナジー</h2>
    <div class="data_container">
      <div class="data_chart_flex">
        <div class="data_pie_chart">
          <p class="data_pie_chart_title">インフィニティエナジーの<br>
            購買者層</p>
          <div class="data_pie_chart_gender">
            <canvas id="genderChart"></canvas>
          </div>
        </div>
        <div class="data_container_divider"></div>
        <div class="data_container_divider_mobile"></div>
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
                <div class="bar_wrapper_mobile">
                  <div class="bar" data-height="113">
                  </div>
                </div>
                <div class="bar_wrapper_mobile">
                  <div class="bar" data-height="143">
                  </div>
                </div>
                <div class="bar_wrapper_mobile">
                  <div class="bar" data-height="157">
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
    <p class="flavor_catchcopy">インフィニティエナジーでは3種類のフレーバーをご用意♪<br class="PC_line_break">今のあなたに合うフレーバーを探っちゃおう！</p>
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
        <div class="flavor_flowchart_first_question_container flavor-fade-in">
          <p class="flavor_flowchart_first_question_text">
            待ちに待った週末！休日はとにかくテンションを上げたい！
          </p>
        </div>
        <div class="flavor_flowchart_first_question_arrows flavor-fade-in">
          <div class="flavor_flowchart_first_question_yes_arrow"></div>
          <div class="flavor_flowchart_first_question_no_arrow"></div>
        </div>
      </div>

      <div class="flavor_flowchart_flex">
        <div class="flavor_flowchart_left">
          <div class="flavor_flowchart_second_question_container flavor-fade-in">
            <p class="flavor_flowchart_second_question_text">
              何かのイベントに参加予定
            </p>
          </div>
          <div class="flavor_flowchart_second_question_arrows flavor-fade-in">
            <div class="flavor_flowchart_second_question_yes_arrow"></div>
            <div class="flavor_flowchart_second_question_no_arrow"></div>
          </div>
          <div class="flavor_flowchart_third_question_flex">
            <div class="flavor_flowchart_third_question">
              <div class="flavor_flowchart_third_question_container flavor-fade-in">
                <p class="flavor_flowchart_third_question_text">
                  彼女と一緒？
                </p>
              </div>
              <div class="flavor_flowchart_result">
                <div class="flavor_flowchart_result_yes flavor-fade-in">
                  <div class="flavor_flowchart_third_question_yes_arrow"></div>
                  <img src="./img/flavor/flavor_result_can3.png" alt="#">
                </div>
                <div class="flavor_flowchart_result_no flavor-fade-in">
                  <div class="flavor_flowchart_third_question_no_arrow"></div>
                  <img src="./img/flavor/flavor_result_can1.png" alt="#">
                </div>
              </div>
            </div>
            <div class="flavor_flowchart_third_question">
              <div class="flavor_flowchart_third_question_container flavor-fade-in">
                <p class="flavor_flowchart_third_question_text">
                  特に予定はない？
                </p>
              </div>
              <div class="flavor_flowchart_result">
                <div class="flavor_flowchart_result_yes flavor-fade-in">
                  <div class="flavor_flowchart_third_question_yes_arrow"></div>
                  <img src="./img/flavor/flavor_result_can1.png" alt="#">
                </div>
                <div class="flavor_flowchart_result_no flavor-fade-in">
                  <div class="flavor_flowchart_third_question_no_arrow"></div>
                  <img src="./img/flavor/flavor_result_can3.png" alt="#">
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="flavor_flowchart_right">
          <div class="flavor_flowchart_second_question_container flavor-fade-in">
            <p class="flavor_flowchart_second_question_text">
              十分な睡眠は取れてる？
            </p>
          </div>
          <div class="flavor_flowchart_second_question_arrows flavor-fade-in">
            <div class="flavor_flowchart_second_question_yes_arrow"></div>
            <div class="flavor_flowchart_second_question_no_arrow"></div>
          </div>
          <div class="flavor_flowchart_third_question_flex">
            <div class="flavor_flowchart_third_question">
              <div class="flavor_flowchart_third_question_container flavor-fade-in">
                <p class="flavor_flowchart_third_question_text">
                  精神的に疲れてる？
                </p>
              </div>
              <div class="flavor_flowchart_result">
                <div class="flavor_flowchart_result_yes flavor-fade-in">
                  <div class="flavor_flowchart_third_question_yes_arrow"></div>
                  <img src="./img/flavor/flavor_result_can2.png" alt="#">
                </div>
                <div class="flavor_flowchart_result_no flavor-fade-in">
                  <div class="flavor_flowchart_third_question_no_arrow"></div>
                  <img src="./img/flavor/flavor_result_can1.png" alt="#">
                </div>
              </div>
            </div>
            <div class="flavor_flowchart_third_question">
              <div class="flavor_flowchart_third_question_container flavor-fade-in">
                <p class="flavor_flowchart_third_question_text">
                  休みは取れてる？
                </p>
              </div>
              <div class="flavor_flowchart_result">
                <div class="flavor_flowchart_result_yes flavor-fade-in">
                  <div class="flavor_flowchart_third_question_yes_arrow"></div>
                  <img src="./img/flavor/flavor_result_can3.png" alt="#">
                </div>
                <div class="flavor_flowchart_result_no flavor-fade-in">
                  <div class="flavor_flowchart_third_question_no_arrow"></div>
                  <img src="./img/flavor/flavor_result_can2.png" alt="#">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="flavor_flowchart_mobile_sample">
      <div class="flavor_flowchart_mobile_first_question">
        <div class="flavor_flowchart_mobile_first_question_container flavor-fade-in">
          <p class="flavor_flowchart_mobile_first_question_text">
            待ちに待った週末！休日はとにかくテンションを上げたい！
          </p>
        </div>
        <div class="flavor_flowchart_mobile_first_question_toggle flavor-fade-in">
          <input type="radio" id="toggle_yes_sample" name="toggle_yesno_sample" class="toggle_input toggle_input_yes">
          <input type="radio" id="toggle_no_sample" name="toggle_yesno_sample" class="toggle_input toggle_input_no">
          <label for="toggle_yes_sample" class="toggle_label toggle_label_yes">
            <span class="toggle_yes">YES</span>
          </label>
          <label for="toggle_no_sample" class="toggle_label toggle_label_no">
            <span class="toggle_no">NO</span>
          </label>
        </div>
        <div class="flavor_flowchart_mobile_first_question_arrows flavor-fade-in">
          <div class="flavor_flowchart_mobile_first_question_yes_arrow"></div>
        </div>
      </div>
      <div class="flavor_flowchart_mobile_second_question">
        <div class="flavor_flowchart_mobile_second_question_container flavor-fade-in">
          <p class="flavor_flowchart_mobile_second_question_text">
            何かのイベントに参加予定
          </p>
        </div>
        <div class="flavor_flowchart_mobile_second_question_toggle flavor-fade-in">
          <input type="radio" id="toggle_yes_2_sample" name="toggle_yesno_2_sample" class="toggle_input toggle_input_yes_2">
          <input type="radio" id="toggle_no_2_sample" name="toggle_yesno_2_sample" class="toggle_input toggle_input_no_2">
          <label for="toggle_yes_2_sample" class="toggle_label toggle_label_yes_2">
            <span class="toggle_yes">YES</span>
          </label>
          <label for="toggle_no_2_sample" class="toggle_label toggle_label_no_2">
            <span class="toggle_no">NO</span>
          </label>
        </div>
        <div class="flavor_flowchart_mobile_second_question_arrows flavor-fade-in">
          <div class="flavor_flowchart_mobile_second_question_yes_arrow"></div>
        </div>
      </div>
      <div class="flavor_flowchart_mobile_third_question">
        <div class="flavor_flowchart_mobile_third_question_container flavor-fade-in">
          <p class="flavor_flowchart_mobile_third_question_text">
            特に予定はない？
          </p>
        </div>
        <div class="flavor_flowchart_mobile_third_question_toggle flavor-fade-in">
          <input type="radio" id="toggle_yes_3_sample" name="toggle_yesno_3_sample" class="toggle_input toggle_input_yes_3">
          <input type="radio" id="toggle_no_3_sample" name="toggle_yesno_3_sample" class="toggle_input toggle_input_no_3">
          <label for="toggle_yes_3_sample" class="toggle_label toggle_label_yes_3">
            <span class="toggle_yes">YES</span>
          </label>
          <label for="toggle_no_3_sample" class="toggle_label toggle_label_no_3">
            <span class="toggle_no">NO</span>
          </label>
        </div>
        <div class="flavor_flowchart_mobile_third_question_arrows flavor-fade-in">
          <div class="flavor_flowchart_mobile_third_question_yes_arrow"></div>
        </div>
      </div>
      <div class="flavor_flowchart_mobile_result flavor-fade-in" id="result_can1" style="display: block;">
        <div class="flavor_flowchart_mobile_result_content">
          <div class="flavor_flowchart_mobile_result_text">
            <div class="flavor_flowchart_mobile_result_title mixed_berry_title">
              Mixed<br>Berry<br>Delight
            </div>
          </div>
          <img src="./img/flavor/flavor_result_can1.png" alt="Mixed Berry Delight">
        </div>
      </div>
      <div class="flavor_flowchart_mobile_result flavor-fade-in" id="result_can2" style="display: none;">
        <div class="flavor_flowchart_mobile_result_content">
          <div class="flavor_flowchart_mobile_result_text">
            <div class="flavor_flowchart_mobile_result_title green_fusion_blast_title">Green<br>Fusion<br>Blast</div>
          </div>
          <img src="./img/flavor/flavor_result_can2.png" alt="Green Fusion Blast">
        </div>
      </div>
      <div class="flavor_flowchart_mobile_result flavor-fade-in" id="result_can3" style="display: none;">
        <div class="flavor_flowchart_mobile_result_content">
          <div class="flavor_flowchart_mobile_result_text">
            <div class="flavor_flowchart_mobile_result_title hot_blaze_inferno_title">Hot<br>Blaze<br>Inferno</div>
          </div>
          <img src="./img/flavor/flavor_result_can3.png" alt="Hot Blaze Inferno">
        </div>
      </div>
    </div>
    <div class="flavor_detail flavor-fade-in">
      <div class="flavor_detail_list">
        <div class="flavor_detail_item flavor-fade-in">
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
        <div class="flavor_detail_item flavor-fade-in">
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
        <div class="flavor_detail_item flavor-fade-in">
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

  <section class="sns">
    <h2 class="sns_title">みんなの<br class="mobile_line_break">インフィニティエナジー</h2>
    <div class="sns_container">
      <div class="sns_container_flex">
        <div class="sns_container_right">
          <div class="sns_container_right_text">
            <img src="./img/sns/sns_infinity.png" alt="#">
          </div>
          <div class="sns_container_right_cans">
            <img src="./img/sns/sns_can1.png" alt="#">
            <img src="./img/sns/sns_can2.png" alt="#">
            <img src="./img/sns/sns_can3.png" alt="#">
          </div>
          <div class="sns_container_right_image">
            <img src="./img/sns/sns_image1.png" alt="#">
          </div>
        </div>
        <div class="sns_container_left">
          <div class="sns_container_left_top">
            <img src="./img/sns/sns_image2.png" alt="#">
            <img src="./img/sns/sns_image3.png" alt="#">
            <img src="./img/sns/sns_image4.png" alt="#">
          </div>
          <div class="sns_container_left_bottom">
            <img src="./img/sns/sns_image5.png" alt="#">
            <img src="./img/sns/sns_image6.png" alt="#">
            <img src="./img/sns/sns_image7.png" alt="#">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="intake">
    <h2 class="intake_title">あなたに最適な１日の摂取量</h2>
    <div class="intake_container">
      <div class="intake_container_input_aria">
        <div class="intake_container_input_aria_left">
          <div class="intake_input_item">
            <label class="intake_input_label">あなたの年齢</label>
            <select class="intake_select" id="intake_age">
              <option value=""></option>
              <option value="9">9歳未満</option>
              <option value="10-19">10代</option>
              <option value="20-29">20代</option>
              <option value="30-39">30代</option>
              <option value="40-49">40代</option>
              <option value="50-59">50代</option>
              <option value="60+">60代以上</option>
            </select>
          </div>
          <div class="intake_input_item">
            <label class="intake_input_label">あなたの体重</label>
            <select class="intake_select" id="intake_weight">
              <option value=""></option>
              <option value="40-49">40kg未満</option>
              <option value="50-59">50kg台</option>
              <option value="60-69">60kg台</option>
              <option value="70-79">70kg台</option>
              <option value="80-89">80kg台</option>
              <option value="90+">90kg以上</option>
            </select>
          </div>
          <div class="intake_input_item">
            <label class="intake_input_label">あなたの平均睡眠時間</label>
            <select class="intake_select" id="intake_sleep">
              <option value=""></option>
              <option value="4以下">4時間以下</option>
              <option value="5">5時間</option>
              <option value="6">6時間</option>
              <option value="7">7時間</option>
              <option value="8">8時間</option>
              <option value="9以上">9時間以上</option>
            </select>
          </div>
        </div>
        <div class="intake_container_input_aria_right">
          <button id="intake_submit_button"><span>診断する</span></button>
        </div>
      </div>
      <div class="intake_container_result">
        <p class="intake_container_result_text_left">あなたに最適な１日の摂取量は</p>
        <div class="mobile_line_break">
          <span id="intake_result_value">-</span>
          <p class="intake_container_result_text_right">本です。</p>
        </div>
      </div>
    </div>
    <div class="intake_detail">
      <p class="intake_detail_top">「インフィニティエナジー」はエネルギー補給に役立つドリンクですが、適切な摂取が重要です。以下の注意事項に従って、健康的かつ安全な利用をお願いいたします。</p>
      <ul class="intake_detail_list">
        <li><span class="intake_detail_list_number">1. 1日の摂取量を守ろう</span><br>
          「インフィニティエナジー」の推奨される1日の摂取量は1〜3本です。これを超えないようにしましょう。過剰な摂取は健康に悪影響を及ぼす可能性があります。</li>
        <li><span class="intake_detail_list_number">2. 個人の感受性を考慮しよう</span><br>
          個人差があります。カフェインやその他の成分に対する感受性が高い場合、少ない量でも効果を感じることがあります。体調や状況に応じて調整しましょう。</li>
        <li><span class="intake_detail_list_number">3. 運動前と後に使う場合</span><br>
          エナジードリンクは運動前にエネルギーを補給するのに適していますが、摂取のタイミングを適切にコントロールしましょう。過度な摂取は不快感を引き起こすことがあります。</li>
        <li><span class="intake_detail_list_number">4. 水分補給を忘れずに</span><br>
          「インフィニティエナジー」はエネルギーを提供しますが、水分補給を忘れないようにしましょう。特に運動中や暑い日には水をこまめに摂りましょう。</li>
        <li><span class="intake_detail_list_number">5. 年齢制限に従おう</span><br>
          未成年者や特定の年齢層には制限がある場合があります。年齢制限を守り、未成年者への提供には慎重に対応しましょう。</li>
        <li><span class="intake_detail_list_number">6. 妊娠中や授乳中の方への注意</span><br>
          妊娠中や授乳中の場合、医師の指導に従ってください。特にカフェイン摂取には制限が必要かもしれません。</li>
        <li><span class="intake_detail_list_number">7. 他のカフェイン摂取源との組み合わせ</span><br>
          他のカフェイン摂取源（コーヒーや紅茶など）と組み合わせた場合、摂取総量に注意しましょう。</li>
      </ul>
      <p class="intake_detail_bottom">「インフィニティエナジー」はエネルギー補給の一部として活用できますが、適切な摂取を守り、自身の健康に配慮しましょう。不明点や健康上の懸念がある場合は、医師や専門家に相談することをお勧めします。</p>
    </div>
  </section>

  <section class="report">
    <h2 class="report_title">インフィニティエナジーを知る</h2>
    <div class="report_container">
      <div class="report_container_flex">
        <div class="report_container_article">
          <img src="./img/report/report_thumbnail1.png" alt="#">
          <div class="report_container_article_detail">
            <p class="report_container_article_date">
              2023/00/00
            </p>
            <p class="report_container_article_title">
              エナジードリンクの歴史と未来
            </p>
            <p class="report_container_article_text">
              エナジードリンクの進化と未来展望を探ります。
            </p>
          </div>
        </div>
        <div class="report_container_article">
          <img src="./img/report/report_thumbnail2.png" alt="#">
          <div class="report_container_article_detail">
            <p class="report_container_article_date">
              2023/00/00
            </p>
            <p class="report_container_article_title">
              ストレス対策にエナジードリンクは役立つか？
            </p>
            <p class="report_container_article_text">
              ストレス軽減にエナジードリンクの可能性を考察。
            </p>
          </div>
        </div>
        <div class="report_container_article">
          <img src="./img/report/report_thumbnail3.png" alt="#">
          <div class="report_container_article_detail">
            <p class="report_container_article_date">
              2023/00/00
            </p>
            <p class="report_container_article_title">
              アスリートのためのエナジードリンクの最適な利用法
            </p>
            <p class="report_container_article_text">
              競技者向けのエナジードリンクの最適な使い方。
            </p>
          </div>
        </div>
        <div class="report_container_article tablet">
          <img src="./img/report/report_thumbnail1.png" alt="#">
          <div class="report_container_article_detail">
            <p class="report_container_article_date">
              2023/00/00
            </p>
            <p class="report_container_article_title">
              エナジードリンクの歴史と未来
            </p>
            <p class="report_container_article_text">
              エナジードリンクの進化と未来展望を探ります。
            </p>
          </div>
        </div>
      </div>
      <div class="report_container_button">
        <button class="report_container_button_more">
          <span>VIEW ALL</span>
        </button>
      </div>
    </div>
    <div class="report_modal">
      <div class="report_modal_header">
        <div class="report_modal_header_title">
          <picture>
            <source srcset="./img/report/report_modal_title_mobile.png" media="(max-width: 600px)">
            <img src="./img/report/report_modal_title.png" alt="#">
          </picture>
        </div>
        <div class="report_modal_header_menu">
          <div>PRODUCT</div>
          <div>SHOP</div>
        </div>
      </div>
      <div class="report_modal_content">
        <div class="report_container_article">
          <img src="./img/report/report_thumbnail1.png" alt="#">
          <div class="report_container_article_detail">
            <p class="report_container_article_date">
              2023/00/00
            </p>
            <p class="report_container_article_title">
              エナジードリンクの歴史と未来
            </p>
            <p class="report_container_article_text">
              エナジードリンクの進化と未来展望を探ります。
            </p>
          </div>
        </div>
        <div class="report_container_article stress">
          <img src="./img/report/report_thumbnail2.png" alt="#">
          <div class="report_container_article_detail">
            <p class="report_container_article_date">
              2023/00/00
            </p>
            <p class="report_container_article_title">
              ストレス対策にエナジードリンクは役立つか？
            </p>
            <p class="report_container_article_text">
              ストレス軽減にエナジードリンクの可能性を考察。
            </p>
          </div>
        </div>
        <div class="report_container_article athlete">
          <img src="./img/report/report_thumbnail3.png" alt="#">
          <div class="report_container_article_detail">
            <p class="report_container_article_date">
              2023/00/00
            </p>
            <p class="report_container_article_title">
              アスリートのためのエナジードリンクの最適な利用法
            </p>
            <p class="report_container_article_text">
              競技者向けのエナジードリンクの最適な使い方。
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="form">
    <h2 class="form_title">プレゼントキャンペーン<br class="mobile_line_break">開催中</h2>
    <div class="form_title_detail">
      <p>エナジーを無限に感じる、インフィニティエナジーが贈る、<br class="PC_line_break">スペシャルな<br class="mobile_line_break">キャンペーンがやってきました！</p>
      <p class="form_title_detail_chance">このチャンスを逃さず、素晴らしいプレゼントを手に入れましょう！</p>
    </div>
    <div class="form_campaign_container">
      <div class="form_campaign_container_flex">
        <div class="form_campaign_container_left">
          <picture>
            <source srcset="./img/form/form_can_mobile.png" media="(max-width: 550px)">
            <img src="./img/form/form_can.png" alt="#">
          </picture>
        </div>
        <div class="form_campaign_container_right">
          <div class="form_campaign_container_prezent">▶ プレゼント内容</div>
          <div class="form_campaign_container_prezent_detail">
            インフィニティエナジーの無料引換券や特別エディションボトルなどの素敵な賞品が当たるチャンス！数量限定なのでお早めに応募してください。
          </div>
          <hr class="form_campaign_container_divider">
          <div class="form_campaign_container_period">▶ キャンペーン期間</div>
          <div class="form_campaign_container_period_detail">
            2023年 <span class="text_move_right">10</span>月<span>1</span>日〜<br class="mobile_line_break">2024年<span>1</span>月<span>31</span>日まで</span>
          </div>
        </div>
      </div>
    </div>
    <div class="form_contact_container">
      <div class="form_contact_title">応募フォーム</div>
      <form action="#" method="POST" class="form_contact_form" novalidate>
        <div class="form_row form_row_name">
          <label for="name" class="form_label">
            お名前
            <span class="form_required">*</span><br>
            <small class="form_note">※フルネーム</small>
          </label>
          <div class="form_input_wrapper">
            <input type="text" id="name" name="name" class="form_input" required>
            <div class="form_error" id="name_error"></div>
          </div>
        </div>
        <div class="form_row form_row_kana">
          <label for="kana" class="form_label">
            お名前
            <span class="form_required">*</span><br>
            <small class="form_note">※ふりがな</small>
          </label>
          <div class="form_input_wrapper">
            <input type="text" id="kana" name="kana" class="form_input" required>
            <div class="form_error" id="kana_error"></div>
          </div>
        </div>
        <div class="form_row form_row_email">
          <label for="email" class="form_label">
            メールアドレス
            <span class="form_required">*</span>
          </label>
          <div class="form_input_wrapper">
            <input type="email" id="email" name="email" class="form_input" required>
            <div class="form_error" id="email_error"></div>
          </div>
        </div>
        <div class="form_row form_row_tel">
          <label for="tel" class="form_label">
            電話番号
            <span class="form_required">*</span>
          </label>
          <div class="form_input_wrapper">
            <input type="tel" id="tel" name="tel" class="form_input short" required>
            <div class="form_error" id="tel_error"></div>
          </div>
        </div>
        <div class="form_row form_row_zipcode">
          <label for="zipcode" class="form_label">
            郵便番号
            <span class="form_required">*</span>
          </label>
          <div class="form_input_wrapper">
            <input type="text" id="zipcode" name="zipcode" class="form_input short" inputmode="numeric" required>
            <div class="form_error" id="zipcode_error"></div>
          </div>
        </div>
        <div class="form_row form_row_address">
          <label for="address" class="form_label">
            住所
            <span class="form_required">*</span>
          </label>
          <div class="form_input_wrapper">
            <input type="text" id="address" name="address" class="form_input" required>
            <div class="form_error" id="address_error"></div>
          </div>
        </div>
        <hr class="form_divider">
        <div class="form_checkbox">
          <label class="form_checkbox_label">
            <input type="checkbox" name="privacy" class="form_checkbox_input" required>
            <p>プライバシーポリシーに同意します。</p>
          </label>
        </div>
        <p class="form_submit_button_text">[送信] ボタンをクリックして応募を完了します。当選者にはメールでお知らせいたします。</p>
        <div class="form_submit_button_container">
          <button class="form_submit_button"><span>送信する</span></button>
          <div class="form_submit_button_shadow"></div>
        </div>
        <p class="form_text_privacy_policy">注意: このフォームで提供された情報は、キャンペーンの運営および当選者への連絡にのみ使用されます。プライバ<br class="PC_line_break">シーに関する詳細については、Infinity Energy のプライバシーポリシーをご参照ください。</p>
      </form>
    </div>

    <div class="zipcode_input_modal" id="zipcode_input_modal">
      <div class="zipcode_input_modal_content">
        <div class="zipcode_input_modal_header">
          <button class="zipcode_input_modal_back_btn" id="zipcode_input_back_btn">
            <span class="zipcode_input_modal_back_icon">&lt;</span>
          </button>
          <h2 class="zipcode_input_modal_title">郵便番号入力</h2>
        </div>
        <div class="zipcode_input_modal_body">
          <p class="zipcode_input_modal_instruction">郵便番号を入力してください</p>
          <input type="text" id="zipcode_input_field" class="zipcode_input_field" inputmode="numeric" placeholder="入力してください" maxlength="8">
        </div>
      </div>
    </div>

    <div class="address_search_modal" id="address_search_modal">
      <div class="address_search_modal_content">
        <div class="address_search_modal_header">
          <button class="address_search_modal_back_btn" id="address_search_back_btn">
            <span class="address_search_modal_back_icon">&lt;</span>
          </button>
          <h2 class="address_search_modal_title">住所検索</h2>
        </div>
        <div class="address_search_modal_body">
          <div class="address_search_modal_city" id="address_search_modal_city"></div>
          <div class="address_search_modal_list" id="address_search_modal_list"></div>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer">
    <h2 class="footer_title">
      <picture>
        <source srcset="./img/footer/footer_title_mobile.png" media="(max-width: 550px)">
        <img src="./img/footer/footer_title.png" alt="#">
      </picture>
    </h2>
    <div class="footer_container">
      <div class="footer_container_flex">
        <div class="footer_container_left">
          <div class="footer_container_left_top">
            <p>Instagram</p>
            <p>Twitter</p>
          </div>
          <div class="footer_container_left_bottom">
            <p>YouTube</p>
            <p>TikTok</p>
          </div>
        </div>
        <div class="footer_container_divider_pc"></div>
        <hr class="footer_container_divider_mobile">
        <div class="footer_container_right">
          <div class="footer_container_right_top">
            <p>Column</p>
            <p>Contact</p>
          </div>
          <div class="footer_container_right_bottom">
            <p>Company</p>
            <p>Privacy Policy</p>
          </div>
        </div>
      </div>
      <div class="footer_container_bottom">
        <p>©INFINITY ENERGY, All Rights Reserved.</p>
      </div>
    </div>
  </footer>

  <section class="popup">
    <div class="popup_overlay">
      <div class="popup_modal_step1">
        <h2 class="popup_title">サイトから離れる前に！</h2>
        <div class="popup_title_detail">
          <div class="popup_title_detail_top">お客様、まだお楽しみいただけていない情報がたくさんあります！</div>
          <div class="popup_title_detail_bottom">ウェブサイトを離れる前に、以下の特典をお見逃しなく！</div>
        </div>
        <div class="popup_promotion">
          <div class="popup_promotion_title">
            <span>最新情報とプロモーション</span>
          </div>
          <div class="popup_promotion_detail">「インフィニティエナジー」に関する最新ニュースやお得なプロモーション情報を受け取るためにメールアドレスを登録しましょう。</div>
        </div>
        <div class="popup_secret">
          <div class="popup_secret_title">
            <span>エナジードリンクの秘密</span>
          </div>
          <div class="popup_secret_detail">「インフィニティエナジー」の裏側に迫る独占的な情報を入手。</div>
        </div>
        <div class="popup_next_page">
          <div class="popup_next_page_text">
            <div class="popup_next_page_text_top">今すぐこのページを離れる場合、これらの特典を逃すことになります。</div>
            <div class="popup_next_page_text_bottom">ぜひ続けてご覧いただき、エナジーを最大限に引き出しましょう！</div>
          </div>
          <div class="popup_next_page_button">
            <button class="popup_next_page_button_close">
              <span class="text_PC">後で</span>
              <span class="text_mobile">あとで</span>
            </button>
            <button class="popup_next_page_button_next">
              <span>続ける</span>
            </button>
          </div>
        </div>
        <div class="popup_modal_close">
          <button class="close-btn"></button>
        </div>
      </div>
      <div class="popup_modal_step2">
        <h2 class="popup_title">メールマガジンに<br class="mobile_line_break">登録しよう！</h2>
        <div class="popup_title_detail">
          <div class="popup_title_detail">「インフィニティエナジー」の最新情報、特別プロモーション、健康的なライフスタイルのヒントを受け取りたいですか？それなら、ぜひメールマガジンに登録してください。登録は簡単で、以下の特典も含まれます</div>
        </div>
        <div class="popup_promotion">
          <div class="popup_promotion_title">
            <span>特別なプロモーション情報</span>
          </div>
          <div class="popup_promotion_detail">新製品、セール、および限定オファーのお知らせを受け取る機会。</div>
        </div>
        <div class="popup_secret">
          <div class="popup_secret_title">
            <span>健康的な生活スタイルのヒント</span>
          </div>
          <div class="popup_secret_detail">エネルギー充電のコツ、栄養アドバイス、運動の助言など、お役立ち情報。</div>
        </div>
        <div class="popup_next_page">
          <div class="popup_next_page_text">
            <div class="popup_next_page_text_top">メールマガジンに登録して<span>、</span>「インフィニティエナジー」との接点を強化し、 エネルギーを最大限に活用しましょう！登録は無料です。</div>
          </div>
          <div class="form_email">
            <label for="email" class="form_label">
              メールアドレス
              <span class="form_required">*</span>
            </label>
            <input type="email" id="email" name="email" class="form_input" required>
          </div>
          <div class="popup_next_page_button">
            <button class="popup_next_page_button_next">
              <span>登録する</span>
            </button>
          </div>
        </div>
        <div class="popup_modal_close">
          <button class="close-btn"></button>
        </div>
      </div>
    </div>
  </section>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
  <script src="./js/index.js"></script>

</body>

</html>