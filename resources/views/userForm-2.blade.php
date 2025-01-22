<div>
    
<h2>Add new User 2</h2>
<form action="add-user-2" method="post">
    @csrf
    <div class="input-wrapper">
        <h4>User Skills</h4>
        <input type="checkbox" name="skill[]"  value="PHP" id="php">
        <label for="php">PHP</label>
        <input type="checkbox" name="skill[]"  value="node" id="node">
        <label for="node">Node</label>
        <input type="checkbox" name="skill[]"  value="java" id="java">
        <label for="java">Java</label>
    </div>
    <div class="input-wrapper">
        <h4>Gender</h4>
        <input type="radio" name="gender"  value="male" id="male">
        <label for="male">Male</label>
        <input type="radio" name="gender"  value="female" id="female">
        <label for="female">Female</label>
    </div>
    <div class="input-wrapper">
        <h4>City</h4>
        <select name="city" id="">
            <option value="delhi">Delhi</option>
            <option value="noida">Nodia</option>
            <option value="chandigarh">Chandigarh</option>
        </select>
    </div>
    <div class="input-wrapper">
        <h4>Age</h4>
        <input type="range" name="age" id="" min="18" max="50">
    </div>
    <button>Add new user</button>
</form>
</div>
