//----------MOBILE BURGER MENU----------
const burgerIcon = document.getElementById("burger-menu");
const closeIcon = document.getElementById("close-icon");
const mobileMenus = document.getElementById("mobile-menus");
const buttons = document.getElementById("buttons");

burgerIcon.addEventListener('click', () => {
    mobileMenus.classList.remove('translate-x-full');
    mobileMenus.classList.add('translate-x-0');
    closeIcon.classList.remove('hidden');
});

closeIcon.addEventListener('click', () => {
    mobileMenus.classList.remove('translate-x-0');
    mobileMenus.classList.add('translate-x-full');
    burgerIcon.classList.remove('hidden');
    closeIcon.classList.add('hidden');
});
//-----------------------------------------

//---------------FAQ SECTION---------------
document.querySelectorAll('.question').forEach(function(question) {
  question.addEventListener('click', function() {
      const answer = this.nextElementSibling;

      answer.classList.toggle('hidden');
      
      const icon = this.querySelector('.icon');
      if (icon.textContent === '+') {
          icon.textContent = '−'; 
      } else {
          icon.textContent = '+';
      }
  });
});
//------------------------------------------


//-------------------------SINGLE PRODUCT---------------------------
const thumbnails = document.querySelectorAll('.product-thumbnail');
const fullImage = document.getElementById('full-image');

thumbnails.forEach(thumbnail => {
  thumbnail.addEventListener('click', function() {
      const newSrc = this.src;
      
      fullImage.src = newSrc;
  });
});

//-----------------------------------------------------------------
 

//--------------------------ADD TO CART----------------------------
document.addEventListener('DOMContentLoaded', function() {
  const cartIcon = document.getElementById('add-to-cart-form');

  if(cartIcon){
    document.getElementById('add-to-cart-form').addEventListener('submit', function(event) {
    event.preventDefault();

    const form = event.target;
    const isAuthenticated = form.getAttribute('data-auth') === 'true';
    const modal = document.getElementById('cart-modal-message-container');
    const modalMessage = document.getElementById('cart-modal-message');

    if (!isAuthenticated) {
        modalMessage.textContent = 'Please log in to add items to the cart.';
        modal.className = "fixed text-xs bg-red-600 text-white text-black py-2 px-4 rounded-md mt-3";
        modal.style.display = 'block';
        setTimeout(() => {
            modal.style.display = 'none';
        }, 4000);
        return;
    }

    const formData = new FormData(form);

    fetch(form.action, {
        method: 'POST',
        headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
        },
        body: formData
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not OK');
        }
        return response.json();
    })
    .then(data => {
        if (data.success) {
            modalMessage.textContent = 'Product added to cart successfully!';
            modal.className = "fixed text-xs bg-green-200 text-black py-2 px-4 rounded-md mt-3 z-30";
            updateCartItemCount();
        } else {
            modalMessage.textContent = data.message;
            modal.className = "fixed text-xs bg-orange-100 text-black py-2 px-4 rounded-md mt-3 z-30";
        }

        modal.style.display = 'block';
        setTimeout(() => {
            modal.style.display = 'none';
        }, 4000);
    })
    .catch(error => {
        console.error('Error:', error);
        alert('An error occurred while adding the product to the cart.');
    });
    });
  }
   
});

//-----------------------------------------------------------------

//--------------------------ADD TO CART(FROM WISHLIST)----------------------------
document.addEventListener('DOMContentLoaded', function () {
  const addCartForms = document.querySelectorAll('.add-to-cart-form');

  addCartForms.forEach((form) => {
      form.addEventListener('submit', function (event) {
          event.preventDefault();

          const productId = form.getAttribute('data-product-id');
          const modal = document.querySelector(`.cart-modal-message-container[data-product-id="${productId}"]`);
          const modalMessage = modal.querySelector('.cart-modal-message');

          const formData = new FormData(form);

          fetch(form.action, {
              method: 'POST',
              headers: {
                  'X-Requested-With': 'XMLHttpRequest',
                  'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
              },
              body: formData
          })
              .then(response => response.json())
              .then(data => {
                  if (data.success) {
                      modalMessage.textContent = 'Product added to cart successfully!';
                      modal.classList.remove('hidden');
                      modal.classList.add('bg-green-200', 'text-black');
                      updateCartItemCount();
                  } else {
                      modalMessage.textContent = 'Something went wrong!';
                      modal.classList.remove('hidden');
                      modal.classList.add('bg-red-500', 'text-white');
                  }

                  setTimeout(() => modal.classList.add('hidden'), 4000);
              })
              .catch(error => {
                  console.error('Error:', error);
                  modalMessage.textContent = 'An error occurred while adding the product to the cart.';
                  modal.classList.remove('hidden');
                  modal.classList.add('bg-red-600', 'text-white');
                  setTimeout(() => modal.classList.add('hidden'), 4000);
              });
      });
  });
});
//-----------------------------------------------------------------


