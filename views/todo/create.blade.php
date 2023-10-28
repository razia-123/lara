@extends('master')
@section('page_title','Create-ToDo')


@section('missing_section')
<section id="contact us">
    <div class="container mb-5">
        <!--Section: Contact v.2-->
        <section class="mb-4">

            <!--Section heading-->
            <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
            <!--Section description-->


            <div class="row">

                <!--Grid column-->
                <div class="col-md-6 mb-md-0 mb-5 mx-auto bg-secondary ">
                    <form id="contact-form" name="contact-form" action="{{ route('todo.store') }}" method="POST">
@csrf
                        <!--Grid row-->
                        <div class="row mt-5 ">

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                               <input type="text" id="name" name="name" class="form-control" placeholder="inter your name"><br>

                               @error('name')
                             <p class="text-danger">  {{ $message }}</p>
                                 @enderror
                                </div>
                            </div>
                            <!--Grid column-->
                             <!--Grid column-->
                             <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="mobile" name="mobile" class="form-control" placeholder="inter your mobile"><br>
                                    @error('mobile')
                                    <p class="text-danger">  {{ $message }}</p>
                                        @enderror

                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="email" name="email" class="form-control"  placeholder="inter your email"><br>
                                    @error('email')
                                    <p class="text-danger">  {{ $message }}</p>
                                        @enderror

                                </div>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                     <!--Grid column-->
                     <div class="col-md-12">
                                <div class="md-form mb-0">

                                <input type="text" id="password" name="password" class="form-control" placeholder="inter your password"><br>
                                @error('password')
                                <p class="text-danger">  {{ $message }}</p>
                                    @enderror

                            </div>
                            </div>

                            <!--Grid column-->
                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0 ">
                                    <input type="datetime-local" name="due_date" class="form-control"br>
                                    @error('due_date')
                                    <p class="text-danger">  {{ $message }}</p>
                                        @enderror

                                </div>
                            </div>
                            <!--Grid column-->
                            <div class="col-md-12">

                                <div class="md-form mt-4">
                                    <textarea type="text" id="message" name="message" rows="2"
                                        class="form-control md-textarea"placeholder="inter your message"></textarea><br>
                                        @error('message')
                                        <p class="text-danger">  {{ $message }}</p>
                                            @enderror

                                </div>

                            </div>
                        </div>
                        <!--Grid row-->

                    </form>

                    <div class="text-center text-md-left">
                        <a class="btn btn-primary w-100 mb-5 "
                            onclick="document.getElementById('contact-form').submit();">Send</a>
                    </div>
                    <div class="status"></div>
                </div>
                <!--Grid column-->

                <!--Grid column-->

            </div>

        </section>
        <!--Section: Contact v.2-->
    </div>
</section>

@endsection
