<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Demo</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" >
    </head>
    <body>
        <div class="form-body">
            <div class="row">
                <div class="form-holder">
                    <div class="form-content">
                        <div class="form-items">
                            {{-- <form method="POST" class="requires-validation" novalidate> --}}
                            {!! Form::open(['url' => url('validate/url'), 'method' => 'POST', 'class' => 'requires-validation', 'novalidate' => 'novalidate']) !!}
                                <div class="col-md-12">
                                   <input
                                    class="form-control"
                                    type="text"
                                    name="url"
                                    placeholder="Type url here"
                                    pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?"
                                    required>
                                    <div class="valid-feedback">URL field is valid!</div>
                                    <div class="invalid-feedback">Please enter valid URL!</div>
                                </div>
                                <div class="form-button mt-3">
                                    <button id="submit" type="submit" class="btn btn-primary">Validate</button>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            (function () {
                'use strict'
                const forms = document.querySelectorAll('.requires-validation')
                Array.from(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                    }, false)
                })
            })()
        </script>
    </body>
</html>


