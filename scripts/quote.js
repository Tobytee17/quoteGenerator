var ran = null;

//This function changes the text on screen with the quoteText
function LoadQuote ()
{
    if (quotes.length == 0) {
        return;
    }

    var rand = GetRandomNumber();
    //Making sure it does not show the same quote in a row
    while(rand === ran)
    {
        rand = GetRandomNumber();
    }
    ran = rand;
    //Displaying quotes on screen
    document.getElementById('mainText').innerHTML = quotes[rand].author + " said " + quotes[rand].text + " on " + quotes[rand].date;
}

function GetRandomNumber()
{
    return Math.floor(Math.random() * quotes.length);
}
