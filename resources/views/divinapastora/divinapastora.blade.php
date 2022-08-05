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
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
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

        <div class="yellowbg" style="position: relative;">
            <img src="{{ asset('/img/logos/vector-logo.svg') }}" class="backg-ovr-sc">
            <h2 class="yellowbgtitle">Devoción a La Divina Pastora en</h2>
            <div class="div_past_pestanas2">
                <a href="{{ route('divinapastora.espana') }}" class="dp_cont2">
                    <img src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/joypixels/340/flag-spain_1f1ea-1f1f8.png" style="margin: auto; width: 100px;"/>
                    <h4 style="color: white !important; text-align: center;">España</h4>
                </a>
                <a href="{{ route('divinapastora.venezuela') }}" class="dp_cont2">
                    <img src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/joypixels/340/flag-venezuela_1f1fb-1f1ea.png" style="margin: auto; width: 100px;"/>
                    <h4 style="color: white !important; text-align: center;">Venezuela</h4>
                </a>
            </div>
        </div>

    </div>

@endsection