@extends('layouts.master')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-4 ">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>59</h3>

                            <h3>En venta</h3>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 ">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>14</h3>

                            <h3>Reservados</h3>
                        </div>
                        <div class="icon">
                            <i class="fa fa-bookmark-o"></i>
                        </div>
                        <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 ">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3>33</h3>

                            <h3>Vendidos</h3>
                        </div>
                        <div class="icon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-12 col-xs-12">
                    <!-- small box -->
                    <div class="small-box bg-yellow">

                        <a href="#" class="small-box-footer">Más info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <!-- ./col -->
            </div>
            <!-- /.row -->


            <div class="row">

                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Urbanización Valle del Sol</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <p class="text-center">
                                        <strong>Distribución de lotes</strong>
                                    </p>

                                    <!-- Map box -->
                                    <div class="main dragscroll bg-light-blue-gradient">
                                        <div class="box-header">
                                            <i class="fa fa-map-marker"></i>
                                            <h3 class="box-title">
                                                Plano de Lotes
                                            </h3>
                                        </div>
                                        
                                        <div class="box-body jvectormap-container" id="mapaDiv">
                
                                        <div class="btn btn-warning" onclick="zoomin()">+</div>
                                        <div class="btn btn-warning" onclick="zoomout()">-</div>

                                            <!-- aqui va los datos svg -->
                                            <svg id="map" version="1.1" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;"
                                                xmlns:graph="&ns_graphs;" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 1856.6 1141.7" xml:space="preserve">

                                                <switch>

                                                    <g i:extraneous="self">
                                                        <circle id="Zona_verde_1" fill=" #b2babb " stroke="#000000"
                                                            stroke-miterlimit="10" cx="1199.4" cy="725" r="67.3" />
                                                        <circle id="Espacio" fill="#FFFFFF" stroke="#000000"
                                                            stroke-miterlimit="10" cx="1199.4" cy="725.8" r="56.3" />
                                                        <path id="Zona_verde_2" fill=" #b2babb " stroke="#000000"
                                                            stroke-miterlimit="10" d="M241.7,41.2l-68.6,145.4c0,0-11.8,15.8,1.7,23
       l234,101.3l25.3-61.3l-51-38L339.4,106l-32.6-26.4L241.7,41.2z" />
                                                        <polygon id="T1" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" points="474.7,268 434,249.6 408.7,310.9 449.5,328.4
       " />
                                                        <polygon id="T2" fill="#f39c12" stroke="#000000"
                                                            stroke-miterlimit="10" points="528.3,292.4 474.7,268 449.5,328.4 503.5,351.2
         " />
                                                        <path id="T3" fill="#00a65a" stroke="#000000" stroke-miterlimit="10"
                                                            d="M583.9,316.9l-55.7-24.5L504,352.6l38.4,15.2
       c0,0,15.1,6.5,22.1-6.5L583.9,316.9z" />
                                                        <path id="T4" fill="#00a65a" stroke="#000000" stroke-miterlimit="10"
                                                            d="M669.1,350.5l-56.4-20.9l-18.2,42.5
       c0,0-3.8,13.2,4.6,18.2l44.9,19.9L669.1,350.5z" />
                                                        <polygon id="T5" fill=" #dd4b39 " stroke="#000000"
                                                            stroke-miterlimit="10" points="713.3,366.8 669.1,350.5 643.9,410.3 686.4,429
         " />
                                                        <polygon id="T6" fill=" #dd4b39 " stroke="#000000"
                                                            stroke-miterlimit="10" points="763.2,385.1 713.3,366.8 686.4,429 736.8,450.4
         " />
                                                        <polygon id="T7" fill=" #dd4b39 " stroke="#000000"
                                                            stroke-miterlimit="10" points="813.4,403.3 763.2,385.1 736.8,450.4
       784.8,470.8 		" />
                                                        <polygon id="T8" fill=" #dd4b39 " stroke="#000000"
                                                            stroke-miterlimit="10" points="860.7,420.4 813.4,403.3 784.8,470.8
       831.6,490.4 		" />
                                                        <polygon id="T9" fill=" #dd4b39 " stroke="#000000"
                                                            stroke-miterlimit="10" points="906.5,437.6 860.7,420.4 831.6,490.4
       876.3,509.4 		" />
                                                        <polygon id="T10" fill=" #dd4b39 " stroke="#000000"
                                                            stroke-miterlimit="10" points="951.9,453.5 906.5,437.6 876.3,509.4
       919.2,527.2 		" />
                                                        <polygon id="T11" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" points="993.9,468.8 951.9,453.5 919.2,527.2
       961.9,545.4 		" />
                                                        <polygon id="T12" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" points="1036.6,484.4 993.9,468.8 961.9,545.4
       1001.8,562.7 		" />
                                                        <polygon id="T13" fill="#f39c12" stroke="#000000"
                                                            stroke-miterlimit="10" points="1077.9,499.6 1036.6,484.4 1001.8,562.7
       1041.9,579.7 		" />
                                                        <polygon id="T14" fill="#f39c12" stroke="#000000"
                                                            stroke-miterlimit="10" points="1118.2,514.2 1077.9,499.6 1041.8,581.1
       1080,596.2 		" />
                                                        <polygon id="T15" fill="#f39c12" stroke="#000000"
                                                            stroke-miterlimit="10" points="1118.2,612.1 1080,596.2 1118.2,514.2
       1157.1,520.7 		" />
                                                        <path id="T16" fill=" #b2babb " stroke="#000000"
                                                            stroke-miterlimit="10" d="M1226.2,612.1l-91.8-39l-16.2,39l46.1,19.4
       c0,0,3.4-0.6,18-3.1c14.6-2.5,18.6-1.4,26.9-2.2C1217.3,625.5,1226.2,612.1,1226.2,612.1z" />
                                                        <polygon id="T17" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" points="1258.3,537.7 1157.1,520.7 1147.5,543.5
       1238.7,582.8 		" />
                                                        <polygon id="T18" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" points="1226.2,612.1 1238.7,582.8 1147.5,543.5
       1134.3,573.1 		" />
                                                        <path id="T19" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" d="M1343.3,584.3l-46.1-7.7c0,0-11.3-1.4-15.4,6.2
       s-19.9,44.2-19.9,44.2l55,23.5L1343.3,584.3z" />
                                                        <polygon id="T20" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" points="1385.8,590.5 1343.3,584.3 1316.9,650.5
       1353.6,666.1 		" />
                                                        <polygon id="T21" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" points="1441.2,598.7 1385.8,590.5 1367.4,633.8
       1416.3,654.6 		" />
                                                        <polygon id="T22" fill=" #dd4b39 " stroke="#000000"
                                                            stroke-miterlimit="10" points="1487.1,600.6 1456.8,671.9 1416.3,654.6
       1441.2,598.7 1453.7,600.6 		" />
                                                        <polygon id="T23" fill=" #dd4b39 " stroke="#000000"
                                                            stroke-miterlimit="10" points="1553.3,600.1 1487.1,600.6 1468.6,645.1
       1524.5,669.2 		" />
                                                        <path id="T24" fill=" #dd4b39 " stroke="#000000"
                                                            stroke-miterlimit="10" d="M1597.7,612.1c0,0-4.8-10.4-9.6-12
       c-4.8-1.6-13.1-3.2-34.8,0l-28.8,69.1l41.5,17.5L1597.7,612.1z" />
                                                        <polygon id="T25" fill=" #dd4b39 " stroke="#000000"
                                                            stroke-miterlimit="10"
                                                            points="1634.9,714.8 1597.7,612.1 1566,686.8 		" />
                                                        <path id="T26" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" d="M1556.7,798.4l41.8-98l36.4,14.4l-32.4,76.8
       c0,0-5.5,19.5-17.5,16.6S1556.7,798.4,1556.7,798.4z" />
                                                        <polygon id="T27" fill="#f39c12" stroke="#000000"
                                                            stroke-miterlimit="10" points="1566,686.8 1598.5,700.4 1556.7,798.4
       1525,784.9 		" />
                                                        <polygon id="T28" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" points="1533.3,673 1566,686.8 1525,784.9
       1491.9,770.8 		" />
                                                        <polygon id="T29" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" points="1459.2,756.8 1501,659.1 1533.3,673
       1491.9,770.8 		" />
                                                        <polygon id="T30" fill=" #dd4b39 " stroke="#000000"
                                                            stroke-miterlimit="10" points="1468.6,645.1 1426.6,743.2 1459.2,756.8
       1501,659.1 		" />
                                                        <polygon id="T31" fill=" #dd4b39 " stroke="#000000"
                                                            stroke-miterlimit="10" points="1411.4,652.5 1381.9,724 1426.6,743.2
       1456.8,671.9 		" />
                                                        <polygon id="T32" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" points="1367.4,633.8 1336.1,705.5 1381.9,724
       1411.4,652.5 		" />
                                                        <path id="ZONA_VERDE_34" fill=" #b2babb " stroke="#000000"
                                                            stroke-miterlimit="10" d="M1261.9,627c0,0-3.4,12.3-0.5,17.8
       c2.9,5.4,22.1,27.4,26.4,36.2c0,0,3.4,4.3,6.4,5.8s41.9,18.7,41.9,18.7l17.5-39.4L1261.9,627z" />
                                                        <path id="ZONA_VERDE_35" fill=" #b2babb " stroke="#000000"
                                                            stroke-miterlimit="10" d="M294.7,297.2l-129.4-55
       c0,0-15.6-4.8-24.5,10.2L67,410c0,0-6.2,16.6,3.1,21.6s142.1,61.4,142.1,61.4L294.7,297.2z" />
                                                        <polygon id="T36" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" points="327.6,311.9 294.7,297.2 253.3,395.4
       285.9,408.8 		" />
                                                        <polygon id="T37" fill="#f39c12" stroke="#000000"
                                                            stroke-miterlimit="10" points="360.5,325.1 327.6,311.9 285.9,408.8
       319.3,423.3 		" />
                                                        <polygon id="T38" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" points="393.1,339 360.5,325.1 319.3,423.3
       351.9,436.4 		" />
                                                        <polygon id="T39" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" points="425.8,352.9 393.1,339 351.9,436.4
       383.8,450.4 		" />
                                                        <polygon id="T40" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" points="458.4,366.6 425.8,352.9 383.8,450.4
       416.2,464.3 		" />
                                                        <polygon id="T41" fill=" #dd4b39 " stroke="#000000"
                                                            stroke-miterlimit="10" points="244.8,507 285.9,408.8 253.3,395.4
       212.2,493.1 		" />
                                                        <polygon id="T42" fill=" #dd4b39 " stroke="#000000"
                                                            stroke-miterlimit="10" points="277.9,521.2 244.8,507 285.9,408.8
       319.3,423.3 		" />
                                                        <polygon id="T43" fill=" #dd4b39 " stroke="#000000"
                                                            stroke-miterlimit="10" points="351.9,436.4 319.3,423.3 277.9,521.2
       310.6,534.8 		" />
                                                        <polygon id="T44" fill=" #dd4b39 " stroke="#000000"
                                                            stroke-miterlimit="10" points="383.8,450.4 351.9,436.4 310.6,534.8
       342.7,548 		" />
                                                        <polygon id="T45" fill=" #dd4b39 " stroke="#000000"
                                                            stroke-miterlimit="10" points="416.2,464.3 383.8,450.4 342.7,548
       375.1,562.4 		" />
                                                        <path id="T46" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" d="M527.5,448.2L439,411.5l19.4-44.9l77.3,33.4
       c0,0,7.7,5.2,4.1,19.9L527.5,448.2z" />
                                                        <polygon id="T47" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" points="511.9,484.9 423.1,448.2 439,411.5
       527.5,448.2 		" />
                                                        <polygon id="T48" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" points="496.6,521.2 408.7,483.5 423.1,448.2
       511.9,484.9 		" />
                                                        <polygon id="T49" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" points="480.7,557.2 393.4,520.3 408.7,483.5
       496.6,521.2 		" />
                                                        <path id="T50" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" d="M375.1,562.4l74.6,31.7c0,0,15,2.1,19.2-7.7
       c4.2-9.7,11.8-29.3,11.8-29.3l-87.3-36.9L375.1,562.4z" />
                                                        <path id="T51" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" d="M625.9,502l-73.4-30.5l18.7-44.4c0,0,8.4-8.2,19.7-3.8
       s58.3,24.5,58.3,24.5L625.9,502z" />
                                                        <polygon id="T52" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" points="607.2,546.1 625.9,502 552.5,471.5 534,514.9
         " />
                                                        <polygon id="T53" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" points="589,589.1 607.2,546.1 534,514.9 515.3,558.8
         " />
                                                        <path id="T54" fill="#f39c12" stroke="#000000"
                                                            stroke-miterlimit="10" d="M565.9,643.3l23-54.2l-73.7-30.2l-17,40.1
       c0,0-4.1,13.9,14.4,21.8C531.1,628.7,565.9,643.3,565.9,643.3z" />
                                                        <polygon id="T55" fill="#f39c12" stroke="#000000"
                                                            stroke-miterlimit="10" points="640.3,558.8 607.2,546.1 649.2,447.7
       681.4,462.1 		" />
                                                        <polygon id="T56" fill="#f39c12" stroke="#000000"
                                                            stroke-miterlimit="10" points="714.3,475.3 672.3,573 640.3,558.8
       681.4,462.1 		" />
                                                        <polygon id="T57" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" points="746.7,489.7 714.3,475.3 672.3,573
       705.1,587.6 		" />
                                                        <polygon id="T58" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" points="738.3,600.4 705.1,587.6 746.7,489.7
       779.3,503.6 		" />
                                                        <polygon id="T59" fill="#f39c12" stroke="#000000"
                                                            stroke-miterlimit="10" points="811.7,516.6 770.2,614.5 738.3,600.4
       779.3,503.6 		" />
                                                        <polygon id="T60" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" points="803.3,628.7 770.2,614.5 811.7,516.6
       844.6,531.2 		" />
                                                        <polygon id="T61" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" points="835.5,642.4 803.3,628.7 844.6,531.2
       877.2,545.2 		" />
                                                        <polygon id="T62" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" points="868.1,656 835.5,642.4 877.2,545.2
       910.1,558.6 		" />
                                                        <polygon id="T63" fill="#dd4b39" stroke="#000000"
                                                            stroke-miterlimit="10" points="901.5,669.7 868.1,656 910.1,558.6
       942.7,572.3 		" />
                                                        <polygon id="T64" fill="#dd4b39" stroke="#000000"
                                                            stroke-miterlimit="10" points="975.4,586.2 942.7,572.3 901.5,669.7
       933.1,683.9 		" />
                                                        <polygon id="T65" fill="#dd4b39" stroke="#000000"
                                                            stroke-miterlimit="10" points="1007.8,600.1 975.4,586.2 933.1,683.9
       966,698.3 		" />
                                                        <polygon id="T66" fill="#dd4b39" stroke="#000000"
                                                            stroke-miterlimit="10" points="998.4,711.5 966,698.3 1007.8,600.1
       1040.4,613.8 		" />
                                                        <polygon id="T67" fill="#dd4b39" stroke="#000000"
                                                            stroke-miterlimit="10" points="1072.6,627.5 1040.4,613.8 998.4,711.5
       1031.8,725.2 		" />
                                                        <polygon id="T68" fill="#dd4b39" stroke="#000000"
                                                            stroke-miterlimit="10" points="1106.4,641.4 1072.6,627.5 1031.8,725.2
       1063.9,739.8 		" />
                                                        <path id="T69" fill=" #b2babb " stroke="#000000"
                                                            stroke-miterlimit="10" d="M1096.3,753l-32.4-13.2l42.5-98.4c0,0,12,10.1,10.8,17
       s-24.5,56.4-13.9,91.2c5.3,17.4,16.4,42,39.8,57.8l-2.2,7l-59.8-24.7L1096.3,753z" />
                                                        <path id="T70" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" d="M1055.3,851.2l25.9-61.4l59.8,24.7l-19.9,45.4
       c0,0-7.6,15.9-22.6,9.6S1055.3,851.2,1055.3,851.2z" />
                                                        <polygon id="T71" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" points="1063.9,739.8 1023.1,837.5 1055.3,851.2
       1096.3,753 		" />
                                                        <polygon id="T72" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" points="1031.8,725.2 990,823.3 1023.1,837.5
       1063.9,739.8 		" />
                                                        <polygon id="T73" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" points="998.4,711.5 957.6,809.2 990,823.3
       1031.8,725.2 		" />
                                                        <polygon id="T74" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" points="966,698.3 924.7,795.7 957.6,809.2
       998.4,711.5 		" />
                                                        <polygon id="T75" fill="#dd4b39" stroke="#000000"
                                                            stroke-miterlimit="10" points="933.1,683.9 892.1,781.8 924.7,795.7
       966,698.3 		" />
                                                        <polygon id="T76" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" points="859.5,768.1 901.5,669.7 933.1,683.9
       892.1,781.8 		" />
                                                        <polygon id="T77" fill="#f39c12" stroke="#000000"
                                                            stroke-miterlimit="10" points="868.1,656 827.1,754.2 859.5,768.1
       901.5,669.7 		" />
                                                        <polygon id="T78" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" points="835.5,642.4 794.4,740.3 827.1,754.2
       868.1,656 		" />
                                                        <polygon id="T79" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" points="803.3,628.7 762,726.1 794.4,740.3
       835.5,642.4 		" />
                                                        <polygon id="T80" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" points="770.2,614.5 729.6,712.9 762,726.1
       803.3,628.7 		" />
                                                        <polygon id="T81" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" points="738.3,600.4 696.5,698.8 729.6,712.9
       770.2,614.5 		" />
                                                        <polygon id="T82" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" points="705.1,587.6 664.1,684.4 696.5,698.8
       738.3,600.4 		" />
                                                        <polygon id="T83" fill="#dd4b39" stroke="#000000"
                                                            stroke-miterlimit="10" points="672.3,573 705.1,587.6 664.1,686.1
       631.2,671.2 		" />
                                                        <polygon id="T84" fill="#dd4b39" stroke="#000000"
                                                            stroke-miterlimit="10" points="640.3,558.8 598.8,656.8 631.2,671.2
       672.3,573 		" />
                                                        <polygon id="T85" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" points="607.2,546.1 640.3,558.8 598.8,656.8
       565.9,643.3 		" />
                                                        <circle id="ESPACIO_86" fill="#7B7C7C" stroke="#000000"
                                                            stroke-miterlimit="10" cx="1199.3" cy="725.3" r="39.1" />
                                                        <path id="ZONA_VERDE_87" fill=" #b2babb " stroke="#000000"
                                                            stroke-miterlimit="10" d="M1179.4,821.3l-3.4,8.8l59.5,23.8l15.4-35
       l31.9,14.2l41.8-98.4c0,0-9.6-5.3-15.8,0.2s-7.3,9.3-23.5,39.6C1268.2,806.1,1222.3,833.8,1179.4,821.3z" />
                                                        <path id="T88" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" d="M1208.9,916.4l26.6-62.6L1176,830l-19.9,47
       c0,0-4.7,12.9,10.1,21.1S1208.9,916.4,1208.9,916.4z" />
                                                        <polygon id="T89" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" points="1282.8,832.9 1241.5,930.1 1208.9,916.4
       1250.9,818.8 		" />
                                                        <polygon id="T90" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" points="1315.2,845.9 1282.8,832.9 1241.5,930.1
       1274.2,944 		" />
                                                        <polygon id="T91" fill=" #dd4b39 " stroke="#000000"
                                                            stroke-miterlimit="10" points="1348.6,859.6 1315.2,845.9 1274.2,944
       1305.6,957.5 		" />
                                                        <polygon id="T92" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" points="1381.5,874.2 1348.6,859.6 1306.8,958
       1339.2,971.6 		" />
                                                        <polygon id="T93" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" points="1371.9,985.6 1339.2,971.6 1381.5,874.2
       1413.4,887.6 		" />
                                                        <polygon id="T94" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" points="1451.1,903.2 1413.4,887.6 1371.9,985.6
       1409.3,1001.4 		" />
                                                        <polygon id="T95" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" points="1454.9,790 1413.4,887.6 1451.1,903.2
       1492.3,805.8 		" />
                                                        <polygon id="T96" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" points="1422.5,776 1381.5,874.2 1413.4,887.6
       1454.9,790 		" />
                                                        <polygon id="T97" fill=" #dd4b39 " stroke="#000000"
                                                            stroke-miterlimit="10" points="1389.4,761.9 1348.6,859.6 1381.5,874.2
       1422.5,776 		" />
                                                        <polygon id="T98" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" points="1357.2,748.4 1315.2,845.9 1348.6,859.6
       1389.4,761.9 		" />
                                                        <polygon id="T99" fill="#dd4b39" stroke="#000000"
                                                            stroke-miterlimit="10" points="1324.6,734.5 1282.8,832.9 1315.2,845.9
       1357.2,748.4 		" />
                                                        <path id="T100" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" d="M1492.3,805.8l-19.2,45l88.3,37.1l13-30
       c0,0,3.8-14.9-6.7-19.7S1492.3,805.8,1492.3,805.8z" />
                                                        <polygon id="T101" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" points="1458.1,886.7 1473.1,850.8 1561.5,887.9
       1546.1,924.1 		" />
                                                        <polygon id="T102" fill="#f39c12" stroke="#000000"
                                                            stroke-miterlimit="10" points="1530.7,960.4 1442.7,922.9 1458.1,886.7
       1546.1,924.1 		" />
                                                        <polygon id="T103" fill="#f39c12" stroke="#000000"
                                                            stroke-miterlimit="10" points="1515.4,996.6 1427.1,959.5 1442.7,922.9
       1530.7,960.4 		" />
                                                        <path id="T104" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" d="M1409.3,1001.4l17.9-41.9l88.2,37.1l-11,25.9
       c0,0-2.3,15.4-25,8.6L1409.3,1001.4z" />
                                                        <path id="T105" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" d="M1557.1,980l45.6,19.4l-33.1,72.2l-32.2-13.9
       c0,0-10.6-7.2-4.8-20.4S1557.1,980,1557.1,980z" />
                                                        <polygon id="T106" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" points="1647.6,1017.5 1602.7,999.5 1569.6,1073.2
       1610.4,1089.2 		" />
                                                        <polygon id="T107" fill=" #dd4b39 " stroke="#000000"
                                                            stroke-miterlimit="10" points="1571.8,945.5 1557.1,980 1647.6,1017.5
       1665.4,984.4 		" />
                                                        <polygon id="T108" fill=" #dd4b39 " stroke="#000000"
                                                            stroke-miterlimit="10" points="1585.9,911.9 1571.8,945.5 1665.4,984.4
       1683.1,951 		" />
                                                        <polygon id="T109" fill=" #dd4b39 " stroke="#000000"
                                                            stroke-miterlimit="10" points="1699.5,919.8 1600.1,878.8 1585.9,911.9
       1683.1,951 		" />
                                                        <polygon id="T110" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" points="1713.9,888.1 1699.5,919.8 1600.1,878.8
       1613.5,846.8 		" />
                                                        <polygon id="T111" fill="#00a65a" stroke="#000000"
                                                            stroke-miterlimit="10" points="1727.5,857.4 1713.9,888.1 1613.5,846.8
       1627.5,814.2 		" />
                                                        <polygon id="T112" fill=" #dd4b39 " stroke="#000000"
                                                            stroke-miterlimit="10" points="1739.5,824.8 1641.1,782 1627.5,814.2
       1727.5,857.4 		" />
                                                        <polygon id="T113" fill="#f39c12" stroke="#000000"
                                                            stroke-miterlimit="10" points="1745.3,787.8 1744.6,811.3 1739.5,824.8
       1641.1,782 1655.5,749.2 		" />
                                                        <polygon id="T114" fill=" #b2babb " stroke="#000000"
                                                            stroke-miterlimit="10" points="1669.2,715.8 1655.5,749.2 1746,789.3
       1747.2,752.8 1798.1,587.4 1726.8,551.9 1638.7,550.4 1611.6,556.9 		" />

                                                    </g>
                                                </switch>

                                            </svg>
                                            <!-- aqui va los datos svg -->
                                        </div>
                                        <!-- /.box-body-->
                                       
                                    </div>
                                    <!-- /.box -->
                                    <!-- /.chart-responsive -->
                                </div>
                                <!-- /.col -->
                                <div class="col-md-4">
                                    <p class="text-center">
                                        <strong>LOTE 5</strong>
                                    </p>
                                    <p>Far far away, behind the word mountains, far from the
                                        countries Vokalia and Consonantia, there live the blind
                                        texts. Separated they live in Bookmarksgrove right at</p>

                                    <p>the coast of the Semantics, a large language ocean.
                                        A small river named Duden flows by their place and supplies
                                        it with the necessary regelialia. It is a paradisematic
                                        country, in which roasted parts of sentences fly into
                                        your mouth.</p>
                                    <td>
                                        <a href="descripcionLote"><button type="button"
                                                class="btn btn-block btn-warning">Ver más</button></a>
                                    </td>
                                </div>
                                <div class="col-md-4"></div>
                                <div class="col-md-4"></div>
                                <div class="col-md-4"></div>
                                <p />
                                <p />
                                <div class="col-md-4">
                                    <p class="text-center">
                                        <strong>Caracteristica del Mapa colores</strong>
                                    </p>
                                    <div class="direct-chat-text" id="letra" style="background-color:#00a65a">
                                        Los sectores Disponibles
                                    </div>
                                    <div class="direct-chat-text" id="letra" style="background-color:#f39c12">
                                        Los sectores Reservados
                                    </div>
                                    <div class="direct-chat-text" id="letra" style="background-color:#dd4b39">
                                        Los sectores no Disponibles
                                    </div>
                                    <div class="direct-chat-text" id="letra" style="background-color:#b2babb">
                                        Este color representa los sectores publicos o verdes
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>

                            <!-- /.row -->
                        </div>
                        <!-- /.box-footer -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>

    </div>
@endsection
