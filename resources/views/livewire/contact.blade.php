<div>
    <div class="clearfix"></div>

    <section class="wrap__contact-form">
        <div class="container">
            @if ($success)
                <div class="alert alert-info alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Info!</strong> {{ $success }}
                </div>
            @else
                <div class="row">
                    <div class="col-md-12">
                        <h5>contact us</h5>
                        <form wire:submit.prevent="contactFormSubmit" action="/contact" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-group-name" x-data="{ open_name: true }">
                                        @error('name')
                                            <p class="text-danger mt-1" x-show="open_name">{{ $message }}</p>
                                        @enderror
                                        <label>Your name <span class="required"></span></label>
                                        <input wire:model="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Name" @click="open_name = ! open_name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" x-data="{ open_email: true }">
                                        @error('email')
                                            <p class="text-danger mt-1" x-show="open_email">{{ $message }}</p>
                                        @enderror
                                        <label>Your email <span class="required"></span></label>
                                        <input wire:model="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email Address" @click="open_email = ! open_email">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group form-group-name" x-data="{ open_phone: true }">
                                        @error('phone')
                                            <p class="text-danger mt-1" x-show="open_phone">{{ $message }}</p>
                                        @enderror
                                        <label>Your phone <span class="required"></span></label>
                                        <input wire:model="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="Phone" @click="open_phone = ! open_phone">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-name" x-data="{ open_subject: true }">
                                        @error('subject')
                                            <p class="text-danger mt-1" x-show="open_subject">{{ $message }}</p>
                                        @enderror
                                        <label>Subject <span class="required"></span></label>
                                        <input wire:model="subject" type="text" class="form-control" name="subject" value="{{ old('subject') }}" placeholder="Subject" @click="open_subject = ! open_subject">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group" x-data="{ open_message: true }">
                                        @error('message')
                                            <p class="text-danger mt-1" x-show="open_message">{{ $message }}</p>
                                        @enderror
                                        <label>Your message </label>
                                        <textarea wire:model="message" class="form-control" rows="6" name="message" value="{{ old('message') }}" placeholder="Your message here..." @click="open_message = ! open_message"></textarea>
                                    </div>
                                    <div class="form-group float-right mb-0">
                                        <button type="submit" class="btn btn-primary btn-contact">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>


                    {{-- <div class="col-md-4">
                        <div class="wrap__contact-open-hours">
                            <h5 class="text-capitalize">open hours</h5>
                            <ul class="list-unstyled">
                                <li class="d-flex align-items-center justify-content-between"><span>Monday - Friday</span>
                                    <span>09 AM - 19 PM</span></li>
                                <li class="d-flex align-items-center justify-content-between"><span>Saturday</span> <span>09
                                        AM - 14 PM</span></li>
                                <li class="d-flex align-items-center justify-content-between"><span>Sunday</span>
                                    <span>Closed</span></li>
                            </ul>
                        </div>
                        <h5>Info location</h5>
                        <div class="wrap__contact-form-office">
                            <ul class="list-unstyled">
                                <li>
                                    <span>
                                        <i class="fa fa-home"></i>
                                    </span>
                                    PO Box 16122 Collins Street West Victoria
                                    8007 Australia
                                </li>
                                <li>
                                    <span>
                                        <i class="fa fa-phone"></i>
                                        <a href="tel:">(+12) 34567 890 123</a>
                                    </span>

                                </li>
                                <li>
                                    <span>
                                        <i class="fa fa-envelope"></i>
                                        <a href="mailto:">mail@example.com</a>
                                    </span>

                                </li>
                                <li>
                                    <span>
                                        <i class="fa fa-globe"></i>
                                        <a href="#" target="_blank"> www.yourdomain.com</a>
                                    </span>
                                </li>
                            </ul>

                            <div class="social__media">
                                <h5>find us</h5>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" class="btn btn-social rounded text-white facebook">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="btn btn-social rounded text-white twitter">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="btn btn-social rounded text-white whatsapp">
                                            <i class="fa fa-whatsapp"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="btn btn-social rounded text-white telegram">
                                            <i class="fa fa-telegram"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="btn btn-social rounded text-white linkedin">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> --}}
                </div>
            @endif

        </div>
    </section>
</div>
