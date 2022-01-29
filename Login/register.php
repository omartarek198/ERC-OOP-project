<html>
<head>
        <title>Register</title>
        <link rel="stylesheet" type="text/css" href="home.css">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>
            var lastid = 0;
            var whichS = 0;
        function func(xd){
        if(xd.value == "add another"){
            lastid = 0;
            whichS = 0;
            document.getElementById("newI").style.display = "block";
            document.getElementById("newB").style.display = "block";
        }else{
            // document.getElementById("registerCount").style.display = "block";
            // document.getElementById("registerCount").disabled = true;
            $.ajax({
            url: 'countSearch.php',
            type:'POST',
            data:{
                cid : xd.value
            },
            success: (response)=> {
                lastid = xd.value;
                //alert(response);
                document.getElementById("registerCount").innerHTML = response;
                //alert(xd.value);
                
            }
        });
        }
    }
    function funcC(xd){
        if(xd.value == "add another"){
            whichS = 1;
            document.getElementById("newI").style.display = "block";
            document.getElementById("newB").style.display = "block";
        }else{
            // document.getElementById("registerCount").style.display = "block";
            // document.getElementById("registerCount").disabled = true;
            $.ajax({
            url: 'countSearch.php',
            type:'POST',
            data:{
                cid : xd.value
            },
            success: (response)=> {
                lastid = xd.value;
                //alert(response);
                document.getElementById("registerGov").innerHTML = response;
                //alert(xd.value);
                
            }
        });
        }
    }
    function funcG(xd){
        if(xd.value == "add another"){
            whichS = 2;
            document.getElementById("newI").style.display = "block";
            document.getElementById("newB").style.display = "block";
        }else{
            // document.getElementById("registerCount").style.display = "block";
            // document.getElementById("registerCount").disabled = true;
            $.ajax({
            url: 'countSearch.php',
            type:'POST',
            data:{
                cid : xd.value
            },
            success: (response)=> {
                lastid = xd.value;
                //alert(response);
                document.getElementById("registerCity").innerHTML = response;
                //alert(xd.value);
                
            }
        });
        }
    }
    function funcD(xd){
        if(xd.value == "add another"){
            whichS = 3;
            document.getElementById("newI").style.display = "block";
            document.getElementById("newB").style.display = "block";
        }else{
            // document.getElementById("registerCount").style.display = "block";
            // document.getElementById("registerCount").disabled = true;
            $.ajax({
            url: 'countSearch.php',
            type:'POST',
            data:{
                cid : xd.value
            },
            success: (response)=> {
                lastid = xd.value;
                whichS = 4;
                //alert(response);
                document.getElementById("registerDist").innerHTML = response;
                //alert(xd.value);
                
            }
        });
        }
    }
    function addD(xd){
        if(xd.value == "add another"){
            whichS = 4;
            document.getElementById("newI").style.display = "block";
            document.getElementById("newB").style.display = "block";
        }
    }
    function funcAdd(xd){
        $.ajax({
            url: 'registerNew.php',
            type:'POST',
            data:{
                lid: lastid, name: xd
            },
            success: (response)=> {
                // alert(lastid);
                switch(whichS){
                    case 0:
                        document.getElementById("registerCont").innerHTML +=response;
                        break;
                    case 1:
                        document.getElementById("registerCount").innerHTML +=response;
                        break;
                    case 2:
                        document.getElementById("registerGov").innerHTML +=response;
                        break;
                    case 3:
                        document.getElementById("registerCity").innerHTML +=response;
                        break;
                    case 4:
                        document.getElementById("registerDist").innerHTML +=response;
                        break;
                    default:
                        break;
                }
            }
        });
        document.getElementById("newI").style.display = "none";
        document.getElementById("newI").value = "";
        document.getElementById("newB").style.display = "none";
    }
</script>
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
            include_once 'Database.php';
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