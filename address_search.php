<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>住所検索 - INFINITY ENERGY</title>
  <link rel="icon" type="image/png" href="./img/favicon.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>
  <div class="address_search_container">
    <div class="address_search_header">
      <button class="address_search_back_btn" onclick="window.history.back()">
        <span class="address_search_back_icon">&lt;</span>
      </button>
      <h1 class="address_search_title">住所検索</h1>
    </div>
    <div class="address_search_area">
      <div class="address_search_city" id="address_city">
        <!-- 市区町村・町名が表示されます -->
      </div>
      <div class="address_search_list" id="address_list">
        <!-- 丁目の候補が動的に生成されます -->
      </div>
    </div>
  </div>

  <script src="./js/address_search.js"></script>
</body>

</html>
