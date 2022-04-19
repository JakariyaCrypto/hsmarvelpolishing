  // menu active
const currentPage = window.location.href;
const menuItem = document.querySelectorAll('ul li a');
const menuLength = menuItem.length

for (let i = 0;  i< menuLength; i++) {
  if (menuItem[i].href === currentPage) {
    menuItem[i].className="active"
  }
}


// MOBILE MENU
  const mobileMenuIcon = document.getElementById('mobile_menu_icon');
        mobileMenuContent = document.getElementById('mobile-menu');
        if (mobileMenuIcon) {
          mobileMenuIcon.addEventListener('click', () => {
            mobileMenuContent.classList.toggle('mobile-mene-active');
          })
        }