$(".collapse-history-topic-btn").on("click", function () {
  $(".collapse-list-history-topic").toggle();

  const currentDisplay = $(".collapse-list-history-topic").css("display");

  if (currentDisplay === "block") {
    $(this).find(".btn-txt").text("Rút gọn");
    $(this).find(".icon-arrow").attr("src", "./images/icon-arrow-up.png");
  } else {
    $(this).find(".btn-txt").text("Xem tất cả");
    $(this).find(".icon-arrow").attr("src", "./images/icon-arrow-down.png");
  }
});
