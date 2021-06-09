<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <ul id="test"></ul>

        <script>
            const xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    let response = JSON.parse(this.responseText)
                    console.log(response.response)

                    response.response.forEach((item) => {
                        document.getElementById("test").innerHTML += `<li>${item.title}</li>  <li>${item.description}</li><br><br>`
                    })


                }
            };
            xhttp.open("GET", "/api/test", true);
            xhttp.send();
        </script>
    </body>
</html>
