@extends('front.layout')
@section('content')
<main class="fw-main-row form-content">
    <div class="fw-container-fluid">
        <div class="fw-row">
            <div class="dark-bg fw-col-xs-12 fw-col-md-6"
                style="background-image: url({{ asset('asset/images/imgs/contact-bg.jpg') }}); margin-left: -15px;">
                <div style="max-width: 370px;margin: 0 auto;">
                    <h1>Contact Us</h1>
                    <div style="margin: 150px 0 330px;">
                        <h3>Reach Out To Us</h3>
                        <p><i>If you have any queries regarding our services, feel free to call or email us. Our
                                contact details are shared below: </i></p>
                        <h3>Address</h3>
                        <p><i>-------</i></p>
                        <h3>E-mail </h3>
                        <p><i>ces@cescollaborative.com</i></p>
                    </div>
                </div>
            </div>
            <div class="fw-col-xs-12 fw-col-md-6">
                <form action="#" style="max-width: 370px;margin: 245px auto 50px;">
                    <h3>Drop Us A Message</h3>
                    <input type="text" name="name" placeholder="Name" class="style1" required="">
                    <input type="text" name="email" placeholder="Email" class="style1">
                    <input type="text" name="phone" placeholder="Phone" class="style1" required="">
                    <textarea name="text" rows="5" class="style1" placeholder="Message"></textarea>
                    <button type="submit" class="button-style3 big"><span>Submit</span></button>
                </form>
            </div>
        </div>
    </div>
</main>

@endsection
