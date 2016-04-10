<html>
<head>
<script type="text/javascript">

var slideimages = new Array() // create new array to preload images
slideimages[0] = new Image() // create new instance of image object
slideimages[0].src = "1.jpg" // set image src property to image path, preloading image in the process
slideimages[1] = new Image()
slideimages[1].src = "2.jpg"
slideimages[2] = new Image()
slideimages[2].src = "3.jpg"
slideimages[3] = new Image()
slideimages[3].src = "4.jpg"
slideimages[4] = new Image()
slideimages[4].src = "5.jpg"
slideimages[5] = new Image()
slideimages[5].src = "6.jpg"

</script>
</head>
<body>
<img src="1.jpg" id="slide" width="800" height="500" />

<script type="text/javascript">

//variable that will increment through the images
var step=0

function slideit(){
 //if browser does not support the image object, exit.
 if (!document.images)
  return
 document.getElementById('slide').src = slideimages[step].src
 if (step<5)
  step++
 else
  step=0
 //call function "slideit()" every 2.5 seconds
 setTimeout("slideit()",2500)
}

slideit()

</script>
</body>
</html>