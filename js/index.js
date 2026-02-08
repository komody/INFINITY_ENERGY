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

  document.addEventListener('DOMContentLoaded', () => {
  const targets = document.querySelectorAll('.fade-target');

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          observer.unobserve(entry.target); // 一度だけ
        }
      });
    },
    {
      root: null,
      rootMargin: '100px 0px 0px 0px',
      threshold: 0
    }
  );

  targets.forEach(target => observer.observe(target));
});

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

// 無限スクロール処理（一段目を表示し続ける）
document.addEventListener('DOMContentLoaded', function() {
  const reportModalContent = document.querySelector('.report_modal_content');
  
  if (!reportModalContent) {
    return;
  }

  // 最初の3つの記事要素を取得（一段目）
  const firstRowArticles = Array.from(reportModalContent.querySelectorAll('.report_container_article')).slice(0, 3);
  
  if (firstRowArticles.length === 0) {
    return;
  }

  // Intersection Observerの設定
  const observerOptions = {
    root: null, // ビューポートをルートとして使用
    rootMargin: '100px', // 100px手前で発火
    threshold: 0.1 // 10%表示されたら発火
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        // 最後の要素が表示領域に入ったら、最初の3つの記事を複製して追加
        firstRowArticles.forEach(article => {
          const clonedArticle = article.cloneNode(true);
          reportModalContent.appendChild(clonedArticle);
        });
      }
    });
  }, observerOptions);

  // 最後の記事要素を監視対象に設定
  const allArticles = reportModalContent.querySelectorAll('.report_container_article');
  if (allArticles.length > 0) {
    const lastArticle = allArticles[allArticles.length - 1];
    observer.observe(lastArticle);
  }

  // 動的に追加された要素も監視するため、MutationObserverを使用
  const mutationObserver = new MutationObserver((mutations) => {
    mutations.forEach((mutation) => {
      if (mutation.addedNodes.length > 0) {
        // 新しい要素が追加されたら、最後の要素を監視対象に更新
        const allArticles = reportModalContent.querySelectorAll('.report_container_article');
        if (allArticles.length > 0) {
          const lastArticle = allArticles[allArticles.length - 1];
          // 既に監視中の要素を解除
          observer.disconnect();
          // 新しい最後の要素を監視
          observer.observe(lastArticle);
        }
      }
    });
  });

  // report_modal_contentの変更を監視
  mutationObserver.observe(reportModalContent, {
    childList: true,
    subtree: true
  });
});

