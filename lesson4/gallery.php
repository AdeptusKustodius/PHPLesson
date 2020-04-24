
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

   
    if($smallImg!==false){
        $smallImg = preg_grep("/\.(?:png|gif|jpe?g)$/i",$smallImg);
        if(is_array($smallImg));

    }
    
       for($i=2;$i<=count($smallImg); $i++){
        //echo"<img src ='($smallImg[$i])' />";
        $i++;
        $pathfinder = "img/imgSmall/$smallImg[$i]";}
       $num = 1;
       $div = "<div class='father'>";
       while($num <=$i){
           $div.="<a href='#'    class='imgTarget'/><img src ='$pathfinder' alt='$smallImg'/>";//target = '_blank'
           $num++;
 
       }
       $div.="</div>";
       echo$div;
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
    height: 800px;

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