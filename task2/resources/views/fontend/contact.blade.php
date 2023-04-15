@extends('layouts.app')
@section('title','Contact')
@section('content')
<div class="row">
    <div class="col-md-8 col-lg-8 m-auto">
        <div class="card">
            <div class="card-header">
                <h1 class="page-top-title  text-center"> - Contact  - </h1>
            </div>
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 ">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.571495069901!2d90.38537441536323!3d23.79826869286202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c73b33b14efb%3A0xb959463e3f1feb1a!2sMirpur%2014%20Bus%20Stand!5e0!3m2!1sen!2sbd!4v1678353297669!5m2!1sen!2sbd" width="500" height="
                            450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="col-md-6">
                            <h3 class="service-card-title text-center">Address</h3>
                            <hr>
                            <p class="footer-text"><i class="fas fa-map-marker-alt"></i> Mirpur-14, Dhaka<i class="fas ml-2 fa-phone"></i>   01640638628 <i class="fas ml-2 fa-envelope"></i>   md.sahadathossain.ld@gmail.com</p>
                            <h3 class="service-card-title">Send Message </h3>
                            <form action="{{ route('contact.store') }}" method="POST">
                                @csrf
                                <div class="form-group ">
                                    <input name="contact_name" type="text" class="form-control w-100 mt-2 @error('contact_name') is-invalid @enderror" value="{{ old('contact_name') }}" placeholder="Name">
                                </div>
                                <div class="mt-2">
                                    @error('contact_name')
                                     <div class="alert alert-danger">{{ $message }}</div>
                                     @enderror
                                </div>
                                <div class="form-group">
                                    <input name="contact_mobile" type="text" class="form-control  w-100 mt-2 @error('contact_mobile') is-invalid @enderror" value="{{ old('contact_mobile') }}" placeholder="Mobile No ">
                                </div>
                                <div class="mt-2">
                                    @error('contact_mobile')
                                     <div class="alert alert-danger">{{ $message }}</div>
                                     @enderror
                                </div>
                                <div class="form-group">
                                    <input name="contact_email" type="text" class="form-control  w-100 mt-2 @error('contact_email') is-invalid @enderror" value="{{ old('contact_email') }}" placeholder="Email ">
                                </div>
                                <div class="mt-2">
                                    @error('contact_email')
                                     <div class="alert alert-danger">{{ $message }}</div>
                                     @enderror
                                </div>
                                <div class="form-group">
                                    <textarea name="contact_msg" class="form-control mt-2 @error('contact_msg') is-invalid @enderror" placeholder="Enter Your Message" rows="4">{{ old('contact_msg') }}</textarea>
                                </div>
                                <div class="mt-2">
                                    @error('contact_msg')
                                     <div class="alert alert-danger">{{ $message }}</div>
                                     @enderror
                                </div>
                                <button type="submit" class="btn btn-primary mt-3 w-100">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection