// // function decrement(e) {
// //     const btn = e.target.parentNode.parentElement.querySelector(
// //       'button[data-action="decrement"]'
// //     );
// //     const target = btn.nextElementSibling;
// //     let value = Number(target.value);
// //     if(value > 1){
// //       value--;
// //     }
// //     target.value = value;
// //   }

// //   function increment(e) {
// //     const btn = e.target.parentNode.parentElement.querySelector(
// //       'button[data-action="decrement"]'
// //     );
// //     const target = btn.nextElementSibling;
// //     let value = Number(target.value);
// //     value++;
// //     target.value = value;
// //   }

// //   const decrementButtons = document.querySelectorAll(
// //     `button[data-action="decrement"]`
// //   );

// //   const incrementButtons = document.querySelectorAll(
// //     `button[data-action="increment"]`
// //   );

// //   decrementButtons.forEach(btn => {
// //     btn.addEventListener("click", decrement);
// //   });

// //   incrementButtons.forEach(btn => {
// //     btn.addEventListener("click", increment);
// //   });


let allItems = document.querySelectorAll('.allItems');
let subtotal = document.querySelector('.subtotal');
let priceSub = document.querySelector('.priceSub');
let prixTotal = document.getElementById('prixTotal');
let grandTotal = document.getElementById('grandTotal');
let calcTotalPrice = 0;

allItems.forEach(ele => {
    let price = parseInt(ele.querySelector('.unitPrice').textContent.replace('$', ''));
    let quantity = ele.querySelector('.quantite');
    let priceSub = ele.querySelector('.priceSub');
    let plus = ele.querySelector('.plus');
    let minus = ele.querySelector('.minus');
    let test = 0;
    
    priceSub.value = '$' + price * quantity.value;
    test = price * quantity.value;
    
    plus.addEventListener('click', () => {
        quantity.value++;
        priceSub.value = '$' + price * quantity.value;
        calcTotalPrice += price;
        prixTotal.value = "$" + calcTotalPrice;
        grandTotal.value = "$" + calcTotalPrice;
    });
    minus.addEventListener('click', () => {
        if (quantity.value > 1) {
            quantity.value--;
            priceSub.value = '$' + price * quantity.value;
            calcTotalPrice -= price;
            prixTotal.value = '$' + calcTotalPrice;
            grandTotal.value = '$' + calcTotalPrice;
        }
    });

    calcTotalPrice += test;
    prixTotal.value = '$' + calcTotalPrice;
    grandTotal.value = '$' + calcTotalPrice;
});
console.log(calcTotalPrice);

// // let tt = 0;
// // for(i=0; i<allItems.length;i++){
// // // console.log(priceSub.textContent)
// // tt += parseInt(allItems[i].childNodes[5].childNodes[3].textContent.replace('$', ''));
// // }

// // console.log(tt);
