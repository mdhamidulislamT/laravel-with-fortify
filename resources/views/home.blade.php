@extends('master')
@section('title', "Start Messaging")
@section('content')
    @include('includes.navbar')

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center bg-info">
                <h1>Welcome To Home Page</h1>
                <p>Start Messaging</p>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-6 py-3">
                <div class="card">
                <div id="messageView"></div>
                <form action="" id="formMessage">
                    <div class="input-group mb-3">
                        <span class="input-group-text">*</span>
                        <input type="text" class="form-control" id="message" placeholder="type your message" aria-label="message"
                            aria-describedby="basic-addon1" required>
                    </div>
                    <button type="button" class="btn btn-primary btn-lg" onclick="sendMessage()">Send Message</button>
                </form>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection

@section('javascripts')
    <script>
        function sendMessage() {
            var message = $('#message').val();
            if (message == '') {
                return;
            }
            var _token = $('input[name="_token"]').val();
            var fd = new FormData();
            fd.append('message', message);
            fd.append('_token', _token);
            $.ajax({
                url: "{{ route('message') }}",
                method: "POST",
                data: fd,
                contentType: false,
                processData: false,
                datatype: "json",
                success: function(result) {
                    console.log(result);
                },
                error: function(error) {
                    console.log(error);
                }
            });
        }

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;
        var pusher = new Pusher('9fede6e2f3b24daf40fb', {
            cluster: 'ap2'
        });

        var channel = pusher.subscribe('chat');
        channel.bind('message', function(data) {
            //console.log(data);
            $("#messageView").append('<p><strong class="text-secondary text-uppercase">' + data.username +
                '</strong>: <span>' + data.message + '</span></p>');
                $('#message').val('');
        });
    </script>
@endsection
