<?php include "templates/head.php"; ?>

<body>
  <div class="background-common">
    <div class="page-content-wrapper-common home-page-wrapper">
      <!-- IMPORT  HEADER -->
      <?php include "templates/homeHeader.php"; ?>

      <div class="topic-page-wrapper">
        <div class="container">
          <div class="topic-content-wrapper">
            <div class="header-topic-page-block">
              <div class="common-history-list-topic-register">
                <div class="header-block">
                  <div class="left-header">
                    <img src="./images/icon-calendar.png" class="icon-header icon-calendar" alt="">
                    <p class="txt-header">
                      Bạn đã đặt lịch tham gia <span class="hightlight">3 buổi học</span>
                    </p>
                  </div>
                  <div class="toggle-view-all-wrapper">
                    <span class="btn-txt">Xem tất cả</span>
                    <img src="./images/icon-arrow-down.png" class="icon-header icon-arrow" alt="">
                  </div>
                </div>

                <div class="body-block">
                  <div class="common-history-topic-item">
                    <div class="left-content">
                      <div class="history-topic-image-wrapper">
                        <img src="./images/history-topic-1.png" class="history-topic-image" alt="">
                      </div>

                      <div class="topic-time-wrapper">
                        <div class="icon-wrapper">
                          <img src="./images/icon-clock.png" class="icon-clock" alt="">
                        </div>
                        <span class="time-string">11:30, Thứ 5</span>
                      </div>
                    </div>
                    <div class="right-content">
                      <div class="column">
                        <div class="teacher-info">
                          <img src="./images/teacher-1.png" class="teacher-image" alt="">
                          <span class="teacher-name">Serena</span>
                        </div>
                      </div>
                      <!-- success:  Đã xác nhận
                        default: Từ chối
                        info: Chờ xác nhận
                      -->
                      <div class="column">
                        <div class="topic-status success">
                          <img src="./images/icon-check-2.png" class="icon-check" alt="">
                          <span class="txt-status">Đã xác nhận</span>
                        </div>
                      </div>
                      <div class="column">
                        <button class="common-btn btn-join">
                          <img src="./images/icon-btn-1.png" class="icon-btn-1" alt="">
                          <img src="./images/icon-btn-2.png" class="icon-btn-2" alt="">
                          <span class="text-btn">Join</span>
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="common-history-topic-item">
                    <div class="left-content">
                      <div class="history-topic-image-wrapper">
                        <img src="./images/history-topic-2.png" class="history-topic-image" alt="">
                      </div>

                      <div class="topic-time-wrapper">
                        <div class="icon-wrapper">
                          <img src="./images/icon-clock.png" class="icon-clock" alt="">
                        </div>
                        <span class="time-string">11:30, Thứ 5 tuần sau</span>
                      </div>
                    </div>
                    <div class="right-content">
                      <div class="column">
                        <div class="teacher-info">
                          <img src="./images/teacher-2.png" class="teacher-image" alt="">
                          <span class="teacher-name">David</span>
                        </div>
                      </div>
                      <!-- success:  Đã xác nhận
                        default: Từ chối
                        info: Chờ xác nhận
                      -->
                      <div class="column">
                        <div class="topic-status info">
                          <span class="txt-status">Chờ xác nhận</span>
                        </div>
                      </div>
                      <div class="column"></div>
                    </div>
                  </div>
                  <div class="common-history-topic-item">
                    <div class="left-content">
                      <div class="history-topic-image-wrapper">
                        <img src="./images/history-topic-3.png" class="history-topic-image" alt="">
                      </div>

                      <div class="topic-time-wrapper">
                        <div class="icon-wrapper">
                          <img src="./images/icon-clock.png" class="icon-clock" alt="">
                        </div>
                        <span class="time-string">11:30, Thứ 5</span>
                      </div>
                    </div>
                    <div class="right-content">
                      <div class="column">
                        <div class="teacher-info">
                          <img src="./images/teacher-3.png" class="teacher-image" alt="">
                          <span class="teacher-name">Jane</span>
                        </div>
                      </div>
                      <!-- success:  Đã xác nhận
                        default: Từ chối
                        info: Chờ xác nhận
                      -->
                      <div class="column">
                        <div class="topic-status default">
                          <span class="txt-status">Từ chối</span>
                        </div>
                      </div>
                      <div class="column"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="warning-message-wrapper">
              <img src="./images/icon-lock-2.svg" class="icon-lock" alt="">
              <p class="txt-description">Bạn chỉ học được các chủ đề này khi ở trình độ Mover trở lên.</p>
            </div>

            <div class="block-item  topic-store-wrapper">
              <div class="header-item-block justify-center">
                <img src="./images/icon-comment.png" class="icon-header" alt="">
                <div class="content-header">
                  <h4 class="txt-title">Kho chủ đề</h4>
                  <!-- <p class="description">Nói chuyện 1-1 với giáo viên nước ngoài</p> -->
                </div>
              </div>

              <div class="list-topic">
                <div class="topic-item">
                  <span class="hashtag">#job interview</span>
                  <span class="topic-count">15 chủ đề</span>
                </div>
                <div class="topic-item">
                  <span class="hashtag">#school</span>
                  <span class="topic-count">5 chủ đề</span>
                </div>
                <div class="topic-item">
                  <span class="hashtag">#life</span>
                  <span class="topic-count">9 chủ đề</span>
                </div>
                <div class="topic-item">
                  <span class="hashtag">#school</span>
                  <span class="topic-count">25 chủ đề</span>
                </div>
                <div class="topic-item">
                  <span class="hashtag">#job interview</span>
                  <span class="topic-count"> 2 chủ đề</span>
                </div>
                <div class="topic-item">
                  <span class="hashtag">#school</span>
                  <span class="topic-count">5 chủ đề</span>
                </div>
                <div class="topic-item">
                  <span class="hashtag">#school</span>
                  <span class="topic-count">5 chủ đề</span>
                </div>
                <div class="topic-item">
                  <span class="hashtag">#school</span>
                  <span class="topic-count">5 chủ đề</span>
                </div>
                <div class="topic-item">
                  <span class="hashtag">#school</span>
                  <span class="topic-count">5 chủ đề</span>
                </div>
              </div>
            </div>

            <div class="block-item teacher-topic-wrapper">
              <div class="header-item-block justify-center">
                <img src="./images/icon-user.png" class="icon-header" alt="">
                <div class="content-header">
                  <div class="title-wrapper">
                    <h4 class="txt-title">Luyện nói với giáo viên</h4>
                    <span class="level-label">Premium</span>
                  </div>
                  <p class="description">Nói chuyện 1-1 với giáo viên nước ngoài</p>
                </div>
              </div>

              <div class="list-teacher">
                <div class="teacher-item">
                  <div class="avatar-teacher-wrapper">
                    <img src="./images/teacher-1.png" class="teacher-image" alt="">
                    <span class="icon-add-wrapper">
                      <img src="./images/icon-add.png" class="icon-add" alt="">
                    </span>
                  </div>

                  <div class="teacher-info">
                    <h4 class="teacher-name">Hannah</h4>
                    <div class="teacher-rating">
                      <img src="./images/icon-rating-star.png" class="icon-rating" alt="">
                      <span class="rating">4.5</span>
                      <span class="count">(15)</span>
                    </div>
                  </div>
                </div>
                <div class="teacher-item">
                  <div class="avatar-teacher-wrapper">
                    <img src="./images/teacher-2.png" class="teacher-image" alt="">
                    <span class="icon-add-wrapper">
                      <img src="./images/icon-add.png" class="icon-add" alt="">
                    </span>
                  </div>

                  <div class="teacher-info">
                    <h4 class="teacher-name">Kin</h4>
                    <div class="teacher-rating">
                      <img src="./images/icon-rating-star.png" class="icon-rating" alt="">
                      <span class="rating">4.5</span>
                      <span class="count">(15)</span>
                    </div>
                  </div>
                </div>
                <div class="teacher-item">
                  <div class="avatar-teacher-wrapper">
                    <img src="./images/teacher-3.png" class="teacher-image" alt="">
                    <span class="icon-add-wrapper">
                      <img src="./images/icon-add.png" class="icon-add" alt="">
                    </span>
                  </div>

                  <div class="teacher-info">
                    <h4 class="teacher-name">Ealla</h4>
                    <div class="teacher-rating">
                      <img src="./images/icon-rating-star.png" class="icon-rating" alt="">
                      <span class="rating">4.5</span>
                      <span class="count">(15)</span>
                    </div>
                  </div>
                </div>
                <div class="teacher-item">
                  <div class="avatar-teacher-wrapper">
                    <img src="./images/teacher-4.png" class="teacher-image" alt="">
                    <span class="icon-add-wrapper">
                      <img src="./images/icon-add.png" class="icon-add" alt="">
                    </span>
                  </div>

                  <div class="teacher-info">
                    <h4 class="teacher-name">Trish</h4>
                    <div class="teacher-rating">
                      <img src="./images/icon-rating-star.png" class="icon-rating" alt="">
                      <span class="rating">4.5</span>
                      <span class="count">(15)</span>
                    </div>
                  </div>
                </div>
                <div class="teacher-item">
                  <div class="avatar-teacher-wrapper">
                    <img src="./images/teacher-5.png" class="teacher-image" alt="">
                    <span class="icon-add-wrapper">
                      <img src="./images/icon-add.png" class="icon-add" alt="">
                    </span>
                  </div>

                  <div class="teacher-info">
                    <h4 class="teacher-name">Althea</h4>
                    <div class="teacher-rating">
                      <img src="./images/icon-rating-star.png" class="icon-rating" alt="">
                      <span class="rating">4.5</span>
                      <span class="count">(15)</span>
                    </div>
                  </div>
                </div>
                <div class="teacher-item">
                  <div class="avatar-teacher-wrapper">
                    <img src="./images/teacher-6.png" class="teacher-image" alt="">
                    <span class="icon-add-wrapper">
                      <img src="./images/icon-add.png" class="icon-add" alt="">
                    </span>
                  </div>

                  <div class="teacher-info">
                    <h4 class="teacher-name">Jennie</h4>
                    <div class="teacher-rating">
                      <img src="./images/icon-rating-star.png" class="icon-rating" alt="">
                      <span class="rating">4.5</span>
                      <span class="count">(15)</span>
                    </div>
                  </div>
                </div>
                <div class="teacher-item">
                  <div class="avatar-teacher-wrapper">
                    <img src="./images/teacher-7.png" class="teacher-image" alt="">
                    <span class="icon-add-wrapper">
                      <img src="./images/icon-add.png" class="icon-add" alt="">
                    </span>
                  </div>

                  <div class="teacher-info">
                    <h4 class="teacher-name">Hannah</h4>
                    <div class="teacher-rating">
                      <img src="./images/icon-rating-star.png" class="icon-rating" alt="">
                      <span class="rating">4.5</span>
                      <span class="count">(15)</span>
                    </div>
                  </div>
                </div>
                <div class="teacher-item">
                  <div class="avatar-teacher-wrapper">
                    <img src="./images/teacher-8.png" class="teacher-image" alt="">
                    <span class="icon-add-wrapper">
                      <img src="./images/icon-add.png" class="icon-add" alt="">
                    </span>
                  </div>

                  <div class="teacher-info">
                    <h4 class="teacher-name">Jennie</h4>
                    <div class="teacher-rating">
                      <img src="./images/icon-rating-star.png" class="icon-rating" alt="">
                      <span class="rating">4.5</span>
                      <span class="count">(15)</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="main-topic-by-day-wrapper">
              <div class="topic-by-day-item">
                <div class="header-block">
                  <img src="./images/icon-calendar-2.png" class="icon-calendar" alt="">
                  <h3 class="txt-title">Chủ đề hôm nay</h3>
                </div>

                <div class="list-topic">
                  <div class="topic-item">
                    <div class="common-topic-item normal-topic">
                      <div class="topic-header">
                        <img src="./images/topc-1.png" class="topic-image" alt="">
                      </div>
                      <div class="topic-content">
                        <span class="sub-title">Pre-Intermediate</span>
                        <h3 class="topic-title">
                          Do you do anything special with your family on holidays
                        </h3>
                        <div class="topic-footer">
                          <div class="left-content">
                            <div class="action-block">
                              <img src="./images/icon-outline.png" class="action-icon" alt="">
                              <span class="label">Outline</span>
                            </div>
                          </div>
                          <button class="common-btn btn-join-topic">
                            <img src="./images/icon-btn-1.png" class="icon-btn-1" alt="">
                            <img src="./images/icon-btn-2.png" class="icon-btn-2" alt="">
                            <span class="text-btn">Join</span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="topic-item">
                    <div class="common-topic-item normal-topic">
                      <div class="topic-header">
                        <img src="./images/topic-2.png" class="topic-image" alt="">
                      </div>
                      <div class="topic-content">
                        <span class="sub-title">Pre-Intermediate</span>
                        <h3 class="topic-title">
                          Do you do anything special with your family on holidays
                        </h3>
                        <div class="topic-footer">
                          <div class="left-content">
                            <div class="action-block">
                              <img src="./images/icon-outline.png" class="action-icon" alt="">
                              <span class="label">Outline</span>
                            </div>
                          </div>
                          <button class="common-btn btn-join-topic">
                            <img src="./images/icon-btn-1.png" class="icon-btn-1" alt="">
                            <img src="./images/icon-btn-2.png" class="icon-btn-2" alt="">
                            <span class="text-btn">Join</span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="topic-item">
                    <div class="common-topic-item normal-topic">
                      <div class="topic-header">
                        <img src="./images/topic-3.png" class="topic-image" alt="">
                      </div>
                      <div class="topic-content">
                        <span class="sub-title">Pre-Intermediate</span>
                        <h3 class="topic-title">
                          Do you do anything special with your family on holidays
                        </h3>
                        <div class="topic-footer">
                          <div class="left-content">
                            <div class="action-block">
                              <img src="./images/icon-outline.png" class="action-icon" alt="">
                              <span class="label">Outline</span>
                            </div>
                          </div>
                          <button class="common-btn btn-join-topic">
                            <img src="./images/icon-btn-1.png" class="icon-btn-1" alt="">
                            <img src="./images/icon-btn-2.png" class="icon-btn-2" alt="">
                            <span class="text-btn">Join</span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="topic-item">
                    <div class="common-topic-item normal-topic">
                      <div class="topic-header">
                        <img src="./images/topic-4.png" class="topic-image" alt="">
                      </div>
                      <div class="topic-content">
                        <span class="sub-title">Pre-Intermediate</span>
                        <h3 class="topic-title">
                          Do you do anything special with your family on holidays
                        </h3>
                        <div class="topic-footer">
                          <div class="left-content">
                            <div class="action-block">
                              <img src="./images/icon-outline.png" class="action-icon" alt="">
                              <span class="label">Outline</span>
                            </div>
                          </div>
                          <button class="common-btn btn-join-topic">
                            <img src="./images/icon-btn-1.png" class="icon-btn-1" alt="">
                            <img src="./images/icon-btn-2.png" class="icon-btn-2" alt="">
                            <span class="text-btn">Join</span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="topic-item">
                    <div class="common-topic-item normal-topic">
                      <div class="topic-header">
                        <img src="./images/topic-5.png" class="topic-image" alt="">
                      </div>
                      <div class="topic-content">
                        <span class="sub-title">Pre-Intermediate</span>
                        <h3 class="topic-title">
                          Do you do anything special with your family on holidays
                        </h3>
                        <div class="topic-footer">
                          <div class="left-content">
                            <div class="action-block">
                              <img src="./images/icon-outline.png" class="action-icon" alt="">
                              <span class="label">Outline</span>
                            </div>
                          </div>
                          <button class="common-btn btn-join-topic">
                            <img src="./images/icon-btn-1.png" class="icon-btn-1" alt="">
                            <img src="./images/icon-btn-2.png" class="icon-btn-2" alt="">
                            <span class="text-btn">Join</span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="topic-item">
                    <div class="common-topic-item normal-topic">
                      <div class="topic-header">
                        <img src="./images/topic-6.png" class="topic-image" alt="">
                      </div>
                      <div class="topic-content">
                        <span class="sub-title">Pre-Intermediate</span>
                        <h3 class="topic-title">
                          Do you do anything special with your family on holidays
                        </h3>
                        <div class="topic-footer">
                          <div class="left-content">
                            <div class="action-block">
                              <img src="./images/icon-outline.png" class="action-icon" alt="">
                              <span class="label">Outline</span>
                            </div>
                          </div>
                          <button class="common-btn btn-join-topic">
                            <img src="./images/icon-btn-1.png" class="icon-btn-1" alt="">
                            <img src="./images/icon-btn-2.png" class="icon-btn-2" alt="">
                            <span class="text-btn">Join</span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <div class="topic-by-day-item">
                <div class="header-block">
                  <img src="./images/icon-calendar-2.png" class="icon-calendar" alt="">
                  <h3 class="txt-title">Chủ đề ngày mai</h3>
                </div>

                <div class="list-topic">
                  <div class="topic-item">
                    <div class="common-topic-item normal-topic">
                      <div class="topic-header">
                        <img src="./images/topc-1.png" class="topic-image" alt="">
                      </div>
                      <div class="topic-content">
                        <span class="sub-title">Pre-Intermediate</span>
                        <h3 class="topic-title">
                          Do you do anything special with your family on holidays
                        </h3>
                        <div class="topic-footer">
                          <div class="left-content">
                            <div class="action-block">
                              <img src="./images/icon-outline.png" class="action-icon" alt="">
                              <span class="label">Outline</span>
                            </div>
                          </div>
                          <button class="common-btn btn-join-topic">
                            <img src="./images/icon-btn-1.png" class="icon-btn-1" alt="">
                            <img src="./images/icon-btn-2.png" class="icon-btn-2" alt="">
                            <span class="text-btn">Join</span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="topic-item">
                    <div class="common-topic-item normal-topic">
                      <div class="topic-header">
                        <img src="./images/topic-2.png" class="topic-image" alt="">
                      </div>
                      <div class="topic-content">
                        <span class="sub-title">Pre-Intermediate</span>
                        <h3 class="topic-title">
                          Do you do anything special with your family on holidays
                        </h3>
                        <div class="topic-footer">
                          <div class="left-content">
                            <div class="action-block">
                              <img src="./images/icon-outline.png" class="action-icon" alt="">
                              <span class="label">Outline</span>
                            </div>
                          </div>
                          <button class="common-btn btn-join-topic">
                            <img src="./images/icon-btn-1.png" class="icon-btn-1" alt="">
                            <img src="./images/icon-btn-2.png" class="icon-btn-2" alt="">
                            <span class="text-btn">Join</span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="topic-item">
                    <div class="common-topic-item normal-topic">
                      <div class="topic-header">
                        <img src="./images/topic-3.png" class="topic-image" alt="">
                      </div>
                      <div class="topic-content">
                        <span class="sub-title">Pre-Intermediate</span>
                        <h3 class="topic-title">
                          Do you do anything special with your family on holidays
                        </h3>
                        <div class="topic-footer">
                          <div class="left-content">
                            <div class="action-block">
                              <img src="./images/icon-outline.png" class="action-icon" alt="">
                              <span class="label">Outline</span>
                            </div>
                          </div>
                          <button class="common-btn btn-join-topic">
                            <img src="./images/icon-btn-1.png" class="icon-btn-1" alt="">
                            <img src="./images/icon-btn-2.png" class="icon-btn-2" alt="">
                            <span class="text-btn">Join</span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</body>

</html>