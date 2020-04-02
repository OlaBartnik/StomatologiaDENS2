function showMenu() {

    $(".toggle-main-nav").on("click", function (event) {
        event.preventDefault();
        $(".page_nav_toggle").toggleClass("show");
    })


    $(".page_nav_toggle .page_nav_list_button_link").on("click", function (event) {
        event.preventDefault();
        $(".page_nav_toggle .page_nav_sublist").toggleClass("show");
    })


}

export default showMenu;