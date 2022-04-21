// $(document).ready(function () {
//     $('#dtBasicExample').DataTable();
//     $('.dataTables_length').addClass('bs-select');
//   });

//   $('#sortTable').DataTable();

$(document).ready(function () {
  $('#dtOrderExample').DataTable({
    "order": [[ 3, "desc" ]]
  });
    $('.dataTables_length').addClass('bs-select');
});

  // sidebar

  function openNav() {
    document.getElementById("mySidebar").style.width = "15%";
    document.getElementById("main").style.marginLeft = "15%";
  }
  
  function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
  }

  // animasi carousel card beranda
  (function ($) {
    "use strict";
    // Auto-scroll
    $('#myCarousel').carousel({
      interval: 5000
    });
  
    // Control buttons
    $('.next').click(function () {
      $('.carousel').carousel('next');
      return false;
    });
    $('.prev').click(function () {
      $('.carousel').carousel('prev');
      return false;
    });
  
    // On carousel scroll
    $("#myCarousel").on("slide.bs.carousel", function (e) {
      var $e = $(e.relatedTarget);
      var idx = $e.index();
      var itemsPerSlide = 3;
      var totalItems = $(".carousel-item").length;
      if (idx >= totalItems - (itemsPerSlide - 1)) {
        var it = itemsPerSlide -
            (totalItems - idx);
        for (var i = 0; i < it; i++) {
          // append slides to end 
          if (e.direction == "left") {
            $(
              ".carousel-item").eq(i).appendTo(".carousel-inner");
          } else {
            $(".carousel-item").eq(0).appendTo(".carousel-inner");
          }
        }
      }
    });
  })
  (jQuery);