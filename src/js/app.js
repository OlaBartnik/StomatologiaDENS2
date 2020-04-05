import showPriceDetails from "./price_table";
import map from "./map";
import gallery from "./gallery";
import slider from "./slider";
import showMenu from "./menu_hamburger";
import vhResize from "./vhResize";


$(function () {

    // front-page
    if ($("body").hasClass("page-id-11")) {
        vhResize();
        slider();
        gallery();
        showMenu();
        map();

        const scroll = new SmoothScroll('.page_nav a[href*="#"]', {
            speed: 800
        });
    }
    // aboutUs_gallery
    else if ($("body").hasClass("page-id-15")) {
        slider();
        gallery();
        showMenu();
        // price
    } else if ($("body").hasClass("page-id-43")) {
        showPriceDetails();
        showMenu();
    } else {
        showMenu();

    }





});