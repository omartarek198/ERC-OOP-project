<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>
            function func(file, an){
                    $.ajax({
                        // alert("in aj");
                        url: 'downloadAj.php',
                        type:'POST',
                        data:{
                            type : file, ff: an
                        },
                        success: (response)=> {
                           window.location= 'downloadAj.php';
    
                        }
                        });
                
            }
        </script> -->
    <title>Report</title>
</head>
<body>

<table id="datahere" class="data-table">
    <?php
    include_once 'showTable.php';
    $t = $_POST['tNames'];
    $sh = new showing($t);
    ?>
    </table>
    <form action="downloadAj.php" method="POST">
        <select name="act" id="act">
    <option  value="csv,<?php echo $_POST['tNames'] ?>">csv</option>
    <option  value="xlsx,<?php echo $_POST['tNames'] ?>">xlsx</option>
    </select>
    <a href="downloadAj.php"></a>
    <button>Do Action</button>
    </form>
        <!-- <iframe src="downloadAj.php" frameborder="0" id="" style="display:none"></iframe> -->
</body>
</html>