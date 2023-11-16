<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="prediction.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Integrate</title>
  </head>
  <body>
    <nav>
      <a href="index.html" class="nav-link active">Home</a>
      <a href="graphs.html" class="nav-link">Analytics</a>
      <a href="#" class="nav-link">About</a>
      <a href="#" class="nav-link">Contact</a>
      <div class="underline"></div>
    </nav>

    <div class="page-container">
      <div class="inte-images hospital-bed"></div>
      <div class="inte-images scanner"></div>
      <h2>Integrate Facility here.</h2>
      <label for="prediction-type">Choose Prediction Type:</label>
      <div class="selection-container">

        <select id="prediction-type">
          <option value="cancer">Cancer</option>
          <option value="malaria">Malaria</option>
        </select>
        <label class="label2" for="resource-type">Choose Resource Type:</label>
        <select class="select2" id="resource-type">
          <option value="beds">Beds</option>
          <option value="machines">Cancer Machines</option>
        </select>
        <label class="label3" for="resource-quantity">Enter Quantity:</label>
        <input
          type="number"
          id="resource-quantity"
          placeholder="Enter quantity"
        />

        <button class="report-button" onclick="openResourceReport()">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            height="24"
            width="24"
          >
            <path
              fill="white"
              d="M23.15 2.587L18.21 0.210001C17.9308 0.075557 17.6167 0.031246 17.3113 0.083204C17.0058 0.135162 16.724 0.280818 16.505 0.500001L7.04499 9.13L2.92499 6.002C2.73912 5.86101 2.50976 5.78953 2.27669 5.79994C2.04363 5.81035 1.82156 5.902 1.64899 6.059L0.326993 7.261C0.223973 7.35465 0.141644 7.46878 0.0852761 7.59608C0.0289081 7.72339 -0.00025659 7.86106 -0.000350724 8.00028C-0.000444857 8.1395 0.0285336 8.27721 0.0847294 8.40459C0.140925 8.53197 0.2231 8.64621 0.325993 8.74L3.89899 12L0.325993 15.26C0.2231 15.3538 0.140925 15.468 0.0847294 15.5954C0.0285336 15.7228 -0.000444857 15.8605 -0.000350724 15.9997C-0.00025659 16.1389 0.0289081 16.2766 0.0852761 16.4039C0.141644 16.5312 0.223973 16.6454 0.326993 16.739L1.64999 17.94C1.82256 18.097 2.04463 18.1887 2.27769 18.1991C2.51076 18.2095 2.74012 18.138 2.92599 17.997L7.04599 14.869L16.506 23.499C16.7248 23.7182 17.0064 23.8639 17.3117 23.9159C17.6171 23.9679 17.931 23.9235 18.21 23.789L23.152 21.412C23.4062 21.2893 23.6207 21.0973 23.7707 20.8581C23.9207 20.619 24.0002 20.3423 24 20.06V3.939C24 3.65647 23.9203 3.37967 23.7699 3.14048C23.6195 2.90129 23.4046 2.70943 23.15 2.587ZM18.004 17.448L10.826 12L18.004 6.552V17.448Z"
            ></path>
          </svg>
          <p class="text">Get Report</p>
        </button>

        <div class="report-page">
          <p class="close-report" onclick="closeResourceReport()">Close</p>
          <p>Report Generation</p>
          <?php 
$output = shell_exec('python3 main.py');
?>
<p>Value: <?php echo $output; ?></p>
    <div class="report-content" >HELLO KEVIN</div>
  </div>

<!-- Add a hidden input to store the value for later use if needed -->
<input type="hidden" id="predictedValue" value="<?php echo trim($output); ?>">

      </div>
    </div>
    <script src="main.js"></script>
  </body>
</html>
