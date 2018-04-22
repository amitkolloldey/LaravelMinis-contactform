@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="title">
                                <h2 class="h2">
                                    Contact Form
                                </h2>
                            </div>
                            <hr class="hr">
                            <form method="POST" action="{{route('sendcontact')}}">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <input type="text" class="form-control" name="subject">
                                </div>
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea name="message" rows="5" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="Send">
                                </div>
                            </form>
                            <hr class="hr">
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
    </div>
</div>
@endsection
