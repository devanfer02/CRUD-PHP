const keyword = document.getElementById("keyword");
const btnSearch = document.getElementById("btn-search");
const container = document.getElementById("container");

keyword.addEventListener('keyup',() =>  
{
    const ajax = new XMLHttpRequest();

    ajax.onreadystatechange = () =>
    {
        if(ajax.readyState == 4 && ajax.status == 200)
        {
            container.innerHTML = ajax.responseText;
        }
    }

    ajax.open('GET','ajax/students.php?keyword='+ keyword.value,true);
    ajax.send();
})