
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    $path = "img/imgSmall";
    $smallImg = scandir($path);
    for($i=2;$i<=count($smallImg);$i++){
        unset($smallImg[0]);
        unset($smallImg[1]);
        $second_pathfinder ="img/imgBig/$smallImg[$i]";// потратил 6 часов прописывая новые функции for, что бы осознать что я хлебушек и прописать вот эту строку.6.часов.жизни.
        $pathfinder = "img/imgSmall/$smallImg[$i]";
        $div = "<div class='father'>";
        $div.="<a href='$second_pathfinder' target = '_blank'   class='imgTarget'/><img  src ='$pathfinder' alt='$smallImg'/>";//
        $div.="</div>";
        echo$div;
    }
?>
</body>
<style>
.body{
    max-width: 1200px;
    display: block;
    width: 85%;
    height: 100%;
    margin:  0 auto;
    padding: 0;   
}
.father{
    display: flex;
    flex-direction: column;
    max-width: 1000px;
    width: 85%;
    margin: 0 auto;

}
.father img{
    margin-right: 15px;
    display: block;
    width: 200px;
    height: 200px;
    float: left;
    margin:0 auto;
}
.father a img{
    margin:15px auto;
    float:none;
    display: flex;
}
</style>
</html>