<?php
$ilceler=array(
    '06'=>array(
        'Mamak',
        'Kızılay',
        'Çankaya'
    ),
    '34'=>array(
        'Beşiktaş',
        'Kadıköy',
        'Üsküdar'
    )
);

$ilKodu=$_POST['ilKodu'];

if($ilKodu=='06' || $ilKodu=='34')
    $sonucIlceler=$ilceler[$ilKodu];
else
    exit('İl bulunamadı');

foreach ($sonucIlceler as $value) {
    echo '<option>'.$value.'</option>';
}