<!DOCTYPE php>
<html>
    <link rel= "stylesheet" href= "css/rekenmachine.css">

<body>
    <div class="container">
        <a class="terugknop" href="mijnprojecten.php">terug naar projecten</a></li>
        <div class="calculator">
            <div class="calculator__display">0</div>

            <div class="calculator__keys">
                <button class="key--operator" data-action="add">+</button>
                <button class="key--operator" data-action="subtract">-</button>
                <button class="key--operator" data-action="multiply">&times;</button>
                <button class="key--operator" data-action="divide">÷</button>
                <button>7</button>
                <button>8</button>
                <button>9</button>
                <button>4</button>
                <button>5</button>
                <button>6</button>
                <button>1</button>
                <button>2</button>
                <button>3</button>
                <button>0</button>
                <button data-action="decimal">.</button>
                <button data-action="clear">AC</button>
                <button class="key--equal" data-action="calculate">=</button>
            </div>
        </div>
    </div>




</body>
<script src="js/rekenmachine.js"></script>


</html>