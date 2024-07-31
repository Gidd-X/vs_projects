const btn = document.querySelector('#btn');
const btn_text = document.querySelector('#btn_text');

let count = 1

btn.onclick = () => {
    btn.textContent = "Try again!";
    btn_text.textContent = `${count} clicks so far`;
    count += 1;
  };