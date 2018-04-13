<table width="930" border="1">
    <tr>
        <td width="50">$</td>
        <td width="50">#</td>
        <td width="200">Tag</td>
        <td>Method</td>
        <td width="300">Description</td>
    </tr>
<?php

$file_handle = fopen("../txt/6-dom-reference.txt", "rb");

while (!feof($file_handle) ) {
    $line_of_text = fgets($file_handle);
    $parts = explode(':', $line_of_text);
    echo "<tr><td height='119'>$parts[0]</td><td>$parts[1]</td><td>$parts[2]</td><td>$parts[3]</td><td>$parts[4]</td></tr>";
}
fclose($file_handle);
?>
</table>