// フレーバーフローチャートのトグルスイッチ制御
document.addEventListener('DOMContentLoaded', function() {
  // 1問目の要素
  const toggleYes = document.getElementById('toggle_yes');
  const toggleNo = document.getElementById('toggle_no');
  const toggleLabelYes = document.querySelector('.toggle_label_yes');
  const toggleLabelNo = document.querySelector('.toggle_label_no');
  const toggleContainer = document.querySelector('.flavor_flowchart_mobile_first_question_toggle');
  const arrowElement = document.querySelector('.flavor_flowchart_mobile_first_question_yes_arrow');
  
  // 2問目の要素（YES選択時）
  const secondQuestionYes = document.querySelector('.flavor_flowchart_mobile_second_question_yes');
  const toggleYes2 = document.getElementById('toggle_yes_2');
  const toggleNo2 = document.getElementById('toggle_no_2');
  const toggleLabelYes2 = document.querySelector('.toggle_label_yes_2');
  const toggleLabelNo2 = document.querySelector('.toggle_label_no_2');
  const toggleContainer2 = document.querySelector('.flavor_flowchart_mobile_second_question_toggle');
  const arrowsContainer2 = secondQuestionYes ? secondQuestionYes.querySelector('.flavor_flowchart_mobile_second_question_arrows') : null;
  const arrowYes2 = arrowsContainer2 ? arrowsContainer2.querySelector('.flavor_flowchart_mobile_second_question_yes_arrow') : null;
  const arrowNo2 = arrowsContainer2 ? arrowsContainer2.querySelector('.flavor_flowchart_mobile_second_question_no_arrow') : null;
  
  // 2問目の要素（NO選択時）
  const secondQuestionNo = document.querySelector('.flavor_flowchart_mobile_second_question_no');
  const toggleYes3 = document.getElementById('toggle_yes_3');
  const toggleNo3 = document.getElementById('toggle_no_3');
  const toggleLabelYes3 = document.querySelector('.toggle_label_yes_3');
  const toggleLabelNo3 = document.querySelector('.toggle_label_no_3');
  const toggleContainer3 = secondQuestionNo ? secondQuestionNo.querySelector('.flavor_flowchart_mobile_second_question_toggle') : null;
  const arrowsContainer3 = secondQuestionNo ? secondQuestionNo.querySelector('.flavor_flowchart_mobile_second_question_arrows') : null;
  const arrowYes3 = arrowsContainer3 ? arrowsContainer3.querySelector('.flavor_flowchart_mobile_second_question_yes_arrow') : null;
  const arrowNo3 = arrowsContainer3 ? arrowsContainer3.querySelector('.flavor_flowchart_mobile_second_question_no_arrow') : null;

  if (!toggleYes || !toggleNo || !toggleLabelYes || !toggleLabelNo || !toggleContainer || !arrowElement) {
    return;
  }

  // 1問目のトグルスイッチの状態を更新する関数
  function updateToggleState() {
    const isYesChecked = toggleYes.checked;
    const isNoChecked = toggleNo.checked;
    const toggleYesSpan = toggleLabelYes.querySelector('.toggle_yes');
    const toggleNoSpan = toggleLabelNo.querySelector('.toggle_no');

    // 中央の点線とハンドルの表示/非表示
    if (isYesChecked || isNoChecked) {
      toggleContainer.style.setProperty('--divider-opacity', '1');
    } else {
      toggleContainer.style.setProperty('--divider-opacity', '0');
    }

    // クラスをリセット
    toggleYesSpan.classList.remove('is-selected');
    toggleNoSpan.classList.remove('is-selected');
    toggleContainer.classList.remove('yes-selected', 'no-selected');

    // YESが選択された場合
    if (isYesChecked) {
      toggleYesSpan.style.backgroundColor = '#00FFE0';
      toggleNoSpan.style.backgroundColor = '#808080';
      toggleYesSpan.classList.add('is-selected');
      toggleContainer.classList.add('yes-selected');
      arrowElement.style.backgroundColor = '#00FFE0';
      
      // 2問目（YES）を表示
      if (secondQuestionYes) {
        secondQuestionYes.style.display = 'block';
      }
      // 2問目（NO）を非表示
      if (secondQuestionNo) {
        secondQuestionNo.style.display = 'none';
      }
    }
    // NOが選択された場合
    else if (isNoChecked) {
      toggleYesSpan.style.backgroundColor = '#A0A0A0';
      toggleNoSpan.style.backgroundColor = '#AD00FF';
      toggleNoSpan.classList.add('is-selected');
      toggleContainer.classList.add('no-selected');
      arrowElement.style.backgroundColor = '#AD00FF';
      
      // 2問目（YES）を非表示
      if (secondQuestionYes) {
        secondQuestionYes.style.display = 'none';
      }
      // 2問目（NO）を表示
      if (secondQuestionNo) {
        secondQuestionNo.style.display = 'block';
      }
    }
    // どちらも選択されていない場合
    else {
      toggleYesSpan.style.backgroundColor = '#A0A0A0';
      toggleNoSpan.style.backgroundColor = '#808080';
      arrowElement.style.backgroundColor = '#00FFE0'; // デフォルトはターコイズ
      
      // 2問目を非表示
      if (secondQuestionYes) {
        secondQuestionYes.style.display = 'none';
      }
      if (secondQuestionNo) {
        secondQuestionNo.style.display = 'none';
      }
    }
  }

  // 3問目の要素を取得
  const thirdQuestionYesYes = document.querySelector('.flavor_flowchart_mobile_third_question_yes_yes');
  const thirdQuestionYesNo = document.querySelector('.flavor_flowchart_mobile_third_question_yes_no');
  const thirdQuestionNoYes = document.querySelector('.flavor_flowchart_mobile_third_question_no_yes');
  const thirdQuestionNoNo = document.querySelector('.flavor_flowchart_mobile_third_question_no_no');
  
  // 3問目のトグルスイッチ要素
  const toggleYes4 = document.getElementById('toggle_yes_4');
  const toggleNo4 = document.getElementById('toggle_no_4');
  const toggleYes5 = document.getElementById('toggle_yes_5');
  const toggleNo5 = document.getElementById('toggle_no_5');
  const toggleYes6 = document.getElementById('toggle_yes_6');
  const toggleNo6 = document.getElementById('toggle_no_6');
  const toggleYes7 = document.getElementById('toggle_yes_7');
  const toggleNo7 = document.getElementById('toggle_no_7');
  
  // 3問目のラベル要素
  const toggleLabelYes4 = document.querySelector('.toggle_label_yes_4');
  const toggleLabelNo4 = document.querySelector('.toggle_label_no_4');
  const toggleLabelYes5 = document.querySelector('.toggle_label_yes_5');
  const toggleLabelNo5 = document.querySelector('.toggle_label_no_5');
  const toggleLabelYes6 = document.querySelector('.toggle_label_yes_6');
  const toggleLabelNo6 = document.querySelector('.toggle_label_no_6');
  const toggleLabelYes7 = document.querySelector('.toggle_label_yes_7');
  const toggleLabelNo7 = document.querySelector('.toggle_label_no_7');
  
  // 3問目のコンテナ要素
  const toggleContainer4 = thirdQuestionYesYes ? thirdQuestionYesYes.querySelector('.flavor_flowchart_mobile_third_question_toggle') : null;
  const toggleContainer5 = thirdQuestionYesNo ? thirdQuestionYesNo.querySelector('.flavor_flowchart_mobile_third_question_toggle') : null;
  const toggleContainer6 = thirdQuestionNoYes ? thirdQuestionNoYes.querySelector('.flavor_flowchart_mobile_third_question_toggle') : null;
  const toggleContainer7 = thirdQuestionNoNo ? thirdQuestionNoNo.querySelector('.flavor_flowchart_mobile_third_question_toggle') : null;
  
  // 3問目の矢印コンテナ要素
  const arrowsContainer4 = thirdQuestionYesYes ? thirdQuestionYesYes.querySelector('.flavor_flowchart_mobile_third_question_arrows') : null;
  const arrowsContainer5 = thirdQuestionYesNo ? thirdQuestionYesNo.querySelector('.flavor_flowchart_mobile_third_question_arrows') : null;
  const arrowsContainer6 = thirdQuestionNoYes ? thirdQuestionNoYes.querySelector('.flavor_flowchart_mobile_third_question_arrows') : null;
  const arrowsContainer7 = thirdQuestionNoNo ? thirdQuestionNoNo.querySelector('.flavor_flowchart_mobile_third_question_arrows') : null;
  
  // 結果表示要素
  const resultElements = {
    'yes-yes-yes': document.querySelector('[data-path="yes-yes-yes"]'),
    'yes-yes-no': document.querySelector('[data-path="yes-yes-no"]'),
    'yes-no-yes': document.querySelector('[data-path="yes-no-yes"]'),
    'yes-no-no': document.querySelector('[data-path="yes-no-no"]'),
    'no-yes-yes': document.querySelector('[data-path="no-yes-yes"]'),
    'no-yes-no': document.querySelector('[data-path="no-yes-no"]'),
    'no-no-yes': document.querySelector('[data-path="no-no-yes"]'),
    'no-no-no': document.querySelector('[data-path="no-no-no"]')
  };

  // 全ての結果を非表示にする関数
  function hideAllResults() {
    Object.values(resultElements).forEach(el => {
      if (el) el.style.display = 'none';
    });
  }

  // 全ての3問目を非表示にする関数
  function hideAllThirdQuestions() {
    [thirdQuestionYesYes, thirdQuestionYesNo, thirdQuestionNoYes, thirdQuestionNoNo].forEach(el => {
      if (el) el.style.display = 'none';
    });
  }

  // 2問目のトグルスイッチの状態を更新する関数（YES選択時）
  function updateToggleState2() {
    if (!toggleContainer2) return;
    
    const isYesChecked = toggleYes2.checked;
    const isNoChecked = toggleNo2.checked;
    const toggleYesSpan2 = toggleLabelYes2.querySelector('.toggle_yes');
    const toggleNoSpan2 = toggleLabelNo2.querySelector('.toggle_no');

    if (isYesChecked || isNoChecked) {
      toggleContainer2.style.setProperty('--divider-opacity', '1');
    } else {
      toggleContainer2.style.setProperty('--divider-opacity', '0');
    }

    toggleYesSpan2.classList.remove('is-selected');
    toggleNoSpan2.classList.remove('is-selected');
    hideAllThirdQuestions();
    hideAllResults();

    // 矢印の表示/非表示と色の変更
    if (isYesChecked) {
      toggleYesSpan2.style.backgroundColor = '#00FFE0';
      toggleNoSpan2.style.backgroundColor = '#808080';
      toggleYesSpan2.classList.add('is-selected');
      if (arrowYes2) {
        arrowYes2.style.display = 'block';
        arrowYes2.style.backgroundColor = '#00FFE0';
      }
      if (arrowNo2) {
        arrowNo2.style.display = 'none';
      }
      // 3問目を表示（彼女と一緒？）
      if (thirdQuestionYesYes) {
        thirdQuestionYesYes.style.display = 'block';
      }
    } else if (isNoChecked) {
      toggleYesSpan2.style.backgroundColor = '#A0A0A0';
      toggleNoSpan2.style.backgroundColor = '#AD00FF';
      toggleNoSpan2.classList.add('is-selected');
      if (arrowYes2) {
        arrowYes2.style.display = 'none';
      }
      if (arrowNo2) {
        arrowNo2.style.display = 'block';
        arrowNo2.style.backgroundColor = '#AD00FF';
      }
      // 3問目を表示（特に予定はない？）
      if (thirdQuestionYesNo) {
        thirdQuestionYesNo.style.display = 'block';
      }
    } else {
      toggleYesSpan2.style.backgroundColor = '#A0A0A0';
      toggleNoSpan2.style.backgroundColor = '#808080';
      if (arrowYes2) {
        arrowYes2.style.display = 'none';
      }
      if (arrowNo2) {
        arrowNo2.style.display = 'none';
      }
    }
  }

  // 2問目のトグルスイッチの状態を更新する関数（NO選択時）
  function updateToggleState3() {
    if (!toggleContainer3) return;
    
    const isYesChecked = toggleYes3.checked;
    const isNoChecked = toggleNo3.checked;
    const toggleYesSpan3 = toggleLabelYes3.querySelector('.toggle_yes');
    const toggleNoSpan3 = toggleLabelNo3.querySelector('.toggle_no');

    if (isYesChecked || isNoChecked) {
      toggleContainer3.style.setProperty('--divider-opacity', '1');
    } else {
      toggleContainer3.style.setProperty('--divider-opacity', '0');
    }

    toggleYesSpan3.classList.remove('is-selected');
    toggleNoSpan3.classList.remove('is-selected');
    hideAllThirdQuestions();
    hideAllResults();

    // 矢印の表示/非表示と色の変更
    if (isYesChecked) {
      toggleYesSpan3.style.backgroundColor = '#00FFE0';
      toggleNoSpan3.style.backgroundColor = '#808080';
      toggleYesSpan3.classList.add('is-selected');
      if (arrowYes3) {
        arrowYes3.style.display = 'block';
        arrowYes3.style.backgroundColor = '#00FFE0';
      }
      if (arrowNo3) {
        arrowNo3.style.display = 'none';
      }
      // 3問目を表示（精神的に疲れてる？）
      if (thirdQuestionNoYes) {
        thirdQuestionNoYes.style.display = 'block';
      }
    } else if (isNoChecked) {
      toggleYesSpan3.style.backgroundColor = '#A0A0A0';
      toggleNoSpan3.style.backgroundColor = '#AD00FF';
      toggleNoSpan3.classList.add('is-selected');
      if (arrowYes3) {
        arrowYes3.style.display = 'none';
      }
      if (arrowNo3) {
        arrowNo3.style.display = 'block';
        arrowNo3.style.backgroundColor = '#AD00FF';
      }
      // 3問目を表示（休みは取れてる？）
      if (thirdQuestionNoNo) {
        thirdQuestionNoNo.style.display = 'block';
      }
    } else {
      toggleYesSpan3.style.backgroundColor = '#A0A0A0';
      toggleNoSpan3.style.backgroundColor = '#808080';
      if (arrowYes3) {
        arrowYes3.style.display = 'none';
      }
      if (arrowNo3) {
        arrowNo3.style.display = 'none';
      }
    }
  }

  // 3問目のトグルスイッチの状態を更新する関数
  function updateThirdQuestionState(toggleYesEl, toggleNoEl, pathPrefix, toggleContainerEl, toggleLabelYesEl, toggleLabelNoEl, arrowsContainerEl) {
    const isYesChecked = toggleYesEl.checked;
    const isNoChecked = toggleNoEl.checked;
    const toggleYesSpan = toggleLabelYesEl.querySelector('.toggle_yes');
    const toggleNoSpan = toggleLabelNoEl.querySelector('.toggle_no');
    const arrowYes = arrowsContainerEl ? arrowsContainerEl.querySelector('.flavor_flowchart_mobile_third_question_yes_arrow') : null;
    const arrowNo = arrowsContainerEl ? arrowsContainerEl.querySelector('.flavor_flowchart_mobile_third_question_no_arrow') : null;
    
    if (isYesChecked || isNoChecked) {
      if (toggleContainerEl) {
        toggleContainerEl.style.setProperty('--divider-opacity', '1');
      }
    } else {
      if (toggleContainerEl) {
        toggleContainerEl.style.setProperty('--divider-opacity', '0');
      }
    }

    toggleYesSpan.classList.remove('is-selected');
    toggleNoSpan.classList.remove('is-selected');
    hideAllResults();
    
    if (isYesChecked) {
      toggleYesSpan.style.backgroundColor = '#00FFE0';
      toggleNoSpan.style.backgroundColor = '#808080';
      toggleYesSpan.classList.add('is-selected');
      if (arrowYes) {
        arrowYes.style.display = 'block';
        arrowYes.style.backgroundColor = '#00FFE0';
      }
      if (arrowNo) {
        arrowNo.style.display = 'none';
      }
      const resultPath = pathPrefix + '-yes';
      if (resultElements[resultPath]) {
        resultElements[resultPath].style.display = 'block';
      }
    } else if (isNoChecked) {
      toggleYesSpan.style.backgroundColor = '#A0A0A0';
      toggleNoSpan.style.backgroundColor = '#AD00FF';
      toggleNoSpan.classList.add('is-selected');
      if (arrowYes) {
        arrowYes.style.display = 'none';
      }
      if (arrowNo) {
        arrowNo.style.display = 'block';
        arrowNo.style.backgroundColor = '#AD00FF';
      }
      const resultPath = pathPrefix + '-no';
      if (resultElements[resultPath]) {
        resultElements[resultPath].style.display = 'block';
      }
    } else {
      toggleYesSpan.style.backgroundColor = '#A0A0A0';
      toggleNoSpan.style.backgroundColor = '#808080';
      if (arrowYes) {
        arrowYes.style.display = 'none';
      }
      if (arrowNo) {
        arrowNo.style.display = 'none';
      }
    }
  }

  // イベントリスナーを追加
  toggleYes.addEventListener('change', updateToggleState);
  toggleNo.addEventListener('change', updateToggleState);
  
  if (toggleYes2 && toggleNo2) {
    toggleYes2.addEventListener('change', updateToggleState2);
    toggleNo2.addEventListener('change', updateToggleState2);
  }
  
  if (toggleYes3 && toggleNo3) {
    toggleYes3.addEventListener('change', updateToggleState3);
    toggleNo3.addEventListener('change', updateToggleState3);
  }

  // 3問目のイベントリスナー
  if (toggleYes4 && toggleNo4 && toggleLabelYes4 && toggleLabelNo4) {
    toggleYes4.addEventListener('change', () => updateThirdQuestionState(toggleYes4, toggleNo4, 'yes-yes', toggleContainer4, toggleLabelYes4, toggleLabelNo4, arrowsContainer4));
    toggleNo4.addEventListener('change', () => updateThirdQuestionState(toggleYes4, toggleNo4, 'yes-yes', toggleContainer4, toggleLabelYes4, toggleLabelNo4, arrowsContainer4));
  }
  
  if (toggleYes5 && toggleNo5 && toggleLabelYes5 && toggleLabelNo5) {
    toggleYes5.addEventListener('change', () => updateThirdQuestionState(toggleYes5, toggleNo5, 'yes-no', toggleContainer5, toggleLabelYes5, toggleLabelNo5, arrowsContainer5));
    toggleNo5.addEventListener('change', () => updateThirdQuestionState(toggleYes5, toggleNo5, 'yes-no', toggleContainer5, toggleLabelYes5, toggleLabelNo5, arrowsContainer5));
  }
  
  if (toggleYes6 && toggleNo6 && toggleLabelYes6 && toggleLabelNo6) {
    toggleYes6.addEventListener('change', () => updateThirdQuestionState(toggleYes6, toggleNo6, 'no-yes', toggleContainer6, toggleLabelYes6, toggleLabelNo6, arrowsContainer6));
    toggleNo6.addEventListener('change', () => updateThirdQuestionState(toggleYes6, toggleNo6, 'no-yes', toggleContainer6, toggleLabelYes6, toggleLabelNo6, arrowsContainer6));
  }
  
  if (toggleYes7 && toggleNo7 && toggleLabelYes7 && toggleLabelNo7) {
    toggleYes7.addEventListener('change', () => updateThirdQuestionState(toggleYes7, toggleNo7, 'no-no', toggleContainer7, toggleLabelYes7, toggleLabelNo7, arrowsContainer7));
    toggleNo7.addEventListener('change', () => updateThirdQuestionState(toggleYes7, toggleNo7, 'no-no', toggleContainer7, toggleLabelYes7, toggleLabelNo7, arrowsContainer7));
  }

  // 初期状態を設定
  updateToggleState();
});

