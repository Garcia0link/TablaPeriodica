<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla periodica</title>

    <link rel="stylesheet" href="Assets\Css.css" >
    <link rel="stylesheet" href="Assets\css\bootstrap.min.css">
    <?php

    $Bloque1 = [
        1 => ['simbolo'=>'H', 'grupo'=>'otros no metales'],
        2 => ['simbolo'=>'He', 'grupo'=>'gases nobles'],
        3 => ['simbolo'=>'Li', 'grupo'=>'alcalinos'],
        4 => ['simbolo'=>'Be', 'grupo'=>'alcalinoterreos'],
        5 => ['simbolo'=>'B','grupo'=>'metaloides'],
        6 => ['simbolo'=>'C','grupo'=>'otros no metales'],
        7 => ['simbolo'=>'N', 'grupo'=>'otros no metales'],
        8 => ['simbolo'=>'O', 'grupo'=>'otros no metales'],
        9 => ['simbolo'=>'F','grupo'=>'halogenos'],
        10 => ['simbolo'=>'Ne', 'grupo'=>'gases nobles'],
        11 => ['simbolo'=>'Na','grupo'=>'alcalinos'],
        12 => ['simbolo'=>'Mg','grupo'=>'alcalinoterreos'],
        13 => ['simbolo'=>'Al', 'grupo'=>'otros metales'],
        14 => ['simbolo'=>'Si','grupo'=>'metaloides'],
        15 => ['simbolo'=>'P', 'grupo'=>'otros no metales'],
        16 => ['simbolo'=>'S','grupo'=>'otros no metales'],
        17 => ['simbolo'=>'Cl','grupo'=>'halogenos'],
        18 => ['simbolo'=>'Ar','grupo'=>'gases nobles'],
        19 => ['simbolo'=>'K','grupo'=>'alcalinos'],
        20 => ['simbolo'=>'Ca','grupo'=>'alcalinoterreos'],
        21 => ['simbolo'=>'Sc','grupo'=>'metales de transicion'],
        22 => ['simbolo'=>'Ti', 'grupo'=>'metales de transicion'],
        23 => ['simbolo'=>'V','grupo'=>'metales de transicion'],
        24 => ['simbolo'=>'Cr', 'grupo'=>'metales de transicion'],
        25 => ['simbolo'=>'Mn','grupo'=>'metales de transicion'],
        26 => ['simbolo'=>'Fe', 'grupo'=>'metales de transicion'],
        27 => ['simbolo'=>'Co','grupo'=>'metales de transicion'],
        28 => ['simbolo'=>'Ni','grupo'=>'metales de transicion'],
        29 => ['simbolo'=>'Cu', 'grupo'=>'metales de transicion'],
        30 => ['simbolo'=>'Zn','grupo'=>'metales de transicion'],
        31 => ['simbolo'=>'Ga','grupo'=>'otros metales'],
        32 => ['simbolo'=>'Ge', 'grupo'=>'metaloides'],
        33 => ['simbolo'=>'As','grupo'=>'metaloides'],
        34 => ['simbolo'=>'Se', 'grupo'=>'otros no metales'],
        35 => ['simbolo'=>'Br', 'grupo'=>'halogenos'],
        36 => ['simbolo'=>'kr','grupo'=>'gases nobles'],
        37 => ['simbolo'=>'Rb', 'grupo'=>'alcalinos'],
        38 => ['simbolo'=>'Sr','grupo'=>'alcalinoterreos'],
        39 => ['simbolo'=>'Y', 'grupo'=>'metales de transicion'],
        40 => ['simbolo'=>'Zr', 'grupo'=>'metales de transicion'],
        41 => ['simbolo'=>'Nb','grupo'=>'metales de transicion'],
        42 => ['simbolo'=>'Mo','grupo'=>'metales de transicion'],
        43 => ['simbolo'=>'Tc','grupo'=>'metales de transicion'],
        44 => ['simbolo'=>'Ru', 'grupo'=>'metales de transicion'],
        45 => ['simbolo'=>'Rh','grupo'=>'metales de transicion'],
        46 => ['simbolo'=>'Pd','grupo'=>'metales de transicion'],
        47 => ['simbolo'=>'Ag','grupo'=>'metales de transicion'],
        48 => ['simbolo'=>'Cd','grupo'=>'metales de transicion'],
        49 => ['simbolo'=>'In', 'grupo'=>'otros metales'],
        50 => ['simbolo'=>'Sn','grupo'=>'otros metales'],
        51 => ['simbolo'=>'Sb', 'grupo'=>'metaloides'],
        52 => ['simbolo'=>'Te', 'grupo'=>'metaloides'],
        53 => ['simbolo'=>'I', 'grupo'=>'halogenos'],
        54 => ['simbolo'=>'Xe', 'grupo'=>'gases nobles'],
        55 => ['simbolo'=>'Cs','grupo'=>'alcalinos'],
        56 => ['simbolo'=>'Ba','grupo'=>'alcalinoterreos'],
        57 => ['simbolo'=>'Lac', 'grupo'=>'lantanidos'], #Seccion para los lantanidos
        72 => ['simbolo'=>'Hf', 'grupo'=>'metales de transicion'],
        73 => ['simbolo'=>'Ta', 'grupo'=>'metales de transicion'],
        74 => ['simbolo'=>'W', 'grupo'=>'metales de transicion'],
        75 => ['simbolo'=>'Re','grupo'=>'metales de transicion'],
        76 => ['simbolo'=>'Os','grupo'=>'metales de transicion'],
        77 => ['simbolo'=>'Ir', 'grupo'=>'metales de transicion'],
        78 => ['simbolo'=>'Pt', 'grupo'=>'metales de transicion'],
        79 => ['simbolo'=>'Au', 'grupo'=>'metales de transicion'],
        80 => ['simbolo'=>'Hg', 'grupo'=>'metales de transicion'],
        81 => ['simbolo'=>'Tl', 'grupo'=>'otros metales'],
        82 => ['simbolo'=>'Pb', 'grupo'=>'otros metales'],
        83 => ['simbolo'=>'Bi', 'grupo'=>'otros metales'],
        84 => ['simbolo'=>'Po', 'grupo'=>'metaloides'],
        85 => ['simbolo'=>'At','grupo'=>'halogenos'],
        86 => ['simbolo'=>'Rn', 'grupo'=>'gases nobles'],
        87 => ['simbolo'=>'Fr', 'grupo'=>'alcalinos'],
        88 => ['simbolo'=>'Ra','grupo'=>'alcalinoterreos'],
        89 => ['simbolo'=>'Act', 'grupo'=>'actinidos'], #Seccion para los actinidos
        104 => ['simbolo'=>'Rf', 'grupo'=>'metales de transicion'],
        105 => ['simbolo'=>'Db', 'grupo'=>'metales de transicion'],
        106 => ['simbolo'=>'Sg', 'grupo'=>'metales de transicion'],
        107 => ['simbolo'=>'Bh', 'grupo'=>'metales de transicion'],
        108 => ['simbolo'=>'Hs', 'grupo'=>'metales de transicion'],
        109 => ['simbolo'=>'Mt', 'grupo'=>'metales de transicion'],
        110 => ['simbolo'=>'Ds', 'grupo'=>'metales de transicion'],
        111 => ['simbolo'=>'Rg', 'grupo'=>'metales de transicion'],
        112 => ['simbolo'=>'Cn', 'grupo'=>'metales de transicion'],
        113 => ['simbolo'=>'Nh', 'grupo'=>'otros metales'],
        114 => ['simbolo'=>'Fl', 'grupo'=>'otros metales'],
        115 => ['simbolo'=>'Mc', 'grupo'=>'otros metales'],
        116 => ['simbolo'=>'Lv', 'grupo'=>'otros metales'],
        117 => ['simbolo'=>'Ts', 'grupo'=>'halogenos'],
        118 => ['simbolo'=>'Og', 'grupo'=>'gases nobles']
    ];

    $elemGrupoF = [
        57 => ['simbolo'=>'La', 'grupo'=>'lantanidos'],
        58 => ['simbolo'=>'Ce', 'grupo'=>'lantanidos'],
        59 => ['simbolo'=>'Pr', 'grupo'=>'lantanidos'],
        60 => ['simbolo'=>'Nd', 'grupo'=>'lantanidos'],
        61 => ['simbolo'=>'Pm','grupo'=>'lantanidos'],
        62 => ['simbolo'=>'Sm', 'grupo'=>'lantanidos'],
        63 => ['simbolo'=>'Eu', 'grupo'=>'lantanidos'],
        64 => ['simbolo'=>'Gd', 'grupo'=>'lantanidos'],
        65 => ['simbolo'=>'Tb', 'grupo'=>'lantanidos'],
        66 => ['simbolo'=>'Dy', 'grupo'=>'lantanidos'],
        67 => ['simbolo'=>'Ho', 'grupo'=>'lantanidos'],
        68 => ['simbolo'=>'Er', 'grupo'=>'lantanidos'],
        69 => ['simbolo'=>'Tm','grupo'=>'lantanidos'],
        70 => ['simbolo'=>'Yb', 'grupo'=>'lantanidos'],
        71 => ['simbolo'=>'Lu', 'grupo'=>'lantanidos'],
        89 => ['simbolo'=>'Ac', 'grupo'=>'actinidos'],
        90 => ['simbolo'=>'Th', 'grupo'=>'actinidos'],
        91 => ['simbolo'=>'Pa', 'grupo'=>'actinidos'],
        92 => ['simbolo'=>'U', 'grupo'=>'actinidos'],
        93 => ['simbolo'=>'Np', 'grupo'=>'actinidos'],
        94 => ['simbolo'=>'Pu', 'grupo'=>'actinidos'],
        95 => ['simbolo'=>'Am','grupo'=>'actinidos'],
        96 => ['simbolo'=>'Cm', 'grupo'=>'actinidos'],
        97 => ['simbolo'=>'Bk', 'grupo'=>'actinidos'],
        98 => ['simbolo'=>'Cf', 'grupo'=>'actinidos'],
        99 => ['simbolo'=>'Es', 'grupo'=>'actinidos'],
        100 => ['simbolo'=>'Fm', 'grupo'=>'actinidos'],
        101 => ['simbolo'=>'Md', 'grupo'=>'actinidos'],
        102 => ['simbolo'=>'No','grupo'=>'actinidos'],
        103 => ['simbolo'=>'Lr','grupo'=>'actinidos'],
    ];

    $grupos = [
        'alcalinos' => '#A99ABD',
        'alcalinoterreos' => '#C085D1',
        'metales de transicion' => '#EDB632',
        'lantanidos' => '#DE7710',
        'actinidos' => '#E9967A',
        'otros metales' => '#FAF430',
        'metaloides' => '#B8C54E',
        'otros no metales' => '#79B325',
        'halogenos' => '#83C7D0',
        'gases nobles' => '#20E1FB',
    ];
    ?>

