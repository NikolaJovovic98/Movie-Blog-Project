(function ($) {
    $(function () {
      var slider = $(".slider").flickity({
        imagesLoaded: true,
        percentPosition: false,
        prevNextButtons: false,
        initialIndex: 3,
        pageDots: false,
        groupCells: 1,
        selectedAttraction: 0.2,
        friction: 0.8,
        draggable: false
      });
  
      //enable clicking on cards
      slider.on("staticClick.flickity", function (
        event,
        pointer,
        cellElement,
        cellIndex
      ) {
        if (typeof cellIndex == "number") {
          slider.flickity("selectCell", cellIndex);
        }
      });
  
      //resize the selected card (the middle one on page load + any other one when clicked); also center the carousel on page load, because, for some reason, it tends to shift to the right if .resize() and .reposition() aren't applied
      var flkty = slider.data("flickity");
      flkty.selectedElement.classList.add("is-custom-selected");
      flkty.resize();
      flkty.reposition();
      let time = 0;
      function reposition() {
        flkty.reposition();
        if (time++ < 10) {
          requestAnimationFrame(reposition);
        } else {
          $(".flickity-prev-next-button").css("pointer-events", "auto");
        }
      }
      requestAnimationFrame(reposition);
  
      flkty.on("settle", () => {
        $(".card").removeClass("is-custom-selected");
        $(".flickity-prev-next-button").css("pointer-events", "none");
        flkty.selectedElement.classList.add("is-custom-selected");
  
        let time = 0;
        function reposition() {
          flkty.reposition();
          if (time++ < 10) {
            requestAnimationFrame(reposition);
          } else {
            $(".flickity-prev-next-button").css("pointer-events", "auto");
          }
        }
        requestAnimationFrame(reposition);
      });
    });
  })(jQuery);