// フレーバーフローチャートのトグルスイッチ制御（flavor_flowchart_mobile_sample用）
document.addEventListener('DOMContentLoaded', function() {
  const sampleContainer = document.querySelector('.flavor_flowchart_mobile_sample');
  if (!sampleContainer) return;

  // 1問目の要素
  const toggleYesSample = sampleContainer.querySelector('#toggle_yes_sample');
  const toggleNoSample = sampleContainer.querySelector('#toggle_no_sample');
  const toggleLabelYesSample = sampleContainer.querySelector('.toggle_label_yes');
  const toggleLabelNoSample = sampleContainer.querySelector('.toggle_label_no');
  const toggleContainerSample = sampleContainer.querySelector('.flavor_flowchart_mobile_first_question_toggle');
  const arrowElementSample = sampleContainer.querySelector('.flavor_flowchart_mobile_first_question_yes_arrow');
  
  // 2問目の要素
  const secondQuestionSample = sampleContainer.querySelector('.flavor_flowchart_mobile_second_question');
  const secondQuestionTextSample = secondQuestionSample ? secondQuestionSample.querySelector('.flavor_flowchart_mobile_second_question_text') : null;
  const toggleYes2Sample = sampleContainer.querySelector('#toggle_yes_2_sample');
  const toggleNo2Sample = sampleContainer.querySelector('#toggle_no_2_sample');
  const toggleLabelYes2Sample = sampleContainer.querySelector('.toggle_label_yes_2');
  const toggleLabelNo2Sample = sampleContainer.querySelector('.toggle_label_no_2');
  const toggleContainer2Sample = secondQuestionSample ? secondQuestionSample.querySelector('.flavor_flowchart_mobile_second_question_toggle') : null;
  const arrowsContainer2Sample = secondQuestionSample ? secondQuestionSample.querySelector('.flavor_flowchart_mobile_second_question_arrows') : null;
  const arrowYes2Sample = arrowsContainer2Sample ? arrowsContainer2Sample.querySelector('.flavor_flowchart_mobile_second_question_yes_arrow') : null;
  
  // 3問目の要素
  const thirdQuestionSample = sampleContainer.querySelector('.flavor_flowchart_mobile_third_question');
  const thirdQuestionTextSample = thirdQuestionSample ? thirdQuestionSample.querySelector('.flavor_flowchart_mobile_third_question_text') : null;
  const toggleYes3Sample = sampleContainer.querySelector('#toggle_yes_3_sample');
  const toggleNo3Sample = sampleContainer.querySelector('#toggle_no_3_sample');
  const toggleLabelYes3Sample = sampleContainer.querySelector('.toggle_label_yes_3');
  const toggleLabelNo3Sample = sampleContainer.querySelector('.toggle_label_no_3');
  const toggleContainer3Sample = thirdQuestionSample ? thirdQuestionSample.querySelector('.flavor_flowchart_mobile_third_question_toggle') : null;
  const arrowsContainer3Sample = thirdQuestionSample ? thirdQuestionSample.querySelector('.flavor_flowchart_mobile_third_question_arrows') : null;
  const arrowYes3Sample = arrowsContainer3Sample ? arrowsContainer3Sample.querySelector('.flavor_flowchart_mobile_third_question_yes_arrow') : null;

  // 結果表示要素
  const resultCan1 = sampleContainer.querySelector('#result_can1');
  const resultCan2 = sampleContainer.querySelector('#result_can2');
  const resultCan3 = sampleContainer.querySelector('#result_can3');
  
  // 2問目の質問テキストを更新する関数
  function updateSecondQuestionText() {
    if (!secondQuestionTextSample) return;
    
    const q1 = toggleYesSample && toggleYesSample.checked ? 'yes' : (toggleNoSample && toggleNoSample.checked ? 'no' : null);
    
    if (q1 === 'yes') {
      secondQuestionTextSample.textContent = '何かのイベントに参加予定';
    } else if (q1 === 'no') {
      secondQuestionTextSample.textContent = '十分な睡眠は取れてる？';
    } else {
      // 初期状態ではデフォルトのテキストを設定
      secondQuestionTextSample.textContent = '何かのイベントに参加予定';
    }
  }
  
  // 3問目の質問テキストを更新する関数
  function updateThirdQuestionText() {
    if (!thirdQuestionTextSample) return;
    
    const q1 = toggleYesSample && toggleYesSample.checked ? 'yes' : (toggleNoSample && toggleNoSample.checked ? 'no' : null);
    const q2 = toggleYes2Sample && toggleYes2Sample.checked ? 'yes' : (toggleNo2Sample && toggleNo2Sample.checked ? 'no' : null);
    
    if (q1 === 'yes' && q2 === 'yes') {
      thirdQuestionTextSample.textContent = '彼女と一緒？';
    } else if (q1 === 'yes' && q2 === 'no') {
      thirdQuestionTextSample.textContent = '特に予定はない？';
    } else if (q1 === 'no' && q2 === 'yes') {
      thirdQuestionTextSample.textContent = '精神的に疲れてる？';
    } else if (q1 === 'no' && q2 === 'no') {
      thirdQuestionTextSample.textContent = '休みは取れてる？';
    } else {
      // 初期状態ではデフォルトのテキストを設定
      thirdQuestionTextSample.textContent = '特に予定はない？';
    }
  }

  if (!toggleYesSample || !toggleNoSample || !toggleLabelYesSample || !toggleLabelNoSample || !toggleContainerSample || !arrowElementSample) {
    return;
  }

  // 選択に応じて結果の缶を更新する関数
  function updateResultCan() {
    const q1 = toggleYesSample && toggleYesSample.checked ? 'yes' : (toggleNoSample && toggleNoSample.checked ? 'no' : null);
    const q2 = toggleYes2Sample && toggleYes2Sample.checked ? 'yes' : (toggleNo2Sample && toggleNo2Sample.checked ? 'no' : null);
    const q3 = toggleYes3Sample && toggleYes3Sample.checked ? 'yes' : (toggleNo3Sample && toggleNo3Sample.checked ? 'no' : null);

    // 全ての結果を非表示にする
    if (resultCan1) resultCan1.style.display = 'none';
    if (resultCan2) resultCan2.style.display = 'none';
    if (resultCan3) resultCan3.style.display = 'none';

    // 全ての選択が完了している場合のみ結果を変更
    if (q1 && q2 && q3) {
      // 選択の組み合わせに応じて缶を決定
      let canType = 'can1'; // デフォルト
      
      if (q1 === 'yes' && q2 === 'yes' && q3 === 'yes') {
        canType = 'can3';
      } else if (q1 === 'yes' && q2 === 'yes' && q3 === 'no') {
        canType = 'can1';
      } else if (q1 === 'yes' && q2 === 'no' && q3 === 'yes') {
        canType = 'can1';
      } else if (q1 === 'yes' && q2 === 'no' && q3 === 'no') {
        canType = 'can3';
      } else if (q1 === 'no' && q2 === 'yes' && q3 === 'yes') {
        canType = 'can2';
      } else if (q1 === 'no' && q2 === 'yes' && q3 === 'no') {
        canType = 'can1';
      } else if (q1 === 'no' && q2 === 'no' && q3 === 'yes') {
        canType = 'can3';
      } else if (q1 === 'no' && q2 === 'no' && q3 === 'no') {
        canType = 'can2';
      }
      
      // 選択された缶を表示
      if (canType === 'can1' && resultCan1) {
        resultCan1.style.display = 'block';
      } else if (canType === 'can2' && resultCan2) {
        resultCan2.style.display = 'block';
      } else if (canType === 'can3' && resultCan3) {
        resultCan3.style.display = 'block';
      }
    } else {
      // 選択が完了していない場合は初期値（can1）を表示
      if (resultCan1) resultCan1.style.display = 'block';
    }
  }

  // 1問目のトグルスイッチの状態を更新する関数
  function updateToggleStateSample() {
    const isYesChecked = toggleYesSample.checked;
    const isNoChecked = toggleNoSample.checked;
    const toggleYesSpan = toggleLabelYesSample.querySelector('.toggle_yes');
    const toggleNoSpan = toggleLabelNoSample.querySelector('.toggle_no');

    if (isYesChecked || isNoChecked) {
      toggleContainerSample.style.setProperty('--divider-opacity', '1');
    } else {
      toggleContainerSample.style.setProperty('--divider-opacity', '0');
    }

    toggleYesSpan.classList.remove('is-selected');
    toggleNoSpan.classList.remove('is-selected');
    toggleContainerSample.classList.remove('yes-selected', 'no-selected');

    if (isYesChecked) {
      toggleYesSpan.style.backgroundColor = '#00FFE0';
      toggleNoSpan.style.backgroundColor = '#808080';
      toggleYesSpan.classList.add('is-selected');
      toggleContainerSample.classList.add('yes-selected');
      if (arrowElementSample) {
        arrowElementSample.style.backgroundColor = '#00FFE0';
      }
      // NOテキストを非表示
      if (toggleNoSpan) {
        toggleNoSpan.style.display = 'none';
      }
      // YESテキストを表示
      if (toggleYesSpan) {
        toggleYesSpan.style.display = 'flex';
      }
    } else if (isNoChecked) {
      toggleYesSpan.style.backgroundColor = '#A0A0A0';
      toggleNoSpan.style.backgroundColor = '#AD00FF';
      toggleNoSpan.classList.add('is-selected');
      toggleContainerSample.classList.add('no-selected');
      if (arrowElementSample) {
        arrowElementSample.style.backgroundColor = '#AD00FF';
      }
      // YESテキストを非表示
      if (toggleYesSpan) {
        toggleYesSpan.style.display = 'none';
      }
      // NOテキストを表示
      if (toggleNoSpan) {
        toggleNoSpan.style.display = 'flex';
      }
    } else {
      toggleYesSpan.style.backgroundColor = '#A0A0A0';
      toggleNoSpan.style.backgroundColor = '#808080';
      if (arrowElementSample) {
        arrowElementSample.style.backgroundColor = '#9C9C9C';
      }
      // 両方のテキストを表示
      if (toggleYesSpan) {
        toggleYesSpan.style.display = 'flex';
      }
      if (toggleNoSpan) {
        toggleNoSpan.style.display = 'flex';
      }
    }
    
    // 2問目の質問テキストを更新
    updateSecondQuestionText();
    // 3問目の質問テキストを更新
    updateThirdQuestionText();
    // 結果を更新
    updateResultCan();
  }

  // 2問目のトグルスイッチの状態を更新する関数
  function updateToggleState2Sample() {
    if (!toggleContainer2Sample) return;
    
    const isYesChecked = toggleYes2Sample.checked;
    const isNoChecked = toggleNo2Sample.checked;
    const toggleYesSpan2 = toggleLabelYes2Sample.querySelector('.toggle_yes');
    const toggleNoSpan2 = toggleLabelNo2Sample.querySelector('.toggle_no');

    if (isYesChecked || isNoChecked) {
      toggleContainer2Sample.style.setProperty('--divider-opacity', '1');
    } else {
      toggleContainer2Sample.style.setProperty('--divider-opacity', '0');
    }

    toggleYesSpan2.classList.remove('is-selected');
    toggleNoSpan2.classList.remove('is-selected');

    if (isYesChecked) {
      toggleYesSpan2.style.backgroundColor = '#00FFE0';
      toggleNoSpan2.style.backgroundColor = '#808080';
      toggleYesSpan2.classList.add('is-selected');
      if (arrowYes2Sample) {
        arrowYes2Sample.style.backgroundColor = '#00FFE0';
      }
      // NOテキストを非表示
      if (toggleNoSpan2) {
        toggleNoSpan2.style.display = 'none';
      }
      // YESテキストを表示
      if (toggleYesSpan2) {
        toggleYesSpan2.style.display = 'flex';
      }
    } else if (isNoChecked) {
      toggleYesSpan2.style.backgroundColor = '#A0A0A0';
      toggleNoSpan2.style.backgroundColor = '#AD00FF';
      toggleNoSpan2.classList.add('is-selected');
      if (arrowYes2Sample) {
        arrowYes2Sample.style.backgroundColor = '#AD00FF';
      }
      // YESテキストを非表示
      if (toggleYesSpan2) {
        toggleYesSpan2.style.display = 'none';
      }
      // NOテキストを表示
      if (toggleNoSpan2) {
        toggleNoSpan2.style.display = 'flex';
      }
    } else {
      toggleYesSpan2.style.backgroundColor = '#A0A0A0';
      toggleNoSpan2.style.backgroundColor = '#808080';
      if (arrowYes2Sample) {
        arrowYes2Sample.style.backgroundColor = '#9C9C9C';
      }
      // 両方のテキストを表示
      if (toggleYesSpan2) {
        toggleYesSpan2.style.display = 'flex';
      }
      if (toggleNoSpan2) {
        toggleNoSpan2.style.display = 'flex';
      }
    }
    
    // 3問目の質問テキストを更新
    updateThirdQuestionText();
    // 結果を更新
    updateResultCan();
  }

  // 3問目のトグルスイッチの状態を更新する関数
  function updateToggleState3Sample() {
    if (!toggleContainer3Sample) return;
    
    const isYesChecked = toggleYes3Sample.checked;
    const isNoChecked = toggleNo3Sample.checked;
    const toggleYesSpan3 = toggleLabelYes3Sample.querySelector('.toggle_yes');
    const toggleNoSpan3 = toggleLabelNo3Sample.querySelector('.toggle_no');

    if (isYesChecked || isNoChecked) {
      toggleContainer3Sample.style.setProperty('--divider-opacity', '1');
    } else {
      toggleContainer3Sample.style.setProperty('--divider-opacity', '0');
    }

    toggleYesSpan3.classList.remove('is-selected');
    toggleNoSpan3.classList.remove('is-selected');

    if (isYesChecked) {
      toggleYesSpan3.style.backgroundColor = '#00FFE0';
      toggleNoSpan3.style.backgroundColor = '#808080';
      toggleYesSpan3.classList.add('is-selected');
      if (arrowYes3Sample) {
        arrowYes3Sample.style.backgroundColor = '#00FFE0';
      }
      // NOテキストを非表示
      if (toggleNoSpan3) {
        toggleNoSpan3.style.display = 'none';
      }
      // YESテキストを表示
      if (toggleYesSpan3) {
        toggleYesSpan3.style.display = 'flex';
      }
    } else if (isNoChecked) {
      toggleYesSpan3.style.backgroundColor = '#A0A0A0';
      toggleNoSpan3.style.backgroundColor = '#AD00FF';
      toggleNoSpan3.classList.add('is-selected');
      if (arrowYes3Sample) {
        arrowYes3Sample.style.backgroundColor = '#AD00FF';
      }
      // YESテキストを非表示
      if (toggleYesSpan3) {
        toggleYesSpan3.style.display = 'none';
      }
      // NOテキストを表示
      if (toggleNoSpan3) {
        toggleNoSpan3.style.display = 'flex';
      }
    } else {
      toggleYesSpan3.style.backgroundColor = '#A0A0A0';
      toggleNoSpan3.style.backgroundColor = '#808080';
      if (arrowYes3Sample) {
        arrowYes3Sample.style.backgroundColor = '#9C9C9C';
      }
      // 両方のテキストを表示
      if (toggleYesSpan3) {
        toggleYesSpan3.style.display = 'flex';
      }
      if (toggleNoSpan3) {
        toggleNoSpan3.style.display = 'flex';
      }
    }
    
    // 結果を更新
    updateResultCan();
  }

  // イベントリスナーを追加
  toggleYesSample.addEventListener('change', updateToggleStateSample);
  toggleNoSample.addEventListener('change', updateToggleStateSample);
  
  if (toggleYes2Sample && toggleNo2Sample) {
    toggleYes2Sample.addEventListener('change', updateToggleState2Sample);
    toggleNo2Sample.addEventListener('change', updateToggleState2Sample);
  }
  
  if (toggleYes3Sample && toggleNo3Sample) {
    toggleYes3Sample.addEventListener('change', updateToggleState3Sample);
    toggleNo3Sample.addEventListener('change', updateToggleState3Sample);
  }

  // 初期状態を設定
  updateToggleStateSample();
  
  // 初期状態で結果を表示（can1）
  if (resultCan1) {
    resultCan1.style.display = 'block';
  }
  if (resultCan2) {
    resultCan2.style.display = 'none';
  }
  if (resultCan3) {
    resultCan3.style.display = 'none';
  }
  
  // 初期状態で質問テキストを設定（デフォルトは1問目がYESの場合）
  if (secondQuestionTextSample) {
    secondQuestionTextSample.textContent = '何かのイベントに参加予定';
  }
  if (thirdQuestionTextSample) {
    thirdQuestionTextSample.textContent = '特に予定はない？';
  }
  
  // 初期状態で1問目の矢印を灰色に設定
  if (arrowElementSample) {
    arrowElementSample.style.backgroundColor = '#9C9C9C';
  }
  
  // 初期状態で2問目と3問目の矢印を灰色に設定
  if (arrowYes2Sample) {
    arrowYes2Sample.style.backgroundColor = '#9C9C9C';
  }
  if (arrowYes3Sample) {
    arrowYes3Sample.style.backgroundColor = '#9C9C9C';
  }
  
  // 初期状態で2問目と3問目のトグル状態を設定
  if (toggleYes2Sample && toggleNo2Sample) {
    updateToggleState2Sample();
  }
  if (toggleYes3Sample && toggleNo3Sample) {
    updateToggleState3Sample();
  }
});

