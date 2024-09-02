<div>
    <h1>Add user</h1>


    <form action="adduser2" method="post">
        @csrf
        <div class="input-wrapper">
            <h5>User Skills</h5>
            <input type="checkbox" name="skill[]" value="PHP" id="php">
            <label for="php">PHP</label>
            <input type="checkbox" name="skill[]" value="node" id="node">
            <label for="node">Node</label>
            <input type="checkbox" name="skill[]" value="java" id="java">
            <label for="java">Java</label>
        </div>

        <div class="input-wrapper">
            <h5>Gender</h5>
            <input type="radio" name="gender" value="male" id="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" value="female" id="female">
            <label for="female">Female</label>

        </div>

        <div class="input-wrapper">
            <h5>City</h5>
            <select name="city">
                <option value="KTM">KTM</option>
                <option value="lalitpur">lalitpur</option>
                <option value="bkt">bkt</option>
            </select>
        </div>

        <div>
            <h5>Age</h5>
            <input type="range" name="age" min="18" max="100">
        </div>

        <button>Add User</button>
    </form>
</div>
