<div>
<style>
        input{
            border: orange 1px solid;
            height: 35px;
            width: 200px;
            border-radius:2px;
            color:orange;
        }
        .input-wrapper{
            margin:10px;
        }
        button{
            border: orange 1px solid;
            height: 35px;
            width: 200px;
            border-radius:2px;
            color:orange;
            background-color:green;
            cursor: pointer;
        }
        .error{
            color:red;
        }

        .input-error{
            border:1px solid red;
            color : red;
        }
    </style>
    <form action="userFormCustomValidation" method="post">
        @csrf <!-- To add this for laravel security reasons beacuse this make a security token -->
        <div class="input-wrapper">
            <input type="text" class="{{$errors->first('userName')?'input-error':''}}" name="userName" placehoder="Enter user name" value="{{old('userName')}}">
            <span class="error">@error('userName'){{$message}}@enderror</span>
        </div>
        <div class="input-wrapper">
            <input type="text" class="{{$errors->first('userName')?'input-error':''}}" name="email" placehoder="Enter user email" value="{{old('email')}}">
            <span class="error">@error('email'){{$message}}@enderror</span>
        </div>
        <div class="input-wrapper">
            <input type="text" class="{{$errors->first('userName')?'input-error':''}}" name="city" placehoder="Enter user city" value="{{old('city')}}">
            <span class="error">@error('city'){{$message}}@enderror</span>
        </div>
        <div class="input-wrapper">
            <h4>User Skills</h4>
            <input type="checkbox" name="skill[]"  value="PHP" id="php" value="">
            <label for="php">PHP</label>
            <input type="checkbox" name="skill[]"  value="node" id="node" value="">
            <label for="node">Node</label>
            <input type="checkbox" name="skill[]"  value="java" id="java" value="">
            <label for="java">Java</label>
            <span class="error">@error('skill'){{$message}}@enderror</span>
        </div>
        <div class="input-wrapper">
            <button>Add new User</button>
        </div>
    </form>
</div>
