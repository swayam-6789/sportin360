document.addEventListener("DOMContentLoaded", function() {
    const diseaseSelect = document.getElementById("disease-select");
    const precautionsList = document.getElementById("precautions-list");

    // Define precautions for different diseases
    const diseasePrecautions = {
        "covid-19": [
            "Monitor your blood sugar levels regularly.",
            "Follow a balanced and healthy diet.",
            "Engage in regular physical activity.",
            "Take prescribed medications as directed by your healthcare provider.",
            "Manage stress and get adequate sleep."
        ],
        foodsuggestions: [
            "Eat plenty of fiber-rich foods like whole grains, fruits, and vegetables.",
            "Limit your intake of sugary beverages and desserts.",
            "Choose lean protein sources like poultry, fish, and tofu.",
            "Control portion sizes to manage blood sugar levels.",
            "Consult with a dietitian for a personalized meal plan."
        ],
        "flu": [
            "Get a flu shot annually.",
            "Cover your mouth and nose when coughing or sneezing.",
            "Wash your hands frequently.",
            "Avoid close contact with sick individuals."
        ],
        "common-cold": [
            "Wash your hands frequently.",
            "Avoid close contact with sick individuals.",
            "Practice good respiratory hygiene.",
            "Stay hydrated and get plenty of rest."
        ],
        
        foodsuggestions: [
            "Eat plenty of fiber-rich foods like whole grains, fruits, and vegetables.",
            "Limit your intake of sugary beverages and desserts.",
            "Choose lean protein sources like poultry, fish, and tofu.",
            "Control portion sizes to manage blood sugar levels.",
            "Consult with a dietitian for a personalized meal plan."
        ],
        "blood-pressure": [
            "Limit salt intake in your diet.",
            "Maintain a healthy weight.",
            "Exercise regularly.",
            "Reduce stress through relaxation techniques.",
            "Take prescribed blood pressure medications as directed by your healthcare provider."
        ],
        foodSuggestions: [
            "Consume a diet rich in fruits and vegetables.",
            "Reduce sodium intake by avoiding high-salt processed foods.",
            "Choose whole grains over refined grains.",
            "Include potassium-rich foods like bananas, oranges, and spinach.",
            "Limit caffeine and alcohol consumption."
        ],
        // Add precautions for more diseases as needed
    };

        // Add precautions for more diseases as needed
    

    // Function to update precautions based on the selected disease
    function updatePrecautions() {
        const selectedDisease = diseaseSelect.value;
        const selectedPrecautions = diseasePrecautions[selectedDisease] || [];
        
        
        // Clear previous precautions
        precautionsList.innerHTML = "";

        // Add new precautions to the list
        selectedPrecautions.forEach(precaution => {
            const listItem = document.createElement("li");
            listItem.textContent = precaution;
            precautionsList.appendChild(listItem);
        });
        
       
    }

    // Listen for changes in the disease selection
    diseaseSelect.addEventListener("change", updatePrecautions);

    // Initial update based on the default selected disease
    updatePrecautions();
});
