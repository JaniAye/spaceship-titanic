<!DOCTYPE html>
<html>
<head>
    <title>Survival Prediction App</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

        body {
            background: #f6f5f7;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-family: 'Montserrat', sans-serif;
            height: 100vh;
        }

        #frm {
            background-color: #FFFFFF;
            display: flex;
            width: 50%;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 50px;
            height: 100%;
        }

        .container {
            /* background: #FF416C; */
            border-radius: 10px;
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25),
                    0 10px 10px rgba(0, 0, 0, 0.22);
            position: relative;
            display: inline-flex;
            align-items: left;
            justify-content: left;
            overflow: hidden;
            width: 70%;
            max-width: 100%;
            min-height: 480px;
        }

        .inner-containers {
            display: flex;
            background-color: green;
            width: 100%;
        }

        .inner-container1 {
            flex: 1;
            padding: 15px;
            width: 80%
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .radio {
            display: inline-block;
            margin-right: 10px;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
        }

        button {
            border-radius: 20px;
            border: 1px solid #FF4B2B;
            background-color: #FF4B2B;
            color: #FFFFFF;
            font-size: 12px;
            font-weight: bold;
            padding: 12px 45px;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: transform 80ms ease-in;
        }

        button:active {
            transform: scale(0.95);
        }

        button:focus {
            outline: none;
        }

        button.ghost {
            background-color: transparent;
            border-color: #FFFFFF;
        }

        h2 {
            text-align: center;
        }

        p {
            font-size: 15px;
            font-weight: 500;
            line-height: 20px;
            text-align: center;
            letter-spacing: 0.5px;
            margin: 20px 0 30px;
        }
        #dv {
            background: #FF416C;
            color: white;
            display: flex;
            width: 30%;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 50px;
            height: 100%;
        }
        .boxes {
        --size: 32px;
        --duration: 800ms;
        height: calc(var(--size) * 2);
        width: calc(var(--size) * 3);
        position: relative;
        transform-style: preserve-3d;
        transform-origin: 50% 50%;
        margin-top: calc(var(--size) * 1.5 * -1);
        transform: rotateX(60deg) rotateZ(45deg) rotateY(0deg) translateZ(0px);
        }

        .boxes .box {
        width: var(--size);
        height: var(--size);
        top: 0;
        left: 0;
        position: absolute;
        transform-style: preserve-3d;
        }

        .boxes .box:nth-child(1) {
        transform: translate(100%, 0);
        -webkit-animation: box1 var(--duration) linear infinite;
        animation: box1 var(--duration) linear infinite;
        }

        .boxes .box:nth-child(2) {
        transform: translate(0, 100%);
        -webkit-animation: box2 var(--duration) linear infinite;
        animation: box2 var(--duration) linear infinite;
        }

        .boxes .box:nth-child(3) {
        transform: translate(100%, 100%);
        -webkit-animation: box3 var(--duration) linear infinite;
        animation: box3 var(--duration) linear infinite;
        }

        .boxes .box:nth-child(4) {
        transform: translate(200%, 0);
        -webkit-animation: box4 var(--duration) linear infinite;
        animation: box4 var(--duration) linear infinite;
        }

        .boxes .box > div {
        --background: #f77190;
        --top: auto;
        --right: auto;
        --bottom: auto;
        --left: auto;
        --translateZ: calc(var(--size) / 2);
        --rotateY: 0deg;
        --rotateX: 0deg;
        position: absolute;
        width: 100%;
        height: 100%;
        background: var(--background);
        top: var(--top);
        right: var(--right);
        bottom: var(--bottom);
        left: var(--left);
        transform: rotateY(var(--rotateY)) rotateX(var(--rotateX)) translateZ(var(--translateZ));
        }

        .boxes .box > div:nth-child(1) {
        --top: 0;
        --left: 0;
        }

        .boxes .box > div:nth-child(2) {
        --background: #FF416C;
        --right: 0;
        --rotateY: 90deg;
        }

        .boxes .box > div:nth-child(3) {
        --background: #f7a3b7;
        --rotateX: -90deg;
        }

        .boxes .box > div:nth-child(4) {
        --background: #DBE3F4;
        --top: 0;
        --left: 0;
        --translateZ: calc(var(--size) * 3 * -1);
        }

        @-webkit-keyframes box1 {
        0%, 50% {
            transform: translate(100%, 0);
        }

        100% {
            transform: translate(200%, 0);
        }
        }

        @keyframes box1 {
        0%, 50% {
            transform: translate(100%, 0);
        }

        100% {
            transform: translate(200%, 0);
        }
        }

        @-webkit-keyframes box2 {
        0% {
            transform: translate(0, 100%);
        }

        50% {
            transform: translate(0, 0);
        }

        100% {
            transform: translate(100%, 0);
        }
        }

        @keyframes box2 {
        0% {
            transform: translate(0, 100%);
        }

        50% {
            transform: translate(0, 0);
        }

        100% {
            transform: translate(100%, 0);
        }
        }

        @-webkit-keyframes box3 {
        0%, 50% {
            transform: translate(100%, 100%);
        }

        100% {
            transform: translate(0, 100%);
        }
        }

        @keyframes box3 {
        0%, 50% {
            transform: translate(100%, 100%);
        }

        100% {
            transform: translate(0, 100%);
        }
        }

        @-webkit-keyframes box4 {
        0% {
            transform: translate(200%, 0);
        }

        50% {
            transform: translate(200%, 100%);
        }

        100% {
            transform: translate(100%, 100%);
        }
        }

        @keyframes box4 {
        0% {
            transform: translate(200%, 0);
        }

        50% {
            transform: translate(200%, 100%);
        }

        100% {
            transform: translate(100%, 100%);
        }
        }
        #loader{
            display: none;
        }

        /* Hide the default checkbox */
        .con input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        }

        .con {
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        cursor: pointer;
        font-size: 20px;
        user-select: none;
        border-radius: 50%;
        background-color: white;
        }

        /* Create a custom checkbox */
        .checkmark {
        position: relative;
        top: 0;
        left: 0;
        height: 1.3em;
        width: 1.3em;
        transition: .3s;
        transform: scale(0);
        border-radius: 50%;
        }

        /* When the checkbox is checked, add a blue background */
        .con input:checked ~ .checkmark {
        background-color: #20c580;
        transform: scale(1);
        }

        /* Create the checkmark/indicator (hidden when not checked) */
        .checkmark:after {
        content: "";
        position: absolute;
        display: none;
        }

        /* Show the checkmark when checked */
        .con input:checked ~ .checkmark:after {
        display: block;
        }

        .con input:checked ~ .celebrate {
        display: block;
        }

        /* Style the checkmark/indicator */
        .con .checkmark:after {
        left: 0.45em;
        top: 0.25em;
        width: 0.30em;
        height: 0.5em;
        border: solid white;
        border-width: 0 0.15em 0.15em 0;
        transform: rotate(45deg);
        }

        .con .celebrate {
        position: absolute;
        transform-origin: center;
        animation: kfr-celebrate .4s;
        animation-fill-mode: forwards;
        display: none;
        stroke: #20c580;
        }

        @keyframes kfr-celebrate {
            0% {
                transform: scale(0);
            }

            50% {
                opacity: 1;
            }

            100% {
                transform: scale(1.2);
                opacity: 0;
                display: none;
            }
        }

        .recheckBtn{
            margin-top: 20%;
           margin-left: 62%
        }

        .successDiv,.failDiv{
            display: none;
        }
        .inner-container{
            font-weight: 650px;
            /* height: 50%; */
            /* width: 90%; */
        }
    </style>