//------------------------LOADING ICON-----------------------------
setTimeout(function() {
  const loaderSection = document.getElementById('loader');
  loaderSection.classList.add('hidden'); // Hide the loader section
}, 2000);

//-----------------------------------------------------------------

//--------------------NUMBER OF PROD IN CART-----------------------
function updateCartItemCount() {
  fetch('/get-cart-data')
    .then(response => response.json())
    .then(data => {
      if(data.cartItemCount){
        const cartItemCount = data.cartItemCount;
        document.getElementById('cart-item-count').textContent = cartItemCount;
      }
    })
    .catch(error => {
      console.error('Error fetching cart data:', error);
    });
}
updateCartItemCount();
//-----------------------------------------------------------------


//------------------QUANTITY AND PRICE CONTROL---------------------
  const quantityControls = document.querySelectorAll('.quantity-control');
  const subtotalSpan = document.getElementById('subtotal-amount');

  function calculateSubtotal() {
      let subtotal = 0;
      const producttotal = document.getElementById('product-total');
      if(producttotal){
        document.querySelectorAll('.product-total').forEach(function(totalSpan) {
            const total = parseFloat(totalSpan.textContent.replace('$', '').trim());
            if (!isNaN(total)) {
                subtotal += total;
            }
        });
        subtotalSpan.textContent = `$ ${subtotal.toFixed(2)}`;
      }
  }

  quantityControls.forEach(function(control) {
      const decreaseButton = control.querySelector('.decrease');
      const increaseButton = control.querySelector('.increase');
      const quantitySpan = control.querySelector('.quantity-value');
      const totalPriceSpan = control.closest('.description').querySelector('.product-total');
      const maxQuantity = parseInt(control.getAttribute('data-max-quantity'));
      
      const stockAlertMessage = document.getElementById('stock-alert-message');
      const modal = document.getElementById('stock-alert-modal');
      const closeModalButton = document.getElementById('close-modal');


      const productId = totalPriceSpan.getAttribute('data-product-id');
      const productPrice = parseFloat(totalPriceSpan.getAttribute('data-price'));

      let quantity = parseInt(localStorage.getItem(`quantity-${productId}`)) || 1;
      quantitySpan.textContent = quantity;

      function updateTotalPrice() {
          const totalPrice = (quantity * productPrice).toFixed(2);
          totalPriceSpan.textContent = `$ ${totalPrice}`;
          calculateSubtotal();
          localStorage.setItem(`quantity-${productId}`, quantity);
      }

      decreaseButton.addEventListener('click', function() {
          if (quantity > 1) {
              quantity--;
              quantitySpan.textContent = quantity;
              updateTotalPrice();
          }
      });

      increaseButton.addEventListener('click', function() {
        if(quantity < maxQuantity){
          quantity++;
          quantitySpan.textContent = quantity;
          updateTotalPrice();
        }
        else {
          stockAlertMessage.textContent = `Only ${maxQuantity} units of this product are available in stock.`;
          modal.classList.remove('hidden');
        }
      });

      closeModalButton.addEventListener('click', function() {
        modal.classList.add('hidden');
      });

      updateTotalPrice();
  });
  
  calculateSubtotal();


//-----------------------------------------------------------------



//--------------------------SCROLL TO TOP--------------------------
window.onscroll = function () {
  var goUpButton = document.getElementById("GoUpModal");
  if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000) {
      goUpButton.classList.remove("hidden");
  } else {
      goUpButton.classList.add("hidden");
  }
};

document.getElementById("GoUp").addEventListener('click', function(e) {
  e.preventDefault();
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
});
//-----------------------------------------------------------------