// モーダル表示処理
document.addEventListener('DOMContentLoaded', function() {
  const viewAllButton = document.querySelector('.report_container_button_more');
  const reportModal = document.querySelector('.report_modal');
  const reportModalHeader = document.querySelector('.report_modal_header');
  const reportModalHeaderTitle = document.querySelector('.report_modal_header_title');
  const reportModalHeaderTitlePicture = reportModalHeaderTitle ? reportModalHeaderTitle.querySelector('picture') : null;

  if (!viewAllButton || !reportModal) {
    return;
  }

  // モーダルを表示する関数
  function openModal() {
    reportModal.style.display = 'block';
    document.body.style.overflow = 'hidden'; // 背景のスクロールを無効化
  }

  // モーダルを閉じる関数
  function closeModal() {
    reportModal.style.display = 'none';
    document.body.style.overflow = ''; // 背景のスクロールを有効化
  }

  // VIEW ALLボタンをクリックしたときにモーダルを表示
  viewAllButton.addEventListener('click', function(e) {
    e.preventDefault();
    openModal();
  });

  // モーダルヘッダータイトルのpicture要素をクリックしたときにモーダルを閉じる
  if (reportModalHeaderTitlePicture) {
    reportModalHeaderTitlePicture.addEventListener('click', function() {
      closeModal();
    });
  }

  // ESCキーでモーダルを閉じる
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && reportModal.style.display === 'block') {
      closeModal();
    }
  });
});

