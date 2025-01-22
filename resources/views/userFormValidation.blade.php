<div>
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
    </style>
    <h2>Add new User</h2>
     <!-- {{print_r($errors)}} To check all the errors using $errors -->
   <!--  @if($errors->any())
        @foreach($errors->all() as $error)
            <div>
                {{$error}}
            </div>
        @endforeach
    @endif -->
    <form action="userFormValidation" method="post">
        @csrf <!-- To add this for laravel security reasons beacuse this make a security token -->
        <div class="input-wrapper">
            <input type="text" name="userName" placehoder="Enter user name" >
            <span class="error">@error('userName'){{$message}}@enderror</span>
        </div>
        <div class="input-wrapper">
            <input type="text" name="email" placehoder="Enter user email" >
            <span class="error">@error('email'){{$message}}@enderror</span>
        </div>
        <div class="input-wrapper">
            <input type="text" name="city" placehoder="Enter user city" >
            <span class="error">@error('city'){{$message}}@enderror</span>
        </div>
        <div class="input-wrapper">
            <h4>User Skills</h4>
            <input type="checkbox" name="skill[]"  value="PHP" id="php">
            <label for="php">PHP</label>
            <input type="checkbox" name="skill[]"  value="node" id="node">
            <label for="node">Node</label>
            <input type="checkbox" name="skill[]"  value="java" id="java">
            <label for="java">Java</label>
            <span class="error">@error('skill'){{$message}}@enderror</span>
        </div>
        <div class="input-wrapper">
            <button>Add new User</button>
        </div>
    </form>


        <!-- Custom validation Error showing -->

        
</div>

</div>
