
<section id='addFilm'>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Create film now</h2>
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

                            <form id="createFilmForm" name="sentMessage" method="POST" action="{{ route('create') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input class="form-control" id="name" type="text" placeholder="Film name" required="required" name="name" data-validation-required-message="Film name">
                                        
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" id="description" type="text" placeholder="Description" required="required" name="description" data-validation-required-message="Description">
                                        
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" id="realease_date" type="date" placeholder="Date realease" required="required" name="realease_date" data-validation-required-message="Date realease">
                                        
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" id="rating" type="text" placeholder="Rating" required="required" name="rating" data-validation-required-message="Rating">
                                        
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" id="ticket_price" type="text" placeholder="Ticket price" required="required" name="ticket_price" data-validation-required-message="Ticket price">
                                        
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" id="country" type="text" placeholder="Country" required="required" name="country" data-validation-required-message="Country">
                                        
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" id="genre" type="text" placeholder="Genre" required="required" name="genre" data-validation-required-message="Genre">
                                        
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" id="photo" type="file" placeholder="Picture of film" required="required"  name="photo" data-validation-required-message="Photo">
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-lg-12 text-center">
                                    <div id="success"></div>
                                    {{ csrf_field() }}
        
                                    <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Create Film</button>
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
