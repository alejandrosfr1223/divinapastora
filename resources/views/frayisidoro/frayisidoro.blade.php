@extends('/layouts/mainlayout')

@section('content')

    <div>
        <div class="home_container">
            <div class="submain_container">
                <table style="height: 15rem; width: 100%; text-align: center;">
                    <tr>
                        <td>
                            <div class='welcomescreen'>
                                <h1 class="title_notmain">Fray Isidoro de Sevilla</h1>
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
                        El conocimiento de Fray Isidoro de Sevilla, la investigación sobre su figura como personaje histórico y como creador y primer divulgador de la devoción pastoreña es uno de los principales objetivos que tiene nuestro proyecto.
                    </p>
                </div>
                <div class="rightdivide" id="logo_subpage">
                    <div style="width: 100%; padding: 20px;">
                        <center>
                            <img class="imglogo_subpage changecolorpngsyellow" src="{{ asset('/img/home/Divinapastora.png') }}" />
                            <h2>Fray Isidoro de Sevilla</h2>
                        </center>
                    </div>
                </div>
            </div>
        </div>

        <div class="whitebg" style="position: relative;">
            <div id="containermv2">
                <div id="photo_bg_dp2">
                    <img src="{{ asset('/img/20220824_104929.png') }}" >
                </div>
                <div class="textinfofisidoro tex">
                    <p class="textisidoro" style="font-size:1.2rem; color:#12313a;">
                    En el presente apartado aportaremos nuevos datos biográficos sobre el personaje histórico; estudiaremos su legado, perdurable hasta nuestros días y materializado en la fundación de multitud de hermandades y la colocación de un sinfín de altares e imágenes de la Divina Pastora; y analizaremos su obra a través de sus principales escritos, como son La Pastora Coronada y La Mejor Pastora Assumpta con los que divulgó, justificó y consolidó esta advocación mariana.<br><br>
                    Asimismo, trataremos también algunas facetas que resultan más desconocidas de su vida, como su labor como cronista de la Provincia Capuchina de Andalucía o su designación como guardián del Convento sevillano de las Santas Justa y Rufina.
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection