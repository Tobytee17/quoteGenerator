function ShowPopup()
{
    document.getElementById('popup').style.display = "block";
}

function ValidateInput()
{
    if (document.getElementById('author').value == "" || document.getElementById('date').value == "" || document.getElementById('quote').value == "")
    {
        alert("Fill All Fields !");
    }
    else
    {
        document.getElementById('form').submit();
        alert("Form Submitted Successfully...");
    }
}
//Function to Hide Popup
function HidePopup()
{
    document.getElementById('popup').style.display = "none";
}
