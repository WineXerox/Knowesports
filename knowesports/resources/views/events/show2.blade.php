@extends('layouts.structure')
@section('title','LoL | KNOW Esports - นี่คือบ้านของอีสปอร์ต')

@section('main')
            <div class="container">
              <div class="ad-container"></div>
              <h1 class="page-headline archive mt-2 mb-3">LOL</h1>
              <div class="post-grid-banner count-3">
                          <article class="post-grid">
                              <a class="link" href="/readlol1">
                                  <div class="image">
                                      <img width="300" height="200" src="/picture/lol1.jpeg" class="attachment-medium size-medium wp-post-image" alt="" sizes="(max-width: 575px) 100vw, (max-width: 767px) 600px, 768px" srcset="https://cdn.oneesports.gg/wp-content/uploads/sites/3/2020/03/E88FFA68-5A3A-4112-863B-E95586FD2881-300x200.jpeg 300w,
                                      https://cdn.oneesports.gg/wp-content/uploads/sites/3/2020/03/E88FFA68-5A3A-4112-863B-E95586FD2881-768x512.jpeg 768w, https://cdn.oneesports.gg/wp-content/uploads/sites/3/2020/03/E88FFA68-5A3A-4112-863B-E95586FD2881-450x300.jpeg 450w, https://cdn.oneesports.gg/wp-content/uploads/sites/3/2020/03/E88FFA68-5A3A-4112-863B-E95586FD2881-600x400.jpeg 600w, https://cdn.oneesports.gg/wp-content/uploads/sites/3/2020/03/E88FFA68-5A3A-4112-863B-E95586FD2881.jpeg 1024w">
                                  </div>

                                  <div class="shade"></div>
                                  <div class="content">
                                                                  <h3 class="category page-headline">LoL</h3>
                                                              <h2 class="title">เก่งและใจบุญ! Faker บริจาค 7.8 แสนบาท สู้ภัยโควิด-19</h2>
                                  </div>
                              </a>
                          </article>
                          <article class="post-grid">
                              <a class="link" href="/readlol2">
                                  <div class="image">
                                      <img width="300" height="197" src="/picture/lol2.jpg" class="attachment-medium size-medium wp-post-image" alt="" sizes="(max-width: 575px) 100vw, (max-width: 767px) 600px, 768px" srcset="https://cdn.oneesports.gg/wp-content/uploads/sites/3/2020/03/LeagueOfLegends_LCK-300x197.jpg 300w,
                                      https://cdn.oneesports.gg/wp-content/uploads/sites/3/2020/03/LeagueOfLegends_LCK-1024x673.jpg 1024w, https://cdn.oneesports.gg/wp-content/uploads/sites/3/2020/03/LeagueOfLegends_LCK-768x505.jpg 768w, https://cdn.oneesports.gg/wp-content/uploads/sites/3/2020/03/LeagueOfLegends_LCK-450x296.jpg 450w, https://cdn.oneesports.gg/wp-content/uploads/sites/3/2020/03/LeagueOfLegends_LCK-600x395.jpg 600w,
                                      https://cdn.oneesports.gg/wp-content/uploads/sites/3/2020/03/LeagueOfLegends_LCK.jpg 1037w">
                                  </div>

                                  <div class="shade"></div>
                                  <div class="content">
                                                                  <h3 class="category page-headline">LoL</h3>
                                                              <h2 class="title">ไม่มีกำหนด! Riot เกาหลี ประกาศเลื่อน LCK หลังจบรอบแรก</h2>
                                  </div>
                              </a>
                          </article>
                          <article class="post-grid">
                              <a class="link" href="/readlol3">
                                  <div class="image">
                                      <img width="300" height="159" src="/picture/lol3.jpeg" class="attachment-medium size-medium wp-post-image" alt="" sizes="(max-width: 575px) 100vw, (max-width: 767px) 600px, 768px" srcset="https://cdn.oneesports.gg/wp-content/uploads/sites/3/2020/02/26B16357-FE87-4AA9-A14B-3FEE6AA1EF53-300x159.jpeg 300w,
                                      https://cdn.oneesports.gg/wp-content/uploads/sites/3/2020/02/26B16357-FE87-4AA9-A14B-3FEE6AA1EF53-450x239.jpeg 450w, https://cdn.oneesports.gg/wp-content/uploads/sites/3/2020/02/26B16357-FE87-4AA9-A14B-3FEE6AA1EF53.jpeg 469w">
                                  </div>

                                  <div class="shade"></div>
                                  <div class="content">
                                                                  <h3 class="category page-headline">LoL</h3>
                                                              <h2 class="title">ศึกแห่งภูมิภาค! LoL Pacific Championship Series พร้อมเปิดศึก 29 ก.พ.</h2>
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