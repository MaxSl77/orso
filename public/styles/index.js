const menuBtn = document.querySelector(".menu-btn");
const closeBtn = document.querySelector(".close-btn");
const menu = document.querySelector(".menu");
const drawer = menu.querySelector(".menu__drawer");
const blank = menu.querySelector(".menu__blank");


const closeMenu = () => {
    menu.classList.remove("blur");
    drawer.classList.remove("drawer-visible");
};

menuBtn.addEventListener("click", (event) => {
    event.stopPropagation();
    menu.classList.add("blur");
    drawer.classList.add("drawer-visible");
});

closeBtn.addEventListener("click", closeMenu);

blank.addEventListener("click", closeMenu);

const menuLinks = drawer.querySelectorAll("a");
menuLinks.forEach((link) => {
    link.addEventListener("click", closeMenu);
});

document.addEventListener("click", (event) => {
    const isClickInsideMenu = menu.contains(event.target);
    if (!isClickInsideMenu && menu.classList.contains("blur")) {
        setTimeout(closeMenu, 100);
    }
});

document.addEventListener("DOMContentLoaded", function () {
    const slider = document.querySelector('.carousel');
    if (slider) {
        $(slider).slick({
            dots: false,
            infinite: true,
            speed: 300,
            slidesToShow: 2,
            adaptiveHeight: true,
            arrows: false,
            appendArrows: '.carousel-arrows',
            prevArrow: '<button type="button" class="prev-arrow">&larr;</button>',
            nextArrow: '<button type="button" class="next-arrow">&rarr;</button>'
        });

        const prevButton = document.querySelector('.prev-arrow');
        const nextButton = document.querySelector('.next-arrow');

        prevButton.addEventListener('click', function () {
            $(slider).slick('slickPrev');
        });

        nextButton.addEventListener('click', function () {
            $(slider).slick('slickNext');
        });
    }
});

const accordionTitles = document.querySelectorAll('.accordion-title');

accordionTitles.forEach(title => {
    title.addEventListener('click', () => {
        const accordionSection = title.parentElement;
        const accordionContent = accordionSection.querySelector('.accordion-content');
        accordionSection.classList.toggle('active'); // Добавляем/удаляем класс active для секции
    });
});

