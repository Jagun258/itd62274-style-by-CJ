<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title>HTML CSS JavaScript 07/12/64</title>
</head>

<body>
    <h1 id='id'> Halooo </h1>
    <button id='btnJSON1'>JSON 1</button>
</body>

<script>

    loadJSON=()=>{
        var url='https://cj-android-demon.herokuapp.com/json1.php'
        $.get(url,(data,status)=>{
            console.log(data)
            var jData = JSON.parse(data)
            console.log(jData.fname)
            console.log(jData.lname)
        })
    }

    $(()=>{
        $('#btnJSON1').click(()=>{
            loadJSON()
        })
    })
</script>

</html>
