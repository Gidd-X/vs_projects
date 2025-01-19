const btn = document.querySelector('#btn');
const btn_text = document.querySelector('#btn_text');

btn.addEventListener('click', () => {
  btn_text.innerHTML = 'Thank you for your interest';
})