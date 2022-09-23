@extends('/layouts/mainlayout')

@section('content')

    <div>
        <div class="home_container">
            <div class="submain_container">
                <table style="height: 15rem; width: 100%; text-align: center;">
                    <tr>
                        <td>
                            <div class='welcomescreen'>
                                <h1 class="title_notmain">Aportar a esta investigación</h1>
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
                        Te invitamos a colaborar con esta investigación histórica devocional en torno a la Divina Pastora y a Fray Isidoro de Sevilla, iniciador de este culto mariano desde el Convento de Capuchinos de Sevilla, cuna de la Devoción Pastoreña.
                    </p>
                </div>
                <div class="rightdivide" id="logo_subpage">
                    <div style="width: 100%; padding: 20px;">
                        <center>
                            <img class="imglogo_subpage changecolorpngsyellow" src="{{ asset('/img/home/Divinapastora.png') }}" />
                            <h2>Aportar a esta investigación</h2>
                        </center>
                    </div>
                </div>
            </div>


        </div>
    </div>

@endsection