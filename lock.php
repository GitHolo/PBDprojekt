<!-- SECRET LOCKPICKING GAMEEEEEEEEEE!!! -->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Combination Lock</title>
<style>
    body {
        font-family: Arial, sans-serif;
        text-align: center;
    }
    .container {
        display: inline-block;
        vertical-align: top;
        margin: 20px;
    }
    .number {
        font-size: 24px;
        margin: 10px;
    }
    .locked {
        color: red;
    }
    .unlocked {
        color: green;
    }
</style>
</head>
<body>

<div class="container">
    <button onclick="changeNumber(1, 'up')">▲</button><br>
    <span id="number1" class="number">0</span><br>
    <button onclick="changeNumber(1, 'down')">▼</button>
</div>

<div class="container">
    <button onclick="changeNumber(2, 'up')">▲</button><br>
    <span id="number2" class="number">0</span><br>
    <button onclick="changeNumber(2, 'down')">▼</button>
</div>
<div class="container">
    <button onclick="changeNumber(3, 'up')">▲</button><br>
    <span id="number3" class="number">0</span><br>
    <button onclick="changeNumber(3, 'down')">▼</button>
</div>
<div class="container">
    <button onclick="changeNumber(4, 'up')">▲</button><br>
    <span id="number4" class="number">0</span><br>
    <button onclick="changeNumber(4, 'down')">▼</button>
</div>
<div class="container">
    <button onclick="changeNumber(5, 'up')">▲</button><br>
    <span id="number5" class="number">0</span><br>
    <button onclick="changeNumber(5, 'down')">▼</button>
</div>

<div class="container">
    <span id="combinedNumber" class="number locked">LOCKED</span><br>
    <label>Combination Status</label>
</div>
<div class="container">
    <div class="container">
        <button onclick="autoPress()">Auto</button><br>
        <label>Auto Button</label>
    </div>

    <div class="container">
        <button onclick="autoPress2()">Auto2</button><br>
        <label>Auto Button2</label>
    </div>
</div>
<script>
    var targetCombination = Math.floor(Math.random() * 100000);
    var combinationString = targetCombination.toString();

    var digits = [];

    for (var i = 0; i < combinationString.length; i++) {
        digits.push(parseInt(combinationString.charAt(i)));
    }

    console.log(digits);

    console.log("Target Combination:", targetCombination);

    function changeNumber(numberId, direction) {
        var numberElement = document.getElementById("number" + numberId);
        var currentValue = parseInt(numberElement.innerText);

        if (direction === 'up') {
            if (currentValue < 9) {
                numberElement.innerText = currentValue + 1;
            } else {
                numberElement.innerText = 0;
                if (numberId !== 1) {
                    changeNumber(numberId - 1, 'up');
                }
            }
        } else if (direction === 'down') {
            if (currentValue > 0) {
                numberElement.innerText = currentValue - 1;
            } else {
                numberElement.innerText = 9;
                if (numberId !== 1) {
                    changeNumber(numberId - 1, 'down');
                }
            }
        }

        updateCombinedNumber();
    }

    function updateCombinedNumber() {
        var number1 = parseInt(document.getElementById("number1").innerText);
        var number2 = parseInt(document.getElementById("number2").innerText);
        var number3 = parseInt(document.getElementById("number3").innerText);
        var number4 = parseInt(document.getElementById("number4").innerText);
        var number5 = parseInt(document.getElementById("number5").innerText);
        var combinedNumber = document.getElementById("combinedNumber");
        var result = number1 * 10000 + number2 * 1000 + number3* 100 + number4 * 10 + number5;
        if (result === targetCombination) {
            combinedNumber.innerText = 'UNLOCKED';
            combinedNumber.classList.remove('locked');
            combinedNumber.classList.add('unlocked');
        } else {
            combinedNumber.innerText = 'LOCKED';
            combinedNumber.classList.remove('unlocked');
            combinedNumber.classList.add('locked');
        }
    }

    function autoPress() {

        if (document.getElementById("combinedNumber").innerText === 'LOCKED') {
            changeNumber(5, 'up');
            setTimeout(autoPress);
        }
    }
    function autoPress2(){
        while(document.getElementById("combinedNumber").innerText === 'LOCKED') {
            
        }
    }

    updateCombinedNumber();
</script>

</body>
</html>
