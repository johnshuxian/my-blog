<!doctype html>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="utf-8">
@include('pjax_meta')

<!-- VENDOR CSS -->
    @include('admin.common.common')
    {!! editor_css() !!}
    <script>
        $(function () {

            $(document).on("click", 'a', function (event) {
                event.preventDefault();
                var reg = /^(http|ftp|https):\/\/[\w\-_]+(\.[\w\-_]+)+([\w\-\.,@?^=%&:/~\+#]*[\w\-\@?^=%&/~\+#])?$/;
                var url = $(this).attr('href');
                if (reg.test(url)) {
                    $.ajax({
                        url: url,
                        type: "get",
                        success: function (msg) {
                            $('#main').html(msg);
                        }
                    })
                }
            })
        })
    </script>
</head>

<body>
<!-- WRAPPER -->
<div id="wrapper">
    <!-- NAVBAR -->
@include('admin.common.navbar')
<!-- END NAVBAR -->
    <!-- LEFT SIDEBAR -->
@include('admin.common.leftbar')
<!-- END LEFT SIDEBAR -->
    <!-- MAIN -->
    <div class="main">
        <!-- MAIN CONTENT -->
        <div class="main-content" id="main">
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span12">
                        <div class="carousel slide" id="carousel-273645">
                            <ol class="carousel-indicators">
                                <li data-slide-to="0" data-target="#carousel-273645">
                                </li>
                                <li data-slide-to="1" data-target="#carousel-273645">
                                </li>
                                <li data-slide-to="2" data-target="#carousel-273645" class="active">
                                </li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item next left">
                                    <img alt="" src="{{ asset('images/featured-posts/1.jpg') }}"/>
                                    <div class="carousel-caption">
                                        <h4>
                                            棒球
                                        </h4>
                                        <p>
                                            棒球运动是一种以棒打球为主要特点，集体性、对抗性很强的球类运动项目，在美国、日本尤为盛行。
                                        </p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img alt="" src="{{ asset('images/featured-posts/1-1.jpg') }}"/>
                                    <div class="carousel-caption">
                                        <h4>
                                            冲浪
                                        </h4>
                                        <p>
                                            冲浪是以海浪为动力，利用自身的高超技巧和平衡能力，搏击海浪的一项运动。运动员站立在冲浪板上，或利用腹板、跪板、充气的橡皮垫、划艇、皮艇等驾驭海浪的一项水上运动。
                                        </p>
                                    </div>
                                </div>
                                <div class="item active left">
                                    <img alt="" src="{{ asset('images/featured-posts/1-2.jpg') }}"/>
                                    <div class="carousel-caption">
                                        <h4>
                                            自行车
                                        </h4>
                                        <p>
                                            以自行车为工具比赛骑行速度的体育运动。1896年第一届奥林匹克运动会上被列为正式比赛项目。环法赛为最著名的世界自行车锦标赛。
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <a data-slide="prev" href="#carousel-273645" class="left carousel-control">‹</a> <a
                                    data-slide="next" href="#carousel-273645" class="right carousel-control">›</a>
                        </div>
                        <div class="row-fluid">
                            <div class="span6">
                                <h3>
                                    欢迎你，<span>admin</span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT -->
    </div>
    <!-- END MAIN -->
    <div class="clearfix"></div>
</div>
<!-- END WRAPPER -->
<!-- Javascript -->

</body>

</html>
