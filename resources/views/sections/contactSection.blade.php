<section id="contact" class="container-fluid form-section-wrapper scrollable">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 pt-5 pb-5 form-wrapper">
                <h1 class="contact-form-label text-center font-weight-bold">CONTACT US</h1>

                <div class="contact-form-container d-flex flex-row justify-content-center">

                    <form method="post" action="{{ action('Admin\MessagesController@store') }}#contact">
                    {{ csrf_field() }}


                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading">Message Sent!</h4>
                        <hr>
                        <p class="mb-0">{{ session('success') }}</p>
                    </div>
                    @endif

                    <div class="form-group">
                        <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="Name" value="{{ old('name') }}">
                        @if ($errors->has('name'))
                        <span class="invalid-feedback">
                        {{ $errors->first('name') }}
                        </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" placeholder="Email" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                        <span class="invalid-feedback">
                        {{ $errors->first('email') }}
                        </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <input type="text" name="phone" class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" placeholder="Phone" value="{{ old('phone') }}">
                        @if ($errors->has('phone'))
                        <span class="invalid-feedback">
                        {{ $errors->first('phone') }}
                        </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <input type="text" name="location" class="form-control {{ $errors->has('location') ? 'is-invalid' : '' }}" placeholder="Location" value="{{ old('location') }}">
                        @if ($errors->has('location'))
                        <span class="invalid-feedback">
                        {{ $errors->first('location') }}
                        </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <textarea name="body" class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}" cols="30" rows="5"  placeholder="Message...">{{ old('body') }}</textarea>
                        @if ($errors->has('body'))
                        <span class="invalid-feedback">
                        {{ $errors->first('body') }}
                        </span>
                        @endif
                    </div>

                    <button type="submit" class="custom-button btn btn-primary">SUBMIT

                    </button>
                    </form>
                </div>
            </div>
            <div class="contact-section-right d-flex flex-column justify-content-center col-md-12 col-lg-4 p-4">
                <div data-aos="fade-left" class="location-icon-wrapper">
                    <span class="location-icon">@include('svgs/phone_icon')</span>
                </div>
                <h1 data-aos="fade-left">323-705-9405</h1>
                <p data-aos="fade-left">Feel free to contact us using the phone number above or send us a message to get your free estimate.</p>
            </div>
        </div>
    </div>
</section>
