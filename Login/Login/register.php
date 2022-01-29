<html>
<head>
        <title>Register</title>
        <link rel="stylesheet" type="text/css" href="home.css">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript" src="dynamicAddress.js"></script>
    </head>
    <body>
        <div class="wrapper col">
<div class="col-md-6">
    <h1 id="formHeader"> Register form  </h1>
    <hr>
    <form method="post" action="PHP/register.php"  >
        <label >Name</label>
        <input type="text" name="registerName" id="registerName" required>
        <label>Date Of Birth</label>
        <input type="date" name="registerDate" id="registerDate" required>
        <label >Email</label>
        <input type="text" name="registerEmail" id="registerEmail" required>
        <label >Username</label>
        <input type="text" name="registerUsername" id="registerUsername" required>
        <label >Password</label>
        <input type="password" name="registerPassword" id="registerPassword" required>
        <label >Confirm Password</label>
        <input type="password" name="registerConfirmPassword" id="registerConfrimPassword" required>
        <label >Phone Number</label>
        <input type="text" name="registerPhoneNo" id="registerPhoneNo" required>
        <label> Address</label>
        <select id="registerCont" name="registerCont" onchange="func(this)" required>
                <option value="nothing">Select a Continent</option>
                <option value="add another">add another</option>
        <?php
            include_once '../Database.php';
            $db = new Database();
            $link = $db->connectToDB();
            $sql = "SELECT * FROM addresses where pid is null";
            $result = mysqli_query($link, $sql);
            while($row = mysqli_fetch_row($result)){
                echo "<option value=".$row[0].">".$row[1]."</option>";
            }
        ?>
        
        </select> 
        <select id="registerCount" name="registerCount" onchange="funcC(this)" required>
                <option value="nothing">Select a Country</option>
                <option value="add another">add another</option>
        
        </select> 
        <select id="registerGov" name="registerGov" onchange="funcG(this)" required>
                <option value="nothing">Select a Gov</option>
                <option value="add another">add another</option>
        </select> 
        <select id="registerCity" name="registerCity" onchange="funcD(this)" required>
                <option value="nothing">Select a City</option>
                <option value="add another">add another</option>
        </select> 
        <select id="registerDist" name="registerDist" onchange="addD(this)" required>
                <option value="nothing">Select a District</option>
                <option value="add another">add another</option>
        </select> 
        <input type="text" id="newI" name="newI" value="" style="display:none">
        <button id="newB" style="display:none" onclick="funcAdd(document.getElementById('newI').value)">Add</button>

        <button type="submit" name="register" value="Register"> Register </button>
    </form>
</div>
</div>
</body>
</html>