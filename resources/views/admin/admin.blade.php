@extends('layouts.app')

@section('content')

    <div class="" id="success"></div>

    <div class="" id="failure"></div>

    <ul class="nav nav-tabs">
        <li id="about" role="presentation" class="active"><a href="#">About</a></li>
        <li id="charleston" role="presentation"><a href="#">Charleston</a></li>
        <li id="wedding" role="presentation"><a href="#">Wedding Party</a></li>
    </ul>

    <div class="container">
        <div class="form-group">
            <h2>About Us</h2>
            <p>This will populate the field on the main page for y'alls story.</p>
            <div class="col-sm-12" id="aboutForm">
                <form method="post" id="formAbout">
                    <label for="about"></label>
                    <input name="about" id="about" type="text" hidden>
                    <div id="aboutTextArea">
                    </div>
                    <br>
                    <button id="aboutSubmit" type="submit" class="btn btn-lg btn-default">Submit</button>
                </form>
            </div>
            <div class="col-sm-12" id="charlestonForm">

            </div>
            <div class="col-sm-12" id="weddingForm">

            </div>
        </div>
    </div>

    <script>
//        document.getElementById('aboutForm').style.display = 'none';
        document.getElementById('charlestonForm').style.display = 'none';
        document.getElementById('weddingForm').style.display = 'none';

        const quill = new Quill('#aboutTextArea', {
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

        var form = document.querySelector('#formAbout');
        form.onsubmit = function () {
            const about = document.querySelector('input[name=about]');
            about.value = JSON.stringify(quill.getContents());
            console.log("Submitted", $(form).serialize(), $(form).serializeArray());

            return false;
        }



    </script>

@endsection{{url('/admin')}}