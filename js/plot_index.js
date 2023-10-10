/**
 * @description Change Home page slider's arrows active status
 */
function updateSliderArrowsStatus(
  cardsContainer,
  containerWidth,
  cardCount,
  cardWidth
) {
  if (
    $(cardsContainer).scrollLeft() + containerWidth <
    cardCount * cardWidth + 15
  ) {
    $("#slide-right-container").addClass("active");
  } else {
    $("#slide-right-container").removeClass("active");
  }
  if ($(cardsContainer).scrollLeft() > 0) {
    $("#slide-left-container").addClass("active");
  } else {
    $("#slide-left-container").removeClass("active");
  }
}
$(function() {
  // Scroll products' slider left/right
  let div = $("#cards-container");
  let cardCount = $(div)
    .find(".cards")
    .children(".card").length;
  let speed = 1000;
  let containerWidth = $(".container").width();
  let cardWidth = 250;

  updateSliderArrowsStatus(div, containerWidth, cardCount, cardWidth);

  //Remove scrollbars
  $("#slide-right-container").click(function(e) {
    if ($(div).scrollLeft() + containerWidth < cardCount * cardWidth) {
      $(div).animate(
        {
          scrollLeft: $(div).scrollLeft() + cardWidth
        },
        {
          duration: speed,
          complete: function() {
            setTimeout(
              updateSliderArrowsStatus(
                div,
                containerWidth,
                cardCount,
                cardWidth
              ),
              1005
            );
          }
        }
      );
    }
    updateSliderArrowsStatus(div, containerWidth, cardCount, cardWidth);
  });
  $("#slide-left-container").click(function(e) {
    if ($(div).scrollLeft() + containerWidth > containerWidth) {
      $(div).animate(
        {
          scrollLeft: "-=" + cardWidth
        },
        {
          duration: speed,
          complete: function() {
            setTimeout(
              updateSliderArrowsStatus(
                div,
                containerWidth,
                cardCount,
                cardWidth
              ),
              1005
            );
          }
        }
      );
    }
    updateSliderArrowsStatus(div, containerWidth, cardCount, cardWidth);
  });

  // If resize action ocurred then update the container width value
  $(window).resize(function() {
    try {
      containerWidth = $("#cards-container").width();
      updateSliderArrowsStatus(div, containerWidth, cardCount, cardWidth);
    } catch (error) {
      console.log(
        `Error occured while trying to get updated slider container width: 
            ${error}`
      );
    }
  });
});


$(document).ready(function () {
  showPlotMedia();
  
});
//////////// Docuemnt  Close Here ////////////////////////////

function showPlotMedia() {
  $.ajax({
    url: __URL_include_plot_index_,
    type: "POST",
    data: {
      key: "showMedia",
      password: _AUTH_PASSWORD_,
      username: _AUTH_USERNAME_,
    },
    dataType: "json",
    success: function (data1, status, xhr) {
      console.log("property id data success  :success " + data1);
      // window.location.href = "../pages/list_pages/admin_request_list.php";
      data = JSON.parse(data1["data"]);
      // $("#kkk").html("");
      var strsignlecard = "";
      console.log(data.length);
      if (data.length > 0) {
        for (var i = 0; i < data.length; i++) {
          // console.log("fffghjk" + strsignlecard);
          strsignlecard =
            strsignlecard +
            "<div class='card'>" +
            "<img src='upload/images/" +
            data[i].md_media_url +
            "' alt='Animals' style='width:100%'>" +
            "<div class='container'>" +
            "<h4>" +
            "<b>"+data[i].pt_name+"</b>" +
            "</h4>" +
            "</div>" +
            "</div>";
        }
        $("#plotcarouselItem").html(strsignlecard);
      }
    },
    error: function (data) {
      console.log("property id data eroor  :error " + data.responseText);
    },
    complete: function () {
      console.log("property id data complte  :complete ");
      // localStorage.setItem("propertyid", NaN);
    },
  });
}


