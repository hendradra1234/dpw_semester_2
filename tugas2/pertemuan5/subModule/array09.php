<h3>Program 5.9</h3>
<?php 
    $transport = array('bike', 'foot', 'car', 'plane');
    echo "<pre>";
    print_r ($transport);
    echo "</pre>";
    $mode = current($transport);
    echo $mode."<br>";
    $mode = next($transport);
    echo $mode."<br>";
    $mode = current($transport);
    echo $mode."<br>";
    $mode = prev($transport);
    echo $mode."<br>";
    $mode = end($transport);
    echo $mode."<br>";
    $mode = current($transport);
    echo $mode."<br>";
?>