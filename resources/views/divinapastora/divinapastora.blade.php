@extends('/layouts/mainlayout')

@section('content')

    <div>
        <div class="home_container">
            <div class="submain_container">
                <table style="height: 15rem; width: 100%; text-align: center;">
                    <tr>
                        <td>
                            <div class='welcomescreen'>
                                <h1 class="title_notmain">La Divina Pastora: Devoción Universal</h1>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="home_container notmain" id="whitebg">


            <div id='departments_cont'>
                <div class="leftdivide" id="dep_info_cnt">
                    
                    <p>
                    El 8 de septiembre de 1703, fiesta de la Natividad de la Virgen, el padre capuchino Fray Isidoro de Sevilla presentaba al mundo una nueva devoción, la Divina Pastora de las Almas, entronizada en la pintura del simpecado que presidiera el Rosario que el predicador sacara de la parroquia de San Gil. Comenzaba de esta forma a fraguarse una nueva devoción que de la mano de la Orden Capuchina se extenderá a todos los rincones del mundo.
                    </p>
                </div>
                <div class="rightdivide" id="logo_subpage">
                    <div style="width: 100%; padding: 20px;">
                        <center>
                            <img class="imglogo_subpage changecolorpngsyellow" src="{{ asset('/img/home/Divinapastora.png') }}" />
                            <h2>La Divina Pastora: Devoción Universal</h2>
                        </center>
                    </div>
                </div>
            </div>
        </div>

        <div class="whitebg" style="position: relative;">
            <div id="containermv2">
                <div id="photo_bg_dp2">
                    <img src="{{ asset('/img/2a8c9160-c4e2-442d-8af3-f681399312d9.jpg') }}" >
                </div>
                <div class="textinfofisidoro tex">
                    <p class="textisidoro" style="font-size:1.2rem; color:#12313a;">
                        En el presente apartado analizaremos el nacimiento, la consolidación y la primera expansión de la devoción, de manos de Fray Isidoro de Sevilla y sus colaboradores, primeros apóstoles de la Divina Pastora, Fray Luis de Oviedo y Fray Miguel de Zalamea. Asimismo, estudiaremos la iconografía en base a la cual se pintaron numerosos cuadros, se tallaron un sinfín de imágenes y se levantaron centenares de altares; veremos cuáles fueron las directrices que el padre Isidoro estableció para la realización de estos simulacros marianos, así como todas las variantes y evolución que la iconografía ha tenido en la Historia del Arte.
                    </p>
                </div>
            </div>
        </div>

        <div class="yellowbg" style="position: relative;">
            <img src="{{ asset('/img/logos/vector-logo.svg') }}" class="backg-ovr-sc">
            <h2 class="yellowbgtitle">Devoción a La Divina Pastora en</h2>
            <div class="div_past_pestanas2">
                <a href="{{ route('divinapastora.espana') }}" class="dp_cont2">
                    <img src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/joypixels/340/flag-spain_1f1ea-1f1f8.png" style="margin: auto; width: 100px;"/>
                    <h4 style="color: #12313a !important; text-align: center;">España</h4>
                </a>
                <a href="{{ route('divinapastora.venezuela') }}" class="dp_cont2">
                    <img src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/joypixels/340/flag-venezuela_1f1fb-1f1ea.png" style="margin: auto; width: 100px;"/>
                    <h4 style="color: #12313a !important; text-align: center;">Venezuela</h4>
                </a>
            </div>
        </div>

    </div>

@endsection