</head>
<body>
     
    <h1 class="text-center text-primary" >Tabla periodica 2018-6725</h1>
    


  
    <?php  foreach ($Bloque1 as $Bloq): ?> <!-- inicio foreach 1  -->
    
      <?php $color = $grupos[$Bloq['grupo']] ?>
       
      <div <?php echo"style='background-color: {$color};'"?> class="Cuadro"> <?php echo "<span> {$Bloq["simbolo"]} </span>"  ?> </div> <!-- elemtos  -->

        <?php if ($Bloq["simbolo"] === "H")  { ?>

         <div class="EspaciosEnBlanco"></div>

        <?php } ?> 

        <?php if ($Bloq["simbolo"] === "Be")  { ?>

<div class="EspaciosEnBlanco2"></div>

<?php } ?> 

<?php if ($Bloq["simbolo"] === "Mg")  { ?>

<div class="EspaciosEnBlanco2"></div>

<?php } ?> 
    
         
         <?php endforeach  ?> <!-- final del foreach grupo2  -->

</br>
</br>
         
    <?php  foreach ( $elemGrupoF as $elemGrupoF): ?> <!-- inicio foreach 1  -->
    
    <?php $color = $grupos[$elemGrupoF['grupo']] ?>
     
    <div <?php echo"style='background-color: {$color};'"?> class="Cuadro"> <?php echo "<span> {$elemGrupoF["simbolo"]} </span>"  ?> </div> <!-- elemtos  -->

    
       
       <?php endforeach  ?> <!-- final del foreach grupo1  -->

         

      
 
    
</body>

<script src="assest\js\bootstrap.min.js">
        

    </script>

</html>