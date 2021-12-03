<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <span id='txtResult1'> - </span> <button id='get1'> GET </button> <br><br>
    <hr>
    <span id='txtResult2'> - </span> <button id='get2'> GET 2 </button> <br><br>
    <hr>
    <input type="number" id="x">
    <input type="number" id="y">
    <button id='btnAdd'> ADD </button>
    <h2 id='calResults'></h2>
    <hr>
    <hr>
    <span id='fname'> - </span>
    <span id='lname'> - </span> <button id='loadjson1'> Load JSON 1 </button> <br><br>

</body>

<script>
    $(() => {
        $('#get1').click(() => {
            var url1 = 'http://cj-android-demon.herokuapp.com'
            $.get(url1, (data, status)=>{
                console.log(data);
                console.log(status);
                $('#txtResult1').text(data);
            })
        })
        $('#get2').click(() => {
            var url2 = 'http://cj-android-demon.herokuapp.com/add2.php'
            var x = $('#x').val();
            var y = $('#y').val();
            $.post(
                url2,{
                    'x':x,
                    'y':y,
                },
                (data, status)=>{
                    $('#txtResult2').text(data);
                }
            )
        })
        $('#btnAdd').click(()=>{
            var url = 'http://cj-android-demon.herokuapp.com'
            var x = $('#x').val();
            var y = $('#y').val();
            url+='/add.php?x='+x+'&y='+y
            $.get(url, (data, status) => {
                console.log(data);
                console.log(status);
                $('#calResults').text(data);
            })
        })
        $('#loadjson1').click(() => {
            var url = 'https://cj-android-demon.herokuapp.com/json1.php'
            $.get(url, (data, status) => {
                console.log(data);
                var jData = JSON.parse(data);
                console.log(jData);
                
                $('#fname').text(jData.fname);
                $('#lname').text(jData.lname);

                console.log('>'+jData.fname);
            })
        })

    })
</script>

</html>
