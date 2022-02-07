var menu_btn = document.getElementById('m_icon');
var menu = document.getElementById('lrbo_menu');
if ( typeof(menu_btn) !== "undefined" && menu_btn !== null ) {
    menu_btn.addEventListener('click',function(e) {
        menu.classList.add('menu-show');
    });
}

if ( typeof(menu) !== "undefined" && menu !== null ) {
    menu.addEventListener('click',function(e) {
        if ( typeof e.target.href === 'undefined' || !e.target.href.includes("#") ) {
            menu.classList.remove('menu-show');
        }
    });
}

var menu_item = document.getElementById('lrbo_menu');
if ( typeof(menu_item) !== "undefined" && menu_item !== null ) {
    menu_item.addEventListener('click',function(e) {
        if ( !!e.target.href && e.target.href.includes("#")) {
            e.preventDefault();
            e.target.classList.toggle( "lrbo-menu-active" );
        }
    });
}
