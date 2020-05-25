// Bannière à covid
document.querySelector('.acceptbutton').addEventListener('click', function(){
    document.querySelector('.covid-banner').style.display = "none";
});

// Option Select page lesartistes.html
function handleSelect(elm)
{
window.location = elm.value;
}
