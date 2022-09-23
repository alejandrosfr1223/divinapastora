@extends('/layouts/mainlayout')

@section('content')

    <div>
        <div class="home_container">
            <div class="submain_container">
                <table style="height: 15rem; width: 100%; text-align: center;">
                    <tr>
                        <td>
                            <div class='welcomescreen'>
                                <h1 class="title_notmain">El Convento de Sevilla</h1>
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
                    El 24 de junio de 1703, solemnidad de San Juan Bautista veía la luz en el sevillano Convento de Santa Justa y Rufina una nueva advocación mariana, netamente sevillana: La Divina Pastora de las Almas.
                    </p>
                </div>
                <div class="rightdivide" id="logo_subpage">
                    <div style="width: 100%; padding: 20px;">
                        <center>
                            <img class="imglogo_subpage changecolorpngsyellow" src="{{ asset('/img/home/Divinapastora.png') }}" />
                            <h2>El Convento de Sevilla</h2>
                        </center>
                    </div>
                </div>
            </div>


        </div>

        <div class="whitebg" style="position: relative;">
            <div id="containermv2">
                <div id="photo_bg_dp2">
                    <img src="{{ asset('/img/Misioneros.jpg') }}" >
                </div>
                <div class="textinfofisidoro tex">
                    <p class="textisidoro" style="font-size:1.2rem; color:#12313a;">
                    Fue en el Coro Bajo del convento donde el padre Isidoro estando en oración tuvo por inspiración representar a la Virgen con el “traje y título de Pastora”, asimismo sería en este sevillano convento, en el que el padre Isidoro vivía, donde realizó sus escritos y desde donde organizó toda su obra misional centrada en promover, difundir y universalizar esta recién nacida advocación.<br><br>
                    En el presente apartado vamos a dar a conocer la historia del Convento de Capuchinos de Sevilla. Haremos una visita a algunas de sus estancias más destacadas, especialmente el Coro Bajo, lugar preciso donde nació la devoción pastoreña. Finalmente, estudiaremos su rico patrimonio artístico, labrado a lo largo de los siglos por artistas de primera fila y donde se encuentra la colección más amplia e importante de representaciones de la Divina Pastora de las Almas entre pinturas, esculturas y grabados.
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection