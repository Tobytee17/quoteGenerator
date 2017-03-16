<?php
include('system/database.php');

//if statements check if something has been written in the fields
if (isset($_POST['author']) && strlen($_POST['author'])) {
    if (isset($_POST['text']) && strlen($_POST['author'])) {
        if (isset($_POST['date']) && strlen($_POST['author'])) {
            $author = $_POST['author'];
            $text = $_POST['text'];
            $date = $_POST['date']; //Getting info user typed into boxes

            $author = mysqli_real_escape_string($database, $author);
            $text = mysqli_real_escape_string($database, $text);
            $date = mysqli_real_escape_string($database, $date); //this is for safety so no SQL injection can happen

            mysqli_query($database, "INSERT INTO quotes(author, text, date) VALUES('{$author}', '{$text}', '{$date}');"); //creating query to add row into table with info
        }
    }
}

$query = mysqli_query($database, "SELECT author, text, date FROM quotes;"); // select all quotes from the database
$quotes = mysqli_fetch_all($query, MYSQLI_ASSOC); // fetch results
$json = json_encode($quotes); // encode result array as JSON

?>

<html>

    <head>
        <link rel="stylesheet" href="css/styles.css" type="text/css">
        <link rel="stylesheet" href="css/popupForm.css" type="text/css">

        <script type="text/javascript">
            var quotes = "<?php echo addslashes($json); ?>";
            quotes = JSON.parse(quotes);
        </script>

        <script src="scripts/quote.js"></script>
        <script src="scripts/input.js"></script>

    </head>

    <body>
        <header>
            header
        </header>

        <div class="container"> body
            <h1>Quote Generator</h1>

            <div class="mainText" id="mainText">
                This is where a quote will display
            </div>

            <input type="button" id = "generate" onclick="LoadQuote()" value="Generate Quote" />
            <input type="button" id = "create" onclick="ShowPopup()" value="Create Quote" />

            <div class="popup" id="popup">
                <div id="popupContact">
                    <form action="index.php" id="form" method="post" name="form">
                        <input id="closeButton" type="button" onclick="HidePopup()" value=" X " />
                        <h2>Submit your own quote!</h2>
                        <hr/>
                        <input id="author" name="author" placeholder="Author" type="text" />
                        <input id="date" name="date" placeholder="Date" type="text" />
                        <textarea id="text" name="text" placeholder="Quote"></textarea>
                        <input type="submit" id="submit" />
                    </form>
                </div>
            </div>
        </div>
    </body>

</html>
