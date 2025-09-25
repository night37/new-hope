export const smoothScroll = (top: number, duration: number) => {
  setTimeout(() => {
    window.scrollTo({
      top: top,
      behavior: 'smooth'
    });
  }, duration);
};
