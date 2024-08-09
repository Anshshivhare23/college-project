
            document.getElementById("downloadButton").addEventListener("click", function () 
            {
                // Create an anchor element
                var downloadAnchor = document.createElement('a');
    
                // Set the href attribute to the path of your .docx file
                downloadAnchor.href = './Report.docx';
    
                // Set the download attribute to specify the default filename
                downloadAnchor.download = 'Report.docx';
    
                // Append the anchor element to the body
                document.body.appendChild(downloadAnchor);
    
                // Trigger a click event on the anchor element
                downloadAnchor.click();
    
                // Clean up: remove the anchor element
                document.body.removeChild(downloadAnchor);
            });
    