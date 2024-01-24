<!DOCTYPE html>
<html>
<head>
    <title>Start Customization</title>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="//code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="../style/style_customization.css">
</head>
<body>
<script>
document.getElementById("saveButton").addEventListener("click", function() {
    var eventType = document.getElementById("eventType").value;
    var venue = document.getElementById("venue").value;
    var date = new Date(document.getElementById("eventDate").value);
    var dateString = date.getDate() + "/" + (date.getMonth() + 1) + "/" + date.getFullYear();

    var resultText = "You have chosen to hold a " + eventType + " at " + venue + " venue on " + dateString + " and Megajoy will always be there for you.";
    document.getElementById("result").innerText = resultText;
});
</script>
    <div class="customization-container">
        <div class="instruction">Start your customization...</div>
        <div class="option">
            <label>Select your event type: </label>
            <select id="eventType">
                <option value="musicFestival">Music Festival</option>
                <option value="concert">Concert</option>
            </select>
        </div>
        <div class="option">
            <label>Choose your venue: </label>
            <select id="venue">
                <option value="laDefenseArena">La Defence Arena</option>
                <option value="accorArena">Accor Arena</option>
                <option value="zenithParis">Zenith Paris</option>
            </select>
        </div>
        <div class="option">
            <label>Choose date: </label>
            <input type="date" id="eventDate">
        </div>
        <button id="saveButton">Save</button>
        <div id="result"></div>
    </div>
    <script src="script.js"></script>
	<script>
        $(document).ready(function(){
            $("#eventDate").datepicker({
                dateFormat: "mm/dd/yy",
                showOtherMonths: true,
                selectOtherMonths: true
            });
        });
    </script>
</body>
</html>