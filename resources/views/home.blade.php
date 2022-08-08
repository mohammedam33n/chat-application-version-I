@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}





                        {{-- <button onclick="toggleText()">button</button>
                        <p id="Myid">Text</p>
                        <script>
                        function toggleText(){
                          var x = document.getElementById("Myid");
                          if (x.style.display === "none") {
                            x.style.display = "block";
                          } else {
                            x.style.display = "none";
                          }
                        }
                        </script> --}}




                        <div id="btn_form" style="display: none">form messsege</div>
                        <br>
                        <input type="text" name="" id="input_form">

                        <script>
                            let btn_form = document.getElementById('btn_form');
                            function logMessage() {
                                input_form = document.getElementById('input_form');
                                console.log(input_form.value);
                                input_length = (input_form.value== '' ) ? btn_form.style.display = "none" : btn_form.style.display ="block";
                                return input_length;
                            }
                            input_form.addEventListener('keydown', (e) => {
                                logMessage()
                            });
                        </script>































                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



{{-- <input type="text" name="" id="test-target">
<p id="console-log"></p>
<script>
    let textarea = document.getElementById('test-target'),
        consoleLog = document.getElementById('console-log'),
        btnReset = document.getElementById('btn-reset');

    function logMessage(message) {
        consoleLog.innerHTML += message + "<br>";
    }

    textarea.addEventListener('keydown', (e) => {
        if (!e.repeat)
            logMessage(`Key "${e.key}" pressed [event: keydown]`);
        else
            logMessage(`Key "${e.key}" repeating [event: keydown]`);
    });

</script> --}}
