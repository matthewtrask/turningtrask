@extends('layouts.app')

@section('content')

    <div class="" id="success"></div>

    <div class="" id="failure"></div>

    <ul class="nav nav-tabs">
        <li id="about" role="presentation" class="active"><a href="#" onclick="aboutForm()">About</a></li>
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
        </div>
        <div class="form-group" id="charlestonHide">
            <div class="col-sm-12">
                <h2>Charleston</h2>
                <p>Page to add various things to do in Charleston</p>
                <form method="post" id="charlestonFormText">

                </form>
            </div>
        </div>
        <div class="form-group" id="weddingHide">
            <div class="col-sm-12">
                <h2>Wedding Party</h2>
                <p>Edit info about people in the party</p>
                <form method="post" id="weddingFormText">

                    <button id="weddingSubmit" type="submit" class="btn btn-lg btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('charlestonHide').style.display = 'none';
        document.getElementById('weddingHide').style.display = 'none';

        function aboutForm() {
            document.getElementById('aboutHide').style.display = 'block';
            document.getElementById('charlestonHide').style.display = 'none';
            document.getElementById('weddingHide').style.display = 'none';
        }

        function charlestonForm() {
            document.getElementById('charlestonHide').style.display = 'block';
            document.getElementById('aboutHide').style.display = 'none';
            document.getElementById('weddingHide').style.display = 'none';
        }

        function weddingForm() {
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

        const aboutData = document.querySelector('#formAbout');

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


    </script>

@endsection