
<section id='login'>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Login now</h2>
            </div>
        </div>
        <div class="row">
        <div class="col-lg-12">
        <div class="row">
            <div class="col-md-4" />
            </div>
            <div class="col-md-4">
            <div class="left">
                <div class="col-md-12">
                    <div class="apost">
                        <form id="loginForm" name="sentMessage" method="POST" action="{{url('login')}}">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input class="form-control" id="email" type="email" placeholder="Your email *" required="required" name="email" data-validation-required-message="Please enter your email.">
                                
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="password" type="password" placeholder="Your password *" required="required"  name="password" data-validation-required-message="Please enter your password address.">
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            {{ csrf_field() }}

                            <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Login</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
            <div class="col-md-4" />
            </div>
        </div> 
        </div>
        </div>
    </div>
</section>