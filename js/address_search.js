// 住所検索画面のJavaScript
document.addEventListener('DOMContentLoaded', function() {
  const addressList = document.getElementById('address_list');
  const addressCity = document.getElementById('address_city');

  // sessionStorageから住所データを取得
  const addressDataStr = sessionStorage.getItem('addressData');
  const zipcode = sessionStorage.getItem('zipcode');

  if (!addressDataStr || !zipcode) {
    // データがない場合は元のページに戻る
    alert('郵便番号が正しく入力されていません。');
    window.location.href = 'index.php';
    return;
  }

  // 住所データをパース
  const addressData = JSON.parse(addressDataStr);

  console.log('=== 住所検索画面 ===');
  console.log('sessionStorageから取得した住所データ:', addressData);
  console.log('データ件数:', addressData.length);

  if (!addressData || addressData.length === 0) {
    addressList.innerHTML = '<p class="address_search_no_result">住所が見つかりませんでした。</p>';
    return;
  }

  // 市区町村・町名を取得（最初のデータから）
  const firstAddress = addressData[0];
  const cityName = firstAddress.prefecture + firstAddress.city;
  addressCity.textContent = cityName;
  
  console.log('市区町村・町名:', cityName);

  // address3が空のものと値があるものを分ける
  const addressesWithArea = addressData.filter(item => item.area && item.area.trim() !== '');
  const addressesWithoutArea = addressData.filter(item => !item.area || item.area.trim() === '');
  
  console.log('address3があるデータ:', addressesWithArea.length, '件');
  console.log('address3がないデータ:', addressesWithoutArea.length, '件');

  // 丁目の候補を抽出（数字+丁目のパターンのみ）
  const chomeList = [];
  const townList = [];
  const seenChome = new Set();
  const seenTown = new Set();
  
  console.log('=== 丁目の候補抽出処理 ===');
  addressesWithArea.forEach((item, index) => {
    console.log(`[${index}] 処理中のデータ:`, item);
    
    const area = item.area.trim();
    console.log(`  [${index}] 元のarea: "${area}"`);
    
    // 「数字+丁目」のパターンを抽出（例：「1丁目」「2丁目」）
    const chomeMatch = area.match(/(\d+丁目)/);
    if (chomeMatch) {
      const chome = chomeMatch[1]; // 「1丁目」の部分だけを取得
      console.log(`  [${index}] 抽出した丁目: "${chome}"`);
      
      if (!seenChome.has(chome)) {
        seenChome.add(chome);
        chomeList.push(chome);
        console.log(`  [${index}] 丁目候補に追加: "${chome}"`);
      }
    } else {
      // 丁目パターンが見つからない場合は、町名として扱う
      console.log(`  [${index}] 丁目パターンが見つかりません。町名として扱う: "${area}"`);
      if (!seenTown.has(area)) {
        seenTown.add(area);
        townList.push(area);
        console.log(`  [${index}] 町名候補に追加: "${area}"`);
      }
    }
  });

  console.log('=== 抽出結果 ===');
  console.log('抽出された丁目の候補:', chomeList);
  console.log('抽出された町名の候補:', townList);
  console.log('丁目候補数:', chomeList.length);
  console.log('町名候補数:', townList.length);

  // 表示処理
  if (chomeList.length > 0) {
    // 丁目の候補がある場合は、丁目を表示
    console.log('丁目の候補を表示します');
    chomeList.forEach((chome, index) => {
      const addressItem = document.createElement('div');
      addressItem.className = 'address_search_item';
      addressItem.textContent = chome;
      addressItem.addEventListener('click', function() {
        // 選択した住所（市区町村・町名 + 丁目）をsessionStorageに保存
        const selectedAddress = cityName + chome;
        sessionStorage.setItem('selectedAddress', selectedAddress);
        // 元のページに戻る
        window.location.href = 'index.php';
      });
      addressList.appendChild(addressItem);
    });
  } else if (townList.length > 0) {
    // 丁目がないが、町名がある場合は、市区町村のみと市区町村+町名を表示
    console.log('町名の候補を表示します');
    
    // 市区町村のみの選択肢を追加（address3が空のデータがある場合）
    if (addressesWithoutArea.length > 0) {
      const addressItem = document.createElement('div');
      addressItem.className = 'address_search_item';
      addressItem.textContent = cityName;
      addressItem.addEventListener('click', function() {
        sessionStorage.setItem('selectedAddress', cityName);
        window.location.href = 'index.php';
      });
      addressList.appendChild(addressItem);
    }
    
    // 市区町村+町名の選択肢を追加
    townList.forEach((town, index) => {
      const addressItem = document.createElement('div');
      addressItem.className = 'address_search_item';
      addressItem.textContent = cityName + town;
      addressItem.addEventListener('click', function() {
        const selectedAddress = cityName + town;
        sessionStorage.setItem('selectedAddress', selectedAddress);
        window.location.href = 'index.php';
      });
      addressList.appendChild(addressItem);
    });
  } else {
    // address3が存在しない、または空の場合
    // 市区町村・町名のみを選択可能にする
    console.log('address3がないため、市区町村のみを表示します');
    const addressItem = document.createElement('div');
    addressItem.className = 'address_search_item';
    addressItem.textContent = cityName;
    addressItem.addEventListener('click', function() {
      sessionStorage.setItem('selectedAddress', cityName);
      window.location.href = 'index.php';
    });
    addressList.appendChild(addressItem);
  }
});
