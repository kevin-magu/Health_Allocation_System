// Function to close the resource report
function closeResourceReport() {
    document.querySelector(".report-page").style.display = "none";
}

// Function to open the resource report
function openResourceReport() {
    // Assuming you have a placeholder for the predicted value
    let predictedValue = parseFloat(document.getElementById('predictedValue').value);
    console.log(predictedValue);

    const resourceType = document.getElementById("resource-type").value;
    const currentResources = document.getElementById("resource-quantity").value;
    console.log(currentResources);
    // Calculate the number of resources needed based on your logic
    predictedValue = parseFloat(predictedValue);
    resourcesNeeded = predictedValue - currentResources;
   console.log (typeof predictedValue)
    console.log(predictedValue)
    console.log(resourcesNeeded)
    // Display the resources needed in your report
    const reportContent = document.querySelector(".report-page");
   // reportContent.textContent = `Based on the prediction, you may need ${resourcesNeeded} ${resourceType}.`;

    // Show the report page
    const resourceReport = document.querySelector(".report-page");
    resourceReport.style.display = "block";

    // Add a class for animation (assuming you have CSS animations defined)
    resourceReport.classList.add("slide-in");
}
