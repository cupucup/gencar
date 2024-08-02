<footer class="bg">
    <div class="website-footer" id="foot-accordiun">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-4 col-md-5 text-start">
                    <div class="our-information">
                        <a class="navbar-brand me-auto d-flex justify-content-start gap-3 align-items-center" href="/"
                           aria-label="logo-image">
                            <img loading="lazy" src="{{ asset('assets-web/img/logo.png') }}" alt="logo"
                                 style="width: auto; height: 3em;">
                            <img loading="lazy" src="{{ asset('assets-new/images/logo-gencar-black.png') }}" alt="logo"
                                 style="width: auto; height: 2em;">
                        </a>
                        <p class="web-about">GENCAR SOP-AP (Gerakan Penataan Administrasi Dengan Standar Operasional
                            Prosedur - Administrasi Pemerintahan) adalah inisiatif untuk meningkatkan kinerja dan
                            administrasi ASN (Aparatur Sipil Negara) di lingkup Dinas PUPR (Pekerjaan Umum dan Perumahan
                            Rakyat).</p>
                        <div class="social-icon">
                            <a href="https://web.facebook.com/profile.php?id=61562413270805" aria-label="social-icon">
                                <i class="icon fa fa-facebook"></i></a>
                            <a href="https://www.youtube.com/@DinasPUPRHaltim" aria-label="social-icon">
                                <i class="icon fa fa-youtube"></i></a>
                            </a>
                            <a href="https://www.tiktok.com/@dinaspuprhaltim" aria-label="social-icon">
                                <i class="icon">
                                    <svg width="15px" height="15px" viewBox="0 0 512 512" id="icons"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M412.19,118.66a109.27,109.27,0,0,1-9.45-5.5,132.87,132.87,0,0,1-24.27-20.62c-18.1-20.71-24.86-41.72-27.35-56.43h.1C349.14,23.9,350,16,350.13,16H267.69V334.78c0,4.28,0,8.51-.18,12.69,0,.52-.05,1-.08,1.56,0,.23,0,.47-.05.71,0,.06,0,.12,0,.18a70,70,0,0,1-35.22,55.56,68.8,68.8,0,0,1-34.11,9c-38.41,0-69.54-31.32-69.54-70s31.13-70,69.54-70a68.9,68.9,0,0,1,21.41,3.39l.1-83.94a153.14,153.14,0,0,0-118,34.52,161.79,161.79,0,0,0-35.3,43.53c-3.48,6-16.61,30.11-18.2,69.24-1,22.21,5.67,45.22,8.85,54.73v.2c2,5.6,9.75,24.71,22.38,40.82A167.53,167.53,0,0,0,115,470.66v-.2l.2.2C155.11,497.78,199.36,496,199.36,496c7.66-.31,33.32,0,62.46-13.81,32.32-15.31,50.72-38.12,50.72-38.12a158.46,158.46,0,0,0,27.64-45.93c7.46-19.61,9.95-43.13,9.95-52.53V176.49c1,.6,14.32,9.41,14.32,9.41s19.19,12.3,49.13,20.31c21.48,5.7,50.42,6.9,50.42,6.9V131.27C453.86,132.37,433.27,129.17,412.19,118.66Z"/>
                                    </svg>
                                </i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 text-start">
                    <div class="footer-links">
                        <h2 class="footer-title mob collapsed" data-bs-target="#links" data-bs-toggle="collapse">
                            Quick Links
                            <span class="footer-toggler"><img loading="lazy" src="assets/images/icons/arrow-footer.svg"
                                                              alt="arrow"></span>
                        </h2>
                        <ul id="links" class="collapse foot" data-bs-parent="#foot-accordiun">
                            <li><a href="{{ route('home') }}" class="text">Beranda</a></li>
                            <li><a href="{{ route('visi-misi') }}" class="text">Visi & Misi</a></li>
                            <li><a href="{{ route('struktur-organisasi') }}" class="text">Struktur Organisasi</a></li>
                            <li><a href="{{ route('profile-reformer') }}" class="text">Profile Reformer</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 text-start">
                    <div class="footer-links">
                        <h2 class="footer-title mob" data-bs-target="#contactus" data-bs-toggle="collapse">
                            Contact Us
                            <span class="footer-toggler"><img loading="lazy" src="assets/images/icons/arrow-footer.svg"
                                                              alt="arrow"></span>
                        </h2>
                        <ul id="contactus" class="collapse foot" data-bs-parent="#foot-accordiun">
                            <!-- <li class="contacts">
                                <i class="fa fa-phone"></i>
                                <div class="details">
                                    <p class="text"><a href="tel:++11253678958">+628x xxxx xxxx</a></p>
                                </div>
                            </li> -->
                            <li class="contacts">
                                <i class="fa fa-envelope"></i>
                                <div class="details">
                                    <p class="text"><a href="haltimdinaspupr@gmail.com">haltimdinaspupr@gmail.com</a></p>
                                </div>
                            </li>
                            <li class="contacts">
                                <i class="fa fa-map-marker"></i>
                                <div class="details">
                                    <p class="text location">Jl. Pusat Pemerintahan, Kecamatan Kota Maba. Halmahera Timur, <br> Prov. Maluku Utara, 97862</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 text-center text-lg-start">
                    <div class="footer-links">
                        <h2 class="footer-title">
                            Visitor
                        </h2>
                        <div class="footer-toggler">
                            <div class="visitor-count card">
                                <div class="card-body">
                                    <table style="width: 100%">
                                        {{--<tr>
                                            <td style="width: 50%;">Online</td>
                                            <td style="width: 50%; text-align: right;">{{ $todayVisits }}</td>
                                        </tr>--}}
                                        <tr>
                                            <td style="width: 70%;"><i class="fa fa-user"></i> Today</td>
                                            <td style="width: 30%; text-align: right;">{{ $visitor['today'] }}</td>
                                        </tr>
                                        <tr>
                                            <td style="width: 70%;"><i class="fa fa-users"></i> Total Visitor</td>
                                            <td style="width: 30%; text-align: right;">{{ $visitor['total'] }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        {{--<div class="footer-links">
                            <h2 class="footer-title">
                                Newsletter
                            </h2>
                            <div class="footer-toggler">
                                <p>Subscribe to our newsletter to get the latest News and offers..</p>
                                <form class="form-subscribe">
                                    <div class="input-group">
                                        <input type="email" name="email" class="form-control input-lg" placeholder="Email Address"
                                               required>
                                        <button class="btn-1 btn-success btn-lg" type="submit" aria-label="submit"><i
                                                class="fa fa-paper-plane text-light" aria-hidden="true"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right">
            <div class="container">
                <p class="copy-content">© 2024 <a href="#" class="web-name">Gencar SOP-AP</a>. All rights reserved.
                </p>
            </div>
        </div>
</footer>
