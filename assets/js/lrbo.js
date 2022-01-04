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
    window.addEventListener('click',function(e) {
        if ( !e.target.href) {
            var subs = document.querySelectorAll(".sub-menu-show");
            for (var i = 0; i < subs.length; i++) {
                var str = subs[i].classList.remove('sub-menu-show');
                subs[i].previousElementSibling.classList.remove( "lrbo-menu-active" );
            }
        }
    });
}

var menu_item = document.getElementById('lrbo_menu');
if ( typeof(menu_item) !== "undefined" && menu_item !== null ) {
    menu_item.addEventListener('click',function(e) {
        if ( !!e.target.href && e.target.href.includes("#")) {
            e.preventDefault();
            removeSubs(e.target.nextElementSibling);
            e.target.classList.toggle( "lrbo-menu-active" );
            e.target.nextElementSibling.classList.toggle( "sub-menu-show" );
        }
    });
}

var index = 0;
var prev = document.getElementById('lrbo-slider__prev');
var next = document.getElementById('lrbo-slider__next');
if ( typeof(prev) !== "undefined" && prev !== null ) {
    prev.addEventListener('click',function(e) {
        var total = e.target.dataset['total'];
        var elemnts = document.querySelectorAll("[data-index='" + index + "']");
        for (var i = 0; i < elemnts.length; i++) {
            var str = elemnts[i].classList.remove('active');
        }
        if ( index - 1 < 0 ) {
            index = parseInt(total - 1);
        } else {
            index = parseInt(index) - 1;
        }
        var elemnts = document.querySelectorAll("[data-index='" + index + "']");
        for (var i = 0; i < elemnts.length; i++) {
            var str = elemnts[i].classList.add('active');
        }
        document.getElementById('index').innerHTML = index + 1;
    });
}

if ( typeof(next) !== "undefined" && next !== null ) {
    next.addEventListener('click',function(e) {
        var total = e.target.dataset['total'];
        var elemnts = document.querySelectorAll("[data-index='" + index + "']");
        for (var i = 0; i < elemnts.length; i++) {
            var str = elemnts[i].classList.remove('active');
        }
        if ( index + 1 > total - 1 ) {
            index = 0;
        } else {
            index = parseInt(index) + 1;
        }
        var elemnts = document.querySelectorAll("[data-index='"+index+"']");
        for (var i = 0; i < elemnts.length; i++) {
            var str = elemnts[i].classList.add('active');
        }
        document.getElementById('index').innerHTML = index + 1;
    });
}

var slider = document.getElementById('lrbo-ref');
var slider_list = document.getElementById('lrbo-reference-slider-list');
var prev = document.getElementById('lrbo-reference-slider__prev');
var next = document.getElementById('lrbo-reference-slider__next');
if ( typeof(slider) !== "undefined" && slider !== null && typeof(slider_list) !== "undefined" && slider_list !== null ) {
    slider_list.setAttribute("style","height:" + parseInt(slider.offsetHeight + 31 ) + "px");

    window.addEventListener('resize', function() {
        slider_list.setAttribute("style","height:" + parseInt(slider.offsetHeight + 31 ) + "px");
    });
}

if ( typeof(prev) !== "undefined" && prev !== null ) {
    prev.addEventListener('click',function(e) {
        const list = document.getElementById("lrbo-reference-slider-list");
        list.prepend(list.lastElementChild);
    });
}

if ( typeof(next) !== "undefined" && next !== null ) {
    next.addEventListener('click',function(e) {
        const list = document.getElementById("lrbo-reference-slider-list");
        list.appendChild(list.firstElementChild);
    });
}

function removeSubs(t) {
    var subs = document.querySelectorAll(".sub-menu-show");
    for (var i = 0; i < subs.length; i++) {
        if ( t !== subs[i] ) {
            var str = subs[i].classList.remove('sub-menu-show');
            subs[i].previousElementSibling.classList.remove( "lrbo-menu-active" );
        }
    }
}

function initMap() {
    var map = new google.maps.Map(document.getElementById("map"), {
        mapId: "bb18184a40e77617",
        center: { lat: 51.1659377, lng: 4.459015 },
        zoom: 16,
    });
    new google.maps.Marker({
        position: { lat: 51.1659377, lng: 4.459015 },
        icon: marker,
        map,
      });
}
