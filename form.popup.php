<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>フォームモーダルデザイン - INFINITY ENERGY</title>
  <link rel="icon" type="image/png" href="./img/favicon.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/style.css">
  <style>
    /* モーダルを通常のコンテンツとして表示 */
    .zipcode_input_modal {
      display: block !important;
      position: relative !important;
      width: 100%;
      height: auto;
      background-color: transparent !important;
      padding: 0;
      align-items: stretch !important;
      justify-content: flex-start !important;
    }

    .zipcode_input_modal_content {
      width: 100%;
      max-width: 500px;
      margin: 0 auto;
      max-height: none;
    }

    .address_search_modal {
      display: block !important;
      position: relative !important;
      width: 100%;
      height: auto;
      background-color: transparent !important;
      padding: 0;
      align-items: stretch !important;
      justify-content: flex-start !important;
      margin-top: 40px;
    }

    .address_search_modal_content {
      width: 100%;
      max-width: 500px;
      margin: 0 auto;
      max-height: none;
    }

    /* デザイン確認用の背景 */
    body {
      background-color: #f5f5f5;
      min-height: 100vh;
    }

    .form {
      max-width: 600px;
      margin: 0 auto;
    }
  </style>
</head>

<body>
  <section class="form">
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

    <!-- 住所検索結果モーダル -->
    <div class="address_search_modal" id="address_search_modal">
      <div class="address_search_modal_content">
        <div class="address_search_modal_header">
          <button class="address_search_modal_back_btn" id="address_search_back_btn">
            <span class="address_search_modal_back_icon">&lt;</span>
          </button>
          <h2 class="address_search_modal_title">住所検索</h2>
        </div>
        <div class="address_search_modal_body">
          <div class="address_search_modal_city" id="address_search_modal_city">大阪府大阪市住吉区南住吉</div>
          <div class="address_search_modal_list" id="address_search_modal_list">
            <div class="address_search_modal_item">1丁目</div>
            <div class="address_search_modal_item">2丁目</div>
            <div class="address_search_modal_item">3丁目</div>
            <div class="address_search_modal_item">4丁目</div>
            <div class="address_search_modal_item">その他</div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>