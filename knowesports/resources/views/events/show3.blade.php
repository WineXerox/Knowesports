@extends('layouts.structure')
@section('title','DOTA2 | KNOW Esports - นี่คือบ้านของอีสปอร์ต')

@section('main')
            <div class="container">
              <div class="ad-container"></div>
              <h1 class="page-headline archive mt-2 mb-3">DOTA2</h1>
              <div class="post-grid-banner count-3">
                        <article class="post-grid">
                              <a class="link" href="/readdota1">
                                  <div class="image">
                                      <img width="300" height="221" src="/picture/dota1.jpg" class="attachment-medium size-medium wp-post-image" alt="" sizes="(max-width: 575px) 100vw, (max-width: 767px) 600px, 768px" srcset="https://cdn.oneesports.gg/wp-content/uploads/sites/3/2020/03/Dota2_LAMajorHeader-300x221.jpg 300w, https://cdn.oneesports.gg/wp-content/uploads/sites/3/2020/03/Dota2_LAMajorHeader-1024x756.jpg 1024w, https://cdn.oneesports.gg/wp-content/uploads/sites/3/2020/03/Dota2_LAMajorHeader-768x567.jpg 768w, https://cdn.oneesports.gg/wp-content/uploads/sites/3/2020/03/Dota2_LAMajorHeader-450x332.jpg 450w, https://cdn.oneesports.gg/wp-content/uploads/sites/3/2020/03/Dota2_LAMajorHeader-600x443.jpg 600w, https://cdn.oneesports.gg/wp-content/uploads/sites/3/2020/03/Dota2_LAMajorHeader.jpg 1463w">

                                  </div>

                                  <div class="shade"></div>
                                  <div class="content">
                                                                  <h3 class="category page-headline">Dota2</h3>
                                                              <h2 class="title">กระทบไหล่คนดัง! OG ร่วมกลุ่ม EG ศึก ESL ONE Los Angeles</h2>
                                  </div>
                              </a>
                        </article>
                        <article class="post-grid">
                              <a class="link" href="/readdota2">
                                  <div class="image">
                                      <img width="300" height="153" src="/picture/dota2.jpg" class="attachment-medium size-medium wp-post-image" alt="" sizes="(max-width: 575px) 100vw, (max-width: 767px) 600px, 768px" srcset="https://cdn.oneesports.gg/wp-content/uploads/sites/3/2020/03/89319404_202164244328052_3942714930448302080_n-300x153.jpg 300w,
                                       https://cdn.oneesports.gg/wp-content/uploads/sites/3/2020/03/89319404_202164244328052_3942714930448302080_n-768x393.jpg 768w, https://cdn.oneesports.gg/wp-content/uploads/sites/3/2020/03/89319404_202164244328052_3942714930448302080_n-450x230.jpg 450w, https://cdn.oneesports.gg/wp-content/uploads/sites/3/2020/03/89319404_202164244328052_3942714930448302080_n-600x307.jpg 600w,
                                       https://cdn.oneesports.gg/wp-content/uploads/sites/3/2020/03/89319404_202164244328052_3942714930448302080_n.jpg 960w">

                                  </div>

                                  <div class="shade"></div>
                                  <div class="content">
                                                                  <h3 class="category page-headline">Dota2</h3>
                                                              <h2 class="title">เต็มที่แล้ว! MSC พ่าย 496 Gaming 2-1 ตกรอบคัดเลือก ONE Esports Jakarta</h2>
                                  </div>
                              </a>
                        </article>
                          <article class="post-grid">
                              <a class="link" href="/readdota3">
                                  <div class="image">
                                      <img width="300" height="169" src="/picture/dota3.jpg" class="attachment-medium size-medium wp-post-image" alt="" sizes="(max-width: 575px) 100vw, (max-width: 767px) 600px, 768px" srcset="https://cdn.oneesports.gg/wp-content/uploads/sites/3/2020/03/84497581_3520416848031336_6393370510167638016_n-300x225.jpg 300w,
                                      https://cdn.oneesports.gg/wp-content/uploads/sites/3/2020/03/84497581_3520416848031336_6393370510167638016_n-768x576.jpg 768w, https://cdn.oneesports.gg/wp-content/uploads/sites/3/2020/03/84497581_3520416848031336_6393370510167638016_n-450x338.jpg 450w, https://cdn.oneesports.gg/wp-content/uploads/sites/3/2020/03/84497581_3520416848031336_6393370510167638016_n-600x450.jpg 600w,
                                      https://cdn.oneesports.gg/wp-content/uploads/sites/3/2020/03/84497581_3520416848031336_6393370510167638016_n.jpg 960w">
                                  </div>

                                  <div class="shade"></div>
                                  <div class="content">
                                                                  <h3 class="category page-headline">Dota2</h3>
                                                              <h2 class="title">แรงไม่หยุด! Trust เชือด Neon 2-0 คว้าแชมป์ Hainan Master Spring รอบคัดเลือกเอเชีย</h2>
                                  </div>
                              </a>
                          </article>
              </div>

              <div id="post-stream-load-more" class="text-center pt-3 pb-5" data-more-url="" data-stream-id="post-stream">
              	<a class="page-action-link" href="">
              		โหลดเพิ่ม	</a>
              </div>

              <script>
                  document.addEventListener('DOMContentLoaded', function () {
                      new loadMorePosts("post-stream-load-more");
                  });
              </script>
          </div>
@endsection