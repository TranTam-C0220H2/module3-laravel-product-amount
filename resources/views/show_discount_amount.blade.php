<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        #content {
            width: 450px;
            margin: 0 auto;
            padding: 0px 20px 20px;
            background: white;
            border: 2px solid navy;
        }

        h1 {
            color: navy;
        }

        label {
            width: 10em;
            padding-right: 1em;
            float: left;
        }

        #data input {
            float: left;
            width: 15em;
            margin-bottom: .5em;
        }

        #buttons input {
            float: left;
            margin-bottom: .5em;
        }

        br {
            clear: left;
        }
    </style>
    <title>Show discount amount</title>
</head>
<body>

<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<div id="content">
    <h1>Product Discount Calculator</h1>
    <label>Product Description: </label>
    <span>{{$productDescription}}</span><br/>
    <label>Price: </label>
    <span>{{$price}}</span><br/>
    <label>Discount Percent: </label>
    <span>{{$discountPercent}}%</span><br/>
    <label>Discount Amount: </label>
    <span>{{$discountAmount}}</span><br/>
    <label>Discount Price: </label>
    <span>{{$discountPrice}}</span><br/>
</div>
</body>
</html>
</body>
</html>
