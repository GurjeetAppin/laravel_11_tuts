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
    </style>
    <h2>Add new User</h2>
    <form action="add-user" method="post">
        @csrf <!-- To add this for laravel security reasons beacuse this make a security token -->
        <div class="input-wrapper">
            <input type="text" name="userName" placehoder="Enter user name" >
        </div>
        <div class="input-wrapper">
            <input type="text" name="email" placehoder="Enter user email" >
        </div>
        <div class="input-wrapper">
            <input type="text" name="city" placehoder="Enter user city" >
        </div>
        <div class="input-wrapper">
            <button>Add new User</button>
        </div>
    </form>
</div>
