window.addEventListener('DOMContentLoaded', () => {
  //Menu 
  const hamburger = document.querySelector('.menu__hamburger'),
        menu = document.querySelector('.menu__items'),
        menuLinks = document.querySelectorAll('.menu__item'),
        scroll = calcScroll();

  function openMenu() {
	document.body.style.overflow = 'hidden';
    menu.style.left = '0';
    menu.classList.add('menu__items_active');
    hamburger.classList.add('menu__hamburger_active');
    document.body.style.marginRight = `${scroll}px`;
  }

  function closeMenu() {
	document.body.style.overflow = '';
    menu.style.left = '-100%';
    setTimeout(() => {
      menu.classList.remove('menu__items_active');
    }, 200);
    hamburger.classList.remove('menu__hamburger_active');
    document.body.style.marginRight = `0px`;
  }

  

  hamburger.addEventListener('click', () => {
    if (menu.classList.contains('menu__items_active')) {
      closeMenu();
    } else {
      openMenu();
    }
  });
  menuLinks.forEach(link => {
    link.addEventListener('click', () => {
      closeMenu();
    });
  });
	document.addEventListener('keydown', (e) => {
		if (e.code == 'Escape') {
			closeMenu();
		}
	});

  function calcScroll() {
    let div = document.createElement('div');
    div.style.cssText = `
            width: 50px;
            height: 50px;
            overflow-y: scroll;
            visibility: hidden;
        `;
    document.body.appendChild(div);
    let scrollWidth = div.offsetWidth - div.clientWidth;
    div.remove();
    return scrollWidth;
  }

  jQuery(document).ready(function () {
    jQuery('.sertificate__items').slick({
      swipeToSlide: false,
      prevArrow: '<button type="button" class="slick-prev"><img src="/wp-content/themes/pogotowie/assets/icons/prev-btn.svg"></button>',
      nextArrow: '<button type="button" class="slick-next"><img src="/wp-content/themes/pogotowie/assets/icons/next-btn.svg"></button>',
      responsive: [{
        breakpoint: 768,
        settings: {
          arrows: false
        }
      }],
      autoplay: true,
      autoplaySpeed: 6000,
      adaptiveHeight: true
    });
  });
  
  jQuery('.contacts__form').submit(function(e) {
    e.preventDefault();

    jQuery.ajax({
      type: "POST",
      url: "https://pogotowiehigieniczne.pl/wp-content/themes/pogotowie/assets/mailer/smart.php",
      data: jQuery(this).serialize()
    }).done(function() {
      jQuery(this).find('input').val("");
      jQuery(this).find('textarea').val("");
      alert("Dzięki za aplikację! Skontaktujemy się z Tobą wkrótce.");

      
      jQuery('form').trigger('reset');
    });
    return false;
  });

  
});