</head>
<body>
    <h1>Predict Your Survival Chance</h1>
    {{-- {{ route('predict') }} --}}
    <div class="container">



        <div id="dv">
            <h2>Predict Your Survival Chance</h2>
            <p>Fill your data then we will check about your Survival Chance</p>
        </div>
        <form id="frm" action="" method="post">
            @csrf
            <div class="inner-container">

                <div class="successDiv" id="successDiv">
                <h1 >Transported successfully</h1>
                <label class="con">
                    <input type="checkbox" id="chkbox" >
                    <div class="checkmark"></div>
                    <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg" class="celebrate">
                        <polygon points="0,0 10,10"></polygon>
                        <polygon points="0,25 10,25"></polygon>
                        <polygon points="0,50 10,40"></polygon>
                        <polygon points="50,0 40,10"></polygon>
                        <polygon points="50,25 40,25"></polygon>
                        <polygon points="50,50 40,40"></polygon>
                      </svg>
                  </label>
                  <button type="button" class="recheckBtn" onclick="reCheck();">Proceed</button>
                </div>

                <div class="failDiv" id="failDiv">
                    <h1 >Transported Failed...</h1>
                    <button type="button" class="recheckBtn" onclick="reCheck();">Proceed</button>

                </div>
                <div class="boxes" id="loader">
                    <div class="box">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                    <div class="box">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                    <div class="box">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                    <div class="box">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="home_planet">Home Planet:</label>
                    <select name="home_planet" id="home_planet" class="form-control">
                        <option value="Earth">Earth</option>
                        <option value="Mars">Mars</option>
                        <option value="Europa">Europa</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="cryosleep">CryoSleep (Yes/No):</label>
                    <div class="radio">
                        <input type="radio" name="cryosleep" id="cryosleep_yes" value="Yes">
                        <label for="cryosleep_yes">Yes</label>
                    </div>
                    <div class="radio">
                        <input type="radio" name="cryosleep" id="cryosleep_no" value="No" checked>
                        <label for="cryosleep_no">No</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="age">Age:</label>
                    <input type="number" name="age" id="age" class="form-control">
                </div>
                <div class="form-group">
                    <label for="cabin">Cabin:</label>
                    <input type="text" name="cabin" id="cabin" class="form-control">
                </div>
                <div class="form-group">
                    <button type="button" onclick="btnClick();">Proceed</button>
                </div>
            </div>
            <div style="background-color: red"></div>


            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (isset($prediction))
                <div class="alert alert-success">
                    <p>Prediction: {{ $prediction }}</p>
                </div>
            @endif
        </form>
    </div>

    <script>
        function btnClick(){

            document.getElementById("loader").style.display = 'block';
            var elements = document.querySelectorAll('.form-group');

            elements.forEach(function(element) {
                element.style.display = 'none';
            });


            setTimeout(hideLoader, 1000);
        }

        function hideLoader() {
            document.getElementById('loader').style.display = 'none';

            document.getElementById('successDiv').style.display = 'block';
            // document.getElementById('failDiv').style.display = 'block';


            var chkboc =  document.getElementById('chkbox');
            chkboc.checked = true;
            chkboc.disabled = true;

        }
        function reCheck(){
            document.getElementById('successDiv').style.display = 'none';
            document.getElementById('failDiv').style.display = 'none';

            var elements = document.querySelectorAll('.form-group');

            elements.forEach(function(element) {
                element.style.display = 'block';
            });
        }
    </script>
</body>
</html>