// フレーバーフローチャートとフレーバー詳細のフェードイン処理
document.addEventListener('DOMContentLoaded', function() {
  const fadeInElements = document.querySelectorAll('.flavor-fade-in');
  
  if (fadeInElements.length === 0) {
    return;
  }
  
  const observerOptions = {
    root: null,
    rootMargin: '100px 0px 0px 0px', // 100px上から表示されたら発火
    threshold: 0
  };
  
  const observerCallback = (entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
      } else {
        entry.target.classList.remove('is-visible');
      }
    });
  };
  
  const observer = new IntersectionObserver(observerCallback, observerOptions);
  
  fadeInElements.forEach(element => {
    observer.observe(element);
  });
});

// 離脱防止モーダル（ブラウザバック時）
document.addEventListener('DOMContentLoaded', function() {
  const popupSection = document.querySelector('.popup');
  const popupOverlay = document.querySelector('.popup_overlay');
  const popupModalStep1 = document.querySelector('.popup_modal_step1');
  const popupModalStep2 = document.querySelector('.popup_modal_step2');
  const closeBtn = document.querySelectorAll('.close-btn');
  const popupNextPageButtonNext = document.querySelector('.popup_next_page_button_next');
  const popupNextPageButtonClose = document.querySelector('.popup_next_page_button_close');
  
  if (!popupSection || !popupOverlay || !popupModalStep1) {
    return;
  }

  // 初期状態でモーダルを非表示
  popupSection.style.display = 'none';
  popupOverlay.style.display = 'block';
  popupModalStep1.style.display = 'none';
  if (popupModalStep2) {
    popupModalStep2.style.display = 'none';
  }

  let isModalShown = false;
  let currentStep = 1;

  // モーダルを表示する関数（step1）
  function showModal() {
    if (!isModalShown) {
      popupSection.style.display = 'block';
      popupOverlay.style.display = 'block';
      popupModalStep1.style.display = 'block';
      if (popupModalStep2) {
        popupModalStep2.style.display = 'none';
      }
      document.body.style.overflow = 'hidden';
      isModalShown = true;
      currentStep = 1;
    }
  }

  // モーダルを閉じる関数
  function closeModal() {
    popupSection.style.display = 'none';
    popupOverlay.style.display = 'block';
    popupModalStep1.style.display = 'none';
    if (popupModalStep2) {
      popupModalStep2.style.display = 'none';
    }
    document.body.style.overflow = '';
    isModalShown = false;
    currentStep = 1;
  }

  // step1からstep2に進む関数
  function goToStep2() {
    if (popupModalStep2) {
      popupModalStep1.style.display = 'none';
      popupModalStep2.style.display = 'block';
      currentStep = 2;
    }
  }

  // step2からstep1に戻る関数
  function goToStep1() {
    popupModalStep1.style.display = 'block';
    if (popupModalStep2) {
      popupModalStep2.style.display = 'none';
    }
    currentStep = 1;
  }

  // jQueryのbeforeunloadイベントでモーダルを表示
  if (typeof jQuery !== 'undefined') {
    // ページ遷移を検出するためにhistory.pushStateを使用
    jQuery(window).on('beforeunload', function(e) {
      if (!isModalShown) {
        // モーダルを表示
        showModal();
        
        // ページ遷移を防ぐためにブラウザのデフォルト動作をキャンセル
        e.preventDefault();
        e.returnValue = '';
        
        // ブラウザのデフォルト確認ダイアログを表示
        return '';
      }
    });
    
    // ページ遷移を検出するためにhistory.pushStateを使用
    history.pushState(null, null, location.href);
    
    // popstateイベントでブラウザバックを検出
    jQuery(window).on('popstate', function(e) {
      if (!isModalShown) {
        // ブラウザバックを防ぐために再度pushState
        history.pushState(null, null, location.href);
        
        // モーダルを表示
        showModal();
      }
    });
  }

  // 閉じるボタンのイベントリスナー
  closeBtn.forEach(btn => {
    btn.addEventListener('click', function() {
      closeModal();
    });
  });

  // 「続ける」ボタンのイベントリスナー
  if (popupNextPageButtonNext) {
    popupNextPageButtonNext.addEventListener('click', function() {
      if (currentStep === 1) {
        goToStep2();
      }
      // step2の場合はフォーム送信などの処理を追加可能
    });
  }

  // 「後で」ボタンのイベントリスナー
  if (popupNextPageButtonClose) {
    popupNextPageButtonClose.addEventListener('click', function() {
      closeModal();
    });
  }

  // ESCキーでモーダルを閉じる
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && isModalShown) {
      closeModal();
    }
  });
});

