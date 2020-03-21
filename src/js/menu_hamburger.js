function showMenu() {

    $(".toggle-main-nav").on("click", function (event) {
        event.preventDefault();
        $(".page_nav").toggleClass("show");
    })


}

export default showMenu;