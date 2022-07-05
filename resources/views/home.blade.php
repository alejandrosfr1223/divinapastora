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
                                    <img class="first_img changecolorpngsyellow" src="{{ asset('/img/home/Divinapastora.png') }}">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h1 class="first_key">Divina Pastora de Almas</h1>
                                </td>
                            </tr>
                        </table>

                        <table id="notmain" style="text-align: center; align-content: center; margin: auto;">
                            <tr>
                                <td>
                                    <img class="first_img changecolorpngsyellow" src="{{ asset('/img/home/Divinapastora.png') }}">
                                </td>
                                <td>
                                    <h1 class="first_key">Divina Pastora de Almas</h1>
                                </td>
                            </tr>
                        </table>

                    </div>
                    <div class="rightdivide">
                        <p id="infomaintext">
                        El 23 de junio de 1703, estando en oración en el coro bajo de su convento el padre capuchino Isidoro de Sevilla, tuvo por inspiración a la Virgen en el traje y título de Pastora, instituyendo una nueva advocación mariana, la Divina Pastora de las Almas, con la que evangelizar al pueblo. Esta nueva devoción sería expandida por el fraile capuchino, sus colaboradores y sucesores, a través de las misiones, donde era portado el icono de la Virgen vestida de Pastora en un estandarte o la fundación de hermandades, cuyo fin principal era el rezo público del Rosario con el referido icono mariano, entre otras herramientas pastorales.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="whitebg" style="position: relative;">
            <div id="containermv">
                <div class="mv_cont textinfofisidoro">
                    <p class="textisidoro">A través de las misiones, los capuchinos consiguieron sembrar la devoción a la Divina Pastora en todos los lugares del mundo, arraigando de una forma muy especial en España, centro y sur de América y sur de Italia. En torno a esta advocación mariana y la evolución de su devoción, que se adapta a las peculiaridades antropológicas de cada lugar, se desarrollará toda una cultura pastoreña, cuyo producto serán un sinfín de obras de arte.</p>
                </div>
                <div class="mv_cont">
                    <img src="{{ asset('/img/bgdivinapastora1.png') }}" >
                </div>
            </div>
        </div>

        <div class="bluebg" style="position: relative;">
            <div id="containermv2">
                <div id="photo_bg_dp2">
                    <img src="{{ asset('/img/fisidorobg.png') }}" >
                </div>
                <div class="textinfofisidoro tex">
                    <p class="textisidoro textpresente">El presente proyecto plantea el estudio histórico, artístico y devocional, de una forma crítica y científica del fenómeno cultural y religioso que nace y se desarrolla en torno a la devoción a la Divina Pastora, poniendo en valor la figura de Fray Isidoro de Sevilla, los continuadores de su obra y el apostolado mariano que realizaron; el Convento de Capuchinos de Sevilla, como cuna de la Devoción Pastoreña o las fundaciones piadosas en torno a la Divina Pastora para el fomento y cuidado de su culto, entre otros muchos temas relacionados con la cultura pastoreña.</p>
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
                <a href="{{ route('frayisidoro.home') }}" class="dp_cont">
                    <h2>{{ trans("home.dp_p_1") }}</h2>
                    <p style="color: white;">{{ trans("home.dp_p_1_txt") }}</p>
                </a>
                <a href="{{ route('conventodesevilla.home') }}" class="dp_cont">
                    <h2>{{ trans("home.dp_p_2") }}</h2>
                    <p style="color: white;">{{ trans("home.dp_p_2_txt") }}</p>
                </a>
                <a href="{{ route('divinapastora.home') }}" class="dp_cont">
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