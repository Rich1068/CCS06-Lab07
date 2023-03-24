<html>
<head>
<meta charset="UTF-8"> 
<title>Chessboard using Pure CSS and HTML</title>

<style type="text/css">

.chessboard {
    width: 640px;
    height: 640px;
    margin: 20px;
    border: 25px solid #333;
}
.black {
    float: left;
    width: 80px;
    height: 80px;
    background-color: #999;
      font-size:50px;
    text-align:center;
    display: table-cell;
    vertical-align:middle;
}
.white {
    float: left;
    width: 80px;
    height: 80px;
    background-color: #fff;
    font-size:50px;
    text-align:center;
    display: table-cell;
    vertical-align:middle;
}

</style>

</head>
<?php
$pieces = [
    'black' => [
   	 'king' => '&#9818',
   	 'queen' => '&#9819',
   	 'rook' => '&#9820',
   	 'bishop' => '&#9821',
   	 'knight' => '&#9822',
   	 'pawn' => '&#9823'
    ],
    'white' => [
   	 'king' => '&#9812',
   	 'queen' => '&#9813',
   	 'rook' => '&#9814',
   	 'bishop' => '&#9815',
   	 'knight' => '&#9816',
   	 'pawn' => '&#9817'
    ]
];
?>

<body>

<div class="chessboard">
<!-- 1st -->
<div class="white"><?php echo $pieces['black']['rook']; ?></div>
<div class="black"><?php echo $pieces['black']['knight']; ?></div>
<div class="white"><?php echo $pieces['black']['bishop']; ?></div>
<div class="black"><?php echo $pieces['black']['queen']; ?></div>
<div class="white"><?php echo $pieces['black']['king']; ?></div>
<div class="black"><?php echo $pieces['black']['bishop']; ?></div>
<div class="white"><?php echo $pieces['black']['knight']; ?></div>
<div class="black"><?php echo $pieces['black']['rook']; ?></div>
<!-- 2nd -->
<div class="black"><?php echo $pieces['black']['pawn']; ?></div>
<div class="white"><?php echo $pieces['black']['pawn']; ?></div>
<div class="black"><?php echo $pieces['black']['pawn']; ?></div>
<div class="white"><?php echo $pieces['black']['pawn']; ?></div>
<div class="black"><?php echo $pieces['black']['pawn']; ?></div>
<div class="white"><?php echo $pieces['black']['pawn']; ?></div>
<div class="black"><?php echo $pieces['black']['pawn']; ?></div>
<div class="white"><?php echo $pieces['black']['pawn']; ?></div>
<!-- 3th -->
<div class="white"></div>
<div class="black"></div>
<div class="white"></div>
<div class="black"></div>
<div class="white"></div>
<div class="black"></div>
<div class="white"></div>
<div class="black"></div>
<!-- 4st -->
<div class="black"></div>
<div class="white"></div>
<div class="black"></div>
<div class="white"></div>
<div class="black"></div>
<div class="white"></div>
<div class="black"></div>
<div class="white"></div>
<!-- 5th -->
<div class="white"></div>
<div class="black"></div>
<div class="white"></div>
<div class="black"></div>
<div class="white"></div>
<div class="black"></div>
<div class="white"></div>
<div class="black"></div>
<!-- 6th -->
<div class="black"></div>
<div class="white"></div>
<div class="black"></div>
<div class="white"></div>
<div class="black"></div>
<div class="white"></div>
<div class="black"></div>
<div class="white"></div>
<!-- 7th -->
<div class="white"><?php echo $pieces['white']['pawn']; ?></div>
<div class="black"><?php echo $pieces['white']['pawn']; ?></div>
<div class="white"><?php echo $pieces['white']['pawn']; ?></div>
<div class="black"><?php echo $pieces['white']['pawn']; ?></div>
<div class="white"><?php echo $pieces['white']['pawn']; ?></div>
<div class="black"><?php echo $pieces['white']['pawn']; ?></div>
<div class="white"><?php echo $pieces['white']['pawn']; ?></div>
<div class="black"><?php echo $pieces['white']['pawn']; ?></div>
<!-- 8th -->
<div class="black"><?php echo $pieces['white']['rook']; ?></div>
<div class="white"><?php echo $pieces['white']['knight']; ?></div>
<div class="black"><?php echo $pieces['white']['bishop']; ?></div>
<div class="white"><?php echo $pieces['white']['queen']; ?></div>
<div class="black"><?php echo $pieces['white']['king']; ?></div>
<div class="white"><?php echo $pieces['white']['bishop']; ?></div>
<div class="black"><?php echo $pieces['white']['knight']; ?></div>
<div class="white"><?php echo $pieces['white']['rook']; ?></div>
</div>
</body>
</html>
