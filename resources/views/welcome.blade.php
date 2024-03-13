<!DOCTYPE html>
<html>
<head>
    <title>Survival Prediction App</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

        * {
            box-sizing: border-box;
        }

        body {
            background: #f6f5f7;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-family: 'Montserrat', sans-serif;
            height: 100vh;
            /* margin: -20px 0 50px; */
        }
        form {
            background-color: #FFFFFF;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 50px;
            height: 100%;
            text-align: center;
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
        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 14px 28px rgba(0,0,0,0.25),
                    0 10px 10px rgba(0,0,0,0.22);
            position: relative;
            display: flex;
            align-items: left;
            justify-content: left;
            overflow: hidden;
            width: 75%;
            max-width: 100%;
            min-height: 480px;
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
    </style>
</head>
<body>
    <h1>Predict Your Survival Chance</h1>
    {{-- {{ route('predict') }} --}}
    <div class="container">
    <form action="" method="post">
        @csrf

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
            <button type="submit" class="btn btn-primary">Predict</button>
        </div>
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
</body>
</html>
