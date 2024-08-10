@extends('layouts.user')
 
@section('title', 'Chat')
 
@section('contents')


<div class="chat">
  <link rel="stylesheet" href="/style.css">

    <!-- Header -->
    <div class="top">
        <img src="https://i.pinimg.com/736x/9a/04/d8/9a04d8b28a7676613c17d9a8187e4c0c.jpg" alt="Avatar" style="width: 100px;">

      <div>
        <p>Ayudas - Reyes Gomez Juan Antonio</p>
        <small>Online</small>
      </div>
    </div>
    <!-- End Header -->
  
    <!-- Chat -->
    <div class="messages">
      @include('receive', ['message' => "Hoooola! preguntame si tienes dudas!  👋"])
    </div>
    <!-- End Chat -->
  
    <!-- Footer -->
    <div class="bottom">
      <form>
        <input type="text" id="message" name="message" placeholder="Enter message..." autocomplete="off">
        <button type="submit"></button>
      </form>
    </div>
    <!-- End Footer -->
  
  </div>

    
    <script>
      const pusher  = new Pusher('{{config('broadcasting.connections.pusher.key')}}', {cluster: 'us2'});
      const channel = pusher.subscribe('public');
    
      //Receive messages
      channel.bind('chat', function (data) {
        $.post("/receive", {
          _token:  '{{csrf_token()}}',
          message: data.message,
        })
         .done(function (res) {
           $(".messages > .message").last().after(res);
           $(document).scrollTop($(document).height());
         });
      });
    
      //Broadcast messages
      $("form").submit(function (event) {
        event.preventDefault();
    
        $.ajax({
          url:     "/broadcast",
          method:  'POST',
          headers: {
            'X-Socket-Id': pusher.connection.socket_id
          },
          data:    {
            _token:  '{{csrf_token()}}',
            message: $("form #message").val(),
          }
        }).done(function (res) {
          $(".messages > .message").last().after(res);
          $("form #message").val('');
          $(document).scrollTop($(document).height());
        });
      });
    
    </script>

@endsection


