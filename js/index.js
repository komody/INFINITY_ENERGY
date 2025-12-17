const kindsSection = document.querySelector('.kinds');
const kindsItems = document.querySelectorAll('.kinds_item');

let currentIndex = 0;
let isAutoScrolling = false;

function scrollToItem(index) {
  if (!kindsItems[index]) return;
  isAutoScrolling = true;

  const prevTitle = kindsItems[currentIndex]?.querySelector('.kinds_item_title');
  if (prevTitle) prevTitle.classList.remove('is-visible');

  kindsItems[index].scrollIntoView({ behavior: 'smooth', block: 'start' });

  const checkScroll = () => {
    const top = kindsItems[index].getBoundingClientRect().top;
    if (Math.abs(top) < 1) {
  setTimeout(() => {
        isAutoScrolling = false;
      }, 10);
    } else {
      requestAnimationFrame(checkScroll);
    }
  };
  checkScroll();
}

window.addEventListener('scroll', () => {
  const rect = kindsSection.getBoundingClientRect();

  if (rect.top <= 0 && rect.bottom > 0 && !isAutoScrolling) {
    const itemTop = kindsItems[currentIndex].getBoundingClientRect().top;

    if (itemTop < -100 && currentIndex < kindsItems.length - 1) {
      currentIndex++;
      scrollToItem(currentIndex);
    } else if (itemTop > 100 && currentIndex > 0) {
      currentIndex--;
      scrollToItem(currentIndex);
    }
  }
});

const io = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    const title = entry.target.querySelector('.kinds_item_title');
    if (!title) return;
    if (entry.intersectionRatio >= 0.5) {
      title.classList.add('is-visible');
    } else {
      title.classList.remove('is-visible');
    }
  });
}, { threshold: [0, 0.25, 0.5, 0.75, 1] });

kindsItems.forEach((item) => io.observe(item));

document.addEventListener('DOMContentLoaded', () => {
  const switches = document.querySelectorAll('input.switch');
  const bubbles = document.querySelectorAll('.now_you_bubbles .bubble');

  function updateBubbles() {
    const activeNames = Array.from(switches)
      .filter(input => input.checked)
      .map(input => input.dataset.target);

    bubbles.forEach(img => {
      const name = img.dataset.name;
      const shouldShow = activeNames.includes(name);
      img.classList.toggle('is-visible', shouldShow);
      img.setAttribute('aria-hidden', shouldShow ? 'false' : 'true');
    });
  }

  switches.forEach(input => {
    input.addEventListener('change', updateBubbles);
  });

  updateBubbles();
});


document.addEventListener('DOMContentLoaded', () => {
  const container = document.querySelector('.result_comparison_container');
  const afterImage = document.querySelector('.result_after_image');
  const sliderHandle = document.querySelector('.result_slider_handle');
  
  let isDragging = false;

  function updateSlider(x) {
    const rect = container.getBoundingClientRect();
    let position = ((x - rect.left) / rect.width) * 100;
    
    position = Math.max(0, Math.min(100, position));
    
    const beforeImage = document.querySelector('.result_before_image');
    beforeImage.style.clipPath = `inset(0 ${100 - position}% 0 0)`;
    
    afterImage.style.clipPath = `inset(0 0 0 ${position}%)`;
    
    sliderHandle.style.left = `${position}%`;
  }

  function startDrag(e) {
    isDragging = true;
    container.style.cursor = 'col-resize';
    updateSlider(e.type.includes('touch') ? e.touches[0].clientX : e.clientX);
  }

  function drag(e) {
    if (!isDragging) return;
    e.preventDefault();
    updateSlider(e.type.includes('touch') ? e.touches[0].clientX : e.clientX);
  }

  function stopDrag() {
    isDragging = false;
    container.style.cursor = 'col-resize';
  }

  container.addEventListener('mousedown', startDrag);
  container.addEventListener('touchstart', startDrag, { passive: false });

  document.addEventListener('mousemove', drag);
  document.addEventListener('touchmove', drag, { passive: false });

  document.addEventListener('mouseup', stopDrag);
  document.addEventListener('touchend', stopDrag);

  container.addEventListener('click', (e) => {
    if (!isDragging) {
      updateSlider(e.clientX);
    }
  });

  const rect = container.getBoundingClientRect();
  let offset;
  const windowWidth = window.innerWidth;
  
  if (windowWidth >= 1050) {
    offset = 615;
  } else if (windowWidth <= 500) {
    offset = 218;
  } else {
    offset = rect.width * 0.6;
  }
  
  const initialX = rect.right - offset;
  updateSlider(initialX);
});

