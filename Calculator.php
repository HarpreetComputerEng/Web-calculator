<?php include('Header.php'); ?>

<div class="container">
    <h2>PHP Calculator</h2>

    <form method="post" class="form-inline mb-3">
        <input type="number" name="num1" class="form-control mr-2" required placeholder="First number"
               value="<?php echo isset($_POST['num1']) ? $_POST['num1'] : ''; ?>">

        <select name="operator" class="form-control mr-2">
            <option value="+" <?php if (isset($_POST['operator']) && $_POST['operator'] == '+') echo 'selected'; ?>>+</option>
            <option value="-" <?php if (isset($_POST['operator']) && $_POST['operator'] == '-') echo 'selected'; ?>>-</option>
            <option value="*" <?php if (isset($_POST['operator']) && $_POST['operator'] == '*') echo 'selected'; ?>>×</option>
            <option value="/" <?php if (isset($_POST['operator']) && $_POST['operator'] == '/') echo 'selected'; ?>>÷</option>
            <option value="^" <?php if (isset($_POST['operator']) && $_POST['operator'] == '^') echo 'selected'; ?>>^</option>
        </select>

        <input type="number" name="num2" class="form-control mr-2" required placeholder="Second number"
               value="<?php echo isset($_POST['num2']) ? $_POST['num2'] : ''; ?>">

        <button type="submit" name="submit" class="btn btn-primary mr-2">=</button>

        <?php
        $resultDisplay = '';
        if (isset($_POST['submit'])) {
            $a = $_POST['num1'];
            $b = $_POST['num2'];
            $op = $_POST['operator'];

            function isPrime($num) {
                if ($num < 2) return false;
                for ($i = 2; $i * $i <= $num; $i++) {
                    if ($num % $i == 0) return false;
                }
                return true;
            }

            switch ($op) {
                case '+': $result = $a + $b; break;
                case '-': $result = $a - $b; break;
                case '*': $result = $a * $b; break;
                case '/': $result = $b != 0 ? $a / $b : 'Undefined'; break;
                case '^': $result = pow($a, $b); break;
                default: $result = 'Invalid';
            }

            $resultDisplay = is_numeric($result) ? $result : $result;
        }
        ?>

        <input type="text" class="form-control" readonly
               value="<?php echo isset($resultDisplay) ? $resultDisplay : ''; ?>">
    </form>

    <?php if (isset($result) && is_numeric($result)): ?>
        <div class="alert alert-info">
            <strong>Even/Odd:</strong> <?php echo ($result % 2 == 0) ? 'Even' : 'Odd'; ?><br>
            <strong>Prime:</strong> <?php echo isPrime($result) ? 'Yes' : 'No'; ?>
        </div>
    <?php elseif (isset($result) && !is_numeric($result)): ?>
        <div class="alert alert-danger"><strong><?php echo $result; ?></strong></div>
    <?php endif; ?>

    <?php include('Footer.php'); ?>
</div>
