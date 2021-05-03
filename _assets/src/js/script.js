import lozad from 'lozad';
// import Glide from '@glidejs/glide';

const observer = lozad();
observer.observe();

// new Glide('.glide', { autoplay: 2000, dragThreshold: 1 }).mount();

const mySliderObserver = lozad('.glide', {
  load: async (el) => {
    const { default: Glide } = await import('@glidejs/glide');
    new Glide(el, { autoplay: 2000, dragThreshold: 1 }).mount();
  },
});
mySliderObserver.observe();
