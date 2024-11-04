
// function updateBottomWidth() {
//     var sideMenu = document.querySelector('.sideMenu');
//     var bottom = document.querySelector('.sideMenu .menu-item.-bottom');
//     if (sideMenu && bottom) {
//         bottom.style.width = sideMenu.clientWidth + 'px';
//     }
// }
// window.addEventListener('resize', updateBottomWidth);
// document.addEventListener('DOMContentLoaded', updateBottomWidth);

// function updateElBottom() {
//     var footer = document.querySelector('footer');
//     var el = document.querySelector('.sideMenu .menu-item.-bottom');
//     var footerTop = footer.offsetTop;
//     var footerHeight = footer.offsetHeight;

//     if (footer && el) {
//         var bodyHeight = document.body.clientHeight;
//         var scrollPosition = document.body.scrollTop || document.documentElement.scrollTop;
//         var k = scrollPosition - footerTop + bodyHeight;
        
//         if (k > 0) {
//             el.style.bottom = k + 'px';
//         } else {
//             el.style.bottom = '20px';
//         }
//     }
// }

// function getBodyHeight() {
//     var body = document.body;
//     var html = document.documentElement;

//     var bodyHeight = Math.max(body.scrollHeight, body.offsetHeight,
//                              html.clientHeight, html.scrollHeight, html.offsetHeight);
//     return bodyHeight;
// }


// if( document.body.classList.contains('archive') ){
// 	document.addEventListener('scroll', updateElBottom);
// }
// else{
// 	document.body.addEventListener('scroll', updateElBottom);
// }
// document.addEventListener('DOMContentLoaded', updateElBottom);

