@extends('layouts.main')
@section('content')
{{-- <div class="right_col" role="main"> --}}
    <div class="">
      <div class="row top_tiles">
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-th"></i></div>
            <div class="count">10</div>
            <h3>مزاد</h3>
            {{-- <p>Lorem ipsum psdea itgum rixt.</p> --}}
          </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-comments-o"></i></div>
            <div class="count"> 20 </div>
            <h3> تعليق </h3>
          </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-list-alt"></i></div>
            <div class="count">60</div>
            <h3> اعلان </h3>
          </div>
        </div>
        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="tile-stats">
            <div class="icon"><i class="fa fa-cc"></i></div>
            <div class="count">100</div>
            <h3> اجمالي المزايدات </h3>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <div class="x_panel">
            <div class="x_title">
                <ul class="nav navbar-left panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <h2 class="navbar-right"> اخر المزادات  <label><a href="admin/auctions" style="font-size: 20px;">عرض الكل</a></label></h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content" style="height: 230px;overflow-x: hidden;overflow-y: scroll;">
                @for ($i = 0; $i < 5; $i++)
                    
                  <article class="media event">
                      <a class="pull-left date">
                      <p class="month">
                          April
                          {{-- {{ Carbon\Carbon::parse($auction->expireDate)->format('F') }} --}}
                      </p>
                      <p class="day">18</p>
                      {{-- <p class="day">{{ Carbon\Carbon::parse($auction->expireDate)->format('d') }}</p> --}}
                      </a>
                      <div class="media-body">
                      <a class="title" href="#"> عنوان  </a>
                      {{-- <p> {{ Str::substr(strip_tags($auction->description), 0, 100) }}  ... </p> --}}
                        <p>
                           هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.  ... 
                        </p>
                      </div>
                  </article>
                @endfor
            </div>
          </div>
        </div>

        <div class="col-md-4">
            <div class="x_panel">
              <div class="x_title">
                  <ul class="nav navbar-left panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                  </ul>
                  <h2 class="navbar-right"> اخر الاعلانات  <label><a href="admin/advertisements" style="font-size: 20px;">عرض الكل</a></label></h2>
                <div class="clearfix"></div>
              </div>
              <div class="x_content" style="height: 230px;overflow-x: hidden;overflow-y: scroll;">
                    @for ($i = 0; $i < 5; $i++)
                        <article class="media event">
                            <div class="media-body">
                            <a class="title" href="#"> عنوان اخر  </a>
                            <p> هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث ي </p>
                            </div>
                        </article>
                    @endfor
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="x_panel">
              <div class="x_title">
                  <ul class="nav navbar-left panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                  </ul>
                  <h2 class="navbar-right"> اخر المزايدات  <label><a href="admin/advertisements" style="font-size: 20px;"> البحث </a></label></h2>
                <div class="clearfix"></div>
              </div>
              <div class="x_content" style="height: 230px;overflow-x: hidden;overflow-y: scroll;">
                    @for ($i = 0; $i < 5; $i++)
                        <article class="media event">
                            <div class="media-body">
                            <a class="title" href="#"> عنوان اخر  </a>
                            <p> هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث ي </p>
                            </div>
                        </article>
                    @endfor
              </div>
            </div>
          </div>
    </div>

  </div>
{{-- </div> --}}
@endsection