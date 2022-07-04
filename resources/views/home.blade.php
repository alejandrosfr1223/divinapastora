@extends('layouts/mainlayout')

@section('content')

    <div>
        <div class="home_container">
            <div id="containerbackground">
                <div class="post_home_container">
                    <div class="firstsquare leftdivide" style="text-align: center;">
                        <table id="main" style="text-align: center; align-content: center; margin: auto; ">
                            <tr>
                                <td>
                                    <img class="first_img" src="{{ asset('/img/logos/logo-fid-llave.png') }}">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h1 class="first_key">Juan del Rincón</h1>
                                </td>
                            </tr>
                        </table>

                        <table id="notmain" style="text-align: center; align-content: center; margin: auto;">
                            <tr>
                                <td>
                                    <img class="first_img" src="{{ asset('/img/logos/logo-fid-llave.png') }}">
                                </td>
                                <td>
                                    <h1 class="first_key">Juan Del Rincón</h1>
                                </td>
                            </tr>
                        </table>

                    </div>
                    <div class="rightdivide">
                        <p id="infomaintext">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="home_container notmain">
            <div class="row gx-0">
                <div class="col-6 col-md-3 contimgdivpast">
                    <img src="{{ asset('/img/divinapastora/IMG_3691.JPG') }}" class="img-fluid imgsdivpast">
                </div>
                <div class="col-6 col-md-3 contimgdivpast">
                    <img src="{{ asset('/img/divinapastora/20220513_105735.jpg') }}" class="img-fluid imgsdivpast">
                </div>
                <div class="col-6 col-md-3 contimgdivpast">
                    <img src="{{ asset('/img/divinapastora/20220513_100126.jpg') }}" class="img-fluid imgsdivpast">
                </div>
                <div class="col-6 col-md-3 contimgdivpast">
                    <img src="{{ asset('/img/divinapastora/20220513_102017.jpg') }}" class="img-fluid imgsdivpast">
                </div>
            </div>
        </div>

        <div class="yellowbg">
            <img src="{{ asset('/img/home/logo-overlay2.png') }}" class="backg-ovrl3 bigscreen ol2-l">
            <img src="{{ asset('/img/logos/vector-logo.svg') }}" class="backg-ovrl3 smallscreen">
            <div id="div_past_pestanas2">
                <a href="" class="dp_cont">
                    <h2>{{ trans("home.dp_p_1") }}</h2>
                    <p style="color: white;">{{ trans("home.dp_p_1_txt") }}</p>
                </a>
                <a href="" class="dp_cont">
                    <h2>{{ trans("home.dp_p_2") }}</h2>
                    <p style="color: white;">{{ trans("home.dp_p_2_txt") }}</p>
                </a>
                <a href="" class="dp_cont">
                    <h2>{{ trans("home.dp_p_3") }}</h2>
                    <p style="color: white;">{{ trans("home.dp_p_3_txt") }}</p>
                </a>
            </div>
        </div>

        <div class="home_container" id="whitebg">
            <div style="position: relative;">
                <img src="{{ asset('/img/home/logo-overlay2r.png') }}" class="backg-ovrl2 bigscreen ol2-r">
                <div id='departments_cont'>
                    
                    <div class="leftdivide" id="dep_info_cnt">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                    <div class="rightdivide row" id="btns_cnt_dept">
                        <center>
                            <h2>¿Deseas aportar a esta investigación?</h2>
                            <a class="loginbtns" id="discov_more" href="{{route('perks.home')}}">Entra aquí</a>
                        </center>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection