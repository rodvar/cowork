
        var i = 0
        function clickLink() {
            i++;
            if (i == 1) {
                document.getElementById("clicks").innerHTML = i;
            }
            else
            {
                document.getElementById("clicks").innerHTML = i;
            }
        }
        function Reset() {
            i = 0;
            document.getElementById("clicks").innerHTML = i;
        }
   