
<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>Best School Managment Software in Bangladesh. </title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Startup Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />


    <link rel="stylesheet" href="{{  asset('css/bootstrap.css') }}">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">

    <link href="http://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=devanagari,latin-ext"
          rel="stylesheet">

</head>


<body>



<!-- main banner -->
<div class="main-top" id="home">
    <!-- header -->
    <header>
        <div class="container-fluid">
        @include('Theme.Navbar.Navbar')
        </div>
    </header>

    <div class="contact py-5" id="contact">
        <div class="container pb-xl-5 pb-lg-3">
            <div class="row">
                <div class="col-lg-6">
                    <img src="images/b2.png" alt="image" class="img-fluid">
                </div>
                <div class="col-lg-6 mt-lg-0 mt-5">
                    <!-- contact form grid -->
                    <div class="contact-top1">
                        @if (count($errors)>0)
                            @foreach ($errors->all() as $error)
                                <p class="alert alert-danger">{{$error}}</p>
                            @endforeach
                        @endif
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @endif
                        <form action="{{ route('contactForm') }}" method="POST" class="contact-wthree-do">
                            @csrf
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>
                                            First name
                                        </label>
                                        <input class="form-control" type="text" placeholder="Anderson" name="name" required="">
                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>
                                            Mobile
                                        </label>
                                        <input class="form-control" type="text" placeholder="xxxx xxxx xx" name="mobile" required="">
                                    </div>
                                    <div class="col-md-6 mt-md-0 mt-4">
                                        <label>
                                            Email
                                        </label>
                                        <input class="form-control" type="email" placeholder="example@mail.com" name="email" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>
                                            Your message
                                        </label>
                                        <textarea placeholder="Add your Description here" name="body" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-cont-w3 btn-block mt-4">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- //contact form grid ends here -->
                </div>
            </div>
        </div>
    </div>

    <section class="partners py-5" id="partners">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="tittle text-center font-weight-bold text-info">Address</h3>

            <div class="row grid-part text-center pt-4">
                <div class="col-md-3 col-4">
                    <div class="parts-w3ls">
                        <a href="#"><span class="fa fa-location-arrow"></span></a>
                        <h4>Ka-90,Kuril, Progoti Sharani,Dhaka</h4>
                    </div>
                </div>
                <div class="col-md-3 col-4">
                    <div class="parts-w3ls">
                        <a href="#"><span class="fa fa-mobile"></span></a>
                        <h4>01913198340</h4>
                    </div>
                </div>
                <div class="col-md-3 col-4">
                    <div class="parts-w3ls">
                        <a href="#"><span class="fa fa-mail-forward"></span></a>
                        <h4>ourschl@gmail.com </h4>
                    </div>
                </div>
                <div class="col-md-3 col-4 mt-md-0 mt-4">
                    <div class="parts-w3ls">
                        <a href="#"><span class="fa fa-tencent-weibo"></span></a>
                        <h4>www.ourscl.com</h4>
                    </div>
                </div>


            </div>
        </div>
    </section>

</div>

<div class="copy-bottom bg-li py-4 border-top">
    @include('Theme.Navbar.Footer')
</div>


</body>


</html>
