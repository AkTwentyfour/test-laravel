<footer style="background-color: rgb(1, 1, 37); min-height: 50vh; margin-top :200px;">
    <div class="container pb-5 container-footer gx-0">
        <div class="row gx-0">
            <div class="col-xl-3 col-md-12 mt-5">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <h5 class="nav-link mb-3" style="color: white;">Information</h5>
                    </li>
                    <li class="nav-item footer-link-hover">
                        <a class="nav-link" aria-current="page" href="/information#information">About Guci</a>
                    </li>
                    <li class="nav-item footer-link-hover">
                        <a class="nav-link" href="/information#information">How To Order</a>
                    </li>
                    <li class="nav-item footer-link-hover">
                        <a class="nav-link" href="/information#information">Ticket Information</a>
                    </li>
                </ul>
            </div>
            <div class="col-xl-3 col-md-12 mt-5">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <h5 class="nav-link mb-3" style="color: white;">Ticket</h5>
                    </li>
                    <li class="nav-item footer-link-hover">
                        <a class="nav-link" href="/ticket#ticket">Ticket Masuk Guci</a>
                    </li>
                    <li class="nav-item footer-link-hover">
                        <a class="nav-link" href="/ticket#ticket">Baroon Hill</a>
                    </li>
                    <li class="nav-item footer-link-hover">
                        <a class="nav-link" href="/ticket#ticket">Camping Ground</a>
                    </li>
                </ul>
            </div>
            <div class="col-xl-3 col-sm-12 mt-5">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <h5 class="nav-link mb-3" style="color: white;">Address</h5>
                    </li>
                    <li class="nav-item footer-link-hover">
                        <a class="nav-link" href="#">Kecamatan Bumijawa</a>
                    </li>
                    <li class="nav-item footer-link-hover">
                        <a class="nav-link" href="#">Kabupaten Tegal</a>
                    </li>   
                    <li class="nav-item footer-link-hover">
                        <a class="nav-link" href="#">Jawa-Tengah, Indonesia</a>
                    </li>
                </ul>
            </div>
            <div class="col-xl-3 col-sm-12 mt-5">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <h5 class="nav-link mb-3" style="color: white;">Contact Us</h5>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-wrap d-flex justify-content-start align-items-center footer-link-hover" href="#">
                            <div class="me-2 img-wrap"><img src="{{ asset('aset/gmail.png') }}" height="25">
                            </div>
                            <div class="link">WonderfulGuci@gmail.com</div>
                        </a>
                    </li>
                    <li class="nav-item nav-item-wrap">
                        <a class="nav-link link-wrap d-flex justify-content-start align-items-center footer-link-hover" href="#">
                            <div class="me-2 img-wrap"><img src="{{ asset('aset/instagram.png') }}" height="25">
                            </div>
                            <div class="link">Wonderful_Guci</div>
                        </a>
                    </li>
                    <li class="nav-item nav-item-wrap">
                        <a class="nav-link link-wrap d-flex justify-content-start align-items-center footer-link-hover" href="#">
                            <div class="me-2 img-wrap"><img src="{{ asset('aset/whatsapp.png') }}" height="25">
                            </div>
                            <div class="link">+62 123 234 567</div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container d-flex justify-content-center align-items-center "
        style="height: 60px; border-top: 2px solid #53589D;">
        <div style="color: #53589D;">Copyright Wonderful Guci Team. All Rights Reserved.</div>
    </div>
</footer>


<style>
    .footer-link-hover .nav-link,
    .link {
        color: #53589D;
        transition: all .2s ease-in-out;
        width: max-content;
    }
    .footer-link-hover .nav-link:hover,
    .link:hover {
        color: white;
    }
</style>