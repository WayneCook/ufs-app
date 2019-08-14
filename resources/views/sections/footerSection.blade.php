<footer class="container-fluid">
    <div class="container footer-container">
        <div class="row">
            <div class="col">
                <h5 class="font-weight-bold text-dark">INFORMATION</h5>
                <a class="footer-link" href="#about">About Us</a>
                <br>
                <a class="footer-link" href="{{ url('admin') }}">Admin</a>
            </div>
            <div class="col">
                <h5 class="font-weight-bold text-dark">SERVICES</h5>
                <a class="footer-links" href="#services">Repairs</a>
                <br>
                <a class="footer-links" href="#services">Parts</a>

                <br>
                <a class="footer-links" href="#services">Maintenance Plans</a>
            </div>
            <div class="col">
                <h5 class="font-weight-bold text-dark">CONTACT</h5>
                <span style="color: gray">562-450-4194</span>
                <br>
                <a class="footer-links" href="#contact">Form</a>
            </div>
        </div>
    </div>
</footer>
<div class="container-fluid copyright-container">
    <div class="container p-4 d-flex flex-column justify-content-center">
        <p class="rights"><span>©&nbsp; </span><span class="copyright-year">2019</span><span>&nbsp;</span><span>Universal Forklift Services</span></p>
    </div>
</div>
<a href="tel:562-450-4194">
    <div class="phone-icon-wrapper">
        @include('svgs/phone_regular');
    </div>
</a>
