

const closeNavBtn = document.getElementById('close_btn');
const openNavBtn = document.getElementById('open_btn');
const Navmenu = document.getElementById('nav__items');

closeNavBtn.addEventListener('click', () => {
  Navmenu.style.display = 'none';
  closeNavBtn.style.display = 'none';
  openNavBtn.style.display = 'flex';
});
openNavBtn.addEventListener('click', () => {
  Navmenu.style.display = 'flex';
  openNavBtn.style.display = 'none';
  closeNavBtn.style.display = 'flex';
})

