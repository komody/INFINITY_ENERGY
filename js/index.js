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
  
  console.log('Found elements:', revealElements.length);
  console.log('Elements:', revealElements);
  
  if (revealElements.length === 0) {
    console.error('No reveal elements found!');
    return;
  }
  
  const observerOptions = {
    root: null,
    rootMargin: '0px',
    threshold: 0.1
  };
  
  const observerCallback = (entries) => {
    console.log('Observer callback triggered:', entries);
    entries.forEach(entry => {
      console.log('Entry:', entry.target, 'isIntersecting:', entry.isIntersecting);
      if (entry.isIntersecting) {
        console.log('Adding active class to:', entry.target);
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
    console.log('Observing element:', element);
    observer.observe(element);
  });
  
  window.addEventListener('scroll', () => {
    console.log('Scroll position:', window.scrollY);
  });
});

// Chart.js アニメーション
document.addEventListener('DOMContentLoaded', function() {
  let genderChart = null;
  let salesChart = null;

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
          const labelRadius = radius * 0.5;
          const x = centerX + Math.cos(angle) * labelRadius;
          const y = centerY + Math.sin(angle) * labelRadius;
          
          // テキストを描画
          ctx.save();
          ctx.fillStyle = '#fff';
          ctx.font = '700 24px Orbitron';
          ctx.textAlign = 'center';
          ctx.textBaseline = 'middle';
          
          // ラベルとパーセンテージを2行で表示（間隔を調整）
          ctx.fillText(label, x, y - 15);
          ctx.fillText(data + '%', x, y + 15);
          
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
            console.log('Animation completed');
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
        aspectRatio: 1.2, // 幅が高さの1.2倍（数値を大きくすると高さが低くなる）
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
              }
            },
            title: {
              display: false
            },
            grid: {
              display: false
            }
          }
        },
        animation: {
          duration: 2000,
          easing: 'easeOutQuart',
          onComplete: function() {
            const chart = this.chart;
            const ctx = chart.ctx;
            ctx.save();
            ctx.font = 'bold 12px Arial';
            ctx.fillStyle = '#666';
            ctx.textAlign = 'center';
            ctx.textBaseline = 'bottom';
            chart.data.datasets.forEach((dataset, i) => {
              chart.getDatasetMeta(i).data.forEach((bar, index) => {
                const value = dataset.data[index];
                ctx.fillText(value, bar.x, bar.y - 5);
              });
            });
            ctx.restore();
          }
        }
      }
    });
  }

  // Intersection Observerでスクロール時にアニメーション開始
  const dataSection = document.querySelector('.data');
  if (dataSection) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        console.log('Intersection Observer triggered:', entry.isIntersecting, entry.intersectionRatio);
        console.log('genderChart:', genderChart);
        console.log('salesChart:', salesChart);
        if (entry.isIntersecting) {
          // 円グラフのデータを更新してアニメーション開始
          if (genderChart) {
            console.log('Updating genderChart data');
            genderChart.data.datasets[0].data = [63.4, 36.6];
            genderChart.update('active');
            console.log('genderChart data after update:', genderChart.data.datasets[0].data);
          } else {
            console.log('genderChart is null');
          }
          // 棒グラフのデータを更新してアニメーション開始
          if (salesChart) {
            console.log('Updating salesChart data');
            salesChart.data.datasets[0].data = [4400, 5600, 6100];
            salesChart.update('active');
            console.log('salesChart data after update:', salesChart.data.datasets[0].data);
          } else {
            console.log('salesChart is null');
          }
          observer.unobserve(entry.target);
        }
      });
    }, {

      rootMargin: '200px',
    });
    
    observer.observe(dataSection);
  }
});
