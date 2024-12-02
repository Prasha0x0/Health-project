<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<style type="text/css">
#blue_bar{
    height:50px;
    background-color:#405d9b;
    color:#d9dfeb;
}

#search_box{
    width:400px;
    height:20px;
    border-radius:5px;
    border:none;
    padding:4px;
    font-size:14px;
    background-image:url(images/search.png);
    background-repeat:no-repeat;
    background-position:right;
}

#blue_bar_content {
    height:50px;
    width: 800px;
    margin: auto;
    font-size: 30px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

#pp{
    width:150px;
    height:200px;
    border-radius:50%;
    border:solid 2px white;
    padding:40px;
}

#box{
    background-color:blue;
    height:300px;
    width:400px;
    margin:-150px;
}

</style>
<body>

<div id="blue_bar">
    <div id="blue_bar_content">
        <span>Profile</span>
        <input type="text" id="search_box" placeholder="search">
    </div>   
</div>
    <img id="pp" src="images/user1.jpg">
    <div id="box">
    Hello
    </div>
    </body>
</html>
