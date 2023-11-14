<?php include "templates/head.php"; ?>

<body>
  <div class="home-page-wrapper">
    <div class="home-page-content-mask">
      <!-- IMPORT  HEADER -->
      <?php include "templates/homeHeader.php"; ?>
      <!-- IMPORT  HEADER -->
      <div class="parent-page-content-wrapper">
        <div class="container">
          <div class="parent-page-content">
            <div class="main-left-layout">
              <ul class="parent-menu">
                <li class="parent-menu-item active">
                  <a href="#" target="" title="">Tổng quan</a>
                </li>
                <li class="parent-menu-item">
                  <a href="#" target="" title="">Lịch sử học</a>
                </li>
              </ul>
            </div>
            <div class="main-right-layout">
              <h3 class="layout-title">Chuyên cần</h3>
              <div class="layout-content">
                <div class="dashboard-block-wrapper">
                  <div class="dashboard-item normal-dashboard">
                    <span class="txt-label">Số buổi đã học</span>
                    <span class="value">12</span>
                  </div>
                  <div class="dashboard-item normal-dashboard">
                    <span class="txt-label">Số buổi listen</span>
                    <span class="value">6</span>
                  </div>
                  <div class="dashboard-item normal-dashboard">
                    <span class="txt-label">Time on mic (phút)</span>
                    <span class="value">1200</span>
                  </div>
                  <div class="dashboard-item">
                    <span class="txt-label">Đánh giá gần nhất</span>
                    <div class="info-detail">
                      <div class="rate-value-wrapper">
                        <span class="main-score">4.5</span>
                        <span class="sub-score">/5</span>
                      </div>
                      <ul class="list-star">
                        <li class="star-item"><img src="./images/ic_star_full.png" alt=""></li>
                        <li class="star-item"><img src="./images/ic_star_full.png" alt=""></li>
                        <li class="star-item"><img src="./images/ic_star_full.png" alt=""></li>
                        <li class="star-item"><img src="./images/ic_star_full.png" alt=""></li>
                        <li class="star-item"><img src="./images/icon-haft-star.png" alt=""></li>
                      </ul>

                      <span class="result">Good</span>
                    </div>
                  </div>
                </div>

                <div class="progress-table-wrapper">
                  <h3 class="layout-title">Tiến độ học</h3>
                  <div class="filer-by-time-box">
                    <span class="filter-label">Thời gian</span>
                    <input type="datetime-local" name="" value="2018-06-12T19:30" placeholder=""
                      class="common-filter-time-item" />
                    <span class="dash"></span>
                    <input type="datetime-local" name="" value="2018-06-12T19:30" placeholder="" class="
                      common-filter-time-item" />
                  </div>

                  <div class="progress-table">
                    <div class="table-header">
                      <div class="column">MON</div>
                      <div class="column">TUE</div>
                      <div class="column">WED</div>
                      <div class="column">THU</div>
                      <div class="column">FRI</div>
                      <div class="column">SAT</div>
                      <div class="column">SUN</div>
                    </div>
                    <div class="table-body">
                      <div class="column active">1</div>
                      <div class="column">2</div>
                      <div class="column">3</div>
                      <div class="column">4</div>
                      <div class="column active">5</div>
                      <div class="column active">6</div>
                      <div class="column">7</div>
                      <div class="column">8</div>
                      <div class="column">9</div>
                      <div class="column">10</div>
                      <div class="column">11</div>
                      <div class="column">12</div>
                      <div class="column">13</div>
                      <div class="column">14</div>
                      <div class="column">15</div>
                      <div class="column active">16</div>
                      <div class="column">17</div>
                      <div class="column">18</div>
                      <div class="column">19</div>
                      <div class="column">20</div>
                      <div class="column">21</div>
                      <div class="column">22</div>
                      <div class="column">23</div>
                      <div class="column">24</div>
                      <div class="column">25</div>
                      <div class="column">26</div>
                      <div class="column">27</div>
                      <div class="column">28</div>
                    </div>
                  </div>

                  <div class="suggestion-wrapper">
                    <div class="color-box"></div>
                    <span class="txt-suggestion">Ngày mà con có buổi học</span>
                  </div>
                </div>

                <div class="footer-block">
                  <h3 class="layout-title">Lộ trình</h3>
                  <ul class="list-value">
                    <li class="value-item">
                      <span class="txt-label">Trình độ Kids Starter:</span>
                      <span class="txt-value"> 5/36</span>
                    </li>
                    <li class="value-item">
                      <span class="txt-label">Khoá học STEAM:</span>
                      <span class="txt-value"> 5/36</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- POPUP SHOW LIST HISTORY LESSON -->
    <div class="popup popup-list-history-lesson">
      <div class="popup__body">
        <div class="popup__close">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <g clip-path="url(#clip0_3118_11684)">
              <path d="M18 6L6 18" stroke="#1A202C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M6 6L18 18" stroke="#1A202C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </g>
            <defs>
              <clipPath id="clip0_3118_11684">
                <rect width="24" height="24" fill="white" />
              </clipPath>
            </defs>
          </svg>
        </div>
        <div class="popup-content">
          <h3 class="txt-title">Lịch sử học</h3>
          <div class="list-lesson">
            <div class="common-lesson-item">
              <div class="lesson-image-wrapper">
                <img src="./images/topic-image-1.png" alt="">
              </div>
              <div class="lesson-detail">
                <h3 class="lesson-title">What is the power of Doraemon?</h3>
                <p class="lesson-time">21:30-22:00, 20/10/2022</p>
              </div>
              <div class="view-detail-wrapper">
                <img src="./images/ic_star_full.png" class="icon-star" alt="">
                <button class="common-btn btn-view-detail">
                  <img src="./images/icon-btn-1.png" class="icon-btn-1" alt="">
                  <img src="./images/icon-btn-2.png" class="icon-btn-2" alt="">
                  <span class="text-btn">Xem chi tiết</span>
                </button>
              </div>
            </div>
            <div class="common-lesson-item">
              <div class="lesson-image-wrapper">
                <img src="./images/topic-image-1.png" alt="">
              </div>
              <div class="lesson-detail">
                <h3 class="lesson-title">What is the power of Doraemon?</h3>
                <p class="lesson-time">21:30-22:00, 20/10/2022</p>
              </div>
              <div class="view-detail-wrapper">
                <img src="./images/ic_star_full.png" class="icon-star" alt="">
                <button class="common-btn btn-view-detail">
                  <img src="./images/icon-btn-1.png" class="icon-btn-1" alt="">
                  <img src="./images/icon-btn-2.png" class="icon-btn-2" alt="">
                  <span class="text-btn">Xem chi tiết</span>
                </button>
              </div>
            </div>
            <div class="common-lesson-item">
              <div class="lesson-image-wrapper">
                <img src="./images/topic-image-1.png" alt="">
              </div>
              <div class="lesson-detail">
                <h3 class="lesson-title">What is the power of Doraemon?</h3>
                <p class="lesson-time">21:30-22:00, 20/10/2022</p>
              </div>
              <div class="view-detail-wrapper">
                <img src="./images/ic_star_full.png" class="icon-star" alt="">
                <button class="common-btn btn-view-detail">
                  <img src="./images/icon-btn-1.png" class="icon-btn-1" alt="">
                  <img src="./images/icon-btn-2.png" class="icon-btn-2" alt="">
                  <span class="text-btn">Xem chi tiết</span>
                </button>
              </div>
            </div>
            <div class="common-lesson-item">
              <div class="lesson-image-wrapper">
                <img src="./images/topic-image-1.png" alt="">
              </div>
              <div class="lesson-detail">
                <h3 class="lesson-title">What is the power of Doraemon?</h3>
                <p class="lesson-time">21:30-22:00, 20/10/2022</p>
              </div>
              <div class="view-detail-wrapper">
                <img src="./images/ic_star_full.png" class="icon-star" alt="">
                <button class="common-btn btn-view-detail">
                  <img src="./images/icon-btn-1.png" class="icon-btn-1" alt="">
                  <img src="./images/icon-btn-2.png" class="icon-btn-2" alt="">
                  <span class="text-btn">Xem chi tiết</span>
                </button>
              </div>
            </div>
            <div class="common-lesson-item">
              <div class="lesson-image-wrapper">
                <img src="./images/topic-image-1.png" alt="">
              </div>
              <div class="lesson-detail">
                <h3 class="lesson-title">What is the power of Doraemon?</h3>
                <p class="lesson-time">21:30-22:00, 20/10/2022</p>
              </div>
              <div class="view-detail-wrapper">
                <img src="./images/ic_star_full.png" class="icon-star" alt="">
                <button class="common-btn btn-view-detail">
                  <img src="./images/icon-btn-1.png" class="icon-btn-1" alt="">
                  <img src="./images/icon-btn-2.png" class="icon-btn-2" alt="">
                  <span class="text-btn">Xem chi tiết</span>
                </button>
              </div>
            </div>
            <div class="common-lesson-item">
              <div class="lesson-image-wrapper">
                <img src="./images/topic-image-1.png" alt="">
              </div>
              <div class="lesson-detail">
                <h3 class="lesson-title">What is the power of Doraemon?</h3>
                <p class="lesson-time">21:30-22:00, 20/10/2022</p>
              </div>
              <div class="view-detail-wrapper">
                <img src="./images/ic_star_full.png" class="icon-star" alt="">
                <button class="common-btn btn-view-detail">
                  <img src="./images/icon-btn-1.png" class="icon-btn-1" alt="">
                  <img src="./images/icon-btn-2.png" class="icon-btn-2" alt="">
                  <span class="text-btn">Xem chi tiết</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include "templates/footer.php"; ?>
  <script src="./js/popup.js"></script>
</body>

</html>