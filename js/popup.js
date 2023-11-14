const showPopup = (targetElementClass) => {
  //handle show popup
  $(targetElementClass).addClass("popup--show");
};

// function - Hide popup & body scroll off
const hidePopup = () => {
  $(".popup").removeClass("popup--show");
};
// Hide popup on click close button
$(".popup__close").on("click", hidePopup);

// Hide popup on click outside of popup
$(".popup").on("click", function (event) {
  if (event.target.classList.contains("popup")) {
    hidePopup();
  }
});

$("#choose-avatar-btn").on("click", function () {
  showPopup(".popup-list-user-avatar");
});

$(".table-body .column").on("click", function () {
  showPopup(".popup-list-history-lesson");
});
