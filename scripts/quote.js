//This is the main Quote class
function Quote(author, quoteText, date)
{
    this.author = author;
    this.quoteText = quoteText;
    this.date = date;
}

//Array of Quotes
var quotes = [];
var ran = null;

//This function changes the text on screen with the quoteText
function LoadQuote ()
{
    CreateQuote(); // this can be deleted once we call in from a file
    var rand = GetRandomNumber();
    //Making sure it does not show the same quote in a row
    while(rand === ran)
    {
        rand = GetRandomNumber();
    }
    ran = rand;
    //Displaying quotes on screen
    document.getElementById('mainText').innerHTML = quotes[rand].author + " said " + quotes[rand].quoteText;
}

//Temp function to create Quotes
function CreateQuote()
{
    quotes[0] = new Quote("Person1", "Hello", "1/1/1");
    quotes[1] = new Quote("Person2", "Hey", "2/2/2");
    quotes[2] = new Quote("Person3", "Hi", "3/3/3");
}

function GetRandomNumber()
{
    return Math.floor(Math.random() * quotes.length);
}

function ReadFile()
{

}
