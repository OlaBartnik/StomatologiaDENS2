  function showPriceDetails() {


      $(".accordion_tab_arrow").on("click", function () {

          $(this).parent().parent().children("table").fadeToggle("slow");



      })


  }






  export default showPriceDetails;