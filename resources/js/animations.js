var tl = gsap.timeline();
AOS.init();

setTimeout(function() {

  gsap.from(".nav-menus", { duration: 2, opacity: 0, scale: 1.1 });

  gsap.from(".nav-text", { duration: 2, y: -100, opacity: 0 });

  gsap.from(".new-collection", {duration: 2, opacity: 0 , x: -300});
  gsap.from(".shop-button", {duration: 1.5, opacity: 0 });

  gsap.from(".hero-image-1", {duration: 1, opacity: 0 , scale: 1.5});
  gsap.from(".hero-image-2", {duration: 0.8, opacity: 0, scale: 1.1 });

  gsap.from(".title", {duration: 1, opacity: 0, scale: 1.1 });

  gsap.from(".shop-banner", { duration: 1, y: -100, opacity: 0 });
  gsap.from(".shop-products", { duration: 2, opacity: 0 });

  gsap.from(".our-mision", {duration: 1, x: -200 , opacity: 0 });
  gsap.from(".our-mision-image", {duration: 1.5, x: 200 , opacity: 0 });

  gsap.from(".get-in-touch", {duration: 1.5, opacity: 0 });
  gsap.from(".contact-info", {duration: 1, x: -100 , opacity: 0 });
  gsap.from(".contact-social", {duration: 1.5, y: 100 , opacity: 0 });
  gsap.from(".contact-form", {duration: 2 , opacity: 0 });
  gsap.from(".send-message", {duration: 1 , opacity: 0 });

  gsap.from(".faq-questions", {duration: 1 , x: -100 , opacity: 0 });
  
  gsap.from(".wishlist", {duration: 0.8 , x: 100 , opacity: 0 });

  gsap.from(".wishlist-products", {duration: 1.5 , x: 100 , opacity: 0 });

  gsap.from(".cart-items", {duration: 0.8 , x: 100 , opacity: 0 });

  gsap.from(".cart-items-products", {duration: 1.5 , y: 100 , opacity: 0 });

  gsap.from(".order-summary", {duration: 1.5 , scale: 0.9 , opacity: 0 });

  tl.from(".thumbnail", {duration: 1 , y: 100 , opacity: 0 });
  tl.from(".thumbnail-2", {duration: 0.5 , y: 10 , opacity: 0 });
  tl.from(".thumbnail-3", {duration: 0.5 , y: 10 , opacity: 0 });
  tl.from(".thumbnail-4", {duration: 0.5 , y: 10 , opacity: 0 });
  tl.from(".thumbnail-5", {duration: 0.5 , y: 10 , opacity: 0 });

  gsap.from(".product-details", {duration: 1.5 , x: 50 , opacity: 0 });

  gsap.from(".other", {duration: 1.5 , x: -100 , opacity: 0 });

}, 1800);