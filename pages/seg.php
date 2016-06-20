<link rel="stylesheet"  type="text/css"     href="assets/css/bootstrap.min.css">
<div class="container" style="margin-top: 50px;">
    <div class="col-md-12">
        <hr>
    </div>
<div class="col-md-6">
<table class="table table-hover">

    <thead>
        <tr>
            <th>Segment Number</th>
            <th>Segment Degrees</th>
            <th>Segment Centre</th>
            <th>Segment Colour</th>
        </tr>
    </thead>
    <tbody>
<?php
    // used to work out degrees per segment

$segments = array(
    [0, 2.73 , "gold"],
    [1, 8.18 , "blue"],
    [2, 13.64 , "blue"],
    [3, 19.09 , "blue"],
    [4, 24.55 , "red"],
    [5, 30.00 , "red"],
    [6, 35.45 , "red"],
    [7, 40.91 , "grey"],
    [8, 46.36 , "grey"],
    [9, 51.82 , "grey"],
    [10, 57.27 , "red"],
    [11, 62.73 , "red"],
    [12, 68.18 , "red"],
    [13, 73.64 , "red"],
    [14, 79.09 , "red"],
    [15, 84.55 , "blue"],
    [16, 90.00 , "blue"],
    [17, 95.45 , "blue"],
    [18, 100.91 , "blue"],
    [19, 106.36 , "blue"],
    [20, 111.82 , "red"],
    [21, 117.27 , "red"],
    [22, 122.73 , "red"],
    [23, 128.18 , "red"],
    [24, 133.64 , "grey"],
    [25, 139.09 , "grey"],
    [26, 144.55 , "grey"],
    [27, 150.00 , "grey"],
    [28, 155.45 , "red"],
    [29, 160.91 , "red"],
    [30, 166.36 , "red"],
    [31, 171.82 , "blue"],
    [32, 177.27 , "blue"],
    [33, 182.73 , "grey"],
    [34, 188.18 , "blue"],
    [35, 193.64 , "blue"],
    [36, 199.09 , "red"],
    [37, 204.55 , "red"],
    [38, 210.00 , "red"],
    [39, 215.45 , "grey"],
    [40, 220.91 , "grey"],
    [41, 226.36 , "grey"],
    [42, 231.82 , "grey"],
    [43, 237.27 , "red"],
    [44, 242.73 , "red"],
    [45, 248.18 , "red"],
    [46, 253.64 , "red"],
    [47, 259.09 , "blue"],
    [48, 264.55 , "blue"],
    [49, 270.00 , "blue"],
    [50, 275.45 , "blue"],
    [51, 280.91 , "blue"],
    [52, 286.36 , "red"],
    [53, 291.82 , "red"],
    [54, 297.27 , "red"],
    [55, 302.73 , "red"],
    [56, 308.18 , "red"],
    [57, 313.64 , "grey"],
    [58, 319.09 , "grey"],
    [59, 324.55 , "grey"],
    [60, 330.00 , "red"],
    [61, 335.45 , "red"],
    [62, 340.91 , "red"],
    [63, 346.36 , "blue"],
    [64, 351.82 , "blue"],
    [65, 357.27 , "blue"]
);

    $i = 0;
    while ($i < count($segments)) {


        //echo '[' . $i . ", " . number_format($currentSegment, 2) . "]," . "<br>";
        echo '
        
    <tr>
        <th scope="row">' . $i . '</th>
        <td>' . number_format($segments[$i][1] - 5.454545, 2) . ' - ' . number_format($segments[$i][1], 2) . '</td>
        <td>' . number_format($segments[$i][1] - 2.727272, 2) . '</td>
        <td style="background:' . $segments[$i][2] . '">' . $segments[$i][2] . '</td>
    </tr>';

        $currentSegment = $currentSegment + $segment;
        $i++;
    }


?>

    </tbody>
</table>
</div>
    <div class="col-md-5">
        <h4><b>PHP array:</b></h4>
           segments[Segment Number, End of Segment, Segment Colour]
        <pre>$segments = array(
    [0, 2.73 , "gold"],
    [1, 8.18 , "blue"],
    [2, 13.64 , "blue"],
    [3, 19.09 , "blue"],
    [4, 24.55 , "red"],
    [5, 30.00 , "red"],
    [6, 35.45 , "red"],
    [7, 40.91 , "grey"],
    [8, 46.36 , "grey"],
    [9, 51.82 , "grey"],
    [10, 57.27 , "red"],
    [11, 62.73 , "red"],
    [12, 68.18 , "red"],
    [13, 73.64 , "red"],
    [14, 79.09 , "red"],
    [15, 84.55 , "blue"],
    [16, 90.00 , "blue"],
    [17, 95.45 , "blue"],
    [18, 100.91 , "blue"],
    [19, 106.36 , "blue"],
    [20, 111.82 , "red"],
    [21, 117.27 , "red"],
    [22, 122.73 , "red"],
    [23, 128.18 , "red"],
    [24, 133.64 , "grey"],
    [25, 139.09 , "grey"],
    [26, 144.55 , "grey"],
    [27, 150.00 , "grey"],
    [28, 155.45 , "red"],
    [29, 160.91 , "red"],
    [30, 166.36 , "red"],
    [31, 171.82 , "blue"],
    [32, 177.27 , "blue"],
    [33, 182.73 , "grey"],
    [34, 188.18 , "blue"],
    [35, 193.64 , "blue"],
    [36, 199.09 , "red"],
    [37, 204.55 , "red"],
    [38, 210.00 , "red"],
    [39, 215.45 , "grey"],
    [40, 220.91 , "grey"],
    [41, 226.36 , "grey"],
    [42, 231.82 , "grey"],
    [43, 237.27 , "red"],
    [44, 242.73 , "red"],
    [45, 248.18 , "red"],
    [46, 253.64 , "red"],
    [47, 259.09 , "blue"],
    [48, 264.55 , "blue"],
    [49, 270.00 , "blue"],
    [50, 275.45 , "blue"],
    [51, 280.91 , "blue"],
    [52, 286.36 , "red"],
    [53, 291.82 , "red"],
    [54, 297.27 , "red"],
    [55, 302.73 , "red"],
    [56, 308.18 , "red"],
    [57, 313.64 , "grey"],
    [58, 319.09 , "grey"],
    [59, 324.55 , "grey"],
    [60, 330.00 , "red"],
    [61, 335.45 , "red"],
    [62, 340.91 , "red"],
    [63, 346.36 , "blue"],
    [64, 351.82 , "blue"],
    [65, 357.27 , "blue"]
);
        </pre>
    </div>
</div>