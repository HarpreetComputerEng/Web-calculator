<?php include 'Header.php'; ?>

<?php
// Helper function to print var_dump in one line
function varDumpOneLine($var) {
    ob_start();
    var_dump($var);
    $output = ob_get_clean();
    return preg_replace('/\s+/', ' ', $output);
}
?>

<div class="container">
    <div class="border p-3">

        <!-- No Key Array -->
        <p><strong><span style="color:blue;">No Key Array - Output using var_dump</span></strong></p>
        <p><?= varDumpOneLine([10, 20, 30, 40]); ?></p>

        <p><strong><span style="color:blue;">No Key Array - Output using foreach</span></strong></p>
        <?php
        $noKeyArray = [10, 20, 30, 40];
        foreach ($noKeyArray as $key => $value) {
            echo "key: $key, value: $value, key data type: " . gettype($key) . "<br>";
        }
        ?>
        <br>

        <!-- String Key Array -->
        <p><strong><span style="color:blue;">String Key Array - Output using var_dump</span></strong></p>
        <?php
        $stringKeyArray = ["key1" => "item1", "key2" => "item2"];
        ?>
        <p><?= varDumpOneLine($stringKeyArray); ?></p>

        <p><strong><span style="color:blue;">String Key Array - Output using foreach</span></strong></p>
        <?php
        foreach ($stringKeyArray as $key => $value) {
            echo "key: $key, value: $value, key data type: " . gettype($key) . "<br>";
        }
        ?>
        <br>

        <!-- Integer Key Array -->
        <p><strong><span style="color:blue;">Integer Key Array - Output using var_dump</span></strong></p>
        <?php
        $intKeyArray = [0 => "item1", 1 => "item2", 2 => "item3"];
        ?>
        <p><?= varDumpOneLine($intKeyArray); ?></p>

        <p><strong><span style="color:blue;">Integer Key Array - Output using foreach</span></strong></p>
        <?php
        foreach ($intKeyArray as $key => $value) {
            echo "key: $key, value: $value, key data type: " . gettype($key) . "<br>";
        }
        ?>
        <br>

        <!-- Mixed Key Array -->
        <p><strong><span style="color:blue;">Mixed Key Array - Output using var_dump</span></strong></p>
        <?php
        $mixedKeyArray = [0 => "item1", "two" => "item2", 3 => "item3", "four" => "item4"];
        ?>
        <p><?= varDumpOneLine($mixedKeyArray); ?></p>

        <p><strong><span style="color:blue;">Mixed Key Array - Output using foreach</span></strong></p>
        <?php
        foreach ($mixedKeyArray as $key => $value) {
            echo "key: $key, value: $value, key data type: " . gettype($key) . "<br>";
        }
        ?>
        <br>

        <!-- Multi-Dimensional Array -->
        <p><strong><span style="color:blue;">Multi-Dimensional Array - Output using var_dump</span></strong></p>
        <?php
        $multiDimensionArray = [
            "group1" => [1, 2, 3],
            "group2" => [4, 5, 6]
        ];
        ?>
        <p><p><?= varDumpOneLine($multiDimensionArray); ?></p>

        <p><strong><span style="color:blue;">Multi-Dimensional Array - Output using foreach</span></strong></p>
        <?php
        foreach ($multiDimensionArray as $key => $group) {
            echo "key: $key, key data type: " . gettype($key) . "<br>";
            foreach ($group as $index => $value) {
                echo "&nbsp;&nbsp;&nbsp;&nbsp;index: $index, value: $value, key data type: " . gettype($index) . "<br>";
            }
        }
        ?>
    </div>
</div>

<?php include 'Footer.php'; ?>