// フォームバリデーション
document.addEventListener('DOMContentLoaded', function() {
  const form = document.querySelector('.form_contact_form');
  if (!form) return;

  const nameInput = document.getElementById('name');
  const kanaInput = document.getElementById('kana');
  const emailInput = document.getElementById('email');
  const telInput = document.getElementById('tel');
  const zipcodeInput = document.getElementById('zipcode');
  const addressInput = document.getElementById('address');
  const privacyCheckbox = document.querySelector('.form_checkbox_input');

  const nameError = document.getElementById('name_error');
  const kanaError = document.getElementById('kana_error');
  const emailError = document.getElementById('email_error');
  const telError = document.getElementById('tel_error');
  const zipcodeError = document.getElementById('zipcode_error');
  const addressError = document.getElementById('address_error');

  // エラーメッセージを表示する関数
  function showError(errorElement, message) {
    if (errorElement) {
      errorElement.textContent = message;
      errorElement.classList.add('show');
    }
  }

  // エラーメッセージを非表示にする関数
  function hideError(errorElement) {
    if (errorElement) {
      errorElement.textContent = '';
      errorElement.classList.remove('show');
    }
  }

  // 入力フィールドにエラークラスを追加/削除する関数
  function setInputError(input, hasError) {
    if (input) {
      if (hasError) {
        input.classList.add('error');
      } else {
        input.classList.remove('error');
      }
    }
  }

  // バリデーション関数
  function validateName() {
    const value = nameInput.value.trim();
    if (!value) {
      showError(nameError, '※※※※※※※※※※※※※※※※※※※※※');
      setInputError(nameInput, true);
      return false;
    }
    hideError(nameError);
    setInputError(nameInput, false);
    return true;
  }

  function validateKana() {
    const value = kanaInput.value.trim();
    if (!value) {
      showError(kanaError, '※※※※※※※※※※※※※※※※※※※※※');
      setInputError(kanaInput, true);
      return false;
    }
    // ひらがなまたはカタカナのチェック
    const kanaPattern = /^[ぁ-んァ-ヶー]+$/;
    if (!kanaPattern.test(value)) {
      showError(kanaError, '※※※※※※※※※※※※※※※※※※※※※');
      setInputError(kanaInput, true);
      return false;
    }
    hideError(kanaError);
    setInputError(kanaInput, false);
    return true;
  }

  function validateEmail() {
    const value = emailInput.value.trim();
    if (!value) {
      showError(emailError, '※※※※※※※※※※※※※※※※※※※※※');
      setInputError(emailInput, true);
      return false;
    }
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(value)) {
      showError(emailError, '※※※※※※※※※※※※※※※※※※※※※');
      setInputError(emailInput, true);
      return false;
    }
    hideError(emailError);
    setInputError(emailInput, false);
    return true;
  }

  function validateTel() {
    const value = telInput.value.trim();
    if (!value) {
      showError(telError, '※※※※※※※※※※※※※※※※※※※※※');
      setInputError(telInput, true);
      return false;
    }
    // 電話番号の形式チェック（ハイフンあり/なし、10桁または11桁）
    const telPattern = /^[0-9-]{10,14}$/;
    if (!telPattern.test(value)) {
      showError(telError, '※※※※※※※※※※※※※※※※※※※※※');
      setInputError(telInput, true);
      return false;
    }
    hideError(telError);
    setInputError(telInput, false);
    return true;
  }

  function validateZipcode() {
    const value = zipcodeInput.value.trim();
    if (!value) {
      showError(zipcodeError, '※※※※※※※※※※※※※※※※※※※※※');
      setInputError(zipcodeInput, true);
      return false;
    }
    // 郵便番号の形式チェック（7桁の数字、ハイフンあり/なし）
    const zipcodePattern = /^[0-9]{7}$|^[0-9]{3}-[0-9]{4}$/;
    if (!zipcodePattern.test(value)) {
      showError(zipcodeError, '※※※※※※※※※※※※※※※※※※※※※');
      setInputError(zipcodeInput, true);
      return false;
    }
    hideError(zipcodeError);
    setInputError(zipcodeInput, false);
    return true;
  }

  function validateAddress() {
    const value = addressInput.value.trim();
    if (!value) {
      showError(addressError, '※※※※※※※※※※※※※※※※※※※※※');
      setInputError(addressInput, true);
      return false;
    }
    hideError(addressError);
    setInputError(addressInput, false);
    return true;
  }

  // リアルタイムバリデーション
  nameInput.addEventListener('blur', validateName);
  nameInput.addEventListener('input', function() {
    if (nameInput.classList.contains('error')) {
      validateName();
    }
  });

  kanaInput.addEventListener('blur', validateKana);
  kanaInput.addEventListener('input', function() {
    if (kanaInput.classList.contains('error')) {
      validateKana();
    }
  });

  emailInput.addEventListener('blur', validateEmail);
  emailInput.addEventListener('input', function() {
    if (emailInput.classList.contains('error')) {
      validateEmail();
    }
  });

  telInput.addEventListener('blur', validateTel);
  telInput.addEventListener('input', function() {
    if (telInput.classList.contains('error')) {
      validateTel();
    }
  });

  // モバイル用の郵便番号入力・住所検索機能
  const zipcodeInputModal = document.getElementById('zipcode_input_modal');
  const addressSearchModal = document.getElementById('address_search_modal');
  const zipcodeInputField = document.getElementById('zipcode_input_field');
  const zipcodeInputBackBtn = document.getElementById('zipcode_input_back_btn');
  const addressSearchBackBtn = document.getElementById('address_search_back_btn');
  const addressSearchModalCity = document.getElementById('address_search_modal_city');
  const addressSearchModalList = document.getElementById('address_search_modal_list');

  // モバイル表示判定（600px以下）
  function isMobile() {
    return window.innerWidth <= 600;
  }

  // 郵便番号入力モーダルを開く
  function openZipcodeInputModal() {
    if (zipcodeInputModal) {
      zipcodeInputModal.style.display = 'flex';
      zipcodeInputField.value = zipcodeInput.value;
      zipcodeInputField.focus();
    }
  }

  // 郵便番号入力モーダルを閉じる
  function closeZipcodeInputModal() {
    if (zipcodeInputModal) {
      zipcodeInputModal.style.display = 'none';
    }
  }

  // 住所検索結果モーダルを開く
  function openAddressSearchModal(addressData, zipcode) {
    if (addressSearchModal && addressData && addressData.length > 0) {
      const firstAddress = addressData[0];
      // 都道府県 + 市区町村
      const cityName = firstAddress.address1 + firstAddress.address2;
      // 町域（address3）を取得（丁目が含まれている場合は除去）
      let townName = '';
      if (firstAddress.address3) {
        // address3から「○丁目」のパターンを除去
        townName = firstAddress.address3.replace(/\d+丁目/g, '').trim();
      }
      
      // 表示用の市区町村名（町域を含む）
      const displayCityName = cityName + (townName ? townName : '');
      addressSearchModalCity.textContent = displayCityName;

      // リストをクリア
      addressSearchModalList.innerHTML = '';

      // 丁目を1~4と「その他」で選択可能にする
      const chomeOptions = ['1丁目', '2丁目', '3丁目', '4丁目', 'その他'];

          chomeOptions.forEach((chome, index) => {
      // 外側のラッパーを作成
      const itemWrapper = document.createElement('div');
      itemWrapper.className = 'address_search_modal_item_wrapper';
      
      // 数字を抽出（「その他」の場合は表示しない）
      const number = chome.replace('丁目', '');
      
      // HTML構造を作成
      if (chome === 'その他') {
        // 「その他」の場合は数字なし
        itemWrapper.innerHTML = `
          <div class="address_search_modal_item">
            <div class="address_search_modal_item_text">${chome}</div>
          </div>
        `;
      } else {
        // 数字を外側に、テキストをボックス内に配置
        itemWrapper.innerHTML = `
          <div class="address_search_modal_item_number">${number}</div>
          <div class="address_search_modal_item">
            <div class="address_search_modal_item_text">${chome}</div>
          </div>
        `;
      }
      
      // クリックイベントはボックス全体に設定
      const addressItem = itemWrapper.querySelector('.address_search_modal_item');
      if (addressItem) {
        addressItem.addEventListener('click', function() {
          let fullAddress;
          if (chome === 'その他') {
            fullAddress = cityName + (townName ? townName : '');
          } else {
            fullAddress = cityName + (townName ? townName : '') + chome;
          }
          addressInput.value = fullAddress;
          validateAddress();
          closeAddressSearchModal();
          closeZipcodeInputModal();
        });
      }
      
      // ラッパーをリストに追加（重要：addressItemではなくitemWrapperを追加）
      addressSearchModalList.appendChild(itemWrapper);
    });

      addressSearchModal.style.display = 'flex';
    }
  }

  // 住所検索結果モーダルを閉じる
  function closeAddressSearchModal() {
    if (addressSearchModal) {
      addressSearchModal.style.display = 'none';
    }
  }

  // モバイル表示時に郵便番号フィールドをクリック/フォーカスしたらモーダルを開く
  if (zipcodeInput) {
    zipcodeInput.addEventListener('focus', function(e) {
      if (isMobile()) {
        e.preventDefault();
        zipcodeInput.blur(); // フォーカスを外す
        openZipcodeInputModal();
      }
    });
    
    zipcodeInput.addEventListener('click', function(e) {
      if (isMobile()) {
        e.preventDefault();
        openZipcodeInputModal();
      }
    });
  }

  // ウィンドウリサイズ時にモーダルを閉じる（PC表示に切り替わった場合）
  window.addEventListener('resize', function() {
    if (!isMobile()) {
      closeZipcodeInputModal();
      closeAddressSearchModal();
    }
  });

  // モーダルの背景をクリックしたら閉じる
  if (zipcodeInputModal) {
    zipcodeInputModal.addEventListener('click', function(e) {
      if (e.target === zipcodeInputModal) {
        closeZipcodeInputModal();
      }
    });
  }

  if (addressSearchModal) {
    addressSearchModal.addEventListener('click', function(e) {
      if (e.target === addressSearchModal) {
        closeAddressSearchModal();
      }
    });
  }

  // 郵便番号入力フィールドのイベント
  if (zipcodeInputField) {
    zipcodeInputField.addEventListener('keyup', function() {
      const zipcodeValue = zipcodeInputField.value.replace(/[^0-9]/g, '');
      if (zipcodeValue.length === 7) {
        // zipcloud APIを使用して住所を取得
        fetch(`https://zipcloud.ibsnet.co.jp/api/search?zipcode=${zipcodeValue}`)
          .then(response => response.json())
          .then(data => {
            if (data.status === 200 && data.results && data.results.length > 0) {
              // 郵便番号フィールドに値を設定
              zipcodeInput.value = zipcodeInputField.value;
              validateZipcode();
              // 住所検索結果モーダルを開く
              openAddressSearchModal(data.results, zipcodeValue);
            } else {
              alert('郵便番号が見つかりませんでした');
            }
          })
          .catch(error => {
            console.error('住所検索エラー:', error);
            alert('住所検索中にエラーが発生しました');
          });
      }
    });
  }

  // 戻るボタンのイベント
  if (zipcodeInputBackBtn) {
    zipcodeInputBackBtn.addEventListener('click', function() {
      closeZipcodeInputModal();
    });
  }

  if (addressSearchBackBtn) {
    addressSearchBackBtn.addEventListener('click', function() {
      closeAddressSearchModal();
      zipcodeInputField.focus();
    });
  }

  // PC表示時は通常の動作（郵便番号入力で自動入力）
  zipcodeInput.addEventListener('blur', validateZipcode);
  if (!isMobile()) {
    zipcodeInput.addEventListener('keyup', function() {
      if (zipcodeInput.classList.contains('error')) {
        validateZipcode();
      }
      // 郵便番号が7桁入力されたら住所を自動入力
      const zipcodeValue = zipcodeInput.value.replace(/[^0-9]/g, ''); // ハイフンを除去
      if (zipcodeValue.length === 7) {
        // zipcloud APIを使用して住所を取得
        fetch(`https://zipcloud.ibsnet.co.jp/api/search?zipcode=${zipcodeValue}`)
          .then(response => response.json())
          .then(data => {
            if (data.status === 200 && data.results && data.results.length > 0) {
              const result = data.results[0];
              // 都道府県 + 市区町村 + 町域を結合して住所フィールドに設定
              const fullAddress = result.address1 + result.address2 + result.address3;
              addressInput.value = fullAddress;
              // バリデーションを実行
              validateAddress();
            } else {
              console.log('郵便番号が見つかりませんでした');
            }
          })
          .catch(error => {
            console.error('住所検索エラー:', error);
          });
      }
    });
  }
  zipcodeInput.addEventListener('input', function() {
    if (zipcodeInput.classList.contains('error')) {
      validateZipcode();
    }
  });

  addressInput.addEventListener('blur', validateAddress);
  addressInput.addEventListener('input', function() {
    if (addressInput.classList.contains('error')) {
      validateAddress();
    }
  });



  // フォーム送信時のバリデーション
  form.addEventListener('submit', function(e) {
    e.preventDefault();

    const isValidName = validateName();
    const isValidKana = validateKana();
    const isValidEmail = validateEmail();
    const isValidTel = validateTel();
    const isValidZipcode = validateZipcode();
    const isValidAddress = validateAddress();
    const isValidPrivacy = privacyCheckbox && privacyCheckbox.checked;

    if (isValidName && isValidKana && isValidEmail && isValidTel && isValidZipcode && isValidAddress && isValidPrivacy) {
      // すべてのバリデーションが通った場合、フォームを送信
      form.submit();
    } else {
      // エラーがある場合、最初のエラーフィールドにフォーカス
      if (!isValidName) {
        nameInput.focus();
      } else if (!isValidKana) {
        kanaInput.focus();
      } else if (!isValidEmail) {
        emailInput.focus();
      } else if (!isValidTel) {
        telInput.focus();
      } else if (!isValidZipcode) {
        zipcodeInput.focus();
      } else if (!isValidAddress) {
        addressInput.focus();
      }
    }
  });
});
