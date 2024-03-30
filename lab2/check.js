function check_number() {
            var secretNumber = parseInt(document.getElementById('secretNumber').value);
            console.log("secretNumber:", secretNumber);
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var response = xhr.responseText.trim(); 
                    console.log("Response from server:", response);
                    if (response == 'correct') {
                        alert('ПРАВИЛЬНО!');
                        // location.reload(); 
                    } else if (response == 'big') {
                        alert('Загадане число більше');
                    } else if (response == 'small') {
                        alert('Загадане число менше');
                    } else {
                        alert('Не відгадали');
                        }
                    }
            };
            xhr.open('POST', 'check_numb.php', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.send('secretNumber=' + secretNumber);
        }
    
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('guessForm').addEventListener('submit', function(event) {
                event.preventDefault(); 
                check_number(); 
            });
        });