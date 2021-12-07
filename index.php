<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title>HTML CSS JavaScript 07/12/64</title>
</head>

<body>
    <span id='fname'></span>
    <span id='lname'></span>
    <button id='btnJSON1'>JSON 1</button>
</body>

<script>

    loadJSON_get = () => {
        var url = 'https://cj-android-demon.herokuapp.com/json1.php'
        $.get(url, (data, status) => {
            console.log(jData)
            var jData = JSON.parse(data)
            console.log(jData)
            $('#fname').text(jData.fname)
            $('#lname').text(jData.lname)
        })
    }

    loadJSON_getJSON = () => {
        var url = 'https://cj-android-demon.herokuapp.com/json2.php'
        $.getJSON(url)
            .done((data) => {
                console.log(data[1])
                $('#fname').text(data[1].fname)
                $('#lname').text(data[1].lname)
            })
            .fail((xhr, status, err) => {
                console.log('error')
            })
    }
    $(() => {
        $('#btnJSON1').click(loadJSON_getJSON)
    })

</script>

</html>
