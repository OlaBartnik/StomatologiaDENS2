  function showPriceDetails() {

      $(".tablepress").hide();
      $(".accordion_tab_arrow").on("click", function () {

          $(this).parent().siblings("table").fadeToggle("slow");

      })



  }





  export default showPriceDetails;