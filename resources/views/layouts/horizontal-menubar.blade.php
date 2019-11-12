<div class="navbar-custom">
    <div class="container-fluid">

        <div id="navigation">

            <!-- Navigation Menu-->
            <ul class="navigation-menu">

                <li class="has-submenu">
                    <a href="index.html"><i class="icon-accelerator"></i> Dashboard</a>
                </li>

                <li class="has-submenu">
                    <a href="#"><i class="icon-pencil-ruler"></i> Tabel Dinamis <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                    <ul class="submenu">
                        <li class="has-submenu">
                            <a href="#">Kelola Master Tabel</a>
                            <ul class="submenu">
                                <li><a href="{{ route('tabeldinamis.msubjek') }}">Subjek</a></li>
                                <li><a href="{{ route('tabeldinamis.mindikator') }}">Indikator</a></li>
                                <li><a href="{{ route('tabeldinamis.mkarakteristik') }}">Krakteristik</a></li>
                                <li><a href="{{ route('tabeldinamis.mbaris') }}">Judul Baris</a></li>
                                <li><a href="{{ route('tabeldinamis.mperiode') }}">Periode</a></li>
                                <li><a href="{{ route('tabeldinamis.msatuan') }}">Satuan</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('tabeldinamis.inputtabeldinamis') }}">Input Data Tabel</a></li>
                    </ul>
                </li>

                <li class="has-submenu">
                    <a href="index.html"><i class="icon-accelerator"></i> Evaluasi Data</a>
                </li>

                <!-- <li class="has-submenu">
                    <a href="#"><i class="icon-pencil-ruler"></i> Tabel Dinamis <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                    <ul class="submenu megamenu">
                        <li>
                            <ul>
                                <li><a href="ui-alerts.html">Kelola Master Tabel</a></li>
                                <li><a href="ui-badge.html">Input Data Tabel</a></li>
                                <li><a href="ui-buttons.html">Buttons</a></li>
                                <li><a href="ui-cards.html">Cards</a></li>
                                <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                                <li><a href="ui-navs.html">Navs</a></li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                <li><a href="ui-modals.html">Modals</a></li>
                                <li><a href="ui-images.html">Images</a></li>
                                <li><a href="ui-progressbars.html">Progress Bars</a></li>
                                <li><a href="ui-pagination.html">Pagination</a></li>
                                <li><a href="ui-popover-tooltips.html">Popover & Tooltips</a></li>
                            </ul>
                        </li>

                        <li>
                            <ul>
                                <li><a href="ui-spinner.html">Spinner</a></li>
                                <li><a href="ui-carousel.html">Carousel</a></li>
                                <li><a href="ui-video.html">Video</a></li>
                                <li><a href="ui-typography.html">Typography</a></li>
                                <li><a href="ui-grid.html">Grid</a></li>
                            </ul>
                        </li>
                    </ul>
                </li> -->

                <!-- <li class="has-submenu">
                    <a href="#"><i class="icon-life-buoy"></i> Components <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                    <ul class="submenu">
                        <li class="has-submenu">
                            <a href="#">Email</a>
                            <ul class="submenu">
                                <li><a href="email-inbox.html">Inbox</a></li>
                                <li><a href="email-read.html">Email Read</a></li>
                                <li><a href="email-compose.html">Email Compose</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="calendar.html">Calendar </a>
                        </li>
                        <li class="has-submenu">
                            <a href="#">Forms</a>
                            <ul class="submenu">
                                <li><a href="form-elements.html">Form Elements</a></li>
                                <li><a href="form-validation.html">Form Validation</a></li>
                                <li><a href="form-advanced.html">Form Advanced</a></li>
                                <li><a href="form-editors.html">Form Editors</a></li>
                                <li><a href="form-uploads.html">Form File Upload</a></li>
                                <li><a href="form-mask.html">Form Mask</a></li>
                                <li><a href="form-summernote.html">Summernote</a></li>
                                <li><a href="form-xeditable.html">Form Xeditable</a></li>
                            </ul>
                        </li>

                        <li class="has-submenu">
                            <a href="#">Charts </a>
                            <ul class="submenu">
                                <li><a href="charts-morris.html">Morris Chart</a></li>
                                <li><a href="charts-chartist.html">Chartist Chart</a></li>
                                <li><a href="charts-chartjs.html">Chartjs Chart</a></li>
                                <li><a href="charts-flot.html">Flot Chart</a></li>
                                <li><a href="charts-c3.html">C3 Chart</a></li>
                                <li><a href="charts-other.html">Jquery Knob Chart</a></li>
                            </ul>
                        </li>

                        <li class="has-submenu">
                            <a href="#">Tables </a>
                            <ul class="submenu">
                                <li><a href="tables-basic.html">Basic Tables</a></li>
                                <li><a href="tables-datatable.html">Data Table</a></li>
                                <li><a href="tables-responsive.html">Responsive Table</a></li>
                                <li><a href="tables-editable.html">Editable Table</a></li>
                            </ul>
                        </li>

                        <li class="has-submenu">
                            <a href="#">Icons</a>
                            <ul class="submenu">
                                <li><a href="icons-material.html">Material Design</a></li>
                                <li><a href="icons-fontawesome.html">Font Awesome</a></li>
                                <li><a href="icons-outline.html">Outline Icons</a></li>
                                <li><a href="icons-themify.html">Themify Icons</a></li>
                            </ul>
                        </li>

                        <li class="has-submenu">
                            <a href="#">Maps</a>
                            <ul class="submenu">
                                <li><a href="maps-google.html"> Google Map</a></li>
                                <li><a href="maps-vector.html"> Vector Map</a></li>
                            </ul>
                        </li>

                    </ul>
                </li> -->

                <!-- <li class="has-submenu">
                    <a href="#"><i class="icon-diamond"></i> Advanced UI <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                    <ul class="submenu megamenu">
                        <li>
                            <ul>
                                <li><a href="advanced-alertify.html">Alertify</a></li>
                                <li><a href="advanced-rating.html">Rating</a></li>
                                <li><a href="advanced-nestable.html">Nestable</a></li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li><a href="advanced-rangeslider.html">Range Slider</a></li>
                                <li><a href="advanced-sweet-alert.html">Sweet-Alert</a></li>
                                <li><a href="advanced-lightbox.html">Lightbox</a></li>
                            </ul>
                        </li>
                    </ul>
                </li> -->

                <!-- <li class="has-submenu">
                    <a href="#"><i class="icon-paper-sheet"></i> Pages <i class="mdi mdi-chevron-down mdi-drop"></i></a>
                    <ul class="submenu megamenu">

                        <li>
                            <ul>
                                <li><a href="pages-pricing.html">Pricing</a></li>
                                <li><a href="pages-invoice.html">Invoice</a></li>
                                <li><a href="pages-timeline.html">Timeline</a></li>
                                <li><a href="pages-faqs.html">FAQs</a></li>
                                <li><a href="pages-maintenance.html">Maintenance</a></li>
                                <li><a href="pages-comingsoon.html">Coming Soon</a></li>
                                <li><a href="pages-starter.html">Starter Page</a></li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li><a href="pages-login.html">Login</a></li>
                                <li><a href="pages-register.html">Register</a></li>
                                <li><a href="pages-recoverpw.html">Recover Password</a></li>
                                <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                                <li><a href="pages-404.html">Error 404</a></li>
                                <li><a href="pages-500.html">Error 500</a></li>
                            </ul>
                        </li>
                    </ul>
                </li> -->

            </ul>
            <!-- End navigation menu -->
        </div>
        <!-- end #navigation -->
    </div>
    <!-- end container -->
</div>
