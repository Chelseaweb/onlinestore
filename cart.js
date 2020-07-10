function addToCart(p_n)
{
    request(p_n);
}

var ajax = new XMLHttpRequest();
function request(product_name)
{
    var url = "./addToCart.php";
    ajax.onreadystatechange = response;
    ajax.open('POST', url, true);
    ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    ajax.send('product_name='+product_name);
}

function response()
{
    if(ajax.readyState === 4)
    {
        if(ajax.status === 200)
        {
           var result = JSON.parse(ajax.responseText);
           alert(result);
        }
    }
}