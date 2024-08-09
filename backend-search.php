<?php
// Establish database connection
$link = mysqli_connect("localhost", "root", "", "userdb");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Check if search term is provided via AJAX request
if(isset($_GET["term"])){
    // Prepare SQL statement to search for records matching the provided term
    $sql = "SELECT * FROM Skills WHERE name LIKE ?";
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_term);
        
        // Set parameters
        $param_term = '%' . $_GET["term"] . '%';
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Store result
            $result = mysqli_stmt_get_result($stmt);
            
            // Check if there are any matching rows
            if(mysqli_num_rows($result) > 0){
                // Fetch result rows as an associative array
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    // Check if the suggestion is "Web devlopment"
                    if($row["name"] == "Web-Devlopment"){
                        echo "<a href='./web-dev.php'>" . htmlspecialchars($row["name"]) . "</a>";
                    } else {
                        echo "<a href='./web-dev.php>" . htmlspecialchars($row["name"]) . "</a>"; // Output search results as clickable links
                    }
                }
            } else{
                echo "<p>No matches found</p>";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }
    // Close statement
    mysqli_stmt_close($stmt);
}

// Close connection
mysqli_close($link);
?>