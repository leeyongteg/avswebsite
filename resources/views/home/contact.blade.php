@extends('app_front')

@section('content')
    <section class="contact-section">
        <!----header end----->
        <div class="page_header_default style_one ">
            <div class="parallax_cover">
                <div class="simpleParallax"><img src="assets/images/page-header-default.jpg" alt="bg_image"
                        class="cover-parallax"></div>
            </div>
            <div class="page_header_content">
                <div class="auto-container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="banner_title_inner">
                                <div class="title_page">
                                    Contact
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="breadcrumbs creote">
                                <ul class="breadcrumb m-auto">
                                    <li><a href="index-2.html">Acceuil</a></li>
                                    <li class="active">Contact</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!----header----->
        <!--===============spacing==============-->
        <div class="pd_top_90"></div>
        <!--===============spacing==============-->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 mb-5 mb-lg-5 mb-xl-0">
                    <div class="contact_form_box_all type_one">
                        <div class="contact_form_box_inner">
                            <div class="contact_form_shortcode">
                                <form id="contact-form" method="post" action="" role="form">

                                    <div class="messages"></div>

                                    <div class="controls">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label> Nom<br /></label>
                                                    <input type="text" name="name" placeholder="Votre Nom *"
                                                        required="required" data-error="Entrez votre Nom">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label> Email<br /></label>
                                                    <input type="text" name="email" required="required"
                                                        placeholder="Email *" data-error="Entrez votre Email Id">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label> Subject<br /></label>
                                                    <input type="text" name="subject" required="required"
                                                        placeholder=" Subject  (Optionel)">
                                                </div>
                                            </div>


                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label> Message<br /></label>
                                                    <textarea name="message" placeholder="Informations supplementaires... (Optionel) " rows="3" required="required"
                                                        data-error="Enrtez votre message."></textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                <div class="form-group mg_top apbtn">
                                                    <button class="theme_btn" type="submit">Envoyer</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 pd_left_30">
                    <div class="title_all_box style_one dark_color">
                        <div class="title_sections left">
                            <div class="before_title">Nos contacts</div>
                            <h2>Reach Our Expert Team</h2>
                            <p>Envoyez un message à l'aide du formulaire ci-dessous. Si votre demande est urgente, veuillez
                                utiliser les coordonnées ci-dessous.
                                coordonnées de contact.</p>
                        </div>
                    </div>

                    <div class="contact_box_content style_one">
                        <div class="contact_box_inner icon_yes">
                            <div class="icon_bx">
                                <span class=" icon-placeholder"></span>
                            </div>
                            <div class="contnet">
                                <h3> Addresse </h3>
                                <p>
                                    Adre
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--===============spacing==============-->
                    <div class="pd_bottom_15"></div>
                    <!--===============spacing==============-->
                    <div class="contact_box_content style_one">
                        <div class="contact_box_inner icon_yes">
                            <div class="icon_bx">
                                <span class="icon-phone-call"></span>
                            </div>
                            <div class="contnet">
                                <h3> Information générales </h3>
                                <p>
                                    Téléphone: +237 xxx xxx &amp; Email: info@avscam.com
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--===============spacing==============-->
                    <div class="pd_bottom_15"></div>
                    <!--===============spacing==============-->
                    <div class="contact_box_content style_one">
                        <div class="contact_box_inner icon_yes">
                            <div class="icon_bx">
                                <span class="fa fa-clock-o"></span>
                            </div>
                            <div class="contnet">
                                <h3> Heures d'ouverture </h3>
                                <p>
                                    Lun-Ven: 09.00 to 07.00 (Dim: Fermé)
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--===============spacing==============-->
                    <div class="pd_bottom_40"></div>
                    <!--===============spacing==============-->
                    <div class="social_media_v_one style_two">
                        <ul>
                            <li>
                                <a href="#"> <span class="fa fa-facebook"></span>
                                    <small>facebook</small>
                                </a>
                            </li>
                            <li>
                                <a href="#"> <span class="fa fa-twitter"></span>
                                    <small>twitter</small>
                                </a>
                            </li>
                            <li>
                                <a href="#"> <span class="fa fa-skype"></span>
                                    <small>skype</small>
                                </a>
                            </li>
                            <li>
                                <a href="#"> <span class="fa fa-instagram"></span>
                                    <small>instagram</small>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--===============spacing==============-->
        <div class="pd_top_70"></div>
        <!--===============spacing==============-->
    </section>
    <section class="contact-map-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <section class="map-section">
                        <!--Map Outer-->
                        <div class="map-outer">
                            <div class="google-map" id="contact-google-map" data-map-lat="44.231172"
                                data-map-lng="-76.485954" data-icon-path="assets/images/pin.png"
                                data-map-title="Alabama, USA" data-map-zoom="12"
                                data-markers='{
                      "marker-1": [42.231172, -84.485954, "<h4>Branch Office</h4><p>4/99 Alabama, USA</p>"]
                      }'>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>
        <!--===============spacing==============-->
        <div class="pd_top_90"></div>
        <!--===============spacing==============-->
    </section>
@endsection