var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  spaceBetween: 30,
  loop: true,
  allowTouchMove: false,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

document.addEventListener('DOMContentLoaded', function() {
  const revealElements = document.querySelectorAll('.promotion-reveal-left, .promotion-reveal-right, .promotion-reveal-bottom, .promotion-reveal-bg-right, .promotion-reveal-mobile');
  
  if (revealElements.length === 0) {
    return;
  }
  
  const observerOptions = {
    root: null,
    rootMargin: '0px',
    threshold: 0.1
  };
  
  const observerCallback = (entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('active');
        
        // 親要素にactiveクラスを追加
        const parentElement = entry.target.parentElement;
        if (parentElement) {
          parentElement.classList.add('active');
        }
        
        observer.unobserve(entry.target);
      }
    });
  };
  
  const observer = new IntersectionObserver(observerCallback, observerOptions);
  
  revealElements.forEach(element => {
    observer.observe(element);
  });
});

var aria_swiper = new Swiper(".aria_mySwiper", {
  slidesPerView: 1,
  spaceBetween: 30,
  loop: true,
  allowTouchMove: false,
  autoplay: false,
  pagination: {
    el: ".aria_mySwiper .swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".aria_mySwiper .swiper-button-next",
    prevEl: ".aria_mySwiper .swiper-button-prev",
  },
});

// 地図のSVG要素にホバー処理を追加
const mapRegions = [
  'hokkaido',
  'touhoku',
  'kantou',
  'hokuriku',
  'toukai',
  'kansai',
  'tyugoku',
  'sikoku',
  'kyusyu',
  'okinawa'
];

document.addEventListener('DOMContentLoaded', function() {
  // SVG要素が読み込まれるまで少し待つ
  setTimeout(() => {
    // 地図のクラス名とスライダーのクラス名の対応関係
    const mapToSwiperMap = {
      'hokkaido': 'swiper_aria_hokkaido',
      'touhoku': 'swiper_aria_touhoku',
      'kantou': 'swiper_aria_kantou',
      'toukai': 'swiper_aria_toukai',
      'hokuriku': 'swiper_aria_hokuriku',
      'kansai': 'swiper_aria_kansai',
      'tyugoku': 'swiper_aria_tyugoku',
      'sikoku': 'swiper_aria_sikoku',
      'kyusyu': 'swiper_aria_kyusyu_okinawa',
      'okinawa': 'swiper_aria_kyusyu_okinawa'
    };

    // 全てのスライダー要素を取得
    const allSwipers = Object.values(mapToSwiperMap).map(swiperClass => {
      return document.querySelector(`.${swiperClass}`);
    }).filter(el => el !== null);

    // 全てのpath要素を取得（地図要素との対応関係も保持）
    const allPaths = [];
    mapRegions.forEach(region => {
      const mapElement = document.querySelector(`.aria_japan_map_${region}`);
      if (mapElement) {
        const paths = mapElement.querySelectorAll('svg path');
        paths.forEach(path => {
          allPaths.push({
            path: path,
            region: region,
            swiperClass: mapToSwiperMap[region]
          });
        });
      }
    });

    // スライダーを切り替える関数
    function showSwiper(swiperClass) {
      // 全てのスライダーを非表示
      allSwipers.forEach(swiper => {
        if (swiper) {
          swiper.style.display = 'none';
        }
      });
      // 指定されたスライダーを表示
      const targetSwiper = document.querySelector(`.${swiperClass}`);
      if (targetSwiper) {
        targetSwiper.style.display = 'block';
      }
    }

    // 初期状態で北海道のpath要素にhoverクラスを追加し、スライダーを表示
    const hokkaidoMapElement = document.querySelector('.aria_japan_map_hokkaido');
    if (hokkaidoMapElement) {
      const hokkaidoPaths = hokkaidoMapElement.querySelectorAll('svg path');
      hokkaidoPaths.forEach(path => path.classList.add('hover'));
      showSwiper('swiper_aria_hokkaido');
    }

    // 地区ごとにpath要素をグループ化
    const pathsByRegion = {};
    allPaths.forEach(({ path, region, swiperClass }) => {
      if (!pathsByRegion[region]) {
        pathsByRegion[region] = {
          paths: [],
          swiperClass: swiperClass
        };
      }
      pathsByRegion[region].paths.push(path);
    });

    // 全ての地区のpath要素にホバー処理を追加
    allPaths.forEach(({ path, region, swiperClass }) => {
      path.addEventListener('mouseenter', function() {
        // 全てのpath要素からhoverクラスを削除
        allPaths.forEach(({ path: p }) => p.classList.remove('hover'));
        // ホバーされたpath要素が属する地区の全てのpath要素にhoverクラスを追加
        const regionPaths = pathsByRegion[region];
        if (regionPaths) {
          regionPaths.paths.forEach(p => p.classList.add('hover'));
        }
        // 対応するスライダーを表示
        showSwiper(swiperClass);
      });
    });
  }, 100);
});

