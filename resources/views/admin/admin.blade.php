@extends('layouts.app')

@section('content')

    <div class="" id="success"></div>

    <div class="" id="failure"></div>

    <ul class="nav nav-tabs">
        <li id="about" role="presentation"><a href="#" onclick="aboutForm()">About</a></li>
        <li id="charleston" role="presentation"><a href="#" onclick="charlestonForm()">Charleston</a></li>
        <li id="wedding" role="presentation"><a href="#" onclick="weddingForm()">Wedding Party</a></li>
    </ul>


    <div class="container">
        <div class="form-group" id="aboutHide">
            <div class="col-sm-12" id="aboutFormText">
                <h2>About Us</h2>
                <p>This will populate the field on the main page for y'alls story.</p>
                <form method="post" action="{{url('/')}}/admin/about" id="formAbout">
                    <label for="about"></label>
                    <input name="about" id="about" type="text" hidden>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div id="aboutForm">
                    </div>
                    <br>
                    <button id="aboutSubmit" type="submit" class="btn btn-lg btn-default">Submit</button>
                </form>
            </div>

            <div class="col-sm-12">
                <br><br><hr>
                <div class="col-sm-9">
                    @foreach($about as $story)
                        <p> {{ $story->content }}</p>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel">Edit About Us</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post"  action="{{url('/')}}/admin/about" id="editAboutForm">
                                            <label for="about"></label>
                                            <input name="editAbout" id="about" type="text" hidden>
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <div id="editAboutForm">
                                            </div>
                                            <br>
                                            <button id="editAboutSubmit" type="submit" class="btn btn-lg btn-default">Submit</button>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-sm-3">
                    <button class="btn btn-info" id="edit" data-toggle="modal" data-target="#myModal">Edit</button>
                    <button class="btn btn-warning" id="delete">Delete</button>
                </div>
            </div>
        </div>
        <div class="form-group" id="charlestonHide">
            <div class="col-sm-12">
                <h2>Charleston</h2>
                <p>Page to add various things to do in Charleston</p>
                <form method="post" id="charlestonForm" action="{{url('/')}}/admin/location" class="form-horizontal">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Business Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Business Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="location" class="col-sm-2 control-label">Location</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="location" name="location" placeholder="Location">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="link" class="col-sm-2 control-label">Website Link</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="link" name="link" placeholder="Website Link">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="business_type" class="col-sm-2 control-label">Business Type</label>
                        <div class="col-sm-10">
                            <select name="business_type" for="business_type" id="business_type" class="form-control">
                                <option value="restaurant">Restaurant</option>
                                <option value="hotel">Hotel</option>
                                <option value="bar">Bar</option>
                                <option value="shop">Shop</option>
                                <option value="sightseeing">Historical Interest</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-sm-2 control-label">Description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="description" name="description" placeholder="Description"></textarea>
                            <br>
                            <button id="charlestonSubmit" type="submit" class="btn btn-lg btn-default">Submit</button>

                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-12">
                <br><br><hr>
                @foreach($charleston as $sights)
                <div class="col-sm-9">
                    <p> {{ $sights->name }}</p>
                    <p> {{ $sights->location }}</p>
                    <p> {{ $sights->link }}</p>
                    <p> {{ $sights->description }}</p>
                    <hr>
                </div>
                <div class="col-sm-3">
                    <button class="btn btn-info" id="edit">Edit</button>
                    <button class="btn btn-warning" id="delete">Delete</button>
                </div>
                @endforeach
            </div>
        </div>
        <div class="form-group" id="weddingHide">
            <div class="col-sm-12">
                <h2>Wedding Party</h2>
                <p>Edit info about people in the party</p>
                <form method="post" action="{{url('/')}}/admin/party" id="formWedding" class="form-horizontal" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="location" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="location" class="col-sm-2 control-label">Position</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="position" name="position" placeholder="Wedding Party Location">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="location" class="col-sm-2 control-label">About</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="story" name="story" placeholder="Some details about them"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">

                        </div>
                        <div class="col-sm-10">
                            <label class="btn btn-primary" for="my-file-selector">
                                <input id="my-file-selector" name="photo" type="file" style="display:none;" onchange="$('#upload-file-info').html($(this).val());">
                                Upload Image
                            </label>
                            <span class='label label-info' id="upload-file-info"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">

                        </div>
                        <div class="col-sm-10">
                            <button id="weddingSubmit" type="submit" class="btn btn-lg btn-default">Submit</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('charlestonHide').style.display = 'none';
        document.getElementById('weddingHide').style.display = 'none';
        document.getElementById('about').addClass = "active";

        function aboutForm() {
            document.getElementById('about').addClass = 'active';
            document.getElementById('aboutHide').style.display = 'block';
            document.getElementById('charlestonHide').style.display = 'none';
            document.getElementById('weddingHide').style.display = 'none';
        }

        function charlestonForm() {
            document.getElementById('charleston').addClass = 'active';
            document.getElementById('charlestonHide').style.display = 'block';
            document.getElementById('aboutHide').style.display = 'none';
            document.getElementById('weddingHide').style.display = 'none';
        }

        function weddingForm() {
            document.getElementById('wedding').addClass = 'active';
            document.getElementById('weddingHide').style.display = 'block';
            document.getElementById('aboutHide').style.display = 'none';
            document.getElementById('charlestonHide').style.display = 'none';
        }



        const aboutQuill = new Quill('#aboutForm', {
            modules: {
                toolbar: [
                    [{ header: [1, 2, false] }],
                    ['bold', 'italic', 'underline'],
                    ['image', 'code-block']
                ]
            },
            placeholder: 'Write something amazing',
            theme: 'snow',
        });

        const editAboutQuill = new Quill('div#charlestonForm', {
            modules: {
                toolbar: [
                    [{ header: [1, 2, false] }],
                    ['bold', 'italic', 'underline'],
                    ['image', 'code-block']
                ]
            },
            placeholder: 'Write something amazing',
            theme: 'snow',
        });

        const aboutData = document.querySelector('#formAbout');
        const editAboutData = document.querySelector('#formEditAbout');
        const weddingSubmit = document.querySelector('#formWedding');

        aboutData.onsubmit = function () {
            const about = document.querySelector('input[name=about]');
            about.value = JSON.stringify(aboutQuill.getContents());
            const data = $(about).serialize();
            const token = $('meta[name="_token"]').attr('content').val();

            $.ajax({
                data: data,
                type: 'POST',
                beforeSend: function(request) {
                    request.setRequestHeader('X-CSRF-TOKEN', token);
                },
                url: '{{url('/')}}/admin/about',
                cache: false,
                async: false,
                success: function() {
                   console.log('it worked');
                },

            });

            return false;
        };

        editAboutData.onsubmit = function (e) {
            const editAbout = document.querySelector('input[name=editAbout]');
            about.value = JSON.stringify(aboutQuill.getContents());
            const data = $(about).serialize();
            const token = $('meta[name="_token"]').attr('content').val();

            $.ajax({
                data: data,
                type: 'POST',
                beforeSend: function(request) {
                    request.setRequestHeader('X-CSRF-TOKEN', token);
                },
                url: '{{url('/')}}/admin/editAbout',
                cache: false,
                async: false,
                success: function() {
                    console.log('it worked');
                },

            });

            return false;
        };


    </script>

@endsection