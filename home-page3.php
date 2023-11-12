<?php include "templates/head.php"; ?>

<body>
  <div class="home-page-wrapper">
    <div class="home-page-content-mask">
      <!-- IMPORT  HEADER -->
      <?php include "templates/homeHeader.php"; ?>
      <div class="roadmap-step-3-wrapper">
        <div class="top-block-wrapper">
          <div class="common-history-list-topic-register">
            <div class="header-block">
              <div class="left-header">
                <img src="./images/icon-calendar.png" class="icon-header icon-calendar" alt="">
                <p class="txt-header">
                  Bạn đã đặt lịch tham gia <span class="hightlight">3 buổi học</span>
                </p>
              </div>
              <div class="toggle-view-all-wrapper collapse-history-topic-btn">
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
              <div class="collapse-list-history-topic">
                <div class=" common-history-topic-item">
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
        </div>
        <div class="page-roadmap-content-wrapper">
          <div class="row-item">
            <!-- BẮT ĐẦU 3 LEVEL HÀNG TRÊN CÙNG -->
            <div class="row-content">
              <div class="level-item disabled">
                <span class="name-level">Advanced</span>
                <div class="image-level-wrapper">
                  <img src="./images/icon-lock.png" class="icon-lock" alt="">
                  <img src="./images/icon-roadmap-7.png" class="image-level" alt="">
                </div>

                <ul class="list-star">
                  <li class="star-item"><img src="./images/icon-disable-star.png" alt="" class="star-image"></li>
                  <li class="star-item"><img src="./images/icon-disable-star.png" alt="" class="star-image"></li>
                  <li class="star-item"><img src="./images/icon-disable-star.png" alt="" class="star-image"></li>
                  <li class="star-item"><img src="./images/icon-disable-star.png" alt="" class="star-image"></li>
                  <li class="star-item"><img src="./images/icon-disable-star.png" alt="" class="star-image"></li>
                  <li class="star-item"><img src="./images/icon-disable-star.png" alt="" class="star-image"></li>
                </ul>
              </div>
              <div class="level-item disabled">
                <span class="name-level">Upper Flyer</span>
                <div class="image-level-wrapper">
                  <img src="./images/icon-lock.png" class="icon-lock" alt="">
                  <img src="./images/icon-roadmap-6.png" class="image-level" alt="">
                </div>

                <ul class="list-star">
                  <li class="star-item"><img src="./images/icon-disable-star.png" alt="" class="star-image"></li>
                  <li class="star-item"><img src="./images/icon-disable-star.png" alt="" class="star-image"></li>
                  <li class="star-item"><img src="./images/icon-disable-star.png" alt="" class="star-image"></li>
                  <li class="star-item"><img src="./images/icon-disable-star.png" alt="" class="star-image"></li>
                  <li class="star-item"><img src="./images/icon-disable-star.png" alt="" class="star-image"></li>
                  <li class="star-item"><img src="./images/icon-disable-star.png" alt="" class="star-image"></li>
                </ul>
              </div>
              <div class="level-item disabled">
                <span class="name-level">Flyer</span>
                <div class="image-level-wrapper">
                  <img src="./images/icon-lock.png" class="icon-lock" alt="">
                  <img src="./images/icon-roadmap-5.png" class="image-level" alt="">
                </div>

                <ul class="list-star">
                  <li class="star-item"><img src="./images/icon-disable-star.png" alt="" class="star-image"></li>
                  <li class="star-item"><img src="./images/icon-disable-star.png" alt="" class="star-image"></li>
                  <li class="star-item"><img src="./images/icon-disable-star.png" alt="" class="star-image"></li>
                  <li class="star-item"><img src="./images/icon-disable-star.png" alt="" class="star-image"></li>
                  <li class="star-item"><img src="./images/icon-disable-star.png" alt="" class="star-image"></li>
                  <li class="star-item"><img src="./images/icon-disable-star.png" alt="" class="star-image"></li>
                </ul>
              </div>
            </div>
            <!-- BẮT ĐẦU 3 LEVEL HÀNG TRÊN CÙNG -->
          </div>

          <!-- BẮT ĐẦU 1 LEVEL HÀNG GIỮA-->
          <div class="row-item">
            <div class="level-item disabled">
              <span class="name-level">Upper Mover</span>
              <div class="image-level-wrapper">
                <img src="./images/icon-lock.png" class="icon-lock" alt="">
                <img src="./images/icon-roadmap-4.png" class="image-level" alt="">
              </div>

              <ul class="list-star">
                <li class="star-item"><img src="./images/icon-disable-star.png" alt="" class="star-image"></li>
                <li class="star-item"><img src="./images/icon-disable-star.png" alt="" class="star-image"></li>
                <li class="star-item"><img src="./images/icon-disable-star.png" alt="" class="star-image"></li>
                <li class="star-item"><img src="./images/icon-disable-star.png" alt="" class="star-image"></li>
                <li class="star-item"><img src="./images/icon-disable-star.png" alt="" class="star-image"></li>
                <li class="star-item"><img src="./images/icon-disable-star.png" alt="" class="star-image"></li>
              </ul>

              <!-- HIỂN THỊ NỘI DUNG TOOLTIP KHI HOVER -->
              <div class="tooltip-block-wrapper">
                <h3 class="tooltip-title">Mục tiêu Upper Starter</h3>
                <ul class="list-target">
                  <li class="target-item">
                    <img src="./images/icon-check-2.png" class="icon-check" alt="">
                    <p class="txt-target">Can answer simple questions about habits and routines.</p>
                  </li>
                  <li class="target-item">
                    <img src="./images/icon-check-2.png" class="icon-check" alt="">
                    <p class="txt-target">Can answer simple questions about</p>
                  </li>
                  <li class="target-item">
                    <img src="./images/icon-check-2.png" class="icon-check" alt="">
                    <p class="txt-target">Can answer simple questions about habits and routines.</p>
                  </li>
                  <li class="target-item">
                    <img src="./images/icon-check-2.png" class="icon-check" alt="">
                    <p class="txt-target">Can answer simple questions about</p>
                  </li>
                  <li class="target-item">
                    <img src="./images/icon-check-2.png" class="icon-check" alt="">
                    <p class="txt-target">Can answer simple questions about habits and routines.</p>
                  </li>
                  <li class="target-item">
                    <img src="./images/icon-check-2.png" class="icon-check" alt="">
                    <p class="txt-target">Can answer simple questions about</p>
                  </li>
                  <li class="target-item">
                    <img src="./images/icon-check-2.png" class="icon-check" alt="">
                    <p class="txt-target">Can answer simple questions about habits and routines.</p>
                  </li>
                  <li class="target-item">
                    <img src="./images/icon-check-2.png" class="icon-check" alt="">
                    <p class="txt-target">Can answer simple questions about</p>
                  </li>
                </ul>
              </div>
              <!-- HIỂN THỊ NỘI DUNG TOOLTIP KHI HOVER -->
            </div>
          </div>
          <!-- BẮT ĐẦU 1 LEVEL HÀNG GIỮA-->


          <!-- BẮT ĐẦU 3 LEVEL HÀNG CUỐI CÙNG -->
          <div class="row-item">
            <div class="row-content">
              <div class="level-item">
                <span class="name-level">Starter</span>
                <div class="image-level-wrapper">
                  <!-- <img src="./images/icon-lock.png" class="icon-lock" alt=""> -->
                  <img src="./images/icon-roadmap-1.png" class="image-level" alt="">
                </div>

                <ul class="list-star">
                  <li class="star-item"><img src="./images/icon-active-star.png" alt="" class="star-image"></li>
                  <li class="star-item"><img src="./images/icon-active-star.png" alt="" class="star-image"></li>
                  <li class="star-item"><img src="./images/icon-active-star.png" alt="" class="star-image"></li>
                  <li class="star-item"><img src="./images/icon-active-star.png" alt="" class="star-image"></li>
                  <li class="star-item"><img src="./images/icon-active-star.png" alt="" class="star-image"></li>
                  <li class="star-item"><img src="./images/icon-active-star.png" alt="" class="star-image"></li>
                </ul>

                <!-- HIỂN THỊ NỘI DUNG TOOLTIP KHI HOVER -->
                <div class="tooltip-block-wrapper">
                  <h3 class="tooltip-title">Mục tiêu Upper Starter</h3>
                  <ul class="list-target">
                    <li class="target-item">
                      <img src="./images/icon-check-2.png" class="icon-check" alt="">
                      <p class="txt-target">Can answer simple questions about habits and routines.</p>
                    </li>
                    <li class="target-item">
                      <img src="./images/icon-check-2.png" class="icon-check" alt="">
                      <p class="txt-target">Can answer simple questions about</p>
                    </li>
                    <li class="target-item">
                      <img src="./images/icon-check-2.png" class="icon-check" alt="">
                      <p class="txt-target">Can answer simple questions about habits and routines.</p>
                    </li>
                    <li class="target-item">
                      <img src="./images/icon-check-2.png" class="icon-check" alt="">
                      <p class="txt-target">Can answer simple questions about</p>
                    </li>
                    <li class="target-item">
                      <img src="./images/icon-check-2.png" class="icon-check" alt="">
                      <p class="txt-target">Can answer simple questions about habits and routines.</p>
                    </li>
                    <li class="target-item">
                      <img src="./images/icon-check-2.png" class="icon-check" alt="">
                      <p class="txt-target">Can answer simple questions about</p>
                    </li>
                    <li class="target-item">
                      <img src="./images/icon-check-2.png" class="icon-check" alt="">
                      <p class="txt-target">Can answer simple questions about habits and routines.</p>
                    </li>
                    <li class="target-item">
                      <img src="./images/icon-check-2.png" class="icon-check" alt="">
                      <p class="txt-target">Can answer simple questions about</p>
                    </li>
                  </ul>
                </div>
                <!-- HIỂN THỊ NỘI DUNG TOOLTIP KHI HOVER -->
              </div>
              <div class="level-item">
                <span class="name-level">Upper Starter</span>
                <div class="image-level-wrapper">
                  <!-- <img src="./images/icon-lock.png" class="icon-lock" alt=""> -->
                  <img src="./images/icon-roadmap-2.png" class="image-level" alt="">
                </div>

                <ul class="list-star">
                  <li class="star-item"><img src="./images/icon-active-star.png" alt="" class="star-image"></li>
                  <li class="star-item"><img src="./images/icon-active-star.png" alt="" class="star-image"></li>
                  <li class="star-item"><img src="./images/icon-active-star.png" alt="" class="star-image"></li>
                  <li class="star-item"><img src="./images/icon-disable-star.png" alt="" class="star-image"></li>
                  <li class="star-item"><img src="./images/icon-disable-star.png" alt="" class="star-image"></li>
                  <li class="star-item"><img src="./images/icon-disable-star.png" alt="" class="star-image"></li>
                </ul>

                <!-- HIỂN THỊ NỘI DUNG TOOLTIP KHI HOVER -->
                <div class="tooltip-block-wrapper">
                  <h3 class="tooltip-title">Mục tiêu Upper Starter</h3>
                  <ul class="list-target">
                    <li class="target-item">
                      <img src="./images/icon-check-2.png" class="icon-check" alt="">
                      <p class="txt-target">Can answer simple questions about habits and routines.</p>
                    </li>
                    <li class="target-item">
                      <img src="./images/icon-check-2.png" class="icon-check" alt="">
                      <p class="txt-target">Can answer simple questions about</p>
                    </li>
                    <li class="target-item">
                      <img src="./images/icon-check-2.png" class="icon-check" alt="">
                      <p class="txt-target">Can answer simple questions about habits and routines.</p>
                    </li>
                    <li class="target-item">
                      <img src="./images/icon-check-2.png" class="icon-check" alt="">
                      <p class="txt-target">Can answer simple questions about</p>
                    </li>
                    <li class="target-item">
                      <img src="./images/icon-check-2.png" class="icon-check" alt="">
                      <p class="txt-target">Can answer simple questions about habits and routines.</p>
                    </li>
                    <li class="target-item">
                      <img src="./images/icon-check-2.png" class="icon-check" alt="">
                      <p class="txt-target">Can answer simple questions about</p>
                    </li>
                    <li class="target-item">
                      <img src="./images/icon-check-2.png" class="icon-check" alt="">
                      <p class="txt-target">Can answer simple questions about habits and routines.</p>
                    </li>
                    <li class="target-item">
                      <img src="./images/icon-check-2.png" class="icon-check" alt="">
                      <p class="txt-target">Can answer simple questions about</p>
                    </li>
                  </ul>
                </div>
                <!-- HIỂN THỊ NỘI DUNG TOOLTIP KHI HOVER -->
              </div>
              <div class="level-item disabled">
                <span class="name-level">Mover</span>
                <div class="image-level-wrapper">
                  <img src="./images/icon-lock.png" class="icon-lock" alt="">
                  <img src="./images/icon-roadmap-3.png" class="image-level" alt="">
                </div>

                <ul class="list-star">
                  <li class="star-item"><img src="./images/icon-disable-star.png" alt="" class="star-image"></li>
                  <li class="star-item"><img src="./images/icon-disable-star.png" alt="" class="star-image"></li>
                  <li class="star-item"><img src="./images/icon-disable-star.png" alt="" class="star-image"></li>
                  <li class="star-item"><img src="./images/icon-disable-star.png" alt="" class="star-image"></li>
                  <li class="star-item"><img src="./images/icon-disable-star.png" alt="" class="star-image"></li>
                  <li class="star-item"><img src="./images/icon-disable-star.png" alt="" class="star-image"></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- BẮT ĐẦU 3 LEVEL HÀNG CUỐI CÙNG -->
        </div>
      </div>
    </div>
  </div>
  <?php include "templates/footer.php"; ?>
  <script src="js/collapse.js"></script>
</body>

</html>