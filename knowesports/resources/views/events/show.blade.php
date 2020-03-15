@extends('layouts.structure')
@section('title','RoV | KNOW Esports - นี่คือบ้านของอีสปอร์ต')

@section('main')
<div class="container">
              <div class="ad-container"></div>
              <h1 class="page-headline archive mt-2 mb-3">RoV</h1>
              <div class="post-grid-banner count-3">
                      <article class="post-grid">
                              <a class="link" href="/readrov1">
                                  <div class="image">
                                      <img width="300" height="154" src="/picture/rov1.jpg" class="attachment-medium size-medium wp-post-image" alt="" sizes="(max-width: 575px) 100vw, (max-width: 767px) 600px, 768px" srcset="https://cdn.oneesports.gg/wp-content/uploads/sites/3/2020/03/87898025_430222544440095_8173237887144296448_n-300x154.jpg 300w, https://cdn.oneesports.gg/wp-content/uploads/sites/3/2020/03/87898025_430222544440095_8173237887144296448_n-1024x524.jpg 1024w, https://cdn.oneesports.gg/wp-content/uploads/sites/3/2020/03/87898025_430222544440095_8173237887144296448_n-768x393.jpg 768w, https://cdn.oneesports.gg/wp-content/uploads/sites/3/2020/03/87898025_430222544440095_8173237887144296448_n-450x230.jpg 450w, https://cdn.oneesports.gg/wp-content/uploads/sites/3/2020/03/87898025_430222544440095_8173237887144296448_n-600x307.jpg 600w, https://cdn.oneesports.gg/wp-content/uploads/sites/3/2020/03/87898025_430222544440095_8173237887144296448_n.jpg 1428w">
                                  </div>

                                  <div class="shade"></div>
                                  <div class="content">
                                                                  <h3 class="category page-headline">ROV</h3>
                                                              <h2 class="title">ทันควัน!ปลากัดแยกทาง Chitawan หลังพ่าย KOG</h2>
                                  </div>
                              </a>
                      </article>
                      <article class="post-grid">
                                      <a class="link" href="/readrov2">
                                          <div class="image">
                                              <img width="300" height="154" src="/picture/rov2.jpeg" class="attachment-medium size-medium wp-post-image" alt="" sizes="(max-width: 575px) 100vw, (max-width: 767px) 600px, 768px" srcset="https://cdn.oneesports.gg/wp-content/uploads/sites/3/2020/03/C09C00BB-8E7B-4D5F-9AEE-82DEF6D8314C-300x154.jpeg 300w,
                                              https://cdn.oneesports.gg/wp-content/uploads/sites/3/2020/03/C09C00BB-8E7B-4D5F-9AEE-82DEF6D8314C-1024x524.jpeg 1024w, https://cdn.oneesports.gg/wp-content/uploads/sites/3/2020/03/C09C00BB-8E7B-4D5F-9AEE-82DEF6D8314C-768x393.jpeg 768w, https://cdn.oneesports.gg/wp-content/uploads/sites/3/2020/03/C09C00BB-8E7B-4D5F-9AEE-82DEF6D8314C-450x230.jpeg 450w,
                                              https://cdn.oneesports.gg/wp-content/uploads/sites/3/2020/03/C09C00BB-8E7B-4D5F-9AEE-82DEF6D8314C-600x307.jpeg 600w, https://cdn.oneesports.gg/wp-content/uploads/sites/3/2020/03/C09C00BB-8E7B-4D5F-9AEE-82DEF6D8314C.jpeg 1428w">
                                          </div>

                                          <div class="shade"></div>
                                          <div class="content">
                                                                          <h3 class="category page-headline">ROV</h3>
                                                                      <h2 class="title">ไม่โฟกัสผล! Cherie ลั่นขอใส่เต็ม Valor Tournament</h2>
                                          </div>
                                      </a>
                      </article>
                      <article class="post-grid">
                              <a class="link" href="/readrov3">
                                  <div class="image">
                                      <img width="300" height="168" src="/picture/rov3.jpg" class="attachment-medium size-medium wp-post-image" alt="" sizes="(max-width: 575px) 100vw, (max-width: 767px) 600px, 768px" srcset="https://cdn.oneesports.gg/wp-content/uploads/sites/3/2020/03/talon-300x168.jpg 300w, https://cdn.oneesports.gg/wp-content/uploads/sites/3/2020/03/talon-1024x574.jpg 1024w, https://cdn.oneesports.gg/wp-content/uploads/sites/3/2020/03/talon-768x431.jpg 768w, https://cdn.oneesports.gg/wp-content/uploads/sites/3/2020/03/talon-450x252.jpg 450w, https://cdn.oneesports.gg/wp-content/uploads/sites/3/2020/03/talon-600x337.jpg 600w, https://cdn.oneesports.gg/wp-content/uploads/sites/3/2020/03/talon.jpg 1166w">

                                  </div>


                                  <div class="shade"></div>
                                  <div class="content">
                                                                  <h3 class="category page-headline">RoV</h3>
                                                              <h2 class="title">HAK ประเดิมสวย! Talon ดับเครื่อง Bacon</h2>
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