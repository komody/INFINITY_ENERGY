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


