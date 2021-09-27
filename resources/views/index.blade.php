@extends("template")
@section('title')
Home
@endsection

@section("content")

{{-- info Section --}}
<div class='container'>
    <div class="container">
        <div class="row d-flex justify-content-around" align='center'>
            <div class="col-lg-3 card">
                <div class="info-box mb-4">
                    <i class="fas fa-map-marked-alt fa-lg"></i>
                    <h3>Our Address</h3>
                    <p>Jl. Jendral Sudirman No. 55</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 card">
                <div class="info-box  mb-4">
                    <i class="fas fa-envelope fa-lg"></i>
                    <h3>Email Us</h3>
                    <p>contact@example.com</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 card">
                <div class="info-box  mb-4">
                    <i class="fas fa-phone fa-lg"></i>
                    <h3>Call Us</h3>
                    <p>(0380) 833198</p>
                </div>
            </div>
        </div>

        <div class="row" data-aos="fade-up" style="margin: 10px">
            <div class="col-lg-6 ">
                <iframe class="mb-4 mb-lg-0"
                    src="https://maps.google.com/maps?q=Jl.%20Jenderal%20Sudirman%20No.55,%20Nunleu,%20Kec.%20Kota%20Raja,%20Kota%20Kupang&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
            </div>
        </div>

    </div>
</div>
{{-- end info --}}

<footer id="footer" style="background-color:black;color:white;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6" style="margin:10px">
                <div class="card-black" style="padding:15px;border:2px solid white;border-radius:5%">
                    <h3>Pelita Group</h3>
                    <p>
                        Jl. Jendral Sudirman No. 55 <br>
                        Kec. Kota Raja, Kota Kupang, NTT<br><br>
                        <strong>Phone:</strong> +62 811 3811 962<br>
                        <strong>Email:</strong> info@example.com<br>
                    </p>
                    <div class="social-links mt-3" style="margin-bottom: 5px">
                        <a href="#" class="facebook"><i class="fab fa-facebook-f fa-lg"></i></a>
                        <a href="#" class="instagram" style="margin-left:5px"><i class="fab fa-instagram fa-lg"></i></i></a>
                    </div>
                </div>
            </div>

            {{-- <div class="col-lg-3 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Services</h4>
                <ul>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                </ul>
            </div> --}}
        </div>
    </div>
</footer>
@endsection
