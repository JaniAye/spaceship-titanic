<!DOCTYPE html>
<html>
<head>
    <title>Survival Prediction App</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
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
    </style>
</head>
<body>
    <h1>Predict Your Survival Chance</h1>
    {{-- {{ route('predict') }} --}}
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
</body>
</html>
