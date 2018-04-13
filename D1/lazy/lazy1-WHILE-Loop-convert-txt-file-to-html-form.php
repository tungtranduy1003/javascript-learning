<table width="630" border="1">
    <tr>
        <td width="100">$</td>
        <td>Header</td>
        <td width="200">Content</td>
    </tr>
<?php

$file_handle = fopen("../txt/2-array-converter.txt", "rb");

while (!feof($file_handle) ) {
    $line_of_text = fgets($file_handle);
    $parts = explode(':', $line_of_text);
    echo "<tr><td height='119'>$parts[0]</td><td>$parts[1]</td><td>$parts[2]</td></tr>";
}
fclose($file_handle);
?>
</table>
