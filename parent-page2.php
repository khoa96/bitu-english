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
                <li class="parent-menu-item">
                  <a href="#" target="" title="">Tổng quan</a>
                </li>
                <li class="parent-menu-item active">
                  <a href="#" target="" title="">Lịch sử học</a>
                </li>
              </ul>
            </div>
            <div class="main-right-layout">
              <h3 class="layout-title">Lịch sử học</h3>
              <div class="layout-content">
                <div class="filer-by-time-box">
                  <span class="filter-label">Thời gian</span>
                  <input type="datetime-local" name="" value="2018-06-12T19:30" placeholder=""
                    class="common-filter-time-item" />
                  <span class="dash"></span>
                  <input type="datetime-local" name="" value="2018-06-12T19:30" placeholder="" class="
                      common-filter-time-item" />

                  <div class="filter-by-type-wrapper">
                    <span class="filter-label">Thời gian</span>
                    <select name="" id="" value="0" class="common-select-item">
                      <option value="0">All</option>
                      <option value="1">Option1</option>
                      <option value="2">Option22</option>
                    </select>
                  </div>
                </div>

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
      </div>
    </div>
  </div>

  <?php include "templates/footer.php"; ?>
  <script>

  </script>
</body>

</html>