// Chart.js アニメーション
document.addEventListener('DOMContentLoaded', function() {
  let genderChart = null;
  let salesChart = null;

  // 画像を事前にロード
  const manImage = new Image();
  manImage.src = './img/data/data_man.png';
  const womanImage = new Image();
  womanImage.src = './img/data/data_woman.png';

  // 円グラフ（性別分布）- 時計回りに表示
  const genderCtx = document.getElementById('genderChart');
  if (genderCtx) {
    // カスタムプラグイン：円グラフの中にラベルを表示
    const pieLabelPlugin = {
      id: 'pieLabel',
      afterDraw: function(chart) {
        const ctx = chart.ctx;
        const chartArea = chart.chartArea;
        const meta = chart.getDatasetMeta(0);
        
        meta.data.forEach((element, index) => {
          const data = chart.data.datasets[0].data[index];
          const label = chart.data.labels[index];
          
          // データが0の場合は表示しない
          if (data === 0) return;
          
          // セグメントの中心角度を計算
          const angle = (element.startAngle + element.endAngle) / 2;
          
          // 円の中心位置
          const centerX = element.x;
          const centerY = element.y;
          
          // 円の半径（outerRadiusを使用）
          const radius = element.outerRadius;
          
          // セグメントの中心位置を計算（半径の50%の位置でセグメントの中心に配置）
          const labelRadius = radius * 0.45;
          const x = centerX + Math.cos(angle) * labelRadius;
          const y = centerY + Math.sin(angle) * labelRadius;
          
          ctx.save();
          
          // 画像を描画（ラベルの代わり）
          const image = label === '男性' ? manImage : womanImage;
          
          // 男性と女性で別々にサイズを調整
          const manImageWidth = 94;
          const manImageHeight = 50;
          const womanImageWidth = 94;
          const womanImageHeight = 50;
          
          // 男性と女性で別々に位置を調整（オフセット）
          const manOffsetX = -3;  // 男性画像のX方向オフセット
          const manOffsetY = -2;  // 男性画像のY方向オフセット
          const womanOffsetX = -7;  // 女性画像のX方向オフセット
          const womanOffsetY = -10;  // 女性画像のY方向オフセット
          
          const imageWidth = label === '男性' ? manImageWidth : womanImageWidth;
          const imageHeight = label === '男性' ? manImageHeight : womanImageHeight;
          const offsetX = label === '男性' ? manOffsetX : womanOffsetX;
          const offsetY = label === '男性' ? manOffsetY : womanOffsetY;
          
          const imageX = x - imageWidth / 2 + offsetX;
          const imageY = y - imageHeight / 2 + offsetY; // 中央に配置 + オフセット
          
          if (image.complete) {
            ctx.drawImage(image, imageX, imageY, imageWidth, imageHeight);
          }
          
          ctx.restore();
        });
      }
    };
    
    genderChart = new Chart(genderCtx, {
      type: 'pie',
      data: {
        labels: ['男性', '女性'],
        datasets: [{
          data: [0, 0], // 初期状態は0
          backgroundColor: [
            '#0092E3',
            '#FF7456'
          ],
          borderWidth: 2,
          borderColor: '#fff'
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false // 凡例を非表示（円の中にラベルを表示するため）
          },
          tooltip: {
            callbacks: {
              label: function(context) {
                return context.label + ': ' + context.parsed + '%';
              }
            }
          }
        },
        animation: {
          animateRotate: true,
          animateScale: false,
          duration: 2000,
          easing: 'easeOutQuart',
          onComplete: function() {
          }
        }
      },
      plugins: [pieLabelPlugin]
    });
  }

  // 棒グラフ（売上高）- 下から上に伸ばす
  const salesCtx = document.getElementById('salesChart');
  if (salesCtx) {
    salesChart = new Chart(salesCtx, {
      type: 'bar',
      data: {
        labels: ['21/12', '22/12', '23/12'],
        datasets: [{
          label: '売上高',
          data: [0, 0, 0],
          backgroundColor: '#FF0211',
          borderColor: 'rgba(255, 99, 132, 1)',
          borderWidth: 0
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        aspectRatio: 1.2,
        plugins: {
          legend: {
            display: true,
            position: 'top',
            align: 'end',
            labels: {
              font: {
                size: 12
              },
              boxWidth: 13.5,
              boxHeight: 13.5
            }
          },
          tooltip: {
            callbacks: {
              label: function(context) {
                return '売上高: ' + context.parsed.y + '百万ドル';
              }
            }
          }
        },
        scales: {
          y: {
            beginAtZero: true,
            title: {
              display: false
            },
            ticks: {
              stepSize: 2000,
              font: {
                size: 14
              },
              padding: 5, // 左の数字の位置を調整（数値を大きくすると右に移動）
              callback: function(value) {
                return value;
              }
            },
            grid: {
              display: true,
              drawBorder: false
            },
            border: {
              display: false
            }
          },
          x: {
            ticks: {
              font: {
                size: 14
              },
              padding: 5 // 下の月日の位置を調整（数値を大きくすると下に移動）
            },
            title: {
              display: false
            },
            grid: {
              display: false
            },
            categoryPercentage: 0.3, // カテゴリ間のスペース（0.6 = 60%、バーを狭くする場合は小さく）
            barPercentage: 0.4 // バーの幅（0.8 = 80%、バーを細くする場合は小さく）
          }
        },
        animation: {
          duration: 2000,
          easing: 'easeOutQuart'
          // バーの上の数値を非表示にするため、onCompleteを削除
        }
      }
    });
  }

  // カスタムバーチャートのアニメーション設定
  const barChart = document.querySelector('.data_bar_chart');
  if (barChart) {
    const bars = barChart.querySelectorAll('.bar');
    const maxValue = 8000; // Y軸の最大値
    const chartHeight = 250; // グラフの高さ（px）

    bars.forEach(bar => {
      // data-height属性があれば直接使用、なければdata-valueで比率計算
      let height;
      if (bar.dataset.height) {
        height = parseFloat(bar.dataset.height);
      } else {
        const value = parseInt(bar.dataset.value);
        // 値に基づいて高さを計算（最大値8000に対して250px）
        height = (value / maxValue) * chartHeight;
      }
      bar.style.setProperty('--bar-height', `${height}px`);
    });
  }

  const barChartSample = document.querySelector('.data_bar_chart_sample');
  if (barChartSample) {
    const bars = barChartSample.querySelectorAll('.bar');
    const maxValue = 8000; // Y軸の最大値
    const chartHeight = 250; // グラフの高さ（px）

    bars.forEach(bar => {
      // data-height属性があれば直接使用、なければdata-valueで比率計算
      let height;
      if (bar.dataset.height) {
        height = parseFloat(bar.dataset.height);
      } else {
        const value = parseInt(bar.dataset.value);
        // 値に基づいて高さを計算（最大値8000に対して250px）
        height = (value / maxValue) * chartHeight;
      }
      bar.style.setProperty('--bar-height', `${height}px`);
    });
  }

  // Intersection Observerでスクロール時にアニメーション開始
  const dataSection = document.querySelector('.data');
  if (dataSection) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          // 円グラフのデータを更新してアニメーション開始（2秒かけてアニメーション）
          if (genderChart) {
            genderChart.data.datasets[0].data = [63.4, 36.6];
            // 2秒かけてアニメーション表示
            genderChart.update();
          }
          // 棒グラフのデータを更新してアニメーション開始（2秒かけてアニメーション）
          if (salesChart) {
            salesChart.data.datasets[0].data = [4400, 5600, 6100];
            // 2秒かけてアニメーション表示
            salesChart.update();
          }
          // カスタムバーチャートのアニメーション開始
          const barChart = document.querySelector('.data_bar_chart');
          if (barChart) {
            const bars = barChart.querySelectorAll('.bar');
            bars.forEach(bar => {
              bar.classList.add('animate');
            });
          }
          if (barChartSample) {
            const bars = barChartSample.querySelectorAll('.bar');
            bars.forEach(bar => {
              bar.classList.add('animate');
            });
          }
          observer.unobserve(entry.target);
        }
      });
    }, {

      rootMargin: '400px 0px 0px 0px', // 上方向に400pxのマージン（スクロールして400px表示されたら検知）
      threshold: 0.1 // 要素の10%が見えたら検知
    });
    
    observer.observe(dataSection);
  }

  // Googleマップiframeと距離表示の処理
  // 距離を計算する関数（ハーバーサイン公式）
  function calculateDistance(lat1, lon1, lat2, lon2) {
    const R = 6371; // 地球の半径（km）
    const dLat = (lat2 - lat1) * Math.PI / 180;
    const dLon = (lon2 - lon1) * Math.PI / 180;
    const a = 
      Math.sin(dLat / 2) * Math.sin(dLat / 2) +
      Math.cos(lat1 * Math.PI / 180) * Math.cos(lat2 * Math.PI / 180) *
      Math.sin(dLon / 2) * Math.sin(dLon / 2);
    const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
    return R * c;
  }

  // GoogleマップのiframeのURLを生成
  function generateMapUrl(lat, lng) {
    return `https://www.google.com/maps/embed/v1/place?key=YOUR_API_KEY&q=${lat},${lng}&zoom=15`;
  }

  // 地図を表示する関数
  function showShopMap(shopLat, shopLng, shopName) {
    console.log('showShopMap開始:', { shopLat, shopLng, shopName });
    
    const japanMapContainer = document.querySelector('.aria_container_flex_right_map');
    const mapRootContainer = document.querySelector('.aria_container_flex_right_root');
    const mapContainerWrapper = document.querySelector('.aria_map_container');
    
    console.log('要素確認:', {
      japanMapContainer: !!japanMapContainer,
      mapRootContainer: !!mapRootContainer,
      mapContainerWrapper: !!mapContainerWrapper
    });

    if (!mapContainerWrapper) {
      console.error('地図コンテナが見つかりません');
      return;
    }

    const mapIframes = mapContainerWrapper.querySelectorAll('iframe');
    console.log('iframe数:', mapIframes.length);

    if (!mapIframes || mapIframes.length === 0) {
      console.error('iframeが見つかりません');
      return;
    }

    if (!mapRootContainer) {
      console.error('地図ルートコンテナが見つかりません');
      return;
    }

    // 日本地図を非表示、Googleマップを表示
    if (japanMapContainer) {
      japanMapContainer.style.display = 'none';
      console.log('日本地図を非表示にしました');
    }
    mapRootContainer.style.display = 'block';
    console.log('Googleマップを表示しました');

    // iframeのsrcを更新（緯度経度で指定）
    // 注意: Google Maps Embed APIを使う場合はAPIキーが必要ですが、
    // 緯度経度を直接URLに含める方法でも表示可能です
    const mapUrl = `https://www.google.com/maps?q=${shopLat},${shopLng}&output=embed`;
    console.log('地図URL:', mapUrl);
    
    // PC用とモバイル用の両方のiframeを更新
    mapIframes.forEach((iframe, index) => {
      iframe.src = mapUrl;
      console.log(`iframe ${index} を更新しました`);
    });
  }

  // 現在地を取得して距離を計算・表示
  function showDistance(shopLat, shopLng) {
    if (!navigator.geolocation) {
      alert('位置情報を取得できません。お使いのブラウザが位置情報に対応していません。');
      return;
    }

    console.log('位置情報の取得を開始します');

    navigator.geolocation.getCurrentPosition(
      (position) => {
        console.log('位置情報を取得しました:', position.coords);
        const userLat = position.coords.latitude;
        const userLng = position.coords.longitude;

        // 距離を計算
        const distance = calculateDistance(userLat, userLng, shopLat, shopLng);
        console.log('距離:', distance, 'km');
        
        // 距離を表示（小数点第1位まで）
        const distanceElement = document.getElementById('aria_distance_value');
        if (distanceElement) {
          distanceElement.textContent = distance.toFixed(1);
        }
      },
      (error) => {
        console.error('位置情報取得エラー:', error);
        let errorMessage = '位置情報を取得できませんでした。';
        
        switch(error.code) {
          case error.PERMISSION_DENIED:
            errorMessage = '位置情報の使用が拒否されました。ブラウザの設定で位置情報を許可してください。';
            break;
          case error.POSITION_UNAVAILABLE:
            errorMessage = '位置情報を取得できませんでした。位置情報サービスが利用できない可能性があります。';
            break;
          case error.TIMEOUT:
            errorMessage = '位置情報の取得がタイムアウトしました。もう一度お試しください。';
            break;
          default:
            errorMessage = '位置情報を取得できませんでした。エラーコード: ' + error.code;
            break;
        }
        
        alert(errorMessage);
      },
      {
        enableHighAccuracy: false,
        timeout: 10000,
        maximumAge: 0
      }
    );
  }

  // ボタンクリックイベントを追加
  function initMapButtonEvents() {
    console.log('ボタンイベントを設定します');
    
    // 全てのボタンに直接イベントを追加
    const shopButtons = document.querySelectorAll('.shop_detail_button');
    console.log('ボタン数:', shopButtons.length);
    
    shopButtons.forEach((button, index) => {
      button.addEventListener('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        console.log(`ボタン ${index} がクリックされました`);
        
        const shopLat = parseFloat(this.dataset.latitude);
        const shopLng = parseFloat(this.dataset.longitude);
        const shopName = this.dataset.shopName || '店舗';

        console.log('店舗情報:', { shopLat, shopLng, shopName });

        if (isNaN(shopLat) || isNaN(shopLng)) {
          alert('店舗の位置情報が設定されていません。');
          console.error('位置情報が無効です');
          return;
        }

        // 地図を表示
        console.log('地図を表示します');
        showShopMap(shopLat, shopLng, shopName);
        
        // 距離を表示
        console.log('距離を表示します');
        showDistance(shopLat, shopLng);
      });
    });
  }

  // DOMContentLoadedで初期化
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initMapButtonEvents);
  } else {
    // 既にDOMが読み込まれている場合
    initMapButtonEvents();
  }
});

