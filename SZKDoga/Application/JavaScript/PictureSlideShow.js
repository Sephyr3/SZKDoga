var i = 0; //Start point
var image = [];
var item = 10000;

//Image List
for (let i = 0; i < images.length -1; i++) 
{
    const element[] = images[i];
    element = 'image{i}.jpg';
}

// Vhange Image
function changeImg()
{
    document.slide.src = image[i];
    if (i < image.length -1) 
    {
        i++
    }
    else  
    {
        i = 0;
    }

    setTimeout("changeImg()", time);

    window.onload = changeImg;


}