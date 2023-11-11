const showPopup = () => {
  //handle show popup
  $(".popup").addClass("popup--show");
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
  showPopup();
});
