import showPriceDetails from "./price_table";
import map from "./map";
import gallery from "./gallery";
import slider from "./slider";
import showMenu from "./menu_hamburger";



$(function () {


    // showPriceDetails();
    // slider();
    // gallery();
    // showMenu();
    // map();

    // front-page
    if ($("body").hasClass("page-id-11")) {
        slider();
        gallery();
        showMenu();
        map();
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