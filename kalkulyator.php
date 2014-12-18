<?php
/*
Template Name: kalkulyator
*/
?>

<div id="page">

    <div id="columns">
        <div id="mainContent">

            <div class="local-tasks"></div>


            <div id="content">

                <div class="region region-content">
                    <div id="block-system-main" class="block block-system">
                        <div class="block-inner">


                            <div class="content">
                                <div id="node-20" class="node node-page" about="/kalkulyator" typeof="foaf:Document">
                                    <div class="node-inner clearfix">



                                        <div class="node-content">
                                            <div class="field field-name-body field-type-text-with-summary field-label-hidden">
                                                <div class="field-item even" property="content:encoded"><div class="field-item even" property="content:encoded"><div id="calculator-box" style="display: block;">
                                                            <div class="clear"></div>
                                                            <div id="area">

                                                                <!--window-->
                                                                <div id="area-window" class="activeArea">

                                                                    <!---->
                                                                    <div id="type-structures"><p class="circle">1</p><span>Тип конструкции</span></div>
                                                                    <div id="structures">
                                                                        <div id="univalve-window" class="radio">
                                                                            <div class="title">
                                                                                <input class="form-radio" id="one" name="first" type="radio" value="0">
                                                                                <label for="one"></label>
                                                                            </div>

                                                                        </div>
                                                                        <div id="double-wing-window" class="radio">
                                                                            <div class="title">
                                                                                <input class="form-radio" id="two" name="first" checked="" type="radio" value="100">
                                                                                <label for="two"></label>
                                                                            </div>

                                                                        </div>
                                                                        <div id="tricuspid-window" class="radio">
                                                                            <div class="title">
                                                                                <input class="form-radio" id="three" name="first" type="radio" value="200">
                                                                                <label for="three"></label>
                                                                            </div>
                                                                        </div>
                                                                        <div id="wind1" class="radio">
                                                                            <div class="title">
                                                                                <input type="radio" class="form-radio" id="id1" name="first" />
                                                                                <label for="id1"></label></div>
                                                                        </div>
                                                                        <div id="wind2" class="radio">
                                                                            <div class="title">
                                                                                <input type="radio" class="form-radio" id="id2" name="first" />
                                                                                <label for="id2"></label></div>
                                                                        </div>
                                                                        <div id="wind3" class="radio">
                                                                            <div class="title">
                                                                                <input type="radio" class="form-radio" id="id3" name="first" />
                                                                                <label for="id3"></label></div>
                                                                        </div>
                                                                        <div id="wind4" class="radio">
                                                                            <div class="title">
                                                                                <input type="radio" class="form-radio" id="id4" name="first" />
                                                                                <label for="id4"></label></div>
                                                                        </div>
                                                                        <div id="wind5" class="radio">
                                                                            <div class="title">
                                                                                <input type="radio" class="form-radio" id="id5" name="first" />
                                                                                <label for="id5"></label></div>
                                                                        </div>
                                                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/windows.png" class="windows" alt="" />
                                                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/dver.jpg" class="dver" alt="">
                                                                        <label class="lab1" for="one">Глухое окно</label>
                                                                        <label class="lab2" for="one">Арочное окно</label>
                                                                        <label class="lab3" for="one">Арочное окно</label>
                                                                        <label class="lab4" for="one">Двухстворчатое окно</label>
                                                                        <label class="lab5" for="one">Трехстворчатое окно</label>
                                                                        <label class="lab6" for="one">Балконное окно</label>
                                                                        <label class="lab7" for="one">Гармошка</label>
                                                                        <label class="lab8" for="one">Дверь</label>
                                                                    </div>
                                                                    <!---->

                                                                    <div id="calculator-left-area">
                                                                        <!---->
                                                                        <div id="size">
                                                                            <div id="total-size">
                                                                                <div class="title"><div class="circle">2</div><span>Размер</span></div>
                                                                                <div class="v"><span>высота</span> <input type="text" id="total-size-height" value="1400"> мм</div>
                                                                                <div class="v"><span>ширина</span> <input type="text" id="total-size-width" value="1300"> мм</div>
                                                                            </div>
                                                                        </div>
                                                                        <!---->

                                                                        <div id="select">

                                                                            <div id="paket" class="s">
                                                                                <div class="title"><div class="circle">3</div><span>Стеклопакет</span></div>
                                                                                <select id="farnitura">
                                                                                    <option value="1690">Однокамерный</option>
                                                                                    <option value="1840">Двухкамерный</option>

                                                                                </select>
                                                                            </div>

                                                                            <div id="prof" class="s">
                                                                                <div class="title"><div class="circle">4</div><span>Профиль</span></div>
                                                                                <select id="profil">
                                                                                    <option value="2350">KBE 58мм</option>
                                                                                    <option value="2500">KBE 70мм</option>
                                                                                    <option value="2650">Novotex 58мм</option>
                                                                                    <option value="2800">Novotex 70мм</option>
                                                                                    <option value="2950">Exprof 46мм</option>
                                                                                    <option value="3100">Exprof 58мм</option>
                                                                                    <option value="3250">Exprof 70мм</option>
                                                                                </select>
                                                                            </div>

                                                                            <div class="clear"></div>

                                                                            <div id="furnitura" class="s">
                                                                                <div class="title"><div class="circle">5</div><span>Фурнитура</span></div>
                                                                                <select id="steklopaket">
                                                                                    <option value="0" selected="">Roto</option>
                                                                                    <option value="400">VHC</option>
                                                                                </select>
                                                                            </div>

                                                                        </div>

                                                                    </div>

                                                                    <div id="calculator-right-area">

                                                                        <div class="clear"></div>

                                                                        <div id="additionally" class="s chek">
                                                                            <div class="title"><div class="circle">6</div><span>Опции</span></div>
                                                                            <div class="clear"></div>

                                                                            <div id="opt1" class="radio check">
                                                                                <div class="title">
                                                                                    <input type="checkbox" class="form-radio" id="inpOp1" name="first" />
                                                                                    <label for="inpOp1">Подоконник</label>
                                                                                </div>
                                                                            </div>
                                                                            <div id="opt2" class="radio check">
                                                                                <div class="title">
                                                                                    <input type="checkbox" class="form-radio" id="inpOp2" name="first" />
                                                                                    <label for="inpOp2">Отлив</label>
                                                                                </div>
                                                                            </div>
                                                                            <div id="opt3" class="radio check">
                                                                                <div class="title">
                                                                                    <input type="checkbox" class="form-radio" id="inpOp3" name="first" />
                                                                                    <label for="inpOp3">Откосы</label>
                                                                                </div>
                                                                            </div>
                                                                            <div id="opt4" class="radio check">
                                                                                <div class="title">
                                                                                    <input type="checkbox" class="form-radio" id="inpOp4" name="first" />
                                                                                    <label for="inpOp4">Москитная сетка</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="clear"></div>
                                                                        <div id="delivery" class="s chek">
                                                                            <div class="title"><div class="circle">7</div><span>Услуги</span></div>

                                                                            <div id="optSer1" class="radio">
                                                                                <div class="title">
                                                                                    <input type="checkbox" class="form-radio" id="inpSer1" name="first" />
                                                                                    <label for="inpSer1">Доставка</label>
                                                                                </div>
                                                                            </div>
                                                                            <div id="optSer2" class="radio">
                                                                                <div class="title">
                                                                                    <input type="checkbox" class="form-radio" id="inpSer2" name="first" />
                                                                                    <label for="inpSer2">Монтаж</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <!--<div id="resultCalculator-window"></div>
                                                                    <div id="resultSend"></div>-->
                                                                </div>
                                                                <!--window /-->

                                                            </div>
                                                            <div class="clear"></div>
                                                        </div></div></div>
                                            </div>
                                        </div>

                                        <div class="node-links">
                                        </div>


                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div id="block-webform-client-block-20" class="block block-webform">
                        <div class="block-inner">


                            <div class="content">
                                <form class="webform-client-form" enctype="multipart/form-data" action="/kalkulyator" method="post" id="webform-client-form-20--2" accept-charset="UTF-8"><div><div class="form-item webform-component webform-component-textfield" id="webform-component-vashe-imya">
                                            <input type="text" id="edit-submitted-vashe-imya--2" name="submitted[vashe_imya]" value="" size="60" maxlength="128" class="form-text" />
                                        </div>
                                        <div class="form-item webform-component webform-component-textfield" id="webform-component-vash-e-mail">
                                            <input type="text" id="edit-submitted-vash-e-mail--2" name="submitted[vash_e_mail]" value="" size="60" maxlength="128" class="form-text required" />
                                        </div>
                                        <div class="form-item webform-component webform-component-textfield" id="webform-component-vash-telefon">
                                            <input type="text" id="edit-submitted-vash-telefon--2" name="submitted[vash_telefon]" value="" size="60" maxlength="128" class="form-text" />
                                        </div>
                                        <input type="hidden" name="details[sid]" value="" />
                                        <input type="hidden" name="details[page_num]" value="1" />
                                        <input type="hidden" name="details[page_count]" value="1" />
                                        <input type="hidden" name="details[finished]" value="0" />
                                        <input type="hidden" name="form_build_id" value="form-H-0NZTWBz2X5IKVP4JEHwyAYCIOTOumvmDpCjustBxc" />
                                        <input type="hidden" name="form_id" value="webform_client_form_20" />
                                        <div class="form-actions form-wrapper" id="edit-actions--2"><input type="submit" id="edit-submit--2" name="op" value="РАССЧИТАТЬ СТОИМОСТЬ" class="form-submit" /></div></div></form>		</div>

                        </div>
                    </div>
                </div>

            </div>
        </div><!-- /main-content -->
    </div> <!-- /columns -->

</div> <!-- /page -->


<div id="secondaryContent">


</div>