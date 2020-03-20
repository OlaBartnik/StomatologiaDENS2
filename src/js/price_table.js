  function showPriceDetails() {


      $(".accordion_tab_arrow").on("click", function () {

          $(this).parent().parent().children("table").fadeToggle("slow");
          //   $(this).parent().parent().siblings().children("table").fadeOut("slow");


      })


  }








  export default showPriceDetails;