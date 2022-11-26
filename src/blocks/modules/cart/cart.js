const cartBtn = document.querySelector('.cart__fade'),
      cartClose = document.querySelector('.cart__close'),
      cart = document.querySelector('.cart');

cartBtn.addEventListener('click', () => {
    cart.classList.add('cart_active');
});

cartClose.addEventListener('click', () => {
    cart.classList.remove('cart_active');
});