// 摂取量計算ロジック
document.addEventListener('DOMContentLoaded', function() {
  const ageSelect = document.getElementById('intake_age');
  const weightSelect = document.getElementById('intake_weight');
  const sleepSelect = document.getElementById('intake_sleep');
  const resultElement = document.getElementById('intake_result_value');

  function calculateIntake() {
    const age = ageSelect.value;
    const weight = weightSelect.value;
    const sleep = sleepSelect.value;

    // 全て選択されていない場合は結果を表示しない
    if (!age || !weight || !sleep) {
      if (resultElement) {
        resultElement.textContent = '-';
      }
      return;
    }

    let score = 0;

    // 年齢によるスコア（年齢が高いほどスコアが高い）
    if (age === '9') score += 0;
    else if (age === '10-19') score += 1;
    else if (age === '20-29') score += 2;
    else if (age === '30-39') score += 3;
    else if (age === '40-49') score += 2;
    else if (age === '50-59') score += 1;
    else if (age === '60+') score += 0;

    // 体重によるスコア（体重が重いほどスコアが高い）
    if (weight === '40-49') score += 1;
    else if (weight === '50-59') score += 2;
    else if (weight === '60-69') score += 2;
    else if (weight === '70-79') score += 3;
    else if (weight === '80-89') score += 3;
    else if (weight === '90+') score += 3;

    // 睡眠時間によるスコア（睡眠時間が短いほどスコアが高い）
    if (sleep === '4以下') score += 0;
    else if (sleep === '5') score += 1;
    else if (sleep === '6') score += 2;
    else if (sleep === '7') score += 2;
    else if (sleep === '8') score += 3;
    else if (sleep === '9以上') score += 3;

    // スコアに基づいて摂取量を決定（1〜3本）
    let intake = 1;
    if (score >= 7) {
      intake = 3;
    } else if (score >= 4) {
      intake = 2;
    } else {
      intake = 1;
    }

    // 結果を表示
    if (resultElement) {
      resultElement.textContent = intake;
    }
  }

  // ボタンクリック時に結果を計算・表示
  const submitButton = document.getElementById('intake_submit_button');
  if (submitButton) {
    submitButton.addEventListener('click', function(e) {
      e.preventDefault();
      calculateIntake();
    });
  }
});
