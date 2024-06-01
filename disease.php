<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/disease.css">
    <title>Disease Precautions</title>
</head>
<body>
    <header>
        <h1>PRECAUTIONS</h1>
    </header>
    <main>
        <div class="disease-selection">
            <label for="disease-select">Choose a Disease:</label>
            <select id="disease-select">
                <option value="covid-19">Diabetes</option>
                <option value="flu">Obesity</option>
                <option value="common-cold">Common Cold</option>
                <option value="diabetes">Fever</option>
                <option value="blood-pressure">Blood Pressure</option>
                <!-- Add more disease options as needed -->
            </select>
        </div>
        <div class="precautions">
            <h2>Precautions:</h2>
            <ul id="precautions-list">
                <!-- Precautions for the selected disease will be displayed here -->
            </ul>
        </div>
        
    </main>
    <script src="./assets/js/disease.js"></script>
</body>
</html>
